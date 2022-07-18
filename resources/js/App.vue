<template>
  <div class="container">

    <PizzaComp/>
  </div>
</template>

<script>
import Axios from 'axios';
import PizzaComp from './components/PizzaComp.vue';

export default {
    components: { PizzaComp },


}
</script>

<style lang="scss">
     @import'~bootstrap/dist/css/bootstrap.css';
</style>
