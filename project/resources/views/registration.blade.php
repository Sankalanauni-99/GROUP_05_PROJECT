@extends('layout')

@section('title', 'Registration')

@section('content')
@section('custom-css')
<link rel="stylesheet" href="{{ asset('css/registration.css') }}">
@endsection
<div class="mt-5">
    @if($errors->any())
        <div class="col-12">
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{ $error }}</div>
            @endforeach
        </div>
    @endif

    @if(session()->has('error'))
        @endif
    
    <form action="{{ route('registration.Post') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <table>
            <tr>
                <td rowspan="2" style="width:29.5%">
                    <div class="PlaySpace">
                        <p>PlaySpace</p>
                    </div>
                    <div class="footer1">
                        <p>THIS IS ARENA</p>
                    </div>
                    <div class="footer2">
                        <p>For everyone who wishes for a happy and healthy life</p>
                    </div>
                </td>
                <td rowspan="2">
                    <div class="REGISTER">
                        <p>Registration</p>
                    </div>
                    <div class="registration-form">
                        <div class="input-box">
                            <label>First Name:</label>
                            <input type="text" name="firstname" placeholder="First Name" required>
                        </div>
                        <div class="input-box">
                            <label>Last Name:</label>
                            <input type="text" name="lastname" placeholder="Last Name" required>
                        </div>
                        <div class="input-box">
                            <label>Mobile Number:</label>
                            <input type="number" name="mobilenumber" placeholder="Mobile Number" required>
                        </div>
                        <div class="input-box">
                            <label>Email Address:</label>
                            <input type="email" name="emailaddress" placeholder="Email Address" required>
                        </div>
                        <div class="input-box">
                            <label>User Name:</label>
                            <input type="text" name="username" placeholder="User Name" required>
                        </div>
                        <div class="input-box">
                            <label>Password:</label>
                            <input type="password" name="password" placeholder="Password" required>
                        </div>
                        <div class="input-box">
                            <label>Confirm Password:</label>
                            <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
                        </div>
                        
                        <div class="input-box">
                            <label for="photos">Profile Picture</label>
                            <div class="img-btn-div">
                                <input type="file" name="profile_picture" accept="image/*">
                            </div>
                        </div>
                        <div class="specialMsg">
                            <p><b>Terms of Service</b><br>
                                By registering your email, you authorize us to send you emails pertaining to our company.
                                You can opt out at any time by canceling your account or following the unsubscribe link from any email sent by us.
                            </p>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" id="terms" name="terms" required>
                            <label for="terms">I agree to the terms and conditions.</label>
                        </div>
                        <div class="button">
                            <button type="button" onclick="window.location.href='/';">Cancel</button>
                            <button type="submit">Submit</button>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </form>
</div>
@endsection
