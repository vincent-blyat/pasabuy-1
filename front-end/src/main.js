import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import './assets/css/tailwind.css'
import Echo from 'laravel-echo';

window.Pusher = require('pusher-js');

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: '410753cda4969a0b8071',
    cluster: 'ap1',
    forceTLS: true
});

createApp(App).use(router).mount('#app')
