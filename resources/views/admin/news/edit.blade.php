@extends('admin.layouts.app')

@section('container')
<style>
    .trix-button-group.trix-button-group--file-tools {
        display:none;
    }
</style>
        <a href="{{ route('news.index') }}" class="btn btn-info mb-3">Back</a>
        <x-card>
            <form action="{{ route('news.update', ['news' => $news->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-6">
                        <label for="title">Judul</label>
                        <input type="type" class="form-control @error('title') is-invalid  @enderror" id="title" name="title" value="{{ old('title', $news->title) }}">
                        @error('title') 
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">                
                        <label for="picture">Upload Gambar</label>
                        <input type="hidden" name="oldPicture" value="{{ $news->picture }}">
                        @if($news->picture)
                            <img src="{{ asset('storage/' . $news->picture) }}" class="img-preview img-fluid mb-3 mt-3 col-sm-5 d-block" >
                        @else
                            <img class="img-preview img-fluid mb-3 mt-3 col-sm-5">
                        @endif
                        <input class="form-control @error('picture') is-invalid  @enderror" type="file" id="image" name="picture" onchange="previewImage()">
                        @error('picture') 
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <label for="date_uploaded">Tanggal Rilis</label>
                        <input type="date" class="form-control @error('date_uploaded') is-invalid  @enderror" id="date_uploaded" name="date_uploaded" value="{{ old('date_uploaded', $news->date_uploaded) }}">
                        @error('date_uploaded') 
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <label for="description">Deskripsi Teks</label>
                        <input id="description" type="hidden" name="description" class="@error('description') is-invalid  @enderror">
                        <trix-editor input="description">{!! old('description', $news->description) !!}</trix-editor>
                        @error('description')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-2">Update</button>
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