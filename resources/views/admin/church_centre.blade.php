@extends('layouts.master')
@section('title', 'User List')

{{-- @section('styles')
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
@endsection --}}

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
          <div class="row mb-1">
            <div class="col-md-6">
              {{-- <a href="{{ route('create-church-centres') }}" class="btn btn-success"><i class="fa fa-plus"></i> New Church Centre</a> --}}
              <h5>Add Church Centre</h5>
            </div>
          </div>

          <div class="col-md-12">
            <form action="{{ route('store-church-centres') }}" method="POST">
               @csrf 
              <div class="row">
                <div class="col-md-6">
                  <input required type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Church Centre Name *" value="{{ old('name') }}">
                    @error('name')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                      <div class="mt-3 mb-3">
                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                      </div>
                  </div>
              </div>
  
            </form>
          </div>
          <hr>
          {{--  --}}
          <div class="block block-rounded">
            <div class="block-header block-header-default">
              <h3 class="block-title">All Church Centres - <small>@isset($centres)
                    {{ count($centres) }}
              @endisset</small></h3>
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
                    {{-- <th style="width: 5%;">#</th> --}}
                    {{-- <th class="d-none d-sm-table-cell" style="width: 25%;">Email</th>
                    <th class="d-none d-sm-table-cell" style="width: 20%;">Phone</th>
                    <th class="d-none d-sm-table-cell" style="width: 20%;">Unit</th> --}}
                    <th style="width: 30%;">Name</th>
                    <th style="width: 10%;">Status</th>
                    <th style="width: 10%">Edit</th>
                    {{-- <th style="width: 5%;">No. of Visited</th> --}}
                    {{-- <th style="width: 20%;">When Registered</th> --}}
                    {{-- <th style="width: 20%;">Action</th> --}}
                  </tr>
                </thead>
                <tbody>
                    @forelse ($centres as $centre)
                        <tr>
                            <td>
                              <a href="{{ route('fetch-church-centres', ['id' => $centre->id]) }}">{{ $centre->name }}</a>
                            </td>
                            <td>{{ $centre->status }}</td>
                            <td><a href="{{ route('edit-church-centre', ['centre' => $centre]) }}" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a></td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3">No record found</td>
                        </tr>
                    @endforelse
                  
                </tbody>
              </table>
            </div>
          </div>


          <!-- start modal -->
          {{-- <div class="modal fade" id="createCentreModal" tabindex="-1" role="dialog"
            aria-labelledby="createCentreModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="createCentreModalLabel">Create Category</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="#" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="category-name">Name</label>
                      <input type="text" class="form-control" id="category-name" name="name"
                        placeholder="Enter category name">
                    </div>
                    <button type="submit" class="btn btn-primary">Create Category</button>
                  </form>
                </div>
              </div>
            </div>
          </div> --}}
          <!-- end modal -->
</div>
          <!-- END Dynamic Table with Export Buttons -->



{{-- @section('script')
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
@endsection --}}

@endsection