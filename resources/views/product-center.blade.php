<x-app-layout>
    <main>
        <div class="py-5 container innerpage-container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('frontend.home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Product Center</li>
                </ol>
            </nav>
            <div class="d-flex px-5 fs-2 mb-3 fw-bold text-white">
                PRODUCT CENTER
            </div>
            <div class="row">
                <div class="col-md-4 col-lg-3">
                    <livewire:products.sidebar :is_show_top_sidebar="true"></livewire:products.sidebar>
                </div>
                <div class="col-md-8 col-lg-9" id="productContainer">
                    <div class="row g-3 products-items">
                        @if($products->count()>0)
                        @foreach($products as $product)
                                    @php
                                        $discounted_price = ($product->discount>0) ? $product->price- ($product->discount*$product->price/100) :$product->price;
                                    @endphp
                        <div class="col-md-6 col-lg-4">
                            <div class="card">
                                <div class="p-1 d-flex justify-content-center">
                                    <a href="{{ route('frontend.product.detail',$product->slug) }}"><img src="{{ asset('storage/'.$product->image) }}" alt="{{ $product->name }}" class="img-fluid" style="height: 250px;"></a>
                                </div>
                                <div class="card-body d-flex flex-column align-items-center">
                                    <div class="text-overflow-ctrl text-overflow-ctrl-1">
                                        <a href="{{ route('frontend.product.detail',$product->slug) }}" class="text-dark text-decoration-none">{{ $product->name }}</a>
                                    </div>
                                    <div class="font-normal">
                                        Model: {{ $product->model }}
                                    </div>
                                     <div class="product-details" style="margin-bottom: 0px;">
                                        <span class="priceElement discounted-price" style="font-size: 18px;">{{ $product->price }}</span>
                                        <span class="priceElement price" style="font-size: 18px;">{{ $discounted_price }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="col-12">
                            {{ $products->links('vendor.pagination.bootstrap-4') }}
                        </div>
                        @else
                            <div class="col-12">
                                <div class="alert alert-info">
                                    No products found.
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>