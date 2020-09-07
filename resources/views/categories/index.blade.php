@extends('layouts.dashboard')

@section('content')
<div class="col-lg-12">
@if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
  
<div class="row"  style="margin-top:20px;">





<br><br>


<div class="pull-right">
                <a class="btn btn-success" href="{{ route('categories.create') }}"> Create New Category</a>
            </div>
<br><br>
<table class="table table-success">
    <thead>
        <th>No</th>
        <th>Category Name </th>
        <th>Category Description</th>
        <th>Commodity Exchange</th>
        <th>Action</th>
        
    </thead>
    <tbody>
        @foreach($categories as $category)
        <tr>

            <td>{{$loop->iteration}}</td>
            <td>{{ $category->category_name}}</td>
            <td>{{ $category->c_description}}</td>
            <td>{{ $category->commodity_id}}</td>
            
           
           
            <td>
            <form action="" method="POST" >
   
            <a class="btn btn-info" href="">Show</a>

            <a class="btn btn-primary" href="">Edit</a>

             @csrf
             @method('DELETE')

            <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </td>
            
            
            

            </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>

@endsection
