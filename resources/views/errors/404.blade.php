@extends('layouts.app')

@section('title', '404 - Page Not Found | Future Agri Infra')
@section('meta_description', 'The page you are looking for could not be found. Explore Future Agri Infra advanced protected farming and agricultural solutions.')

@section('content')
<section class="section" style="padding: 120px 20px; text-align: center; min-height: 60vh; display: flex; align-items: center; justify-content: center;">
    <div class="container" style="max-width: 600px; margin: 0 auto;">
        <h1 style="font-size: 5rem; color: #16423C; margin-bottom: 1rem; font-family: 'Cormorant Garamond', serif;">404</h1>
        <h2 style="font-size: 2rem; color: #16423C; margin-bottom: 1.5rem;">Page Not Found</h2>
        <p style="font-size: 1.1rem; color: #6A9C89; margin-bottom: 2rem; line-height: 1.6;">
            The page you requested may have been moved, renamed, or is temporarily unavailable.
        </p>
        <a href="{{ route('home') }}" class="afm-btn-primary" style="display: inline-flex; align-items: center; gap: 8px; text-decoration: none;">
            <span>Back to Homepage</span>
            <i class="fa-solid fa-arrow-right"></i>
        </a>
    </div>
</section>
@endsection
