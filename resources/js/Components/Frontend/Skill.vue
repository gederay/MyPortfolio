<script setup>
defineProps({
    skills: Object,
});
</script>

<template>
    <section id="skills" class="bg-light-tail-100 dark:bg-dark-navy-500">
        <div class="container mx-auto p-20">
            <div class="grid grid-cols md:grid-flow-col">
                <div
                    class="flex items-center justify-center"
                    v-for="skill in skills.data"
                    :key="skill.id"
                >
                    <img :src="skill.image" :alt="skill.name" class="lg:h-20" />
                </div>
            </div>
        </div>
    </section>
</template>
