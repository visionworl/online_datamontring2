@extends('layouts.app')

@section('title', 'Edit Plan')

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
                        <h5 class="card-title">Edit Plan <span>| new</span></h5>
                        <hr>
                        <!-- Floating Labels Form -->
                        <form class="row g-3" method="POST" action="">
                            @csrf
                            @method('PUT')
                            <div class="col-md-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="devicename" name="devicename" value="{{$online->devicename}}">
                                    <label for="devicename">Device_name *</label>
                                </div>
                                @error('devicename')
                                    <div class="validation-error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="devicelive" name="devicelive" value="{{$online->devicelive}}">
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
