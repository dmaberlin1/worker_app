@extends('layout.main')

@section('content')
<div>
    <hr>
    <div>
        <a href="{{route('worker.create')}}">Добавить</a>
    </div>
    <hr>
    <div>
        <form action="{{ route('worker.index')}}">
            <input type="text" name="name" placeholder="name" value="{{request()->get('name')}}">
            <input type="text" name="surname" placeholder="surname" value="{{request()->get('surname')}}">
            <input type="text" name="email" placeholder="email" value="{{request()->get('email')}}">
            <input type="number" name="from" placeholder="from">
            <input type="number" name="to" placeholder="to">
            <input type="text" name="description" placeholder="description" value="{{request()->get('description')}}">
            <input id="isMarried" type="checkbox" name="is_married"
            {{request()->get('is_married')=='on'?'checked':''}}
            >
            <label for="isMarried">is married</label>
            <input type="submit">
            <a href="{{route('worker.index')}}">Reset</a>

        </form>
    </div>
    <hr>
    @foreach($workers as $worker)
        <div>
            <div> {{$worker->name}}</div>
            <div> {{$worker->surname}}</div>
            <div> {{$worker->email}}</div>
            <div><span style="color: #27638b;font-weight: bold">age:</span> {{$worker->age}}</div>
            <div> {{$worker->description}}</div>
            <div> Is married: {{$worker->is_married}} </div>
            <div>
                <div>
                    <a href="{{route('worker.show',$worker->id)}}">Просмотреть</a>
                </div>
                <div>
                    <a href="{{route('worker.edit',$worker->id)}}">edit</a>
                </div>
                <div>
                    <form action="{{route('worker.delete',$worker->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="delete">
                    </form>
                </div>
            </div>
        </div>
        <hr>
    @endforeach

    <div class="my-nav">
        {{$workers->withQueryString()->links()}}
    </div>

</div>

@endsection
