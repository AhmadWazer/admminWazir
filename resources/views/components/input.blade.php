@props(['disabled' => false])
<!-- <div class="relative"> -->
<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50']) !!}>
<!-- <img class="img-fluid show-eye" src="{{ asset('img/Eye.svg') }}" alt="">
<img class="img-fluid hide-eye" src="{{ asset('img/eyeclose.svg') }}" alt="">
</div> -->