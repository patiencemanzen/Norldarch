
<section>
    <div class="w-full relative pb-10 px-6 xl:px-0">
        <img class="absolute w-full inset-0 h-full object-cover object-center" src="/storage/images/mountains.jpg" alt="we care family"/>

        <div class="2xl:container 2xl:mx-auto lg:py-16 lg:px-20 md:py-12 md:px-6 py-9 px-4 pt-32 lg:flex items-center relative z-10 container mx-auto">
            <div  role="contentinfo"  class="w-full lg:w-1/2 h-full">
                <p tabindex="0" class="text-white uppercase text-2xl mb-4 font-bold">Hello! Norldish</p>
                <h1 tabindex="0" class="text-white text-1xl lg:text-3xl font-black mb-8 bg-clip-text bg-gradient-to-r from-green-300 via-blue-500 to-purple-600">
                    Those who can make people believe absurdities, can make people commit atrocities.
                </h1>
                <form class="flex items-center bg-white lg:mt-16 py-4 px-4 flex-col sm:flex-row justify-start sm:justify-between sm:items-center rounded-lg">
                    <label for="voice-search" class="sr-only">Search</label>
                    <div class="relative w-96">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                        </div>

                        <input type="text" id="voice-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Laravel, reacts..." required>
                    </div>
                    <button data-modal-toggle="powerSearch" type="submit" class="inline-flex items-center py-2.5 px-3 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="mr-2 -ml-1 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>Search
                    </button>
                </form>
            </div>
        </div>

        <!-- Main modal -->
        <livewire:search />
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
