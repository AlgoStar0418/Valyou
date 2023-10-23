<div class="flex items-center justify-between gap-2 px-2 py-4">
    <img class="w-[100px] h-[30px]" src="https://valyou-x.vercel.app/assets/logo_black.svg" />
    <div id='top-nav' class="hidden gap-6 lg:flex">
        <a class="hover:text-[#FF0093]" href="/pricing">Bank</a>
        <a  class="hover:text-[#FF0093] text-[#FF0093]" href="/login">Market</a>
        <a class="hover:text-[#FF0093]" href="/">Social Media</a>
        <a class="hover:text-[#FF0093]" href="/market">Watch & Earn</a>
        <a class="hover:text-[#FF0093]" href="/">Listen & Earn</a>
        <a class="hover:text-[#FF0093]" href="/">Store</a>
    </div>
    <div class="flex items-center gap-2 w-[30vw] rounded-full border-2 border-black px-2">
        <i class="fa fa-search text-xl"></i>
        <input id='focu_input' class="w-full text-sm" placeholder="Search for music artists, investors & business profiles on valyou x" />
    </div>
    <div class="flex gap-3 items-center">
        <a href="/wallet" class="rounded-full px-1 border border-black">
            <i class="fa fa-briefcase text-xl"></i>
        </a>
        <a href="/wallet" class="rounded-full px-1 border border-black">
            <i class="fa fa-envelope-o text-xl"></i>
        </a>
        <a href="/wallet" class="flex gap-3 rounded-full darken py-1 px-2">
            <i class="fa fa-headphones text-xl rounded-full border border-black px-1"></i>
            <span class="text-[#FF0093]">Investor</span>
        </a>
        <a href="/wallet">
            <img class="rounded-full w-[32px] h-[32px]" src="https://valyou-x.vercel.app/assets/bobby_dp.jpeg"></i>
        </a>
        <button onclick="openNav()"><i class="fa fa-bars text-xl"></i></button>
        <div id="overlay" class="hidden absolute left-0 top-0"></div>
        <div id="leftnav" class="fixed z-10 left-0 top-0 flex flex-col gap-5 p-5 text-lg bg-black text-white shadow-xl">
            <img class="w-[100px] h-[50px]" src="https://valyou-x.vercel.app/assets/logo_black.svg" />
            <a href="/pricing">Bank</a>
            <a href="/login">Market</a>
            <a href="/">Social Media</a>
            <a href="/market">Watch & Earn</a>
            <a href="/">Listen & Earn</a>
            <a href="/">Store</a>
        </div>
    </div>

    <script src="{{ URL::asset('js/leftnav.js') }}"></script>
</div>
