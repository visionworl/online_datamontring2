@extends('layouts.app')

@section('title', 'Edit-Online-Montring-Data')

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
                        <h5 class="card-title">Edit-Online-Montring-Data <span>| new</span></h5>
                        <hr>
                        <!-- Floating Labels Form -->

                            <form class="row g-3" method="POST" action="{{route('data.update',['id' => $data->id])}}" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-3">
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="device_id" aria-label="device_id" name="device_id" value="{{$data->device_id}}">
                                        @if( $online)
                                        @foreach ( $online as  $online)
                                            <option value="{{$online->id }}">{{ $online->devicename }}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                    <label for="user_id"> Device Name </label>
                                </div>
                                @error('user_id')
                                    <div class="validation-error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="d_value" name="d_value" value="{{$data->d_value}}">
                                    <label for="d_value">Device Value </label>
                                </div>
                                @error('pump_title')
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
