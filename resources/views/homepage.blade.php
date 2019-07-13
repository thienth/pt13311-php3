<table>
    
    <tbody>
        @foreach($dsBaiViet as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->title}}</td>
            <td>
                <img src="{{$item->image}}" width="100" >
            </td>
        </tr>
        @endforeach
    </tbody>
</table>