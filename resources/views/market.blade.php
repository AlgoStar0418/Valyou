<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title>Market</title>

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
    <x-nav2 />
    <div id="slider">
        <span class="mx-10 font-bold text-green-700 hidden">EXCHANGE RATES</span>
        <span class="mx-10 font-bold text-blue-500 hidden">FRONTEND FOR TONY</span>
        <span class="mx-10 font-bold hidden">FRONTEND FOR TONY</span>
    </div>
    <div class="flex  items-center background-shadow rounded-full px-4 mt-3 darken">
        <i class="fa fa-search text-xl mr-4"></i>
        <input id='input' class="text-normal" placeholder="Search for music artists, investors & business profiles on valyou x" />
        <div class="border-[1px] rounded-full p-1 flex justify-center items-center border-gray-600 cursor-pointer h-8 w-8 mr-2">
         <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium text-[#444444] css-vubbuv" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="PublicOutlinedIcon" style="width: 20px; height: 20px;"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM4 12c0-.61.08-1.21.21-1.78L8.99 15v1c0 1.1.9 2 2 2v1.93C7.06 19.43 4 16.07 4 12zm13.89 5.4c-.26-.81-1-1.4-1.9-1.4h-1v-3c0-.55-.45-1-1-1h-6v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41C17.92 5.77 20 8.65 20 12c0 2.08-.81 3.98-2.11 5.4z"></path></svg>
        </div>    
            <ul class="flex flex-wrap text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                <li role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg font-bold border-[#ff0093] text-[#ff0093]" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">All</button>
                </li>
                <li role="presentation">
                    <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-[#ff0093] hover:border-[#ff0093] font-bold dark:hover:text-red-300" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Expression of Interest</button>
                </li>
                <li role="presentation">
                    <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-[#ff0093] hover:border-[#ff0093] font-bold dark:hover:text-red-300" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Upcoming </button>
                </li>
                <li role="presentation">
                    <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-[#ff0093] hover:border-[#ff0093] font-bold dark:hover:text-red-300" id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false">Professional</button>
                </li>
                <li role="presentation">
                    <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-[#ff0093] hover:border-[#ff0093] font-bold dark:hover:text-[#ff0093] font-bold" id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false">Major Artist</button>
                </li>
            </ul>
    </div>
    <div id='svg' class="mt-5 mx-3 p-4 grid grid-cols-7 rounded-xl darken text-normal">
        <h1 ># Rank</h1>
        <h1>Artist</h1>
        <h1>Change %</h1>
        <h1>Stock Price<svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="UnfoldMoreIcon"><path d="M12 5.83 15.17 9l1.41-1.41L12 3 7.41 7.59 8.83 9 12 5.83zm0 12.34L8.83 15l-1.41 1.41L12 21l4.59-4.59L15.17 15 12 18.17z"></path></svg></h1>
        <h1>Market Value<svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="UnfoldMoreIcon"><path d="M12 5.83 15.17 9l1.41-1.41L12 3 7.41 7.59 8.83 9 12 5.83zm0 12.34L8.83 15l-1.41 1.41L12 21l4.59-4.59L15.17 15 12 18.17z"></path></svg></h1>
        <h1>Dividends<svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="UnfoldMoreIcon"><path d="M12 5.83 15.17 9l1.41-1.41L12 3 7.41 7.59 8.83 9 12 5.83zm0 12.34L8.83 15l-1.41 1.41L12 21l4.59-4.59L15.17 15 12 18.17z"></path></svg></h1>
        <h1 class="flex justify-between">Trade <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="InfoOutlinedIcon"><path d="M11 7h2v2h-2zm0 4h2v6h-2zm1-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"></path></svg></h1>
    </div>
    @foreach($artists as $artist)
    <div class="mt-5 mx-3 p-4 flex items-center rounded-xl darken text-normal  justify-between">
        <h1>{{ $loop->index + 1 }}</h1>
        <div class="flex gap-2 items-center">
            <img class="rounded-full" src="{{$artist -> img}}" style="width: 50px; height: 50px;">
            <div>
                <h1 class="text-red ">{{ $artist->name }}</h1>
                <p>{{ $artist->role }}</p>
            </div>
        </div>
        <h1 id='icon' class="flex items-center space-x-1">
            <img class="m-0" src="https://valyou-x.vercel.app/assets/greeen-arrow.svg"/>
            <span id="icon"  class="bg-[#1CEA2C] text-sm px-[9px] py-1 rounded" onclick="function(){alert('dd');}"> {{ $artist->changePercent }}%</span>
        </h1>
        <h1 class="text-[#1CEA2C]">{{ $artist->stockPrice }}</h1>
        <h1>${{ $artist->marketValue }}</h1>
        <h1>0.0100%</h1>
        <button class="bg-black text-white fon rounded p-2" id='button'>INVEST IN ARTIST</button>
    </div>
    @endforeach
    <div class="mt-20"></div>
</body>
<script src="{{ URL::asset('js/slider.js') }}"></script>
</html>


