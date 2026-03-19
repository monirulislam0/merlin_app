<x-app-layout>
    <main >
        <div>
            <img src="{{ asset('frontend/images/Projects.webp') }}" alt="..." class="img-fluid">
        </div>

        <div class="container innerpage-container py-5 project-section">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" ><a href="{{ route('frontend.home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('frontend.ourProject') }}">Our Projects</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $data->title }}</li>
                </ol>
            </nav>
            <div class="container project-section-container" style="background: #fff;">
                <div class="d-flex align-items-center flex-column" style="padding: 30px;">
                    <div class="fs-4 fw-bold">
                        {{ $data->title }}
                    </div>
                    <div class="d-flex gap-4">
                        @if($data->author)
                        <div>
                            Author: {{ $data->author }}
                        </div>
                        @endif
                        @if($data->published_date)
                        <div>
                            Publish Time: {{ \Carbon\Carbon::parse($data->published_date)->format('d-m-Y') }}
                        </div>
                        @endif
                        @if($data->origin)
                        <div>
                            Origin: {{ $data->origin }}
                        </div>
                        @endif
                    </div>
                    <div class="mt-2">
                        <ul class="d-flex mt-2 fs-4 social-links list-unstyled ">
                            <li><x-share-button slug="{{ url('/project/'.$data->slug) }}" title="{{ $data->title }}"></x-share-button><li>
                        </ul>
                    </div>

                    <div class="project-details mt-2">
                        <a href="#" class="text-decoration-none">
                            <img src="{{ asset('storage/'.$data->image) }}" alt="..." class="img-fluid">
                        </a>
                    </div>
                </div>
                <div style="padding: 30px;">
                    {!! $data->detail !!}
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
