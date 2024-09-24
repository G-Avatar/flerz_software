import { createRouter, createWebHistory } from 'vue-router';
import { createPinia } from 'pinia';
import RouteList from '@/root/routes/RouteList';

const pinia = createPinia();

const routes = [
    {
        path: '/',
        name: 'landing-page',
        component: () => import('@/components/pages/guest/LandingPage.vue'),
        meta: {
            hasAccess: ['Guest', 'Administrator']
        }
    },
    { ...RouteList.list }, // This includes your /page/dashboard route
];

const mkrouter = createRouter({
    history: createWebHistory(),
    routes: routes,
});

export default {
    router: mkrouter,
    pinia: pinia
};
