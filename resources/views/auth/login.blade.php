
@extends('layouts.guest')


@section('content')
    <div class="py-12 bg-secondary">
        <div class="flex justify-center text-center">
            <img src="https://devbunch.com/wp-content/themes/devbunch/assets/images/logo.svg" alt="DevBunch Logo" class="w-32 h-32 mb-4" width="400px">
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4  ">
                <div class="card shadow">
                    <div class="card-header p-3 bg-primary text-white text-center">
                        <h4 class="mb-0 p-0">
                            Technical Assessment PHP Laravel 2024
                        </h4>
                    </div>
                    <div class="card-body p-3">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <!-- Email Address -->
                            <div>
                                <x-label for="email" :value="__('Email')" />

                                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                            </div>

                            <!-- Password -->
                            <div class="mt-4">
                                <x-label for="password" :value="__('Password')" />

                                <x-input id="password" class="block mt-1 w-full"
                                         type="password"
                                         name="password"
                                         required autocomplete="current-password" />
                            </div>

                            <!-- Remember Me -->
                            <div class="block mt-4">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif

                                <x-button class="ml-3">
                                    {{ __('Log in') }}
                                </x-button>
                            </div>
                            @if (Route::has('register'))
                                <div style="text-align: right">
                                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>

                                </div>
                            @endif
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection