@extends('admin.layouts.app')

@section('container')
@php 
    $iterationNumber = ($newses->currentPage() - 1) * $newses->perPage() + 1;
    use Carbon\Carbon;
@endphp

@if(session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@elseif(session()->has('danger'))
    <div class="alert alert-danger" role="alert">
        {{ session('danger') }}
    </div>
@endif
    <x-card>
        <a href="{{ route('news.create') }}" class="btn btn-success">Tambah</a>
        <div class="table-responsive">
            <table class="table table-hover table-sm">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Judul</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($newses as $news)
                <tr>
                    <th>{{ $iterationNumber++ }}</th>
                    <th>{{ $news->title}}</th>
                    <th>{{ Carbon::parse($news->date_uploaded)->format('d M Y');  }}</th>
                    <th>
                        <div>
                            <a href="{{ route('news.edit', ['news' => $news->id]) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('news.destroy', ['news' => $news->id]) }}" method="post" style="display: inline;">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin mau hapus {{ $news->title }}?')">Delete</button>
                            </form>
                        </div>
                    </th>
                </tr>
                @endforeach
            </tbody>
            </table>
            {{ $newses->links() }}
        </div>
    </x-card>
@endsection