<form method="post">
@csrf
	<label>Nama Eskul</label>
	<input type="text" name="esc_name" placeholder="nama ektrakulikuler"><br>
	<label>Nama Pembina</label>
	<input type="text" name="coc_name" placeholder="Nama Pembina"><br>
	<label>Deskripsi</label>
	<input type="text" name="information" placeholder="Deskripsi"><br>
	<br>
	<input type="submit" value="save">
	
</form>