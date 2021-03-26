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


const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },

  {
    path: '/login',
    name: 'login',
    component: login
  },

  {
    path: '/signup',
    name: 'signup',
    component: signup
  },

  {
    path: '/address-book',
    name: 'address',
    component: address
  },

  {
    path: '/upload-id',
    name: 'uploadid',
    component: uploadid
  },

  {
    path: '/verification-message',
    name: 'verifymessage',
    component: verifymessage
  },

  {
    path: '/edit-profile',
    name: 'Profile',
    component: ProfileEdit
  },

  {
    path: '/dashboard',
    name: '',
    component: dashboard
  },

  {
    path: '/account-settings',
    name: 'accountsettings',
    component: accountsettings
  },

  {
    path: '/deliver',
    name: 'deliveries',
    component: deliver
  },

  {
    path: '/orders',
    name: 'orders',
    component: orders
  },

  {
    path: '/messages',
    name: 'messages',
    component: messages
  },

  {
    path: '/search',
    name: 'search',
    component: search
  },

  {
    path: '/forgot-password',
    name: 'forgotpassword',
    component: forgotpassword
  },

  
  {
    path: '/forgot-password-verify',
    name: 'forgotPassVerify',
    component: forgotPassVerify
  },

  {
    path: '/verifyemail',
    name: 'verifyemail',
    component: verifyemail
  },


]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
