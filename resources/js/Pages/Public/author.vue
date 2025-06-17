<script setup>
import PublicLayout from '@/Layouts/PublicLayout.vue';
import { Head } from '@inertiajs/vue3';
import dayjs from 'dayjs';

const props = defineProps({
    author: {
        type: Object,
        default: () => []
    },
    posts: {
        type: Object,
        default: () => []
    }
})

const formatDate = (date) => {
    return dayjs(date).format('MMM DD, YYYY | [at] hh:mm A')
}

defineOptions({
    layout: PublicLayout
})
</script>

<template>
    <main>

        <Head title="Authors" />

        <Link :href="route('public.authors')" class="flex gap-2 items-center pt-2 font-bold my-1">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="size-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
        </svg>

        <span class="text-sm font-bold">Back To Authors List</span>
        </Link>
        <h1 class="text-3xl font-bold my-1">{{ props.author.name }}</h1>
        <p class="italic">{{ props.author.email }}</p>
        <br>
        <div v-if="props.posts.data.length === 0" class="text-center text-gray-500 italic my-10">
            No posts found.
        </div>
        <div v-else v-for="post in props.posts.data" :key="post.id"
            class="space-y-0.5 hover:shadow hover:scale-95 transition-all py-2 mb-5 shadow-sm rounded-lg p-2">
            <Link :href="route('public.detailPost', post.id)" class="space-y-1">
            <h3 class="font-bold text-xl">{{ post.title }}</h3>
            <div class="flex text-sm italic">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                </svg>
                <span>Published: {{ formatDate(post.published_at) }}</span>
            </div>
            <div class="italic text-sm p-1 rounded border w-fit">
                #{{ post.category.name }}
            </div>
            <p>{{ post.content.length > 25 ? (post.content.slice(0, 100) + '...') :
                post.content }}</p>

            <div class="flex items-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
                <span class="text-sm">
                    {{ post.view_count }}
                </span>
            </div>
            </Link>
        </div>
        <nav class="relative flex justify-center my-2">
            <div v-for="link in posts.links" :key="link.label">
                <Link preserve-scroll :href="link.url ?? ''" v-html="link.label"
                    class="flex items-center justify-center px-3 py-2 text-sm rounded-lg text-gray-600"
                    :class="{ 'bg-gray-200': link.active, '!text-gray-300': !link.url }" />
            </div>
        </nav>

    </main>
</template>
