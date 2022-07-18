


require('./bootstrap');

window.Vue = require('vue');
window.axios = require('axios');

import router from './routes';
import App from './App.vue';


const app = new Vue({
    el: '#app',

    router,
    render: h => h(App)
});
