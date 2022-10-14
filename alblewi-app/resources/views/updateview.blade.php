
@extends('welcome')
@section('content')

<div class="col-md-4 m-auto border mt-3 b-2 border-info">

<h2 class="text-center text-success">Update View</h2>

    <form action="">

        <div class="mb-2">
            <label for="">Book Name</label>
            <input type="text" name="" value="{{$book_title}}" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Book Description</label>
            <input type="text" name="" value="{{$book_description}}" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Book Auther</label>
            <input type="text" name="" value="{{$book_auther}}" class="form-control">
        </div>
        <br>

        <button type="submit" class="btn btn-outline-success rounded-pill">Update Record</button>
    </form>
</div>



@endsection
