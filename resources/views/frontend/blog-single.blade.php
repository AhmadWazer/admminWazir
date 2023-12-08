@php
$pageName = "blog title";
$blog = true;

@endphp
<x-frontend.front_layout :pageName="$pageName">

    {{-- //Header component --}}
    <x-frontend.pagecomponent.header :blog="$blog"/>

    {{-- about page banner --}}

    <x-frontend.pagecomponent.other_banner :pageName="$pageName" />

    {{-- blog section of the page --}}
    <x-frontend.pagecomponent.single_blog_section />



    {{-- subscribe section --}}
    <x-frontend.pagecomponent.subscribe_section />



    {{-- footer section --}}
    <x-frontend.pagecomponent.footer_section />




</x-frontend.front_layout>
