@extends('layout.backend.app')
@section('title',$title)

@section('content')
<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
    <div class="wrapper d-flex flex-column flex-row-fluid pt-2" id="kt_wrapper">
        <div class="toolbar d-flex flex-stack mb-0 mb-lg-n4 pt-5" id="kt_toolbar">
            <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
                <div class="page-title d-flex flex-column me-3">
                    <h1 class="d-flex text-dark fw-bold my-1 fs-3">Banner List</h1>
                    <ul class="breadcrumb breadcrumb-dot fw-semibold text-gray-600 fs-7 my-1">
                        <li class="breadcrumb-item text-gray-600">
                            <a href="../../index.html" class="text-gray-600 text-hover-primary">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item text-gray-600">Web Configuration</li>
                        <li class="breadcrumb-item text-gray-500">Banner Config</li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
            <div class="content flex-row-fluid" id="kt_content">
                <div class="card">
                    <div class="card-header border-0 pt-6">
                        <div class="card-title">
                        </div>

                        <div class="card-toolbar">
                            <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_add_customer">Add Banner</button>
                            </div>
                            <div class="d-flex justify-content-end align-items-center d-none"
                                data-kt-customer-table-toolbar="selected">
                                <div class="fw-bold me-5">
                                    <span class="me-2" data-kt-customer-table-select="selected_count"></span>Selected
                                </div>
                                <button type="button" class="btn btn-danger"
                                    data-kt-customer-table-select="delete_selected">Delete Selected</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
                            <thead>
                                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="min-w-125px">Banner</th>
                                    <th class="min-w-125px">Type</th>
                                    <th class="min-w-125px">Status</th>
                                    <th class="text-end min-w-70px">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="fw-semibold text-gray-600">
                                @foreach ($banner as $u)
                                <tr>
                                    <td>
                                        <img src="{{ asset('storage/banner'.'/'.$u->photo) }}"
                                            class="rounded-3 mb-4 w-150px h-150px w-xxl-350px h-xxl-200px"
                                            onerror="this.src='{{asset('assets_metronic/image/placeholder.png')}}'"
                                            alt="">
                                    </td>
                                    <td>
                                        {{ $u->banner_type }}
                                    </td>
                                    <td data-filter="visa">
                                        {{ $u->is_active }}
                                    </td>
                                    <td class="text-end">
                                        <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editBanner{{ $u->id }}">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </button>
                                    </td>
                                    <div class="modal fade" id="editBanner{{ $u->id }}" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered mw-650px">
                                            <div class="modal-content">
                                                <form class="form" action="{{ route('admin.banner.update', ['id' => $u->id]) }}" id="kt_modal_add_customer_form"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="modal-header" id="kt_modal_add_customer_header">
                                                        <h2 class="fw-bold">Edit Banner</h2>
                                                    </div>
                                                    <div class="modal-body py-10 px-lg-17">
                                                        <div class="scroll-y me-n7 pe-7" id="kt_modal_add_customer_scroll"
                                                            data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
                                                            data-kt-scroll-max-height="auto"
                                                            data-kt-scroll-dependencies="#kt_modal_add_customer_header"
                                                            data-kt-scroll-wrappers="#kt_modal_add_customer_scroll"
                                                            data-kt-scroll-offset="300px">
                                                            <div class="row mb-6">
                                                                <label class="col-lg-4 col-form-label fw-semibold fs-6">Banner Image</label>
                                                                <div class="col-lg-8 pt-4">
                                                                    <div class="image-input image-input-outline" data-kt-image-input="true">
                                                                        <div class="image-input-wrapper w-300px h-150px"
                                                                            style="background-image: url({{ asset('storage/banner/'.'/'.$u->photo) }})">
                                                                        </div>
                                                                        <label
                                                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                            data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                                            aria-label="Change avatar" data-kt-initialized="1">
                                                                            <i class="bi bi-pencil-fill fs-7"></i>
                                                                            <input type="file" name="img" accept=".png, .jpg, .jpeg">
                                                                            <input type="hidden" name="avatar_remove">
                                                                        </label>
                                                                        <span
                                                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                            data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                                            aria-label="Cancel avatar" data-kt-initialized="1">
                                                                            <i class="bi bi-x fs-2"></i>
                                                                        </span>
                                                                        <span
                                                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                            data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                                            aria-label="Remove avatar" data-kt-initialized="1">
                                                                            <i class="bi bi-x fs-2"></i>
                                                                        </span>
                                                                    </div>
                                                                    <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                                                </div>
                                                            </div>
                                                            {{-- <div class="fv-row mb-7">
                                                                <label class="fs-6 fw-semibold mb-2">
                                                                    <span class="required">URL</span>
                                                                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                                        title="Email address must be active"></i>
                                                                </label>
                                                                <input type="email" class="form-control form-control-solid"
                                                                    placeholder="user@user.com" name="email" value="" />
                                                            </div>
                                                            <div class="fv-row mb-15">
                                                                <label class="fs-6 fw-semibold mb-2">Phone</label>
                                                                <input type="number" class="form-control form-control-solid"
                                                                    placeholder="0812223456" name="phone" />
                                                            </div> --}}
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer flex-center">
                                                        <button type="reset" id="kt_modal_add_customer_cancel"
                                                            class="btn btn-light me-3">Discard</button>
                                                        <button type="submit" id="kt_modal_add_customer_submit" class="btn btn-primary">
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
                            </tbody>
                        </table>
                    </div>
                </div>
                @include('admin.partials.modalAddBanner')
            </div>
        </div>
    </div>
</div>
@endsection
