<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-black text-white font-hanken-grotesk pb-20">
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
                </a>
            </div>

            <div class="space-x-6 font-bold ml-28">
                <a href="/"><x-button>Jobs</x-button></a>
                <a href="#"><x-button>Careers</x-button></a>
                <a href="#"><x-button>Salaries</x-button></a>
                <a href="/companies"><x-button>Companies</x-button></a>
            </div>

            @auth
                <!-- Add flex container to align Post a Job and Log Out buttons on the same line -->

                <div class="space-x-4 font-bold flex items-center">
                    <a href="/jobs/create"><x-button>Post a Job</x-button></a>
                    <a href="/profile"><x-button>Profile</x-button></a>

                    <form method="POST" action="/logout" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <x-button color="red">Log Out</x-button>
                    </form>
                </div>
            @endauth

            @guest
                <div class="space-x-6 font-bold">
                    <a href="/register"><x-button>Sign Up</x-button></a>
                    <a href="/login"><x-button>Log In</x-button></a>
                </div>
            @endguest
        </nav>

        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>

</body>
</html>
