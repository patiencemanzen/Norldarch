@extends('layouts.master')

@section('title') dashboard - home @stop

@section('additional')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/nnlpesm8jfglmqbkm0xy1bh0p3pzhfpslfkjyt978k8whp6l/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    <script type="text/javascript">
        tinymce.init({
            selector: 'textarea#tinymce',
            height: 300,
            menubar: true,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount', 'image'
            ],
            toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
            content_css: '//www.tiny.cloud/css/codepen.min.css'
        });

        $(document).ready(function() {
            var formId = '#save-content-form';

            $(formId).on('submit', function(e) {
                e.preventDefault();

                var data = $(formId).serializeArray();

                data.push({
                    name: 'body',
                    value: tinyMCE.get('tinymce').getContent()
                });

                $.ajax({
                    type: 'POST',
                    url: $(formId).attr('data-action'),
                    data: data,
                    success: function (response, textStatus, xhr) {
                        location.reload();
                    },
                });
            });
            });
    </script>
@stop

@section('content')
    <livewire:navbar />

    <div class="flex">
        <div>
            <div class="overflow-hidden 2xl:container 2xl:mx-auto lg:py-2 lg:px-20 md:px-6 px-4">
                <div class="border-gray-200 border-b pb-4 flex justify-between items-center">
                    <h2 class="text-4xl font-extrabold dark:text-white mt-10">All blogs</h2>
                    <div class="ml-3">
                        <!-- Modal toggle -->
                        <button class="block text-white bg-green-700 mt-4 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" type="button" data-modal-toggle="blogModel">
                            Create new Blog
                        </button>

                        <!-- Main modal -->
                        <div id="blogModel" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                            <div class="relative p-4 w-full max-w-6xl h-full md:h-auto">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                            Write your new Blog
                                        </h3>
                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="blogModel">
                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>

                                    <!-- Modal body -->
                                    <form  id="save-content-form" data-action="{{ route('post.blogs') }}" method="POST" enctype="multipart/form-data">
                                        <div class="p-6 space-y-6 overflow-auto max-h-96">
                                            @csrf

                                            <div class="mb-6">
                                                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Select an blog category</label>
                                                <select id="countries" name="blog_category_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                    <option selected>Choose a category</option>
                                                    @forelse ($categories as $category)
                                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                                    @empty
                                                        <option>No category listed</option>
                                                    @endforelse
                                                </select>
                                            </div>
                                            <div class="mb-6">
                                                <label for="success" class="block mb-2 text-sm font-medium text-green-700 dark:text-green-500">Title</label>
                                                <input type="text" id="success" name="title" class="bg-green-50 border  text-green-900 dark:text-green-400 placeholder-green-700 dark:placeholder-green-500 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-green-500" placeholder="Success input">
                                            </div>
                                            <div class="mb-6">
                                                <label for="success" class="block mb-2 text-sm font-medium text-green-700 dark:text-green-500">Caption</label>
                                                <input type="text" id="success" name="caption" class="bg-green-50 border border-green-500 text-green-900 dark:text-green-400 placeholder-green-700 dark:placeholder-green-500 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-green-500" placeholder="Success input">
                                            </div>
                                            <div class="py-2 px-4 bg-white rounded-t-lg w-full dark:bg-gray-800">
                                                <label for="comment" class="sr-only">Write you content here</label>
                                                <textarea
                                                    id="tinymce"
                                                    rows="4"
                                                    name="contents"
                                                    class="px-0 w-full text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
                                                ></textarea>
                                            </div>
                                        </div>

                                        <!-- Modal footer -->
                                        <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                                            <button type="submit" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Save Changes and Publish</button>
                                            <button data-modal-toggle="blogModel" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <livewire:blogs identifier="index" :blogs="$blogs" />
        </div>
        <div>
            <div class="flex justify-between items-center">
                <h2 class="text-4xl font-extrabold dark:text-white mb-7 mt-7">All Categories</h2>
                <div class="mr-10 ml-10">
                    <!-- Modal toggle -->
                    <button class="block text-white bg-indigo-700 mt-4 hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-blue-800" type="button" data-modal-toggle="blogCategoryModel">
                        Add Blog category
                    </button>

                    <!-- Main modal -->
                    <div id="blogCategoryModel" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        Create new blog category
                                    </h3>
                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="blogCategoryModel">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>

                                <!-- Modal body -->
                                <form action="{{ route('blog-category.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="p-6 space-y-6">
                                        <div class="mb-1">
                                            <label for="success" class="block mb-2 text-sm font-medium text-green-700 dark:text-green-500">
                                                Category Name
                                            </label>
                                            <input type="text" id="success" name="name" class="bg-green-50 border border-green-500 text-green-900 dark:text-green-400 placeholder-green-700 dark:placeholder-green-500 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-green-500" placeholder="Success input">
                                        </div>
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                                        <button
                                            data-modal-toggle="blogCategoryModel"
                                            type="submit"
                                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600"
                                        >Create</button>
                                        <button data-modal-toggle="blogCategoryModel" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="mega-menu-full-dropdown" class="mt-1 bg-gray-50 border-gray-200 shadow-sm md:bg-white border-y dark:bg-gray-800 dark:border-gray-600">
                <div class="grid py-5 px-4 mx-auto max-w-screen-xl text-gray-900 dark:text-white sm:grid-cols-2 md:px-6">
                    <ul>
                        @forelse ($categories as $category)
                            <li>
                                <a href="#" class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <div class="font-semibold">{{$category->name}}</div>
                                    <span class="text-sm font-light text-gray-500 dark:text-gray-400">Connect with third-party tools that you're already using.</span>
                                </a>
                            </li>
                        @empty
                            <option>No category listed</option>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <livewire:footer />
@stop
