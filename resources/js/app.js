require('./bootstrap');

window.Vue = require('vue').default;

import Vue from 'vue';
import VueToastr from 'vue-toastr';
Vue.use(VueToastr);


// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

//Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('add-to-cart', require('./components/AddToCart.vue').default);
Vue.component('cart', require('./components/Cart.vue').default);
Vue.component('checkout', require('./components/Checkout.vue').default);



const app = new Vue({
    el: '#app',
});
