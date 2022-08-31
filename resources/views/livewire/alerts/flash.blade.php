<div>
    @if (session()->has('success'))
        <div class="p-2 bg-indigo-800 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
            <span class="flex rounded-full bg-indigo-500 uppercase px-2 py-1 text-xs font-bold mr-3">
                New
            </span>
            <span class="font-semibold mr-2 text-left flex-auto">{{ session()->get('success') }}</span>
            <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/>
            </svg>
        </div>
    @endif

    @if (session()->has('error'))
        <div class="p-2 bg-red-800 items-center text-red-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
            <span class="flex rounded-full bg-red-500 uppercase px-2 py-1 text-xs font-bold mr-3">
                New
            </span>
            <span class="font-semibold mr-2 text-left flex-auto">{{ session()->get('error') }}</span>
            <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/>
            </svg>
        </div>
    @endif

    @if (session()->has('info'))
        <div class="p-2 bg-sky-800 items-center text-sky-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
            <span class="flex rounded-full bg-sky-500 uppercase px-2 py-1 text-xs font-bold mr-3">
                New
            </span>
            <span class="font-semibold mr-2 text-left flex-auto">{{ session()->get('info') }}</span>
            <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/>
            </svg>
        </div>
    @endif

</div>
