import DashboardRoute from "./DashboardRoute";
import UserIndex from "@/components/pages/user/UserIndex.vue";

const pages = {
    path: '/page',
    name: 'user-index',
    component: UserIndex,
    redirect: () => {

        return { name: 'user-dashboard' }
    },
    meta: {
        hasAccess: [
            'Administrator',
            'User'
        ]
    },
    children: [
        { ...DashboardRoute.list },
    ]
};

export default {
    list: pages,
};
