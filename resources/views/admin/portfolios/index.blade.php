@extends('admin.layouts.app')

@section('container')

@if(session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif
    <div class="text-center">
        <h2>Portfolios</h2>
    </div>
    <a href="{{ route('portfolios.create') }}" class="btn btn-success mb-3">Tambah Portfolio</a>
    <div class="row">
            @foreach($portfolios as $portfolio)
            <div class="col-sm-3 mb-2">
                <div class="card" style="height:300px;">
                    <img src="{{ asset('storage') }}/{{ $portfolio->picture }}" class="card-img-top w-50 mx-auto" alt="No Logo">
                    <div class="card-body">
                        <h5 class="card-title">{{ $portfolio->name }}</h5>
                        <div class="d-flex justify-content-center">
                            <a href="/admin/portfolios/{{ $portfolio->id }}/edit" class="btn btn-warning" style="margin-right: 5px;">Edit</a>
                            <form action="{{ route('portfolios.destroy', ['portfolio' => $portfolio->id ]) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
    </div>  
@endsection