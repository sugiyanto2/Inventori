@extends('layouts.main')

@section('body')
<div class="container-fluid">
    <div class="d-xm-flex align-items-center mb-4 px-3">
        <h1 class="mb-0 text-body-secondary fs-2 border-bottom">Orders</h1>
    </div>
</div>
<div class="container-fluid px-5 mt-4 mb-4">
    <div class="card" style="justify-content: center">
        <div class="h5 card-header d-flex align-items-center">
            <svg class="table-orders me-3" xmlns="http://www.w3.org/2000/svg"
                class="icon icon-tabler icon-tabler-shopping-cart" width="24" height="24"
                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                <path d="M17 17h-11v-14h-2"></path>
                <path d="M6 5l14 1l-1 7h-13"></path>
            </svg>
            Table Orders
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
                    Show Orders</label>
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
                        <th class="col text-center" style="width: 200px">Date</th>
                        <th class="col text-center" style="width: 100px">Qty</th>
                        <th class="col text-center" style="width: 150px">Salary</th>
                        <th class="col text-center" style="width: 150px">Status</th>
                        <th class="col text-center" style="width: 100px">Information</th>
                    </tr>
                </thead>
                <tbody>
                    <tr data-index="1">
                        <td class="text-center">1</td>
                        <td><a href="#" class="text-decoration-none text-dark">Barang 1</a></td>
                        <td>2023/10/20</td>
                        <td>1 Pcs</td>
                        <td>Rp. 1000</td>
                        <td class="text-success">Success</td>
                        <td class="text-success">
                            <button type="button" class="btn btn-primary btn-sm" style="height: 30px">View
                                <svg xmlns="http://www.w3.org/2000/svg" class="eye-icon ms-2 mb-1" viewBox="0 0 16 16" width="16"
                                height="16">
                                <path
                                    d="M8 2c1.981 0 3.671.992 4.933 2.078 1.27 1.091 2.187 2.345 2.637 3.023a1.62 1.62 0 0 1 0 1.798c-.45.678-1.367 1.932-2.637 3.023C11.67 13.008 9.981 14 8 14c-1.981 0-3.671-.992-4.933-2.078C1.797 10.83.88 9.576.43 8.898a1.62 1.62 0 0 1 0-1.798c.45-.677 1.367-1.931 2.637-3.022C4.33 2.992 6.019 2 8 2ZM1.679 7.932a.12.12 0 0 0 0 .136c.411.622 1.241 1.75 2.366 2.717C5.176 11.758 6.527 12.5 8 12.5c1.473 0 2.825-.742 3.955-1.715 1.124-.967 1.954-2.096 2.366-2.717a.12.12 0 0 0 0-.136c-.412-.621-1.242-1.75-2.366-2.717C10.824 4.242 9.473 3.5 8 3.5c-1.473 0-2.825.742-3.955 1.715-1.124.967-1.954 2.096-2.366 2.717ZM8 10a2 2 0 1 1-.001-3.999A2 2 0 0 1 8 10Z">
                                </path>
                            </svg>
                            </button>
                        </td>
                    </tr>
                    <tr data-index="2">
                        <td class="text-center">2</td>
                        <td><a href="#" class="text-decoration-none text-dark">Barang 2</a></td>
                        <td>2023/10/20</td>
                        <td>1 Pcs</td>
                        <td>Rp. 1000</td>
                        <td class="text-success">Success</td>
                        <td class="text-success">
                            <button type="button" class="btn btn-primary btn-sm" style="height: 30px">View
                                <svg xmlns="http://www.w3.org/2000/svg" class="eye-icon ms-2 mb-1" viewBox="0 0 16 16" width="16"
                                height="16">
                                <path
                                    d="M8 2c1.981 0 3.671.992 4.933 2.078 1.27 1.091 2.187 2.345 2.637 3.023a1.62 1.62 0 0 1 0 1.798c-.45.678-1.367 1.932-2.637 3.023C11.67 13.008 9.981 14 8 14c-1.981 0-3.671-.992-4.933-2.078C1.797 10.83.88 9.576.43 8.898a1.62 1.62 0 0 1 0-1.798c.45-.677 1.367-1.931 2.637-3.022C4.33 2.992 6.019 2 8 2ZM1.679 7.932a.12.12 0 0 0 0 .136c.411.622 1.241 1.75 2.366 2.717C5.176 11.758 6.527 12.5 8 12.5c1.473 0 2.825-.742 3.955-1.715 1.124-.967 1.954-2.096 2.366-2.717a.12.12 0 0 0 0-.136c-.412-.621-1.242-1.75-2.366-2.717C10.824 4.242 9.473 3.5 8 3.5c-1.473 0-2.825.742-3.955 1.715-1.124.967-1.954 2.096-2.366 2.717ZM8 10a2 2 0 1 1-.001-3.999A2 2 0 0 1 8 10Z">
                                </path>
                            </svg>
                            </button>
                        </td>
                    </tr>
                    <tr data-index="3">
                        <td class="text-center">3</td>
                        <td><a href="#" class="text-decoration-none text-dark">Barang 3</a></td>
                        <td>2023/10/20</td>
                        <td>1 Pcs</td>
                        <td>Rp. 1000</td>
                        <td class="text-success">Success</td>
                        <td class="text-success">
                            <button type="button" class="btn btn-primary btn-sm" style="height: 30px">View
                                <svg xmlns="http://www.w3.org/2000/svg" class="eye-icon ms-2 mb-1" viewBox="0 0 16 16" width="16"
                                height="16">
                                <path
                                    d="M8 2c1.981 0 3.671.992 4.933 2.078 1.27 1.091 2.187 2.345 2.637 3.023a1.62 1.62 0 0 1 0 1.798c-.45.678-1.367 1.932-2.637 3.023C11.67 13.008 9.981 14 8 14c-1.981 0-3.671-.992-4.933-2.078C1.797 10.83.88 9.576.43 8.898a1.62 1.62 0 0 1 0-1.798c.45-.677 1.367-1.931 2.637-3.022C4.33 2.992 6.019 2 8 2ZM1.679 7.932a.12.12 0 0 0 0 .136c.411.622 1.241 1.75 2.366 2.717C5.176 11.758 6.527 12.5 8 12.5c1.473 0 2.825-.742 3.955-1.715 1.124-.967 1.954-2.096 2.366-2.717a.12.12 0 0 0 0-.136c-.412-.621-1.242-1.75-2.366-2.717C10.824 4.242 9.473 3.5 8 3.5c-1.473 0-2.825.742-3.955 1.715-1.124.967-1.954 2.096-2.366 2.717ZM8 10a2 2 0 1 1-.001-3.999A2 2 0 0 1 8 10Z">
                                </path>
                            </svg>
                            </button>
                        </td>
                    </tr>
                    <tr data-index="4">
                        <td class="text-center">4</td>
                        <td><a href="#" class="text-decoration-none text-dark">Barang 4</a></td>
                        <td>2023/10/20</td>
                        <td>1 Pcs</td>
                        <td>Rp. 1000</td>
                        <td class="text-success">Success</td>
                        <td class="text-success">
                            <button type="button" class="btn btn-primary btn-sm" style="height: 30px">View
                                <svg xmlns="http://www.w3.org/2000/svg" class="eye-icon ms-2 mb-1" viewBox="0 0 16 16" width="16"
                                height="16">
                                <path
                                    d="M8 2c1.981 0 3.671.992 4.933 2.078 1.27 1.091 2.187 2.345 2.637 3.023a1.62 1.62 0 0 1 0 1.798c-.45.678-1.367 1.932-2.637 3.023C11.67 13.008 9.981 14 8 14c-1.981 0-3.671-.992-4.933-2.078C1.797 10.83.88 9.576.43 8.898a1.62 1.62 0 0 1 0-1.798c.45-.677 1.367-1.931 2.637-3.022C4.33 2.992 6.019 2 8 2ZM1.679 7.932a.12.12 0 0 0 0 .136c.411.622 1.241 1.75 2.366 2.717C5.176 11.758 6.527 12.5 8 12.5c1.473 0 2.825-.742 3.955-1.715 1.124-.967 1.954-2.096 2.366-2.717a.12.12 0 0 0 0-.136c-.412-.621-1.242-1.75-2.366-2.717C10.824 4.242 9.473 3.5 8 3.5c-1.473 0-2.825.742-3.955 1.715-1.124.967-1.954 2.096-2.366 2.717ZM8 10a2 2 0 1 1-.001-3.999A2 2 0 0 1 8 10Z">
                                </path>
                            </svg>
                            </button>
                        </td>
                    </tr>
                    <tr data-index="5">
                        <td class="text-center">5</td>
                        <td><a href="#" class="text-decoration-none text-dark">Barang 5</a></td>
                        <td>2023/10/20</td>
                        <td>1 Pcs</td>
                        <td>Rp. 1000</td>
                        <td class="text-success">Success</td>
                        <td class="text-success">
                            <button type="button" class="btn btn-primary btn-sm" style="height: 30px">View
                                <svg xmlns="http://www.w3.org/2000/svg" class="eye-icon ms-2 mb-1" viewBox="0 0 16 16" width="16"
                                height="16">
                                <path
                                    d="M8 2c1.981 0 3.671.992 4.933 2.078 1.27 1.091 2.187 2.345 2.637 3.023a1.62 1.62 0 0 1 0 1.798c-.45.678-1.367 1.932-2.637 3.023C11.67 13.008 9.981 14 8 14c-1.981 0-3.671-.992-4.933-2.078C1.797 10.83.88 9.576.43 8.898a1.62 1.62 0 0 1 0-1.798c.45-.677 1.367-1.931 2.637-3.022C4.33 2.992 6.019 2 8 2ZM1.679 7.932a.12.12 0 0 0 0 .136c.411.622 1.241 1.75 2.366 2.717C5.176 11.758 6.527 12.5 8 12.5c1.473 0 2.825-.742 3.955-1.715 1.124-.967 1.954-2.096 2.366-2.717a.12.12 0 0 0 0-.136c-.412-.621-1.242-1.75-2.366-2.717C10.824 4.242 9.473 3.5 8 3.5c-1.473 0-2.825.742-3.955 1.715-1.124.967-1.954 2.096-2.366 2.717ZM8 10a2 2 0 1 1-.001-3.999A2 2 0 0 1 8 10Z">
                                </path>
                            </svg>
                            </button>
                        </td>
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