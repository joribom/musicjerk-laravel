
require('./bootstrap');

import Vue from 'vue'

import App from 'musicjerk/App'
import Auth from 'musicjerk/data/auth'
import { router } from 'musicjerk/components/routes'

Vue.prototype.$auth = new Auth()

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});
