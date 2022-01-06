@extends('layouts.master')
@section('title', 'Admin Home')

@section('content')

 <!-- Page Content -->
        <div class="content">
          <!-- Overview -->
          <div class="row items-push">
            <div class="col-sm-6 col-xl-3">
              <div class="block block-rounded text-center d-flex flex-column h-100 mb-0">
                <div class="block-content block-content-full flex-grow-1">
                  <div class="item rounded-3 bg-body mx-auto my-3">
                    <i class="fa fa-users fa-lg text-primary"></i>
                  </div>
                  <div class="fs-1 fw-bold">{{ $users->count(); }}</div>
                  <div class="text-muted mb-3">Registered Users</div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light fs-sm">
                  <a class="fw-medium" href="{{ url('users/list') }}">
                    View All
                    <i class="fa fa-arrow-right ms-1 opacity-25"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-3">
              <div class="block block-rounded text-center d-flex flex-column h-100 mb-0">
                <div class="block-content block-content-full flex-grow-1">
                  <div class="item rounded-3 bg-body mx-auto my-3">
                    <i class="fa fa-level-up-alt fa-lg text-primary"></i>
                  </div>
                  <div class="fs-1 fw-bold">{{ $guests->count(); }}</div>
                  <div class="text-muted mb-3">Total Guest</div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light fs-sm">
                  <a class="fw-medium" href="{{ url('all/cards') }}">
                    View All
                    <i class="fa fa-arrow-right ms-1 opacity-25"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-3">
              <div class="block block-rounded text-center d-flex flex-column h-100 mb-0">
                <div class="block-content block-content-full flex-grow-1">
                  <div class="item rounded-3 bg-body mx-auto my-3">
                    <i class="fa fa-chart-line fa-lg text-primary"></i>
                  </div>
                  <div class="fs-1 fw-bold">{{ $guests->where('comment', '!=', null)->count() }}</div>
                  <div class="text-muted mb-3">Contacted Guest</div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light fs-sm">
                  <a class="fw-medium" href="{{ url('contacted/cards') }}">
                    View all sales
                    <i class="fa fa-arrow-right ms-1 opacity-25"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-3">
              <div class="block block-rounded text-center d-flex flex-column h-100 mb-0">
                <div class="block-content block-content-full">
                  <div class="item rounded-3 bg-body mx-auto my-3">
                    <i class="fa fa-wallet fa-lg text-primary"></i>
                  </div>
                  <div class="fs-1 fw-bold">{{ $guests->where('is_visited', true)->count() }}</div>
                  <div class="text-muted mb-3">Total Visted</div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light fs-sm">
                  <a class="fw-medium" href="{{ url('visited/cards') }}">
                    View All
                    <i class="fa fa-arrow-right ms-1 opacity-25"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- END Overview -->

          <!-- Latest Orders + Stats -->
          <div class="row">
            <div class="col-md-12">
              <!--  Latest Orders -->
              <div class="block block-rounded block-mode-loading-refresh">
                <div class="block-header block-header-default">
                  <h3 class="block-title">
                    Latest Guests
                  </h3>
                  <div class="block-options">
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                      <i class="si si-refresh"></i>
                    </button>
                    
                  </div>
                </div>
                <div class="block-content">
                  <table class="table table-striped table-hover table-borderless table-vcenter fs-sm">
                    <thead>
                      <tr class="text-uppercase">
                        <th>Name</th>
                        <th class="d-none d-xl-table-cell">Program</th>
                        <th>Phone</th>
                        <th class="d-none d-sm-table-cell" style="width: 120px;">Email</th>
                        <th>date</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($guests as $guest)
                            <tr>
                                <td>
                                <span class="fw-semibold">{{ $guest->name }}</span>
                                </td>
                                <td class="d-none d-xl-table-cell">
                                <span class="fs-sm text-muted">{{ $guest->program }}</span>
                                </td>
                                <td>
                                <span class="fw-semibold text-warning">{{ $guest->phone }}</span>
                                </td>
                                <td class="d-none d-sm-table-cell fw-medium">
                                {{ $guest->email }}
                                </td>
                                <td class="d-none d-sm-table-cell fw-medium">
                                {{ Carbon\Carbon::parse($guest->created_at)->format('d-m-Y') }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light fs-sm text-center">
                  <a class="fw-medium" href="javascript:void(0)">
                    View all orders
                    <i class="fa fa-arrow-right ms-1 opacity-25"></i>
                  </a>
                </div>
              </div>
              <!-- END Latest Orders -->
            </div>
            
          </div>
          <!-- END Latest Orders + Stats -->
        </div>
        <!-- END Page Content -->


@endsection
