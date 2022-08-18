<div class="overflow-hidden 2xl:container 2xl:mx-auto lg:py-16 lg:px-20 md:py-12 md:px-6 py-9 px-4">
    <ol class="relative border-l border-gray-200 dark:border-gray-700 max-w-3xl">
        @foreach ($blogs as $blog )
            <li class="mb-10 ml-4">
                <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>

                <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">{{date('d m, Y', strtotime($blog->created_at))}}</time>
                <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500"> - {{$blog->created_at->diffForHumans()}}</time>

                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">{{strtoupper($blog->title)}}</h3>
                <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">{{$blog->caption}}</p>

                <div id="accordion-open" data-accordion="open">
                    <a href="{{ route('single.blog', ['blog' => $blog->id]) }}" class="inline-flex items-center py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-200 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700">
                        Read more !
                        <svg class="ml-2 w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <div class="inline-flex rounded-md" role="group" id="app">
                        <button wire:click="like({{ $blog->id }})" type="button" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-green-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-green-500 dark:focus:text-white">
                            {{$blog->blogLikes->count()}}
                            Upvotes
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-2 fill-current" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 11l7-7 7 7M5 19l7-7 7 7" />
                            </svg>
                            <div wire:loading>
                                <svg role="status" id="likeLoader" class="inline ml-2  w-4 h-4 text-gray-200 animate-spin dark:text-gray-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                                    <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="#1C64F2"/>
                                </svg>
                            </div>
                        </button>

                        <button data-tooltip-target="tooltip-comment-{{$blog->id}}" id="accordion-open-blog-{{$identifier}}-heading-{{$blog->id}}" data-accordion-target="#accordion-open-blog-{{$identifier}}-comment-{{$blog->id}}" aria-expanded="false" aria-controls="accordion-open-blog-{{$identifier}}-comment-{{$blog->id}}" type="button" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-r rounded-t-lg border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-green-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-green-500 dark:focus:text-white">
                            {{$blog->blogComments->count()}}
                            Comments
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-2 fill-current" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                            </svg>
                        </button>
                        <div id="tooltip-comment-{{$blog->id}}" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip" data-popper-placement="top" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(1186px, -64px);">
                            {{$blog->blogComments->count()}} different users commented on this blog
                            <div class="tooltip-arrow" data-popper-arrow="" style="position: absolute; left: 0px; transform: translate(99px, 0px);"></div>
                        </div>

                        <button wire:click="dislike({{ $blog->id }})" type="button" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-r-md hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-green-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-green-500 dark:focus:text-white">
                            {{$blog->blogDislikes->count()}}
                            DownVotes
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-2 fill-current" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 13l-7 7-7-7m14-8l-7 7-7-7" />
                            </svg>
                            <div wire:loading>
                                <svg role="status" id="likeLoader" class="inline ml-2  w-4 h-4 text-gray-200 animate-spin dark:text-gray-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                                    <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="#1C64F2"/>
                                </svg>
                            </div>
                        </button>
                    </div>
                    <div id="accordion-open-blog-{{$identifier}}-comment-{{$blog->id}}" class="hidden" aria-labelledby="accordion-open-blog-{{$identifier}}-heading-{{$blog->id}}">
                        <div class="overflow-auto border-gray-200 2xl:container 2xl:mx-auto lg:py-5 lg:px-5 md:py-5 md:px-6 py-9 px-4 max-h-72">
                            <ol class="relative border-l border-gray-200 dark:border-gray-700">
                                @if (Auth::check())
                                    <li class="mb-10 ml-4">
                                        <span class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-200 rounded-full ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                            <img class="rounded-full shadow-lg" src="https://www.genocideresearchhub.org.rw/wp-content/uploads/2021/12/1024px-User-avatar.svg_-600x600.png" alt="Thomas Lean image"/>
                                        </span>
                                        <div class="max-w-2xl">
                                            <form class="ml-3" action="{{ route('post.comments') }}" method="POST">
                                                @csrf

                                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                    Add Comment to this blog
                                                </label>

                                                <input type="hidden" name="blog_id" value="{{$blog->id}}">
                                                <textarea id="comment" name="comment" rows="2" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="add some comments!.."></textarea>

                                                <p id="helper-text-explanation" class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                                                    Your comment will help someone to expand.
                                                    <a href="#" class="font-medium text-blue-600 hover:underline dark:text-blue-500">Become member</a>.
                                                </p>

                                                <button type="submit" class="py-2.5 text-white px-5 mr-2 mb-4 text-sm font-medium mt-4 focus:outline-none bg-green-800 rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-green-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                                    add comment
                                                </button>
                                            </form>
                                        </div>
                                    </li>
                                @else
                                    <li class="mb-7 ml-4">
                                        <button type="submit" data-modal-toggle="authentication-modal-for-sign-in" class="mb-3 py-2.5 text-white px-5 mr-2 ml-2 text-sm font-medium mt-2 focus:outline-none bg-green-800 rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-green-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                            Already have an account!, Sign in To add comments!
                                        </button>
                                    </li>
                                @endif
                                @forelse ($blog->blogComments as $comment)
                                    <li class="mb-5 ml-6 max-w-2xl">
                                        <span class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-200 rounded-full ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                            <img class="rounded-full shadow-lg" src="https://www.genocideresearchhub.org.rw/wp-content/uploads/2021/12/1024px-User-avatar.svg_-600x600.png" alt="Thomas Lean image"/>
                                        </span>
                                        <div class="p-4 bg-white rounded-lg border border-gray-200 shadow-sm dark:bg-gray-700 dark:border-gray-600">
                                            <div class="justify-between items-center mb-3 sm:flex">
                                                <time class="mb-1 text-xs font-normal text-gray-400 sm:order-last sm:mb-0">{{$comment->created_at->diffForHumans()}}</time>
                                                <div class="text-sm font-normal text-gray-500 lex dark:text-gray-300">
                                                    <a href="#" class="font-semibold text-gray-900 dark:text-white hover:underline">{{$comment->user->name}}</a>
                                                    commented on
                                                    <a href="#" class="font-semibold text-gray-900 dark:text-white hover:underline">
                                                        this blog
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="p-3 text-sm font-normal text-gray-500 bg-gray-50 rounded-lg border border-gray-200 dark:bg-gray-600 dark:border-gray-500 dark:text-gray-300">{{$comment->comment}}</div>
                                        </div>
                                    </li>
                                @empty
                                    <div id="alert-3" class="flex p-4 ml-6 mb-4 bg-green-100 rounded-lg dark:bg-green-200" role="alert">
                                        <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-green-700 dark:text-green-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="sr-only">Info</span>
                                        <div class="ml-3 text-sm font-medium text-green-700 dark:text-green-800">
                                            @if (Auth::check())
                                                Be the first to add comment on this blog
                                            @else
                                                No comments found on this post
                                            @endif
                                        </div>
                                        <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-green-200 dark:text-green-600 dark:hover:bg-green-300" data-dismiss-target="#alert-3" aria-label="Close">
                                            <span class="sr-only">Close</span>
                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                        </button>
                                    </div>
                                @endforelse
                            </ol>
                        </div>
                    </div>
                </div>
            </li>
        @endforeach
    </ol>
</div>
