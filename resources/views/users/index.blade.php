@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">
                Das {{ auth()->user()->name }}
                <a class="btn btn-info float-right" href="{{ route('users.create') }}">{{ __('Nuevo usuario') }}</a>
            </div>
            <user-delete-modal></user-delete-modal>

                <div class="card-body">
                    <h1>Lista de usuarios</h1>

                    {{-- <example-component>
                    </example-component> --}}
                    {{-- <user-delete>
                    </user-delete> --}}

                    <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                {{-- <th scope="col">Last</th> --}}
                                <th scope="col">Email</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $user->name }}</td>
                                    {{-- <td>Otto</td> --}}
                                    <td>{{ $user->email }}</td>
                                    <td><a class="btn btn-success" href="{{ route('users.edit', $user->id) }}">{{ __('Editar') }}</a></td>
                                    <td>
                                        <user-delete-button :user="{{ $user }}"/>
                                            {{-- <a class="btn btn-danger" @click="sayHello(1)" >{{ __('Borrar') }}</a> --}}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                          </table>
                          {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
