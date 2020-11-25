@extends('layouts.layout')

  @section('content')
{{-- <pre>
  {{ print_r(Session::all()) }}
  </pre> --}}
  <div class="row mt-4">
  <h2>Contact us!</h2>
  </div>
    <p>
        test form
    </p>

<form method="POST" action="{{route('forms.store')}}">
  @csrf
<div class="form-group">
  <label for="firstName">Name</label>
  <input type="text" class="form-control"  name="firstName"  placeholder="Jane" required>
</div>
<div class="form-group">
  <label for="surname">Surname</label>
  <input type="text" class="form-control"   name="surname" placeholder="Doe" required>
</div>
<div class="form-group">
  <label for="email">Email address</label>
  <input type="email" class="form-control"  name="email" placeholder="Email" required>
</div>
<div class="form-group">
  <label for="desc">Text</label>
  <textarea class="form-control"  name="desc" rows="3"></textarea>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection

