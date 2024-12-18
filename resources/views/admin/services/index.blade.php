@extends('admin.layouts.app')

@section('container')
@php 
    $iterationNumber = ($services->currentPage() - 1) * $services->perPage() + 1;

@endphp
<x-card>
    <a href="{{ route('services.create') }}" class="btn btn-success">Tambah</a>
    <div class="table-responsive">
        <table class="table table-hover table-sm">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Jasa</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($services as $service)
            <tr>
                <th>{{ $iterationNumber++ }}</th>
                <th>{{ $service->name}}</th>
                <th>
                    <div>
                        <a href="/admin/services/{{ $service->id }}/edit" class="btn btn-warning">Edit</a>
                        <form action="{{ route('services.destroy', ['service' => $service->id]) }}" method="post" style="display: inline;">
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
        {{ $services->links() }}
    </div>
</x-card>
@endsection