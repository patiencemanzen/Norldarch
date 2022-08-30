@extends('layouts.master')

@section('title') Blogs @stop

@section('additional')
<link rel="stylesheet" href="{{ asset('css/single-blogs.css') }}">
@stop

@section('content')
    <livewire:navbar />

    <div>
        <div class="max-w-8xl mx-auto px-4 sm:px-6 md:px-8">
            <div class="hidden lg:block fixed z-20 inset-0 top-[7.8125rem] left-[max(0px,calc(50%-45rem))] right-auto w-[19.5rem] pb-10 px-8 overflow-y-auto">

            </div>

            <div class="lg:pl-[19.5rem]">
                <div class="max-w-3xl mx-auto pt-10 xl:max-w-none xl:ml-0 xl:mr-[15.5rem] xl:pr-16">
                    <header id="header" class="relative z-20 border-b border-gray-400 pb-10">
                        <div>
                            <p class="mb-2 text-sm leading-6 font-semibold text-sky-500 dark:text-sky-400">Core Concepts</p>
                            <div class="flex items-center">
                                <h1 class="inline-block text-3xl sm:text-3xl font-extrabold text-slate-900 tracking-tight dark:text-slate-200">
                                    {{$blog->title}}
                                </h1>
                            </div>
                        </div>
                        <p class="mt-2 text-lg text-slate-700 dark:text-slate-300">
                            {{$blog->caption}}
                        </p>
                    </header>


                    <div id="content-wrapper" class="relative z-20 prose prose-slate mt-8 dark:prose-dark dark:text-gray-300">
                        <div class="single-blog-contents">
                            {!! $blog->blogContent->contents !!}
                        </div>
                </div>
            </div>
        </div>
    </div>

    <livewire:footer />
@stop
