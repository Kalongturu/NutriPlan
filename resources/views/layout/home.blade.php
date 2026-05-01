@extends('layout.layout')

{{-- Section homepage --}}

@section('title', 'Homepage')
@section('content')
    <div class="col-10 border">
        <div class="row py-0">
            <div class="col-4">
                <h5 class="fw-bold">Selamat datang, {{ session('user_name') }}</h5>
                {{-- Jumlah activity itu berdasarkan input pengguna --}}
                <p class="tgl">You have 0 activity today</p>
                <h4 class="mb-1 fw-500">Meal plan - Today</h4>
                <p class="text-muted tgl">{{ date('l, d F Y') }}</p>

            </div>

            <div class="col-8">
                <div class="position-relative">
                    <span id="input-group-sizing-sm"></span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        class="position-absolute lup">
                        <path
                            d="M20 20L18.4 18.4M4 11.6C4 7.40264 7.40263 4 11.6 4C15.7974 4 19.2 7.40264 19.2 11.6C19.2 15.7974 15.7974 19.2 11.6 19.2C7.40263 19.2 4 15.7974 4 11.6Z"
                            stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <input type="text" class="form-control" aria-label="search bar home"
                        aria-describedby="form di homepage" placeholder="Search by recipes and more">
                </div>

            </div>
            {{-- Container meal & drink --}}
            <div class="col-5 border">
                <div class="wrapper-meal-home">
                    <div class="header-meals d-flex justify-content-between align-items-center mb-1">
                        <h5 class="m-0">Meals & Drinks</h5>
                        {{-- Jumlah meal (bergantung pada wrapper-content-meal-home) dan water bergantung pada input user --}}
                        <p class="text-muted tgl m-0">1 Meals - 1.2L Water</p>
                    </div>
                    <div class="meals-list gap-3">
                        {{-- Template untuk konten di meal --}}
                        {{-- Data gambar, type meal, name meal, category meal, dan nutrition meal diambil dari database --}}
                        <div class="wrapper-content-meal-home d-flex px-2">
                            <div class="gambar-meal align-items-center d-flex m-0">
                                <img src="{{ asset('img/meal1_home.png') }}" alt="">
                            </div>
                            <div class="d-flex flex-column py-2 ms-2">
                                {{-- Type meal --}}
                                <p class="m-0 p-o">Breakfast</p>
                                {{-- Name meal --}}
                                <h6 class="mb-1 p-0 fw-bold">Avocado Toast & Poached Eggs</h6>
                                {{-- Category Meal --}}
                                <p class="category-meal d-flex border mb-1 gap-1 fw-bold">
                                    <span class="text-white px-1 ktg-oren-home">Quick Meal</span>
                                    <span class="text-white px-1 ktg-ijo-home">Balanced</span>
                                </p>
                                <div class="d-flex align-items-center gap-3 nutrition-meal">
                                    <div class="d-flex align-items-center">
                                        {{-- Ikon kalori --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 16 16" fill="none">
                                            <path
                                                d="M5.66671 9.66667C6.10873 9.66667 6.53266 9.49107 6.84522 9.17851C7.15778 8.86595 7.33337 8.44203 7.33337 8C7.33337 7.08 7.00004 6.66667 6.66671 6C5.95204 4.57133 6.51737 3.29733 8.00004 2C8.33337 3.66667 9.33337 5.26667 10.6667 6.33333C12 7.4 12.6667 8.66667 12.6667 10C12.6667 10.6128 12.546 11.2197 12.3115 11.7859C12.077 12.352 11.7332 12.8665 11.2999 13.2998C10.8665 13.7332 10.3521 14.0769 9.7859 14.3114C9.21971 14.546 8.61288 14.6667 8.00004 14.6667C7.38721 14.6667 6.78037 14.546 6.21418 14.3114C5.648 14.0769 5.13355 13.7332 4.70021 13.2998C4.26687 12.8665 3.92312 12.352 3.6886 11.7859C3.45408 11.2197 3.33337 10.6128 3.33337 10C3.33337 9.23133 3.62204 8.47067 4.00004 8C4.00004 8.44203 4.17564 8.86595 4.4882 9.17851C4.80076 9.49107 5.22468 9.66667 5.66671 9.66667Z"
                                                stroke="#FF6900" stroke-width="1.33333" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                        {{-- Jumlah kalori --}}
                                        <p class="font-size-s m-0">420 kcal</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        {{-- Ikon protein --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 16 16" fill="none">
                                            <g clip-path="url(#clip0_634_497)">
                                                <path
                                                    d="M10.9334 9.13335C11.4802 8.72243 11.9219 8.18791 12.2225 7.57351C12.5231 6.95911 12.674 6.28228 12.6628 5.59839C12.6516 4.9145 12.4787 4.24297 12.1582 3.63872C11.8377 3.03447 11.3787 2.51468 10.8188 2.12184C10.2589 1.72901 9.61389 1.4743 8.93665 1.37855C8.2594 1.2828 7.5691 1.34872 6.92222 1.57093C6.27534 1.79314 5.69025 2.16532 5.2148 2.65704C4.73935 3.14875 4.38705 3.74603 4.18672 4.40001C3.45339 6.48668 3.66672 7.00002 2.06672 8.45335C1.74789 8.71473 1.51763 9.06825 1.40746 9.46553C1.29728 9.86281 1.31257 10.2844 1.45123 10.6727C1.5899 11.0609 1.84516 11.3969 2.18208 11.6345C2.519 11.8721 2.92111 11.9997 3.33339 12C6.00005 12 8.93338 10.8 10.9334 9.13335Z"
                                                    stroke="#00A63E" stroke-width="1.33333" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M12.3333 4L13.7933 7C14.0728 7.85924 14.0758 8.78448 13.8019 9.64552C13.5281 10.5066 12.9911 11.2601 12.2666 11.8C10.2666 13.4667 7.33331 14.6667 4.66664 14.6667C4.29548 14.6662 3.93177 14.5624 3.61623 14.3669C3.30069 14.1715 3.04576 13.8921 2.87998 13.56L1.59998 11"
                                                    stroke="#00A63E" stroke-width="1.33333" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path
                                                    d="M8.33329 7.33333C9.25377 7.33333 9.99996 6.58714 9.99996 5.66667C9.99996 4.74619 9.25377 4 8.33329 4C7.41282 4 6.66663 4.74619 6.66663 5.66667C6.66663 6.58714 7.41282 7.33333 8.33329 7.33333Z"
                                                    stroke="#00A63E" stroke-width="1.33333" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_634_497">
                                                    <rect width="16" height="16" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        {{-- Jumlah protein --}}
                                        <p class="font-size-s m-0">22g protein</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-7 d-flex justify-content-evenly flex-wrap">
                <div class="wrapper-report-home">
                    <div class="d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40"
                            fill="none">
                            <path
                                d="M10 5H8C6.343 5 5 6.343 5 8V32C5 33.657 6.343 35 8 35H32C33.657 35 35 33.657 35 32V8C35 6.343 33.657 5 32 5H30V7H32C32.552 7 33 7.448 33 8V32C33 32.552 32.552 33 32 33H8C7.448 33 7 32.552 7 32V8C7 7.448 7.448 7 8 7H10V5Z"
                                fill="black" />
                            <path
                                d="M22 4C22.552 4 23 4.448 23 5V7C23 7.552 22.552 8 22 8H18C17.448 8 17 7.552 17 7V5C17 4.448 17.448 4 18 4H22ZM18 3C16.895 3 16 3.895 16 5V7C16 8.105 16.895 9 18 9H22C23.105 9 24 8.105 24 7V5C24 3.895 23.105 3 22 3H18Z"
                                fill="black" />

                            <g transform="translate(13,12)">
                                <path
                                    d="M0 10C0 9.17157 0.671573 8.5 1.5 8.5C2.32843 8.5 3 9.17157 3 10V12C3 12.8284 2.32843 13.5 1.5 13.5C0.671573 13.5 0 12.8284 0 12V10Z"
                                    fill="black" />
                                <path
                                    d="M4.5 7C4.5 6.17157 5.17157 5.5 6 5.5C6.82843 5.5 7.5 6.17157 7.5 7V12C7.5 12.8284 6.82843 13.5 6 13.5C5.17157 13.5 4.5 12.8284 4.5 12V7Z"
                                    fill="black" />
                                <path
                                    d="M9 3C9 2.17157 9.67157 1.5 10.5 1.5C11.3284 1.5 12 2.17157 12 3V12C12 12.8284 11.3284 13.5 10.5 13.5C9.67157 13.5 9 12.8284 9 12V3Z"
                                    fill="black" />
                            </g>
                        </svg>
                        <h6 class="fw-bold mb-0 mx-2">Reports</h6>
                        <p class="tgl m-0">Goal this week</p>
                    </div>
                    <div class="d-flex flex-wrap">
                        <div class="card-6 water-intake d-flex p-0">
                            <div class="water-content px-1 py-2 border">
                                <div class="p-0 d-flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                        viewBox="0 0 12 12" fill="none">
                                        <g clip-path="url(#clip0_222_514)">
                                            <path
                                                d="M3.5 8.14999C4.6 8.14999 5.5 7.23499 5.5 6.12499C5.5 5.54499 5.215 4.99499 4.645 4.52999C4.075 4.06499 3.645 3.37499 3.5 2.64999C3.355 3.37499 2.93 4.06999 2.355 4.52999C1.78 4.98999 1.5 5.54999 1.5 6.12499C1.5 7.23499 2.4 8.14999 3.5 8.14999Z"
                                                stroke="#2B7FFF" stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M6.28004 3.29999C6.62392 2.75056 6.86769 2.14452 7.00004 1.50999C7.25004 2.75999 8.00004 3.95999 9.00004 4.75999C10 5.55999 10.5 6.50999 10.5 7.50999C10.5029 8.20114 10.3005 8.87757 9.91844 9.45354C9.5364 10.0295 8.99195 10.4791 8.35411 10.7452C7.71627 11.0114 7.01375 11.0822 6.33563 10.9486C5.65751 10.8151 5.03431 10.4832 4.54504 9.99499"
                                                stroke="#2B7FFF" stroke-linecap="round" stroke-linejoin="round" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_222_514">
                                                <rect width="12" height="12" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <p class="p-water m-0">Water</p>
                                    <div class="d-flex align-items-center ms-auto">
                                        <p class="p-crd-home mb-0">Daily Week</p>
                                    </div>
                                </div>
                                <div class="water-container position-relative">
                                    <div class="water-slide position-absolute">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-6"></div>
                        <div class="card-6"></div>
                        <div class="card-6"></div>
                    </div>
                </div>
                <div class="wrapper-report-home">
                    <div class="d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <path
                                d="M0 3.75C0 3.33579 0.335786 3 0.75 3H3C3.34415 3 3.64414 3.23422 3.72761 3.5681L4.33558 6H21.75C21.981 6 22.199 6.1064 22.3412 6.28844C22.4833 6.47048 22.5336 6.70785 22.4776 6.9319L20.2276 15.9319C20.1441 16.2658 19.8442 16.5 19.5 16.5H6C5.65585 16.5 5.35586 16.2658 5.27239 15.9319L2.41442 4.5H0.75C0.335786 4.5 0 4.16421 0 3.75ZM4.71058 7.5L5.46058 10.5H7.5V7.5H4.71058ZM9 7.5V10.5H12V7.5H9ZM13.5 7.5V10.5H16.5V7.5H13.5ZM18 7.5V10.5H20.0394L20.7894 7.5H18ZM19.6644 12H18V15H18.9144L19.6644 12ZM16.5 12H13.5V15H16.5V12ZM12 12H9V15H12V12ZM7.5 12H5.83558L6.58558 15H7.5V12ZM7.5 19.5C6.67157 19.5 6 20.1716 6 21C6 21.8284 6.67157 22.5 7.5 22.5C8.32843 22.5 9 21.8284 9 21C9 20.1716 8.32843 19.5 7.5 19.5ZM4.5 21C4.5 19.3431 5.84315 18 7.5 18C9.15685 18 10.5 19.3431 10.5 21C10.5 22.6569 9.15685 24 7.5 24C5.84315 24 4.5 22.6569 4.5 21ZM18 19.5C17.1716 19.5 16.5 20.1716 16.5 21C16.5 21.8284 17.1716 22.5 18 22.5C18.8284 22.5 19.5 21.8284 19.5 21C19.5 20.1716 18.8284 19.5 18 19.5ZM15 21C15 19.3431 16.3431 18 18 18C19.6569 18 21 19.3431 21 21C21 22.6569 19.6569 24 18 24C16.3431 24 15 22.6569 15 21Z"
                                fill="black" />
                        </svg>
                        <h6 class="fw-bold mb-0 mx-2">Shopping List</h6>
                    </div>
                </div>
                <div class="wrapper-daily-home">
                    <div class="d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <path
                                d="M3 2V9C3 10.1 3.9 11 5 11H9C9.53043 11 10.0391 10.7893 10.4142 10.4142C10.7893 10.0391 11 9.53043 11 9V2"
                                stroke="black" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M7 2V22" stroke="black" stroke-width="1.66667" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M21 15V2C19.6739 2 18.4021 2.52678 17.4645 3.46447C16.5268 4.40215 16 5.67392 16 7V13C16 14.1 16.9 15 18 15H21ZM21 15V22"
                                stroke="black" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <h6 class="fw-bold mb-0 mx-2">Daily Intake</h6>
                    </div>
                </div>
                <div class="wrapper-daily-home">
                    <div class="d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <path
                                d="M22 12H19.52C19.083 11.9991 18.6577 12.1413 18.3091 12.405C17.9606 12.6686 17.708 13.0392 17.59 13.46L15.24 21.82C15.2249 21.8719 15.1933 21.9175 15.15 21.95C15.1067 21.9825 15.0541 22 15 22C14.9459 22 14.8933 21.9825 14.85 21.95C14.8067 21.9175 14.7751 21.8719 14.76 21.82L9.24 2.18C9.22485 2.12807 9.19327 2.08246 9.15 2.05C9.10673 2.01754 9.05409 2 9 2C8.94591 2 8.89327 2.01754 8.85 2.05C8.80673 2.08246 8.77515 2.12807 8.76 2.18L6.41 10.54C6.29246 10.9592 6.04138 11.3285 5.69486 11.592C5.34835 11.8555 4.92532 11.9988 4.49 12H2"
                                stroke="black" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <h6 class="fw-bold mb-0 mx-2">Activity</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-2 pb-5 border">
        <div class="wrapper-home1">

        </div>
    </div>
@endsection
