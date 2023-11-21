@extends('layouts.main')

@section('body')

<div class="container-fluid py-5">
    <form class="container my-5">
        <div class="row mb-3">
          <label for="inputUsername" class="col-sm-2 col-form-label">Username</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputUsername">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputPhone" class="col-sm-2 col-form-label">Phone</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="inputPhone">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputPassword1" class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword1">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputPassword2" class="col-sm-2 col-form-label">New Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword2">
          </div>
        </div>
        <div class="vstack gap-2 col-md-5 mx-auto mt-5">
            <button type="submit" class="btn btn-primary">Save changes</button>
            <button type="submit" class="btn btn-outline-secondary">Cancel</button>
          </div>
      </form>
</div>

@endsection