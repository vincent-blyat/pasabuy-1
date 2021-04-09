import { createRouter, createWebHistory } from 'vue-router'
import Home from '../views/Home.vue'
import login from '../views/login.vue'
import signup from '../views/signup.vue'
import address from '../views/address.vue'
import uploadid from '../views/uploadid.vue'
import verifymessage from '../views/verifymessage.vue'
import ProfileEdit from '../views/ProfileEdit.vue'
import dashboard from '../views/dashboard.vue'
import accountsettings from '../views/accountset.vue'
import deliver from '../views/deliver.vue'
import orders from '../views/orders.vue'
import messages from '../views/messaging.vue'
import search from '../views/Search.vue'
import forgotpassword from '../views/forgotpass.vue'
import forgotPassVerify from '../views/forgotPassVerify.vue'
import verifyemail from '../views/verifyemail.vue'
import Shopping_List from '../views/shopping_list.vue'


const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home,
    meta: {guest:true}
  },

  {
    path: '/log-in',
    name: 'login',
    component: login,
    meta: {guest:true}
  },

  {
    path: '/sign-up',
    name: 'signup',
    component: signup,
    meta: {guest:true}
  },

  {
    path: '/address-book',
    name: 'address',
    component: address,
    meta: {guest:true}
  },

  {
    path: '/upload-id',
    name: 'uploadid',
    component: uploadid,
    meta: {guest:true}
  },

  {
    path: '/verification-message',
    name: 'verifymessage',
    component: verifymessage,
    meta: {requiresAuth:true}
  },

  {
    path: '/edit-profile',
    name: 'Profile',
    component: ProfileEdit,
    meta: {requiresAuth:true}
  },

  {
    path: '/dashboard',
    name: 'dashboard',
    component: dashboard,
    meta: {requiresAuth:true}
  },

  {
    path: '/account-settings',
    name: 'accountsettings',
    component: accountsettings,
    meta: {requiresAuth:true}
  },

  {
    path: '/deliver',
    name: 'deliveries',
    component: deliver,
    meta: {requiresAuth:true}
  },

  {
    path: '/orders',
    name: 'orders',
    component: orders,
    meta: {requiresAuth:true}
  },

  {
    path: '/messages',
    name: 'messages',
    component: messages,
    meta: {requiresAuth:true}
  },

  {
    path: '/search',
    name: 'search',
    component: search,
    meta: {requiresAuth:true}
  },

  {
    path: '/forgot-password',
    name: 'forgotpassword',
    component: forgotpassword,
    meta: {guest:true}
  },

  
  {
    path: '/forgot-password-verify',
    name: 'forgotPassVerify',
    component: forgotPassVerify,
    meta: {guest:true}
  },

  {
    path: '/verify-email',
    name: 'verifyemail',
    component: verifyemail,
    meta: {guest:true}
  },

  {
    path: '/shopping-list',
    name: 'Shopping List',
    component: Shopping_List
  },


]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

function isLoggedIn(){
  return localStorage.getItem('isLoggedIn');
}

router.beforeEach((to, from, next) => {
  if (to.matched.some(record => record.meta.requiresAuth)){
    if(!isLoggedIn()){
      next({name: 'login'})
    }else{
      next()
    }
  }
  else if(to.matched.some(record => record.meta.guest)){
    if(isLoggedIn()){
      next({name: 'dashboard'})
    }else{
      next()
    }
  }else{
    next()
  }
})

export default router
