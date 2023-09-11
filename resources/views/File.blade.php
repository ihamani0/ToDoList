<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>File</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->

</head>
<a href="{{route('file.create')}}" >Create</a>
<body >
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>image</th>
                <th>Download</th>
            </tr>
        </thead>
        <tbody>
        @foreach($files as $file)
        <tr>
            <td>{{$file->id}}</td>
            <td>
                <img src="{{Storage::url($file->path)}}" style="width:45px;height:45px;">
            </td>
            <td><a href="{{Storage::download($file->path)}}">Her!</a></td>
        </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>
