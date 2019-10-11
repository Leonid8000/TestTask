<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" xmlns="http://www.w3.org/1999/html">
    <head>
        @include('layouts.head')
    </head>
    <body>
        <main id="main">
        <div>
            <h1 class="text-center ">TEST TASK</h1>
            <hr />
            @if (Route::has('login'))
                <div class="d-flex justify-content-center">
                    @auth
                    <span class="mr-4 text-center btn-home">
                        <a href="{{ url('/home') }}">Home</a>
                    </span>
                    @else
                        <span class="mr-4 text-center left-btn">
                         <a href="{{ route('login') }}">Log in</a>
                        </span>
                        @if (Route::has('register'))
                            <span class="text-center ml-4 right-btn">
                             <a href="{{ route('register') }}">Try</a>
                            </span>
                        @endif
                    @endauth
                </div>
            @endif

        </div>
        </main>
        @include('layouts.footer')

