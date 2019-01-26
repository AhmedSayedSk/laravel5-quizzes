<template>
    <nav class="pagination m-t-lg" role="navigation" aria-label="pagination">
  <a class="pagination-previous" title="This is the first page" disabled>Previous</a>
  <a class="pagination-next is-radiusless">Next page</a>
  <ul class="pagination-list">
    <li>
      <a class="pagination-link is-current is-radiusless" aria-label="Page 1" aria-current="page">1</a>
    </li>
    <li>
      <a class="pagination-link is-radiusless" aria-label="Goto page 2">2</a>
    </li>
    <li>
      <a class="pagination-link is-radiusless" aria-label="Goto page 3">3</a>
    </li>
  </ul>
</nav>
</template>

<script>
    
    export default{
           
    }
</script>

<style lang="scss" scoped >
       @import "../../sass/_customvariable.scss";

    .pagination-link.is-current{
    border-color:$complementary;
    background-color: $complementary;
}
.pagination-link.is-current:hover{
color:white !important;
}
</style>