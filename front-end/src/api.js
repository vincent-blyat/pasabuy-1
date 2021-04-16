import axios from 'axios';

export default axios.create({
    baseURL: `http://localhost:8000/`,
    headers: {
        'Content-Type': 'application/json',
        'Access-Control-Allow-Origin': '*'
    },
    xsrfCookieName: 'XSRF-TOKEN',
    xsrfHeaderName: 'X-XSRF-TOKEN',
    withCredentials: true
});