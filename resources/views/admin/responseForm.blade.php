@extends('admin.layout')

@section('body')
@include('success')
<div class="pt-3">
<form method="POST" action="{{url('sendMessage')}}" enctype="multipart/form-data">
    @csrf

    <h1 >Enter your respone</h1>
    
    <div class="my-3 ">
        <label  class="form-label mb-3">Message : </label>
        <textarea class="form-control"  rows="3" name="message"></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Send</button>
</form>
</div>
@endsection