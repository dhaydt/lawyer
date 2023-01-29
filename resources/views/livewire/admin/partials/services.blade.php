<div class="tab-pane fade" id="kt_general_widget_1_2">
    <!--begin::Tables Widget 3-->
    <div class="card">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold fs-3 mb-1 text-capitalize">last added legal services</span>
                <span class="text-muted mt-1 fw-semibold fs-7">Legal Services
                </span>
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
                            {{-- <th class="p-0 min-w-140px"></th>
                            <th class="p-0 min-w-120px"></th>
                            <th class="p-0 min-w-40px"></th> --}}
                        </tr>
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody>
                        @foreach ($services as $s)
                        <tr>
                            <td>
                                <div class="symbol symbol-50px me-2">
                                    <span class="symbol-label" style="width: 70px; height: 70px;">
                                        <img src="{{ asset('storage/services/'.$s->logo) }}" class="h-50 align-self-center" alt="" />
                                    </span>
                                </div>
                            </td>
                            <td>
                                <a href="#"
                                    class="text-dark fw-bold text-hover-primary mb-1 fs-6">{{ $s->title }}</a>
                            </td>
                            {{-- <td class="text-end text-muted fw-bold">ReactJs,
                                HTML</td>
                            <td class="text-end text-muted fw-bold">4600 Users
                            </td>
                            <td class="text-end text-dark fw-bold fs-6 pe-0">
                                5.4MB</td> --}}
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
