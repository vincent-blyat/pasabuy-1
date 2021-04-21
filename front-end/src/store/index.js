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
        userTransactions:[],
        userShippingAddress:[],
        transportModes:[],
        shoppingPlaces:[]
  
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
            state.userTransactions = []
            state.userTransactions = trans
        },
        setUserShippingAddress(state,trans){
            state.userShippingAddress = trans
        },
        setTransportModes(state,trans){
            state.transportModes = trans
        },
        setShoppingPlaces(state,trans){
            state.shoppingPlaces = trans
        },
    },
    actions:{
        async createPostOffer(state,post){
            return api
            .post('api/post/offer',post)
            .then(()=>{
              
            })
            .catch((error)=>{
                console.log(error)
            })
        },
        async createPostRequest(state,post){
            return api
            .post('api/post/request',post)
            .then(( )=>{
             
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
        async getUserShippingAddress(state){
            return api
            .get('api/getShippingAddress')
            .then((res)=>{
                let addr = res.data
                console.log('your addressese', addr)
                state.commit('setUserShippingAddress',addr)
            })
            .catch((error)=>{
                console.log(error)
            })
        },
        async getTransportModes(state){
            return api
            .get('api/getTransportModes')
            .then((res)=>{
                let tra = res.data
                state.commit('setTransportModes',tra)
            })
            .catch((error)=>{
                console.log(error)
            })
        },
        async getShoppingPlaces(state){
            return api
            .get('api/getShoppingPlaces')
            .then((res)=>{
                let data = res.data
                state.commit('setShoppingPlaces',data)
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
        getUserShippingAddress:(state) => state.userShippingAddress,
        getTransportModes:(state) => state.transportModes,
        getShoppingPlaces:(state) => state.shoppingPlaces,
    }
})


export default store;