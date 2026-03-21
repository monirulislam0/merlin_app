@section('title')
    {{ config('app.name') }} | Contact Message
@endsection
<x-admin-layout>
    <div class="row justify-content-center" id="basic-table">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <h4 class="card-title">List of all Message</h4>
                    </div>
                </div>
                @include('admin.includes.flash')
                <div class="card-content">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th width="3%">Sl</th>
                                    <th width="10%">Name</th>
                                    <th width="10%">Mobile</th>
                                    <th width="12%">Email</th>
                                    <th width="8%">Country</th>
                                    <th width="10%">Company</th>
                                    <th width="30%">Message</th>
                                    <th width="10%">Product</th>
                                    <th width="7%">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php $sl=0 @endphp
                                @foreach($messages as $message)
                                    <tr>
                                        <td class="text-bold-500">{{ ++$sl }}</td>
                                        <td>{{ $message->name }}</td>
                                        <td>{{ $message->mobile }}</td>
                                        <td>{{ $message->email }}</td>
                                        <td>{{ $message->country_name }}</td>
                                        <td>{{ $message->company_name }}</td>
                                        <td class="text-wrap" style="max-width: 250px; max-height: 100px; overflow-y: auto; word-wrap: break-word;">{{ $message->message }}</td>
                                        <td>
                                            @php $sl=0 @endphp
                                            @foreach($message->products as $product)
                                              {{ ++$sl .':'.$product->name }}
                                            @endforeach
                                        </td>
                                        <td>
                                            <form action="{{ route('admin.contact-message-delete', $message->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this message?')" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" style="margin:2px;">
                                                    <i class="fa fa-trash"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{ $messages->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
