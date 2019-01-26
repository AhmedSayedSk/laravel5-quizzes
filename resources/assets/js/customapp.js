import Vue from 'vue';
import App from './components/App.vue';
import router from './router';
import store from './store';



var app = new Vue({
    el: "#app",
    render: h => h(App),
    router,
    store
    });
    
var dropdown = document.querySelector('.dropdown');
  dropdown.addEventListener('click', function(event) {
  event.stopPropagation();
  dropdown.classList.toggle('is-active');
});