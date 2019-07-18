<form action="" method="post" enctype="multipart/form-data" novalidate>
	<div>
		Tiêu đề: <input type="text" name="title" value="" placeholder="">
	</div>
	<div>
		Ảnh: <input type="file" name="image" value="" placeholder="">
	</div>
	<div>
		Nội dung: <textarea name="content"></textarea>
	</div>
	<div>
		Tác giả: <select name="author_id">
			<option value=""></option>
		</select>
	</div>
	<div>
		Ngày đăng: <input type="date" name="publish_date" value="" placeholder="">
	</div>
	<div>
		<button type="submit">Lưu</button>
	</div>

</form>