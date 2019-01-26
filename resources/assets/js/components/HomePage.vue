<template>
    <div class="home">
        <hero-component></hero-component>
        <section class="container ">
            <h1 class="title has-text-centered">What we offer</h1>
            <div class="columns is-mobile" >
                <div class="column is-4 has-text-left ">
                    <ul>
                        <li><i class="fas fa-check-circle"></i> Build Your Quizzes</li>
                        <li><i class="fas fa-check-circle"></i> Build Multilingual Quizzes</li>
                        <li><i class="fas fa-check-circle"></i> Track Student Reports</li>
                    </ul>
                </div>
                <div class="column is-5 is-offset-1">
                    <div class=" has-text-centered">
                        <ul class="has-text-left">
                            <li><i class="fas fa-check-circle"></i> Build Your Quizzes</li>
                            <li><i class="fas fa-check-circle "></i> Build Multilingual Quizzes</li>
                            <li><i class="fas fa-check-circle"></i> Track Student Reports</li>
                        </ul>

                    </div>
                </div>
                <div class="column is-2 image has-text-centered is-hidden-touch">
                    <p class="who">as a teacher</p>
                    <img src="/images/bussines-man.png">
                </div>
            </div>
            <div class="columns learnercolumn is-mobile"  >
                <div class="column is-2 image has-text-centered is-hidden-touch">
                    <p class="who">as a learner</p>
                    <img src="/images/weoffer.png">
                </div>
                <div class="column is-4 has-text-left ">
                    <ul>
                        <li><i class="fas fa-check-circle"></i> Build Your Quizzes</li>
                        <li><i class="fas fa-check-circle"></i> Build Multilingual Quizzes</li>
                        <li><i class="fas fa-check-circle"></i> Track Student Reports</li>
                    </ul>
                </div>
                <div class="column is-5 is-offset-1 has-text-right   ">
                    <div class=" has-text-centered">
                        <ul class="has-text-left">
                            <li><i class="fas fa-check-circle"></i> Build Your Quizzes</li>
                            <li><i class="fas fa-check-circle "></i> Build Multilingual Quizzes</li>
                            <li><i class="fas fa-check-circle"></i> Track Student Reports</li>
                        </ul>

                    </div>
                </div>

            </div>
        </section>
    </div>
</template>

<script>
    import HeroComponent from '../components/HeroComponent.vue';
    export default {
        components: {
            HeroComponent
        }
    }
</script>
<style lang="scss">
    @import "../../sass/_customvariable.scss";
    
    .home{
        img{
            width: 67%;
            height:auto;
            margin:auto;
        }
        .learnercolumn{
                margin-bottom: 60px;
        }
        .who{
            font-family:$family-condensedbold;
            font-size:$font-size-little;
            margin-bottom: 13px;
            margin-left: 26px;
            text-shadow: 4px 4px 2px #5e4131;
        }
        .title{
            padding-top: 60px;
            font-family:$family-primary;
            font-size:$font-size-large;
            color:$privileged-color;
            letter-spacing:  1.5px;
            text-transform: uppercase;
        }

        h1{
            padding: 2rem 0 0 0;
        }
        .column{
            margin:auto;
        }
        .teacher{
            &::after{
                content: "";
                background-color: red;
                width:100%;
                height:3px;

            }
        }
    }
</style>
