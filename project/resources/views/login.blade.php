@extends('layout')
@section('title','Login')
@section('content')
@section('custom-css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@if(session()->has('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif


        <form action="{{route('login.Post')}}" method="POSt">
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
                    <p>For everyone who wish happy
                    <br>and healthy life</p>
                </div>
            </td>
            <td rowspan="2">
                <div class="LOG">
                    <p>Login</p>
                </div>
                
                    <div class ="input-box">
                        <label>User Name:</label>
                        <input type="text" name ="username" placeholder="User Name" required>
                    </div>
                    <div class ="input-box">
                        <label>Password:</label>
                        <input type="password" name ="password" placeholder="Password" required>
                    </div>
                    <div class="remember-me">
                        <input type="checkbox" id="keep-signed-in" name="keep-signed-in">
                        <label for="keep-signed-in">Keep me signed in</label>
                    </div>
                    <div class="submit">
                    <button type="submit">Login</button>
                    </div>
                    <div class="create-account">
                    <p>New to us? <a href="{{ route('registration') }}">Create An Account</a></p>
                    </div>
                
            </td>
        </tr>
        </table>
</form>
    
@endsection