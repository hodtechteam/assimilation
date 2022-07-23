
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Assimilation Registration form</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.6.1/css/fontawesome.min.css" integrity="sha512-8rb78MsWdBwG33ttLB6t7IcdslYqRmVu/j8/feqbdMrsS5WHYYeT0mZp6TiX5U8oTcZ+thGlgMkJjKcA6oympw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        @media (min-width: 1025px) {
        .h-custom {
        height: 100vh !important;
        }
        }
    </style>
</head>

<body>

    <section class="h-100 h-custom" style="background-color: #8fc4b7;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-8 col-xl-6">
              <div class="card rounded-3">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img3.webp"
                  class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
                  alt="Sample photo">
                <div class="card-body p-4 p-md-5">
                  <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Kindly fill the form</h3>
      
                  @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                  @endif
                <form class="needs-validation" action="{{ url('store/form') }}"  method="POST" novalidate>
                    @csrf
            
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example1q">Full Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="validationCustom01" placeholder="Full Name" name="name" value="{{ old('name') }}" required>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="validationCustom02">Phone Number</label>
                        <input type="text" class="form-control @error('phone') is-invalid @enderror" id="validationCustom02" data-parsley-type="number" placeholder="Phone Number" name="phone" value="{{ old('phone') }}" required>
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="validationCustom02">Email Address</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="validationCustom02" parsley-type="email" placeholder="Email Address" name="email" value="{{ old('email') }}" required>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-outline mb-4">
                        
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

                    <div class="form-outline mb-4">
                        <label class="form-label" for="validationCustom02">Home Address</label>
                        <textarea class="form-control @error('address') is-invalid @enderror" name="address" required>{{ old('address') }}</textarea> 
                        @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="validationCustom02">Location</label>
                        <select name="location" class="form-control @error('location') is-invalid @enderror" required>
                            @foreach ($households as $hold)
                                
                                <option value="{{ $hold->household_name }}">{{ $hold->household_name }}</option>
                                
                            @endforeach
                            <option value="Other">Other</option>
                        </select>
                        @error('location')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-outline mb-4">
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


                    <div class="form-outline mb-4">
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

                    <div class="form-outline mb-4">
                        <label class="form-label" for="validationCustom02">Who Invited you</label>
                        <input type="text" class="form-control @error('invited') is-invalid @enderror" id="validationCustom02" placeholder="Who invited you" name="invited" value="{{ old('invited') }}" required>
                        @error('invited')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-outline mb-4">
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

                    <div class="form-outline mb-4">
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

                    <div class="form-outline mb-4">
                        
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
                   
                   
                        <div class="form-outline mb-4">
                            <label class="form-label" for="validationCustom02">Select Program</label>
                            <select name="program" class="form-control @error('program') is-invalid @enderror" required>
                                @if(old('program'))
                                <option selected value="{{ old('program') }}">{{ old('program') }}</option>
                                <option @if(old('program') == "Sunday") hidden @endif value="Sunday">Sunday</option>
                                <option @if(old('program') == "Wednesday") hidden @endif value="Wednesday">Wednesday</option>
                                {{-- <option @if(old('program') == "Special Program") hidden @endif value="Special Program">Special Program</option> --}}
                                @else
                                <option value="">Select One</option>
                                <option value="Sunday">Sunday</option>
                                <option value="Wednesday">Wednesday</option>
                                {{-- <option value="Special Program">Special Program</option> --}}
                                @endif
                            </select>
                            @error('program')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <input type="hidden" name="user_id" value="1">
                    
      
                    <button type="submit" class="btn btn-success btn-lg mb-1">Submit</button>
      
                  </form>
      
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

</body>




<script type="text/javascript">
document.getElementById('how_u_know_hod').addEventListener('change', function () {
    var style = this.value == 'other' ? 'block' : 'none';
    document.getElementById('hidden_div_how').style.display = style;
});
</script>
</html>