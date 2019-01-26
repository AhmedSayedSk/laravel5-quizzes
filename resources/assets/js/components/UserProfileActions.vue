<template>
    <div class='m-xl'>
        <div class="columns is-mobile p-b-xl">
            <div class="column has-text-left is-3 p-0"> 
                <img src="/images/avatar.png" class=" is-rounded"/>
            </div>
            <div class="column has-text-left vertical-center "> 

                <p>{{user.name}}
                    <br/>
                    {{user.email}}
                    <br/>
                </p>
            </div>
            <div class='column has-text-right'>
                <router-link :to="{name:'editprofile',params:{userid:1}}" class="button "> 
                    <strong>Edit Profile</strong>
                </router-link>
            </div>
        </div>

        <div class="columns is-mobile is-vcentered  p-b-xl" v-if="user.type==='teacher'">
<!--            <div class="column has-text-right">
          
            </div>-->
<!--            <div class="column has-text-centered">
                <router-link :to="{name:'quiz'}" class="button "> 
                    <strong>My Quizes</strong>
                </router-link>
            </div>-->
            <div class="column has-text-left">
                      <router-link :to="{name:'students',params:{teacherid:1}}" class="button m-r-md"> 
                    <strong>My Students</strong>
                </router-link>
                <router-link :to="{name:'messages'}" class="button "> 
                    <strong>Messages</strong>
                </router-link>
            </div>                       
        </div>
        <div  v-else class="columns is-mobile  is-vcentered  p-b-xl" >

            <div class="column has-text-left">
               <router-link :to="{name:'quizzes',params:{userid:1}}" class="button m-r-md"> 
                    <strong>My Quizes</strong>
                </router-link>
        
                <router-link :to="{name:'messages'}" class="button "> 
                    <strong>Messages</strong>
                </router-link>
             
            </div>
           

        </div>
    </div>
</template>
<script>
    export default{
        props: ['user']
    }
</script>
<style scoped>
    .is-rounded{
        border-radius: 50%;
    }
    .button{
             padding: 10px 20px;
    width:130px;
    }
</style>