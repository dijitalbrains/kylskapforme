<!DOCTYPE html>
<html lang="{{ \App::getLocale() }}">

<head>
  <base href="{{ url('/') }}/" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <link href="/css/app.css" rel="stylesheet">
  <title>Kylskap For Me @yield('title')</title>

</head>

<body>

  {{-- Container --}}
  <div class="container mx-auto">

    {{-- Header --}}
    <div
      class="bg-header py-12 bg-contain bg-no-repeat bg-right bg-top flex justify-between content-center items-center">
      <img src="{{asset('/images/logo.svg')}}" class="w-1/6">

      {{-- Search Bar --}}
      <div class="bg-black rounded-full text-white p-1 pl-3 mr-64 w-1/3 flex items-center font-light">
        <div class="flex justify-between flex-grow mr-3">
          <span>Sök ditt kylskåp:</span>
          <input type="text" class="flex-grow mx-2 bg-transparent focus:outline-none">
          <span>5899 kylskåp</span>
        </div>
        <span>
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 fill-current text-lime-350" viewBox="0 0 20 20">
            <path d="M9 9a2 2 0 114 0 2 2 0 01-4 0z" />
            <path fill-rule="evenodd"
              d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a4 4 0 00-3.446 6.032l-2.261 2.26a1 1 0 101.414 1.415l2.261-2.261A4 4 0 1011 5z"
              clip-rule="evenodd" />
          </svg>
        </span>
      </div>

      {{-- Login/Register --}}
      <div class="flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 fill-current text-lime-350" viewBox="0 0 20 20">
          <path fill-rule="evenodd"
            d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
            clip-rule="evenodd" />
        </svg>
        <a href="javascript:void(0)"
          class="uppercase font-bold ml-8 mr-12 border-b-2 border-lime-350 hover:border-black pb-1">
          Logga in / Registrera Dig
        </a>
      </div>

    </div>

    {{-- All Filter --}}
    <div class="grid grid-cols-5 gap-x-3 gap-y-6 items-center uppercase font-bold">

      <div>
        <button class="bg-black rounded-full text-white pl-6 pr-5 py-2 uppercase font-medium hover:shadow-lg">
          Alla filter
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block ml-3 text-lime-350" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
      </div>

      <div>
        <a href="javascript:void(0)" class="pb-1 border-b-2 border-lime-350 hover:border-black">
          Fristående kylskåP
          <span class="text-coolGray-350 ml-2 font-light lowercase">250 st</span>
        </a>
      </div>

      @for ($i = 1; $i <= 8; $i++) <div>
        <a href="javascript:void(0)" class="pb-1 hover:border-b-2 hover:border-black">
          Kombinerad kyl och frysa
          <span class="text-coolGray-350 ml-2 font-light lowercase">250 st</span>
        </a>
    </div>
    @endfor
  </div>

  {{-- Products Grid --}}
  <div class="grid grid-cols-3 gap-x-12 gap-y-16 mt-14">

    @for ($i = 0; $i < 9; $i++) {{-- Product Card --}} <div class="relative">

      {{-- Favourite --}}
      <a href="javascript:void(0)" class="absolute top-0 right-0 border border-black rounded-full p-1">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-current text-lime-350 hover:border-lime-350"
          viewBox="0 0 20 20">
          <path fill-rule="evenodd"
            d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
            clip-rule="evenodd" />
        </svg>
      </a>

      {{-- Image --}}
      <img src="{{asset('/images/refrigerator-default.png')}}" class="h-72 m-auto mb-4">

      {{-- Description --}}
      <div>
        <div class="text-base font-bold uppercase mb-1">Whirlpool</div>
        <div class="font-bold uppercase">
          SW8 AM2Y XR 2
          <span class="lowercase">Fristående kylskåp</span>
        </div>
        <div class="font-light my-4">
          Färg: Rostfritt<br>
          Kylkapacitet: 346 liter<br>
          Höjd: 1860 cm<br>
          Produktblad: ?
        </div>
      </div>

      {{-- Price --}}
      <div class="border-t-2 border-b-2 border-lime-350 py-2 text-center text-base">
        Från <span class="font-bold ml-3">7 395 kr</span>
      </div>

      {{-- Button --}}
      <div class="text-center">
        <button
          class="rounded-full bg-black text-lime-350 font-medium px-10 py-3 mt-4 hover:text-white hover:shadow-lg">
          LÄS MER
        </button>
      </div>
  </div>

  @endfor

  </div>

  </div>
</body>

</html>