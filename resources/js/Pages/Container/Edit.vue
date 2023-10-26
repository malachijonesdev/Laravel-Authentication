<script setup>
import { useForm } from '@inertiajs/vue3'
import AppLayout from '@/Layouts/AppLayout.vue';

const props = defineProps({ container: Object, server_locations: Object })

const form = useForm({
    container_name: props.container.container_name,
    container_config: props.container.container_config,
    container_location: props.container.container_location,
    container_domain: props.container.container_domain,
    container_subdomain: props.container.container_subdomain,
    container_status: props.container.container_status === 1 ? true : false,
})

function update() {
    form.put(`/container/${props.container.id}`)
}
</script>

<template>
    <AppLayout title="Container">
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                    <h1 class="mt-8 text-2xl font-medium text-gray-900">
                        Edit container {{ form.container_name }}
                    </h1>
                </div>
                <div class="bg-gray-200 bg-opacity-25 flex mt-2 p-6 lg:p-8">
                    <div class="w-3/5">
                        <form @submit.prevent="update">
                            <div class="grid grid-cols-2 gap-2 items-center mb-4">
                                <span class="font-bold">Container name</span>
                                <input name="container_name" id="container_name" v-model="form.container_name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="" required>
                                <span class="font-bold">Container config</span>
                                <input name="container_config" id="container_config" v-model="form.container_config"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <span class="font-bold">Server location</span>
                                <select
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    v-model="form.container_location">
                                    <option v-for="option in server_locations" :value="option.id">
                                        {{ option.server_location_name }}
                                    </option>
                                </select>
                                <span class="font-bold">Domain</span>
                                <input name="container_domain" id="container_domain" v-model="form.container_domain"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="" required>
                                <span class="font-bold">Subdomain</span>
                                <input name="container_subdomain" id="container_subdomain"
                                    v-model="form.container_subdomain"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="" required>
                                <span class="font-bold">Status</span>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" id="checkbox" class="sr-only peer"
                                        v-model="form.container_status" />
                                    <div
                                        class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                                    </div>
                                </label>
                            </div>
                            <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
