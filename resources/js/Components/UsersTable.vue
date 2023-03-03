<script setup>
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
            <tr class="border-b border-gray-300 bg-gray-200">
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
                class="border-b border-gray-300"
            >
                <td class="p-2">{{ user.id }}</td>
                <td class="p-2">{{ user.name }}</td>
                <td class="p-2">{{ user.email }}</td>
                <td class="p-2">{{ user.created_at }}</td>
                <td class="p-2">deletar / editar</td>
            </tr>
        </tbody>
    </table>
</template>
