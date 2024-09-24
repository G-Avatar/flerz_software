import Career from "@/components/pages/guest/Career.vue";

const career = {
    path: 'user-career',
    name: 'user-career',
    component: Career,
    redirect: { name: 'user-career' },
    meta: {
        hasAccess: [
            'Guest',
            'User',
        ]
    },
};

export default {
    list: career,
};