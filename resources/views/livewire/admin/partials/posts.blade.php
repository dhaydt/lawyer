<div class="tab-pane fade" id="kt_general_widget_1_5">
    <!--begin::Tables Widget 1-->
    <div class="card">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold fs-3 mb-1 text-capitalize">Latest Added posts & journals</span>
                <span class="text-muted fw-semibold fs-7">Posts & Journals</span>
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
                            <th class="p-0 w-100px"></th>
                            <th class="p-0 min-w-100px"></th>
                            <th class="p-0 min-w-100px"></th>
                        </tr>
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody>
                        @foreach ($content as $c)
                        <tr>
                            <th>
                                <div class="symbol symbol-50px me-2">
                                    <span class="symbol-label" style="height: 96px;">
                                        <img src="{{ asset('/'.$c->image) }}" class="h-100 align-self-center" alt="" />
                                    </span>
                                </div>
                            </th>
                            <td>
                                <a href="#"
                                    class="text-dark fw-bold text-hover-primary mb-1 fs-6">{{ $c->title }}</a>
                                {{-- <span class="text-muted fw-semibold d-block fs-7">Successful
                                    Fellas</span> --}}
                            </td>
                            <td>
                                <div class="d-flex w-100 me-2">
                                    <span class="badge badge-success">{{ $c->category }}</span>
                                </div>
                            </td>
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
    <!--endW::Tables Widget 1-->
</div>
