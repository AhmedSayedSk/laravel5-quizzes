import Vue from 'vue';
import Vuex from 'vuex';
import router from './router';
import axios from 'axios';
Vue.use(Vuex);
axios.defaults.headers.common = {  
  'X-Requested-With': 'XMLHttpRequest',
  'X-CSRF-TOKEN': window.csrf_token,
  'Authorization':'Bearer ' +  window.csrf_token
};
axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
axios.defaults.headers.common['X-CSRF-TOKEN'] = window.csrf_token;
//axios.defaults.headers.common['Authorization'] = "Bearer "+window.csrf_token;
axios.defaults.baseURL = 'http://localhost:8000/';
//axios.defaults.headers.common['Authorization'] = "Bearer " + window.api_token;
export default new Vuex.Store({
    state: {
        saved: [],
        listing_summaries: [],
        listings: [],
        auth: false
    },
    mutations: {
        toggleSaved(state, id) {
            if (state.auth){
                
            let index = state.saved.findIndex(saved => saved === 1);
              console.log("Ddd")
            if (index === -1) {
                state.saved.push(id);
            } else {
               
                state.saved.splice(index, 1);
               
            }
        }
        else{
            router.push ('/login');
        }
        },
        addData(state, { route, data }) {
            if (data.auth) {
                state.auth = data.auth;
            }
            if (route === 'listing') {
                state.listings.push(data.listing);
            } else {
                state.listing_summaries = data.listings;
        }
        }
    },
    getters: {
        savedSummaries(state) {
            return state.listing_summaries.filter(
                    item => state.saved.indexOf(item.id) > -1
            );
        },
        getListing(state) {
            return id => state.listings.find(listing => id == listing.id);
        }
    },
    actions: {
    toggleSaved({ commit, state }, id) {
      if (state.auth) {
          
        axios.post('http://localhost:8000/user/toggle_saved', { id }).then(
          () => commit('toggleSaved', id)
        );
      } else {
        router.push('/login');
      }
    }
    }
    

});