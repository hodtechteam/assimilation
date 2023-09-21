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
          
          <div class="block block-rounded">
            <div class="block-header block-header-default">
              <h3 class="block-title">Edit Church Centre</h3>
            </div>
            @if (session('success'))
              <div class="alert alert-success">
                  {{ session('success') }}
              </div>
            @endif
                                       
            <div class="block-content block-content-full">
              <form action="{{ route('update-church-centre', ['id' => $centre->id]) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group mb-4">
                  <input required type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Church Centre Name *" value="{{ $centre->name }}">
                  @error('name')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>

                <div class="form-group form-default">
                    @php
                        $status = ($centre->status == 'Active') ? 'Inactive' : 'Active';
                    @endphp
                    <div class="form-line focused-error">
                        <label>Status</label>
                        <select name="status" class="form-control show-tick">
                            <option value="{{ $centre->status }}" selected>{{ $centre->status }}</option>
                            <option value="{{ $status }}">{{ $status }}</option>
                        </select>
                    </div>
                </div>

                <div>
                  <button style="margin-bottom:10px" type="submit" class="btn btn-primary mt-3 mb-10">Save</button>
                </div>

              </form>
              {{--  --}}
            </div>
          </div>

</div>
          <!-- END Dynamic Table with Export Buttons -->


@endsection