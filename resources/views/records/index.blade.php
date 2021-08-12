@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">All Commute Records</div>
                @if (session()->get('success'))
            <div class="alert alert-success">
            {{session()->get('success')}}
            </div>
            @endif

                <div class="card-body">
                 
            <a class="btn btn-primary" href="{{route('records.create')}}">Add Record</a>
            
           
                  <table class="table table-striped">
                  <thead>
                  <tr>
                  <th>Id</th>
                  <th>From</th>
                  <th>To</th>
                  <th>Initial Kilometers</th>
                  <th>Final Kilometers</th>
                  <th>Total Kilometers</th>
                  <th>Created</th>
                  <th>Filled By</th>
                
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($records as $record)
                  <tr>
                    <td>{{$record->id}}</td>
                    <td>{{$record->From}}</td>
                    <td>{{$record->To}}</td>
                    <td>{{$record->initial_kilometers}}</td>
                    <td>{{$record->final_kilometers}}</td>
                    <td>{{$record->total_kilometers}}</td>
                    <td>{{$record->created_at}}</td>
                    <td>{{$record->getUserName()}}</td>
                 
                  
                  
                  {{--<td><a class="btn btn-secondary" href="{{--route('records.show',[$record])--}">View</a> 
                  <a class="btn btn-success" href="{{--route('records.edit',[$record])--}">Edit</a>
                  <form action="{{route('records.destroy',[$record])}}" method="POST" style="display:inline-block" id="add">
                @method('DELETE')
                @csrf 
                    <button  class="btn btn-danger" form="add" >Delete</button>--}}
                     </form>
               
                  </td>
                  
                  </tr>
                  @endforeach
                  </tbody>
                  </table>
                  {{--$records->links()--}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
