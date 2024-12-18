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
    <div class="container">
        <form action="/admin/about/{{ $about->id }}" method="post" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="text-center">
                <h2>About Us</h2>
            </div>
            <div class="col-md-5 mt-4">
                <input class="form-control mx-auto @error('title') is-invalid  @enderror" name="title" type="text" value="{{ $about->title }}">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mt-4">
                <div class="col-md-6">
                    <input id="description" type="hidden" name="description" class="@error('description') is-invalid  @enderror">
                    <trix-editor input="description">{!! $about->description !!}</trix-editor>
                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
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