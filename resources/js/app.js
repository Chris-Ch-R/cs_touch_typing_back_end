require('./bootstrap');
import Vue from 'vue'
import Newpage from './vue/newpage'
import Login from './vue/login'
const newpage = new Vue({
    el: '#newpage',
    components: { Newpage }
});
const login = new Vue({
    el: '#login',
    components: { Login }
});