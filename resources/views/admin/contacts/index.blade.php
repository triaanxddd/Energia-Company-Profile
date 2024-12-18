@extends('admin.layouts.app')
@php
    use Illuminate\Support\Carbon;
    $iterationNumber = ($contacts->currentPage() - 1) * $contacts->perPage() + 1;

@endphp
@section('container')
    <h2>Contact</h2>
    <x-card>
    <div class="container">
        <form action="{{ route('contacts.index') }}" method="get">
            <div class="row">
                <div class="col-sm-2">
                    <input type="month" name="search_month" id="search_month" class="form-control" value="{{ Request::get('search_month') }}">
                </div>
                <div class="col-sm-1">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </div>
        </form>
        <div class="table-responsive">
            <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Pengirim</th>
                <th scope="col">Email</th>
                <th scope="col">Tanggal </th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                <tr>
                    <th>{{ $iterationNumber++ }}</th>
                    <th>{{ $contact->sender_name}}</th>
                    <th>{{ $contact->email}}</th>
                    <th>{{ Carbon::parse($contact->created_at)->translatedFormat('l, d F Y, h:i:s') }}</th>
                    <th>
                        <div>
                            <a href="{{ route('contacts.show', ['contact' => $contact->id]) }}" class="btn btn-info">Detail</a>
                            <form action="{{ route('contacts.destroy', ['contact' => $contact->id]) }}" method="post" style="display: inline;">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin mau dihapus?')">Delete</button>
                            </form>
                        </div>
                    </th>
                </tr>
                @endforeach
            </tbody>
            </table>
            {{ $contacts->links() }}
        </div>
    </div>
</x-card>
@endsection