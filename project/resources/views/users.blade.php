@extends('layout')

@section('title', 'All Users')

@section('content')
<div class="full-height-container" style="height: 100vh; width: 100%; display: flex; flex-direction: column;">
    <table class="main" style="width: 100%; height: 100%;">
        <thead>
            <tr>
                <th style="width: 20%;">Play Space</th>
                <th>All Registered Users</th>
            </tr>
        </thead>
        <tbody style="height: 100%;">
            <tr style="height: 100%;">
                
                <td style="width: 20%; vertical-align: top; height: 100%;">
                    
                    <div style="height: 100%; overflow-y: auto;">
                        nav bar here
                        <!-- Add navigation links here -->
                    </div>
                </td>

                <td style="width: 80%; vertical-align: top; height: 100%;">
                    @if($all_users->isEmpty())
                        <p>No users found.</p>
                    @else
                    <div class="card-body" style="height: 100%; overflow-y: auto;">
                        <table class="table table-sm table-striped table-bordered" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Mobile Number</th>
                                    <th>Email Address</th>
                                    <th>Username</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($all_users as $user)
                                    <tr>
                                        <td>{{ $user->firstname }}</td>
                                        <td>{{ $user->lastname }}</td>
                                        <td>{{ $user->mobilenumber }}</td>
                                        <td>{{ $user->emailaddress }}</td>
                                        <td>{{ $user->username }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @endif
                </td>
            </tr> 
        </tbody>   
    </table>
</div>
@endsection
