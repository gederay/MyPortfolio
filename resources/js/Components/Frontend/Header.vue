<script setup>
import { ref } from "vue";
import { Link } from "@inertiajs/vue3";

const showMobileMenu = ref("false");
</script>

<template>
    <div>
        <nav
            class="fixed z-10 w-full bg-light-primary border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-dark-primary"
        >
            <div
                class="container flex flex-wrap items-center justify-between mx-auto"
            >
                <a href="" class="flex items-center">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-6 h-6 text-light-tail-500 dark:text-dark-navy-100"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23-.693L5 14.5m14.8.8l1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0112 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5"
                        />
                    </svg>

                    <span
                        class="self-center ml-3 text-2xl font-semibold whitespace-nowrap text-light-tail-500 dark:text-dark-navy-100"
                        >Portfolio</span
                    >
                </a>
                <button
                    @click="showMobileMenu = !showMobileMenu"
                    data-collapse-toggle="navbar-default"
                    type="button"
                    class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-default"
                    aria-expanded="false"
                >
                    <span class="sr-only">Open main menu</span>
                    <svg
                        class="w-6 h-6"
                        aria-hidden="true"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"
                        ></path>
                    </svg>
                </button>
                <div
                    class="w-full md:block md:w-auto"
                    :class="{ hidden: showMobileMenu }"
                    id="navbar-default"
                >
                    <ul
                        class="flex flex-col p-4 mt-4 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium"
                    >
                        <li>
                            <Link
                                href="#home"
                                class="block text-xl py-2 pl-3 pr-4 text-white bg-light-tail-500 dark:bg-dark-navy-100 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white"
                                >Home</Link
                            >
                        </li>
                        <li>
                            <Link
                                href="#about"
                                class="block text-xl py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                                >About</Link
                            >
                        </li>
                        <li>
                            <Link
                                href="#services"
                                class="block text-xl py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                                >Services</Link
                            >
                        </li>
                        <li>
                            <Link
                                href="#contactme"
                                class="block text-xl py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                                >Contact</Link
                            >
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</template>
