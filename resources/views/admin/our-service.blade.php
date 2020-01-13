@extends('layouts.app')

@section('content')
 <div class="main-panel">
    <div class="content-wrapper">
      <div class="col-md-12 grid-margin">
          <div class="card">
              <div class="card-body">
                  <h4 class="card-title mb-0"> Our Services </h4>
                   @if ($errors->any())
                          <div class="alert alert-danger">
                              <ul>
                                  @foreach ($errors->all() as $error)
                                      <li>{{ $error }}</li>
                                  @endforeach
                              </ul>
                          </div>
                        @endif

                        @if(Session::has('message'))
                            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{Session::get('message') }}</p>
                                                
                        @endif
                  <div class="d-flex align-items-center justify-content-between w-100">
                    <p class="mb-0">  </p>
                    <div class="dropdown">
                      <a href="{{ url('admin/edit-our-services') }}" class="btn btn-outline-secondary" id="dateSorter"  aria-haspopup="true" aria-expanded="false">Edit</a>
                     
                    </div>
                  </div>
                  <div class="d-flex align-items-end">
                      <p class="mb-0 mr-2 ml-2 mb-1">{{ $our_service->about_us }}</p>
                   
                  </div>
                  <canvas class="mt-4" height="100" id="market-overview-chart"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
  @endsection
