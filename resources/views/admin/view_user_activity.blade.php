@extends('layouts.master')
@section('title', 'User List')


@section('content')

 <!-- Page Content -->
        <div class="content">
          <!-- User Info -->
          <div class="block block-rounded">
            <div class="block-content text-center">
              <div class="py-4">
                <div class="mb-3">
                  <img class="img-avatar img-avatar96" src="{{ asset('assets/media/avatars/avatar15.jpg') }}" alt="">
                </div>
                <h1 class="fs-lg mb-0">
                  {{ $user->name }}
                </h1>
                <p class="text-muted">
                  <i class="fa fa-award text-warning me-1"></i>
                  Unit Member
                </p>
              </div>
            </div>
            <div class="block-content bg-body-light text-center">
              <div class="row items-push text-uppercase">
                <div class="col-12 col-md-4">
                  <div class="fw-semibold text-dark mb-1">All Cards</div>
                  <a class="link-fx fs-3" href="javascript:void(0)">{{ $cards->count() }}</a>
                </div>
                <div class="col-12 col-md-4">
                  <div class="fw-semibold text-dark mb-1">Contacted</div>
                  <a class="link-fx fs-3" href="javascript:void(0)">{{ $cards->where('comment', '!=', null)->count() }}</a>
                </div>
                <div class="col-12 col-md-4">
                  <div class="fw-semibold text-dark mb-1">Visited</div>
                  <a class="link-fx fs-3" href="javascript:void(0)">{{ $cards->where('is_visited', true)->count() }}</a>
                </div>
                {{-- <div class="col-6 col-md-3">
                  <div class="fw-semibold text-dark mb-1">Referred</div>
                  <a class="link-fx fs-3" href="javascript:void(0)">3</a>
                </div> --}}
              </div>
            </div>
          </div>
          <!-- END User Info -->

          <!-- Shopping Cart -->
          <div class="block block-rounded">
            <div class="block-header block-header-default">
              <h3 class="block-title">All Cards ({{ $cards->count() }})</h3>
            </div>
            <div class="block-content">
              <div class="table-responsive">
                <table class="table table-borderless table-striped table-vcenter">
                  <thead>
                    <tr>
                      <th class="text-center" style="width: 100px;">ID</th>
                      <th class="d-none d-sm-table-cell text-center">Added</th>
                      <th class="d-none d-md-table-cell">Product</th>
                      <th>Status</th>
                      <th class="d-none d-sm-table-cell text-end">Value</th>
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-center fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_product_edit.html">
                          PID.0154                  </a>
                      </td>
                      <td class="d-none d-sm-table-cell text-center fs-sm">28/04/2019</td>
                      <td class="d-none d-md-table-cell fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_product_edit.html">Product #4</a>
                      </td>
                      <td>
                        <span class="badge bg-danger">Out of Stock</span>
                      </td>
                      <td class="text-end d-none d-sm-table-cell fs-sm">
                        <strong>$56,00</strong>
                      </td>
                      <td class="text-center fs-sm">
                        <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_product_edit.html">
                          <i class="fa fa-fw fa-eye"></i>
                        </a>
                        <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                          <i class="fa fa-fw fa-times text-danger"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_product_edit.html">
                          PID.0153                  </a>
                      </td>
                      <td class="d-none d-sm-table-cell text-center fs-sm">28/11/2019</td>
                      <td class="d-none d-md-table-cell fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_product_edit.html">Product #3</a>
                      </td>
                      <td>
                        <span class="badge bg-danger">Out of Stock</span>
                      </td>
                      <td class="text-end d-none d-sm-table-cell fs-sm">
                        <strong>$81,00</strong>
                      </td>
                      <td class="text-center fs-sm">
                        <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_product_edit.html">
                          <i class="fa fa-fw fa-eye"></i>
                        </a>
                        <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                          <i class="fa fa-fw fa-times text-danger"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_product_edit.html">
                          PID.0152                  </a>
                      </td>
                      <td class="d-none d-sm-table-cell text-center fs-sm">12/07/2019</td>
                      <td class="d-none d-md-table-cell fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_product_edit.html">Product #2</a>
                      </td>
                      <td>
                        <span class="badge bg-success">Available</span>
                      </td>
                      <td class="text-end d-none d-sm-table-cell fs-sm">
                        <strong>$42,00</strong>
                      </td>
                      <td class="text-center fs-sm">
                        <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_product_edit.html">
                          <i class="fa fa-fw fa-eye"></i>
                        </a>
                        <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                          <i class="fa fa-fw fa-times text-danger"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_product_edit.html">
                          PID.0151                  </a>
                      </td>
                      <td class="d-none d-sm-table-cell text-center fs-sm">25/04/2019</td>
                      <td class="d-none d-md-table-cell fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_product_edit.html">Product #1</a>
                      </td>
                      <td>
                        <span class="badge bg-danger">Out of Stock</span>
                      </td>
                      <td class="text-end d-none d-sm-table-cell fs-sm">
                        <strong>$81,00</strong>
                      </td>
                      <td class="text-center fs-sm">
                        <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_product_edit.html">
                          <i class="fa fa-fw fa-eye"></i>
                        </a>
                        <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                          <i class="fa fa-fw fa-times text-danger"></i>
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- END Shopping Cart -->

          <!-- Past Orders -->
          <div class="block block-rounded">
            <div class="block-header block-header-default">
              <h3 class="block-title">Past Orders (5)</h3>
            </div>
            <div class="block-content">
              <div class="table-responsive">
                <table class="table table-borderless table-striped table-vcenter">
                  <thead>
                    <tr>
                      <th class="text-center" style="width: 100px;">ID</th>
                      <th class="d-none d-sm-table-cell text-center">Submitted</th>
                      <th class="d-none d-md-table-cell text-center">Products</th>
                      <th>Status</th>
                      <th class="d-none d-sm-table-cell text-end">Value</th>
                      <th class="text-center">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-center fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_order.html">
                          ORD.0625                  </a>
                      </td>
                      <td class="d-none d-sm-table-cell text-center fs-sm">11/07/2019</td>
                      <td class="d-none d-md-table-cell text-center fs-sm">
                        <a class="fw-semibold" href="javascript:void(0)">3</a>
                      </td>
                      <td>
                        <span class="badge bg-success">Delivered</span>
                      </td>
                      <td class="text-end d-none d-sm-table-cell fs-sm">
                        <strong>$244,00</strong>
                      </td>
                      <td class="text-center fs-sm">
                        <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_product_edit.html">
                          <i class="fa fa-fw fa-eye"></i>
                        </a>
                        <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                          <i class="fa fa-fw fa-times text-danger"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_order.html">
                          ORD.0624                  </a>
                      </td>
                      <td class="d-none d-sm-table-cell text-center fs-sm">11/02/2019</td>
                      <td class="d-none d-md-table-cell text-center fs-sm">
                        <a class="fw-semibold" href="javascript:void(0)">7</a>
                      </td>
                      <td>
                        <span class="badge bg-success">Delivered</span>
                      </td>
                      <td class="text-end d-none d-sm-table-cell fs-sm">
                        <strong>$216,00</strong>
                      </td>
                      <td class="text-center fs-sm">
                        <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_product_edit.html">
                          <i class="fa fa-fw fa-eye"></i>
                        </a>
                        <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                          <i class="fa fa-fw fa-times text-danger"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_order.html">
                          ORD.0623                  </a>
                      </td>
                      <td class="d-none d-sm-table-cell text-center fs-sm">07/04/2019</td>
                      <td class="d-none d-md-table-cell text-center fs-sm">
                        <a class="fw-semibold" href="javascript:void(0)">7</a>
                      </td>
                      <td>
                        <span class="badge bg-success">Delivered</span>
                      </td>
                      <td class="text-end d-none d-sm-table-cell fs-sm">
                        <strong>$50,00</strong>
                      </td>
                      <td class="text-center fs-sm">
                        <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_product_edit.html">
                          <i class="fa fa-fw fa-eye"></i>
                        </a>
                        <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                          <i class="fa fa-fw fa-times text-danger"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_order.html">
                          ORD.0622                  </a>
                      </td>
                      <td class="d-none d-sm-table-cell text-center fs-sm">27/11/2019</td>
                      <td class="d-none d-md-table-cell text-center fs-sm">
                        <a class="fw-semibold" href="javascript:void(0)">6</a>
                      </td>
                      <td>
                        <span class="badge bg-success">Delivered</span>
                      </td>
                      <td class="text-end d-none d-sm-table-cell fs-sm">
                        <strong>$65,00</strong>
                      </td>
                      <td class="text-center fs-sm">
                        <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_product_edit.html">
                          <i class="fa fa-fw fa-eye"></i>
                        </a>
                        <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                          <i class="fa fa-fw fa-times text-danger"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center fs-sm">
                        <a class="fw-semibold" href="be_pages_ecom_order.html">
                          ORD.0621                  </a>
                      </td>
                      <td class="d-none d-sm-table-cell text-center fs-sm">16/07/2019</td>
                      <td class="d-none d-md-table-cell text-center fs-sm">
                        <a class="fw-semibold" href="javascript:void(0)">4</a>
                      </td>
                      <td>
                        <span class="badge bg-success">Delivered</span>
                      </td>
                      <td class="text-end d-none d-sm-table-cell fs-sm">
                        <strong>$97,00</strong>
                      </td>
                      <td class="text-center fs-sm">
                        <a class="btn btn-sm btn-alt-secondary" href="be_pages_ecom_product_edit.html">
                          <i class="fa fa-fw fa-eye"></i>
                        </a>
                        <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                          <i class="fa fa-fw fa-times text-danger"></i>
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- END Past Orders -->

          <!-- Referred Members -->
          <div class="block block-rounded">
            <div class="block-header block-header-default">
              <h3 class="block-title">Referred Members (3)</h3>
            </div>
            <div class="block-content">
              <div class="row items-push">
                <div class="col-md-4">
                  <!-- Referred User -->
                  <a class="block block-rounded block-bordered block-link-shadow h-100 mb-0" href="javascript:void(0)">
                    <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                      <div>
                        <div class="fw-semibold mb-1">Megan Fuller</div>
                        <div class="fs-sm text-muted">4 Orders</div>
                      </div>
                      <div class="ms-3">
                        <img class="img-avatar" src="assets/media/avatars/avatar8.jpg" alt="">
                      </div>
                    </div>
                  </a>
                  <!-- END Referred User -->
                </div>
                <div class="col-md-4">
                  <!-- Referred User -->
                  <a class="block block-rounded block-bordered block-link-shadow h-100 mb-0" href="javascript:void(0)">
                    <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                      <div>
                        <div class="fw-semibold mb-1">Jose Parker</div>
                        <div class="fs-sm text-muted">5 Orders</div>
                      </div>
                      <div class="ms-3">
                        <img class="img-avatar" src="assets/media/avatars/avatar12.jpg" alt="">
                      </div>
                    </div>
                  </a>
                  <!-- END Referred User -->
                </div>
                <div class="col-md-4">
                  <!-- Referred User -->
                  <a class="block block-rounded block-bordered block-link-shadow h-100 mb-0" href="javascript:void(0)">
                    <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                      <div>
                        <div class="fw-semibold mb-1">Barbara Scott</div>
                        <div class="fs-sm text-muted">3 Orders</div>
                      </div>
                      <div class="ms-3">
                        <img class="img-avatar" src="assets/media/avatars/avatar6.jpg" alt="">
                      </div>
                    </div>
                  </a>
                  <!-- END Referred User -->
                </div>
              </div>
            </div>
          </div>
          <!-- END Referred Members -->

          <!-- Private Notes -->
          <div class="block block-rounded">
            <div class="block-header block-header-default">
              <h3 class="block-title">Private Notes</h3>
            </div>
            <div class="block-content">
              <p class="alert alert-info fs-sm">
                <i class="fa fa-fw fa-info me-1"></i> This note will not be displayed to the customer.
              </p>
              <form action="be_pages_ecom_customer.html" onsubmit="return false;">
                <div class="mb-4">
                  <label class="form-label" for="dm-ecom-customer-note">Note</label>
                  <textarea class="form-control" id="dm-ecom-customer-note" name="dm-ecom-customer-note" rows="4" placeholder="Maybe a special request?"></textarea>
                </div>
                <div class="mb-4">
                  <button type="submit" class="btn btn-alt-primary">Add Note</button>
                </div>
              </form>
            </div>
          </div>
          <!-- END Private Notes -->
        </div>
        <!-- END Page Content -->

@endsection