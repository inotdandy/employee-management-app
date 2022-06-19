import VueRouter from 'vue-router'
import Vue from 'vue'
import { routes } from './routes'

require('./bootstrap');

window.Vue = require('vue').default;

Vue.use(VueRouter)

const router = new VueRouter({
    mode: 'history',
    routes
})

Vue.component('employee-index', require('./components/employees/Index.vue').default);



const app = new Vue({
    el: '#app',
    router
});
