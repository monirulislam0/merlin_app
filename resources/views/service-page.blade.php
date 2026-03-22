<x-app-layout>
    <style>
        .content-section {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .page-title {
            color: #333;
            font-weight: 600;
        }
    </style>
    <main>
        <!-- Image Banner -->
        @if(isset($servicePage->image) && !empty($servicePage->image))
        <div class="container-fluid p-0">
            <img src="{{ asset('storage/'.$servicePage->image) }}" alt="{{ $servicePage->page_title }}" class="img-fluid w-100" style="max-height: 400px; object-fit: cover;">
        </div>
        @endif

        <!-- Breadcrumb and Content -->
        <div class="container innerpage-container py-5">
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('frontend.home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $servicePage->page_title }}</li>
                </ol>
            </nav>

            <!-- Content -->
            <div class="row">
                <div class="col-12">
                    <div class="content-section">
                        {{-- <h1 class="page-title mb-4">{{ $servicePage->page_title }}</h1> --}}
                        <div class="content-body">
                            {!! $servicePage->content !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
