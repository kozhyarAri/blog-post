<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, router } from '@inertiajs/vue3';
import { ref, watch } from 'vue';

let props = defineProps({
    posts: {
        type: Object,
        default: () => []
    },
    status: {
        type: String,
    },
})

let status = ref(props.status || 'all');

watch(status, (value) => {
    router.get('/posts', {
        status: value
    }, {
        preserveState: true
    })
})

const destroy = (id) => {
    if (confirm('Are you sure you want to delete this post?')) {
        router.delete(route('posts.destroy', id), {
            preserveState: true
        })
    }
}


</script>

<template>
    <main>

        <Head title="Posts" />
        <AuthenticatedLayout>
            <div class="py-4">
                <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                        <div class="p-6 space-y-3">
                            <div class="flex items-center justify-between">
                                <select v-model="status" id="underline_select"
                                    class="block py-2.5 px-0 w-52 text-sm px-1 bg-transparent border rounded-lg border-gray-200 appearance-none focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                                    <option value="all" selected>Published & Unpublished</option>
                                    <option value="published">Published</option>
                                    <option value="unpublished">Unpublished</option>
                                </select>
                                <Link :href="route('posts.create')"
                                    class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5">
                                Create Post
                                </Link>

                            </div>
                            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                                <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                                        <tr>
                                            <th scope="col" class="px-6 py-3">
                                                Title
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Status
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="post in posts.data" :key="post.id"
                                            class="odd:bg-white  even:bg-gray-50  border-b  border-gray-200">
                                            <th scope="row"
                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                                {{ post.title.length > 25 ? (post.title.slice(0, 50) + '...') :
                                                    post.title }}
                                            </th>
                                            <td class="px-6 py-4">
                                                <div class="flex items-center gap-2" v-if="post.status == 'published'">
                                                    <div class="size-2 bg-green-500 rounded-full"></div>
                                                    Published
                                                </div>
                                                <div class="flex items-center gap-2" v-else>
                                                    <div class="size-2 bg-red-500 rounded-full"></div>
                                                    Unpublished
                                                </div>
                                            </td>
                                            <td class="px-6 py-2 ">
                                                <div class="flex items-center gap-4">
                                                    <Link :href="route('posts.edit', post.id)"
                                                        class="font-medium text-blue-600  hover:underline">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="size-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                                    </svg>
                                                    </Link>
                                                    <button @click="destroy(post.id)" type="button"
                                                        class="font-medium text-red-600  hover:underline">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            class="size-5">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                            <nav class="relative flex justify-center">
                                <div v-for="link in posts.links" :key="link.label">
                                    <Link preserve-scroll :href="link.url ?? ''" v-html="link.label"
                                        class="flex items-center justify-center px-3 py-2 text-sm rounded-lg text-gray-600"
                                        :class="{ 'bg-gray-200': link.active, '!text-gray-300': !link.url }" />
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    </main>
</template>
