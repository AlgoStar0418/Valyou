<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title>Pricing</title>

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
    <div id="slider">
        <span class="mx-10 font-bold text-green-700 hidden">FRONTEND FOR TONY</span>
        <span class="mx-10 font-bold text-blue-500 hidden">FRONTEND FOR TONY</span>
        <span class="mx-10 font-bold hidden">FRONTEND FOR TONY</span>
    </div>
    <div class="grid grid-cols-2 mt-20 px-10 gap-10">
        <div class="flex flex-col gap-5">
            <h2 class="text-sm font-black py-1 text-blue-400 bg-gray-100 text-center">
                Get early access to Valyou X tokens pre-launch!
            </h2>
            <h1 class="text-5xl font-bold">
                <span class="text-gradient-orange">Valoyou X</span> token
            </h1>
            <p class="font-light text-[#050f3f]">
                To be a member of the new music industry Valyou X Ecosystem, you must hold ValyouX Token. Purchasing the Valyou X Token gives individuals and businesses the opportunity to join the Valyou X team. A group of early adopter supporters known as Valyou X citizens who help with the platform’s growth, support, and development. Depending on Valyou X’s success. The value of this token may increase or decrease
            </p>
        </div>
        <img class="mx-auto" src="https://valyou-x.vercel.app/assets/valyoux_black_logo.svg" />
    </div>
    <div class="mt-20 px-24 grid grid-cols-3 gap-20">
        <div class="flex flex-col items-center gap-5 border-2 border-gray-200 rounded p-5">
            <h2 class="font-bold">STANDARD</h2>
            <h1 class="text-4xl font-bold">$10.00</h1>
            <p class="text-gray-500">5 Valyou X Tokens</p>
            <p class="text-gray-500">Non Active Team Member</p>
            <button class="bg-[#FF0093] py-2 rounded text-white px-auto w-full font-bold">PRESALE</button>
        </div>
        <div class="flex flex-col items-center gap-5 border-2 border-gray-200 rounded p-5">
            <h2 class="font-bold">GOLD</h2>
            <h1 class="text-4xl font-bold">$10,000.00</h1>
            <p class="text-gray-500">20,000 Valyou X Tokens</p>
            <p class="text-gray-500">Active Team Member</p>
            <button class="bg-[#FF0093] py-2 rounded text-white px-auto w-full font-bold">PRESALE</button>
        </div>
        <div class="flex flex-col items-center gap-5 border-2 border-gray-200 rounded p-5">
            <h2 class="font-bold">PLATINUM</h2>
            <h1 class="text-4xl font-bold">$100,000.00</h1>
            <p class="text-gray-500">200,000 Valyou X Tokens</p>
            <p class="text-gray-500">Founding Member Investor</p>
            <button class="bg-[#FF0093] py-2 rounded text-white px-auto w-full font-bold">PRESALE</button>
        </div>
    </div>
    <div class="flex flex-col gap-10 px-10 mt-20">
        <h1 class="text-5xl font-bold">Presale <span class="text-gradient-orange">Fund</span> & breakdown</h1>
        <div class="grid grid-cols-3 gap-20">
            <div class="flex flex-col gap-5 border border-gray-300 shadow-lg rounded p-5">
                <h2 class="text-2xl text-center font-bold text-gradient-orange">Software Engineering</h2>
                <p>35% of the cash will be used to continue to develop the Valyou X platform and undertake system updates, which will include budgets for team recruitment, training, and development.</p>
            </div>
            <div class="flex flex-col gap-5 border border-gray-300 shadow-lg rounded p-5">
                <h2 class="text-2xl text-center font-bold text-gradient-orange">Branding & Marketing</h2>
                <p>50% of the funds will be utilised to promote and educate the public about Valyou X and blockchain advancements through industry outlets. A significant advertising budget to assist Valyou X in gaining investor interest and attracting active users to the platform.</p>
            </div>
            <div class="flex flex-col gap-5 border border-gray-300 shadow-lg rounded p-5">
                <h2 class="text-2xl text-center font-bold text-gradient-orange">Reserve</h2>
                <p>15% will be set aside in reserve to deal with any emergency or unexpected circumstances that may arise.</p>
            </div>
        </div>
    </div>
    <x-footer />
</body>
<script src="{{ URL::asset('js/slider.js') }}"></script>

</html>
