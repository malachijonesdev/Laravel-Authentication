<script setup>
import ContainerStatus from './ContainerStatus.vue';
</script>

<template>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <ContainerStatus />

            <div class="mt-5 md:mt-0 md:col-span-2">
                <div class="px-4 py-5 bg-white sm:p-6 shadow">
                    <div class="font-bold text-xl mb-2">Payment details</div>
                    <p class="text-gray-700 text-base">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores
                        et perferendis eaque, exercitationem praesentium nihil.
                    </p>
                </div>
            </div>
            <div></div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <div class="px-4 py-5 bg-white sm:p-6 shadow">
                    <div class="font-bold text-xl mb-2">Billing history</div>
                    <p class="text-gray-700 text-base">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores
                        et perferendis eaque, exercitationem praesentium nihil.
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>
