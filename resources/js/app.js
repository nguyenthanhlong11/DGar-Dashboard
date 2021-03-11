require('./bootstrap');
window.Vue = require('vue').default;

import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)

import Dashboard from './components/Content/Dashboard.vue';
import App from './components/App.vue';

const routes = [{
        name: 'dashboard',
        path: '/',
        component: Dashboard
    }
];

const router = new VueRouter({ mode: 'history', routes: routes });
const appadmin = new Vue(Vue.util.extend({ router }, App)).$mount('#appadmin');