@extends('app')
@section('content')
<div class="row">
    <div class="col-md-6">
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <form action="{{ route('register.action') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>nom <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="nom" />
            </div>
            <div class="mb-3">
                <label>prenom <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="prenom" />
            </div>
            <div class="mb-3">
                <label>portable <span class="text-danger">*</span></label>
                <input class="form-control" type="username" name="portable"  />
            </div>
            <div class="mb-3">
                <label>role <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="role" />
            </div>
            <div class="mb-3">
                <label>email <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="email" />
            </div>
            <div class="mb-3">
                <label>Password <span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="password" />
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">Register</button>
                <a class="btn btn-danger" href="{{ route('home') }}">Back</a>
            </div>
        </form>
    </div>
</div>
@endsection