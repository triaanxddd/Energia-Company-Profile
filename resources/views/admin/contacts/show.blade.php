@extends('admin.layouts.app')

@section('container')
<x-card>
    <article>
        <div class="row">
            <div class="col-sm-1">
                <b>Sender</b>
            </div>
            <div class="col-sm-3">
                {{ $contact->sender_name }}
            </div>
        </div>
        <div class="row">
            <div class="col-sm-1">
                <b>Email</b>
            </div>
            <div class="col-sm-3">
                {{ $contact->email }}
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-5" style="text-align: justify;">
                {{ $contact->message }}
            </div>
        </div>
    </article>
</x-card>
@endsection