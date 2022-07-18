<template>
  <div class="container-fluid">


    <!-- As a heading -->
    <nav class="navbar bg-light">
    <div class="container-fluid">
        <span class="navbar-brand mb-0 h1"><router-link :to="{name : 'home'}">Home</router-link></span>
        <span class="navbar-brand mb-0 h1"><router-link :to="{name : 'pizze'}">Pizze</router-link></span>
        <span class="navbar-brand mb-0 h1">Contatti</span>
    </div>
    </nav>
  </div>
</template>

<script>
export default {

}
</script>

<style>

</style>
