<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title>Login</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Other CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>

<body>
    <x-nav />
    <div class="grid grid-cols-2 gap-20 py-10 px-10">
        <div class="flex flex-col gap-2 justify-center mt-10">
            <h1 class="text-5xl font-bold">Welcome to <span class="text-gradient-orange">Valyou X</span></h1>
            <h6 class="text-lg font-bold text-[#9F1239]">Be the first to know when we launch!</h6>
            <p class="text-normal font-light">If you’re interested in participating as an early adopter, you can fill out the survey and apply to get exclusive access. We have over 50,000+ in our email list would you like to skip the queue?</p>
        </div>
        <form class="flex flex-col gap-5 me-10">
            <p class="text-lg font-bold">Sign in to continue to Valyou X</p>
            <input class="py-4 px-3 border-2 border-gray-300 rounded" placeholder="Enter your email address" />
            <input class="py-4 px-3 border-2 border-gray-300 rounded" placeholder="Enter your password" />
            <p class="text-sm text-center">Forget your password? <a class="text-[#FF0093]">Reset Here</a></p>
            <input class="mt-10 py-2 bg-[#FF0093] text-white rounded font-bold" type="submit" value="LOGIN" />
        </form>
    </div>
    <x-footer />
</body>
</html>
