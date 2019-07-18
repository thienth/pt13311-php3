<form action="" method="get">
    <input type="text" name="keyword">
    <button type="submit">Tìm kiếm</button>
</form>
<a href="{{route('post.add')}}" title="">Tạo mới</a>
<table>
    
    <tbody>
        @foreach($dsBaiViet as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->title}}</td>
            <td>
                <img src="{{$item->image}}" width="100" >
            </td>
            <td>
                <a href="{{route('post.remove', 
                ['id' => $item->id])}}" title="">Xoa</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>