<!DOCTYPE html> <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> <head> <meta charset="utf-8"> <meta
    name="viewport" content="width=device-width, initial-scale=1"> <title>Code Crafter Academy</title> <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
<!-- Styles -->
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex min-h-screen flex-col items-center justify-center p-24 bg-gradient-to-r from-sky-500 to-indigo-500">
    <section class="max-w-5xl w-full items-center justify-center font-mono lg:flex">
        <div class="rounded-lg justify-center items-center bg-neutral-300 align-center p-10 mb-10 border border-4 border-black shadow shadow-xl shadow-black">
            <h1 class="text-4xl font-semibold text-center justify-center items-center align-center">
                Code Crafter Academy
            </h1>
        </div>
    </section>
    <section class="mt-6 max-w-5xl w-full items-center justify-center font-mono lg:flex">
        <div class="items-center justify-center flex flex-col gap-3">
            <a href="/login">
                <button
                    class="bg-green-500 hover:bg-green-400 text-white font-bold py-2 px-4 border-b-4 border-green-700 hover:border-green-500 rounded">
                    Login
                </button>
            </a>
            <a href='/register'>
                <button
                    class="bg-orange-500 hover:bg-orange-400 text-white font-bold py-2 px-4 border-b-4 border-orange-700 hover:border-orange-500 rounded">
                    Sign Up
                </button>
            </a>
        </div>
    </section>
</body>

</html>