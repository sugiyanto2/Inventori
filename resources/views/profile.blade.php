@extends('layouts.main')

@section('body')
        <div class="container py-5">
            <form action="/profile" method="post" enctype="multipart/form-data">
               @csrf
                @auth
                <div class="container-form d-flex justify-content-center mt-5">
                    <div class="d-flex align-items-center mb-0  text-center">
                        <label for="image">
                            <img id="image" class="mb-5 img-thumbnail rounded-circle" src="/img/user.png" alt="" width="150" height="150">
                            <input type="file" name="image" id="image" style="display:none;">
                        </label>
                        <h1 class="h1 mb-3 ms-4 fw-1">Welcome back, {{ auth()->user()->name }}</h1>
                    </div>
                </div>
                @endauth

                <div class="datable-container mt-3 mb-3 d-flex justify-content-center align-items-center">
                    <table class="table table-bordered border-primary border-opacity-50 w-50">
                            <tr>
                                <th class="col text-start ps-4" style="width: 10%;">Name</th>
                                <th class="col text-start ps-4" style="width: 40%">{{ auth()->user()->name }}</th>
                            </tr>
                            <tr>
                                <th class="col text-start ps-4" style="width: 10%;">Email</th>
                                <th class="col text-start ps-4" style="width: 40%">{{ auth()->user()->email }}</th>
                            </tr>
                            <tr>
                                <th class="col text-start ps-4" style="width: 10%;">Address</th>
                                <th class="col text-start ps-4" style="width: 40%">{{ auth()->user()->address }}</th>
                            </tr>
                            <tr>
                                <th class="col text-start ps-4" style="width: 10%;">Phone</th>
                                <th class="col text-start ps-4" style="width: 40%">{{ auth()->user()->phone }}</th>
                            </tr>
                        </table>
                    </div>
            </form>
    </div>
    @endsection



