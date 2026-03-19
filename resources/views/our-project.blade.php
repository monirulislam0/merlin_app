<x-app-layout>
    <main>
        <div>
            <img src="{{ asset('storage/'.$banner->image) }}" alt="..." class="img-fluid">
        </div>

        <div class="container innerpage-container py-5 project-section">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('frontend.home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $name }}</li>
                </ol>
            </nav>
            <div class="row g-3">
                @foreach($data as $dt)
                <div class="col-12 bg-white">
                    <div class="row">
                        <div class="col-4">
                            <div class="py-3 px-1">
                                <a href="{{ route('frontend.project.detail', $dt->slug) }}"><img src="{{ asset('storage/'.$dt->image) }}" alt="..." class="img-fluid"></a>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="py-4 px-2">
                                <div class="fw-bold py-2 mb-3">
                                    <a href="{{ route('frontend.project.detail', $dt->slug) }}" class="text-decoration-none text-dark">{{ $dt->title }}</a>
                                </div>
                                <div class="mb-2">
                                    <i class="fa-regular fa-calendar-days"></i><span class="px-2">{{ $dt->published_date }}</span>
                                </div>
                                @if($dt->author)
                                <div class="mb-2">
                                    <i class="fa-regular fa-user"></i><span class="px-2">{{ $dt->author }}</span>
                                </div>
                                @endif
                                @if($dt->origin)
                                <div class="mb-2">
                                    <i class="fa-regular fa-location-dot"></i><span class="px-2">{{ $dt->origin }}</span>
                                </div>
                                @endif
                                <div class="lh-lg">
                                    {!! $dt->short !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
            <!-- Pagination -->
            <div class="d-flex justify-content-center mt-4">
                {{ $data->links('vendor.pagination.bootstrap-4') }}
            </div>
        </div>
    </main>
</x-app-layout>