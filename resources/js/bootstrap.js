import axios from 'axios';
import './bootstrap/bootstrap.bundle.min.js';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
