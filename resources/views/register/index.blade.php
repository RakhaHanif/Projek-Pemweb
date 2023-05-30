@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
  <div class="col-lg-5">
    <main class="form-registration">
      <h1 class="h3 mb-3 fw-normal text-center">Create New Account.</h1>
      <small class="d-block mt-3">Already A Member? <a href="/login">Log in</a></small>
      <form action="/register" method="post"> 
        @csrf
        
        <div class="form-floating">
          <input type="text" name="first_name" class="form-control rounded-top @error('first_name') is-invalid @enderror" id="first_name" placeholder="First_name" required value="{{ old('first_name') }}">
          <label for="first_name">First Name</label>
          @error('first_name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="form-floating">
          <input type="text" name="last_name" class="form-control rounded-top @error('last_name') is-invalid @enderror" id="last_name" placeholder="Last_name" required value="{{ old('last_name') }}">
          <label for="last_name">Last Name</label>
          @error('last_name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="form-floating">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
          <label for="email">Email address</label>
          @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>


        <div class="form-floating">
          <input type="handphone" name="handphone" class="form-control rounded-bottom @error('handphone') is-invalid @enderror" id="handphone" placeholder="Handphone" required>
          <label for="handphone">Phone</label>
          @error('handphone')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="form-floating">
          <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
          <label for="password">Password</label>
          @error('password')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
    
        {{-- <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button> --}}
        <button class="w-100 btn btn-lg btn-primary mt-3" 
        href="/confirm">Signup</button>
      </form>
     
    </main>
  </div>
</div>

@endsection