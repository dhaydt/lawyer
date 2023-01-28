<div class="tab-pane fade" id="kt_general_widget_1_1">
    <!--begin::Tables Widget 2-->
    <div class="card">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold fs-3 mb-1 text-capitalize">last added documentation photo</span>
                <span class="text-muted mt-1 fw-semibold fs-7">Last added images</span>
            </h3>
            <div class="card-toolbar">
                <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary fw-bold px-4 me-1" href="{{ route('admin.gallery') }}" aria-selected="true" tabindex="-1"
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
                            <th class="p-0 min-w-150px"></th>
                            {{-- <th class="p-0 min-w-150px"></th>
                            <th class="p-0 min-w-125px"></th>
                            <th class="p-0 min-w-40px"></th> --}}
                        </tr>
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody>
                        @foreach ($gallery as $key => $g)
                        <tr>
                            <td>
                                <div class="symbol symbol-50px me-2">
                                    <span class="symbol-label">
                                        <img src="{{ asset('/'.$g->image) }}" class="h-100 align-self-center" alt="" />
                                    </span>
                                </div>
                            </td>
                            <td>
                                <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">{{ $g->title }}</a>
                                <span class="text-muted fw-semibold d-block fs-7">{{ $g->updated_at }}</span>
                            </td>
                            {{-- <td class="text-end">
                                <span class="badge badge-light-danger fw-semibold me-1">Angular</span>
                                <span class="badge badge-light-info fw-semibold me-1">PHP</span>
                            </td>
                            <td class="text-end">
                                <span class="text-muted fw-bold">4600
                                    Users</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
                                                transform="rotate(-180 18 13)" fill="currentColor" />
                                            <path
                                                d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </a>
                            </td> --}}
                        </tr>
                        @endforeach
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
