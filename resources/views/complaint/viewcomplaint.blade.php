@extends('layouts.app')

@section('title','Online-Complaint-Data')

@section('content')s

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
                        <h5 class="card-title"> Online-Complaint-Data <span>| Data</span></h5>
                        <hr>

                        <div class="row g-3">

                            <div class="col-md-12">
                                <h6 class="font-bold bg-gray-300 px-2 py-2">Online-Complaint-Data</h6>
                            </div>

                            <div class="col-md-3">
                                <p class="m-0 text-label">Error_Name : </p>
                                <p class="m-0">{{ $details->name }}</p>
                            </div>

                            <div class="col-md-3">
                                <p class="m-0 text-label">Email : </p>
                                <p class="m-0">{{ $details->email }}</p>
                            </div>
                            <div class="col-md-3">
                                <p class="m-0 text-label">Phone : </p>
                                <p class="m-0">{{ $details->phone }}</p>
                            </div>
                            <div class="col-md-3">
                                <p class="m-0 text-label">Description : </p>
                                <p class="m-0">{{ $details->description }}</p>
                            </div>
                            <div class="col-md-3">
                                <p class="m-0 text-label"> Created_At : </p>
                                <p class="m-0">{{ $details->created_at }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Left side columns -->
          </div>
        </section>

      </main><!-- End #main -->


    @include('layouts.partials.footer')

@endsection
