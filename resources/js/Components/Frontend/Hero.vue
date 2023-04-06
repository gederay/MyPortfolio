<script setup></script>

<template>
    <section
        id="home"
        class="lg:h-[85vh] flex items-center bg-light-primary dark:bg-dark-primary py-32 lg:py-0 overflow-hidden"
    >
        <div class="container mx-auto h-full">
            <div class="flex flex-col md:flex-row items-center h-full pt-8">
                <div class="flex-1 flex flex-col items-center lg:items-start">
                    <p class="text-lg text-accent text-md mb-[22px]">
                        Hey, Im Here!
                    </p>
                    <h1
                        class="text-4xl leading-[44px] md:text-5xl md:leading-tight lg:text-7xl lg:leading-[1.2] font-bold md:tracking-[-2px]"
                    >
                        I Build & Design <br />
                        Web Interface
                    </h1>
                    <p
                        class="pt-4 pb-8 md:pb-12 mx-w-[480px] text-lg text-center lg:text-left"
                    >
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Ad provident similique culpa praesentium animi quos!
                    </p>
                    <button
                        class="btn btn-md bg-accent hover:bg-light-secondary hover:text-dark-secondary md:btn-lg transition-all"
                    >
                        Work With Me
                    </button>
                </div>
                <div
                    class="flex flex-1 justify-end items-center h-full mt-8 md:mt-0"
                >
                    <img
                        src="https://cdn.tailgrids.com/2.0/image/marketing/images/hero/hero-image-01.png"
                        alt="hero"
                    />
                </div>
            </div>
        </div>
    </section>
</template>
