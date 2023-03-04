<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import UsersTable from "@/Components/UsersTable.vue";
import { Head } from "@inertiajs/vue3";

defineProps({
    users: {
        type: Array,
    },
});
</script>

<template>
    <Head title="Users Index" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Users Index
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <UsersTable :users="users" />
            </div>
        </div>
    </AuthenticatedLayout>
</template>
