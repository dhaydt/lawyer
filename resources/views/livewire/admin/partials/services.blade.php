<div class="tab-pane fade" id="kt_general_widget_1_2">
    <!--begin::Tables Widget 3-->
    <div class="card">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold fs-3 mb-1 text-capitalize">last added legal services</span>
                {{-- <span class="text-muted mt-1 fw-semibold fs-7">Over 100 pending
                    files
                </span> --}}
            </h3>
            <div class="card-toolbar">
                <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary fw-bold px-4 me-1" href="{{ route('admin.services.list') }}" aria-selected="true" tabindex="-1"
                    role="tab">View all</a>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body py-3">
            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table class="table align-middle gs-0 gy-3">
                    <!--begin::Table head-->
                    <thead>
                        <tr>
                            <th class="p-0 w-50px"></th>
                            <th class="p-0 min-w-150px"></th>
                            <th class="p-0 min-w-140px"></th>
                            <th class="p-0 min-w-120px"></th>
                            <th class="p-0 min-w-40px"></th>
                        </tr>
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody>
                        @foreach ($services as $s)
                        <tr>
                            <td>
                                <div class="symbol symbol-50px me-2">
                                    <span class="symbol-label bg-light-success">
                                        <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                                        <span class="svg-icon svg-icon-2x svg-icon-success">
                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z"
                                                    fill="currentColor" />
                                                <path opacity="0.3"
                                                    d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z"
                                                    fill="currentColor" />
                                                <path opacity="0.3"
                                                    d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                </div>
                            </td>
                            <td>
                                <a href="#"
                                    class="text-dark fw-bold text-hover-primary mb-1 fs-6">Top
                                    Authors</a>
                            </td>
                            <td class="text-end text-muted fw-bold">ReactJs,
                                HTML</td>
                            <td class="text-end text-muted fw-bold">4600 Users
                            </td>
                            <td class="text-end text-dark fw-bold fs-6 pe-0">
                                5.4MB</td>
                        </tr>
                        @endforeach
                    </tbody>
                    <!--end::Table body-->
                </table>
                <!--end::Table-->
            </div>
            <!--end::Table container-->
        </div>
        <!--begin::Body-->
    </div>
    <!--end::Tables Widget 3-->
</div>
