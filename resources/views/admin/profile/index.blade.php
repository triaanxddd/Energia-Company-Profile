@extends('admin.layouts.app')

@section('container')
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
        <form action="{{ route('profile-edit') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="text-center">
                <h2>Profile Admin</h2>
            </div>
            <div class="col-md-5 mt-4">
                <label for="name">Nama</label>
                <input class="form-control mx-auto @error('name') is-invalid  @enderror" name="name" type="text" value="{{ old('email', $profile->name) }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-5 mt-4">
                <label for="email">Email</label>
                <input class="form-control mx-auto @error('email') is-invalid  @enderror" name="email" type="text" value="{{ old('email', $profile->email) }}">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-5 mt-4">
                <label for="password">Password</label>
                <input class="form-control mx-auto @error('password') is-invalid  @enderror" name="password" id="myInput" type="password" value="{{ old('password', $profile->seen_password) }}">
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-5 mt-4">
                <label for="repassword">Ketik Ulang Password</label>
                <input class="form-control mx-auto @error('repassword') is-invalid  @enderror" name="repassword" id="myInput2" type="password" value="{{ old('repassword', $profile->seen_password) }}">
                @error('repassword')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <input type="checkbox" id="show_password" onclick="myFunction()">
                <label for="show_password">Show Password</label>
            </div>

            <button type="submit" class="btn btn-success mt-3">Update</button>
        </form>
    </x-card>
<!-- An element to toggle between password visibility -->
    <script>
        function myFunction() {
            var myInput = document.getElementById("myInput");
            var myInput2 = document.getElementById("myInput2");
            
            if (myInput.type === "password") {
                myInput.type = "text";
                myInput2.type = "text";

            } else {
                myInput.type = "password";
                myInput2.type = "password";
            }
            }
    </script>
@endsection