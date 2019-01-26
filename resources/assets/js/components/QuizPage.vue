<template>
    <div class="container is-fluid">
        <div class="m-t-xl m-l-lg m-r-lg m-b-xl">
            <h3 >Quiz name</h3>
            <div class="columns is-mobile">
                <div class="column is-8">
                    <p class="question p-t-none p-b-md">
                        <span>{{questionNO}}-</span>
                        will I need to be a javascript programmer to build a multiple choice question?</p>
                    <div v-if="question.type === 'check'">
                        <button class='button is-medium is-fullwidth is-radiusless m-t-lg m-b-lg '>Choice 1</button>
                        <button class='button is-medium is-fullwidth is-radiusless m-b-lg '>Choice 2</button>
                        <button class='button is-medium is-fullwidth is-radiusless m-b-lg '>Choice 3</button>
                        <button class='button is-medium is-fullwidth is-radiusless m-b-lg '>Choice 4</button>
                    </div>
                    <textarea v-if="question.type === 'written'" class="textarea is-radiusless" placeholder="write your answer" rows="5"></textarea>

                </div>
                <div class="column is-4 has-text-centered">
                    <img class="queIMG" src="/images/que.jpg"/>
                    <div class='has-text-centered'>
                        <div class="field ">
                            <p class='wrong'>
                                False <i class="fas fa-times"></i>
                            </p>
                            <p class='true'>
                                True <i class="fas fa-check"></i>
                            </p>
                        </div>

                        <a  class="control"  v-on:click='nextQue()'>
                            Next <i class="fas fa-arrow-right"></i>
                        </a>

                    </div>

                </div>
            </div>
            <progress class="progress  is-radiusless" value="15" max="100">15%</progress>
        </div>
    </div>  
</template>

<script>
    export default {
        data() {
            return{
                questionNO: 1,
                question: {
                    type: 'check'
                }
            }
        },
        methods: {
            nextQue() {
                console.log("called")
                this.questionNO++;
                console.log(this.questionNO);
            }
        }
    }
</script>
<style lang="scss">
    
    .question{
        text-transform: capitalize;
    }
    .button-block{
        display: block;
            
    }
    .queIMG{
            max-height: 300px;
    }
 
</style>


