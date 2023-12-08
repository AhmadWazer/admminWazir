@php
$pageName = "Home";
$home = true;
@endphp
<x-frontend.front_layout :pageName="$pageName" >

    {{-- //Header component --}}
    <x-frontend.pagecomponent.header :home="$home"/>

    {{-- Home page banner --}}
    <x-frontend.pagecomponent.index_banner />

    {{-- Welcome section of the page --}}
    <x-frontend.pagecomponent.welcome_section />

    {{-- analysis section --}}
    <x-frontend.pagecomponent.analysis_section />

    {{-- record section of the page --}}
    <x-frontend.pagecomponent.record_section />

    {{-- feedback section  --}}
    <x-frontend.pagecomponent.feedback_section />

    {{-- frequently asked questions section starts --}}
    <x-frontend.pagecomponent.faq_section />


    {{-- new blog section of the page --}}
    <x-frontend.pagecomponent.newblog_section />

    {{-- subscribe section --}}
    <x-frontend.pagecomponent.subscribe_section />

    {{-- price and plan section --}}
    <x-frontend.pagecomponent.price_plan_section />

    {{-- footer section --}}
    <x-frontend.pagecomponent.footer_section />




</x-frontend.front_layout>
