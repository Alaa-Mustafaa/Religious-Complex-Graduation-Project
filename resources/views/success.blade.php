@if (session()->has("success"))
<div class="container py-5">
    <div class="alert alert-success">{{session()->get("success")}}</div>

</div>
    
@endif