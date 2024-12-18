@extends('admin.layouts.app')

@section('container')
@if(session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif
    <div class="text-center">
        <h2>Companies we're working with</h2>
    </div>
    <a href="{{ route('company.create') }}" class="btn btn-success mb-3">Tambah Logo</a>
    <div class="row">
            @foreach($companies as $company)
            <div class="col-sm-3 mb-2">
                <div class="card" style="height:300px;">
                    <img src="{{ asset('storage') }}/{{ $company->logo }}" style="width:150px;" class="card-img-top mx-auto" alt="No Logo">
                    <div class="card-body">
                        <h5 class="card-title">{{ $company->name }}</h5>
                        <div class="d-flex justify-content-center">
                            <a href="/admin/company/{{ $company->id }}/edit" class="btn btn-warning" style="margin-right: 5px;">Edit</a>
                            <form action="{{ route('company.destroy', ['company' => $company->id ]) }}" method="post">
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