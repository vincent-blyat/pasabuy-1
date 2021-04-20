import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import './assets/css/tailwind.css'  
import api from './api'
import Echo from 'laravel-echo';

window.Pusher = require('pusher-js');
window.Echo = new Echo({
    broadcaster: "pusher",
    cluster: 'ap1',
    encrypted: true,
    key: '410753cda4969a0b8071',
    authorizer: (channel) => {
        return {
            authorize: (socketId, callback) => {
                api.post('/api/broadcasting/auth', {
                    socket_id: socketId,
                    channel_name: channel.name
                })
                .then(response => {
                    callback(false, response.data);
                })
                .catch(error => {
                    callback(true, error);
                });
            }
        };
    },
})

// window.Echo = new Echo({
//     authEndpoint : 'http://localhost:8000/broadcasting/auth',
//     broadcaster: 'pusher',
//     key: '410753cda4969a0b8071',
//     cluster: 'ap1',
//     forceTLS: true,
//     auth: {
//         headers: {
//             'X-CSRF-Token': "CSRF_TOKEN"
//          }
//       }
// });
//window.Echo.connector.pusher.config.authEndpoint = `http://localhost:8000/broadcasting/auth`;

// import Echo from 'laravel-echo';

// const client = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: '410753cda4969a0b8071',
//     cluster: 'ap1',
//     client: client
// });
import './assets/css/tailwind.css'
window.$ = window.jQuery = require('jquery');
createApp(App).use(router).mount('#app')
