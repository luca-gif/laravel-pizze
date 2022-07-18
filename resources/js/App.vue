<template>
  <div class="container">
    <HeaderComp/>
    <router-view></router-view>

  </div>
</template>

<script>
import Axios from 'axios';
import PizzaComp from './components/PizzaComp.vue';
import HeaderComp from './components/partials/HeaderComp.vue';


export default {
    components: { PizzaComp, HeaderComp },


}
</script>

<style lang="scss">
     @import'~bootstrap/dist/css/bootstrap.css';
</style>
