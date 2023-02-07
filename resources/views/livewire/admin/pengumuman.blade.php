@push('style')
<style>
    .image-input-outline {
        box-shadow: 0px 10px 30px 0px rgb(0 0 0 / 10%);
    }

    .img-profile {
        border-radius: 10px;
        height: 200px;
        width: auto;
        max-width: 100%;
    }
    .btn-save-banner{
        position: absolute;
        right: -12px;
        bottom: -4px;
    }
</style>
@endpush
<div class="w-100">
    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
        <div class="wrapper d-flex flex-column flex-row-fluid pt-2" id="kt_wrapper">
            <div class="toolbar d-flex flex-stack mb-0 mb-lg-n4 pt-5" id="kt_toolbar">
                <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
                    <div class="page-title d-flex flex-column me-3">
                        <h1 class="d-flex text-dark fw-bold my-1 fs-3">{{ $title }}</h1>
                        <ul class="breadcrumb breadcrumb-dot fw-semibold text-gray-600 fs-7 my-1">
                            <li class="breadcrumb-item text-gray-600">
                                <a href="{{ route('admin.dashboard') }}"
                                    class="text-gray-600 text-hover-primary">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item text-gray-600">Web Configuration</li>
                            <li class="breadcrumb-item text-gray-500">Announcement</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
                <div class="content flex-row-fluid" id="kt_content">
                    <div class="card">
                        <div class="card-header border-0 pt-6">
                            <div class="row justify-content-between w-100">
                                <div class="mb-4 input-group input-group-outline w-md-25 w-50">
                                    <input type="text" class="form-control" placeholder="Search..." wire:model="search">
                                </div>
                                <div class="card-toolbar w-50 justify-content-end">
                                    <button type="button" wire:click.prevent="$emit('onClickAdd')"
                                        class="btn btn-primary btn-hover-rotate-end" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Add Announcement">
                                        <i class="fas fa-plus-square mr-2"></i> Announcement
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            @include('livewire.helper.alert-session')
                            <div class="card-body d-flex flex-column">
                                <label for="exampleFormControlInput1" class="required form-label">Banner Other
                                    Information Pages</label>
                                <div class="d-flex w-100 justify-content-center">
                                    <div class="image-input image-input-outline" data-kt-image-input="true"
                                        style="background-image: url('../assets/media/svg/avatars/blank.svg')">
                                        @if ($photo)
                                        <img class="image-input image-input-outline img-profile"
                                            src="{{ $photo->temporaryUrl() }}"></img>
                                        @else
                                        <img id="placeholder" src="{{ asset('/'.$banner) }}"
                                            class="img-profile preview-img"
                                            onerror="this.src='{{ asset('assets/images/banner-placeholder.webp') }}'">
                                        @endif
                                        {{-- <div class="image-input-wrapper w-125px h-125px"
                                            style="background-image: url(../assets/img/users.png)">
                                        </div> --}}
                                        <label
                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                            data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                            title="Add image content">
                                            <i class="bi bi-pencil-fill fs-7"></i>
                                            <input wire:model="photo" type="file" id="profile" name="photo" accept=".png, .jpg, .jpeg"
                                                />
                                            {{-- <input type="hidden" name="avatar_remove" /> --}}
                                        </label>
                                        {{-- <span
                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                            data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                            title="Cancel avatar">
                                            <i class="bi bi-x fs-2"></i>
                                        </span> --}}
                                        @if ($photo)
                                        <span
                                            class="btn btn-icon btn-circle btn-save-banner btn-active-color-primary w-30px h-30px bg-body shadow"
                                            data-bs-toggle="tooltip" wire:click.prevent="$emit('changeBanner')"
                                            title="Save banner">
                                            <i class="bi bi-upload fs-2"></i>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                            </div>
                            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
                                <thead>
                                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                        <th class="min-w-125px">No.</th>
                                        <th class="min-w-125px">Title</th>
                                        {{-- <th class="min-w-125px">Image</th> --}}
                                        <th class="min-w-125px">Description</th>
                                        <th class="text-end min-w-70px">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="fw-semibold text-gray-600">
                                    @if (count($notif) > 0)
                                    @foreach ($notif as $i => $u)
                                    <tr>
                                        <td class="text-capitalize">
                                            {{ $i+1 }}
                                        </td>
                                        <td class="text-capitalize">
                                            {{ $u->title }}
                                        </td>
                                        {{-- <td class="text-capitalize">
                                            @if ($u->image != null)
                                            <img height="100px" src="{{ asset($u->image) }}" alt="">
                                            @else
                                            <span class="badge badge-danger">No Image</span>
                                            @endif
                                        </td> --}}
                                        <td class="text-capitalize">
                                            {{ $u->description }}
                                        </td>
                                        <td class="text-end">
                                            <div class="btn-group btn-group-sm" role="group">
                                                <button type="button"
                                                    wire:click.prevent="$emit('onClickUpdateNotif', {{ $u }})"
                                                    class="btn btn-sm bg-success text-white btn-hover-rotate-start"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Edit {{ $u->title}}"><i
                                                        class="fas fa-edit text-light"></i></button>
                                                <button type="button"
                                                    wire:click.prevent="$emit('onClickDelete', `{{ $u->id }}`)"
                                                    class="btn btn-sm bg-danger btn-hover-rotate-end"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Delete {{ $u->title}}"><i
                                                        class="fas fa-trash text-light"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr class="text-center">
                                        <td colspan="5">
                                            <img src="{{ asset('assets_metronic/image/nodata.png') }}" class="h-200px"
                                                alt="">
                                        </td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <div class="row px-9 pt-3 pb-5">
                            <div
                                class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start">
                                @include('livewire.helper.total-show')
                            </div>
                            <div
                                class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                                {{ $notif->links() }}
                            </div>
                        </div>
                    </div>
                    <!--Modal Add -->
                    <div wire:ignore.self class="modal fade" tabindex="-1" id="modal_add" data-bs-backdrop="static"
                        data-bs-keyboard="false">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">
                                        @if ($type == 'save')
                                        Add Announcement
                                        @else
                                        Edit {{ $title_notif }}
                                        @endif
                                    </h5>

                                    <!--begin::Close-->
                                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                        data-bs-dismiss="modal" aria-label="Close">
                                        <span class="svg-icon svg-icon-2x"></span>
                                    </div>
                                    <!--end::Close-->
                                </div>

                                <form wire:ignore.self wire:submit.prevent="save" id="form_add"
                                    enctype="multipart/form-data">
                                    <div class="modal-body">
                                        @include('helper.alert-message')
                                        <div class="text-center">
                                            @include('helper.simple-loading', ['target' => 'simpan', 'message' =>
                                            'Menyimpan data ...'])
                                        </div>
                                        <div class="mb-10">
                                            <label for="exampleFormControlInput1"
                                                class="required form-label">Title</label>
                                            <input type="text" class="form-control form-control-solid"
                                                wire:model="title_notif" placeholder="Announcement titles" />
                                            @error('title_notif')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        {{-- <div class="mb-10">
                                            <label class="col-lg-4 col-form-label fw-semibold fs-6">Image</label>
                                            <div class="col-lg-12 pt-4">
                                                <div class="image-input image-input-outline" data-kt-image-input="true">
                                                    @if ($type == 'save')
                                                    <img class="image-input image-input-outline img-profile"
                                                        src="{{ $image ? $image->temporaryUrl() : asset('assets_metronic/image/placeholder.jpg') }}"></img>
                                                    @else
                                                    @if ($image)
                                                    <img class="image-input image-input-outline img-profile"
                                                        src="{{ $image->temporaryUrl() }}"></img>
                                                    @else
                                                    <img id="placeholder" src="{{ asset($photo) }}"
                                                        class="img-profile preview-img"
                                                        onerror="this.src='{{ asset('assets_metronic/image/placeholder.jpg') }}'">
                                                    @endif
                                                    @endif
                                                    <label id="label-img"
                                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                        data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                        title="Change notification image">
                                                        <i class="bi bi-pencil-fill fs-7"></i>
                                                        <input type="file" id="image" name="image"
                                                            accept=".png, .jpg, .jpeg" wire:model="image" />
                                                    </label>
                                                </div>
                                                <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                            </div>
                                            @error('image')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div> --}}
                                        <div class="mb-10">
                                            <label for="" class="required form-label">Description</label>
                                            <textarea name="description" class="form-control form-control-solid"
                                                cols="30" rows="3" wire:model="description"></textarea>
                                            @error('description')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                            </div>
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

        window.addEventListener('contentChange', function(){
        })

        Livewire.on('onClickAdd', () => {
            @this.set('type', 'save')
            @this.set('notif_id', null)
            Livewire.emit('resetInput');
            $('#modal_add').modal('show');
        })
        
        Livewire.on('changeBanner', () => {
            Livewire.emit('upload')
        })
        
        Livewire.on('refresh', () => {
            $('#modal_update').modal('hide')
            $('#modal_add').modal('hide')
        })

        Livewire.on("finishNotif", (status, message) => {
            alertMessage(status, message)
        })

        Livewire.on('onClickRefresh', (id) => {
            Livewire.emit('refreshNotif')
            alertMessage(1, 'Data refreshed successfully!')
        })

        Livewire.on('onClickUpdateNotif', (item) => {
            @this.set('type', 'update');
            Livewire.emit('setNotif', item);
            $('#modal_add').modal('show');

        })

        Livewire.on('onClickDelete', async (id) => {
            const response = await alertHapus('Warning !!!', 'Are you sure to delete this data?')
            if(response.isConfirmed == true){
                @this.set('notif_id', id)
                Livewire.emit('delete')
            }
        })
</script>
@endpush