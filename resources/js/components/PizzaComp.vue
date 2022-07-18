<template>

  <div class="container">
    <PizzaItemComp
    :pizze="pizze"
    />
  </div>
</template>

<script>

import PizzaItemComp from './PizzaItemComp.vue';
export default {

     components: { PizzaItemComp },

    data() {
        return {
            baseUrl: "http://127.0.0.1:8000/api/pizze",
            pizze: []
        };
    },
    mounted() {
        this.getApi();
    },
    methods: {
        getApi() {
            axios.get(this.baseUrl)
                .then(res => {
                this.pizze = res.data;
            });
        }
    },

}
</script>

<style>

</style>
