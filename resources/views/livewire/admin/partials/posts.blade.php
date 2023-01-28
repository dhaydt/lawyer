<div class="tab-pane fade" id="kt_general_widget_1_5">
    <!--begin::Tables Widget 1-->
    <div class="card">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold fs-3 mb-1 text-capitalize">Latest Added posts & journals</span>
                {{-- <span class="text-muted fw-semibold fs-7">Pending 10
                    tasks</span> --}}
            </h3>
            <div class="card-toolbar">
                <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary fw-bold px-4 me-1" href="{{ route('admin.content.list') }}" aria-selected="true" tabindex="-1"
                    role="tab">View all</a>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body py-3">
            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table class="table align-middle gs-0 gy-5">
                    <!--begin::Table head-->
                    <thead>
                        <tr>
                            <th class="p-0 w-50px"></th>
                            <th class="p-0 min-w-200px"></th>
                            <th class="p-0 min-w-100px"></th>
                            <th class="p-0 min-w-40px"></th>
                        </tr>
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody>
                        <tr>
                            <th>
                                <div class="symbol symbol-50px me-2">
                                    <span class="symbol-label">
                                        <img src="{{ asset('assets_metronic/media/svg/brand-logos/plurk.svg') }}"
                                            class="h-50 align-self-center" alt="" />
                                    </span>
                                </div>
                            </th>
                            <td>
                                <a href="#"
                                    class="text-dark fw-bold text-hover-primary mb-1 fs-6">Top
                                    Authors</a>
                                <span class="text-muted fw-semibold d-block fs-7">Successful
                                    Fellas</span>
                            </td>
                            <td>
                                <div class="d-flex flex-column w-100 me-2">
                                    <div class="d-flex flex-stack mb-2">
                                        <span class="text-muted me-2 fs-7 fw-bold">70%</span>
                                    </div>
                                    <div class="progress h-6px w-100">
                                        <div class="progress-bar bg-primary" role="progressbar"
                                            style="width: 70%" aria-valuenow="70"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-end">
                                <a href="#"
                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.5" x="18" y="13" width="13"
                                                height="2" rx="1" transform="rotate(-180 18 13)"
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
                            <th>
                                <div class="symbol symbol-50px me-2">
                                    <span class="symbol-label">
                                        <img src="{{ asset('assets_metronic/media/svg/brand-logos/telegram.svg') }}"
                                            class="h-50 align-self-center" alt="" />
                                    </span>
                                </div>
                            </th>
                            <td>
                                <a href="#"
                                    class="text-dark fw-bold text-hover-primary mb-1 fs-6">Popular
                                    Authors</a>
                                <span class="text-muted fw-semibold d-block fs-7">Most
                                    Successful</span>
                            </td>
                            <td>
                                <div class="d-flex flex-column w-100 me-2">
                                    <div class="d-flex flex-stack mb-2">
                                        <span class="text-muted me-2 fs-7 fw-bold">50%</span>
                                    </div>
                                    <div class="progress h-6px w-100">
                                        <div class="progress-bar bg-primary" role="progressbar"
                                            style="width: 50%" aria-valuenow="50"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-end">
                                <a href="#"
                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.5" x="18" y="13" width="13"
                                                height="2" rx="1" transform="rotate(-180 18 13)"
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
                            <th>
                                <div class="symbol symbol-50px me-2">
                                    <span class="symbol-label">
                                        <img src="{{ asset('assets_metronic/media/svg/brand-logos/vimeo.svg') }}"
                                            class="h-50 align-self-center" alt="" />
                                    </span>
                                </div>
                            </th>
                            <td>
                                <a href="#"
                                    class="text-dark fw-bold text-hover-primary mb-1 fs-6">New
                                    Users</a>
                                <span class="text-muted fw-semibold d-block fs-7">Awesome
                                    Users</span>
                            </td>
                            <td>
                                <div class="d-flex flex-column w-100 me-2">
                                    <div class="d-flex flex-stack mb-2">
                                        <span class="text-muted me-2 fs-7 fw-bold">80%</span>
                                    </div>
                                    <div class="progress h-6px w-100">
                                        <div class="progress-bar bg-primary" role="progressbar"
                                            style="width: 80%" aria-valuenow="80"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-end">
                                <a href="#"
                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.5" x="18" y="13" width="13"
                                                height="2" rx="1" transform="rotate(-180 18 13)"
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
                            <th>
                                <div class="symbol symbol-50px me-2">
                                    <span class="symbol-label">
                                        <img src="{{ asset('assets_metronic/media/svg/brand-logos/bebo.svg') }}"
                                            class="h-50 align-self-center" alt="" />
                                    </span>
                                </div>
                            </th>
                            <td>
                                <a href="#"
                                    class="text-dark fw-bold text-hover-primary mb-1 fs-6">Active
                                    Customers</a>
                                <span class="text-muted fw-semibold d-block fs-7">Best
                                    Customers</span>
                            </td>
                            <td>
                                <div class="d-flex flex-column w-100 me-2">
                                    <div class="d-flex flex-stack mb-2">
                                        <span class="text-muted me-2 fs-7 fw-bold">90%</span>
                                    </div>
                                    <div class="progress h-6px w-100">
                                        <div class="progress-bar bg-primary" role="progressbar"
                                            style="width: 90%" aria-valuenow="90"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-end">
                                <a href="#"
                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.5" x="18" y="13" width="13"
                                                height="2" rx="1" transform="rotate(-180 18 13)"
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
                            <th>
                                <div class="symbol symbol-50px me-2">
                                    <span class="symbol-label">
                                        <img src="{{ asset('assets_metronic/media/svg/brand-logos/kickstarter.svg') }}"
                                            class="h-50 align-self-center" alt="" />
                                    </span>
                                </div>
                            </th>
                            <td>
                                <a href="#"
                                    class="text-dark fw-bold text-hover-primary mb-1 fs-6">Bestseller
                                    Theme</a>
                                <span class="text-muted fw-semibold d-block fs-7">Amazing
                                    Templates</span>
                            </td>
                            <td>
                                <div class="d-flex flex-column w-100 me-2">
                                    <div class="d-flex flex-stack mb-2">
                                        <span class="text-muted me-2 fs-7 fw-bold">70%</span>
                                    </div>
                                    <div class="progress h-6px w-100">
                                        <div class="progress-bar bg-primary" role="progressbar"
                                            style="width: 70%" aria-valuenow="70"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-end">
                                <a href="#"
                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.5" x="18" y="13" width="13"
                                                height="2" rx="1" transform="rotate(-180 18 13)"
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
                <!--end::Table-->
            </div>
            <!--end::Table container-->
        </div>
        <!--end::Body-->
    </div>
    <!--endW::Tables Widget 1-->
</div>
