@extends('layouts.master')
@section('title', 'Home | Fill Card')
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
                                        <h4 class="card-title">Manage Household</h4>
                                        <hr>
                                        @if (session('success'))
						                        <div class="alert alert-success">
						                            {{ session('success') }}
						                        </div>
						                    @endif
                                        <h5>Create Subgroup</h5>
                                        <form class="needs-validation" action="{{ url('store/subgroup') }}"  method="POST" novalidate>
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom01">Subgroup Name</label>
                                                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="validationCustom01" placeholder="Subgroup Name" name="name" value="{{ old('name') }}" required>
                                                        @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <button class="btn btn-primary" type="submit">Create Subgroup</button>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </form>
                                        <hr>
                                        <h5>Create Household</h5>
                                        <form class="needs-validation" action="{{ url('store/household') }}"  method="POST" novalidate>
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom01">Subgroup Name</label>
                                                        <select name="sub_group_id" class="form-control" required>
                                                            <option value="">Select One</option>
                                                            @foreach ($subgroups as $sub )
                                                            <option value="{{ $sub->id }}">{{ $sub->name }}</option>
                                                            @endforeach
                                                            
                                                        </select>
                                                        
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom01">Household Name</label>
                                                        <input type="text" class="form-control @error('household_name') is-invalid @enderror" id="validationCustom01" placeholder="Household Name" name="household_name" value="{{ old('household_name') }}" required>
                                                        @error('household_name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <button class="btn btn-primary" type="submit">Create Household</button>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </form>

                                        <hr>
                                        <h5>Househould List</h5>
                                        <table class="table table-striped">
                                            <thead>
                                              <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Household Name</th>
                                                <th scope="col">Sub Group</th>
                                                {{-- <th scope="col">Status</th> --}}
                                              </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; ?>
                                                @foreach ($household as $house)
                                                <tr>
                                                    <th scope="row">{{ $i++ }}</th>
                                                    <td>{{ $house->household_name }}</td>
                                                    <td> {{ $house->subgroup->name }}</td>
                                                    {{-- <td></td> --}}
                                                  </tr>
                                                @endforeach
                                              
                                              
                                            </tbody>
                                          </table>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
</div>

@endsection