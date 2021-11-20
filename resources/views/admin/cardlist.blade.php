@extends('layouts.master')
@section('title', 'All Guest List')

@section('content')
<!-- Hero -->
        <div class="bg-body-light">
          <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
              <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Cards</h1>
              <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">Cards</li>
                  <li class="breadcrumb-item active" aria-current="page">Card List</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
        <!-- END Hero -->


          <!-- Dynamic Table with Export Buttons -->

<div class="content">
          <div class="block block-rounded">
            <div class="block-header block-header-default">
              <h3 class="block-title">All Guest <small>List</small></h3>
            </div>
             @if (session('success'))
                  <div class="alert alert-success">
                      {{ session('success') }}
                  </div>
              @endif
                                       
            <div class="block-content block-content-full">
              <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
              <table class="table table-bordered table-responsive table-striped table-vcenter js-dataTable-buttons">
                <thead>
                  <tr>
                    <th class="text-center" style="width: 80px;"></th>
                    <th style="width: 30%;">User</th>
                    <th style="width: 30%;">Name</th>
                    <th class="d-none d-sm-table-cell" style="width: 20%;">Email</th>
                    <th class="d-none d-sm-table-cell" style="width: 20%;">Phone</th>
                    <th class="d-none d-sm-table-cell">Program</th>
                    <th style="width: 20%;">When Registered</th>
                    <th style="width: 10%;">Action</th>
                  </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    @foreach ($cards as $card)
                        <tr>
                            <td class="text-center">{{ $i++ }}</td>
                            <td class="fw-semibold">
                            <a href="#">{{ $card->user->name }}</a>
                            </td>
                            <td class="fw-semibold">
                            <a href="#">{{ $card->name }}</a>
                            </td>
                            <td class="d-none d-sm-table-cell">
                            <em class="text-muted">{{ $card->email }}</em>
                            </td>
                            <td class="d-none d-sm-table-cell">
                            <em class="text-muted">{{ $card->phone}}</em>
                            </td>
                            <td class="d-none d-sm-table-cell">
                            <span class="badge bg-success">{{ $card->program }}</span>
                            </td>
                            <td>
                            <em class="text-muted">{{ \Carbon\Carbon::parse($card->created_at)->format('d/m/Y') }}</em>
                            </td>
                            <td>
                              <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal-block-vcenter_{{ $card->id }}">View</button>
                  
                                {{-- <a href="" class="btn btn-primary btn-sm">View</a> --}}
                            </td>
                        </tr>



                        <!-- Vertically Centered Block Modal -->
                        <div class="modal" id="modal-block-vcenter_{{ $card->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-block-vcenter" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="block block-rounded block-themed block-transparent mb-0">
                                <div class="block-header bg-primary-dark">
                                  <h3 class="block-title">Guest's Information</h3>
                                  <div class="block-options">
                                    <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                                      <i class="fa fa-fw fa-times"></i>
                                    </button>
                                  </div>
                                </div>
                                <div class="block-content">
                                  <div class="row items-push">
          
                                    <div class="col-md-12">
                                      <!-- Author #3 -->
                                      <div class="block block-rounded h-100 mb-0">
                                        <div class="block-content bg-image p-0" style="background-image: url('{{ asset('assets/media/photos/photo16.jpg') }}');">
                                          <div class="block-content block-content-full d-flex align-items-center justify-content-between bg-primary-dark-op">
                                            <div class="me-3">
                                              <p class="fw-semibold text-white mb-0">{{ $card->name }}</p>
                                              <p class="fs-sm fw-medium text-white-50 mb-0">
                                                {{ $card->program }}
                                              </p>
                                            </div>
                                            <img class="img-avatar img-avatar48 img-avatar-thumb" src="{{ asset('assets/media/avatars/avatar9.jpg') }}" alt="">
                                          </div>
                                        </div>
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
                                              <h5 class="fs-base mb-1">Age Bracket</h5>
                                              <small>{{ $card->age }} years</small>
                                            </a>

                                            <a class="list-group-item list-group-item-action" href="javascript:void(0)">
                                              <h5 class="fs-base mb-1">How did you hear about HOD</h5>
                                              <small>{{ $card->source }} years</small>
                                            </a>

                                            <a class="list-group-item list-group-item-action" href="javascript:void(0)">
                                              <h5 class="fs-base mb-1">Are you Born Again</h5>
                                              <small>{{ $card->born_again == '1'?'YES':'NO' }}</small>
                                            </a>

                                            <a class="list-group-item list-group-item-action" href="javascript:void(0)">
                                              <h5 class="fs-base mb-1">Will you like to be a Member of H.O.D</h5>
                                              <small>{{ $card->member == '1'?'YES':'NO' }}</small>
                                            </a>

                                            <a class="list-group-item list-group-item-action" href="javascript:void(0)">
                                              <h5 class="fs-base mb-1">Will you like to be visited</h5>
                                              <small>{{ $card->visitation == '1'?'YES':'NO' }}</small>
                                            </a>
                                            <hr>
                                            <a class="list-group-item list-group-item-action" href="javascript:void(0)">
                                              <h5 class="fs-base mb-1">Report</h5>
                                              <small>{{ $card->comment == ''?'No Report Yet':$card->comment }}</small>
                                            </a>
                                          </div>
                                        </div>
                                        <hr>

                                        <div class="block-content bg-body-light">
                                          <div class="d-flex justify-content-between push">
                                            <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                              <i class="fa fa-fw fa-pencil-alt opacity-50 me-1"></i> I have Visited
                                            </a>
                                          </div>
                                          
                                          <form action="{{ url('update/card')}}" method="POST">
                                            @csrf
                                          <div class="d-flex justify-content-between push">
                                            <textarea name="comment" class="form-control" required></textarea>
                                          </div>
                                          <input type="hidden" name="card_id" value="{{  $card->id }}">
                                          <button type="submit" class="btn btn-sm btn-alt-secondary">Update </button>
                                        </form>

                                        </div>

                                        
                                      </div>
                                      <!-- END Author #3 -->
                                    </div>

                                    
                                  </div>
                                </div>
                                <div class="block-content block-content-full text-end bg-body">
                                  <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-dismiss="modal">Close</button>
                                  {{-- <button type="button" class="btn btn-sm btn-primary" data-bs-dismiss="modal">Done</button> --}}
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- END Vertically Centered Block Modal -->

                  
                    @endforeach
                  
                </tbody>
              </table>
            </div>
          </div>
</div>
          <!-- END Dynamic Table with Export Buttons -->

@endsection