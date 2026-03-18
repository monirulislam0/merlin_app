@section('title')
    {{ config('app.name') }} | Footer Sliders
@endsection
<x-admin-layout>
    <div class="row justify-content-center" id="basic-table">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <h4 class="card-title">List Of Footer Slider</h4>
                        <div class="offset-md-8">
                            <a href="{{ route('admin.home-sliders.create') }}" class="btn btn-success round">Create New Footer Slider</a>
                        </div>
                    </div>
                </div>
                @include('admin.includes.flash')
                <div class="card-content">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>ACTION</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php $sl=0 @endphp
                                @foreach($sliders as $slider)
                                    <tr>
                                        <td class="text-bold-500">{{ ++$sl }}</td>
                                        <td><img src="{{ asset('storage/'.$slider->image) }}" height="80px"></td>
                                        <td>{{ $slider->title }}</td>
                                        <td>{{ ($slider->status) ? 'Active' : 'Inactive' }}</td>
                                        <td>
                                            <a href="{{ route('admin.home-sliders.edit',$slider->id ) }}"><i
                                                    class="badge-circle badge-circle-light-secondary bx bx-edit font-medium-1"></i></a>
                                            <a href="{{ route('admin.home-sliders.delete',$slider->id ) }}"
                                               onclick="return confirm('Are you sure you want to perform this action?')"><i
                                                    class="badge-circle badge-circle-light-secondary bx bx-trash font-medium-1"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{ $sliders->links('vendor.pagination.bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
