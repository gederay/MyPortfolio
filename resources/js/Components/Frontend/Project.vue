<script setup>
import { Link } from "@inertiajs/vue3";

defineProps({
    project: Object,
});
</script>

<template>
    <div>
        <Link
            class="group flex flex-col items-center text-center cursor-pointer"
            :href="project.project_url"
        >
            <div class="mb-6">
                <img
                    class="rounded-2xl h-56"
                    :src="project.image"
                    :alt="project.name"
                />
            </div>
            <span
                class="group-hover:text-light-tail-500 capitalize text-accent text-sm mb-3"
            >
                {{ project.skill.name }}
            </span>
            <h3
                class="group-hover:text-accent capitalize text-light-tail-500 text-sm mb-3"
            >
                {{ project.name }}
            </h3>
        </Link>
    </div>
</template>
