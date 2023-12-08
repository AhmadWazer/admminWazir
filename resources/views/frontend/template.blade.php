<x-frontend.front_layout>

    {{-- //Header component --}}
    <x-slot name="header_component">
        <x-frontend.pagecomponent.header />
    </x-slot>

    <x-slot name="banner_component">
        <x-frontend.pagecomponent.index_banner />
    </x-slot>
    <x-slot name="welcome_section">
        <x-frontend.pagecomponent.welcome_section />
    </x-slot>

    <x-slot name="analysis_section">
        <x-frontend.pagecomponent.analysis_section />
    </x-slot>

    <x-slot name="record_section">
        <x-frontend.pagecomponent.record_section />
    </x-slot>

    <x-slot name="feedback_section">
        <x-frontend.pagecomponent.feedback_section />
    </x-slot>

    <x-slot name="faq_section">
        <x-frontend.pagecomponent.faq_section />
    </x-slot>

    <x-slot name="newblog_section">
        <x-frontend.pagecomponent.newblog_section />
    </x-slot>

    <x-slot name="subscribe_section">
        <x-frontend.pagecomponent.subscribe_section />
    </x-slot>

    <x-slot name="price_plan_section">
        <x-frontend.pagecomponent.price_plan_section />
    </x-slot>

    <x-slot name="footer_section">
        <x-frontend.pagecomponent.footer_section />

    </x-slot>



</x-frontend.front_layout>
