<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import UsersTable from "@/Components/UsersTable.vue";
import { Head, Link } from "@inertiajs/vue3";

defineProps(["users"]);
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
                <div class="text-right">
                    <Link
                        as="button"
                        class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500 active:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition ease-in-out duration-150"
                        :href="route('users.create')"
                    >
                        Create a new User
                    </Link>
                </div>
                <UsersTable :users="users" />
            </div>
        </div>
    </AuthenticatedLayout>
</template>
