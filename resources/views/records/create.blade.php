@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Record
                <a class="btn btn-secondary float-right" href="{{route('records.index')}}">Back</a>
                </div>

                <div class="card-body">
    
                <form action="{{route('records.store')}}" method="POST" id="log">
                @csrf
                     @include('records.layout')  
                    <button type="submit" class="btn btn-primary"value="Submit" form="log" >Submit Record</button>
                     </form>

                     </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection