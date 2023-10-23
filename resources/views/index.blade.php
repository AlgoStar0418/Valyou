<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title>Valyou X</title>

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
    <div class="grid grid-cols-2 mt-20 px-20 gap-10">
        <div class="flex flex-col gap-5">
            <h2 class="text-sm font-black py-1 text-blue-400 bg-gray-100 text-center">
                The World's First Blockchain Powered
            </h2>
            <h1 class="text-5xl font-bold">
                Music Artist <span class="text-gradient-orange">Financial Stock</span>
                <br />
                Market
            </h1>
            <p class="font-light text-[#050f3f]">Linked to a new global music industry & economy powered by
                decentralised
                finance.
                Purchase NFT digital
                asset stocks in any Upcoming, Independent & Major Artist brand & receive a portion of their
                revenue
                as
                dividends for holding their stock.
            </p>
            <div class="flex gap-5">
                <button class="py-4 px-6 rounded text-white font-bold gradient">GET EARLY ACCESS</button>
                <a href="https://drive.google.com/file/d/1ul1z217vLUFmPQWKF5X8TYnSULl1TPpW/view" target="_blank" class="flex items-center gap-5 py-1 px-6">
                    <div class="flex justify-center items-center border-2 border-[#FF0093] rounded-full w-[50px] h-[50px]">
                        <i class="fa fa-play text-[#FF0093]"></i>
                    </div>
                    Watch Video
                </a>
            </div>
        </div>
        <img src="https://valyou-x.vercel.app/_next/image?url=%2Fassets%2Fvalyoux_img.jpeg&w=828&q=75" />
    </div>
    <div class="mt-40 px-10">
        <h1 class="rounded darken text-center text-4xl font-bold py-10">
            Valyou X - Is A Multi Award Winning Start-Up
        </h1>
        <div class="grid grid-cols-5 gap-5 py-5">
            @foreach ($companies as $company)
            <div class="max-h-[130px] flex flex-col justify-center items-center gap-3 rounded darken px-10 py-5 text-xs text-center">
                <img class="min-h-[70px]" src={{ $company->img }} />
                <h1>{{ $company->name }}</h1>
            </div>
            @endforeach
        </div>
    </div>
    <div class="grid grid-cols-2 mt-10 mx-10 p-5 gap-20 rounded darken">
        <img class="rounded" src="https://media.discordapp.net/attachments/1163031540440256595/1163031570156896336/2Q.png?ex=653e188e&is=652ba38e&hm=f44a4e51ec422f3a434a115a0ddb2da6ae30468c3aabd0a368781157132bb9d7&=&width=910&height=606" />
        <div class="flex flex-col justify-center gap-5 me-5">
            <h1 class="text-5xl font-bold">We are <span class="text-gradient-orange">rebuilding</span> the <span class="text-gradient-blue">music</span> industry</h1>
            <p class="font-light text-[#050f3f]">Valyou X is creating the world’s first music artist stock and financial
                market, where
                you can invest in music artists’ brands, as listed stocks. Blockchain Technology is at the heart of it.
                However, first to begin, we must rebuild the entire music industry in order to serve as a globally
                scalable digital hub for the entire music industry. A platform that enables aspiring artists to use
                their music to launch a profitable business and then connects to the financial markets trusted by
                Blockchain.</p>
        </div>
    </div>
    <div class="mt-10 p-5 flex flex-col gap-5 justify-center items-center">
        <h1 class="text-5xl font-bold">See <span class="text-gradient-blue">how it</span> works</h1>
        <p class="font-light text-[#050f3f]">All users, Music Artists, Fans as investors and Businessess buy Valyou X
            tokens for access into the app.</p>
        <img src="https://valyou-x.vercel.app/assets/howitworks.svg" />
    </div>
    <div class="mt-10 p-5">
        <h1 class="text-4xl font-bold text-center">Main <span class="text-gradient-orange">Problems</span> and Solutions
        </h1>
        <div id="accordion" class="mt-10 mx-20 flex flex-col gap-5"></div>
    </div>
    <x-footer />
</body>
<script src="{{ URL::asset('js/slider.js') }}"></script>
<script src="{{ URL::asset('js/accordion.js') }}"></script>
</html>
