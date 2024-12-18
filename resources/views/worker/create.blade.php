<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
Create page

<div>
    <hr>

    <div>
        <form action="{{ route('worker.store')}}" method="Post">
            @csrf
            <div style="margin-bottom: 15px;font-weight: bold;color: #27638b">
                <input placeholder="name" type="text"
                       name="name" value="{{old('name')}}">
                @error('name')
                <div>{{$message}}</div>
                @enderror
            </div>
            <div style="margin-bottom: 15px;font-weight: bold;color: #27638b">
                <input placeholder="surname" type="text"
                       name="surname" value="{{old('surname')}}">
                @error('surname')
                <div>{{$message}}</div>
                @enderror
            </div>
            <div style="margin-bottom: 15px;font-weight: bold;color: #27638b">
                <input placeholder="email" type="email" name="email" value="{{old('email')}}">
                @error('email')
                <div>{{$message}}</div>
                @enderror
            </div>
            <div style="margin-bottom: 15px;font-weight: bold;color: #27638b">
                <input placeholder="age" type="number" name="age" value="{{old('age')}}">
                @error('age')
                <div>{{$message}}</div>
                @enderror
            </div>
            <div style="margin-bottom: 15px;font-weight: bold;color: #27638b">
                <textarea placeholder="description" name="description" cols="20" rows="5">
                    {{old('description')}}
                </textarea>
                @error('description')
                <div>{{$message}}</div>
                @enderror
            </div>
            <div style="margin-bottom: 15px;font-weight: bold;color: #27638b">
                <input
                    {{old('is_married')=='on' ? 'checked' : ''}}
                    type="checkbox" name="is_married"
                >
                <label for="is_married">is married</label>
                @error('is_married')
                <div>{{$message}}</div>
                @enderror
            </div>
            <div style="margin-bottom: 15px;font-weight: bold;color: #27638b">
                <input type="submit" value="add">
            </div>
        </form>

    </div>
</div>
</body>
</html>
