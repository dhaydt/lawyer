<div class="tab-pane fade show active" id="kt_general_widget_1_3">
    <!--begin::Tables Widget 5-->
    <div class="card">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold fs-3 mb-1 text-capitalize">Latest
                    Announcement</span>
                {{-- <span class="text-muted mt-1 fw-semibold fs-7">More than 400 new
                    products</span> --}}
            </h3>
            <div class="card-toolbar">
                <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary fw-bold px-4 me-1" href="{{ route('admin.pengumuman') }}" aria-selected="true" tabindex="-1"
                    role="tab">View all</a>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body py-3">
            <div class="tab-content">
                <!--begin::Tap pane-->
                <div class="tab-pane fade show active" id="kt_table_widget_5_tab_1">
                    <!--begin::Table container-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table
                            class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                            <!--begin::Table head-->
                            <thead>
                                <tr class="border-0">
                                    <th class="p-0 w-50px"></th>
                                    <th class="p-0 min-w-150px"></th>
                                    <th class="p-0 min-w-140px"></th>
                                    <th class="p-0 min-w-110px"></th>
                                    <th class="p-0 min-w-50px"></th>
                                </tr>
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="symbol symbol-45px me-2">
                                            <span class="symbol-label">
                                                <img src="{{ asset('assets_metronic/media/svg/brand-logos/plurk.svg') }}"
                                                    class="h-50 align-self-center" alt="" />
                                            </span>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-dark fw-bold text-hover-primary mb-1 fs-6">Brad
                                            Simmons</a>
                                        <span class="text-muted fw-semibold d-block">Movie
                                            Creator</span>
                                    </td>
                                    <td class="text-end text-muted fw-bold">
                                        React, HTML</td>
                                    <td class="text-end">
                                        <span class="badge badge-light-success">Approved</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.5" x="18" y="13" width="13"
                                                        height="2" rx="1"
                                                        transform="rotate(-180 18 13)"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="symbol symbol-45px me-2">
                                            <span class="symbol-label">
                                                <img src="{{ asset('assets_metronic/media/svg/brand-logos/telegram.svg') }}"
                                                    class="h-50 align-self-center" alt="" />
                                            </span>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-dark fw-bold text-hover-primary mb-1 fs-6">Popular
                                            Authors</a>
                                        <span class="text-muted fw-semibold d-block">Most
                                            Successful</span>
                                    </td>
                                    <td class="text-end text-muted fw-bold">
                                        Python, MySQL</td>
                                    <td class="text-end">
                                        <span class="badge badge-light-warning">In
                                            Progress</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.5" x="18" y="13" width="13"
                                                        height="2" rx="1"
                                                        transform="rotate(-180 18 13)"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="symbol symbol-45px me-2">
                                            <span class="symbol-label">
                                                <img src="{{ asset('assets_metronic/media/svg/brand-logos/vimeo.svg') }}"
                                                    class="h-50 align-self-center" alt="" />
                                            </span>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-dark fw-bold text-hover-primary mb-1 fs-6">New
                                            Users</a>
                                        <span class="text-muted fw-semibold d-block">Awesome
                                            Users</span>
                                    </td>
                                    <td class="text-end text-muted fw-bold">
                                        Laravel,Metronic</td>
                                    <td class="text-end">
                                        <span class="badge badge-light-primary">Success</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.5" x="18" y="13" width="13"
                                                        height="2" rx="1"
                                                        transform="rotate(-180 18 13)"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="symbol symbol-45px me-2">
                                            <span class="symbol-label">
                                                <img src="{{ asset('assets_metronic/media/svg/brand-logos/bebo.svg') }}"
                                                    class="h-50 align-self-center" alt="" />
                                            </span>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-dark fw-bold text-hover-primary mb-1 fs-6">Active
                                            Customers</a>
                                        <span class="text-muted fw-semibold d-block">Movie
                                            Creator</span>
                                    </td>
                                    <td class="text-end text-muted fw-bold">
                                        AngularJS, C#</td>
                                    <td class="text-end">
                                        <span class="badge badge-light-danger">Rejected</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.5" x="18" y="13" width="13"
                                                        height="2" rx="1"
                                                        transform="rotate(-180 18 13)"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="symbol symbol-45px me-2">
                                            <span class="symbol-label">
                                                <img src="{{ asset('assets_metronic/media/svg/brand-logos/kickstarter.svg') }}"
                                                    class="h-50 align-self-center" alt="" />
                                            </span>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#"
                                            class="text-dark fw-bold text-hover-primary mb-1 fs-6">Bestseller
                                            Theme</a>
                                        <span class="text-muted fw-semibold d-block">Best
                                            Customers</span>
                                    </td>
                                    <td class="text-end text-muted fw-bold">
                                        ReactJS, Ruby</td>
                                    <td class="text-end">
                                        <span class="badge badge-light-warning">In
                                            Progress</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.5" x="18" y="13" width="13"
                                                        height="2" rx="1"
                                                        transform="rotate(-180 18 13)"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                            <!--end::Table body-->
                        </table>
                    </div>
                    <!--end::Table-->
                </div>
            </div>
        </div>
        <!--end::Body-->
    </div>
    <!--end::Tables Widget 5-->
</div>
