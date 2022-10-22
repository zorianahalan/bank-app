import axios from 'axios'
import router from "../router.js";

const api = axios.create()

api.interceptors.response.use({}, err => {
    console.log(err);
    if (err.response.status === 401 || err.response.status === 419) {
        localStorage.removeItem('auth');
        router.push({ name: 'login' });
    }
})

const getToken = async (func) => {
    api.get('sanctum/csrf-cookie')
        .then(func)
}

export { getToken, api };
