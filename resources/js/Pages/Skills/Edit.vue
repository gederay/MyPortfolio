<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { Head, useForm, router } from "@inertiajs/vue3";
// import { Inertia } from "@inertiajs/inertia";

const props = defineProps({
    skill: Object,
});

const form = useForm({
    name: props.skill?.name,
    image: props.skill?.image,
});

const submit = () => {
    router.post(`/skills/${props.skill?.id}`, {
        _method: "put",
        name: form.name,
        image: form.image,
    });
};
</script>

<template>
    <Head title="Edit Skills" />

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="font-semibold text-xl text-gray-800 dark:text-white leading-tight"
            >
                Edit Skills
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white shadow-sm sm:rounded-lg p-12">
                    <!-- Form -->
                    <form @submit.prevent="submit">
                        <div class="mt-4">
                            <InputLabel for="name" value="Skill Name" />

                            <TextInput
                                id="name"
                                type="text"
                                class="mt-1 block w-full"
                                v-model="form.name"
                                autocomplete="name"
                            />

                            <InputError
                                class="mt-2"
                                :message="$page.props.errors.name"
                            />
                        </div>

                        <div class="mt-4">
                            <InputLabel for="image" value="Skill Image" />

                            <TextInput
                                id="image"
                                type="file"
                                class="mt-1 block w-full"
                                autocomplete="skill image"
                                @input="form.image = $event.target.files[0]"
                            />

                            <InputError
                                class="mt-2"
                                :message="$page.props.errors.image"
                            />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <PrimaryButton
                                class="ml-4"
                                :class="{ 'opacity-25': form.processing }"
                                :disabled="form.processing"
                            >
                                Update
                            </PrimaryButton>
                        </div>
                    </form>
                    <!-- End form -->
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
