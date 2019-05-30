
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">
                Das {{ auth()->user()->name }}
                {{-- <a class="btn btn-info float-right" href="{{ route('users.create') }}">{{ __('Users') }}</a> --}}
            </div>

                <div class="card-body">
                    <h1>Crear nuevo usuario</h1>

                    <form action="{{ route('users.store') }}" method="POST">
                            @csrf

                        <div class="form-row">

                            <div class="form-group col-md-12">
                                        <label for="name">Nombre</label>
                                        <input type="text" name="name" class="form-control" id="name" required>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Email</label>
                                <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email" required>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="inputPassword4">Password</label>
                                <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Password" required>
                            </div>

                            <div class="form-group col-md-12">
                                    <input class="btn btn-primary" type="submit" value="Submit">
                             </div>


                             <div class="form-group col-12">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                             </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
