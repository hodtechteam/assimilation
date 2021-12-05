@extends('layouts.master')
@section('title', 'Home | Edit Card')

@section('content')

 <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Cards</h1>
            <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Cards</li>
                <li class="breadcrumb-item active" aria-current="page">Edit Card</li>
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
                                        <form class="needs-validation" action="{{ url('update/card') }}"  method="POST" novalidate>
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom01">Full Name</label>
                                                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="validationCustom01" placeholder="Visitor's Name" name="name" value="{{ $card->name }}" required>
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
                                                        <input type="text" class="form-control @error('phone') is-invalid @enderror" id="validationCustom02" data-parsley-type="number" placeholder="Phone Number" name="phone" value="{{ $card->phone }}" required>
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
                                                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="validationCustom02" parsley-type="email" placeholder="Email Address" name="email" value="{{ $card->email }}" required>
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
                                                        <textarea class="form-control @error('address') is-invalid @enderror" name="address" required>{{ $card->address }}</textarea> 
                                                        
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
                                                            <option value="{{ $card->age }}">{{ $card->age }} years</option>
                                                            <optgroup>-----------</optgroup>
                                                            <option value="less than 18">Less than 18 years</option>
                                                            <option value="18 to 25">18 to 25 years</option>
                                                            <option value="25 to 30">25 to 30 years</option>
                                                            <option value="30 to 40">30 to 40 years</option>
                                                            <option value="40 to 50">40 to 50 years</option>
                                                            <option value="50 to 60">50 to 60 years</option>
                                                            <option value="60 and above">60 and above</option>
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
                                                        <select name="source" id="how_u_know_hod" class="form-control @error('source') is-invalid @enderror" required>
                                                            <option value="{{ $card->source }}">{{ $card->source == 1 ? 'Other': $card->source }}</option>
                                                            <optgroup>-----------</optgroup>
                                                            <option value="Friends and Family">Friends and Family</option>
                                                            <option value="Social Media">Social Media</option>
                                                            <option value="1">Other</option>
                                                            
                                                        </select>
                                                        @error('source')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror

                                                        <div id="hidden_div_how" style="display: none;">
                                                            
                                                        <label class="form-label" for="validationCustom02">Enter Other Information</label>
                                                            <textarea class="form-control" name="source_other" value="{{ $card->source_other }}"></textarea>
                                                        </div>
                                        
                                                    </div>

                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom02">Are you Born Again</label>
                                                        <input type="text" class="form-control @error('born_again') is-invalid @enderror" id="validationCustom02" placeholder="Phone Number" name="born_again" value="{{ $card->born_again }}" required>
                                                        
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
                                                        <input type="text" class="form-control @error('member') is-invalid @enderror" id="validationCustom02" placeholder="Phone Number" name="member" value="{{ $card->member }}" required>
                                                        
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
                                                        <input type="text" class="form-control @error('visitation') is-invalid @enderror" name="visitation" value="{{ $card->visitation }}" required>
                                                        
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
                                                            <option value="{{ $card->program }}">{{ $card->program }}</option>
                                                            <optgroup>-----------</optgroup>
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

                                            <input type="hidden" name="card_id" value="{{ $card->id }}">             
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <button class="btn btn-primary" type="submit">Update Form</button>
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


@section('script')
<script type="text/javascript">
document.getElementById('how_u_know_hod').addEventListener('change', function () {
    var style = this.value == 1 ? 'block' : 'none';
    document.getElementById('hidden_div_how').style.display = style;
});
</script>

@endsection