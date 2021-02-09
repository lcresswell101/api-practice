require('./bootstrap');

require('alpinejs');

import Vue from 'vue';

Vue.config.silent = true;

import Users from './components/Users.vue';

const app = new Vue({
    el: '#app',
    components: {
        Users
    }
})
