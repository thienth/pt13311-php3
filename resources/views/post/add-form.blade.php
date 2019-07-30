@extends('layouts.main')
@section('content')
<form action="{{route('post.add')}}" method="post" enctype="multipart/form-data" novalidate>
	@csrf
	<div class="form-group">
		<label for="">Tiêu đề</label>
		<input type="text" name="title" class="form-control" value="" placeholder="">
	</div>
	<div class="form-group">
		<label>Ảnh</label>
		<input type="file" name="image" class="form-control" value="" placeholder="">
	</div>
	<div class="form-group">
		<label for="">Nội dung</label>
		<textarea name="content" rows="10" class="form-control"></textarea>
	</div>
	<div class="form-group">
		<label for="">Tác giả</label>
		<input type="text" name="author" class="form-control">
	</div>
	<div class="form-group">
		<label for="">Ngày đăng</label>
		<input type="date" name="publish_date" class="form-control" placeholder="">
	</div>
	<div class="form-group">
		<label for="">Danh mục</label>
		<select name="cate_id" class="form-control">
			@foreach($cates as $item)
			<option value="{{$item->id}}">{{$item->name}}</option>
			@endforeach
		</select>
	</div>
	<div class="checkbox">
		<label>
			<input type="checkbox" value="1" name="status"> Active
		</label>
    </div>
	<div>
		<button type="submit" class="btn btn-sm btn-success">Lưu</button>
		<a href="{{route('homepage')}}" class="btn btn-sm btn-danger">Hủy</a>
	</div>

</form>
@endsection