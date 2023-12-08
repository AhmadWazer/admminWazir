<x-guest-layout>

    <x-application-logo />
    <x-auth-card>
        <!-- function for email checking if admin allowed or not -->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#emailfield').on('change', function () {
                    // Get the email value
                    var email = $(this).val();
                    // console.log(email);
                    // Make an AJAX request to the server
                    $.ajax({
                        url: '/checkuser/' + email,
                        type: 'GET',
                        success: function (data) {
                            // Display the result in the resultContainer
                            $('#resultContainer').html(data);
                            $('#resultContainer').addClass('alert alert-warning')
                        },
                        error: function () {
                            alert('Error checking user.');
                        }
                    });
                });
            });
        </script>
        <!-- function for email checking if admin allowed or not -->

        <div id="resultContainer">
        </div>
        <form action="{{ route('login') }}" method="POST" class="wow fadeInRight"
            ata-wow-duration="1s" data-wow-delay="1s">
            @csrf
            @if(session('status'))
                <div class="alert alert-warning">
                    {{ session('status') }}
                </div>
            @endif
            {{-- {!! RecaptchaV3::field('authforms') !!} --}}
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label>
                        <p class="label-txt label-active">Email Address</p>
                        <img class="img-fluid log-icon" src="{{ asset('img/Account.svg') }}" alt="">
                        
                        <input  id="emailfield" type="email" class="input input-active" name="email" required autofocus>
                    </label>
                </div>
                <div class="form-group col-md-12">
                    <label>
                        <p class="label-txt label-active">Password</p>
                        <img class="img-fluid log-icon" src="{{ asset('img/lock.svg') }}" alt="">
                        <input id="passwodfield" type="password" class="input input-active" name="password" required>
                        <img class="img-fluid show-eye" src="{{ asset('img/Eye.svg') }}" alt="">
                        <img class="img-fluid hide-eye" src="{{ asset('img/eyeclose.svg') }}"
                            alt="">
                    </label>
                </div>
                <div class="col-md-12 d-flex">
                    <div class="form-group col-md-6">
                        <a class="" href="{{ route('register') }}">
                            {{ __('Register your Account!') }}
                        </a>
                    </div>
                    <div class="form-group col-md-6">
                        @if(Route::has('password.request'))
                            <a class="forgot" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>
                </div>
            </div>
            <button type="submit" class="send-btn">{{ __('Log In') }}</button>
        </form>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
    </x-auth-card>
</x-guest-layout>
