@extends('layouts.master')
@section('title', 'Home | Update Information')
@section('style')
<style>
    #map {
  height: 100%;
}
</style>
@endsection


@section('content')
<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
      <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
        <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Update Information</h1>
        <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">Phone</li>
            <li class="breadcrumb-item active" aria-current="page">Update Information</li>
          </ol>
        </nav>
      </div>
    </div>
</div>
<!-- END Hero -->


<div class="content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                
                <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Update Information</h4>
                                    <hr>
                                    @if (session('success'))
                                            <div class="alert alert-success">
                                                {{ session('success') }}
                                            </div>
                                        @endif
                                    <form class="needs-validation" action="{{ url('update/phone') }}"  method="POST" novalidate>
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label" for="validationCustom01">Update your Phone</label>
                                                    <input type="text" class="form-control @error('phone') is-invalid @enderror" id="validationCustom01" placeholder="Enter your phone number" name="phone" value="{{ old('phone') }}" required>
                                                    @error('phone')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom02">Select your church centre</label>
                                                        <select name="church_centre" class="form-control @error('church_centre') is-invalid @enderror" required>
                                                            <option value="">Select One</option>
                                                            @isset($centres)
                                                                @foreach ($centres as $centre)
                                                                    <option value="{{ $centre->id }}">{{ $centre->name }}</option>
                                                                @endforeach
                                                            @endisset
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom02">Select Unit</label>
                                                        <select name="unit" class="form-control @error('unit') is-invalid @enderror" required>
                                                            <option value="">Select One</option>
                                                            <option value="Follow-Up">Follow Up</option>
                                                            <option value="Visitation">Visitation</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <button class="btn btn-primary" type="submit">Update User Record</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection