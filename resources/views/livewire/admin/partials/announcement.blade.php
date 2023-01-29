<div class="tab-pane fade show active" id="kt_general_widget_1_3">
    <!--begin::Tables Widget 5-->
    <div class="card">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold fs-3 mb-1 text-capitalize">Latest
                    Announcement</span>
                <span class="text-muted mt-1 fw-semibold fs-7">Announcement</span>
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
                                    {{-- <th class="p-0 min-w-140px"></th>
                                    <th class="p-0 min-w-110px"></th>
                                    <th class="p-0 min-w-50px"></th> --}}
                                </tr>
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody>
                                @foreach ($peng as $p)
                                <tr>
                                    <td>
                                        <div class="symbol symbol-45px me-2">
                                            {{ $p->title }}
                                        </div>
                                    </td>
                                    <td>
                                        {{ $p->description }}
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
    <!--end::Tables Widget 5-->
</div>
