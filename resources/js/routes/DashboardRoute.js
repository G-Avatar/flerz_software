import DashboardPage from '@/components/pages/user/dashboard/DashboardPage.vue';
import Dashboard from '@/components/pages/user/dashboard/Dashboard.vue';

const dashboard = {
    path: 'user-dashboard',
    name: 'user-dashboard',
    component: DashboardPage,
    redirect: { name: 'user-dashboard-content' },
    meta: {
        hasAccess: [
            'Guest',
            'User',
        ]
    },  children: [
        {
            path: 'content',
            name: 'user-dashboard-content',
            component: Dashboard,
        },
    ]
};

export default {
    list: dashboard,
};