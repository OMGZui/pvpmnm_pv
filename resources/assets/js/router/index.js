import Vue from 'vue';
import Router from 'vue-router';
import Home from '../views/common/Home';
import Login from '../views/page/Login';
import Boss from '../components/boss/Boss';
import Index from '../components/home/Index';

Vue.use(Router);

export default new Router({
    mode: 'history',
    routes: [{
            path: '/login',
            component: Login,
        },
        {
            path: '/home',
            component: Home,
            children: [{
                path: '/',
                component: Index
            }, {
                path: 'boss',
                component: Boss
            }]
        }
    ]
})