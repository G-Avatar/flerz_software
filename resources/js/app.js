import './bootstrap';
import { createApp } from 'vue';
import App from '@/components/App.vue';
import router from '@/root/router';
import PrimeVue from "primevue/config";
import 'primeicons/primeicons.css'; 

const app = createApp(App);
app.use(PrimeVue, {
    unstyled: false,
});
app.use(router.pinia);
app.use(router.router);
app.mount('#app');