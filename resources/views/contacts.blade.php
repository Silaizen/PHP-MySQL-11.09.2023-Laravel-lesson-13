@extends('templates.main')

@section('content')
    
  <form action="{{url('contacts')}}" method="post">
    @csrf
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" class="form-control">
    </div>

    <div class="form-group mt-3">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" class="form-control">
    </div>

     <div class="form-group mt-3">
      <label for="message">Message:</label>
      <textarea id="message" name="message" class="form-control"></textarea>
    </div>

    <button class="btn btn-primary mt-3">Send</button>

  </form>

@endsection