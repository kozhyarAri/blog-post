<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

const props = defineProps({
    postsCount: {
        type: Number,
        required: true
    },
    authorsCount: {
        type: Number,
        required: true
    }
});
</script>

<template>
    <main>

        <Head title="Dashboard" />

        <AuthenticatedLayout>
            <div class="py-12">
                <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg p-6 space-y-4">
                        <div class=" text-xl text-gray-900 font-bold">
                            What We Have ?
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <Link :href="route('posts.index')"
                                class="p-6 relative bg-white shadow-md hover:shadow hover:scale-95 transition-all rounded-md flex justify-between items-center">
                            <div>
                                <h2 class="text-lg font-semibold">Total Posts</h2>
                                <p class="text-3xl font-bold">{{ props.postsCount }}</p>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-16">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                            </svg>
                            <span
                                class="absolute -top-2 left-1/2 -translate-x-1/2 w-fit bg-zinc-700 px-2 text-white rounded-2xl text-sm">
                                Click here to see them
                            </span>
                            </Link>
                            <div
                                class="p-6 bg-white shadow-md hover:shadow hover:scale-95 transition-all rounded-md flex justify-between items-center">
                                <div>
                                    <h2 class="text-lg font-semibold">Total Authors</h2>
                                    <p class="text-3xl font-bold">{{ props.authorsCount }}</p>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-16">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    </main>
</template>
