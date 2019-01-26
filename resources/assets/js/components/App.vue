<template>
    <div >
        <header-component></header-component>        
         <router-view></router-view>
        <footer-component></footer-component>
    </div>     
    <!-- Main container -->


<!--    <div>
        <div id="toolbar">
           
                <img class="icon" src="/images/logo.png">
                <h1>vuebnb</h1>
          
            <ul class="links">
                <li v-if="$store.state.auth">
                    <a @click="logout"> Log Out</a>
                    <form action="/logout" style="display:hidden"
                          method="POST"
                          id="logout"
                          >
                        <input type="hidden" name="_token" 
                               :value="csrf_token"
                               >
                    </form>
                </li>
                <li v-else>
                <router-link  :to="{name:'login'}"> Log In</router-link>
                </li>
            </ul>
        </div>
        <router-view></router-view>
        <footer-component></footer-component>
    </div>-->
</template>

<script>
    import FooterComponent from './FooterComponent.vue';
    import HeaderComponent from './HeaderComponent.vue';
    export default{
        data() {
            return{
                csrf_token:window.csrf_token
            }
        },
        components: {
            FooterComponent,
            HeaderComponent
        },
        methods: {
            logout() {
               document.getElementById('logout').submit();
            }
        }
    }
</script>

<style>

</style>
