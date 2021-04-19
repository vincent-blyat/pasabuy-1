import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import './assets/css/tailwind.css'
window.$ = window.jQuery = require('jquery');
createApp(App).use(router).mount('#app')
