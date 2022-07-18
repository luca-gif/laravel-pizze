import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);
import PizzaComp from './components/PizzaComp';

const router = new VueRouter({
    mode:'history',
    routes:[
        {
            path:'/',
            name :'pizze',
            component: PizzaComp
        }
    ]

})

export default router;
