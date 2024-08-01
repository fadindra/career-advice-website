@extends('partials.main')

@section('content')
    <section class="contact">
        <div class="container">
            <h1>Contact Us</h1>
            <p>We would love to hear from you. Please fill out the form below to get in touch with us.</p>

            @if(session('status'))
                <div class="status-message">
                    {{ session('status') }}
                </div>
            @endif

            <form action="{{ route('contact.send') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn">Send Message</button>
            </form>
        </div>
    </section>
@endsection
