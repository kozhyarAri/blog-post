<script setup>
import PublicLayout from '@/Layouts/PublicLayout.vue';
import { Head } from '@inertiajs/vue3';
import dayjs from 'dayjs';

const props = defineProps({
    authors: {
        type: Object,
        default: () => []
    }
})

const formatDate = (date) => {
    return dayjs(date).format('MMM DD, YYYY | [at] hh:mm A')
}
</script>

<template>
    <main>

        <Head title="Authors" />
        <PublicLayout class="text-zinc-800">
            <h1 class="text-3xl font-bold my-1">Authors</h1>
            <p class="italic">Our best authors</p>
            <br>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div v-for="author in props.authors.data" :key="author.id" class="">
                    <Link :href="route('public.author', author.id)"
                        class="flex gap-2 space-y-0.5 hover:shadow hover:scale-95 gap-2 transition-all py-2 mb-5 shadow-sm rounded-lg p-2">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-12">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                    </div>
                    <div>
                        <h2 class=" font-bold">{{ author.name }}</h2>
                        <p class="text-sm text-gray-500">
                            {{ author.email }}
                        </p>
                    </div>
                    </Link>
                </div>
            </div>
            <nav class="relative flex justify-center my-2">
                <div v-for="link in authors.links" :key="link.label">
                    <Link preserve-scroll :href="link.url ?? ''" v-html="link.label"
                        class="flex items-center justify-center px-3 py-2 text-sm rounded-lg text-gray-600"
                        :class="{ 'bg-gray-200': link.active, '!text-gray-300': !link.url }" />
                </div>
            </nav>
        </PublicLayout>
    </main>
</template>
