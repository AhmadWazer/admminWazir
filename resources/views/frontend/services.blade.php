@php
$pageName = "service";
$services = true;
@endphp
<x-frontend.front_layout :pageName="$pageName">
    {{-- //Header component --}}
    <x-frontend.pagecomponent.header :services="$services"/>

    {{-- about page banner --}}

    <x-frontend.pagecomponent.other_banner :pageName="$pageName" />

    {{-- analysis section --}}
    <x-frontend.pagecomponent.analysis_section style="margin-top:100px" />

    {{-- Welcome section of the page --}}
    <x-frontend.pagecomponent.welcome_section />

    {{-- price and plan section --}}
    <x-frontend.pagecomponent.price_plan_section />


    {{-- subscribe section --}}
    <x-frontend.pagecomponent.subscribe_section />


    {{-- footer section --}}
    <x-frontend.pagecomponent.footer_section />




</x-frontend.front_layout>
