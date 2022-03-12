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
                                                        <textarea class="form-control @error('address') is-invalid @enderror" name="address" required>{{ old('address') }}</textarea> 
                                                        
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
                                                            @if(old('age'))
                                                            <option selected value="{{ old('age') }}">{{ old('age') }}</option>
                                                            <option @if(old('age') == "Less than 18 years") hidden @endif value="less than 18">Less than 18 years</option>
                                                            <option @if(old('age') == "18 to 25 years") hidden @endif value="18 to 25 years">18 to 25 years</option>
                                                            <option @if(old('age') == "25 to 30 years") hidden @endif value="25 to 30 years">25 to 30 years</option>
                                                            <option @if(old('age') == "30 to 40 years") hidden @endif value="30 to 40 years">30 to 40 years</option>
                                                            <option @if(old('age') == "40 to 50 years") hidden @endif value="40 to 50 years">40 to 50 years</option>
                                                            <option @if(old('age') == "50 to 60 years") hidden @endif value="50 to 60 years">50 to 60 years</option>
                                                            <option @if(old('age') == "60 and above") hidden @endif value="60 and above">60 and above</option>
                                                            
                                                            @else
                                                            <option value="">Select One</option>
                                                            <option value="less than 18">Less than 18 years</option>
                                                            <option value="18 to 25">18 to 25 years</option>
                                                            <option value="25 to 30">25 to 30 years</option>
                                                            <option value="30 to 40">30 to 40 years</option>
                                                            <option value="40 to 50">40 to 50 years</option>
                                                            <option value="50 to 60">50 to 60 years</option>
                                                            <option value="60 and above">60 and above</option>
                                                            @endif
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
                                                           @if(old('source'))
                                                            <option selected value="{{ old('source') }}">{{ old('source') }}</option>
                                                            <option @if(old('source') == "Friends and Family") hidden @endif value="Friends and Family">Friends and Family</option>
                                                            <option @if(old('source') == "Social Media") hidden @endif value="Social Media">Socila Media</option>
                                                            <option @if(old('source') == "other") hidden @endif value="1">Other</option>
                                                            
                                                            @else
                                                            <option value="">Select One</option>
                                                            <option value="Friends and Family">Friends and Family</option>
                                                            <option value="Social Media">Social Media</option>
                                                            <option value="other">Other</option>
                                                            @endif
                                                        </select>
                                                        @error('source')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror

                                                        <div id="hidden_div_how" style="display: none;">
                                                            
                                                        <label class="form-label" for="validationCustom02">Enter Other Information</label>
                                                            <textarea class="form-control" name="source_other"></textarea>
                                                        </div>
                                        
                                                    </div>

                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom02">Are you Born Again</label>
                                                         <select name="born_again" class="form-control @error('born_again') is-invalid @enderror" required>
                                                            @if(old('born_again'))
                                                            <option selected value="{{ old('born_again') }}">{{ old('born_again') }}</option>
                                                            <option @if(old('born_again') == "YES") hidden @endif value="YES">YES</option>
                                                            <option @if(old('born_again') == "NO") hidden @endif value="NO">NO</option>
                                                            @else
                                                            <option value="">Select One</option>
                                                            <option value="YES">YES</option>
                                                            <option value="NO">NO</option>
                                                            @endif
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
                                                            @if(old('visitation'))
                                                            <option selected value="{{ old('member') }}">{{ old('member') }}</option>
                                                            <option @if(old('member') == "YES") hidden @endif value="YES">YES</option>
                                                            <option @if(old('member') == "NO") hidden @endif value="NO">NO</option>
                                                            @else
                                                            <option value="">Select One</option>
                                                            <option value="YES">YES</option>
                                                            <option value="NO">NO</option>
                                                            @endif
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
                                                            @if(old('visitation'))
                                                            <option selected value="{{ old('visitation') }}">{{ old('visitation') }}</option>
                                                            <option @if(old('visitation') == "YES") hidden @endif value="YES">YES</option>
                                                            <option @if(old('visitation') == "NO") hidden @endif value="NO">NO</option>
                                                            @else
                                                            <option value="">Select One</option>
                                                            <option value="YES">YES</option>
                                                            <option value="NO">NO</option>
                                                            @endif
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
                                                        <label class="form-label" for="validationCustom02">Gender</label>
                                                        <select name="gender" class="form-control @error('gender') is-invalid @enderror" required>
                                                            @if(old('gender'))
                                                            <option selected value="{{ old('gender') }}">{{ old('gender') }}</option>
                                                            <option @if(old('gender') == "Male") hidden @endif value="Male">Male</option>
                                                            <option @if(old('gender') == "Female") hidden @endif value="Female">Female</option>
                                                            @else
                                                            <option value="">Select One</option>
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                            @endif
                                                        </select>
                                                        @error('gender')
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
                                                            @if(old('program'))
                                                            <option selected value="{{ old('program') }}">{{ old('program') }}</option>
                                                            <option @if(old('program') == "Sunday") hidden @endif value="Sunday">Sunday</option>
                                                            <option @if(old('program') == "Wednesday") hidden @endif value="Wednesday">Wednesday</option>
                                                            @else
                                                            <option value="">Select One</option>
                                                            <option value="Sunday">Sunday</option>
                                                            <option value="Wednesday">Wednesday</option>
                                                            @endif
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
                                                    <button class="btn btn-primary" type="submit">Submit Card</button>
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
    var style = this.value == 'other' ? 'block' : 'none';
    document.getElementById('hidden_div_how').style.display = style;
});
</script>




@endsection