@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

    @include('layouts.partials.header')


    @include('layouts.partials.sidebar')


    <main id="main" class="main">

        @include('layouts.partials.breadcrums')

        @include('layouts.partials.alerts')


        </section>

      </main>


    @include('layouts.partials.footer')

@endsection
