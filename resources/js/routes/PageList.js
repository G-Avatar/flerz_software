import DashboardRoute from "@/root/routes/DashboardRoute";
import UserIndex from "@/components/pages/user/UserIndex.vue";
import CareerRoute from "@/root/routes/CareerRoute";

const pages = {
path: '/pages',
    name: 'user-index',
    component: UserIndex,
    redirect: { name: 'user-dashboard' },
    meta: {
        hasAccess: [
            'Guest',
            'User'
        ]
    },
    children: [
        { ...DashboardRoute.list },
        { ...CareerRoute.list },
    ]
};

export default {
    list: pages,
};
