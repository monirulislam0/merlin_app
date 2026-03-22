@section('title')
    {{ config('app.name') }} | Service Page
@endsection
<x-admin-layout>
    <section id="basic-vertical-layouts">
        <div class="row match-height justify-content-center">
            <div class="col-md-10 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{ $pageTitle }}</h4>
                    </div>
                    @include('admin.includes.flash')
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-vertical" action="{{ route('admin.service-page.update') }}"  method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="page_title">Page Title</label>
                                                <input type="text" id="page_title" class="form-control @error('page_title') is-invalid @enderror" name="page_title" value="{{ old('page_title', $servicePage->page_title) }}" placeholder="Enter page title">
                                                @error('page_title')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <fieldset class="form-group">
                                                <label for="image">Background Image</label>
                                                <div class="custom-file">
                                                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image">
                                                </div>
                                                @error('image')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </fieldset>
                                            @if(isset($servicePage->image) && !empty($servicePage->image))
                                                <div class="mt-2">
                                                    <small class="text-muted">Current Image:</small><br>
                                                    <img src="{{ asset('storage/'.$servicePage->image) }}" width="100px" class="img-thumbnail">
                                                </div>
                                            @endif
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="content">Content</label>
                                                <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="content" rows="10">{{ old('content', $servicePage->content) }}</textarea>
                                                @error('content')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary mr-1 mb-1">
                                                <i class="fa fa-save mr-1"></i> Update
                                            </button>
                                            <a href="{{ route('admin.dashboard') }}" class="btn btn-light-secondary mr-1 mb-1">
                                                <i class="fa fa-times mr-1"></i> Cancel
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-admin-layout>
