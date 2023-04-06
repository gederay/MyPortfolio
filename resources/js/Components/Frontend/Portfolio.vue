<script setup>
import Projects from "@/Components/Frontend/Projects.vue";

defineProps({
    skills: Object,
    projects: Object,
});
</script>

<template>
    <section
        id="portfolio"
        class="section bg-light-primary dark:bg-dark-primary min-h-[1400px]"
    >
        <div class="container mx-auto">
            <div class="flex flex-col items-center text-center">
                <h1 class="section-title">My Latest Work</h1>
                <p class="subtitle">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Sit minima quaerat libero. Molestias nam unde laboriosam
                    aspernatur, aut praesentium laudantium.
                </p>
            </div>
        </div>

        <Projects :skills="skills" :projects="projects" />
    </section>
</template>
