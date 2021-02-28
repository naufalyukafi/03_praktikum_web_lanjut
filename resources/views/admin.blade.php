@section('title')
	Message | Yukafi
@endsection
@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-6">
        <div class="card mt-5">
            <div class="card-body">
                <h3 class="my-4">Data Yang Di Input : </h3>

                <table class="table table-bordered table-striped">
                    <tr>
                        <td style="width:150px">Email</td>
                        <td>{{ $data->email }}</td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>{{ $data->name }}</td>
                    </tr>
                    <tr>
                        <td>Message</td>
                        <td>{{ $data->message }}</td>
                    </tr>
                </table>
                
                <a href="/contact-us" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection


