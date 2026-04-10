@section('title')
    {{ config('app.name') }} | Message Details
@endsection
<x-admin-layout>
    <div class="mb-3 px-2">
        <a href="{{ route('admin.contact-message') }}" class="btn btn-outline-secondary">
            <i class="fa fa-arrow-left"></i> Back to list
        </a>
    </div>
    
    @include('admin.includes.flash')
    
    <div class="row px-2">
        <!-- Left Column - Contact Information -->
        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title mb-3">CONTACT INFORMATION</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="mb-1 font-weight-bold">Name</p>
                            <p class="mb-2">{{ $message->name }}</p>
                            
                            <p class="mb-1 font-weight-bold">Mobile</p>
                            <p class="mb-2">{{ $message->mobile }}</p>
                            
                            <p class="mb-1 font-weight-bold">Country</p>
                            <p class="mb-0">{{ $message->country_name ?? 'Not provided' }}</p>
                        </div>
                        <div class="col-md-6">
                            <p class="mb-1 font-weight-bold">Email</p>
                            <p class="mb-2">{{ $message->email }}</p>
                            
                            <p class="mb-1 font-weight-bold">Company</p>
                            <p class="mb-0">{{ $message->company_name ?? 'Not provided' }}</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Message Card -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4">MESSAGE</h5>
                    <p class="mb-0">{{ $message->message }}</p>
                </div>
            </div>
        </div>
        
        <!-- Right Column - Details and Actions -->
        <div class="col-lg-4">
            <!-- Details Card -->
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title mb-3">DETAILS</h5>
                    <p class="mb-1 font-weight-bold">Message ID</p>
                    <p class="mb-2">#{{ $message->id }}</p>
                    
                    <p class="mb-1 font-weight-bold">Received</p>
                    <p class="mb-0">{{ $message->created_at->format('M d, Y') }} &mdash; {{ $message->created_at->format('h:i A') }}</p>
                </div>
            </div>
            
            <!-- Actions Card -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-3">ACTIONS</h5>
                    <div class="d-grid gap-2">
                        <form action="{{ route('admin.contact-message-delete', $message->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this message?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-block mb-2">
                                <i class="fa fa-trash"></i> Delete message
                            </button>
                        </form>
                        <a href="{{ route('admin.contact-message') }}" class="btn btn-outline-secondary btn-block">
                            <i class="fa fa-list"></i> All messages
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
