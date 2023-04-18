@extends('layout')

@section('content')
<main class="login-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card body-image" style="padding-bottom: 50px">
                    <div class="card-header" style="color:cornsilk;background-color: rgba(255, 68, 68, 0.548);font-size:25px"><strong>Register</strong></div>
                    <div class="card-body" style="color:cornsilk;font-weight:bold;font-size:20px">

                        <form action="{{ route('register.post') }}" method="POST">
                            @csrf


                                <div class="form-group row">
                                    <label for="Employee_ID" class="col-md-4 col-form-label text-md-right">Employee ID</label>
                                    <div class="col-md-6 ">
                                        <div class="input-group">
                                            <span class="input-group-text justify-content-center" id="empIdSpan">SIPL</span>
                                            <input type="text" id="Employee_ID" class="form-control" name="Employee_ID" required autofocus>
                                            @if ($errors->has('Employee_ID'))
                                            <span class="text-danger">{{ $errors->first('Employee_ID') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                                    <div class="col-md-6 ">
                                        <input type="text" id="name" class="form-control" name="name" required autofocus>
                                        @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="empDOB" class="col-md-4 col-form-label text-md-right">DOB</label>
                                    <div class="col-md-6">
                                        <input type="date" class="form-control" autocomplete="off" name="empDOB" id="empDOB" required>
                                        {{-- <input type="text" id="DOB" class="form-control" name="DOB" required> --}}
                                        @if ($errors->has('empDOB'))
                                        <span class="text-danger">{{ $errors->first('empDOB') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail
                                        Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email_address" class="form-control" name="email" required
                                            autofocus>
                                        @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>


                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                                <div class="col-md-2" >
                                        <input type="password"  style="width: 130%" class="form-control" id="password" name="password" required />
                                        <p style="color:rgba(235, 10, 10, 0.877); font-size: 15px">min 6 characters</p>
                                </div>
                                <div class="col-md-1" >
                                    <label for="Confirm" style="padding-left: 20px" class="col-form-label">Confirm</label>
                                </div>
                                <div class="col-md-3" style="padding-left: 30px;width:100%">
                                    <input type="password" id="confirm" style="padding-left: 20px;width:100%" class="form-control" name="Confirm" required>

                                    @if ($errors->has('Confirm'))
                                    <span class="text-danger">{{ $errors->first('Confirm') }}</span>
                                    @endif
                                </div>
                            </div>



                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">Gender</label>
                        <div style="padding-left:30px"></div>
                        <div class="col-md-6" style="padding-top: 7px">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="empGender" id="Male" value="Male"
                                    required>
                                <span class="form-check-label" for="inlineRadio1">Male</span>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="empGender" id="Female"
                                    value="Female">
                                <span class="form-check-label" for="inlineRadio2">Female</span>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="empGender" id="Other"
                                    value="Others">
                                <span class="form-check-label" for="inlineRadio3">Others</span>
                            </div>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="Address" class="col-md-4 col-form-label text-md-right">Address</label>
                        <div class="col-md-6">
                            {{-- <label for="empAddressLabel" class="form-label">Address</label> --}}
                            <textarea class="form-control" autocomplete="off" name="empAddress" id="empAddress"
                                rows="4"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Address" class="col-md-4 col-form-label text-md-right">Country</label>
                        <div class="col-md-6">
                            <select name="country" class="form-control" id="country">
                                <option selected disabled>Select country</option>
                                @foreach ($countries as $country)
                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row" >
                        <label for="Address" class="col-md-4 col-form-label text-md-right">State</label>
                        <div class="col-md-6">
                            <select name ="state" class="form-control"  id="state">
                            </select>

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Address" class="col-md-4 col-form-label text-md-right">City</label>
                        <div class="col-md-6">
                            <select name ="city" class="form-control" id="city">
                            </select>
                        </div>
                    </div>

                </div>

                <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                        <div class="checkbox" style="color:cornsilk;font-weight:bold;font-size:14px">
                            <label>
                                <input type="checkbox"  name="remember">  Agree to terms and conditions
                            </label>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 offset-md-4">
                    <button type="submit" href="login" class="btn btn-primary">
                        Register
                    </button>
                </div>
            </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script type="text/javascript">
    $(document).ready(function () {
        $('#country').on('change', function () {
            var countryId = this.value;
            $('#state').html('');
            $.ajax({
                url: '{{ route('states') }}?country_id='+countryId,
                type: 'get',
                success: function (res) {
                    $('#state').html('<option value="">Select State</option>');
                    $.each(res, function (key, value) {
                        $('#state').append('<option value="' + value
                            .id + '">' + value.name + '</option>');
                    });
                    $('#city').html('<option value="">Select City</option>');
                }
            });
        });
        $('#state').on('change', function () {
            var stateId = this.value;
            $('#city').html('');
            $.ajax({
                url: '{{ route('cities') }}?state_id='+stateId,
                type: 'get',
                success: function (res) {
                    $('#city').html('<option value="">Select City</option>');
                    $.each(res, function (key, value) {
                        $('#city').append('<option value="' + value
                            .id + '">' + value.name + '</option>');
                    });
                }
            });
        });
    });
</script>

@endsection
