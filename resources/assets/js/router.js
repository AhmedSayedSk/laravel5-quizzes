import Vue from 'vue';
import VueRouter from 'vue-router';
import axios from 'axios';
import store from './store';

import HomePage from './components/HomePage.vue';
import LoginPage from './components/LoginPage.vue';
import RegisterPage from './components/RegisterPage.vue';
import ListingCategories from './components/ListingCategories.vue';
import ListingQuizzes from './components/ListingQuizzes.vue';
import QuizPage from './components/QuizPage.vue';
import QuizResultsPage from './components/QuizResultsPage.vue';
import UserProfile from './components/UserProfile.vue';
import Messages from './components/Messages.vue';
import Students from './components/Students.vue';
import SendMessage from './components/SendMessage.vue';
import EditProfile from './components/EditProfile.vue';


Vue.use(VueRouter);

let router = new VueRouter({
    mode: 'history',
    routes: [
        {path: '/index', component: HomePage, name: 'home'},
        {path: '/categories/:category', component: ListingCategories, name: 'categories'},
        {path: '/quizzes/:userid', component: ListingQuizzes, name: 'quizzes'},
        {path: '/quiz', component: QuizPage, name: 'quiz'},
        {path: '/dashboard/:userid', component: UserProfile, name: 'dashboard'},
        {path: '/messages', component: Messages, name: 'messages'},
        {path: '/sendmessage/:userid', component: SendMessage, name: 'sendmessage'},
        {path: '/students/:teacherid', component: Students, name: 'students'},
        {path: '/editprofile/:userid', component: EditProfile, name: 'editprofile'},
//        {path: '/index', component: QuizResultsPage, name: 'quizresults'},
        {path: '/login', component: LoginPage, name: 'login'},
        {path: '/register', component: RegisterPage, name: 'register'}
    ],
    scrollBehavior(to, from, savedPosition) {
        return {x: 0, y: 0}
    },
});
//
//router.beforeEach((to, from, next) => {
//  let serverData = JSON.parse(window.vuebnb_server_data);
//  if (
//    to.name === 'listing'
//      ? store.getters.getListing(to.params.listing)
//      : store.state.listing_summaries.length > 0
//              || to.name === 'login'
//  ) {
//    next();
//  }
//  else if (!serverData.path || to.path !== serverData.path) {
//    axios.get(`/api${to.path}`).then(({data}) => {
//      store.commit('addData', {route: to.name, data});
//      next();
//    });
//
//  }
//  else {
//      store.commit('addData', {route: to.name, data: serverData});
//      if(   serverData.saved != null)
//      {
//      serverData.saved.forEach(id => store.commit('toggleSaved', id));
//  }
//    next();
//  }
//});
//  
export default router;

    