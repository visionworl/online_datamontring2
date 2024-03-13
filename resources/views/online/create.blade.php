@extends('layouts.app')

@section('title', 'Online-Montring')

@section('content')

    @include('layouts.partials.header')


    @include('layouts.partials.sidebar')


    <main id="main" class="main">

        @include('layouts.partials.breadcrums')

        @include('layouts.partials.alerts')

        <section class="section dashboard">
          <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Online-Montring <span>| Data</span></h5>
                        <hr>
                        <!-- Floating Labels Form -->
                        <form class="row g-3" method="POST" action="{{route('online.store')}}">
                            @csrf
                            <div class="col-md-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="devicename" name="devicename" value="{{ old('title') }}">
                                    <label for="devicename">Device_name *</label>
                                </div>
                                @error('title')
                                    <div class="validation-error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="devicelive" name="devicelive" value="{{ old('title') }}">
                                    <label for="devicelive">Device_Live_Data *</label>
                                </div>
                                @error('title')
                                    <div class="validation-error">{{ $message }}</div>
                                @enderror
                            </div>
                            <hr>
                            <div class="text-left">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form><!-- End floating Labels Form -->

                    </div>

                </div>

            </div><!-- End Left side columns -->


          </div>
        </section>

      </main><!-- End #main -->


    @include('layouts.partials.footer')

@endsection
