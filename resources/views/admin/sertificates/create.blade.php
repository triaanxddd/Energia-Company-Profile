@extends('admin.layouts.app')

@section('container')
        <a href="{{ route('sertificate.index') }}" class="btn btn-info mb-3">Back</a>
        <x-card>
            <form action="{{ route('sertificate.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <label for="name">Nama Logo Perusahaan</label>
                        <input type="type" class="form-control @error('name') is-invalid  @enderror" id="name" name="name" value="{{ old('name') }}">
                        @error('name') 
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">                
                    <label for="logo">Upload Logo</label>
                    <img class="img-preview img-fluid mb-3 mt-3 col-sm-5">
                    <input class="form-control @error('logo') is-invalid  @enderror" type="file" id="image" name="logo" onchange="previewImage()">
                    @error('logo') 
                        <div class="invalid-feedback">
                        {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-6">                
                    <label for="document">Dokumen Sertifikat</label>
                    <img class="img-preview img-fluid mb-3 mt-3 col-sm-5">
                    <input class="form-control @error('document') is-invalid  @enderror" type="file" id="image" name="document" onchange="previewImage()">
                    @error('document') 
                        <div class="invalid-feedback">
                        {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary mt-2">Buat</button>
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