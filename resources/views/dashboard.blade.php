@extends('layouts.main')

@section('body')
    <div class="container-fluid">
        <div class="d-xm-flex align-items-center mb-4 px-3">
            <h1 class="mb-0 text-body-secondary fs-2 border-bottom pb-2">Dashboard</h1>
        </div>
    </div>
    <div class="row justify-content-center me-1 ms-1 px-2 mt-2 mb-4">
        <div class="col-sm-3 mb-1">
            <div class="card border-4 border-success border-opacity-80">
                <div class="card-body mb-2 text-success text-opacity-80">
                    <h5 class="card-title" style="text-align: center; font-weight: bold;">TOTAL REVENUE</h5>
                    <hr>
                    <div class="row no-gutters align-items-center px-2">
                        <div class="col mr-2 mt-3">
                            <p class="card-text mb-1" style="font-weight: 900; font-size: 30px;">$1000</p>
                        </div>
                        <div class="col-auto">
                            <a href="/charts">
                            <i class="text-success text-opacity-80">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-currency-dollar"
                                    width="50" height="50" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2">
                                    </path>
                                    <path d="M12 3v3m0 12v3"></path>
                                </svg>
                            </i>
                        </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3 mb-3">
            <div class="card border-4 border-warning">
                <div class="card-body mb-2 text-warning">
                    <h5 class="card-title" style="text-align: center; font-weight: bold;">STOCK</h5>
                    <hr>
                    <div class="row no-gutters align-items-center px-2">
                        <div class="col mr-2 mt-3">
                            <p class="card-text mb-1" style="font-weight: 900; font-size: 30px;">1000</p>
                        </div>
                        <div class="col-auto">
                            <a href="/table">
                            <i class="text-warning">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-clipboard-list"
                                    width="50" height="50" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2">
                                    </path>
                                    <path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z">
                                    </path>
                                    <path d="M9 12l.01 0"></path>
                                    <path d="M13 12l2 0"></path>
                                    <path d="M9 16l.01 0"></path>
                                    <path d="M13 16l2 0"></path>
                                </svg>
                            </i>
                        </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3 mb-3">
            <div class="card border-4 border-danger">
                <div class="card-body mb-2 text-danger">
                    <h5 class="card-title" style="text-align: center; font-weight: bold;">PENDING REQUEST</h5>
                    <hr>
                    <div class="row no-gutters align-items-center px-2">
                        <div class="col mr-2 mt-3">
                            <p class="card-text mb-1" style="font-weight: 900; font-size: 30px;">1000</p>
                        </div>
                        <div class="col-auto">
                            <a href="/orders">
                            <i class="text-danger">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-message-circle-exclamation" width="50"
                                    height="50" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M15.02 19.52c-2.34 .736 -5 .606 -7.32 -.52l-4.7 1l1.3 -3.9c-2.324 -3.437 -1.426 -7.872 2.1 -10.374c3.526 -2.501 8.59 -2.296 11.845 .48c1.96 1.671 2.898 3.963 2.755 6.227">
                                    </path>
                                    <path d="M19 16v3"></path>
                                    <path d="M19 22v.01"></path>
                                </svg>
                            </i>
                        </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3 mb-3">
            <div class="card border-4 border-info">
                <div class="card-body mb-2 text-info">
                    <h5 class="card-title" style="text-align: center; font-weight: bold;">TASK</h5>
                    <hr>
                    <div class="row no-gutters align-items-center px-1">
                        <div class="col">
                            <p class="card-text mb-1 mt-0" style="font-weight: 900; font-size: 30px;">100%</p>
                            <div class="progress progress-sm" role="progressbar" aria-label="Animated striped example"
                                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-info"
                                    style="width: 100%"></div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="text-info">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-list"
                                    width="50" height="50" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M9 6l11 0"></path>
                                    <path d="M9 12l11 0"></path>
                                    <path d="M9 18l11 0"></path>
                                    <path d="M5 6l0 .01"></path>
                                    <path d="M5 12l0 .01"></path>
                                    <path d="M5 18l0 .01"></path>
                                </svg>
                            </i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row me-1 ms-1 px-2 mt-2 mb-4">
        <div class="col-sm-8 mb-1">
            <div class="card">
                <h5 class="card-header d-flex px-0 bg-transparent">
                    <svg class="product-analysis ms-3 me-2" xmlns="http://www.w3.org/2000/svg"
                        class="icon icon-tabler icon-tabler-chart-area-line-filled" width="24" height="24"
                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path
                            d="M15.22 9.375a1 1 0 0 1 1.393 -.165l.094 .083l4 4a1 1 0 0 1 .284 .576l.009 .131v5a1 1 0 0 1 -.883 .993l-.117 .007h-16.022l-.11 -.009l-.11 -.02l-.107 -.034l-.105 -.046l-.1 -.059l-.094 -.07l-.06 -.055l-.072 -.082l-.064 -.089l-.054 -.096l-.016 -.035l-.04 -.103l-.027 -.106l-.015 -.108l-.004 -.11l.009 -.11l.019 -.105c.01 -.04 .022 -.077 .035 -.112l.046 -.105l.059 -.1l4 -6a1 1 0 0 1 1.165 -.39l.114 .05l3.277 1.638l3.495 -4.369z"
                            stroke-width="0" fill="currentColor"></path>
                        <path
                            d="M15.232 3.36a1 1 0 0 1 1.382 -.15l.093 .083l4 4a1 1 0 0 1 -1.32 1.497l-.094 -.083l-3.226 -3.225l-4.299 5.158a1 1 0 0 1 -1.1 .303l-.115 -.049l-3.254 -1.626l-2.499 3.332a1 1 0 0 1 -1.295 .269l-.105 -.069a1 1 0 0 1 -.269 -1.295l.069 -.105l3 -4a1 1 0 0 1 1.137 -.341l.11 .047l3.291 1.645l4.494 -5.391z"
                            stroke-width="0" fill="currentColor"></path>
                    </svg>
                    Product Analysis
                </h5>
                <div class="card-body mb-2">
                    <canvas class="my-4 w-100" id="myChart" width="720" height="267"></canvas>
                </div>
            </div>
        </div>
        <div class="col-sm-4 mb-3">
            <div class="card">
                <div class="card-header d-flex py-0 px-0 bg-transparent">
                    <h5 class="ms-3 mt-2">
                        Projects
                    </h5>
                </div>
                <div class="card-body py-4">
                    <p class="card-text mb-1 mt-0" style="font-weight: 700;">Progress</p>
                    <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="100"
                        aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" style="width: 100%">
                        </div>
                    </div>
                    <p class="card-text mb-3 mt-0" style="font-weight: 700;">100%</p>
                    <p class="card-text mb-1 mt-0" style="font-weight: 700;">Payout</p>
                    <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="100"
                        aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" style="width: 100%">
                        </div>
                    </div>
                    <p class="card-text mb-3 mt-0" style="font-weight: 700;">80%</p>
                    <p class="card-text mb-1 mt-0" style="font-weight: 700;">Orders</p>
                    <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="100"
                        aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" style="width: 100%">
                        </div>
                    </div>
                    <p class="card-text mb-3 mt-0" style="font-weight: 700;">60%</p>
                    <p class="card-text mb-1 mt-0" style="font-weight: 700;">Stock</p>
                    <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="100"
                        aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" style="width: 100%">
                        </div>
                    </div>
                    <p class="card-text mb-3 mt-0" style="font-weight: 700;">40%</p>
                    <p class="card-text mb-1 mt-0" style="font-weight: 700;">Account Setup</p>
                    <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="100"
                        aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" style="width: 100%">
                        </div>
                    </div>
                    <p class="card-text mb-3 mt-0" style="font-weight: 700;">20%</p>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="container-fluid row px-4 mt-4 mb-4 ms-0">
                <div class="card col-sm-8 me-0">
                    <h5 class="card-header d-flex px-0 bg-transparent">
                        <svg class="product-analysis me-3" xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-chart-area-line-filled" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path
                                d="M15.22 9.375a1 1 0 0 1 1.393 -.165l.094 .083l4 4a1 1 0 0 1 .284 .576l.009 .131v5a1 1 0 0 1 -.883 .993l-.117 .007h-16.022l-.11 -.009l-.11 -.02l-.107 -.034l-.105 -.046l-.1 -.059l-.094 -.07l-.06 -.055l-.072 -.082l-.064 -.089l-.054 -.096l-.016 -.035l-.04 -.103l-.027 -.106l-.015 -.108l-.004 -.11l.009 -.11l.019 -.105c.01 -.04 .022 -.077 .035 -.112l.046 -.105l.059 -.1l4 -6a1 1 0 0 1 1.165 -.39l.114 .05l3.277 1.638l3.495 -4.369z"
                                stroke-width="0" fill="currentColor"></path>
                            <path
                                d="M15.232 3.36a1 1 0 0 1 1.382 -.15l.093 .083l4 4a1 1 0 0 1 -1.32 1.497l-.094 -.083l-3.226 -3.225l-4.299 5.158a1 1 0 0 1 -1.1 .303l-.115 -.049l-3.254 -1.626l-2.499 3.332a1 1 0 0 1 -1.295 .269l-.105 -.069a1 1 0 0 1 -.269 -1.295l.069 -.105l3 -4a1 1 0 0 1 1.137 -.341l.11 .047l3.291 1.645l4.494 -5.391z"
                                stroke-width="0" fill="currentColor"></path>
                        </svg>
                        Product Analysis
                    </h5>
                    <div class="card-body py-0">
                        <canvas class="my-4 w-100" id="myChart" width="720" height="320"></canvas>
                    </div>
                </div>
                <div class="card col-sm-4 px-0 ms-0">
                    <div class="card-header">
                      Projects
                    </div>
                    <div class="card-body">
                    </div>
                  </div>
            </div> --}}
    <div class="container-fluid px-3 mt-4 mb-4">
        <div class="card" style="justify-content: center">
            <div class="h5 card-header d-flex align-items-center">
                <svg class="table-orders me-3" xmlns="http://www.w3.org/2000/svg"
                    class="icon icon-tabler icon-tabler-shopping-cart" width="24" height="24" viewBox="0 0 24 24"
                    stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                    stroke-linejoin="round">
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
                        <input class="form-control me-3 mt-2" id="search" type="search" placeholder="Search..."
                            aria-label="Search">
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
                            <td>Barang 1</td>
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
                            <td>Barang 2</td>
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
                            <td>Barang 3</td>
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
                            <td>Barang 4</td>
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
                            <td>Barang 5</td>
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
                    <p class="datable-info ms-5" style="font-size: 17px">Showing <b>1</b> to <b>5</b> of <b>20</b> entries</p>
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
    </div>
@endsection
