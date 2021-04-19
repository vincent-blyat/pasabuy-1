import Vuex from 'vuex'
import api from '../api'
import createPersistedState from 'vuex-persistedstate'



const store =  new Vuex.Store({
    plugins: [createPersistedState({
        storage: window.sessionStorage,
    })],
    state:{
        authUser:[],
        authUserPersonal:[],
        posts:[],
        allNotif:[],
        unreadNotif:[],
        userAddress:[],
        userChatRooms:[],
        userLang:[],
        userTransactions:[]
  
        // userEducation:[],

    },
    mutations:{
        //syncrhonous
        setCurrentAuthUser(state,payload){
            state.authUser = payload;
           
        },
        setCurrentPersonal(state,payload){
            state.authUserPersonal = payload;
        },
        setNotifications(state,payload){
            state.allNotif = payload;
        },
        setUnreadNotifications(state,payload){
           state.unreadNotif = payload;
        },
        setUserAddress(state,payload){
            state.userAddress = payload;
         },
        CREATE_POSTS(state,post){
            state.posts.unshift(post)
        },
        FETCH_POSTS(state,post){
            state.posts = post
        },
        FETCH_ROOMS(state,rooms){
            state.userChatRooms = rooms
        },
        CREATE_MESSAGES(state,rooms){
            state.userChatRooms.unshift(rooms)
        },
        setUserLang(state,lang){
            state.userLang = lang
        },
        setUserTransactions(state,trans){
            state.userTransactions = trans
        },
    },
    actions:{
        async createPostOffer(state,post){
            return api
            .post('api/post/offer',post)
            .then((res)=>{
                let post = res.data
                state.commit('CREATE_POSTS',post)
            })
            .catch((error)=>{
                console.log(error)
            })
        },
        async createPostRequest(state,post){
            return api
            .post('api/post/request',post)
            .then((res)=>{
                let post = res.data
                state.commit('CREATE_POSTS',post)
            })
            .catch((error)=>{
                console.log(error)
            })
        },
        async getAuthUser(state){
            return api
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
            return api
            .get('api/getPersonal')
            .then((res)=>{
                res.data.profilePicture = 'http://localhost:8000/storage/images/'+res.data.profilePicture
                let user = res.data
                state.commit('setCurrentPersonal',user)
            })
            .catch((error)=>{
                console.log(error)
            })
        },
        async getPosts(state){
            return api
            .get('api/getPosts')
            .then((res)=>{
                var i;
                for(i=0;i<res.data.length;i++){
                  res.data[i].user.profilePicture ='http://localhost:8000/storage/images/'+ res.data[i].user.profilePicture
                }
                let posts = res.data
                state.commit('FETCH_POSTS',posts)
            })
            .catch((error)=>{
                console.log(error)
            })
        },
        async getAllNotifications(state){
            return api
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
            return api
            .get('api/getUnreadNotifications')
            .then((res)=>{
                let unreadenotif = res.data
                state.commit('setUnreadNotifications',unreadenotif)
            })
            .catch((error)=>{
                console.log(error)
            })
        },
        async getUserAddress(state){
            return api
            .get('api/getAddress')
            .then((res)=>{
                let address = res.data
                state.commit('setUserAddress',address)
            })
            .catch((error)=>{
                console.log(error)
            })
        },
        async getChatRoom(state){
            return api
            .get('api/getChatroom')
            .then((res)=>{
                let room = res.data
                state.commit('FETCH_ROOMS',room)
            })
            .catch((error)=>{
                console.log(error)
            })
        },
        async getUserLang(state){
            return api
            .get('api/getLanguages')
            .then((res)=>{
                let lang = res.data
                state.commit('setUserLang',lang)
            })
            .catch((error)=>{
                console.log(error)
            })
        },
        async getUserTransactions(state){
            return api
            .get('api/getTransaction')
            .then((res)=>{
                let transactions = res.data
                console.log('your transactions', transactions)
                state.commit('setUserTransactions',transactions)
            })
            .catch((error)=>{
                console.log(error)
            })
        },
    },
    modules:{},
    getters:{
        getUser:(state)=> state.authUser,
        getPersonal:(state) => state.authUserPersonal,
        getPosts:(state) => state.posts,
        getAllNotif:(state) => state.allNotif,
        getUnreadNotif:(state) => state.unreadNotif,
        getAddress:(state) => state.userAddress,
        getRooms:(state) => state.userChatRooms,
        getUserLang:(state) => state.userLang,
        getUserTransactions:(state) => state.userTransactions,
    }
})


export default store;