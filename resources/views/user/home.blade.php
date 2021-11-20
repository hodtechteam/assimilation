@extends('layouts.master')
@section('title', 'User Home')

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
                  <div class="fs-1 fw-bold">{{ $guests->count() }}</div>
                  <div class="text-muted mb-3">My Guests</div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light fs-sm">
                  <a class="fw-medium" href="javascript:void(0)">
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
                  <div class="fs-1 fw-bold">{{ $guests->where('comment', '!=', null)->count() }}</div>
                  <div class="text-muted mb-3">Guest Contacted</div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light fs-sm">
                  <a class="fw-medium" href="javascript:void(0)">
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
                  <div class="fs-1 fw-bold">{{ $guests->where('is_visited', true)->count() }}</div>
                  <div class="text-muted mb-3">Guest Visited</div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light fs-sm">
                  <a class="fw-medium" href="javascript:void(0)">
                    View All
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
                  <div class="fs-1 fw-bold">{{ $guests->where('is_visited', false)->count() }}</div>
                  <div class="text-muted mb-3">Not Yet Visited</div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light fs-sm">
                  <a class="fw-medium" href="javascript:void(0)">
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
                    Latest Guest
                  </h3>
                  <div class="block-options">
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                      <i class="si si-refresh"></i>
                    </button>
                    <div class="dropdown">
                      <button type="button" class="btn-block-option" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="si si-chemistry"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="javascript:void(0)">
                          <i class="far fa-fw fa-dot-circle opacity-50 me-1"></i> Pending
                        </a>
                        <a class="dropdown-item" href="javascript:void(0)">
                          <i class="far fa-fw fa-times-circle opacity-50 me-1"></i> Canceled
                        </a>
                        <a class="dropdown-item" href="javascript:void(0)">
                          <i class="far fa-fw fa-check-circle opacity-50 me-1"></i> Completed
                        </a>
                        <div role="separator" class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)">
                          <i class="fa fa-fw fa-eye opacity-50 me-1"></i> View All
                        </a>
                      </div>
                    </div>
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
                        <th></th>
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