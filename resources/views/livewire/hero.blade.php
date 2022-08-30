
<section>
    <div class="w-full relative pb-10 px-6 xl:px-0">
        <img class="absolute w-full inset-0 h-full object-cover object-center" src="/storage/images/hero.jpg" alt="we care family"/>

        <div class="2xl:container 2xl:mx-auto lg:py-16 lg:px-20 md:py-12 md:px-6 py-9 px-4 pt-32 lg:flex items-center relative z-10 container mx-auto">
            <div  role="contentinfo"  class="w-full lg:w-1/2 h-full">
                <p tabindex="0" class="text-white uppercase text-2xl mb-4 font-bold">Hello! Norldish</p>
                <h1 tabindex="0" class="text-white text-1xl lg:text-3xl font-black mb-8 bg-clip-text bg-gradient-to-r from-green-300 via-blue-500 to-purple-600">
                    Those who can make people believe absurdities, can make people commit atrocities.
                </h1>
                <form class="flex items-center bg-white dark:bg-gray-700 lg:mt-16 py-4 px-4 flex-col sm:flex-row justify-start sm:justify-between sm:items-center rounded-lg">
                    <label for="voice-search" class="sr-only">Search</label>
                    <div class="relative w-96">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                            </svg>
                        </div>

                        <input type="text" data-modal-toggle="powerSearch" id="voice-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Laravel, reacts...">
                    </div>
                    <button data-modal-toggle="powerSearch" type="submit" class="inline-flex items-center py-2.5 px-3 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="mr-2 -ml-1 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>Search
                    </button>
                </form>
            </div>
        </div>
    </div>

    <div class="border-b border-gray-200 dark:border-gray-700">
        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center text-gray-500 dark:text-gray-400 2xl:container 2xl:mx-auto lg:px-16 md:px-4 px-2 lg:flex items-center relative z-10 container mx-auto">
            <li class="mr-2">
                <a href="#" class="inline-flex justify-center items-center p-4 text-blue-600 rounded-t-lg border-b-2 border-blue-600 active dark:text-blue-500 dark:border-blue-500 group" aria-current="page">
                    <svg class="h-7 w-7 text-gray-400"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <line x1="4" y1="6" x2="20" y2="6" />  <line x1="4" y1="18" x2="9" y2="18" />  <path d="M4 12h13a3 3 0 0 1 0 6h-4l2 -2m0 4l-2 -2" /></svg>
                    <div class="text-md ml-3">PHP | Laravel</div>
                </a>
            </li>
            <li class="mr-2">
                <a href="#" class="inline-flex justify-center items-center p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
                    <svg class="h-7 w-7 text-gray-400"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <line x1="16.5" y1="9.4" x2="7.5" y2="4.21" />  <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z" />  <polyline points="3.27 6.96 12 12.01 20.73 6.96" />  <line x1="12" y1="22.08" x2="12" y2="12" /></svg>
                    <div class="text-md ml-3">Packages docs</div>
                </a>
            </li>
        </ul>
    </div>

    <!-- Main modal -->
    <livewire:search :blogs="$blogs" />
</section>
<style>
    /* Top menu */
    .top-100 {
        animation: slideDown 0.5s ease-in-out;
    }
    @keyframes slideDown {
        0% {
            top: -50%;
        }
        100% {
            top: 0;
        }
    }
    * {
        outline: none !important;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        -webkit-tap-highlight-color: transparent;
    }
</style>
