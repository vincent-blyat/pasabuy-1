import axios from 'axios';
import VueSimpleAlert from 'vue-simple-alert'

axios.interceptors.response.use(
    function(response) {
        // Call was successful, don't do anything special.
        return response;
    },
    function (error) {
    switch (error.response.status) {
        case 401: // Not logged in
            localStorage.removeItem('isLoggedIn');
            this.$router.push({name:"login"});
            break;
        case 419: // Session expired
            localStorage.removeItem('isLoggedIn');
            this.$router.push({name:"login"});
            break;
        case 503: // Down for maintenance
            // Bounce the user to the login screen with a redirect back
            localStorage.removeItem('isLoggedIn');
            this.$router.push({name:"login"});
            //window.location.reload();
            break;
        case 500:
            VueSimpleAlert.alert('Oops, something went wrong!  The team have been notified.','Error', 'error')
            break;
        default:
            // Allow individual requests to handle other errors
            return Promise.reject(error);
    }
});

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