<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>danh sach</h1>
    <a href="{{route('grade.create')}}">them lop</a>
    <form action="">
        <input type="text" value="{{$search}}" name="search">
        <button>oksa</button>
    </form>
    <table>
        <tr>
            <th>ma</th>
            <th>ten</th>
        </tr>
        @foreach ($listGrade as $item)
        <tr>
            <td>{{$item->id_course }}</td>
            <td>{{$item->name_course }}</td>
           <td><a href="{{ route('grade.show', $item->id_course) }}">Xem</a></td>
           <td>
            <form action="{{ route('grade.destroy',$item->id_course) }}" method="post">
                @csrf
                @method('DELETE')
                <button>Xóa</button>
            </form>
        </td>
        </tr>
        @endforeach
    </table>
    {{$listGrade->appends([
        'search'=>$search,
    ])->links() }}
</body>
</html>
