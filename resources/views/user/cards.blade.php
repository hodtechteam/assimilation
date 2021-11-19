@extends('layouts.master')
@section('title', 'Home | Fill Card')

@section('content')
 <!-- Hero -->
        <div class="bg-body-light">
          <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
              <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Cards</h1>
              <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">Cards</li>
                  <li class="breadcrumb-item active" aria-current="page">Fill Card</li>
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
                                        <h4 class="card-title">Add Guest's Information</h4>
                                        <hr>
                                        @if (session('success'))
						                        <div class="alert alert-success">
						                            {{ session('success') }}
						                        </div>
						                    @endif
                                        <form class="needs-validation" action="{{ url('store/card') }}"  method="POST" novalidate>
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom01">Full Name</label>
                                                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="validationCustom01" placeholder="Visitor's Name" name="name" value="{{ old('name') }}" required>
                                                        @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom02">Phone Number</label>
                                                        <input type="text" class="form-control @error('phone') is-invalid @enderror" id="validationCustom02" data-parsley-type="number" placeholder="Phone Number" name="phone" value="{{ old('phone') }}" required>
                                                        @error('phone')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom02">Email Address</label>
                                                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="validationCustom02" parsley-type="email" placeholder="Email Address" name="email" value="{{ old('email') }}" required>
                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom02">Home Address</label>
                                                        <input type="text" class="form-control @error('address') is-invalid @enderror" id="validationCustom02" parsley-type="email" placeholder="Address" name="address" value="{{ old('address') }}" required>
                                                        @error('address')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom02">Age Bracket</label>
                                                        <select name="age" class="form-control @error('age') is-invalid @enderror" required>
                                                            <option value="">Select One</option>
                                                            <option value="less than 18">Less than 18 years</option>
                                                        </select>
                                                        @error('age')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom02">How did you hear about HOD</label>
                                                        <select name="source" class="form-control @error('source') is-invalid @enderror" required>
                                                            <option value="">Select One</option>
                                                            <option value="Friends and Family">Friends and Family</option>
                                                            <option value="Social Media">Social Media</option>
                                                            
                                                        </select>
                                                        @error('source')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom02">Are you Born Again</label>
                                                        <select name="born_again" class="form-control @error('born_again') is-invalid @enderror" required>
                                                            <option value="">Select One</option>
                                                            <option value="1">Yes</option>
                                                            <option value="0">No</option>
                                                        </select>
                                                        @error('born_again')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom02">Would you Love to be a member of HOD</label>
                                                        <select name="member" class="form-control @error('member') is-invalid @enderror" required>
                                                            <option value="">Select One</option>
                                                            <option value="1">Yes</option>
                                                            <option value="0">No</option>
                                                        </select>
                                                        @error('member')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom02">Would you Love to be visited</label>
                                                        <select name="visitation" class="form-control @error('visitation') is-invalid @enderror" required>
                                                            <option value="">Select One</option>
                                                            <option value="1">Yes</option>
                                                            <option value="0">No</option>
                                                        </select>
                                                        @error('visitation')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom02">Select Program</label>
                                                        <select name="program" class="form-control @error('program') is-invalid @enderror" required>
                                                            <option value="">Select One</option>
                                                            <option value="Sunday">Sunday</option>
                                                            <option value="Wednesday">Wednesday</option>
                                                        </select>
                                                        @error('program')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>      
                                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">             
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <button class="btn btn-primary" type="submit">Submit form</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- end card -->
                            </div> <!-- end col -->
                        </div>


                </div>
            </div>
        </div>
    </div>
                
@endsection