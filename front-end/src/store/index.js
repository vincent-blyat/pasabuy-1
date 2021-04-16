import Vuex from 'vuex'
import api from '../api';

const store =  new Vuex.Store({
    state:{
        authUser:[],
        authUserPersonal:[],
        posts:[],
        allNotif:[],
        unreadNotif:[]

    },
    mutations:{
        //syncrhonous
        setCurrentAuthUser(state,payload){
            state.authUser = payload;
           
        },
        setCurrentPersonal(state,payload){
            state.authUserPersonal = payload;
        },
        setPosts(state,payload){
            state.posts = payload;
        },
        setNotifications(state,payload){
            state.allNotif = payload;
        },
        setUnreadNotifications(state,payload){
           state.unreadNotif = payload;
        }
    },
    actions:{
        async getAuthUser(state){
            api
            .get('api/user')
            .then((res)=>{
                let user = res.data
                state.commit('setCurrentAuthUser',user)
            })
            .catch((error)=>{
                console.log(error)
            })
        },
        async getPersonal(state){
            api
            .get('api/getPersonal')
            .then((res)=>{
                res.data.profilePicture = 'data:image/jpeg;base64,'+ btoa(res.data.profilePicture)
                let user = res.data
                state.commit('setCurrentPersonal',user)
            })
            .catch((error)=>{
                console.log(error)
            })
        },
        async getPosts(state){
            api
            .get('api/getPosts')
            .then((res)=>{
                var i;
                for(i=0;i<res.data.length;i++){
                  res.data[i].user.profilePicture = 'data:image/jpeg;base64,' + btoa(res.data[i].user.profilePicture)
                }
                let posts = res.data
                state.commit('setPosts',posts)
            })
            .catch((error)=>{
                console.log(error)
            })
        },
        async getAllNotifications(state){
            api
            .get('api/getNotifications')
            .then((res)=>{
                let notif = res.data
                state.commit('setNotifications',notif)
            })
            .catch((error)=>{
                console.log(error)
            })
        },
        async getUnreadNotifications(state){
            api
            .get('api/getUnreadNotifications')
            .then((res)=>{
                let unreadenotif = res.data
                state.commit('setUnreadNotifications',unreadenotif)
            })
            .catch((error)=>{
                console.log(error)
            })
        }
    },
    modules:{},
    getters:{
        getUser:(state)=> state.authUser,
        getPersonal:(state) => state.authUserPersonal,
        getPosts:(state) => state.posts,
        getAllNotif:(state) => state.allNotif,
        getUnreadNotif:(state) => state.unreadNotif
    }
})


export default store;