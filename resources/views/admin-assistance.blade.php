@extends('layouts.app')

@section('content')

<div class="container py-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold">Assistance Requests</h2>
            <p class="text-muted">View customer support messages submitted through the Need Assistance page.</p>
        </div>

        <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-success">
            Back to Dashboard
        </a>
    </div>

    <div class="card border-0 shadow-sm rounded-5">
        <div class="card-body p-4">

            <div class="table-responsive">
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Customer</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Date Submitted</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($messages as $message)
                            <tr>
                                <td>{{ $message->id }}</td>
                                <td>{{ $message->sender->name ?? 'Guest' }}</td>
                                <td>{{ $message->sender->email ?? 'N/A' }}</td>
                                <td>{{ $message->message }}</td>
                                <td>{{ $message->created_at->format('d M Y H:i') }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center text-muted">
                                    No assistance requests found.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</div>

@endsection