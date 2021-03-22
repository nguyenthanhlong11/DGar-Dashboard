require('./bootstrap');
window.Vue = require('vue').default;

import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)

import Dashboard from './components/Content/Dashboard.vue';
import UserScanner from './components/Content/UserScanner.vue';
import NewPost from './components/Content/NewPost.vue';
import App from './components/App.vue';

const routes = [{
        name: 'dashboard',
        path: '/',
        component: Dashboard
    },
    {
        name: 'user-scanner',
        path: '/user-scanner',
        component: UserScanner
    },
    {
        name: 'new-post',
        path: '/new-post',
        component: NewPost
    },

];

const router = new VueRouter({ mode: 'history', routes: routes });
const appadmin = new Vue(Vue.util.extend({ router }, App)).$mount('#appadmin');