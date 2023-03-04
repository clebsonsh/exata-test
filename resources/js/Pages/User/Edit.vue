<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { Head, useForm, usePage } from "@inertiajs/vue3";

defineProps(["status"]);

const user = usePage().props.user;

const form = useForm({
    name: user.name,
    email: user.email,
});

const submit = () => {
    form.patch(route("users.update", user.id));
};

const passwordLinkForm = useForm({
    email: user.email,
});

const passwordLinkSubmit = () => {
    passwordLinkForm.post(route("password.email"));
};
</script>

<template>
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Updating user {{ user.name }}
            </h2>
        </template>
        <Head title="User Update" />

        <div class="py-12">
            <div class="max-w-md mx-auto sm:px-6 lg:px-8">
                <form @submit.prevent="submit">
                    <div>
                        <InputLabel for="name" value="Name" />

                        <TextInput
                            id="name"
                            type="text"
                            class="mt-1 block w-full"
                            v-model="form.name"
                            required
                            autofocus
                            autocomplete="name"
                        />

                        <InputError class="mt-2" :message="form.errors.name" />
                    </div>

                    <div class="mt-4">
                        <InputLabel for="email" value="Email" />

                        <TextInput
                            id="email"
                            type="email"
                            class="mt-1 block w-full"
                            v-model="form.email"
                            required
                            autocomplete="username"
                        />

                        <InputError class="mt-2" :message="form.errors.email" />
                    </div>

                    <div class="flex items-center justify-between mt-4">
                        <form @submit.prevent="passwordLinkSubmit">
                            <SecondaryButton
                                type="submit"
                                :class="{
                                    'opacity-25': passwordLinkForm.processing,
                                }"
                                :disabled="passwordLinkForm.processing"
                            >
                                Send Reset Password Link
                            </SecondaryButton>
                        </form>
                        <PrimaryButton
                            class="ml-4"
                            :class="{ 'opacity-25': form.processing }"
                            :disabled="form.processing"
                        >
                            Update
                        </PrimaryButton>
                    </div>
                </form>
                <div
                    v-if="status"
                    class="mt-2 font-medium text-sm text-green-600"
                >
                    We have emailed {{ user.name }} with a password reset link.
                </div>
                <InputError
                    class="mt-2"
                    :message="passwordLinkForm.errors.email"
                />
            </div>
        </div>
    </AuthenticatedLayout>
</template>
