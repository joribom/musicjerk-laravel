
require('./bootstrap');

import Vue from 'vue'

import App from './App'
import { router } from './components/routes'


const app = new Vue({
    el: '#app',
    components: { App },
    router,
});
