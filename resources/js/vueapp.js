
import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import App from './components/App'
import HomeView from './views/HomeView'
import ExampleComponent from './components/ExampleComponent'
// import Page from './components/Page'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: HomeView,
        },
        {
            path: '/home',
            name: 'welcome',
            component: ExampleComponent,
            props: { title: "This is the SPA home" }
        },
    ],
})

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});
