@extends('layouts.layout')

  @section('content')
{{-- <pre>
  {{ print_r(Session::all()) }}
  </pre> --}}
  <div class="row mt-4">
  <h2>Contact us!</h2>
  </div>
    <p>
        test
    </p>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @if(session('success'))
    <div class="alert alert-success" role="alert">
      <h4 class="alert-heading">Well done!</h4>
      <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
      <hr>
      <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
    </div>
    @endif

<form method="POST" action="{{route('forms.store')}}">
  @csrf
<div class="form-group">
  <label for="firstName">Name</label>
<input type="text" class="form-control"  name="firstName"   placeholder="Jane">
</div>
<div class="form-group">
  <label for="surname">Surname</label>
  <input type="text" class="form-control"   name="surname"  placeholder="Doe">
</div>
<div class="form-group">
  <label for="email">Email address</label>
  <input type="email" class="form-control"  name="email"  placeholder="Email">
</div>
<div class="form-group">
  <label for="desc">Text</label>
  <textarea class="form-control"  name="desc"  rows="3"></textarea>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection

