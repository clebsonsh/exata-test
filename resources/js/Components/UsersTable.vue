<script setup>
import { Link } from "@inertiajs/vue3";
defineProps({
    users: {
        type: Array,
    },
});
</script>
<template>
    <table
        class="w-full text-left bg-gray-100 my-6 shadow-sm rounded-lg overflow-hidden"
    >
        <thead class="text-xl">
            <tr class="border-b border-gray-300 bg-gray-200 text-center">
                <th class="px-2 py-4">ID</th>
                <th class="px-2 py-4">Name</th>
                <th class="px-2 py-4">Email</th>
                <th class="px-2 py-4">Created at</th>
                <th class="px-2 py-4">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr
                v-for="user in users"
                :key="user.id"
                class="border-b border-gray-300 text-center"
            >
                <td class="p-2">{{ user.id }}</td>
                <td class="p-2">{{ user.name }}</td>
                <td class="p-2">{{ user.email }}</td>
                <td class="p-2">{{ user.created_at }}</td>
                <td class="p-2">
                    <Link
                        method="delete"
                        as="button"
                        preserve-scroll
                        class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150"
                        :href="route('users.destroy', user.id)"
                    >
                        Delete
                    </Link>
                    <Link
                        as="button"
                        class="ml-2 inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-500 active:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition ease-in-out duration-150"
                        :href="route('users.edit', user.id)"
                    >
                        Update
                    </Link>
                </td>
            </tr>
        </tbody>
    </table>
</template>
