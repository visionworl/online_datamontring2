@extends('layouts.app')

@section('title', 'Online-Montring-Data')

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
                    <div class="filter  mr-4">
                        <a class="btn btn-outline-primary btn-sm" href="{{ route('data.createdata') }}">
                            <i class="bi bi-plus"></i>online
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Online-Montring-Data <span>| all</span></h5>
                        <hr>
                        <div class=" table-responsive">
                            <table class="table table-borderless datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Device name</th>
                                        <th scope="col">Device Value</th>
                                        <th scope="col">Device Data Date</th>
                                        <th scope="col">Action</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @if($data)
                                        @foreach ($data as $data)
                                            <tr>
                                                <th scope="row">{{ $loop->index + 1 }}</th>
                                                <td>{{ $data->online->devicename }}</td>
                                                <td>{{ $data->d_value }}</td>
                                                <td>{{ date('M d Y', strtotime($data->created_at)) }}</td>

                                                <td class="action">
                                                    <a href="{{route('data.showdetails',$data->id)}}" class="btn btn-info btn-sm">
                                                        <i class="bi bi-eye-fill"></i>
                                                    </a>
                                                    <a href="{{route('data.edit',$data->id)}}" class="btn btn-primary btn-sm">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </a>

                                                   <form method="post" id="delete-form" action="{{route('data.delete' ,$data->id)}} ">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm">
                                                            <i class="bi bi-trash-fill"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

            </div><!-- End Left side columns -->


          </div>
        </section>

      </main><!-- End #main -->


    @include('layouts.partials.footer')

@endsection
