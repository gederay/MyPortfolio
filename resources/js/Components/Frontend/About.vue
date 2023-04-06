<script setup>
import { Link } from "@inertiajs/vue3";
</script>
<template>
    <section
        id="about"
        class="section bg-light-secondary dark:bg-dark-secondary"
    >
        <div class="container mx-auto">
            <div class="flex flex-col xl:flex-row gap-24">
                <img
                    class="object-cover h-full w-[566px] md:mx-auto lg:mx-0 rounded-2xl"
                    src="https://images.pexels.com/photos/7988088/pexels-photo-7988088.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                    alt="about"
                />
                <div
                    class="flex flex-col items-center text-center lg:items-start lg:text-left"
                >
                    <div class="flex flex-col">
                        <h2
                            class="text-3xl lg:text-4xl font-medium lg:font-extrabold mb-3"
                        >
                            About Me
                        </h2>
                        <p class="mb-4 text-accent">
                            Freelancer frontend Web Developer
                        </p>
                        <hr class="mb-8 opacity-90 dark:opacity-5" />
                        <p class="mb-8">
                            Lorem, ipsum dolor sit amet consectetur adipisicing
                            elit. Impedit deserunt placeat doloremque voluptate,
                            vero recusandae sed eaque nostrum reiciendis animi.
                            Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Ratione odit consequuntur hic, id autem
                            facilis iure accusantium unde eaque veritatis?
                            <br /><br />
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Sunt quia facilis obcaecati est impedit? Qui.
                            Lorem, ipsum dolor sit amet consectetur adipisicing
                            elit. Ratione iure odio facilis soluta nulla
                            reprehenderit?
                        </p>
                    </div>
                    <Link
                        href=""
                        class="btn btn-md bg-accent text-slate-200 rounded-md"
                        >Contact Me</Link
                    >
                </div>
            </div>
        </div>
    </section>
</template>
