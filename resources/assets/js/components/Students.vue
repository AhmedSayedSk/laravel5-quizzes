
<template>
    <div  class='container is-fluid'>
        <div class="m-t-xl m-l-lg m-r-lg m-b-xl">
                    <div class="row columns is-multiline">
        <div class="column is-one-third">
                    <div class="card large">
                
                        <div class="card-content card-student">
                            <div class="media">
                                <div class="media-left">
                                    <figure class="image is-96x96">
                                        <img src='http://www.radfaces.com/images/avatars/jeffrey-douglas.jpg' alt="Image">
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <p class="title is-4 no-padding">PlayTheFallen</p>
<!--                                    <p><span class="title is-6"><a href="http://twitter.com/#">@twitterid</a></span></p>-->
                                    <p class="subtitle is-7">Quizzes Solved:12</p>
                                </div>
                            </div>
                                <div class="content">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum consequatur numquam aliquam tenetur ad amet inventore hic beatae, quas accusantium perferendis sapiente explicabo, corporis totam! Labore reprehenderit beatae magnam animi!
                            </div>
                                    <div class='has-text-right'>
                             <router-link :to="{name: 'sendmessage',params:{userid:1}}">
                                 <button class='button is-small is-radiusless'>Send Message</button>
                             </router-link>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column is-one-third">
                    <div class="card large">
                       
                        <div class="card-content card-student">
                            <div class="media">
                                <div class="media-left">
                                    <figure class="image is-96x96">
                                          <img src='http://www.radfaces.com/images/avatars/jeffrey-douglas.jpg' alt="Image">
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <p class="title is-4 no-padding">FelixCAT</p>
<!--                                    <p><span class="title is-6"><a href="http://twitter.com/#">@twitterid</a></span></p>-->
                                    <p class="subtitle is-7">Quizzes Solved:12</p>
                                </div>
                            </div>
                            <div class="content">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum consequatur numquam aliquam tenetur ad amet inventore hic beatae, quas accusantium perferendis sapiente explicabo, corporis totam! Labore reprehenderit beatae magnam animi!
                            </div>
                                    <div class='has-text-right'>
                                <button class='button is-small is-radiusless'>Send Message</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column is-one-third">
                    <div class="card large">
                  
                        <div class="card-content card-student">
                            <div class="media">
                                <div class="media-left">
                                    <figure class="image is-96x96">
                                          <img src='http://www.radfaces.com/images/avatars/jeffrey-douglas.jpg' alt="Image">
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <p class="title is-4 no-padding">ScoobyDOG</p>
<!--                                    <p><span class="title is-6"><a href="http://twitter.com/#">Send Message</a></span></p>-->
                                    <p class="subtitle is-7">Quizzes Solved:12</p>
                                </div>
                            </div>
                            <div class="content">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum consequatur numquam aliquam tenetur ad amet inventore hic beatae, quas accusantium perferendis sapiente explicabo, corporis totam! Labore reprehenderit beatae magnam animi!
                            </div>
                            <div class='has-text-right'>
                                <button class='button is-small is-radiusless'>Send Message</button>
                            </div>
                        </div>
                    </div>
                </div>
          
    </div>
        </div>
        </div>
</template>
<script>
    export default{
            
    }
    </script>
    <style>
        .card-student{
                
        }
        </style>