<template>
    <div class='container is-fluid'>
 <div class="card has-text-centered m-t-xl m-l-lg m-r-lg m-b-xl">
  <div class="card-content card-result">
    <p class="title">
        Hey, Ahmed<br/>
<!--        <span class=''>  Congratulations,You did Great!!</span><br/>-->
        <span class="">  Unfortunately,Your score isn't good enough!!</span>
    </p>
    <p class="subtitle wrong">
        <br/>
      Your scored 80/100
    </p>
      <div class=' m-b-lg m-t-xl has-text-centered'>
             <button class='button '>
                 Visit My Profile
             </button>
         </div>
  
  </div>
  

      
</div>
         
    </div>
</template>

<script>
      export default {
              
      }
</script>
<style lang='scss'>
    .card-result{
                border: 10px solid #314e5e;
                border-radius: 2%;
    background-color: white;
    padding:10%;
    box-shadow: 1px 1px 1px 1px #314e5e;
    }
    .title{
            line-height: 2;
    }
    .card{
           box-shadow: none; 
    }
</style>


