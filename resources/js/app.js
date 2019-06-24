/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';
import VueAxios from 'vue-axios';
import axios from 'axios';
import HomeComponent from './components/HomeComponent.vue';
import CreateComponent from './components/CreateComponent.vue';
import indexComponent  from './components/indexComponent.vue';
import EditComponent from './components/EditComponent.vue';


Vue.use(VueRouter,VueAxios,axios);



/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
// Vue.component('Header-Component', require('./components/HeaderComponent.vue').default);



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
const routes=[
    {
        name: 'home',
        path: '/',
        component: HomeComponent
    },
    {
        name: 'create',
        path: '/create',
        component: CreateComponent
    },
    {
        name: 'posts',
        path: '/posts',
        component: indexComponent
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditComponent
    }



];

const router = new VueRouter({ mode: 'history',routes:routes});
const app = new Vue(Vue.util.extend({ router })).$mount('#app');
