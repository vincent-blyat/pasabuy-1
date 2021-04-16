import Vuex from 'vuex'
import api from '../api';

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
        getAuthUser(){
            api
            .get('api/user')
            .then((res)=>{
                console.log(res)
            })
            .catch((error)=>{
                console.log(error)
            })

        }
    },
    modules:{},
    getters:{
        getCurrentJoke:(state)=> state.currentJoke
    }
})


export default store;