import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);
import PizzaComp from './components/PizzaComp';
import HomeComp from './components/HomeComp'

const router = new VueRouter({
    mode:'history',
    routes:[
        {
            path:'/',
            name :'home',
            component: HomeComp
        },
        {
            path:'/pizze',
            name :'pizze',
            component: PizzaComp
        },
    ]

})

export default router;
