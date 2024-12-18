@extends('admin.layouts.app')

@section('container')
@if(session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif
    <div class="text-center">
        <h2>Sertificates</h2>
    </div>
    <a href="{{ route('sertificate.create') }}" class="btn btn-success mb-3">Tambah Sertifikat</a>
    <div class="row">
            @foreach($sertificates as $sertificate)
            <div class="col-sm-3 mb-2">
                <div class="card" style="height:300px;">
                    <img src="{{ asset('storage') }}/{{ $sertificate->logo }}" style="width:150px;" class="card-img-top mx-auto" alt="No Logo">
                    <div class="card-body">
                        <h5 class="card-title">{{ $sertificate->name }}</h5>
                        <div class="d-flex justify-content-center">
                            <a href="/admin/sertificate/{{ $sertificate->id }}/edit" class="btn btn-warning" style="margin-right: 5px;">Edit</a>
                            <form action="{{ route('sertificate.destroy', ['sertificate' => $sertificate->id ]) }}" method="post">
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