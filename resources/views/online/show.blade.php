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
                    <div class="filter  mr-4">
                        <a class="btn btn-outline-primary btn-sm" href="{{ route('online.create') }}">
                            <i class="bi bi-plus"></i>online
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"> Online-Montring <span>| all</span></h5>
                        <hr>
                        <div class=" table-responsive">
                            <table class="table table-borderless datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Device Name</th>
                                        <th scope="col">Device Live Data</th>
                                        <th scope="col">Device Installation </th>
                                        <th scope="col">Action </th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @if($online)
                                        @foreach ($online as $online)
                                            <tr>
                                                <th scope="row">{{ $loop->index + 1 }}</th>
                                                <td>{{ $online->devicename }}</td>
                                                <td>{{ $online->devicelive }} </td>
                                                <td>{{ date('M d Y', strtotime($online->created_at)) }}</td>

                                                <td class="action">
                                                    <a href="" class="btn btn-info btn-sm">
                                                        <i class="bi bi-eye-fill"></i>
                                                    </a>
                                                    <a href="{{ route('online.edit', ['id' => $online->id]) }}" class="btn btn-primary btn-sm">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </a>

                                                   <form method="post" id="delete-form" action="{{ route('online.delete', $online->id) }} ">
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
