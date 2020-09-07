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
                <a class="btn btn-success" href="{{ route('commodityexchanges.create') }}"> Create New Customers</a>
            </div>
<br><br>
<table class="table table-success">
    <thead>
        <th>No</th>
        <th>Name </th>
        <th>Address</th>
        <th>Phone 1</th>
        <th>Phone 2</th>
        <th>Email</th>
        <th>Photo</th>
        <th>Action</th>
        
    </thead>
    <tbody>
        @foreach($commodityexchanges as $commodityexchange)
        <tr>

            <td>{{$loop->iteration}}</td>
            <td>{{ $commodityexchange->ce_name}}</td>
            <td>{{ $commodityexchange->ce_address}}</td>
            <td>{{ $commodityexchange->ce_phone1}}</td>
            <td>{{ $commodityexchange->ce_phone2}}</td>
            <td>{{ $commodityexchange->ce_email}}</td>
            <td><img src="{{asset('/uploads/'.$commodityexchange->ce_photopath)}}" width="80" height="80"/></td>
           
            <td>
            <form action="{{ route('commodityexchanges.destroy',$commodityexchange->id) }}" method="POST" >
   
            <a class="btn btn-info" href="{{ route('commodityexchanges.show',$commodityexchange->id) }}">Show</a>

            <a class="btn btn-primary" href="{{ route('commodityexchanges.edit',$commodityexchange->id) }}">Edit</a>

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
