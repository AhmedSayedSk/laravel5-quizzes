<template>
    <footer class="  ">
        <div class="columns is-mobile container is-fluid p-t-lg" >
            <div class="column  p-t-sm">
                 <div>
                        TermsFeed &COPY; 2019
                    </div>
            </div>
            <div class="column has-text-centered p-t-none ">
                  <a  href="#" target="_blank">
                    <span class="fa-stack fa-lg">
                        <i class="fab fa-facebook-square fa-lg "></i>
                    </span>
                </a>
                <a  href="#">
                    <span class="fa-stack fa-lg">

                        <i class="fab fa-linkedin fa-lg"></i>
                    </span>
                </a>
                <a  href="#" target="_blank">
                    <span class="fa-stack fa-lg">
                        <i class="fab fa-twitter fa-lg "></i>
                    </span>

                </a>
                <a  href="#" target="_blank">
                    <span class="fa-stack fa-lg">
                        <i class="fab fa-instagram fa-lg "></i>
                    </span>
                </a>
            </div>
            <div class="column  p-t-sm has-text-centered">
                 <div class="">
                     Not Registered yet? then 
                      <router-link :to="{name:'login'}">Login</router-link>&nbsp; or 
                <router-link :to="{name:'register'}">Register</router-link> 
            </div>
            </div>
        </div>
    </footer>
</template>

<script>
    export default {

    }
</script>
<style lang="scss">
    @import "../../sass/_customvariable.scss";
@import "~bulma/sass/utilities/mixins";
    footer {  
     position: absolute;
        left: 0;
        bottom: 0;
/*        background-color:$background-color;*/
        height:80px;
        width: 100%;
        overflow: hidden;
        font-size: $font-size-little;
        font-family: $family-medium;
          
       
        a{
                 text-decoration:underline;
        }
        &::before{
            content:"";
            background-color: rgba(0,0,0,0.8);
            display: block;
            width: 100%;
            height: 3px;
        }

       

    }
@include until($desktop) 
        {    
            footer{
                font-size: $font-size-little;
            }
        }
</style>
