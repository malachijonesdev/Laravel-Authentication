<script setup>
import { ref } from 'vue';
import NavLink from '@/Components/NavLink.vue';
import TopbarData from './Topbar.js';

const TopbarItems = ref(TopbarData);
</script>

<template>
    <NavLink v-for="item in TopbarItems" :key="item.route" :href="route(item.route)" :active="route().current(item.route)">
        {{ item.name }}
    </NavLink>
</template>
