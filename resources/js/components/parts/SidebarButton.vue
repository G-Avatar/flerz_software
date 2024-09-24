<template>
    <div class="w-full h-full p-2 flex rounded select-none">
        <div class="w-full flex items-center" :class="{ ' text-teal-500 font-bold': isActiveRoute }">
            <div class="me-3" :class="{ 'fill-teal-500': isActiveRoute }">
                <slot name="icon" />
            </div>
            <span class="grow text-sm py-2 font-poppins">{{ props.text }}</span>
            <div v-if="props.isDropdown" :class="{ 'rotate-180': props.rotateArrow }">
                <slot name="end-icon" />
            </div>
        </div>
    </div>
</template>

<script setup>
import { computed } from 'vue';
import { useRoute } from 'vue-router';

const props = defineProps({
    text: {
        required: true,
        type: String,
    },
    routeName: {
        required: true,
        type: String,
    },
    routeChildren: {
        type: Array,
        required: false,
        default: () => []
    },
    isDropdown: {
        required: false,
        type: Boolean,
        default: false,
    },
    rotateArrow: {
        required: false,
        type: Boolean,
        default: false,
    }
});

const route = useRoute();

const isActiveRoute = computed(() => {
    return route.name === props.routeName || (props.routeChildren && props.routeChildren.findIndex((list) => list.name === route.name) > -1);
});
</script>

<style scoped>
.fill-teal-500 {
    fill: #14b8a6;
}
.text-teal-500 {
    color: #14b8a6;
}
</style>
