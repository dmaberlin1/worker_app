<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
Index page

<div>

    <hr>
    <div>
        <a href="{{route('worker.create')}}">Добавить</a>
    </div>
    <hr>
    @foreach($workers as $worker)
        <div>
           <div> {{$worker->name}}</div>
           <div> {{$worker->surname}}</div>
           <div> {{$worker->email}}</div>
          <div> <span style="color: #27638b;font-weight: bold" >age:</span> {{$worker->age}}</div>
           <div> {{$worker->description}}</div>
           <div> Is married: {{$worker->is_married}} </div>
            <div>
                <a href="{{route('worker.show',$worker->id)}}">Просмотреть</a>
            </div>
        </div>
        <hr>
    @endforeach

</div>
</body>
</html>
