<script setup>
import { Link } from '@inertiajs/vue3'
import AppLayout from '@/Layouts/AppLayout.vue';

const props = defineProps({ containers: Object, plans: Object })

const getPlanById = (id, key) => {
    const plan = props.plans.find(item => item.id === id);
    return plan[key];
}
</script>

<template>
    <AppLayout title="Container">
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                    <h1 class="mt-8 text-2xl font-medium text-gray-900">
                        Containers
                    </h1>
                </div>
                <div class="bg-gray-200 bg-opacity-25 grid grid-cols-8 gap-6 lg:gap-8 p-6 lg:p-8">
                    <div class="col-span-2 font-bold">Name</div>
                    <div class="font-bold">Usage</div>
                    <div class="col-span-2 font-bold">Expires on</div>
                    <div class="font-bold">Status</div>
                    <div class="font-bold">Plan</div>
                    <div></div>
                    <div v-for="container in  containers " :key="container.id" class="col-span-8 grid grid-cols-8">
                        <div class="col-span-2">{{ container.container_id }}</div>
                        <div>49 / {{ getPlanById(container.container_plan, "plan_max_requests") }}</div>
                        <div class="col-span-2">{{ container.container_next_billing_cycle }}</div>
                        <div>{{ container.container_status ? 'Active' : 'Disactive' }}</div>
                        <div> {{ getPlanById(container.container_plan, "plan_name") }}</div>
                        <div>
                            <Link class="btn-indigo" :href="route('container.show', container.id)">
                            <span class=" btn btn-sm btn-bg-light btn-active-color-primary">View</span>
                            </Link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
