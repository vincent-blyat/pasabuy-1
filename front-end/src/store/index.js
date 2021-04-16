import Vuex from 'vuex'

const store =  new Vuex.Store({
    state:{
        authUser:[],
    },
    mutations:{
        //syncrhonous
        setCurrentJoke(state,payload){
            state.currentJoke = payload;
            state.allJokes.push(payload)
        }
    },
    actions:{
        getAuthUser()
    },
    modules:{},
    getters:{
        getCurrentJoke:(state)=> state.currentJoke
    }
})


export default store;