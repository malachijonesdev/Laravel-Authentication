<script setup>
import { Head, useForm } from '@inertiajs/vue3';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';

const props = defineProps({
    status: String,
});

const form = useForm({ code: '' });

const submit = () => {
    form.post(route('verification.verify-email'));
};

const skip = () => {
    form.post(route('verification.verify-email-skip'));
};

</script>

<template>
    <Head title="Email Verification" />

    <div class="w-full">
        <div
            class="min-w-screen min-h-screen flex items-center justify-center px-5 py-5 bg-gradient-to-br from-sky-50 to-gray-200">
            <div class="text-gray-500 rounded-3xl shadow w-full overflow-hidden" style="max-width:500px">
                <div class="md:flex w-full">
                    <div id="login" class="w-full bg-white pt-4">
                        <div class="relative">
                            <div class="text-gray-500 md:w-5/5 md:px-12">
                                <div v-if="status === 'error'" class="mb-4 font-medium text-sm text-red-600">
                                    Please, inter valid code!
                                </div>
                                <div class="justify-center">
                                    <form @submit.prevent="submit">
                                        <div>
                                            <div class="flex -mx-3">
                                                <div class="w-full px-3 mb-5">
                                                    <InputLabel for="code" value="code" />
                                                    <TextInput id="code" v-model="form.code" type="text"
                                                        class="mt-1 block w-full" required autocomplete="code" />
                                                    <InputError :message="form.errors.code" class="mt-2" />
                                                </div>
                                            </div>
                                            <div class="flex -mx-3">
                                                <div class="w-full px-3 mb-3">
                                                    <PrimaryButton :class="{ 'opacity-25': form.processing }"
                                                        :disabled="form.processing">
                                                        E-mail verifieren
                                                    </PrimaryButton>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                    <div
                                        class="my-2 flex items-center before:mt-0.5 before:flex-1 before:border-t before:border-neutral-300 after:mt-0.5 after:flex-1 after:border-t after:border-neutral-300">
                                        <p class="mx-4 mb-0 text-center font-semibold">
                                            Or
                                        </p>
                                    </div>

                                    <form @submit.prevent="skip">
                                        <div class="flex -mx-3">
                                            <div class="w-full px-3 mb-3">
                                                <PrimaryButton :class="{ 'opacity-25': form.processing }"
                                                    :disabled="form.processing">
                                                    Skip email verification
                                                </PrimaryButton>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
