<!DOCTYPE html>
<html lang="{{ \App::getLocale() }}">

<head>
  <base href="{{ url('/') }}/" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <link href="/css/app.css" rel="stylesheet">
  <title>@yield('title')</title>

</head>

<body>
  <div class="container mx-auto">
    <div
      class="bg-header py-12 bg-contain bg-no-repeat bg-right bg-top flex justify-between content-center items-center">
      <img src="{{asset('/images/logo.svg')}}" class="w-1/6">

      <div class="bg-black rounded-full text-white p-1 pl-3 mr-64 w-1/3 text-sm flex items-center">
        <div class="flex justify-between flex-grow mr-3">
          <span>Sök ditt kylskåp:</span>
          <span>5899 kylskåp</span>
        </div>
        <span>
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 fill-current text-lime-300" viewBox="0 0 20 20">
            <path d="M9 9a2 2 0 114 0 2 2 0 01-4 0z" />
            <path fill-rule="evenodd"
              d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a4 4 0 00-3.446 6.032l-2.261 2.26a1 1 0 101.414 1.415l2.261-2.261A4 4 0 1011 5z"
              clip-rule="evenodd" />
          </svg>
        </span>
      </div>

      <div class="flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 fill-current text-lime-300" viewBox="0 0 20 20">
          <path fill-rule="evenodd"
            d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
            clip-rule="evenodd" />
        </svg>
        <a href="#" class="uppercase font-bold text-sm ml-8 mr-12 border-b-2 border-lime-300 pb-1">
          Logga in / Registrera Dig
        </a>
      </div>
    </div>
  </div>
</body>

</html>