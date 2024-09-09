import { createRouter, createWebHistory } from 'vue-router';
import { createPinia } from 'pinia';

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
    // {
    //     path: '/login',
    //     name: 'guest-index',
    //     component: () => import('@/components/pages/guest/LoginPage.vue'),
    //     meta: {
    //         hasAccess: ['Guest']
    //     }
    // },
];

const mkrouter = createRouter({
    routes: routes,
    history: createWebHistory()
});

// mkrouter.beforeEach(async (to, from, next) => {
//     if (!authState.loaded) {
//         await authState.load();
//         authState.loaded = true;
//     }
//     if (!adminAuthState.loaded) {
//         await adminAuthState.load();
//         adminAuthState.loaded = true;
//     }

//     if (to.meta.hasAccess && to.meta.hasAccess.includes(role_name.value)) {
//         next();
//     } else {
//         if (authState.current_role.role_name !== 'Guest') {
//             next({ name: 'user-index' });
//         } else if (adminAuthState.current_role.role_name === 'Super Administrator') {
//             next({ name: 'admin-index' });
//         } else {
//             next({ name: 'landing-page' });
//         }
//     }
// });

export default {
    router: mkrouter,
    pinia: pinia
};
