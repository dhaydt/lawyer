<div class="w-100">
    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
        <div class="wrapper d-flex flex-column flex-row-fluid pt-2" id="kt_wrapper">
            <div class="toolbar d-flex flex-stack mb-0 mb-lg-n4 pt-5" id="kt_toolbar">
                <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
                    <div class="page-title d-flex flex-column me-3">
                        <h1 class="d-flex text-dark fw-bold my-1 fs-3">{{ $title }}</h1>
                        <ul class="breadcrumb breadcrumb-dot fw-semibold text-gray-600 fs-7 my-1">
                            <li class="breadcrumb-item text-gray-600">
                                <a href="../../index.html" class="text-gray-600 text-hover-primary">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item text-gray-600">Content</li>
                            <li class="breadcrumb-item text-gray-500">Hashtag</li>
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
                                        data-bs-placement="top" title="Add hashtag">
                                        <i class="fas fa-plus-square mr-2"></i> Hashtag
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            @include('livewire.helper.alert-session')
                            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
                                <thead>
                                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                        <th class="min-w-125px">No.</th>
                                        <th class="min-w-125px">Name</th>
                                        <th class="text-end min-w-70px">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="fw-semibold text-gray-600">
                                    @if (count($hashtag) > 0)
                                    @foreach ($hashtag as $i=>$u)
                                    <tr>
                                        <td class="text-capitalize">
                                            {{ $i + 1 }}
                                        </td>
                                        <td class="text-capitalize">
                                            {{ $u->name }}
                                        </td>
                                        <td class="text-end">
                                            <div class="btn-group btn-group-sm" role="group">
                                                <button type="button"
                                                    wire:click.prevent="$emit('onClickUpdateHashtag', {{ $u }})"
                                                    class="btn btn-sm bg-success text-white btn-hover-rotate-start"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Edit {{ $u->name}}"><i
                                                        class="fas fa-edit text-light"></i></button>
                                                <button type="button"
                                                    wire:click.prevent="$emit('onClickDelete', `{{ $u->id }}`)"
                                                    class="btn btn-sm bg-danger btn-hover-rotate-end"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Delete {{ $u->name}}"><i
                                                        class="fas fa-trash text-light"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr class="text-center">
                                        <td colspan="3">
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
                                {{ $hashtag->links() }}
                            </div>
                        </div>
                    </div>
                    <!--Modal Add -->
                    <div wire:ignore.self class="modal fade" tabindex="-1" id="modal_add" data-bs-backdrop="static"
                        data-bs-keyboard="false">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add Hashtag</h5>

                                    <!--begin::Close-->
                                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                        data-bs-dismiss="modal" aria-label="Close">
                                        <span class="svg-icon svg-icon-2x"></span>
                                    </div>
                                    <!--end::Close-->
                                </div>

                                <form wire:submit.prevent="save" id="form_add">
                                    <div class="modal-body">
                                        @include('helper.alert-message')
                                        <div class="text-center">
                                            @include('helper.simple-loading', ['target' => 'simpan', 'message' =>
                                            'Menyimpan data ...'])
                                        </div>
                                        <div class="mb-10">
                                            <label for="exampleFormControlInput1"
                                                class="required form-label">Name</label>
                                            <input type="text" class="form-control form-control-solid" wire:model="name"
                                                placeholder="Hashtag name" />
                                            @error('name')
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

                    <!--Modal Update -->
                    <div wire:ignore.self class="modal fade" tabindex="-1" id="modal_update" data-bs-backdrop="static"
                        data-bs-keyboard="false">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-capitalize">Edit hashtag</h5>

                                    <!--begin::Close-->
                                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                        data-bs-dismiss="modal" aria-label="Close">
                                        <span class="svg-icon svg-icon-2x"></span>
                                    </div>
                                    <!--end::Close-->
                                </div>

                                <form wire:submit.prevent="update" id="form_update">
                                    <input type="hidden" wire:mode="hashtag_id">
                                    <div class="modal-body">
                                        <div class="text-center">
                                            @include('helper.simple-loading', ['target' => 'update', 'message' =>
                                            'Menyimpan data ...'])
                                        </div>
                                        <div class="mb-10">
                                            <label for="exampleFormControlInput1"
                                                class="required form-label">Name</label>
                                            <input type="text" class="form-control form-control-solid" wire:model="name" />
                                            @error('name')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Update</button>
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
    window.addEventListener('contentChange', event => {

    })

        Livewire.on('onClickAdd', () => {
            $('#modal_add').modal('show')
        })

        Livewire.on('refresh', () => {
            $('#modal_update').modal('hide')
            $('#modal_add').modal('hide')
        })

        Livewire.on("finishHashtag", (status, message) => {
            alertMessage(status, message)
        })

        Livewire.on('onClickRefresh', (id) => {
            Livewire.emit('refreshHashtag')
            alertMessage(1, 'Data refreshed successfully!')
        })

        Livewire.on('onClickUpdateHashtag', (item) => {
            Livewire.emit('setHashtag', item);
            $('#modal_update').modal('show')
        })

        Livewire.on('onClickDelete', async (id) => {
            const response = await alertHapus('Warning !!!', 'Are you sure to delete this data?')
            if(response.isConfirmed == true){
                @this.set('hashtag_id', id)
                Livewire.emit('delete')
            }
        })
</script>
@endpush
