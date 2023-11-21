@extends('layouts.main')

@section('body')
<div class="container-fluid">
    <div class="d-xm-flex align-items-center mb-4 px-3">
        <h1 class="mb-0 text-body-secondary fs-2 border-bottom pb-2">Stock</h1>
    </div>
</div>
<div class="container-fluid px-5 mt-4 mb-4">
    <div class="card" style="justify-content: center">
        <div class="h5 card-header d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-list-check me-3" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M3.5 5.5l1.5 1.5l2.5 -2.5"></path>
                <path d="M3.5 11.5l1.5 1.5l2.5 -2.5"></path>
                <path d="M3.5 17.5l1.5 1.5l2.5 -2.5"></path>
                <path d="M11 6l9 0"></path>
                <path d="M11 12l9 0"></path>
                <path d="M11 18l9 0"></path>
             </svg>
            {{-- <svg class="table-orders me-3" xmlns="http://www.w3.org/2000/svg"
                class="icon icon-tabler icon-tabler-shopping-cart" width="24" height="24"
                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                <path d="M17 17h-11v-14h-2"></path>
                <path d="M6 5l14 1l-1 7h-13"></path>
            </svg> --}}
            Stock
        </div>
        <div class="datable-dropdown d-flex" style="justify-content: space-between">
            <div class="dropdown ms-4 mt-3 mb-2">
                <label class="h6 d-flex align-items-center ms-3">
                    <select class="form-select px-3 me-4" id="floatingSelect"
                        aria-label="Floating label select example" style="width: 70px;">
                        {{-- <option selected>10</option> --}}
                        <option value="1">5</option>
                        <option value="2">10</option>
                        <option value="3">15</option>
                        <option value="4">20</option>
                    </select>
                    Show Stock</label>
            </div>
            <div class="datable-search d-flex align-items-center">
                <form class="d-flex align-items-center me-4" role="search">
                    <input class="form-control me-3 mt-2" id="search" type="search"
                        placeholder="Search..." aria-label="Search">
                </form>
            </div>
        </div>
        <div class="datable-container mt-2 px-4">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="col- text-center" style="width: 50px">No</th>
                        <th class="col text-center">Name Items</th>
                        <th class="col text-center">Date</th>
                        <th class="col text-center" style="width: 150px">Qty</th>
                        <th class="col text-center" style="width: 250px">Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr data-index="1">
                        <td class="text-center">1</td>
                        <td>Barang 1</td>
                        <td>2023/10/20</td>
                        <td>1 Pcs</td>
                        <td>Rp. 1000</td>
                    </tr>
                    <tr data-index="2">
                        <td class="text-center">2</td>
                        <td>Barang 2</td>
                        <td>2023/10/20</td>
                        <td>1 Pcs</td>
                        <td>Rp. 1000</td>
                    </tr>
                    <tr data-index="3">
                        <td class="text-center">3</td>
                        <td>Barang 3</td>
                        <td>2023/10/20</td>
                        <td>1 Pcs</td>
                        <td>Rp. 1000</td>
                    </tr>
                    <tr data-index="4">
                        <td class="text-center">4</td>
                        <td>Barang 4</td>
                        <td>2023/10/20</td>
                        <td>1 Pcs</td>
                        <td>Rp. 1000</td>
                    </tr>
                    <tr data-index="5">
                        <td class="text-center">5</td>
                        <td>Barang 5</td>
                        <td>2023/10/20</td>
                        <td>1 Pcs</td>
                        <td>Rp. 1000</td>
                    </tr>
                </tbody>
            </table>
            <div class="datable-bottom d-flex" style="justify-content: space-between">
                <p class="datable-info ms-5" style="font-size: 17px">Showing 1 to 10 of 20 entries</p>
                <nav class="datable-pagination">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

@endsection