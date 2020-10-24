import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Home from 'musicjerk/home/Home'
import Login from 'musicjerk/login/Login'
import Logout from 'musicjerk/login/Logout'
import Register from 'musicjerk/login/Register'
import ExampleComponent from 'musicjerk/components/ExampleComponent'

const musicjerkRoutes = [
    {
        path: '/',
        name: 'home',
        component: Home,
    },
    {
        path: '/albums',
        name: 'albums',
        component: ExampleComponent,
        props: { title: "This is the SPA home" }
    },
    {
        path: '/login',
        name: 'login',
        component: Login
    },
    {
        path: '/logout',
        name: 'logout',
        component: Logout
    },
    {
        path: '/register',
        name: 'register',
        component: Register
    }
]

const router = new VueRouter({
    mode: 'history',
    routes: musicjerkRoutes,
})

export { router }
