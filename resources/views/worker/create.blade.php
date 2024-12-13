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
                       name="name"></div>
            <div style="margin-bottom: 15px;font-weight: bold;color: #27638b">
                <input placeholder="surname" type="text"
                       name="surname"></div>
            <div style="margin-bottom: 15px;font-weight: bold;color: #27638b">
                <input placeholder="email" type="email" name="email"></div>
            <div style="margin-bottom: 15px;font-weight: bold;color: #27638b">
                <input placeholder="age" type="number" name="age"></div>
            <div style="margin-bottom: 15px;font-weight: bold;color: #27638b">
                <textarea placeholder="description" name="description" cols="20" rows="5"></textarea>
            </div>
            <div style="margin-bottom: 15px;font-weight: bold;color: #27638b">
                <input type="checkbox" name="is_married">
                <label for="is_married">is married</label>
            </div>
            <div style="margin-bottom: 15px;font-weight: bold;color: #27638b">
                <input type="submit" value="add">
            </div>
        </form>

    </div>
</div>
</body>
</html>
