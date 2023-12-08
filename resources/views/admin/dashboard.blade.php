<x-admin-layout>
    <x-slot name="pageName">{{ $pageName }}</x-slot>
    <x-slot name="breadCrumbs">
        <x-admin.breadcrumbs :pageName="$pageName" :breadCrumbs="$breadCrumbs" />
    </x-slot>
    <!-- when admin is login this statement run -->
    @if(Auth::user()->role == 'Admin')
        <div class="count-cars">
            <div class="form-row">
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <a class="car-counter" href="{{ route('admin.category.index') }}">
                        <div class="car-number">
                            <h2>{{ $categories }}</h2>
                        </div>
                        <div class="cars-text">
                            <p>{{ $categories > 1? 'Categories' : 'Category' }}
                            </p>
                        </div>
                    </a>
                </div>

                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <a class="car-counter" href="{{ route('admin.testimonial.index') }}">
                        <div class="car-number">
                            <h2>{{ $reviews }}</h2>
                        </div>
                        <div class="cars-text">
                            <p>{{ $reviews > 1? 'Reviews' : 'Review' }}
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <a class="car-counter" href="{{ route('admin.service.index') }}">
                        <div class="car-number">
                            <h2>{{ $services }}</h2>
                        </div>
                        <div class="cars-text">
                            <p>{{ $services > 1? 'Services' : 'Service' }}
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <a class="car-counter" href="{{ route('admin.page.index') }}">
                        <div class="car-number">
                            <h2>{{ $pages }}</h2>
                        </div>
                        <div class="cars-text">
                            <p>{{ $pages > 1? 'Pages' : 'Page' }}
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <a class="car-counter" href="{{ route('admin.faq.index') }}">
                        <div class="car-number">
                            <h2>{{ $faqs }}</h2>
                        </div>
                        <div class="cars-text">
                            <p>{{ $faqs > 1? 'Faqs' : 'Faq' }}
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <a class="car-counter" href="{{ route('admin.lead.index') }}">
                        <div class="car-number">
                            <h2>{{ $leads }}</h2>
                        </div>
                        <div class="cars-text">
                            <p>{{ $leads > 1? 'Leads' : 'Lead' }}
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    @endif
    <!-- when user logind this statment run -->
    @if(Auth::user()->role == 'Teacher')
        <div class="count-cars">
            <div class="form-row">
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <a class="car-counter" href="{{ route('admin.page.index') }}">
                        <div class="car-number">
                            <h2>{{ $pages }}</h2>
                        </div>
                        <div class="cars-text">
                            <p>{{ $pages > 1? 'Pages' : 'Page' }}
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <a class="car-counter" href="{{ route('admin.testimonial.index') }}">
                        <div class="car-number">
                            <h2>{{ $reviews }}</h2>
                        </div>
                        <div class="cars-text">
                            <p>{{ $reviews > 1? 'Reviews' : 'Review' }}
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <a class="car-counter" href="{{ route('admin.faq.index') }}">
                        <div class="car-number">
                            <h2>{{ $faqs }}</h2>
                        </div>
                        <div class="cars-text">
                            <p>{{ $faqs > 1? 'Faqs' : 'Faq' }}
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- when any other user logind -->
    @endif
    @if(Auth::user()->role == 'Parent')
            <div class="ml-5 text-warning"><h2>Parent</h2></div>
    @endif   
    @if(Auth::user()->role == 'Librarin')
            <div class="ml-5 text-warning"><h2>Librarin</h2></div>
    @endif  
    @if(Auth::user()->role == 'Accountent')
            <div class="ml-5 text-warning"><h2>Accountent</h2></div>
    @endif       
    @if(Auth::user()->role == 'Student')
            <div class="ml-5 text-warning"><h2>Student</h2></div>

    @endif
    <x-slot name="pluginCss"></x-slot>
</x-admin-layout>
