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
                                                        <label class="form-label" for="validationCustom02">Location</label>
                                                        <select name="location" class="form-control @error('location') is-invalid @enderror" required>
                                                           @foreach ($households as $hold)
                                                              
                                                               <option value="{{ $hold->household_name }}">{{ $hold->household_name }}</option>
                                                               
                                                           @endforeach
                                                           <option value="Other">Other</option>
                                                            {{-- @if(old('location'))
                                                            <option selected value="{{ old('location') }}">{{ old('location') }}</option>
                                                            <option @if(old('location') == "Ikeja") hidden @endif value="Ikeja">Ikeja</option>
                                                            <option @if(old('location') == "Adeniyi Jones") hidden @endif value="Adeniyi Jones">Adeniyi Jones</option>
                                                            <option @if(old('location') == "Ogba") hidden @endif value="Ogba">Ogba</option>
                                                            <option @if(old('location') == "Fagba") hidden @endif value="Fagba">Fagba</option>
                                                            <option @if(old('location') == "Ishaga") hidden @endif value="Ishaga">Ishaga</option>
                                                            <option @if(old('location') == "Obawole") hidden @endif value="Obawole">Obawole</option>
                                                            <option @if(old('location') == "Agege") hidden @endif value="Agege">Agege</option>
                                                            <option @if(old('location') == "Iyana-Ipaja") hidden @endif value="Iyana-Ipaja">Iyana Ipaja</option>
                                                            <option @if(old('location') == "Victoria Island") hidden @endif value="Victoria Island">Victoria Island</option>
                                                            <option @if(old('location') == "Lekki") hidden @endif value="Lekki">Lekki</option>
                                                            <option @if(old('location') == "Ajah") hidden @endif value="Ajah">Ajah</option>
                                                            <option @if(old('location') == "Ayobo") hidden @endif value="Ayobo">Ayobo</option>
                                                            <option @if(old('location') == "Ikorodu") hidden @endif value="Ikorodu">Ikorodu</option>
                                                            <option @if(old('location') == "Ikoyi") hidden @endif value="Ikoyi">Ikoyi</option>
                                                            <option @if(old('location') == "Mushin") hidden @endif value="Mushin">Mushin</option>
                                                            <option @if(old('location') == "Yaba") hidden @endif value="Yaba">Yaba</option>
                                                            <option @if(old('location') == "Magodo") hidden @endif value="Magodo">Magodo</option>
                                                            <option @if(old('location') == "Maryland") hidden @endif value="Maryland">Maryland</option>
                                                            <option @if(old('location') == "Anthony") hidden @endif value="Anthony">Anthony</option>
                                                            <option @if(old('location') == "berger") hidden @endif value="Berger">Berger</option>
                                                            <option @if(old('location') == "Surulere") hidden @endif value="Surulere">Surulere</option>
                                                            
                                                            
                                                            @else
                                                            <option value="">Select One</option>
                                                            <option  value="Ikeja">Ikeja</option>
                                                            <option  value="Adeniyi Jones">Adeniyi Jones</option>
                                                            <option  value="Ogba">Ogba</option>
                                                            <option  value="Fagba">Fagba</option>
                                                            <option  value="Ishaga">Ishaga</option>
                                                            <option  value="Obawole">Obawole</option>
                                                            <option  value="Agege">Agege</option>
                                                            <option  value="Iyana-Ipaja">Iyana Ipaja</option>
                                                            <option  value="Victoria Island">Victoria Island</option>
                                                            <option  value="Lekki">Lekki</option>
                                                            <option  value="Ajah">Ajah</option>
                                                            <option  value="Ayobo">Ayobo</option>
                                                            <option  value="Ikorodu">Ikorodu</option>
                                                            <option  value="Ikoyi">Ikoyi</option>
                                                            <option  value="Mushin">Mushin</option>
                                                            <option  value="Yaba">Yaba</option>
                                                            <option  value="Magodo">Magodo</option>
                                                            <option  value="Maryland">Maryland</option>
                                                            <option  value="Anthony">Anthony</option>
                                                            <option  value="Berger">Berger</option>
                                                            <option  value="Surulere">Surulere</option>
                                                            @endif --}}
                                                        </select>
                                                        @error('location')
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
                                                            <option @if(old('age') == "30 to 44 years") hidden @endif value="30 to 44 years">30 to 44 years</option>
                                                            <option @if(old('age') == "45 and above") hidden @endif value="45 and above">45 and above</option>
                                                            
                                                            @else
                                                            <option value="">Select One</option>
                                                            <option value="less than 18">Less than 18 years</option>
                                                            <option value="18 to 25">18 to 25 years</option>
                                                            <option value="25 to 30">25 to 30 years</option>
                                                            <option value="30 to 44">30 to 44 years</option>
                                                            <option value="45 and above">45 and above</option>
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
                                                        <label class="form-label" for="validationCustom02">Who Invited you</label>
                                                        <input type="text" class="form-control @error('invited') is-invalid @enderror" id="validationCustom02" placeholder="Who invited you" name="invited" value="{{ old('invited') }}" required>
                                                        @error('invited')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Born Again?</label>
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
                                                            <option @if(old('member') == "Undecided") hidden @endif value="Undecided">Undecided</option>
                                                            @else
                                                            <option value="">Select One</option>
                                                            <option value="YES">YES</option>
                                                            <option value="NO">NO</option>
                                                            <option value="Undecided">Undecided</option>
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
                                                            <option @if(old('visitation') == "Online") hidden @endif value="Online">Online</option>
                                                            <option @if(old('visitation') == "Physical") hidden @endif value="Physical">Physical</option>
                                                            <option @if(old('visitation') == "No") hidden @endif value="No">No</option>
                                                            @else
                                                            <option value="">Select One</option>
                                                            <option value="Online">Online</option>
                                                            <option value="Physical">Physical</option>
                                                            <option value="No">No</option>
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
                                                            <option @if(old('program') == "Special Program") hidden @endif value="Special Program">Special Program</option>
                                                            @else
                                                            <option value="">Select One</option>
                                                            <option value="Sunday">Sunday</option>
                                                            <option value="Wednesday">Wednesday</option>
                                                            <option value="Special Program">Special Program</option>
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
                                            
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="validationCustom02">Program Date</label>
                                                    <input type="date" class="form-control @error('date_added') is-invalid @enderror" id="validationCustom02" placeholder="Who invited you" name="date_added" value="{{ old('date_added') }}" required>
                                                    @error('date_added')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <input type="hidden" name="visitee_id" value="1">

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