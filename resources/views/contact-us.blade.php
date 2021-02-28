@section('title')
	Contact | Yukafi
@endsection
@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-6">
        <div class="card mt-5">
            <div class="card-body">
                <h3 class="text-center">Contact Us</h3>
                <br/>
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                <br/>
                 <!-- form validasi -->
                <form action="/admin" method="post">
                    @csrf
                    <div class="form-group">
                        <label class="pb-2">Email</label>
                        <input class="form-control" type="text" name="email" value="{{ old('email') }}">
                    </div>
                    <div class="form-group mt-2">
                        <label for="name" class="pb-2">Name</label>
                        <input class="form-control" type="text" name="name" value="{{ old('name') }}">
                    </div>
                    <div class="form-group mt-2">
                        <label for="message" class="pb-2">Message</label>
                        <input class="form-control" type="text" name="message" value="{{ old('message') }}">
                    </div>
                    <div class="form-group mt-3">
                        <input class="btn btn-primary" type="submit" value="Submit">
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection


