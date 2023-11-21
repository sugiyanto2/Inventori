@extends('layouts.main')

@section('body')
    <div class="container-fluid">
        <div class="d-xm-flex align-items-center mb-4 px-3">
            <h1 class="mb-0 text-body-secondary fs-2 border-bottom pb-2">Products</h1>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row gap-3 px-2">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="..." class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h4 class="card-title">{{ $name }}</h4>
                            <h6 class="card-text">{{ $title }}</h6>
                            <div class="mt-3">
                                <label for="price">Price:</label>
                                <span id="priceDisplay">Rp.</span>
                            </div>
                            <div class="mt-0 me-5 pe-5">
                                <label for="quantity"></label>
                                <input type="number" id="quantity" class="form-control" min="0" value="0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="..." class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h4 class="card-title">{{ $name }}</h4>
                            <h6 class="card-text">{{ $title }}</h6>
                            <div class="mt-3">
                                <label for="price">Price:</label>
                                <span id="priceDisplay">Rp. </span>
                            </div>
                            <div class="mt-0 me-5 pe-5">
                                <label for="quantity"></label>
                                <input type="number" id="quantity" class="form-control" min="0" value="0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="..." class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h4 class="card-title">{{ $name }}</h4>
                            <h6 class="card-text">{{ $title }}</h6>
                            <div class="mt-3">
                                <label for="price">Price:</label>
                                <span id="priceDisplay">Rp. </span>
                            </div>
                            <div class="mt-0 me-5 pe-5">
                                <label for="quantity"></label>
                                <input type="number" id="quantity" class="form-control" min="0" value="0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-grid gap-2 d-md-flex justify-content-md-end" style="position: fixed; bottom: 0; right: 0; margin: 20px">
        <a href="/add-products">
            <button class="btn btn-primary me-md-2" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32">
                    <path
                        d="M11.75 4.5a.75.75 0 0 1 .75.75V11h5.75a.75.75 0 0 1 0 1.5H12.5v5.75a.75.75 0 0 1-1.5 0V12.5H5.25a.75.75 0 0 1 0-1.5H11V5.25a.75.75 0 0 1 .75-.75Z">
                    </path>
                </svg>
            </button>
        </a>
    </div>
@endsection
