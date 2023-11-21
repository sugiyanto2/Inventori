@extends('layouts.main')

@section('body')

<div class="container-fluid">
  <div class="d-xm-flex align-items-center mb-4 px-3">
      <h1 class="mb-0 text-body-secondary fs-2 border-bottom pb-2">Add Products</h1>
  </div>
</div>
    <div class="container">
        <div class="container-fluid py-5">
            <form class="container my-5">
                <div class="row mb-3">
                  <label for="username" class="col-sm-2 col-form-label">Name Product</label>
                  <div class="col-sm-10">
                    <input type="text" name="username" class="form-control" id="username">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="username" class="col-sm-2 col-form-label">Category</label>
                  <div class="col-sm-10">
                    <input type="text" name="username" class="form-control" id="username">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="username" class="col-sm-2 col-form-label">Total Product</label>
                  <div class="col-sm-10">
                    <input type="text" name="username" class="form-control" id="username">
                  </div>
                </div>
                <div class="row mb-5">
                  <label for="File" class="col-sm-2 col-form-label">Add Picture</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile">
                  </div>
                </div>
                <div class="d-flex mt-0">
                    <button class="btn btn-primary w-100 mt-5" type="submit">Submit</button>
                  </div>
                  <a href="/products">
                    <div class="d-flex mt-0">
                      <button class="btn btn-danger w-100 mt-2" type="submit">Back</button>
                    </div>
                  </a>
              </form>
        </div>
    </div>

@endsection