@extends('layout.main')

@section('content')

<div>
    <hr>

    <div>
        <form action="{{ route('worker.update',$worker->id)}}" method="Post">
            @csrf
            @method('PATCH')
            <div style="margin-bottom: 15px;font-weight: bold;color: #27638b">
                <input placeholder="name" value="{{old('name')?? $worker->name}}" type="text"
                       name="name">
                @error('name')
                <div>{{$message}}</div>
                @enderror
            </div>
            <div style="margin-bottom: 15px;font-weight: bold;color: #27638b">
                <input placeholder="surname" value="{{old('surname') ?? $worker->surname}}" type="text"
                       name="surname">
                @error('surname')
                <div>{{$message}}</div>
                @enderror
            </div>
            <div style="margin-bottom: 15px;font-weight: bold;color: #27638b">
                <input placeholder="email" value="{{old('email')?? $worker->email}}" type="email" name="email">
                @error('email')
                <div>{{$message}}</div>
                @enderror
            </div>
            <div style="margin-bottom: 15px;font-weight: bold;color: #27638b">
                <input placeholder="age" value="{{$old('age')?? $worker->age}}" type="number" name="age">
                @error('age')
                <div>{{$message}}</div>
                @enderror
            </div>
            <div style="margin-bottom: 15px;font-weight: bold;color: #27638b">
                <textarea placeholder="description" name="description" cols="20"
                          rows="5">
                    {{old('description')?? $worker->description}}
                </textarea>
                @error('description')
                <div>{{$message}}</div>
                @enderror
            </div>
            <div style="margin-bottom: 15px;font-weight: bold;color: #27638b">
                <input type="checkbox" name="is_married" {{old('is_married')?? $worker->is_married ?'checked':''}}>
                <label for="is_married">is married</label>
                @error('is_married')
                <div>{{$message}}</div>
                @enderror
            </div>
            <div style="margin-bottom: 15px;font-weight: bold;color: #27638b">
                <input type="submit" value="save">
            </div>
        </form>

    </div>
</div>


@endsection
