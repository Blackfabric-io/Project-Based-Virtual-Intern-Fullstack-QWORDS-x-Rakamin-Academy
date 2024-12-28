<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create New Page') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('admin.pages.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="grid grid-cols-1 gap-6">
                            <!-- Title -->
                            <div>
                                <x-input-label for="title" :value="__('Title')" />
                                <x-text-input id="title" name="title" type="text" class="mt-1 block w-full"
                                    :value="old('title')" required autofocus />
                                <x-input-error class="mt-2" :messages="$errors->get('title')" />
                            </div>

                            <!-- Content -->
                            <div>
                                <x-input-label for="content" :value="__('Content')" />
                                <textarea id="content" name="content" rows="10"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">{{ old('content') }}</textarea>
                                <x-input-error class="mt-2" :messages="$errors->get('content')" />
                            </div>

                            <!-- Meta Description -->
                            <div>
                                <x-input-label for="meta_description" :value="__('Meta Description')" />
                                <x-text-input id="meta_description" name="meta_description" type="text"
                                    class="mt-1 block w-full" :value="old('meta_description')" />
                                <x-input-error class="mt-2" :messages="$errors->get('meta_description')" />
                            </div>

                            <!-- Meta Keywords -->
                            <div>
                                <x-input-label for="meta_keywords" :value="__('Meta Keywords')" />
                                <x-text-input id="meta_keywords" name="meta_keywords" type="text"
                                    class="mt-1 block w-full" :value="old('meta_keywords')" />
                                <x-input-error class="mt-2" :messages="$errors->get('meta_keywords')" />
                            </div>

                            <!-- Featured Image -->
                            <div>
                                <x-input-label for="featured_image" :value="__('Featured Image')" />
                                <input type="file" id="featured_image" name="featured_image"
                                    class="mt-1 block w-full" accept="image/*">
                                <x-input-error class="mt-2" :messages="$errors->get('featured_image')" />
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <!-- Type -->
                                <div>
                                    <x-input-label for="type" :value="__('Type')" />
                                    <select id="type" name="type" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                        <option value="page" {{ old('type') == 'page' ? 'selected' : '' }}>Page</option>
                                        <option value="product" {{ old('type') == 'product' ? 'selected' : '' }}>Product</option>
                                        <option value="service" {{ old('type') == 'service' ? 'selected' : '' }}>Service</option>
                                    </select>
                                    <x-input-error class="mt-2" :messages="$errors->get('type')" />
                                </div>

                                <!-- Parent Page -->
                                <div>
                                    <x-input-label for="parent_id" :value="__('Parent Page')" />
                                    <select id="parent_id" name="parent_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                        <option value="">None</option>
                                        @foreach($pages as $page)
                                            <option value="{{ $page->id }}" {{ old('parent_id') == $page->id ? 'selected' : '' }}>
                                                {{ $page->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error class="mt-2" :messages="$errors->get('parent_id')" />
                                </div>

                                <!-- Order -->
                                <div>
                                    <x-input-label for="order" :value="__('Order')" />
                                    <x-text-input id="order" name="order" type="number" class="mt-1 block w-full"
                                        :value="old('order', 0)" />
                                    <x-input-error class="mt-2" :messages="$errors->get('order')" />
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <!-- Layout -->
                                <div>
                                    <x-input-label for="layout" :value="__('Layout')" />
                                    <select id="layout" name="layout" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                        <option value="default" {{ old('layout') == 'default' ? 'selected' : '' }}>Default</option>
                                        <option value="full-width" {{ old('layout') == 'full-width' ? 'selected' : '' }}>Full Width</option>
                                        <option value="sidebar" {{ old('layout') == 'sidebar' ? 'selected' : '' }}>With Sidebar</option>
                                    </select>
                                    <x-input-error class="mt-2" :messages="$errors->get('layout')" />
                                </div>

                                <!-- Status -->
                                <div>
                                    <x-input-label for="status" :value="__('Status')" />
                                    <select id="status" name="status" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                        <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                                        <option value="published" {{ old('status') == 'published' ? 'selected' : '' }}>Published</option>
                                        <option value="archived" {{ old('status') == 'archived' ? 'selected' : '' }}>Archived</option>
                                    </select>
                                    <x-input-error class="mt-2" :messages="$errors->get('status')" />
                                </div>

                                <!-- Published At -->
                                <div>
                                    <x-input-label for="published_at" :value="__('Publish Date')" />
                                    <x-text-input id="published_at" name="published_at" type="datetime-local"
                                        class="mt-1 block w-full" :value="old('published_at')" />
                                    <x-input-error class="mt-2" :messages="$errors->get('published_at')" />
                                </div>
                            </div>

                            <!-- Is Published -->
                            <div class="flex items-center">
                                <input type="checkbox" id="is_published" name="is_published" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                    {{ old('is_published') ? 'checked' : '' }}>
                                <x-input-label for="is_published" :value="__('Publish Immediately')" class="ml-2" />
                            </div>
                        </div>

                        <div class="flex items-center justify-end mt-6">
                            <x-secondary-button onclick="window.history.back()">
                                {{ __('Cancel') }}
                            </x-secondary-button>

                            <x-primary-button class="ml-3">
                                {{ __('Create Page') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        // Add any JavaScript for rich text editor initialization here
    </script>
    @endpush
</x-app-layout>
