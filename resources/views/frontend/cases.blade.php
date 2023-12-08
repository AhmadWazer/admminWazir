@php
$pageName = "Case Study";
$cases = true;
@endphp
<x-frontend.front_layout :pageName="$pageName">

    {{-- //Header component --}}
    <x-frontend.pagecomponent.header :cases="$cases" />

    {{-- about page banner --}}

    <x-frontend.pagecomponent.other_banner :pageName="$pageName" />

    {{-- post and sidebar section of the page --}}
    <x-frontend.pagecomponent.cases_section />



    {{-- subscribe section --}}
    <x-frontend.pagecomponent.subscribe_section />



    {{-- footer section --}}
    <x-frontend.pagecomponent.footer_section />




</x-frontend.front_layout>
