<template>
       <div class="container is-fluid">
        <div class="m-t-xl m-l-lg m-r-lg m-b-xl">
        <div class="tile is-ancestor">
             <div class="tile is-parent">
                <article class="tile is-child box">
                    <p class="title">First Quiz</p>
                    <p class="subtitle">With some content</p>
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
                        <div class="columns is-mobile">
                            <div class="column is-6">Per Question Mark</div>
                            <div class="column is-2"><i class="fas fa-arrow-circle-right"></i> </div>
                            <div class="column has-text-centered">2</div>
                        </div>
                         <div class="columns is-mobile ">
                            <div class="column is-6">Total Questions</div>
                            <div class="column is-2"><i class="fas fa-arrow-circle-right"></i> </div>
                            <div class="column has-text-centered">10</div>
                        </div>
                         <div class="columns is-mobile">
                            <div class="column is-6">Total Marks</div>
                            <div class="column is-2"><i class="fas fa-arrow-circle-right"></i> </div>
                            <div class="column has-text-centered">20</div>
                        </div>
                          <div class="columns is-mobile">
                            <div class="column is-6">My Marks</div>
                            <div class="column is-2"><i class="fas fa-arrow-circle-right"></i> </div>
                            <div class="column has-text-centered">?</div>
                        </div>
                       <div class='level is-mobile m-t-lg' >
                           <div class='level-item is-narrow'>
                       <router-link :to="{name:'quiz'}" class="button  is-small is-radiusless" > 
                        <strong>Start Quiz</strong>
                    </router-link>
                           </div>
                        <div class='level-item is-narrow wrong has-text-right is-vcentered'>
                            Not solved Yet
                        </div>
                       </div>
                    </div>
                </article>
            </div>
            <div class="tile is-parent">
                <article class="tile is-child box">
                    <p class="title">Second Quiz</p>
                    <p class="subtitle">With some content</p>
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
                        <div class="columns is-mobile">
                            <div class="column is-6">Per Question Mark</div>
                            <div class="column is-2"><i class="fas fa-arrow-circle-right"></i> </div>
                            <div class="column has-text-centered">2</div>
                        </div>
                         <div class="columns is-mobile ">
                            <div class="column is-6">Total Questions</div>
                            <div class="column is-2"><i class="fas fa-arrow-circle-right"></i> </div>
                            <div class="column has-text-centered">10</div>
                        </div>
                         <div class="columns is-mobile">
                            <div class="column is-6">Total Marks</div>
                            <div class="column is-2"><i class="fas fa-arrow-circle-right"></i> </div>
                            <div class="column has-text-centered">20</div>
                        </div>
                          <div class="columns is-mobile">
                            <div class="column is-6">My Marks</div>
                            <div class="column is-2"><i class="fas fa-arrow-circle-right"></i> </div>
                            <div class="column has-text-centered">18</div>
                        </div>
                       <div class='level is-mobile m-t-lg' >
                           <div class='level-item is-narrow'>
                       <router-link :to="{name:'quiz'}" class="button  is-small is-radiusless" > 
                        <strong>Start Quiz</strong>
                    </router-link>
                           </div>
                        <div class='level-item is-narrow true has-text-right is-vcentered'>
                            solved
                        </div>
                       </div>
                    </div>
                </article>
            </div>
            <div class="tile is-parent">
                <article class="tile is-child box">
                    <p class="title">Third Quiz</p>
                    <p class="subtitle">With some content</p>
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
                        <div class="columns is-mobile">
                            <div class="column is-6">Per Question Mark</div>
                            <div class="column is-2"><i class="fas fa-arrow-circle-right"></i> </div>
                            <div class="column has-text-centered">2</div>
                        </div>
                         <div class="columns is-mobile ">
                            <div class="column is-6">Total Questions</div>
                            <div class="column is-2"><i class="fas fa-arrow-circle-right"></i> </div>
                            <div class="column has-text-centered">10</div>
                        </div>
                         <div class="columns is-mobile">
                            <div class="column is-6">Total Marks</div>
                            <div class="column is-2"><i class="fas fa-arrow-circle-right"></i> </div>
                            <div class="column has-text-centered">20</div>
                        </div>
                          <div class="columns is-mobile">
                            <div class="column is-6">My Marks</div>
                            <div class="column is-2"><i class="fas fa-arrow-circle-right"></i> </div>
                            <div class="column has-text-centered">18</div>
                        </div>
                       <div class='level is-mobile m-t-lg' >
                           <div class='level-item is-narrow'>
                       <router-link :to="{name:'quiz'}" class="button  is-small is-radiusless" > 
                        <strong>Start Quiz</strong>
                    </router-link>
                           </div>
                        <div class='level-item is-narrow true has-text-right is-vcentered'>
                            solved
                        </div>
                       </div>
                    </div>
                </article>
            </div>
        </div>
                <pagination-component></pagination-component>

        </div>

    </div>
</template>

<script>
    import PaginationComponent from '../components/PaginationComponent';
    export default {
        components: {
            PaginationComponent
        }

    }
</script>
<style lang="scss">
    .box{
-moz-box-shadow: 1px 1px 3px 2px #cec6c1;
  -webkit-box-shadow: 1px 1px 3px 2px #cec6c1;
  box-shadow:         1px 1px 3px 2px #cec6c1;
    }
    .columns:not(:last-child){
            margin-bottom: 0;
    }
    
</style>
