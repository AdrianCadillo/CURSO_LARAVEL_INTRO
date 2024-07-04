import axios from 'axios';
import JQuery from 'jquery';
window.axios = axios;
window.$ = JQuery;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
