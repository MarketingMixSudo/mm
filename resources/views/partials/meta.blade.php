<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>{!! $title !!}</title>
<meta name="description" content="{!! $description !!}">
<meta name="keywords"
    content="MarketingMix, agencja reklamowa, Nowy Targ, projektowanie graficzne, projektowanie logo, strony internetowe, sklepy internetowe, branding, identyfikacja wizualna, reklama, reklama internetowa, tworzenie stron, projektowanie stron www, kampanie reklamowe, projekt ulotek, projekt wizytówek">


<meta name="author" content="marketingmix.pl">

{{-- @if ($noFollow)
<meta name="robots" content="noindex, nofollow">
@else
<meta name="robots" content="index, follow">
@endif --}}

<meta name="robots" content="noindex, nofollow">


<link rel="canonical" href="{{ url()->current() }}" />

<meta property="og:title" content="{!! $title !!}">
<meta property="og:description" content="{!! $description !!}">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:type" content="website">

<meta property="og:image" content="{{asset('opengraph_image.webp')}}">