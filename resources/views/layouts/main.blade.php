<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inventarix | {{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" type="icon" href="./img/inventarix.png">
</head>

<body>
    <main class="d-flex flex-nowrap">
        <div class="d-flex flex-column p-3 bg-primary bg-opacity-50" style="width: 280px; min-height: 100vh;">
            <a href="/dashboard"
                class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <img src="./img/inventarix.png" alt="Logo" width="50" height="50"
                    class="rounded-circle ms-2">
                {{-- <svg class="bi pe-none me-1" width="60" height="32">
                    <use xlink:href="#bootstrap" />
                </svg> --}}
                <span class="fs-3 fw-bold ms-3 text-dark">InventariX</span>
            </a>
            <hr>

            @auth
            <div class="d-flex align-items-center justify-content-center mt-2 p-2">
                <img src="img/{{ auth()->user()->image }}" alt="#" width="45" height="45"
                    class="rounded-circle me-3">
                <span class="fs-6">{{ auth()->user()->name }}</span>
            </div>
            @endauth
            <ul class="nav nav-pills flex-column mb-auto mt-4 fs-6">
                <li class="nav-sidebar-item pb-2">
                    <a href="/dashboard" class="nav-link link-body-emphasis d-flex align-items-center fs-6">
                        <svg class="nav-icon me-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16"
                            height="16">
                            <path
                                d="M6.906.664a1.749 1.749 0 0 1 2.187 0l5.25 4.2c.415.332.657.835.657 1.367v7.019A1.75 1.75 0 0 1 13.25 15h-3.5a.75.75 0 0 1-.75-.75V9H7v5.25a.75.75 0 0 1-.75.75h-3.5A1.75 1.75 0 0 1 1 13.25V6.23c0-.531.242-1.034.657-1.366l5.25-4.2Zm1.25 1.171a.25.25 0 0 0-.312 0l-5.25 4.2a.25.25 0 0 0-.094.196v7.019c0 .138.112.25.25.25H5.5V8.25a.75.75 0 0 1 .75-.75h3.5a.75.75 0 0 1 .75.75v5.25h2.75a.25.25 0 0 0 .25-.25V6.23a.25.25 0 0 0-.094-.195Z">
                            </path>
                        </svg>
                        Dashboard
                    </a>
                </li>
                <li class="nav-sidebar-item pb-2">
                    <a href="/products" class="nav-link link-body-emphasis d-flex align-items-center">
                        <svg class="nav-icon me-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16"
                            height="16">
                            <path
                                d="M16 10.75v2.5A1.75 1.75 0 0 1 14.25 15H1.75A1.75 1.75 0 0 1 0 13.25v-2.5C0 9.784.784 9 1.75 9h12.5c.966 0 1.75.784 1.75 1.75Zm0-8v2.5A1.75 1.75 0 0 1 14.25 7H1.75A1.75 1.75 0 0 1 0 5.25v-2.5C0 1.784.784 1 1.75 1h12.5c.966 0 1.75.784 1.75 1.75Zm-1.75-.25H1.75a.25.25 0 0 0-.25.25v2.5c0 .138.112.25.25.25h12.5a.25.25 0 0 0 .25-.25v-2.5a.25.25 0 0 0-.25-.25Zm0 8H1.75a.25.25 0 0 0-.25.25v2.5c0 .138.112.25.25.25h12.5a.25.25 0 0 0 .25-.25v-2.5a.25.25 0 0 0-.25-.25Z">
                            </path>
                        </svg>
                        Products
                    </a>
                </li>
                <li class="nav-sidebar-item pb-2">
                    <a href="/orders" class="nav-link link-body-emphasis d-flex align-items-center">
                        <svg class="nav-icon me-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16"
                            height="16">
                            <path
                                d="M6.122.392a1.75 1.75 0 0 1 1.756 0l5.25 3.045c.54.313.872.89.872 1.514V7.25a.75.75 0 0 1-1.5 0V5.677L7.75 8.432v6.384a1 1 0 0 1-1.502.865L.872 12.563A1.75 1.75 0 0 1 0 11.049V4.951c0-.624.332-1.2.872-1.514ZM7.125 1.69a.248.248 0 0 0-.25 0l-4.63 2.685L7 7.133l4.755-2.758ZM1.5 11.049a.25.25 0 0 0 .125.216l4.625 2.683V8.432L1.5 5.677Zm10.828 3.684 1.173-1.233H10.25a.75.75 0 0 1 0-1.5h3.251l-1.173-1.233a.75.75 0 1 1 1.087-1.034l2.378 2.5a.75.75 0 0 1 0 1.034l-2.378 2.5a.75.75 0 0 1-1.087-1.034Z">
                            </path>
                        </svg>
                        Orders
                    </a>
                </li>
                <li class="nav-sidebar-item pb-2">
                    <a href="/table" class="nav-link link-body-emphasis d-flex align-items-center">
                        <svg class="nav-icon me-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16"
                            height="16">
                            <path
                                d="M0 1.75C0 .784.784 0 1.75 0h12.5C15.216 0 16 .784 16 1.75v12.5A1.75 1.75 0 0 1 14.25 16H1.75A1.75 1.75 0 0 1 0 14.25ZM6.5 6.5v8h7.75a.25.25 0 0 0 .25-.25V6.5Zm8-1.5V1.75a.25.25 0 0 0-.25-.25H6.5V5Zm-13 1.5v7.75c0 .138.112.25.25.25H5v-8ZM5 5V1.5H1.75a.25.25 0 0 0-.25.25V5Z">
                            </path>
                        </svg>
                        Table
                    </a>
                </li>
                <li class="nav-sidebar-item pb-2">
                    <a href="/charts" class="nav-link link-body-emphasis d-flex align-items-center">
                        <svg class="nav-icon me-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16"
                            height="16">
                            <path
                                d="M1.5 1.75V13.5h13.75a.75.75 0 0 1 0 1.5H.75a.75.75 0 0 1-.75-.75V1.75a.75.75 0 0 1 1.5 0Zm14.28 2.53-5.25 5.25a.75.75 0 0 1-1.06 0L7 7.06 4.28 9.78a.751.751 0 0 1-1.042-.018.751.751 0 0 1-.018-1.042l3.25-3.25a.75.75 0 0 1 1.06 0L10 7.94l4.72-4.72a.751.751 0 0 1 1.042.018.751.751 0 0 1 .018 1.042Z">
                            </path>
                        </svg>
                        Charts
                    </a>
                </li>
                <li class="nav-sidebar-item pb-2">
                    <a href="/register" class="nav-link link-body-emphasis d-flex align-items-center">
                        <svg class="nav-icon me-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16"
                            height="16">
                            <path
                                d="M10.561 8.073a6.005 6.005 0 0 1 3.432 5.142.75.75 0 1 1-1.498.07 4.5 4.5 0 0 0-8.99 0 .75.75 0 0 1-1.498-.07 6.004 6.004 0 0 1 3.431-5.142 3.999 3.999 0 1 1 5.123 0ZM10.5 5a2.5 2.5 0 1 0-5 0 2.5 2.5 0 0 0 5 0Z">
                            </path>
                        </svg>
                        Users
                    </a>
                </li>
            </ul>
        </div>
        <div class="container-fluid p-0 bg-secondary bg-opacity-10">
            <nav class="navbar navbar-expand-lg bg-light p-3 mb-4 me-auto">
                <div class="container-fluid">
                    <form class="d-flex ms-4" role="search">
                        <input class="form-control col-9 me-3" id="search" type="search" placeholder="Search for..."
                            aria-label="Search">
                        <button class="btn bg-primary bg-opacity-50 text-white me-0 w-30 mt-0" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16">
                                <path
                                    d="M10.68 11.74a6 6 0 0 1-7.922-8.982 6 6 0 0 1 8.982 7.922l3.04 3.04a.749.749 0 0 1-.326 1.275.749.749 0 0 1-.734-.215ZM11.5 7a4.499 4.499 0 1 0-8.997 0A4.499 4.499 0 0 0 11.5 7Z">
                                </path>
                            </svg>
                        </button>
                    </form>
                    <ul class="dropdown-notif d-flex flex-row mb-auto mt-1" style="list-style: none;">
                        <li>
                            <a class="dropdown-item me-3 p-1" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16"
                                    height="16">
                                    <path
                                        d="M8 16c.9 0 1.7-.6 1.9-1.5.1-.3-.1-.5-.4-.5h-3c-.3 0-.5.2-.4.5.2.9 1 1.5 1.9 1.5ZM3 5c0-2.8 2.2-5 5-5s5 2.2 5 5v3l1.7 2.6c.2.2.3.5.3.8 0 .8-.7 1.5-1.5 1.5h-11c-.8.1-1.5-.6-1.5-1.4 0-.3.1-.6.3-.8L3 8.1V5Z">
                                    </path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item me-5 p-1" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16"
                                    height="16">
                                    <path
                                        d="M1.75 2h12.5c.966 0 1.75.784 1.75 1.75v8.5A1.75 1.75 0 0 1 14.25 14H1.75A1.75 1.75 0 0 1 0 12.25v-8.5C0 2.784.784 2 1.75 2ZM1.5 12.251c0 .138.112.25.25.25h12.5a.25.25 0 0 0 .25-.25V5.809L8.38 9.397a.75.75 0 0 1-.76 0L1.5 5.809v6.442Zm13-8.181v-.32a.25.25 0 0 0-.25-.25H1.75a.25.25 0 0 0-.25.25v.32L8 7.88Z">
                                    </path>
                                </svg>
                            </a>
                        </li>
                        @auth
                        <div class="btn-group no-wrap">
                            <a href="/profile" class="text-decoration-none" style="color: inherit">
                                <img src="img/{{ auth()->user()->image }}" alt="#" width="30" height="30"
                                    class="rounded-circle me-0">
                                <button class="btn btn-transparent btn-sm me-0" style="border: none; font-size: 15px; font-weight: bold" type="button">
                                    Welcome back, {{ auth()->user()->name }}
                                </button>
                            </a>
                            <button type="button"
                                class="btn btn-sm btn-transparent dropdown-toggle dropdown-toggle-split"
                                data-bs-toggle="dropdown" aria-expanded="false" style="border: none">
                                <span class="visually-hidden"></span>
                            </button>
                            <ul class="dropdown-menu shadow-lg flex-column mb-auto mt-3 ml-3"
                                style="border: none; width: auto !important; font-size: 14px;">
                                <li>
                                    <a href="/profile" class="dropdown-item d-flex align-item-center">
                                        <svg class="nav-dropdown me-3 mt-1" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 16 16" width="16" height="16">
                                            <path
                                                d="M4.243 4.757a3.757 3.757 0 1 1 5.851 3.119 6.006 6.006 0 0 1 3.9 5.339.75.75 0 0 1-.715.784H2.721a.75.75 0 0 1-.714-.784 6.006 6.006 0 0 1 3.9-5.34 3.753 3.753 0 0 1-1.664-3.118Z">
                                            </path>
                                        </svg>
                                        Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="/change-password" class="dropdown-item d-flex align-item-center">
                                        <svg class="nav-dropdown me-3 mt-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16"
                                            height="16">
                                            <path
                                                d="M10.5 0a5.499 5.499 0 1 1-1.288 10.848l-.932.932a.749.749 0 0 1-.53.22H7v.75a.749.749 0 0 1-.22.53l-.5.5a.749.749 0 0 1-.53.22H5v.75a.749.749 0 0 1-.22.53l-.5.5a.749.749 0 0 1-.53.22h-2A1.75 1.75 0 0 1 0 14.25v-2c0-.199.079-.389.22-.53l4.932-4.932A5.5 5.5 0 0 1 10.5 0Zm-4 5.5c-.001.431.069.86.205 1.269a.75.75 0 0 1-.181.768L1.5 12.56v1.69c0 .138.112.25.25.25h1.69l.06-.06v-1.19a.75.75 0 0 1 .75-.75h1.19l.06-.06v-1.19a.75.75 0 0 1 .75-.75h1.19l1.023-1.025a.75.75 0 0 1 .768-.18A4 4 0 1 0 6.5 5.5ZM11 6a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z">
                                            </path>
                                        </svg>
                                        Change Password
                                    </a>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button type="submit" class="dropdown-item"> 
                                            <svg class="nav-dropdown me-3 mt-1" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 16 16" width="16" height="16">
                                            <path
                                                d="M2 2.75C2 1.784 2.784 1 3.75 1h2.5a.75.75 0 0 1 0 1.5h-2.5a.25.25 0 0 0-.25.25v10.5c0 .138.112.25.25.25h2.5a.75.75 0 0 1 0 1.5h-2.5A1.75 1.75 0 0 1 2 13.25Zm10.44 4.5-1.97-1.97a.749.749 0 0 1 .326-1.275.749.749 0 0 1 .734.215l3.25 3.25a.75.75 0 0 1 0 1.06l-3.25 3.25a.749.749 0 0 1-1.275-.326.749.749 0 0 1 .215-.734l1.97-1.97H6.75a.75.75 0 0 1 0-1.5Z">
                                            </path>
                                        </svg>
                                        Log Out
                                    </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                        @endauth
                    </ul>
                </div>
            </nav>
            @yield('body')
        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <!-- Jika menggunakan Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script src="js/Chart.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
