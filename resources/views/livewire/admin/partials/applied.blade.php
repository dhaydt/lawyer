<div class="tab-pane fade" id="kt_general_widget_1_4">
    <!--begin::Tables Widget 4-->
    <div class="card">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold fs-3 mb-1 text-capitalize">Latest Applied Job</span>
                <span class="text-muted mt-1 fw-semibold fs-7">Applied Jobs</span>
            </h3>
            <div class="card-toolbar">
                <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary fw-bold px-4 me-1"
                    href="{{ route('admin.applied') }}" aria-selected="true" tabindex="-1" role="tab">View all</a>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body py-3">
            <div class="tab-content">
                <!--begin::Tap pane-->
                <div class="tab-pane fade show active" id="kt_table_widget_4_tab_1">
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
                                </tr>
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody>
                                @foreach ($applied as $s)
                                <tr>
                                    <td>
                                        <div class="symbol symbol-50px">
                                            <span class="symbol-label">
                                                <img src="{{ asset('/'.$s->ktp) }}" class="h-100 align-self-center" alt="" />
                                            </span>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">{{ $s->name }}</a>
                                        <span class="text-muted fw-semibold d-block fs-7">{{ $s->job->position }}</span>
                                    </td>
                                    <td>
                                        <i class="fa-solid fa-phone mr-3"></i> {{ $s->phone }}
                                    </td>
                                    <td class="text-end">
                                        {{ $s->gender }}
                                    </td>
                                </tr>
                                @endforeach
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
    <!--end::Tables Widget 4-->
</div>
