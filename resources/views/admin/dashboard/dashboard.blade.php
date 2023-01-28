@extends('layout.backend.app')

@section('content')
<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
    <div class="content flex-row-fluid" id="kt_content">
        <!--begin::Row-->
        <div class="row gy-0 gx-10">
            <!--begin::Col-->
            <div class="col-xl-8">
                <div class="mb-10">
                    <!--begin::Tabs-->
                    <ul class="nav row mb-10">
                        <li class="nav-item col-12 col-lg mb-5 mb-lg-0">
                            <a class="nav-link btn btn-flex btn-color-muted btn-outline btn-outline-default btn-active-danger d-flex flex-grow-1 flex-column flex-center py-5 h-1250px h-lg-175px"
                                data-bs-toggle="tab" href="#kt_general_widget_1_1">
                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                <span class="svg-icon svg-icon-3x mb-5 mx-0">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3"
                                            d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                            fill="currentColor" />
                                        <path
                                            d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <span class="fs-6 fw-bold">Gallery</span>
                            </a>
                        </li>
                        <li class="nav-item col-12 col-lg mb-5 mb-lg-0">
                            <a class="nav-link btn btn-flex btn-color-muted btn-outline btn-outline-default btn-active-danger d-flex flex-grow-1 flex-column flex-center py-5 h-1250px h-lg-175px"
                                data-bs-toggle="tab" href="#kt_general_widget_1_2">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen008.svg-->
                                <span class="svg-icon svg-icon-3x mb-5 mx-0">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3 2H10C10.6 2 11 2.4 11 3V10C11 10.6 10.6 11 10 11H3C2.4 11 2 10.6 2 10V3C2 2.4 2.4 2 3 2Z"
                                            fill="currentColor" />
                                        <path opacity="0.3"
                                            d="M14 2H21C21.6 2 22 2.4 22 3V10C22 10.6 21.6 11 21 11H14C13.4 11 13 10.6 13 10V3C13 2.4 13.4 2 14 2Z"
                                            fill="currentColor" />
                                        <path opacity="0.3"
                                            d="M3 13H10C10.6 13 11 13.4 11 14V21C11 21.6 10.6 22 10 22H3C2.4 22 2 21.6 2 21V14C2 13.4 2.4 13 3 13Z"
                                            fill="currentColor" />
                                        <path opacity="0.3"
                                            d="M14 13H21C21.6 13 22 13.4 22 14V21C22 21.6 21.6 22 21 22H14C13.4 22 13 21.6 13 21V14C13 13.4 13.4 13 14 13Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <span class="fs-6 fw-bold">Legal
                                    <br />Services</span>
                            </a>
                        </li>
                        <li class="nav-item col-12 col-lg mb-5 mb-lg-0">
                            <a class="nav-link btn btn-flex btn-color-muted btn-outline btn-outline-default btn-active-danger d-flex flex-grow-1 flex-column flex-center py-5 h-1250px h-lg-175px active"
                                data-bs-toggle="tab" href="#kt_general_widget_1_3">
                                <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                                <span class="svg-icon svg-icon-3x mb-5 mx-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <path d="M12.9975507,17.929461 C12.9991745,17.9527631 13,17.9762852 13,18 L13,21 C13,21.5522847 12.5522847,22 12,22 C11.4477153,22 11,21.5522847 11,21 L11,18 C11,17.9762852 11.0008255,17.9527631 11.0024493,17.929461 C7.60896116,17.4452857 5,14.5273206 5,11 L7,11 C7,13.7614237 9.23857625,16 12,16 C14.7614237,16 17,13.7614237 17,11 L19,11 C19,14.5273206 16.3910388,17.4452857 12.9975507,17.929461 Z" fill="#000000" fill-rule="nonzero"/>
                                            <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 8.000000) rotate(-360.000000) translate(-12.000000, -8.000000) " x="9" y="2" width="6" height="12" rx="3"/>
                                        </g>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <span class="fs-6 fw-bold">Announcement</span>
                            </a>
                        </li>
                        <li class="nav-item col-12 col-lg mb-5 mb-lg-0">
                            <a class="nav-link btn btn-flex btn-color-muted btn-outline btn-outline-default btn-active-danger d-flex flex-grow-1 flex-column flex-center py-5 h-1250px h-lg-175px"
                                data-bs-toggle="tab" href="#kt_general_widget_1_4">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                                <span class="svg-icon svg-icon-3x mb-5 mx-0">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="8" y="9" width="3" height="10" rx="1.5" fill="currentColor" />
                                        <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5"
                                            fill="currentColor" />
                                        <rect x="18" y="11" width="3" height="8" rx="1.5" fill="currentColor" />
                                        <rect x="3" y="13" width="3" height="6" rx="1.5" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <span class="fs-6 fw-bold">Applied
                                    <br />Jobs</span>
                            </a>
                        </li>
                        <li class="nav-item col-12 col-lg mb-5 mb-lg-0">
                            <a class="nav-link btn btn-flex btn-color-muted btn-outline btn-outline-default btn-active-danger d-flex flex-grow-1 flex-column flex-center py-5 h-1250px h-lg-175px"
                                data-bs-toggle="tab" href="#kt_general_widget_1_5">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen048.svg-->
                                <span class="svg-icon svg-icon-3x mb-5 mx-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <path d="M3,4 L20,4 C20.5522847,4 21,4.44771525 21,5 L21,7 C21,7.55228475 20.5522847,8 20,8 L3,8 C2.44771525,8 2,7.55228475 2,7 L2,5 C2,4.44771525 2.44771525,4 3,4 Z M3,10 L13,10 C13.5522847,10 14,10.4477153 14,11 L14,13 C14,13.5522847 13.5522847,14 13,14 L3,14 C2.44771525,14 2,13.5522847 2,13 L2,11 C2,10.4477153 2.44771525,10 3,10 Z M3,16 L13,16 C13.5522847,16 14,16.4477153 14,17 L14,19 C14,19.5522847 13.5522847,20 13,20 L3,20 C2.44771525,20 2,19.5522847 2,19 L2,17 C2,16.4477153 2.44771525,16 3,16 Z" fill="#a1a5b7"/>
                                            <rect fill="#000000" opacity="0.2" x="16" y="10" width="5" height="10" rx="1"/>
                                        </g>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <span class="fs-6 fw-bold">Post &
                                    <br />Journals</span>
                            </a>
                        </li>
                    </ul>
                    <!--begin::Tab content-->
                    <div class="tab-content">
                        @livewire('admin.partials.gallery')
                        @livewire('admin.partials.services')
                        @livewire('admin.partials.announcement')
                        @livewire('admin.partials.applied')
                        @livewire('admin.partials.posts')
                    </div>
                    <!--end::Tab content-->
                </div>
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-xl-4">
                <div class="card mb-10">
                    <!--begin::Header-->
                    <div class="card-header border-0 bg-success py-5">
                        <h3 class="card-title fw-bold text-white">Sales Progress</h3>
                        <div class="card-toolbar">
                            <!--begin::Menu-->
                            <button type="button"
                                class="btn btn-sm btn-icon btn-color-white btn-active-white btn-active-color- border-0 me-n3"
                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                <span class="svg-icon svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                        viewBox="0 0 24 24">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
                                            <rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor"
                                                opacity="0.3" />
                                            <rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor"
                                                opacity="0.3" />
                                            <rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor"
                                                opacity="0.3" />
                                        </g>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </button>
                            <!--begin::Menu 3-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                                data-kt-menu="true">
                                <!--begin::Heading-->
                                <div class="menu-item px-3">
                                    <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                        Payments</div>
                                </div>
                                <!--end::Heading-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Create Invoice</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link flex-stack px-3">Create Payment
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Specify a target name for future usage and reference"></i></a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Generate Bill</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                    data-kt-menu-placement="right-end">
                                    <a href="#" class="menu-link px-3">
                                        <span class="menu-title">Subscription</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <!--begin::Menu sub-->
                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Plans</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Billing</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Statements</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator my-2"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3">
                                                <!--begin::Switch-->
                                                <label
                                                    class="form-check form-switch form-check-custom form-check-solid">
                                                    <!--begin::Input-->
                                                    <input class="form-check-input w-30px h-20px" type="checkbox"
                                                        value="1" checked="checked" name="notifications" />
                                                    <!--end::Input-->
                                                    <!--end::Label-->
                                                    <span class="form-check-label text-muted fs-6">Recuring</span>
                                                    <!--end::Label-->
                                                </label>
                                                <!--end::Switch-->
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu sub-->
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3 my-1">
                                    <a href="#" class="menu-link px-3">Settings</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu 3-->
                            <!--end::Menu-->
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body p-0">
                        <!--begin::Chart-->
                        <div class="mixed-widget-12-chart card-rounded-bottom bg-success" data-kt-color="success"
                            style="height: 250px"></div>
                        <!--end::Chart-->
                        <!--begin::Stats-->
                        <div class="card-rounded bg-body mt-n10 position-relative card-px py-15">
                            <!--begin::Row-->
                            <div class="row g-0 mb-7">
                                <!--begin::Col-->
                                <div class="col mx-5">
                                    <div class="fs-6 text-gray-400">Avarage Sale</div>
                                    <div class="fs-2 fw-bold text-gray-800">$650</div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col mx-5">
                                    <div class="fs-6 text-gray-400">Comissions</div>
                                    <div class="fs-2 fw-bold text-gray-800">$29,500</div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                            <!--begin::Row-->
                            <div class="row g-0">
                                <!--begin::Col-->
                                <div class="col mx-5">
                                    <div class="fs-6 text-gray-400">Revenue</div>
                                    <div class="fs-2 fw-bold text-gray-800">$55,000</div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col mx-5">
                                    <div class="fs-6 text-gray-400">Expenses</div>
                                    <div class="fs-2 fw-bold text-gray-800">$1,130,600</div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Stats-->
                    </div>
                    <!--end::Body-->
                </div>

                {{-- <div class="card mb-10">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold text-dark">Trends</span>
                            <span class="text-muted mt-1 fw-semibold fs-7">Latest tech trends</span>
                        </h3>
                        <div class="card-toolbar">
                            <!--begin::Menu-->
                            <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                <span class="svg-icon svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                        viewBox="0 0 24 24">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
                                            <rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor"
                                                opacity="0.3" />
                                            <rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor"
                                                opacity="0.3" />
                                            <rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor"
                                                opacity="0.3" />
                                        </g>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </button>
                            <!--begin::Menu 3-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                                data-kt-menu="true">
                                <!--begin::Heading-->
                                <div class="menu-item px-3">
                                    <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                        Payments</div>
                                </div>
                                <!--end::Heading-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Create Invoice</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link flex-stack px-3">Create Payment
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            title="Specify a target name for future usage and reference"></i></a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Generate Bill</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                    data-kt-menu-placement="right-end">
                                    <a href="#" class="menu-link px-3">
                                        <span class="menu-title">Subscription</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <!--begin::Menu sub-->
                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Plans</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Billing</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Statements</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator my-2"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3">
                                                <!--begin::Switch-->
                                                <label
                                                    class="form-check form-switch form-check-custom form-check-solid">
                                                    <!--begin::Input-->
                                                    <input class="form-check-input w-30px h-20px" type="checkbox"
                                                        value="1" checked="checked" name="notifications" />
                                                    <!--end::Input-->
                                                    <!--end::Label-->
                                                    <span class="form-check-label text-muted fs-6">Recuring</span>
                                                    <!--end::Label-->
                                                </label>
                                                <!--end::Switch-->
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu sub-->
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3 my-1">
                                    <a href="#" class="menu-link px-3">Settings</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu 3-->
                            <!--end::Menu-->
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-5">
                        <!--begin::Item-->
                        <div class="d-flex align-items-sm-center mb-7">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-50px me-5">
                                <span class="symbol-label">
                                    <img src="{{ asset('assets_metronic/media/svg/brand-logos/plurk.svg') }}" class="h-50 align-self-center"
                                        alt="" />
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Section-->
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                <div class="flex-grow-1 me-2">
                                    <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Top
                                        Authors</a>
                                    <span class="text-muted fw-semibold d-block fs-7">Mark, Rowling,
                                        Esther</span>
                                </div>
                                <span class="badge badge-light fw-bold my-2">+82$</span>
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-sm-center mb-7">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-50px me-5">
                                <span class="symbol-label">
                                    <img src="{{ asset('assets_metronic/media/svg/brand-logos/telegram.svg') }}" class="h-50 align-self-center"
                                        alt="" />
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Section-->
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                <div class="flex-grow-1 me-2">
                                    <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Popular
                                        Authors</a>
                                    <span class="text-muted fw-semibold d-block fs-7">Randy, Steve,
                                        Mike</span>
                                </div>
                                <span class="badge badge-light fw-bold my-2">+280$</span>
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-sm-center mb-7">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-50px me-5">
                                <span class="symbol-label">
                                    <img src="{{ asset('assets_metronic/media/svg/brand-logos/vimeo.svg') }}" class="h-50 align-self-center"
                                        alt="" />
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Section-->
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                <div class="flex-grow-1 me-2">
                                    <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">New
                                        Users</a>
                                    <span class="text-muted fw-semibold d-block fs-7">John, Pat,
                                        Jimmy</span>
                                </div>
                                <span class="badge badge-light fw-bold my-2">+4500$</span>
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-sm-center mb-7">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-50px me-5">
                                <span class="symbol-label">
                                    <img src="{{ asset('assets_metronic/media/svg/brand-logos/bebo.svg') }}" class="h-50 align-self-center"
                                        alt="" />
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Section-->
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                <div class="flex-grow-1 me-2">
                                    <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Active
                                        Customers</a>
                                    <span class="text-muted fw-semibold d-block fs-7">Mark, Rowling,
                                        Esther</span>
                                </div>
                                <span class="badge badge-light fw-bold my-2">+686$</span>
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-sm-center mb-7">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-50px me-5">
                                <span class="symbol-label">
                                    <img src="{{ asset('assets_metronic/media/svg/brand-logos/kickstarter.svg') }}"
                                        class="h-50 align-self-center" alt="" />
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Section-->
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                <div class="flex-grow-1 me-2">
                                    <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Bestseller
                                        Theme</a>
                                    <span class="text-muted fw-semibold d-block fs-7">Disco, Retro,
                                        Sports</span>
                                </div>
                                <span class="badge badge-light fw-bold my-2">+726$</span>
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-sm-center">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-50px me-5">
                                <span class="symbol-label">
                                    <img src="{{ asset('assets_metronic/media/svg/brand-logos/fox-hub.svg') }}" class="h-50 align-self-center"
                                        alt="" />
                                </span>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Section-->
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                <div class="flex-grow-1 me-2">
                                    <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Fox Broker
                                        App</a>
                                    <span class="text-muted fw-semibold d-block fs-7">Finance,
                                        Corporate, Apps</span>
                                </div>
                                <span class="badge badge-light fw-bold my-2">+145$</span>
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Item-->
                    </div>
                    <!--end::Body-->
                </div> --}}
                {{-- <div class="card mb-10">
                    <!--begin::Header-->
                    <div class="card-header align-items-center border-0 mt-4">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="fw-bold mb-2 text-dark">Activities</span>
                            <span class="text-muted fw-semibold fs-7">890,344 Sales</span>
                        </h3>
                        <div class="card-toolbar">
                            <!--begin::Menu-->
                            <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                <span class="svg-icon svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                        viewBox="0 0 24 24">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
                                            <rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor"
                                                opacity="0.3" />
                                            <rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor"
                                                opacity="0.3" />
                                            <rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor"
                                                opacity="0.3" />
                                        </g>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </button>
                            <!--begin::Menu 1-->
                            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                                id="kt_menu_6332a6a1ee70c">
                                <!--begin::Header-->
                                <div class="px-7 py-5">
                                    <div class="fs-5 text-dark fw-bold">Filter Options</div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Menu separator-->
                                <div class="separator border-gray-200"></div>
                                <!--end::Menu separator-->
                                <!--begin::Form-->
                                <div class="px-7 py-5">
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Status:</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <div>
                                            <select class="form-select form-select-solid" data-kt-select2="true"
                                                data-placeholder="Select option"
                                                data-dropdown-parent="#kt_menu_6332a6a1ee70c" data-allow-clear="true">
                                                <option></option>
                                                <option value="1">Approved</option>
                                                <option value="2">Pending</option>
                                                <option value="2">In Process</option>
                                                <option value="2">Rejected</option>
                                            </select>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Member Type:</label>
                                        <!--end::Label-->
                                        <!--begin::Options-->
                                        <div class="d-flex">
                                            <!--begin::Options-->
                                            <label
                                                class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                                <span class="form-check-label">Author</span>
                                            </label>
                                            <!--end::Options-->
                                            <!--begin::Options-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="2"
                                                    checked="checked" />
                                                <span class="form-check-label">Customer</span>
                                            </label>
                                            <!--end::Options-->
                                        </div>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Notifications:</label>
                                        <!--end::Label-->
                                        <!--begin::Switch-->
                                        <div
                                            class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value=""
                                                name="notifications" checked="checked" />
                                            <label class="form-check-label">Enabled</label>
                                        </div>
                                        <!--end::Switch-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="d-flex justify-content-end">
                                        <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2"
                                            data-kt-menu-dismiss="true">Reset</button>
                                        <button type="submit" class="btn btn-sm btn-primary"
                                            data-kt-menu-dismiss="true">Apply</button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Form-->
                            </div>
                            <!--end::Menu 1-->
                            <!--end::Menu-->
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-5">
                        <!--begin::Timeline-->
                        <div class="timeline-label">
                            <!--begin::Item-->
                            <div class="timeline-item">
                                <!--begin::Label-->
                                <div class="timeline-label fw-bold text-gray-800 fs-6">08:42</div>
                                <!--end::Label-->
                                <!--begin::Badge-->
                                <div class="timeline-badge">
                                    <i class="fa fa-genderless text-warning fs-1"></i>
                                </div>
                                <!--end::Badge-->
                                <!--begin::Text-->
                                <div class="fw-mormal timeline-content text-muted ps-3">Outlines keep
                                    you honest. And keep structure</div>
                                <!--end::Text-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="timeline-item">
                                <!--begin::Label-->
                                <div class="timeline-label fw-bold text-gray-800 fs-6">10:00</div>
                                <!--end::Label-->
                                <!--begin::Badge-->
                                <div class="timeline-badge">
                                    <i class="fa fa-genderless text-success fs-1"></i>
                                </div>
                                <!--end::Badge-->
                                <!--begin::Content-->
                                <div class="timeline-content d-flex">
                                    <span class="fw-bold text-gray-800 ps-3">AEOL meeting</span>
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="timeline-item">
                                <!--begin::Label-->
                                <div class="timeline-label fw-bold text-gray-800 fs-6">14:37</div>
                                <!--end::Label-->
                                <!--begin::Badge-->
                                <div class="timeline-badge">
                                    <i class="fa fa-genderless text-danger fs-1"></i>
                                </div>
                                <!--end::Badge-->
                                <!--begin::Desc-->
                                <div class="timeline-content fw-bold text-gray-800 ps-3">Make deposit
                                    <a href="#" class="text-primary">USD 700</a>. to ESL
                                </div>
                                <!--end::Desc-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="timeline-item">
                                <!--begin::Label-->
                                <div class="timeline-label fw-bold text-gray-800 fs-6">16:50</div>
                                <!--end::Label-->
                                <!--begin::Badge-->
                                <div class="timeline-badge">
                                    <i class="fa fa-genderless text-primary fs-1"></i>
                                </div>
                                <!--end::Badge-->
                                <!--begin::Text-->
                                <div class="timeline-content fw-mormal text-muted ps-3">Indulging in
                                    poorly driving and keep structure keep great</div>
                                <!--end::Text-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="timeline-item">
                                <!--begin::Label-->
                                <div class="timeline-label fw-bold text-gray-800 fs-6">21:03</div>
                                <!--end::Label-->
                                <!--begin::Badge-->
                                <div class="timeline-badge">
                                    <i class="fa fa-genderless text-danger fs-1"></i>
                                </div>
                                <!--end::Badge-->
                                <!--begin::Desc-->
                                <div class="timeline-content fw-semibold text-gray-800 ps-3">New order
                                    placed
                                    <a href="#" class="text-primary">#XF-2356</a>.
                                </div>
                                <!--end::Desc-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="timeline-item">
                                <!--begin::Label-->
                                <div class="timeline-label fw-bold text-gray-800 fs-6">16:50</div>
                                <!--end::Label-->
                                <!--begin::Badge-->
                                <div class="timeline-badge">
                                    <i class="fa fa-genderless text-primary fs-1"></i>
                                </div>
                                <!--end::Badge-->
                                <!--begin::Text-->
                                <div class="timeline-content fw-mormal text-muted ps-3">Indulging in
                                    poorly driving and keep structure keep great</div>
                                <!--end::Text-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="timeline-item">
                                <!--begin::Label-->
                                <div class="timeline-label fw-bold text-gray-800 fs-6">21:03</div>
                                <!--end::Label-->
                                <!--begin::Badge-->
                                <div class="timeline-badge">
                                    <i class="fa fa-genderless text-danger fs-1"></i>
                                </div>
                                <!--end::Badge-->
                                <!--begin::Desc-->
                                <div class="timeline-content fw-semibold text-gray-800 ps-3">New order
                                    placed
                                    <a href="#" class="text-primary">#XF-2356</a>.
                                </div>
                                <!--end::Desc-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="timeline-item mb-9">
                                <!--begin::Label-->
                                <div class="timeline-label fw-bold text-gray-800 fs-6">10:30</div>
                                <!--end::Label-->
                                <!--begin::Badge-->
                                <div class="timeline-badge">
                                    <i class="fa fa-genderless text-success fs-1"></i>
                                </div>
                                <!--end::Badge-->
                                <!--begin::Text-->
                                <div class="timeline-content fw-mormal text-muted ps-3">Finance KPI
                                    Mobile app launch preparion meeting</div>
                                <!--end::Text-->
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Timeline-->
                    </div>
                    <!--end: Card Body-->
                </div> --}}
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
    </div>
</div>
@endsection
