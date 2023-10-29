<script setup>
import { Head, Link } from '@inertiajs/vue3';
import Banner from '@/Components/Banner.vue';
import Topbar from './Topbar.vue';

defineProps({
    title: String,
});

</script>

<template>
    <div>

        <Head :title="title" />

        <Banner />

        <div class="min-h-screen bg-gray-100">
            <Topbar />
            <div class="w-full" role="alert"
                v-if="$page.props.jetstream.hasEmailVerification && $page.props.auth.user.email_verified_at === null">
                <div class="text-center bg-red-500 text-white font-bold rounded-t px-4 py-2">
                    You account is not verified!
                    <Link class="text-primary underline underline-offset-8" :href="route('verification.verify-email')">
                    Verify</Link>
                    your email.
                </div>
            </div>

            <!-- Page Heading -->
            <header v-if="$slots.header" class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <slot name="header" />
                </div>
            </header>

            <!-- Page Content -->
            <main>
                <slot />
            </main>
        </div>
    </div>
</template>
