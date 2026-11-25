@extends('layouts.app')

@section('content')
    
<main class ="contact-main">

    <div class="left-side"> 
            <h1> Bean There, Brewed That.</h1>
            <p>Want to spill the beans?
            Send us a message!</p>

            <div class="contactInfo">
                <h3>Email</h3>
                <p>kapelink@gmail.com</p>
            </div>

            <div class="info-item">
                <h3>Phone</h3>
                <p>+63 981 768 1194</p>
            </div>
    </div>
            
    <div class="right-side">
            <h2> Contact Us</h2>
                
        <form id="contactForm" novalidate>
            <label for="name">Full Name</label>
            <input type="text" id="name"
                placeholder="Enter your name" required>
            <small class="error-message" id="nameError"></small>

            <label for="email">Email Address</label>
            <input type="email" id="email"
                placeholder="Enter your email" required>
            <small class="error-message" id="emailError"></small>

            <label for="subject">Subject</label>
            <input type="text" id="subject"
            placeholder="Enter subject">

            <label for="message">Message</label>
            <textarea id="message" rows="5"
                    placeholder="Write your message..."
                    required></textarea>
            <small class="error-message" id="messageError"></small>

            <button type="submit">Send Message</button>
            <p id="successMessage"></p>
        </form>
    </div>

</main>

@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/contact.js') }}"></script>
@endpush
