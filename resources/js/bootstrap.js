
import 'primeicons/primeicons.css'
import axios from 'axios';
import { Chart } from 'chart.js';
axios.defaults.baseURL = import.meta.env.VITE_APP_BASE_URL + '/api';
axios.defaults.withCredentials = true;
axios.defaults.withXSRFToken = true;
axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

Chart.defaults.color = '#000';