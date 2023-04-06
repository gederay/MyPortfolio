<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link } from "@inertiajs/vue3";

defineProps({
    skills: Object,
});
</script>

<template>
    <Head title="Skills" />

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="font-semibold text-xl text-gray-800 dark:text-white leading-tight"
            >
                Skills
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="my-4 flex justify-end">
                    <Link
                        :href="route('skills.create')"
                        class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 text-white rounded-md"
                        >New Skill</Link
                    >
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <!-- table -->
                    <div class="relative overflow-x-auto">
                        <table
                            class="w-full text-sm text-left text-gray-500 dark:text-gray-400"
                        >
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"
                            >
                                <tr>
                                    <th scope="col" class="px-6 py-3">ID</th>
                                    <th scope="col" class="px-6 py-3">Name</th>
                                    <th scope="col" class="px-6 py-3">Image</th>
                                    <th scope="col" class="px-6 py-3">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr
                                    class="bg-white dark:bg-gray-800"
                                    v-for="skill in skills.data"
                                    :key="skill.id"
                                >
                                    <th
                                        scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                                    >
                                        {{ skill.id }}
                                    </th>
                                    <td class="px-6 py-4">{{ skill.name }}</td>
                                    <td class="px-6 py-4">
                                        <img
                                            :src="skill.image"
                                            :alt="skill.name"
                                            class="w-12 h-12 rounded-full object-cover"
                                        />
                                    </td>
                                    <td class="px-6 py-4">
                                        <Link
                                            :href="
                                                route('skills.edit', skill.id)
                                            "
                                            class="px-4 py-2 bg-yellow-500 hover:bg-yellow-700 text-white rounded-md"
                                            >Edit</Link
                                        >
                                        <Link
                                            :href="
                                                route(
                                                    'skills.destroy',
                                                    skill.id
                                                )
                                            "
                                            method="delete"
                                            as="button"
                                            type="button"
                                            class="ml-4 px-4 py-2 bg-red-500 hover:bg-red-700 text-white rounded-md"
                                            >Delete</Link
                                        >
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- End table -->
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
