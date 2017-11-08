@if (count($errors) >= 1)
@foreach ($errors->all() as $error)
<div class="alert alert-danger">
	<ul>
		<li>
			<strong>{{ $error }}</strong>
		</li>
	</ul>
</div>
@endforeach
@endif