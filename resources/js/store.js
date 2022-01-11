// import Vue from 'vue'
// import Vuex from 'vuex'

// Vue.use(Vuex)

// export default new Vuex.Store({
//     state: {
//         user: {}
//     },
//     mutations: {

//     },
//     actions: {
//         userStateAction: () => {
//             console.log('invoked')
//         }
//     }
// })
import axios from 'axios'
import { createStore} from 'vuex'
import createPersistedState from "vuex-persistedstate";

const state = {
    user: {}
}

const mutations = {
    setUserState: (state, value) => state.user = value
}

const actions = {
    userStateAction: ({commit}) => {
        axios.get('api/user/me').then(response => {
            const userResponse = response.data.user
            commit('setUserState', userResponse)
        })
    }
}

export default createStore({
    state,
    mutations,
    actions,
    plugins: [createPersistedState()]
})