<div class="flex justify-between items-center p-5">
    <img class="w-[200px] h-[50px]" src="https://valyou-x.vercel.app/assets/logo_black.svg" />
    <div class="flex items-center gap-4 font-bold text-sm">
        <a href="/login" class="py-2 px-5 text-[#FF0093] border border-[#FF0093] rounded">LOGIN/SIGNUP</a>
        <a href="/pricing" class="py-2 px-5 text-white bg-[#FF0093] rounded darken">TOKEN PRESALE</a>
        <button onclick="openNav()"><i class="fa fa-bars text-xl text-[#FF0093]"></i></button>
        <div id="overlay" class="hidden absolute left-0 top-0"></div>
        <div id="leftnav" class="fixed z-10 left-0 top-0 flex flex-col gap-5 p-5 text-lg bg-white shadow-xl">
            <img class="w-[200px] h-[50px]" src="https://valyou-x.vercel.app/assets/logo_black.svg" />
            <a href="/pricing">Token Presale</a>
            <a href="/login">Login / Signup</a>
            <a href="/">Home</a>
            <a href="/market">Market</a>
            <a href="/">Contact Us</a>
        </div>
    </div>

    <script src="{{ URL::asset('js/leftnav.js') }}"></script>
</div>
