{{-- @extends('layouts.app')

 @section('content')
 <div class="container">
     <h1>Submissions</h1>
     @foreach ($submissions as $submission)
         <div class="card mb-3">
             <div class="card-body">
                 <h5 class="card-title">{{ $submission->name }}</h5>
                 <p class="card-text">{{ $submission->email }}</p>
                 <p class="card-text">{{ $submission->message }}</p>
                 <a href="{{ route('contact.edit', $submission->id) }}" class="btn btn-warning">Edit</a>
                 <form action="{{ route('contact.destroy', $submission->id) }}" method="POST" style="display:inline;">
                     @csrf
                     @method('DELETE')
                     <button type="submit" class="btn btn-danger">Delete</button>
                 </form>
             </div>
         </div>
     @endforeach
 </div>
 @endsection --}}

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Contact Form Submissions</h1>

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($submissions as $submission)
                    <tr>
                        <td>{{ $submission->id }}</td>
                        <td>{{ $submission->name }}</td>
                        <td>{{ $submission->email }}</td>
                        <td>{{ $submission->message }}</td>
                        <td>
                            <a href="{{ route('contact.edit', $submission->id) }}" class="btn btn-warning">Edit</a>

                            <form action="{{ route('contact.destroy', $submission->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
