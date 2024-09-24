import DashboardPage from '@/components/pages/user/dashboard/Dashboard.vue';

const dashboard = {
    path: 'dashboard',
    name: 'user-dashboard',
    component: DashboardPage,
    meta: {
        hasAccess: [
            'Administrator',
            'User',
        ]
    },
};

export default {
    list: dashboard,
};