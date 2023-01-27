<div class="tab-pane fade" id="kt_general_widget_1_1">
    <!--begin::Tables Widget 2-->
    <div class="card">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold fs-3 mb-1">Latest
                    Arrivals</span>
                <span class="text-muted mt-1 fw-semibold fs-7">More than 100 new
                    products</span>
            </h3>
            <div class="card-toolbar">
                <!--begin::Menu-->
                <button type="button"
                    class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                    <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                            viewBox="0 0 24 24">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="5" y="5" width="5" height="5" rx="1"
                                    fill="currentColor" />
                                <rect x="14" y="5" width="5" height="5" rx="1"
                                    fill="currentColor" opacity="0.3" />
                                <rect x="5" y="14" width="5" height="5" rx="1"
                                    fill="currentColor" opacity="0.3" />
                                <rect x="14" y="14" width="5" height="5" rx="1"
                                    fill="currentColor" opacity="0.3" />
                            </g>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </button>
                <!--begin::Menu 1-->
                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px"
                    data-kt-menu="true" id="kt_menu_6332a6a1ee144">
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
                                <select class="form-select form-select-solid"
                                    data-kt-select2="true" data-placeholder="Select option"
                                    data-dropdown-parent="#kt_menu_6332a6a1ee144"
                                    data-allow-clear="true">
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
                            <label class="form-label fw-semibold">Member
                                Type:</label>
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
                                <label
                                    class="form-check form-check-sm form-check-custom form-check-solid">
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
                            <button type="reset"
                                class="btn btn-sm btn-light btn-active-light-primary me-2"
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
        <div class="card-body py-3">
            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table class="table align-middle gs-0 gy-5">
                    <!--begin::Table head-->
                    <thead>
                        <tr>
                            <th class="p-0 w-50px"></th>
                            <th class="p-0 min-w-150px"></th>
                            <th class="p-0 min-w-150px"></th>
                            <th class="p-0 min-w-125px"></th>
                            <th class="p-0 min-w-40px"></th>
                        </tr>
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody>
                        <tr>
                            <td>
                                <div class="symbol symbol-50px me-2">
                                    <span class="symbol-label">
                                        <img src="{{ asset('assets_metronic/media/svg/brand-logos/plurk.svg') }}"
                                            class="h-50 align-self-center" alt="" />
                                    </span>
                                </div>
                            </td>
                            <td>
                                <a href="#"
                                    class="text-dark fw-bold text-hover-primary mb-1 fs-6">Top
                                    Authors</a>
                                <span class="text-muted fw-semibold d-block fs-7">Successful
                                    Fellas</span>
                            </td>
                            <td class="text-end">
                                <span
                                    class="badge badge-light-danger fw-semibold me-1">Angular</span>
                                <span class="badge badge-light-info fw-semibold me-1">PHP</span>
                            </td>
                            <td class="text-end">
                                <span class="text-muted fw-bold">4600
                                    Users</span>
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
                            <td>
                                <div class="symbol symbol-50px me-2">
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
                                <span class="text-muted fw-semibold d-block fs-7">Most
                                    Successful</span>
                            </td>
                            <td class="text-end">
                                <span
                                    class="badge badge-light-danger fw-semibold me-1">HTML</span>
                                <span class="badge badge-light-info fw-semibold me-1">CSS</span>
                            </td>
                            <td class="text-end">
                                <span class="text-muted fw-bold">7200
                                    Users</span>
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
                            <td>
                                <div class="symbol symbol-50px me-2">
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
                                <span class="text-muted fw-semibold d-block fs-7">Awesome
                                    Users</span>
                            </td>
                            <td class="text-end">
                                <span
                                    class="badge badge-light-danger fw-semibold me-1">React</span>
                                <span
                                    class="badge badge-light-info fw-semibold me-1">SASS</span>
                            </td>
                            <td class="text-end">
                                <span class="text-muted fw-bold">890
                                    Users</span>
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
                            <td>
                                <div class="symbol symbol-50px me-2">
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
                                <span class="text-muted fw-semibold d-block fs-7">Best
                                    Customers</span>
                            </td>
                            <td class="text-end">
                                <span
                                    class="badge badge-light-danger fw-semibold me-1">Java</span>
                                <span class="badge badge-light-info fw-semibold me-1">PHP</span>
                            </td>
                            <td class="text-end">
                                <span class="text-muted fw-bold">6370
                                    Users</span>
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
                            <td>
                                <div class="symbol symbol-50px me-2">
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
                                <span class="text-muted fw-semibold d-block fs-7">Amazing
                                    Templates</span>
                            </td>
                            <td class="text-end">
                                <span
                                    class="badge badge-light-danger fw-semibold me-1">Python</span>
                                <span
                                    class="badge badge-light-info fw-semibold me-1">MySQL</span>
                            </td>
                            <td class="text-end">
                                <span class="text-muted fw-bold">354
                                    Users</span>
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
    <!--end::Tables Widget 2-->
</div>
