@extends('layout.page')

@section('title', 'home page')

@section('content')
    <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
            @if(session()->exists('error'))
                <div class="alert alert-danger">{{ session()->get('error') }}</div>
            @endif
            <form action="{{ route('login.save') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input class="form-control @error('email') is-invalid @enderror"  value="{{ old('email') }}" type="email"  name="email" aria-describedby="emailHelp" placeholder="Enter email">
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Mot de passe</label>
                    <input class="form-control  @error('email') is-invalid @enderror" type="password" placeholder="Password" name="password">
                    @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>

        </div>
    </div>
@endsection
