<style type="text/css">
	ul {
		text-align: center;
		width: 75%;
		margin: 0 auto;
	}
</style>

@if ($errors->any())
    <ul class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach    
    </ul>
@endif  
