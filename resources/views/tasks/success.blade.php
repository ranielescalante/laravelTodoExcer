<style type="text/css">
	ul {
		text-align: center;
		width: 75%;
		margin: 0 auto;
	}
</style>

@if (session()->has('status'))
    <ul class="alert alert-success">
        {{session()->get('status')}}
    </ul>
@endif  