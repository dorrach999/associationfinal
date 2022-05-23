<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <title>Document</title>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Raleway:400,700");
        *, *:before, *:after {
        box-sizing: border-box;
        }

        body {
        min-height: 100vh;
        font-family: "Raleway", sans-serif;
        }

        .container {
        position: absolute;
        width: 100%;
        height: 100%;
        overflow: hidden;
        }
        .container:hover .top:before, .container:hover .top:after, .container:hover .bottom:before, .container:hover .bottom:after, .container:active .top:before, .container:active .top:after, .container:active .bottom:before, .container:active .bottom:after {
        margin-left: 200px;
        transform-origin: -200px 50%;
        transition-delay: 0s;
        }
        .container:hover .center, .container:active .center {
        opacity: 1;
        transition-delay: 0.2s;
        }

        .top:before, .top:after, .bottom:before, .bottom:after {
        content: "";
        display: block;
        position: absolute;
        width: 200vmax;
        height: 200vmax;
        top: 50%;
        left: 50%;
        margin-top: -100vmax;
        transform-origin: 0 50%;
        transition: all 0.5s cubic-bezier(0.445, 0.05, 0, 1);
        z-index: 10;
        opacity: 0.65;
        transition-delay: 0.2s;
        }

        .top:before {
        transform: rotate(45deg);
        background: #5B5255;
        }
        .top:after {
        transform: rotate(135deg);
        background: #ffb4f1;
        }

        .bottom:before {
        transform: rotate(-45deg);
        background: #db4cb4;
        }
        .bottom:after {
        transform: rotate(-135deg);
        background: #71686B;
        }

        .center {
        position: absolute;
        width: 400px;
        height: 400px;
        top: 50%;
        left: 50%;
        margin-left: -200px;
        margin-top: -200px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 30px;
        opacity: 0;
        transition: all 0.5s cubic-bezier(0.445, 0.05, 0, 1);
        transition-delay: 0s;
        color: #333;
        }
        .center input {
        width: 100%;
        padding: 15px;
        margin: 5px;
        border-radius: 1px;
        border: 1px solid #ccc;
        font-family: inherit;
        }
    </style>
</head>
<body>

<div class="container" onclick="onclick">
  <div class="top"></div>
  <div class="bottom"></div>
  <div class="center">
  <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
           
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <label for="name" value="{{ __('Name') }}" />
                <input id="name" class="block mt-1 w-full"placeholder="Nom" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <label for="email" value="{{ __('Email') }}" />
                <input id="email" class="block mt-1 w-full" placeholder="Email" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <label for="password" value="{{ __('Password') }}" />
                <input id="password" class="block mt-1 w-full" placeholder="mot de passe" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <input id="password_confirmation" placeholder="confirmer mot de passe" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <label for="terms">
                        <div class="flex items-center">
                            <checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
</div>
</div>
</body>
</html>

