<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Users Data</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet" /> -->
</head>
<body>
   <div class="container">
    <div class="row">
    <div class="col-12">
    <form form action="{{URL::to('/')}}" method="GET" >
        @csrf
        <div class="form-group">
            <h5>Sort</h5>
            <div class="form-check">
            <input class="form-check-input" type="radio" value="title" id="check-ascending" name="exampleRadios" @if(session('orderBy') == 'title') checked @endif>
            <label class="form-check-label" for="check-ascending">
               By Title
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" value="author" id="check-descending" name="exampleRadios" @if(session('orderBy') == 'author') checked @endif>
            <label class="form-check-label" for="check-descending">
                By Author
            </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <table class="table table-striped">
         <thead>
         <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Description</th>
            <th>Cover</th>
            <th>Ganre</th>
         </tr>
         </thead>
         <tbody>
            @foreach($books as $book)
            <tr>
               <td>{{ $book->title }}</td>
               <td>{{ $book->author }}</td>
               <td>{{ $book->short_description }}</td>
               <td>{{ $book->cover }}</td>
               <td>{{ $book->ganre }}</td>
            </tr>
            @endforeach
         </tbody>
      </table>
      {{ $books->links() }}
    </div>
    </div>
   </div>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>