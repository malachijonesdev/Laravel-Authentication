
<script setup>
import { ref } from 'vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import TopbarData from './Topbar.js';

const TopbarItems = ref(TopbarData);
</script>
<template>
    <ResponsiveNavLink v-for="item in TopbarItems" :key="item.route" :href="route(item.route)"
        :active="route().current(item.route)">
        {{ item.name }}
    </ResponsiveNavLink>
</template>
