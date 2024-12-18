@extends('admin.layouts.app')

@section('container')
<style>
    .trix-button-group.trix-button-group--file-tools {
        display:none;
    }
</style>

@if(session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif
<x-card>
   <form action="{{ route('services.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="col-md-6">
            <label for="name">Nama Jasa</label>
            <input type="type" class="form-control @error('name') is-invalid  @enderror" id="name" name="name" value="{{ old('name') }}">
            @error('name') 
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="col-md-6">                
            <label for="picture">Upload Gambar</label>
            <img class="img-preview img-fluid mb-3 mt-3 col-sm-5">
            <input class="form-control @error('picture') is-invalid  @enderror" type="file" id="image" name="picture" onchange="previewImage()">
            @error('picture') 
                <div class="invalid-feedback">
                {{ $message }}
                </div>
            @enderror
        </div>
        <div class="col-md-6 mt-3">
            <label for="description">Deskripsi</label>
            <textarea name="description" class="form-control @error('description') is-invalid  @enderror" id="description" style="height:200px;">{{ old('description') }}</textarea>

            @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="col-md-6 mt-3">                
            <button type="submit" class="btn btn-success">Buat</button>
        </div>
   </form>
</x-card>
<script>
    function previewImage(){
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);
        oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
@endsection