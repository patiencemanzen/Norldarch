<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Manirabona Patience" />

    <meta name="description" content="" />
    <meta name="rating" content="adult" />
    <meta name="rating" content="RTA-5042-1996-1400-1577-RTA" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/x-icon" href="/storage/images/norldarch_logo_small.png">

    <title>NorldArch - @yield('title')</title>

    @livewireStyles

    <link href="/css/app.css" rel="stylesheet">

    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>

    @yield('additional')

</head>
<body class="dark:bg-gray-800">

    @yield('content')

    <livewire:alerts.cookie />

    @livewireScripts

    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>

    <script>
        var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

        // Change the icons inside the button based on previous settings
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            themeToggleLightIcon.classList.remove('hidden');
        } else {
            themeToggleDarkIcon.classList.remove('hidden');
        }

        var themeToggleBtn = document.getElementById('theme-toggle');

        themeToggleBtn.addEventListener('click', function() {

            // toggle icons inside button
            themeToggleDarkIcon.classList.toggle('hidden');
            themeToggleLightIcon.classList.toggle('hidden');

            // if set via local storage previously
            if (localStorage.getItem('color-theme')) {
                if (localStorage.getItem('color-theme') === 'light') {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                } else {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                }

            // if NOT set via local storage previously
            } else {
                if (document.documentElement.classList.contains('dark')) {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                } else {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                }
            }

        });

        function saveComment(obj) {
            obj.lastChild.previousSibling.classList.remove('hidden');

            $(document).ready(function() {
                var data = $(obj.parentNode).serializeArray();

                $.ajax({
                    type: 'POST',
                    url: $(obj.parentNode).attr('action'),
                    data: data,
                    success: function (response, textStatus, xhr) {
                        obj.lastChild.previousSibling.classList.add('hidden')
                        location.reload();
                    },
                });

                obj.lastChild.previousSibling.classList.add('hidden')
            });
        }

        function searchBlogs(obj) {
            $(document).ready(function() {
                data = JSON.stringify({
                    "name": document.getElementById('search-value').value
                });

                $.ajax({
                    url: $(obj).attr('url'),
                    type: 'POST',
                    data: data,
                    dataType: 'json',
                    success: function (response, textStatus, xhr) {
                        response.data.forEach(data => {
                            div = `<div class="bg-white rounded-lg dark:bg-gray-900 p-4 shadow md:flex justify-between" data-v-648b5d7b="" style="cursor: auto;">
                                        <div>
                                            <a href="${data.link}" target="_blank" class="text-gray-900 dark:text-white font-bold">
                                                <h4 class="text-2xl font-semibold" data-v-648b5d7b="">${data.title}</h4>
                                            </a>
                                            <p class="my-2 text-lg text-gray-900 dark:text-white" data-v-648b5d7b="">${data.caption}</p>
                                            <div class="flex items-center mt-4" data-v-648b5d7b="">
                                                <div class="text-xs uppercase font-bold tracking-wider bg-gray-300 inline-block px-2 py-1 rounded mr-2" data-v-648b5d7b="">${data.category.name}</div>
                                            </div>
                                        </div>
                                    </div>`;
                                document.getElementById('search-results').innerHTML += div;
                            });
                        },
                });
            });
        }
    </script>

    {{-- Blog JS --}}
    <script src="{{ asset('js/blog.js') }}"></script>

    <!-- Vue JS -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>
