

@extends('welcome')
@section('content')


<center>
<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-success fw-bold fs-4 mt-5 rounded-pill" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Add New Book
  </button>

  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">New Book</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">


          <form action="insertData" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-2">
                <input type="text" placeholder="Enter Book Name" class="form-control" name="book_title" id="">
            </div>
            <div class="mb-2">
                <input type="text" placeholder="Enter Book Description" class="form-control" name="book_description" id="">
            </div>
            <div class="mb-2">
                <input type="text" placeholder="Enter Book Auther" class="form-control" name="book_auther" id="">
            </div>
            <div class="mb-2">
                <input type="file" placeholder="Enter Book Image" class="form-control" name="book_image" id="">
            </div>
            <button type="submit" class="btn btn-outline-success fw-bold fs-4 rounded-pill">Add Record</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>
 </center>

 <div class="container">
 <table class="table mt-5">
    <thead class="bg-success text-white fw-bold">
        <th>ID</th>
        <th>Book Title</th>
        <th>Book Description</th>
        <th>Book Auther</th>
        <th>Book Image</th>
        <th>Update</th>
        <th>Delete</th>
    </thead>
    <tbody class="text-body bg-light fs-4">

        @foreach ($data as $item)

        <tr>
         <form action="updatedelete">
            <td class="pt-5"><input type="hidden" name="id" value="{{ $item['Id'] }}">{{ $item['Id'] }}</td>
            <td class="pt-5"><input type="hidden" name="name" value="{{ $item['book_title'] }}">{{ $item['book_title'] }}</td>
            <td class="pt-5"><input type="hidden" name="descrp" value="{{ $item['book_description'] }}">{{ $item['book_description'] }}</td>
            <td class="pt-5"><input type="hidden" name="auth" value="{{ $item['book_auther'] }}">{{ $item['book_auther'] }}</td>
            <td class="pt-5"><img src="images/{{ $item['book_image'] }}" width="100px" height="100px" alt=""></td>
            <td class="pt-5"><input type="submit" class="btn btn-outline-primary rounded-pill" name="update" value="Update"></td>
            <td class="pt-5"><input type="submit" class="btn btn-outline-danger rounded-pill" value="Delete"></td>
         </form>
        </tr>

        @endforeach

    </tbody>
 </table>
</div>
@endsection
