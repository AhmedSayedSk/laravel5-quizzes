<template>

    <nav class="container navbar  " role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <router-link :to="{ name: 'home' }" class="navbar-item ">
                <img class="logo" src="/images/logo.png" >
            </router-link>

            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <div class="navbar-item  m-l-lg has-dropdown is-hoverable" data-target="dropdown-categories">
                    <a class="navbar-link">
                        Categories
                    </a>

                    <div id="dropdown-categories" class="navbar-dropdown is-boxed is-radiusless">
                        <router-link :to="{ name: 'categories', params:{category:1} }" class="navbar-item">
                            Science
                    </router-link>
                    <a class="navbar-item">
                        IT
                    </a>
                    <a class="navbar-item">
                        History
                    </a>
                    <hr class="navbar-divider">
                    <a class="navbar-item">
                        Math
                    </a>
                </div>
            </div>

            <a class="navbar-item">
                <div class="field has-addons">
                    <p class="control">
                        <input class="input is-radiusless" type="text" placeholder="Search a quiz">
                    </p>
                    <p class="control">
                        <button class="button is-radiusless">
                            Search
                        </button>
                    </p>
                </div>
            </a>


        </div>

        <div class="navbar-end">
            <div v-if="$store.state.auth" class="navbar-item">
                <div class="buttons">
                    <router-link :to="{name:'register'}" class="button is-light m-r-lg"> 
                        <strong>Sign up</strong>
                    </router-link>
<!--                    <a href="/login" class="">Login</a>-->
                    <router-link :to="{name:'login'}"  class="underlined">
                      Log in 
                      
                    </router-link>
                </div>
            </div>

            <div class="navbar-item" v-else>
                <div class="navbar-item has-dropdown is-hoverable">
                    <div class="navbar-link">
                        <i class="fas fa-user-circle fa-2x"></i>
                        <span class="username">&nbsp; Hi Mohamed</span>

                    </div>

                    <div class="navbar-dropdown is-radiusless" >
                        <router-link :to="{ name: 'dashboard', params:{userid:11} }" class="navbar-item">
                            Dashboard
                    </router-link>

                    <hr class="navbar-divider">
                    
         
                    
                    <a @click="logout"  class="navbar-item"> Log Out</a>
                    <form action="/logout" style="display:hidden"
                          method="POST"
                          id="logout"
                          >
                        <input type="hidden" name="_token" 
                               :value="csrf_token"
                               >
                    </form>
                </div>
            </div>


        </div>

    </div>
</div>
</nav>

</template>

<script>
    export default {
        data() {
            return{
                test:true,
                csrf_token: window.csrf_token
            }
        },
        methods: {
            logout() {
                document.getElementById("logout").submit();
            }
        },
        created: function () {
            document.addEventListener('DOMContentLoaded', () => {

                // Get all "navbar-burger" elements
                const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

                // Check if there are any navbar burgers
                if ($navbarBurgers.length > 0) {

                    // Add a click event on each of them
                    $navbarBurgers.forEach(el => {
                        el.addEventListener('click', () => {

                            // Get the target from the "data-target" attribute
                            const target = el.dataset.target;
                            const $target = document.getElementById(target);

                            // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                            el.classList.toggle('is-active');
                            $target.classList.toggle('is-active');

                        });
                    });
                }
 ////////////
      // Get all "navbar-burger" elements
                const $navbardropdowns = Array.prototype.slice.call(document.querySelectorAll('.has-dropdown'), 0);

                // Check if there are any navbar burgers
                if ($navbardropdowns.length > 0) {

                    // Add a click event on each of them
                    $navbardropdowns.forEach(el => {
                        el.addEventListener('click', () => {

                            // Get the target from the "data-target" attribute
                            const target = el.dataset.target;
                            const $target = document.getElementById(target);

                            // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                         //   el.classList.toggle('.navbar-item.is-active');
                           // $target.classList.toggle('.navbar-item.is-active');


                        });
                    });
                }
                
                
            });
        }
    }
</script>
<style lang="scss" scoped>
       
    @import "../../sass/_customvariable.scss";

    .navbar{
        font-family:$family-medium;
        font-size:$font-size-primary;
  
        
    .logo{
        transform: rotate(137deg);
        max-height: 4.25rem !important;
    }
    .navbar-burger{
                 height: auto; 
                 font-weight: 800;
    }
    .navbar-dropdown .navbar-item{
            font-size: $font-size-primary;
    }
    .buttons{
        .button{
            margin-right: 1rem !important;
        }
        .underlined{
            border-bottom: 1px solid $complementary;
/*            padding-bottom: 3px;*/
                
        }
    }
    }
    a.navbar-item:hover, a.navbar-item.is-active, .navbar-link:hover, .navbar-link.is-active{
        background-color: transparent;
    }

</style>