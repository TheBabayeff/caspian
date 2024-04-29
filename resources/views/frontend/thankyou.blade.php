@extends('layouts.app')

@section('content')
    <header class="page-header">
        <div class="container">
            <h1 style="color:#33DAFF">{{ __('components.successSent') }}</h1>
            <h6>{{ __('components.successSentText') }}</h6>
            <ul>
                <li><a style="font-family: 'Nunito', sans-serif;" href="{{ route('welcome') }}">{{ __('components.home') }}</a></li>
                <li style="font-family: 'Nunito', sans-serif;">{{ __('components.getConsultation') }}</li>
            </ul>
        </div>
        <!-- end container -->
    </header>
@endsection
