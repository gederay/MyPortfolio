<script setup>
import Project from "@/Components/Frontend/Project.vue";
import { ref } from "vue";

const props = defineProps({
    skills: Object,
    projects: Object,
});

const filteredProjects = ref(props.projects.data);
const selectedSkill = ref("all");

const filterProjects = (id) => {
    if (id === "all") {
        filteredProjects.value = props.projects.data;
        selectedSkill.value = id;
    } else {
        filteredProjects.value = props.projects.data.filter((project) => {
            return project.skill.id === id;
        });
        selectedSkill.value = id;
    }
};
</script>

<template>
    <div class="container mx-auto">
        <nav class="mb-12 border-b-2 border-light-tail-100 dark:text-teal-50">
            <ul
                class="flex flex-col lg:flex-row justify-evenly items-center text-gray-500 border-gray-700 dark:border-gray-200 dark:text-gray-400"
            >
                <li class="cursor-pointer capitalize m-4">
                    <button
                        @click="filterProjects('all')"
                        class="flex text-center px-4 py-2 text-white hover:text-gray-700 dark:text-dark-navy-100"
                        :class="[
                            selectedSkill === 'all'
                                ? ' bg-accent rounded-md'
                                : 'rounded-md bg-light-tail-500 dark:text-dark-navy-100',
                        ]"
                    >
                        All
                    </button>
                </li>

                <li
                    class="cursor-pointer capitalize m-4"
                    v-for="projectSkill in skills.data"
                    :key="projectSkill.id"
                >
                    <button
                        @click="filterProjects(projectSkill.id)"
                        class="flex text-center px-4 py-2 text-white hover:text-gray-700 dark:text-dark-navy-100"
                        :class="[
                            selectedSkill == projectSkill.id
                                ? ' bg-accent rounded-md '
                                : 'rounded-md bg-light-tail-500 dark:text-dark-navy-100',
                        ]"
                    >
                        {{ projectSkill.name }}
                    </button>
                </li>
            </ul>
        </nav>

        <section class="grid gap-y-12 lg:grid-cols-3 lg:gap-8">
            <Project
                v-for="project in filteredProjects"
                :key="project.id"
                :project="project"
            />
        </section>
    </div>
</template>
