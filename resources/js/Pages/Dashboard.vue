<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';
</script>

<template>
    <AppLayout title="Dashboard">
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <Welcome />
        </div>
    </AppLayout>
</template>
