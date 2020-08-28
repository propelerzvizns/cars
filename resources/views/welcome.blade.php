@extends('layouts.app')

        <title>
                @section('title', 'welcome')
                </title>


@section('content')
<div class="links">

    </div>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Welcome {{$name}} <br>
                    I'm {{$age}} years old

                </div>


            </div>

        </div>
@endsection
