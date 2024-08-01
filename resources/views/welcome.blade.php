@extends('partials.main')

@section('content')
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Find the Right Career Path for You</h1>
                <p>Explore career advice, resources, and personalized recommendations to help you achieve your professional
                    goals.</p>
                <a href="{{ route('getStarted') }}" class="btn">Get Started</a>
            </div>
        </div>
    </section>

    <section class="features">
        <div class="container">
            <h2>Why Choose Us?</h2>
            <div class="features-grid">
                <div class="feature">
                    <i class="fas fa-lightbulb"></i>
                    <h3>Expert Advice</h3>
                    <p>Receive guidance from industry experts to navigate your career path with confidence.</p>
                </div>
                <div class="feature">
                    <i class="fas fa-tools"></i>
                    <h3>Practical Resources</h3>
                    <p>Access a variety of tools and resources to enhance your skills and job search.</p>
                </div>
                <div class="feature">
                    <i class="fas fa-user-friends"></i>
                    <h3>Community Support</h3>
                    <p>Join a supportive community of professionals to share experiences and advice.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonial">
        <div class="container">
            <h2>What Our Users Say</h2>
            <div class="testimonial-grid">
                <div class="testimonial-item">
                    <img src="{{ asset('user.png') }}" alt="User 1">
                    <p>"Career Advice has been a game-changer for my professional growth. The resources and guidance
                        provided have been invaluable."</p>
                    <h4>Jane Doe</h4>
                </div>
                <div class="testimonial-item">
                    <img src="{{ asset('user.png') }}" alt="User 2">
                    <p>"Thanks to the personalized advice, I was able to land my dream job. Highly recommend this platform
                        to anyone looking to advance their career."</p>
                    <h4>John Smith</h4>
                </div>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="container">
            <h2>Ready to Take the Next Step?</h2>
            <p>Sign up now to start receiving personalized career advice and resources.</p>
            <a href="{{ route('joinNow') }}" class="btn">Join Now</a>
        </div>
    </section>
@endsection
