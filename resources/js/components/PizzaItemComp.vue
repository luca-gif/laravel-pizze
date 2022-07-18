<template>

    <div class="container">
        <div class="card" style="width: 18rem;"
        v-for="pizza in pizze"
        :key="pizza.id"
        >

                <div class="card-body">
                    <h5 class="card-title">{{ pizza.name }}</h5>
                    <p class="card-text">{{ pizza.price }}</p>
                    <ul>
                        <li
                        v-for="ingredient in pizza.ingredients"
                        :key="ingredient.id">
                            {{ ingredient.name }}
                        </li>


                    </ul>
                </div>
        </div>
    </div>

</template>

<script>
export default {
    props:{
        pizze : Array,
    }
}
</script>



<style>

</style>
