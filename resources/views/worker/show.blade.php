@extends('layout.main')

@section('content')
<div>
    <hr>

        <div>
           <div> {{$worker->name}}</div>
           <div> {{$worker->surname}}</div>
           <div> {{$worker->email}}</div>
          <div> <span style="color: #27638b;font-weight: bold" >age:</span> {{$worker->age}}</div>
           <div> {{$worker->description}}</div>
           <div> Is married: {{$worker->is_married}} </div>
            <div>
                <a href="{{route('worker.index')}}">Назад</a>
            </div>
        </div>
        <hr>

</div>

@endsection
