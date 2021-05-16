require('./bootstrap');
window.Vue = require('vue').default;

import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)

import Dashboard from './components/Content/Dashboard.vue';
import UserScanner from './components/Content/UserScanner.vue';
import NewPost from './components/Content/NewPost.vue';
import App from './components/App.vue';
import BinLocation from './components/Content/BinLocation.vue';
import Warning from './components/Content/Warning.vue';

const routes = [
    {
        name: 'dashboard',
        path: 'dashboard',
        component: Dashboard
    },
    {
        name: 'user-scanner',
        path: '/admin/user-scanner',
        component: UserScanner
    },
    {
        name: 'new-post',
        path: '/admin/new-post',
        component: NewPost
    },
    {
        name: 'bin-location',
        path: '/admin/bin-location',
        component: BinLocation
    },
    {
        name: 'warning',
        path: '/admin/warning',
        component: Warning
    },
];

const router = new VueRouter({ mode: 'history', routes: routes });
const appadmin = new Vue(Vue.util.extend({ router }, App)).$mount('#appadmin');