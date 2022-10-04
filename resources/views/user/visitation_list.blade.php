@extends('layouts.master')
@section('title', 'Visitation Cards')

@section('content')

<div class="bg-body-light">
    <div class="content content-full">
      <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
        <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Cards</h1>
        <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">Cards</li>
            <li class="breadcrumb-item active" aria-current="page">Visitation List</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>


  <div class="content content-full content-boxed">
    <!-- Latest Friends -->
        <h2 class="content-heading">
          <i class="si si-users me-1"></i> Vistiors' List - {{ count($cards) }}
        </h2>
      <div class="row">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="table-responsive">
          <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
              <table class="table table-bordered table-striped  table-vcenter js-dataTable-buttons">
                <thead>
                  <tr>
                    {{-- <th class="text-center" style="width: 80px;"></th> --}}
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Pref.</th>
                    <th>Day</th>
                    <th>Report</th>
                    <th>Service Date</th>
                    <th>When Registered</th>
                  </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    @foreach ($cards as $card)
                        <tr>
                            <td class="fw-semibold">
                            <a href="#">{{ $card->name }}</a>
                            </td>
                            <td class="d-none d-sm-table-cell">
                            <em class="text-muted">{{ $card->phone}}</em>
                            </td>
                            
                            <td class="d-none d-sm-table-cell">
                                {{ $card->address }}
                            </td>
                            <td class="d-none d-sm-table-cell">
                              {{ $card->visitation }}
                              </td>
                              <td class="d-none d-sm-table-cell">
                                {{ $card->program}}
                                </td>
                            <td class="d-none d-sm-table-cell">
                            {{ $card->visitation_report }}
                            </td>

                            <td class="d-none d-sm-table-cell">
                              {{ Carbon\Carbon::parse(@$card->date_added)->format('d-m-Y') }}
                              </td>
                            <td class="d-none d-sm-table-cell">
                            {{ Carbon\Carbon::parse($card->created_at)->format('d-m-Y') }}
                            </td>
                        </tr>
                    @endforeach
                  
                </tbody>
              </table>
          </div>
        </div>

    

        {{-- @foreach ($cards as $card)
          <div class="col-md-6 col-xl-6">
            <div class="block block-rounded text-center">
              <div class="block-content block-content-full bg-image" style="background-image: url('{{ asset('assets/media/photos/photo4.jpg') }}');">
                <img class="img-avatar img-avatar-thumb" src="{{ asset('assets/media/avatars/avatar3.jpg') }}" alt="">
              </div>
              <div class="block-content block-content-full block-content-sm bg-body-light">
                <div class="fw-semibold">{{ $card->name }}</div>
                <div class="fs-sm text-muted">{{ $card->program }}</div>
              </div>
              <div class="block-content block-content-full">
                <div class="block-content">
                    <div class="list-group push">
                      <a class="list-group-item list-group-item-action" href="javascript:void(0)">
                        <h5 class="fs-base mb-1">Full Name</h5>
                        <small>{{ $card->name }}</small>
                      </a>
                      <a class="list-group-item list-group-item-action" href="javascript:void(0)">
                        <h5 class="fs-base mb-1">Phone Number</h5>
                        <small>{{ $card->phone }}</small>
                      </a>
                      <a class="list-group-item list-group-item-action" href="javascript:void(0)">
                        <h5 class="fs-base mb-1">Email Address</h5>
                        <small>{{ $card->email }}</small>
                      </a>
                      <a class="list-group-item list-group-item-action" href="javascript:void(0)">
                        <h5 class="fs-base mb-1">Home Address</h5>
                        <small>{{ $card->address }}</small>
                      </a>
                      <a class="list-group-item list-group-item-action" href="javascript:void(0)">
                        <h5 class="fs-base mb-1">Gender</h5>
                        <small>{{ $card->gender }}</small>
                      </a>
                    </div>
                  </div>
                  <div class="block-content">
                    <div class="block-content bg-body-light">
                      
                    <div class="d-flex justify-content-between push">
                    

                      <form action="{{ url('update/visitation/report')}}" method="POST">
                        @csrf
                        <div class="d-flex justify-content-between push">
                          <textarea name="visitation_report" class="form-control" required cols="30" rows="5">{{  $card->visitation_report }}</textarea>
                        </div>
                        <input type="hidden" name="card_id" value="{{  $card->id }}">
                      <button type="submit" class="btn btn-sm btn-alt-secondary">Send Visitation Report</button>
                      <br> <br>
                    </form>
                    
                    </div> 

                  </div>
                  <br>
                </div>
              </div>
                
            </div>
          </div>

        @endforeach --}}
        
  
      </div>
    </div>


@endsection

@section('script')


{{-- <script src="{{ asset('assets/js/dashmix.app.min.js') }}"></script> --}}

@endsection