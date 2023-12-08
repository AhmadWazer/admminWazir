    @php
        $pageName = "Contact Us";
        $contact = true;
    @endphp
<x-frontend.front_layout :pageName="$pageName">

    {{-- //Header component --}}
    <x-frontend.pagecomponent.header :contact="$contact" />

    {{-- about page banner --}}
    <x-frontend.pagecomponent.other_banner :pageName="$pageName" />

    {{--contact form section of the page --}}
    <x-frontend.pagecomponent.contact_form_section />


    {{--map section of the page --}}
    <x-frontend.pagecomponent.map_section />



    {{-- subscribe section --}}
    <x-frontend.pagecomponent.subscribe_section />



    {{-- footer section --}}
    <x-frontend.pagecomponent.footer_section />




</x-frontend.front_layout>
