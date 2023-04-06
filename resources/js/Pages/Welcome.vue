<script setup>
import { Head } from "@inertiajs/vue3";
import FrontendLayout from "@/Layouts/FrontendLayout.vue";
import Hero from "@/Components/Frontend/Hero.vue";
import Promote from "@/Components/Frontend/Promote.vue";
import About from "@/Components/Frontend/About.vue";
import Skill from "@/Components/Frontend/Skill.vue";
import Portfolio from "@/Components/Frontend/Portfolio.vue";
import Services from "@/Components/Frontend/Services.vue";
import ContactMe from "@/Components/Frontend/ContactMe.vue";

defineProps({
    skills: Object,
    projects: Object,
});
</script>

<template>
    <Head title="My Portfolio" />
    <FrontendLayout>
        <!-- Hero Section -->
        <Hero />

        <!-- Promote Section -->
        <Promote />

        <!-- About Section -->
        <About />

        <!-- Skill Section -->
        <Skill :skills="skills" />

        <!-- Portfolio Section -->
        <Portfolio :skills="skills" :projects="projects" />

        <!-- Services Section -->
        <Services />

        <!-- Contact Section -->
        <ContactMe />
    </FrontendLayout>
</template>

<style></style>
