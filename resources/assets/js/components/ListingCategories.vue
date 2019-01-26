<template>
         <div class="container is-fluid">
        <div class="m-t-xl m-l-lg m-r-lg m-b-xl">

       
    <h1 class="title">
       <router-link :to="{name:'quiz'}">Quiz 1</router-link>
    </h1>
    
    <blockquote itemprop="about">a modern approach to copy text to clipboard in hugo</blockquote>
    
    <h2 class="content" itemprop="description">
        Clipboard.js in hugo clipboard.js lets you easily copy text to the clipboard. With no need for Flash, it’s a great lightweight way to allow your visitors to copy code snippets on your site.
It’s a perfectly combination with a syntax highlighting library like rainbows or highlightjs.
In this short tuto i implemented clipboard.js in my template bulma for hugo.
Installation for hugo project Get the package from a third-party CDN provider and place the clipboard.
    </h2>

<div class="button is-light">
     <router-link :to="{name:'quiz'}">Go Quiz <i class="fas fa-arrow-right"></i></router-link >
</div>  <div class="column is-full-desktop" itemscope="" itemtype="http://schema.org/CreativeWork">
    <h1 class="blog-timestamp">
        
    </h1>
    <h1 class="title">
        <a href="https://themes.gohugo.io//theme/bulma/posts/prototyping/" itemprop="headline">Quiz 2</a>
    </h1>
    
    <h2 class="content" itemprop="description">
        I have been working on a large set of documentation for a prototype that will eventually make it into a product. One issue with the publishing system at my company is that it makes doing prototypes, or really anything not within the rigidly and narrowly scoped model, difficult to set up. It takes a lot of work just to get to the point where you can begin writing.
Since time was of the essence and writing is expensive, I decided to do the prototype outside of the publishing system.
    </h2>
</div>
<div class="button is-light">
    <a href="https://themes.gohugo.io//theme/bulma/posts/prototyping/" itemprop="url">Go Quiz <i class="fas fa-arrow-right"></i></a>
</div>  <div class="column is-full-desktop" itemscope="" itemtype="http://schema.org/CreativeWork">
    <h1 class="blog-timestamp">
        
    </h1>
    <h1 class="title">
        <a href="https://themes.gohugo.io//theme/bulma/posts/marxico/" itemprop="headline">Quiz 3</a>
    </h1>
    
    <blockquote itemprop="about">Marxico is a delicate Markdown editor for Evernote. With reliable storage and sync powered by Evernote, Marxico offers greate writing experience. </blockquote>
    
    <h2 class="content" itemprop="description">
        Welcome to Marxico Marxico is a delicate Markdown editor for Evernote. With reliable storage and sync powered by Evernote, Marxico offers greate writing experience.
 Versatile - supporting code highlight, LaTeX &amp; flow charts, inserting images &amp; attachments by all means. Exquisite - neat but powerful editor, featuring offline docs, live preview, and offering the desktop client and offline Chrome App. Sophisticated - deeply integrated with Evernote, supporting notebook &amp; tags, two-way bind editing.
    </h2>
</div>
<div class="button is-light">
    <a href="https://themes.gohugo.io//theme/bulma/posts/marxico/" itemprop="url">Go Quiz <i class="fas fa-arrow-right"></i></a>
</div> 
          
        


              <pagination-component></pagination-component>
            </div>
            </div>
            </template>

<script>
      import PaginationComponent from "../components/PaginationComponent";
      export default {
                 components:{
                PaginationComponent
            }
      }
</script>
<style>
    
</style>
