@extends('layout')
@section('title', 'Home')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
@endsection

@section('content')
<script>
    const menuIcon = document.getElementById('menu-icon');
    const navLinks = document.getElementById('nav-links');

    menuIcon.addEventListener('click', () => {
        alert("Menu icon clicked"); 
        navLinks.classList.toggle('show');
        alert("Toggle 'show' class");
        
    });
</script>
<div class="background-section">

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

    <nav class="navbar">
        <div class="menu-icon" id="menu-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" width="30" height="30">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </div>
        <ul class="nav-links" id="nav-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#category">Category</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contactu">Contact</a></li>
        </ul>

        <!-- @if(auth()->check())
    <p>User is authenticated.</p>
@else
    <p>User is NOT authenticated.</p>
@endif -->

<div class="user-icon">
    <a href="">
        @auth
            <!-- Debugging: Check the URL generated for the profile image -->
            {{ dd(auth()->user()->getProfileImage()) }}
            <img src="{{ auth()->user()->getProfileImage() }}" alt="User Profile">
        @else
            <img src="{{ asset('images/user icon.png') }}" alt="Default User Icon">
        @endauth
    </a>
</div>


    </nav>

    <section class="home" id="home">
    <div class="button-group">
        <button type="button" onclick="window.location.href='{{ route('login') }}';">SIGN IN</button>
        <button type="button" onclick="window.location.href='{{ route('registration') }}';">SIGN UP</button>
    </div>

    <div class="title">
        <p>PlaySpace</p>
    </div>

    <div class="image_girl">
        <img src="{{ asset('images/girl.png') }}">
    </div>

    <div class="tex1">
        <p>THIS IS ARENA</p>
    </div>

    <div class="tex2">
        <p>For everyone who wish happy and healthy life</p>
    </div>
    </section>

    <section class="category" id="category">
    <div class="categories_title">
            <p>CATEGORIES</p>
    </div>

    <div class="categories-section">

        <div class="categories_cont">
            <div class="category-item">
                <img src="{{ asset('images/City-Full-Court.jpg') }}">
                 <p>Indoor Stadiums</p>
            </div>
            <div class="category-item">
                <img src="{{ asset('images/fitnesscenter.jpg') }}">
                <p>Fitness Centers</p>
            </div>
            <div class="category-item">
                <img src="{{ asset('images/outdoor.jpg') }}">
                <p>Outdoor Stadiums</p>
            </div>
            <div class="category-item">
                <img src="{{ asset('images/521.jpg') }}">
                <p>Swimming pools</p>
            </div>
        </div>
    </div>
    </section>

    <section class="about" id="about">
    <div class="aboutus">
        <p>ABOUT US</p>
    </div>

    <div class="aboutus_cont">
        <p>PlaySpace is your all-in-one platform for discovering and booking sports venues, gyms, swimming pools, and event spaces in the Matara district. Whether you're organizing a sports match, an event, or just looking for a place to work out, PlaySpace makes it easy to find and reserve the perfect spot online, eliminating the need for phone calls or in-person visits.</p>
    </div>
    </section>

    <section class="contactu" id="contactu">
    <div class="contact">
        <p>CONTACT</p>
    </div>

    <div class="contact_cont">
        
        <div class="address">
            <p>No 138/1,<br> Kumarathunga Rd,<br> Matara.</p>
        </div>
        
        <div class="phone">
            <p>+94 717730317 - Udara
            <br>+94 717853639 - Thisari
            </p>
        </div>
        
        <div class="email">
            <p>udarasandakelum@gmail.com
            <br>thisarijayawickrama@gmail.com
            </p>
        </div>
    </div>

    <div class="contact_icon">
        <div class="address_icon">
            <img src="{{ asset('images/location icon.png') }}">
        </div>

        <div class="phone_icon">
            <img src="{{ asset('images/phone icon.png') }}">
        </div>

        <div class="email_icon">
            <img src="{{ asset('images/email icon.png') }}">
        </div>
    </div>

    <div class="social_media">
        <div class="telegram">
            <img src="{{ asset('images/icons8-telegram-app-96.png') }}">
        </div>
        <div class="inster">
            <img src="{{ asset('images/icons8-instagram-96.png') }}">
        </div>
        <div class="tiktok">
            <img src="{{ asset('images/icons8-tiktok-96.png') }}">
        </div>
        <div class="x">
            <img src="{{ asset('images/icons8-twitterx-96.png') }}">
        </div>
        <div class="messanger">
            <img src="{{ asset('images/icons8-facebook-messenger-96.png') }}">
        </div>
        <div class="whatsapp">
            <img src="{{ asset('images/icons8-whatsapp-96.png') }}">
        </div>
    </div>

    <div class="payment_meth">
        <div class="visa">
            <img src="{{ asset('images/1156753_finance_payment_visa_icon.png') }}">
        </div>
        <div class="master">
            <img src="{{ asset('images/1156750_finance_mastercard_payment_icon.png') }}">
        </div>
        <div class="paypal">
            <img src="{{ asset('images/206675_paypal_method_payment_icon.png') }}">
        </div>
        <div class="rupay">
            <img src="{{ asset('images/701549_bank_card_payment_rupay_icon.png') }}">
        </div>
        <div class="american">
            <img src="{{ asset('images/1933704_american express_amex_charge_credit card_payment_icon.png') }}">
        </div>
    </div>
    <div class="footer1">
        <p>Copyright © 2024 Arena S.p.A - Registered office: C.da Cisterna, 84/85 62029 Tolentino (MC) SriLanka</p>
    </div>

    <div class="footer2">
        <p>Capital 3.000.000 euros - VAT/Tax code 00660160433 - registered in the Macerata companies register under no. 00660160433</p>
    </div>
    </section>
</div>
@endsection
