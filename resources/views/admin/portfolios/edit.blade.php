@extends('admin.layouts.app')

@section('container')
        <a href="{{ route('portfolios.index') }}" class="btn btn-info mb-3">Back</a>
        <x-card>
            <form action="{{ route('portfolios.update', ['portfolio' => $portfolio->id ]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-6">
                        <label for="name">Nama Logo Perusahaan</label>
                        <input type="type" class="form-control @error('name') is-invalid  @enderror" id="name" name="name" value="{{ old('name', $portfolio->name) }}">
                        @error('name') 
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">                
                    <label for="picture">Upload Gambar</label>
                    <input type="hidden" name="oldPicture" value="{{ $portfolio->picture }}">
                    @if($portfolio->picture)
                        <img src="{{ asset('storage/' . $portfolio->picture) }}" class="img-preview img-fluid mb-3 mt-3 col-sm-5 d-block" >
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