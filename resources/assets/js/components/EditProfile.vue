<template>
    <div class="container is-fluid">
        <div class="m-t-xl m-l-lg m-r-lg m-b-xl">


<div class="columns">


            <div class="column has-text-left is-3 p-0 text-align-center "> 
                <div class="is-rounded">
                <img src="/images/avatar.png" class=" is-rounded"/>
                </div>
                  <div class="file  m-b-lg m-t-md has-text-right text-align-center">
                <label class="file-label">
                    <input class="file-input " type="file" name="resume">
                    <span class="file-cta is-radiusless">
                        <span class="file-icon">
                            <i class="fas fa-upload"></i>
                        </span>
                        <span class="file-label">
                            Choose Image…
                        </span>
                    </span>
                </label>
            </div>

            </div>
            <div class="column is-6  "> 
          
            
                
                <div class=" m-b-md">
                    <input class="input is-radiusless" type="text" placeholder="Your Name">
                </div>
                
                <div class="m-b-md">
                    <input class="input is-radiusless" type="text" placeholder="Your Phone">
                </div>
               
                  <div class="m-b-md">
                    <input class="input is-radiusless" type="text" placeholder="Your Address">
                </div>
                
                <div class="m-b-md">
                    <input class="input is-radiusless" type="text" placeholder="Your Contact">
                </div>
            
            </div>
    <div class='column has-text-right ' style="position:relative">
                <router-link :to="{name:'editprofile',params:{userid:1}}" class="button  sticked-btn"> 
                    <strong>Update Profile</strong>
                </router-link>
            </div>
        </div>  
    </div>
    </div>
</template>

<script>
    export default {

    }
</script>
<style lang="scss" scoped>
    .is-rounded{
            border-radius: 50%;
    }
    .field{
            display:block !important;
    }
    .sticked-btn{
                position: absolute;
    bottom: 0;
    right: 0;
    }
</style>

