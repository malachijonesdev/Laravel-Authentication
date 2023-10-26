<script setup>
import { Link } from '@inertiajs/vue3'
import AppLayout from '@/Layouts/AppLayout.vue';

const props = defineProps({ container: Object, server_locations: Object, plans: Object })

const getPlanById = (id, key) => {
    const plan = props.plans.find(item => item.id === id);
    return plan[key];
}

const getLocationById = (id, key) => {
    const location = props.server_locations.find(item => item.id === id);
    return location ? location[key] : '';
}
</script>

<template>
    <AppLayout title="Container">
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                    <h1 class="mt-8 text-2xl font-medium text-gray-900">
                        View container {{ container.container_name }}
                    </h1>
                </div>
                <div class="bg-gray-200 bg-opacity-25 flex mt-2 p-6 lg:p-8">
                    <div class="w-3/5">
                        <div class="grid grid-cols-2 gap-2 items-center mb-4">
                            <span class="font-bold">Container name</span>
                            {{ container.container_name }}
                            <span class="font-bold">Container config</span>
                            {{ container.container_config }}
                            <span class="font-bold">Server location</span>
                            {{ getLocationById(container.container_location, "server_location_name") }}
                            <span class="font-bold">Domain</span>
                            {{ container.container_domain }}
                            <span class="font-bold">Subdomain</span>
                            {{ container.container_subdomain }}
                            <span class="font-bold">Billing plan</span>
                            {{ getPlanById(container.container_plan, "plan_name") }}
                            <span class="font-bold">Billing cycle</span>
                            {{ container.container_billing_period == 1 ? 'Monthly' : 'Yearly' }}
                            <span class="font-bold">Next billing</span>
                            {{ container.container_next_billing_cycle }}
                            <span class="font-bold">Status</span>
                            {{ container.container_status ? 'Active' : 'Disactive' }}
                            <span class="font-bold">Requests this month</span>
                            49/{{ getPlanById(container.container_plan, "plan_max_requests") }}
                        </div>
                        <Link class="btn-indigo" :href="route('container.edit', container.id)">
                        <span
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit</span>
                        </Link>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
