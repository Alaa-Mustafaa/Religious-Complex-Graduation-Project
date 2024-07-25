@if($errors->any())

@foreach ($errors->all() as $error )
<div class="container py-5">

<div class="alert alert-danger">{{$error}}</div>
</div>
@endforeach
    
@endif