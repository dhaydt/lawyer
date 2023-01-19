@push('style')
<style>
    .image-input-outline {
        box-shadow: 0px 10px 30px 0px rgb(0 0 0 / 10%);
    }

    .img-profile {
        border-radius: 10px;
        height: 150px;
        width: auto;
        max-width: 100%;
    }

</style>
@endpush
<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
    <div class="wrapper d-flex flex-column flex-row-fluid pt-2" id="kt_wrapper">
        <div class="toolbar d-flex flex-stack mb-0 mb-lg-n4 pt-5" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column me-3">
                    <!--begin::Title-->
                    <h1 class="d-flex text-dark fw-bold my-1 fs-3">Company & Organization Configuration</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-dot fw-semibold text-gray-600 fs-7 my-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-gray-600">
                            <a href="../../index.html" class="text-gray-600 text-hover-primary">Dashboard</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-gray-600">Company & Organization</li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-gray-500">Company Content</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
            </div>
        </div>
        <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
            <div class="content flex-row-fluid" id="kt_content">
                <div class="card">
                    <form wire:submit.prevent="updateOrganization" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-10">
                                        <label for="exampleFormControlInput1" class="required form-label">Tell about
                                            your company <small>(who you are?)</small></label>
                                        <textarea name="who_we_are" class="form-control form-control-solid"
                                            wire:model="who_we_are" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-10">
                                        <label for="exampleFormControlInput1" class="required form-label">Company
                                            Experience</label>
                                        <textarea name="exp_content" class="form-control form-control-solid"
                                            wire:model="exp_content" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-10">
                                        <label for="exampleFormControlInput1" class="required form-label">Case
                                            resolved</label>
                                        <input name="case_count" type="number" class="form-control form-control-solid"
                                            wire:model="case_count" />
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-10">
                                        <label for="exampleFormControlInput1" class="required form-label">Years
                                            Experience</label>
                                        <input name="exp_count" type="number" class="form-control form-control-solid"
                                            wire:model="exp_count" />
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-10">
                                <div class="col-md-4">
                                    <div class="">
                                        <label for="bg_color" class="required form-label d-block">Primary Photos</label>
                                        <div class="image-input image-input-outline w-200px" data-kt-image-input="true"
                                            style="background-image: url('../assets/media/svg/avatars/blank.svg')">
                                            @if ($img)
                                            <img class="image-input image-input-outline img-profile"
                                                src="{{ $img->temporaryUrl() }}"></img>
                                            @else
                                            <img id="placeholder" src="{{ asset($photo) }}"
                                                class="img-profile preview-img"
                                                onerror="this.src='{{ asset('assets_metronic/image/placeholder.jpg') }}'">
                                            @endif
                                            {{-- <div class="image-input-wrapper w-125px h-125px"
                                                style="background-image: url(../assets/img/users.png)">
                                            </div> --}}
                                            <label
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                title="Add image content">
                                                <i class="bi bi-pencil-fill fs-7"></i>
                                                <input type="file" id="profile" name="img" accept=".png, .jpg, .jpeg"
                                                    wire:model="img" />
                                                {{-- <input type="hidden" name="avatar_remove" /> --}}
                                            </label>
                                            {{-- <span
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                title="Cancel avatar">
                                                <i class="bi bi-x fs-2"></i>
                                            </span> --}}
                                            {{-- <span
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                title="Remove avatar">
                                                <i class="bi bi-x fs-2"></i>
                                            </span> --}}
                                        </div>
                                        <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                        <div class="form-text text-danger">Image Ratio: 1 : 2.</div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="">
                                        <label for="bg_color" class="required form-label d-block">Secondary
                                            Photos</label>
                                        <div class="image-input image-input-outline w-150px" data-kt-image-input="true"
                                            style="background-image: url('../assets/media/svg/avatars/blank.svg')">
                                            @if ($imgSecond)
                                            <img class="image-input image-input-outline img-profile"
                                                src="{{ $imgSecond->temporaryUrl() }}"></img>
                                            @else
                                            <img id="placeholder2" src="{{ asset($photoSecond) }}"
                                                class="img-profile preview-img"
                                                onerror="this.src='{{ asset('assets_metronic/image/placeholder.jpg') }}'">
                                            @endif
                                            {{-- <div class="image-input-wrapper w-125px h-125px"
                                                style="background-image: url(../assets/img/users.png)">
                                            </div> --}}
                                            <label
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                title="Add image content">
                                                <i class="bi bi-pencil-fill fs-7"></i>
                                                <input type="file" id="profile" name="imgSecond" accept=".png, .jpg, .jpeg"
                                                    wire:model="imgSecond" />
                                                {{-- <input type="hidden" name="avatar_remove" /> --}}
                                            </label>
                                            {{-- <span
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                title="Cancel avatar">
                                                <i class="bi bi-x fs-2"></i>
                                            </span> --}}
                                            {{-- <span
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                title="Remove avatar">
                                                <i class="bi bi-x fs-2"></i>
                                            </span> --}}
                                        </div>
                                        <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                        <div class="form-text text-danger">Image Ratio: 1 : 1.</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary hover-scale" data-bs-toggle="tooltip"
                                title="Save Config">Save Organization</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

@push('script')
<script>
    $(document).ready(function() {

    });
    window.addEventListener('contentChange', event => {

    })

        Livewire.on('refresh', () => {
            $('#modal_update').modal('hide')
            $('#modal_add').modal('hide')
        })

        Livewire.on("finishOrganization", (status, message) => {
            alertMessage(status, message)
        })

        Livewire.on('onClickRefresh', (id) => {
            Livewire.emit('refreshOrganization')
            alertMessage(1, 'Data refreshed successfully!')
        })

        Livewire.on('onClickUpdateOrganization', (item) => {
            Livewire.emit('setCategory', item);
            $('#modal_update').modal('show')
        })

</script>
@endpush
