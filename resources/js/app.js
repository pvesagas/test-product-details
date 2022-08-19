require('./bootstrap');
window.Vue = require('vue').default;
Vue.component('main-component', require('./Containers/MainContainer.vue').default);

const app = new Vue({
    el: '#root'
});
