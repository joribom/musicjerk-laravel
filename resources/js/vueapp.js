
import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import App from './App'
import { musicjerkRoutes } from './components/routes'

const router = new VueRouter({
    mode: 'history',
    routes: musicjerkRoutes,
})

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});
