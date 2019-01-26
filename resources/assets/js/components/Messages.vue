<template>
    <div class="container is-fluid">
     <div class="m-t-xl m-l-lg m-r-lg m-b-xl">
            <article class="message is-small">
  <div class="message-header">
    <p class="has-text-left">From: Ali Mohamed</p>
    <p class="has-text-right floatright">8 minutes ago</p>
    <button class="delete is-small" aria-label="delete"></button>
  </div>
  <div class="message-body">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla.Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend lacus</em>, in mollis lectus.
  </div>
</article>
    
            <article class="message is-small ">
  <div class="message-header">
    <p class="has-text-left">Test Results</p>
    <p class="has-text-right floatright">8 minutes ago</p>
    <button class="delete is-small" aria-label="delete"></button>
  </div>
  <div class="message-body">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla.Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend lacus</em>, in mollis lectus.
  </div>
</article>
        
        <article class="message is-small ">
  <div class="message-header">
    <p class="has-text-left">Test Results</p>
    <p class="has-text-right floatright">8 minutes ago</p>
    <button class="delete is-small" aria-label="delete"></button>
  </div>
  <div class="message-body">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla.Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend lacus</em>, in mollis lectus.
  </div>
</article>
        
        <pagination-component></pagination-component>
        </div>
    </div>
  
</template>
<script>
    import PaginationComponent from "../components/PaginationComponent";
    export default{
            components:{
                PaginationComponent
            }
    }
</script>
    <style lang="scss">
        .floatright
        {
                position: absolute;
                right: 45px;
        }
        </style>