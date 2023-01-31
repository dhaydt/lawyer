@extends('layout.backend.app')
@section('title',$title)

@section('content')
<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
    <div class="wrapper d-flex flex-column flex-row-fluid pt-2" id="kt_wrapper">
        <div class="toolbar d-flex flex-stack mb-0 mb-lg-n4 pt-5" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column me-3">
                    <!--begin::Title-->
                    <h1 class="d-flex text-dark fw-bold my-1 fs-3">Web Configuration</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-dot fw-semibold text-gray-600 fs-7 my-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-gray-600">
                            <a href="../../index.html" class="text-gray-600 text-hover-primary">Dashboard</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-gray-600">Web Config</li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-gray-500">Web Configuration</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center py-2">
                    <!--begin::Wrapper-->
                    <div class="me-4">
                        <!--begin::Menu-->
                        <a href="#" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bold"
                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                            <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            Filter
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
            <div class="content flex-row-fluid" id="kt_content">
                <div class="card pt-4">
                    <form action="{{ route('admin.webconfig.update') }}" method="POST" enctype="multipart/form-data">
                        <div class="card-body pt-0">
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-10">
                                        <label for="exampleFormControlInput1" class="required form-label">Web
                                            Name</label>
                                        <input type="text" name="web_name" class="form-control form-control-solid"
                                            value="{{ $web_name }}" />
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-10">
                                        <label for="exampleFormControlInput1" class="required form-label">Email</label>
                                        <input type="email" name="email" class="form-control form-control-solid"
                                            value="{{ $email }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-10">
                                        <label for="exampleFormControlInput1" class="required form-label">Company
                                            Phone</label>
                                        <input type="text" name="phone" class="form-control form-control-solid"
                                            value="{{ $phone }}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-10">
                                        <label for="exampleFormControlInput1" class="required form-label">Company
                                            Fax</label>
                                        <input type="text" name="fax" class="form-control form-control-solid"
                                            value="{{ $fax }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="mb-10 row">
                                <div class="col-6">
                                        <label for="exampleFormControlInput1" class="required form-label">WhatsApp Consultation</label>
                                        <input type="text" name="wa" class="form-control form-control-solid"
                                            value="{{ $wa }}" />
                                </div>
                                <div class="col-6">
                                    <label for="exampleFormControlInput1" class="required form-label">Company
                                        Address</label>
                                    <textarea name="address"
                                        class="form-control form-control-solid">{{ $address }}</textarea>
                                </div>
                            </div>
                            <div class="row mb-10">
                                <div class="col-md-4">
                                    <div class="">
                                        <label for="bg_color" class="required form-label">Web Logo</label>
                                        <div class="pt-4">
                                            <div class="image-input image-input-outline" data-kt-image-input="true">
                                                <div class="image-input-wrapper w-350px h-150px"
                                                    style="background-image: url({{ asset('storage/company'.'/'.$logo) }}); background-size: 350px 150px; background-repeat: no-repeat;">
                                                </div>
                                                <label
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                    title="Change web logo" data-kt-initialized="1">
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
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex flex-column text-center">
                                        <label for="bg_color" class="required form-label">Web Icon</label>
                                        <div class="pt-4">
                                            <div class="image-input image-input-outline" data-kt-image-input="true">
                                                <div class="image-input-wrapper w-150px h-150px"
                                                    style="background-image: url({{ asset('storage/company'.'/'.$icon) }}); background-size: 150px 150px; background-repeat: no-repeat;">
                                                </div>
                                                <label
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                    title="Change web logo" data-kt-initialized="1">
                                                    <i class="bi bi-pencil-fill fs-7"></i>
                                                    <input type="file" name="icon" accept=".png, .jpg, .jpeg">
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
                                </div>
                                <div class="col-md-4">
                                    <div class="">
                                        <label for="bg_color" class="required form-label">Background Color</label>
                                        <input type="color" name="bg_color" class="form-control form-control-solid"
                                            value="{{ $bg_color }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="mb-10">
                                <div class="form" method="post">
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label text-lg-right">Company Profile:</label>
                                        <div class="col-lg-10">
                                            @if ($company_profile != null)
                                            <label for="" class="form-label">
                                                <a href="{{ asset('storage/company_profile'.'/'.$company_profile) }}" target="_blank" rel="noopener noreferrer">Download company profile</a>
                                            </label>
                                            @endif
                                            <div class="dropzone dropzone-queue mb-2" id="kt_dropzonejs_example_3">
                                                <div class="dropzone-panel mb-lg-0 mb-2">
                                                    <a class="dropzone-select btn btn-sm btn-primary me-2">Change Company profile</a>
                                                    <a class="dropzone-remove-all btn btn-sm btn-light-primary">Remove
                                                        All</a>
                                                </div>

                                                <div class="dropzone-items wm-200px">
                                                    <div class="dropzone-item" style="display:none">
                                                        <div class="dropzone-file">
                                                            <div class="dropzone-filename"
                                                                title="some_image_file_name.jpg">
                                                                <span data-dz-name>some_image_file_name.jpg</span>
                                                                <strong>(<span data-dz-size>340kb</span>)</strong>
                                                            </div>

                                                            <div class="dropzone-error" data-dz-errormessage></div>
                                                        </div>

                                                        <div class="dropzone-progress">
                                                            <div class="progress">
                                                                <div class="progress-bar bg-primary" role="progressbar"
                                                                    aria-valuemin="0" aria-valuemax="100"
                                                                    aria-valuenow="0" data-dz-uploadprogress>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="dropzone-toolbar">
                                                            <span class="dropzone-delete" data-dz-remove><i
                                                                    class="bi bi-x fs-1"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="form-text text-muted">Max file size is 5MB and max number of
                                                files is 1.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">
                                    <span>Slider Bottom Content</span>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="mb-10">
                                            <label for="exampleFormControlInput1" class="required form-label">Content 1 Title</label>
                                            <input type="text" name="c1_title" class="form-control form-control-solid"
                                                value="{{ $c1_title }}" />
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-10">
                                            <label for="exampleFormControlInput1" class="required form-label">Content 1 Description</label>
                                            <textarea name="c1_content" class="form-control form-control-solid">{{ $c1_content }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex flex-column text-center">
                                            <label for="bg_color" class="required form-label">Content 1 Icon</label>
                                            <div class="pt-4">
                                                <div class="image-input image-input-outline" data-kt-image-input="true">
                                                    <div class="image-input-wrapper w-150px h-150px"
                                                        style="background-image: url({{ asset('storage/company'.'/'.$c1_icon) }}); background-size: 150px 150px; background-repeat: no-repeat;">
                                                    </div>
                                                    <label
                                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                        data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                        title="Change web logo" data-kt-initialized="1">
                                                        <i class="bi bi-pencil-fill fs-7"></i>
                                                        <input type="file" name="c1_icon" accept=".png, .jpg, .jpeg">
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
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="mb-10">
                                            <label for="exampleFormControlInput1" class="required form-label">Content 2 Title</label>
                                            <input type="text" name="c2_title" class="form-control form-control-solid"
                                                value="{{ $c2_title }}" />
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-10">
                                            <label for="exampleFormControlInput1" class="required form-label">Content 2 Description</label>
                                            <textarea name="c2_content" class="form-control form-control-solid">{{ $c2_content }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex flex-column text-center">
                                            <label for="bg_color" class="required form-label">Content 2 Icon</label>
                                            <div class="pt-4">
                                                <div class="image-input image-input-outline" data-kt-image-input="true">
                                                    <div class="image-input-wrapper w-150px h-150px"
                                                        style="background-image: url({{ asset('storage/company'.'/'.$c2_icon) }}); background-size: 150px 150px; background-repeat: no-repeat;">
                                                    </div>
                                                    <label
                                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                        data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                        title="Change web logo" data-kt-initialized="1">
                                                        <i class="bi bi-pencil-fill fs-7"></i>
                                                        <input type="file" name="c2_icon" accept=".png, .jpg, .jpeg">
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
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="mb-10">
                                            <label for="exampleFormControlInput1" class="required form-label">Content 3 Title</label>
                                            <input type="text" name="c3_title" class="form-control form-control-solid"
                                                value="{{ $c3_title }}" />
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-10">
                                            <label for="exampleFormControlInput1" class="required form-label">Content 3 Description</label>
                                            <textarea name="c3_content" class="form-control form-control-solid">{{ $c3_content }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="d-flex flex-column text-center">
                                            <label for="bg_color" class="required form-label">Content 3 Icon</label>
                                            <div class="pt-4">
                                                <div class="image-input image-input-outline" data-kt-image-input="true">
                                                    <div class="image-input-wrapper w-150px h-150px"
                                                        style="background-image: url({{ asset('storage/company'.'/'.$c3_icon) }}); background-size: 150px 150px; background-repeat: no-repeat;">
                                                    </div>
                                                    <label
                                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                        data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                        title="Change web logo" data-kt-initialized="1">
                                                        <i class="bi bi-pencil-fill fs-7"></i>
                                                        <input type="file" name="c3_icon" accept=".png, .jpg, .jpeg">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary hover-scale" data-bs-toggle="tooltip"
                                title="Save Config">Update Configuration</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('script')
<script>
    // set the dropzone container id
        const id = "#kt_dropzonejs_example_3";
        const dropzone = document.querySelector(id);

        // set the preview element template
        var previewNode = dropzone.querySelector(".dropzone-item");
        previewNode.id = "";
        var previewTemplate = previewNode.parentNode.innerHTML;
        previewNode.parentNode.removeChild(previewNode);

        var myDropzone = new Dropzone(id, { // Make the whole body a dropzone
            url: "{{ route('admin.webconfig.upload_company') }}", // Set the url for your upload script location
            parallelUploads: 1,
            acceptedFiles: ".pdf",
            maxFilesize: 5, // Max filesize in MB
            previewTemplate: previewTemplate,
            previewsContainer: id + " .dropzone-items", // Define the container to display the previews
            clickable: id + " .dropzone-select",
            headers: { 'X-CSRF-TOKEN': $('meta[name="token"]').attr('content') }
        });

        myDropzone.on("addedfile", function (file) {
            // Hookup the start button
            const dropzoneItems = dropzone.querySelectorAll('.dropzone-item');
            dropzoneItems.forEach(dropzoneItem => {
                dropzoneItem.style.display = '';
            });
        });

        // Update the total progress bar
        myDropzone.on("totaluploadprogress", function (progress) {
            const progressBars = dropzone.querySelectorAll('.progress-bar');
            progressBars.forEach(progressBar => {
                progressBar.style.width = progress + "%";
            });
        });

        myDropzone.on("sending", function (file) {
            // Show the total progress bar when upload starts
            const progressBars = dropzone.querySelectorAll('.progress-bar');
            progressBars.forEach(progressBar => {
                progressBar.style.opacity = "1";
            });
        });

        // Hide the total progress bar when nothing"s uploading anymore
        myDropzone.on("complete", function (progress) {
            const progressBars = dropzone.querySelectorAll('.dz-complete');

            setTimeout(function () {
                progressBars.forEach(progressBar => {
                    progressBar.querySelector('.progress-bar').style.opacity = "0";
                    progressBar.querySelector('.progress').style.opacity = "0";
                });
            }, 300);
        });
    function hapus(id){
            var ids = id
            Swal.fire({
                text: "Are you sure you would like to delete this admin?",
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
                    url: '/admin/delete-admin/'+id,
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
