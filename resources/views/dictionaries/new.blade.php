<p>{{ session('ten') }}</p>
@if (count($errors) > 0)
 <div class = "alert alert-danger" style="color:red;">
    <ul>
       @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
       @endforeach
    </ul>
 </div>
@endif
<form method="post" action="/dictionaries/create">
	@csrf
	<div>
		<input name="name" placeholder="ten">
	</div>
	<div>
		<input name="age" placeholder="tuoi">
	</div>
	<div>
		<input name="email" placeholder="Email">
	</div>
	<div>
		<input type="submit" value="save">
	</div>
</form>