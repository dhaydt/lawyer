@extends('layout.backend.app')
@section('title',$title)
@push('style')
<style>
    .min-w-150px{
        min-width: 150px;
    }
</style>
<script src="https://cdn.tiny.cloud/1/u47kfksuqwukzijd1s6p8t554e4173266hphc7j6plaur4wa/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
<script>
tinymce.init({
    selector: 'textarea#myeditorinstance', // Replace this CSS selector to match the placeholder element for TinyMCE
    plugins: 'code table lists quickbars link',
    toolbar: 'undo redo | blocks | bold italic | quicklink | quicklink | quicklink blockquote | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
});
</script>
@endpush
@section('content')
<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
    <div class="wrapper d-flex flex-column flex-row-fluid pt-2" id="kt_wrapper">
        <div class="toolbar d-flex flex-stack mb-0 mb-lg-n4 pt-5" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column me-3">
                    <!--begin::Title-->
                    <h1 class="d-flex text-dark fw-bold my-1 fs-3">Laws</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-dot fw-semibold text-gray-600 fs-7 my-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-gray-600">
                            <a href="../../index.html" class="text-gray-600 text-hover-primary">Dashboard</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-gray-600">Laws</li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-gray-500">List</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
            </div>
        </div>
        <!--end::Toolbar-->
        <!--begin::Container-->
        <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
            <!--begin::Post-->
            <div class="content flex-row-fluid" id="kt_content">
                <!--begin::Card-->
                <div class="card">
                    <!--begin::Card header-->
                    <div class="card-header border-0 pt-6">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <!--begin::Search-->
                            <div class="d-flex align-items-center position-relative my-1">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                <h6>Laws List</h6>
                                <!--end::Svg Icon-->

                            </div>
                        </div>

                        <div class="card-toolbar">
                            <!--begin::Toolbar-->
                            <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                                <!--begin::Add customer-->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_add_customer">Add Law</button>
                                <!--end::Add customer-->
                            </div>
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
                            <thead>
                                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="min-w-50px">No</th>
                                    <th class="min-w-125px">Number</th>
                                    <th class="min-w-125px">Year</th>
                                    <th class="min-w-125px">Title</th>
                                    <th class="min-w-125px">Status</th>
                                    <th class="text-center min-w-175px">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="fw-semibold text-gray-600">
                                @if (count($services) > 0)
                                @foreach ($services as $key => $u)
                                <tr>
                                    <td>
                                        {{ $key+1 }}
                                    </td>
                                    <td>
                                        <a href="javascript:" class="text-gray-800 text-hover-primary mb-1">{{ $u->nomor
                                            }}</a>
                                    </td>
                                    <td>
                                        <a href="javascript:" class="text-gray-600 text-hover-primary mb-1">{{ $u->tahun
                                            }}</a>
                                    </td>
                                    <td>
                                        {{ $u->tentang }}
                                    </td>
                                    <td>
                                        @if ($u->status == 1)
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-danger">Non Active</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-warning" data-bs-toggle="modal" title="Edit"
                                            data-bs-target="#editAdmin{{ $u->id }}">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </button>
                                        {{-- <a href="{{ route('admin.laws.detail', [$u->id]) }}" class="btn btn-sm btn-primary" title="View"
                                            data-bs-target="#editAdmin{{ $u->id }}">
                                            <i class="fa-solid fa-eye"></i>
                                        </a> --}}
                                        <button onclick="hapus({{ $u->id }})" data-bs-toggle="tooltip"
                                            title="Delete" class="btn btn-sm btn-danger">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </td>

                                    <div class="modal fade" id="editAdmin{{ $u->id }}" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-fullscreen">
                                            <div class="modal-content">
                                                <form class="form"
                                                    action="{{ route('admin.laws.update', ['id' => $u->id]) }}"
                                                    id="kt_modal_add_customer_form" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $u->id }}">
                                                    <div class="modal-header" id="kt_modal_add_customer_header">
                                                        <h2 class="fw-bold">Edit Laws</h2>
                                                    </div>
                                                    <div class="modal-body py-10 px-lg-17">
                                                        <div class="scroll-y me-n7 pe-7"
                                                            id="kt_modal_add_customer_scroll" data-kt-scroll="true"
                                                            data-kt-scroll-activate="{default: false, lg: true}"
                                                            data-kt-scroll-max-height="auto"
                                                            data-kt-scroll-dependencies="#kt_modal_add_customer_header"
                                                            data-kt-scroll-wrappers="#kt_modal_add_customer_scroll"
                                                            data-kt-scroll-offset="300px">
                                                            <div class="row mb-6">
                                                                <label
                                                                    class="col-lg-4 col-form-label required fw-semibold fs-6">Laws number</label>
                                                                <input type="number"
                                                                    class="form-control form-control-lg form-control-solid"
                                                                    name="number" value="{{ $u->nomor }}">
                                                            </div>
                                                            <div class="row mb-6">
                                                                <label
                                                                    class="col-lg-4 col-form-label required fw-semibold fs-6">Laws year</label>
                                                                <input type="number"
                                                                    class="form-control form-control-lg form-control-solid"
                                                                    name="year" value="{{ $u->tahun }}">
                                                            </div>
                                                            <div class="row mb-6">
                                                                <label
                                                                    class="col-lg-4 col-form-label required fw-semibold fs-6">Laws Title</label>
                                                                <textarea
                                                                    class="form-control form-control-lg form-control-solid"
                                                                    name="about">{{ $u->tentang }}</textarea>
                                                            </div>
                                                            <div class="row mb-6">
                                                                <label
                                                                    class="col-lg-4 col-form-label fw-semibold fs-6">Laws PDF</label>
                                                                    @if ($u->file)
                                                                    <div class="d-flex justify-content-center mb-3">
                                                                        <embed src="{{ asset('storage/'.$u->file) }}" type="application/pdf" style="height: 450px; width: 400px">
                                                                    </div>
                                                                    @endif
                                                                <input type="file" class="form-control" name="file" accept="application/pdf">
                                                            </div>
                                                            <div class="fv-row mb-7">
                                                                <label class="fs-6 fw-semibold mb-2">
                                                                    <span class="required">Law Content</span>
                                                                </label>
                                                                <textarea class="form-control form-control-solid"
                                                                    name="keterangan" id="myeditorinstance" rows="10">{!! $u->keterangan !!}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer flex-center">
                                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" id="kt_modal_add_customer_submit"
                                                            class="btn btn-primary">
                                                            <span class="indicator-label">Update</span>
                                                            <span class="indicator-progress">Please wait...
                                                                <span
                                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                                @endforeach
                                @else
                                <tr class="text-center">
                                    <td colspan="6">
                                        <img src="{{ asset('assets_metronic/image/nodata.png') }}" class="h-200px"
                                            alt="amaradvokat">
                                    </td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                @include('admin.partials.modalAddLaws')
            </div>
        </div>
    </div>
</div>
@endsection
@push('script')
<script>
    function hapus(id){
            var ids = id
            Swal.fire({
                text: "Are you sure you would like to delete this law?",
                icon: "question",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, return",
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: "btn btn-active-light"
                }
            }).then(function (result) {
                if (result.value) {
                    $.post({
                    url: '/admin/laws/delete/'+id,
                    method: 'GET',
                    contentType: false,
                    processData: false,
                    success: function (data) {
                        if (data.errors) {
                            for (var i = 0; i < data.errors.length; i++) {
                                toastr.error(data.errors[i].message, {
                                    CloseButton: true,
                                    ProgressBar: true
                                });
                            }
                        } else {
                            location.reload();
                        }
                    }
                });
                } else if (result.dismiss === 'cancel') {
                    Swal.fire({
                        text: "Your form has not been cancelled!.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary",
                        }
                    });
                }
            });
        };
</script>
@endpush
