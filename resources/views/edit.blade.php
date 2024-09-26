@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Submission</h1>
    <form action="{{ route('contact.update', $submission->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Your Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $submission->name }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Your Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $submission->email }}" required>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Your Message</label>
            <textarea class="form-control" id="message" name="message" rows="4" required>{{ $submission->message }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Message</button>
    </form>
</div>
@endsection
