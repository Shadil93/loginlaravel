@extends('index')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-4">

        </div>
        <div class="col-4">
            <form action="{{route('do_register')}}" method="POST">
                @csrf
                <label>name</label>
                <input type="text" name="name" class="form-control">
                <label>email</label>
                <input type="text" name="email" class="form-control">
                <label>password</label>
                <input type="text" name="password" class="form-control">

                <button type="submit" name="submit" class="btn btn-danger" >submit</button>

            </form>
        </div>
    </div>
</div>

@endsection