<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>file</th>
            <th>Header 2</th>
        </tr>
        @foreach ($files as $file)    
        <tr>
            <td><a href="{{ $file }}">{{ $file }}</a></td>
            <td>Data 2</td>
        </tr>
        @endforeach
    </table>
</body>
</html>