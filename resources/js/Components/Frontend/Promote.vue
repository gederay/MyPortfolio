<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <div>
        <!-- ====== Call To Action Section Start -->
        <section
            id="promote"
            class="py-10 lg:py-[90px] bg-light-tail-100 dark:bg-dark-navy-500"
        >
            <div class="container mx-auto">
                <div class="overflow-hidden rounded py-12 px-8 md:p-[70px]">
                    <div class="mx-4 flex flex-wrap items-center">
                        <div class="w-full px-4 lg:w-1/2">
                            <span
                                class="mb-4 text-xl font-semibold text-light-secondary dark:text-light-primary"
                            >
                                Find Your Next Dream
                            </span>
                            <h2
                                class="mb-6 text-3xl font-bold leading-tight text-black dark:text-white sm:mb-8 sm:text-[38px] lg:mb-0"
                            >
                                Get started with <br class="xs:block hidden" />
                                our free trial
                            </h2>
                        </div>
                        <div class="w-full px-4 lg:w-1/2">
                            <div class="flex flex-wrap lg:justify-end">
                                <Link
                                    href="#"
                                    class="my-1 inline-block rounded bg-white dark:bg-dark-navy-100 py-4 px-6 text-base text-black font-semibold transition hover:bg-opacity-50 hover:text-light-tail-500 md:px-9 lg:px-6 xl:px-9"
                                >
                                    Get started
                                </Link>
                            </div>
                        </div>
                    </div>
                    <div>
                        <span class="absolute top-0 left-0 z-[-1]">
                            <svg
                                width="189"
                                height="162"
                                viewBox="0 0 189 162"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <ellipse
                                    cx="16"
                                    cy="-16.5"
                                    rx="173"
                                    ry="178.5"
                                    transform="rotate(180 16 -16.5)"
                                    fill="url(#paint0_linear)"
                                />
                                <defs>
                                    <linearGradient
                                        id="paint0_linear"
                                        x1="-157"
                                        y1="-107.754"
                                        x2="98.5011"
                                        y2="-106.425"
                                        gradientUnits="userSpaceOnUse"
                                    >
                                        <stop
                                            stop-color="white"
                                            stop-opacity="0.07"
                                        />
                                        <stop
                                            offset="1"
                                            stop-color="white"
                                            stop-opacity="0"
                                        />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </span>
                        <span class="absolute bottom-0 right-0 z-[-1]">
                            <svg
                                width="191"
                                height="208"
                                viewBox="0 0 191 208"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <ellipse
                                    cx="173"
                                    cy="178.5"
                                    rx="173"
                                    ry="178.5"
                                    fill="url(#paint0_linear)"
                                />
                                <defs>
                                    <linearGradient
                                        id="paint0_linear"
                                        x1="-3.27832e-05"
                                        y1="87.2457"
                                        x2="255.501"
                                        y2="88.5747"
                                        gradientUnits="userSpaceOnUse"
                                    >
                                        <stop
                                            stop-color="white"
                                            stop-opacity="0.07"
                                        />
                                        <stop
                                            offset="1"
                                            stop-color="white"
                                            stop-opacity="0"
                                        />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== Call To Action Section End -->
    </div>
</template>
