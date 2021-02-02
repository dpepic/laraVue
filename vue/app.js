import Vue from 'vue';

import VueRouter from 'vue-router';
import VueAxios from 'vue-axios';
import axios from 'axios';
import {routes} from './rute.js';

import Komponenta from './Komponenta.vue';

Vue.use(VueRouter);
Vue.use(VueAxios, axios);

const ruter = new VueRouter({mode:'history', routes: routes});


let test = new Vue(
{
    el: '#app',
    router: ruter,
    data:
    {
        message: 'Hello Vue!'
    },
    methods:
    {
        reverseMessage: function ()
        {
          this.message = this.message.split('').reverse().join('');
        }
    }
});

new Vue(
{   el: '#bla',
    data:
    {
        blabla: test.message,
        poruka: 'Test poruka za prop'
    },
    components:
    {
        Komponenta
    }
});


