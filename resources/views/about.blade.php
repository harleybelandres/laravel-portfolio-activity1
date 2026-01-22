
@extends('layout')
@section('title', 'About Me')
@section('content')
<h1>About Me</h1>
<div style="margin-top: 2rem; display: flex; align-items: flex-start; gap: 2rem;">
<div style="flex: 1;">
<h2 style="color: #3498db;">{{ $name }}</h2>
<p style="margin-top: 1rem; font-size: 1.1rem;">
<strong>Course:</strong> {{ $course }}
</p>
<p style="margin-top: 0.5rem; font-size: 1.1rem;">
<strong>University:</strong> {{ $university }}
</p>
<p style="margin-top: 2rem; line-height: 1.8;">
I am a passionate student learning web development with Laravel.
I enjoy building web applications and solving problems through code.
My goal is to become a full-stack developer and create impactful digital
solutions.
</p>
</div>
<div style="flex-shrink: 0;">
<img src="/images/harley.jpeg" alt="Profile Image" style="width: 200px; height: 200px; border-radius: 50%; object-fit: cover; border: 4px solid #3498db;">
</div>
</div>
@endsection
