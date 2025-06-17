<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';
import { ref } from 'vue';
const props = defineProps({
    post: {
        type: Object,
        required: true
    },
    authors: {
        type: Object,
        default: () => []
    },
    categories: {
        type: Object,
        default: () => []
    }
})
const imagePreview = ref(null);
const form = useForm({
    title: props.post.title,
    content: props.post.content,
    author_id: props.post.author_id,
    category_id: props.post.category_id,
    status: props.post.status,
    image: props.post.image,
    _method: 'put'
})

const submit = () => {
    form.post(route('posts.update', props.post.id), {
        onError: () => {
            console.log('error');
        }
    })
}
function handleImageChange(e) {
    const file = e.target.files[0];
    if (file) {
        // Revoke previous URL if exists
        if (imagePreview.value) {
            URL.revokeObjectURL(imagePreview.value);
        }
        form.image = file;
        imagePreview.value = URL.createObjectURL(file);
    }
}

</script>

<template>
    <main>

        <Head title="Post Create" />
        <AuthenticatedLayout>

            <div class="py-4">
                <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg p-5 ">
                        <div v-if="$page.props.flash.message"
                            class="p-4 mb-4 mt-2 text-sm text-green-800 rounded-lg bg-green-50" role="alert">
                            <span class="font-medium">{{ $page.props.flash.message }}</span>
                        </div>
                        <Link :href="route('posts.index')"
                            class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded text-sm px-5 py-2.5">
                        Back to Posts
                        </Link>
                        <form @submit.prevent="submit" class="max-w-md mx-auto">
                            <div class="mb-5">
                                <label for="title" class="block mb-2 text-sm font-medium text-gray-900">
                                    Title
                                </label>
                                <input type="text" id="title" v-model="form.title"
                                    class="shadow outline-none border-none focus:shadow-sm text-gray-900 text-sm rounded-lg  block w-full p-2.5"
                                    placeholder="Xbox News" required />
                                <span class="text-red-600 text-sm" v-if="form.errors.title">
                                    {{ form.errors.title }}
                                </span>
                            </div>
                            <div class="mb-5">
                                <label for="content" class="block mb-2 text-sm font-medium text-gray-900">
                                    Content
                                </label>
                                <textarea rows="6" type="text" id="content" v-model="form.content"
                                    class="shadow outline-none border-none focus:shadow-sm text-gray-900 text-sm rounded-lg  block w-full p-2.5"
                                    placeholder="Xbox News 2025 Games" required />
                                <span class="text-red-600 text-sm" v-if="form.errors.content">
                                    {{ form.errors.content }}
                                </span>
                            </div>
                            <div class="mb-5 flex justify-between gap-5">
                                <div class="w-full">
                                    <label for="author" class="block mb-2 text-sm font-medium text-gray-900">Select
                                        an Author</label>
                                    <select id="author" v-model="form.author_id"
                                        class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                        <option value="">Authors</option>
                                        <option v-for="author in props.authors" :key="author.id" :value="author.id">
                                            {{ author.name }}
                                        </option>
                                    </select>
                                    <span class="text-red-600 text-sm" v-if="form.errors.author_id">
                                        {{ form.errors.author_id }}
                                    </span>
                                </div>
                                <div class="w-full">
                                    <label for="categories" class="block mb-2 text-sm font-medium text-gray-900">Select
                                        Category</label>
                                    <select id="categories" v-model="form.category_id"
                                        class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                        <option v-for="category in props.categories" :key="category.id"
                                            :value="category.id">
                                            {{ category.name }}
                                        </option>
                                    </select>
                                    <span class="text-red-600 text-sm" v-if="form.errors.category_id">
                                        {{ form.errors.category_id }}
                                    </span>
                                </div>
                            </div>
                            <div class="w-full mb-5">
                                <label for="status" class="block mb-2 text-sm font-medium text-gray-900">
                                    Status
                                </label>
                                <select id="status" v-model="form.status"
                                    class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                    <option value="unpublished">Unpublished</option>
                                    <option value="published">Published</option>
                                </select>
                            </div>
                            <div class="flex flex-col items-center justify-center w-full mb-5">
                                <label for="dropzone-file"
                                    class="flex flex-col items-center justify-center w-full h-40  cursor-pointer  ">
                                    <div v-if="!form.image && !imagePreview"
                                        class="flex flex-col w-full items-center border-2 border-gray-300 rounded-lg  border-dashed justify-center pt-5 pb-6">
                                        <svg class="w-8 h-8 mb-4 text-gray-500" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                        </svg>
                                        <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Click to
                                                upload</span> or drag and drop</p>
                                        <p class="text-xs text-gray-500">PNG, JPG, JPEG </p>
                                    </div>
                                    <img v-if="form.image && !imagePreview" :src="form.image"
                                        class="w-full h-40 rounded-lg object-cover" alt="Selected image preview">
                                    <img v-if="imagePreview" :src="imagePreview"
                                        class="w-full h-40 rounded-lg object-cover" alt="Selected image preview">
                                    <input id="dropzone-file" type="file" @change="handleImageChange" class="hidden" />
                                </label>
                                <span v-if="form.errors.image" class="text-red-600 text-sm">
                                    {{ form.errors.image }}
                                </span>
                            </div>
                            <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    </main>

</template>
