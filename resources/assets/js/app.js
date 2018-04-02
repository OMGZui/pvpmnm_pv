/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import App from './App.vue';
import router from './router';
import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';
import axios from 'axios'

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.use(ElementUI);
Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('login', require('./views/page/Login.vue'));


axios.defaults.baseURL = "http://vue.omgzui.local/api/";
Vue.prototype.$http = axios;

new Vue({
    el: '#app',
    router,
    components: { App },
    template: '<App/>'
});