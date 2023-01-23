@push('style')
<style>
    .image-input-outline{
        box-shadow: 0px 10px 30px 0px rgb(0 0 0 / 10%);
    }
    .img-profile{
        border-radius: 10px;
        height: 200px;
        width: auto;
        max-width: 100%;
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
                                <a href="{{ route('admin.dashboard') }}" class="text-gray-600 text-hover-primary">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item text-gray-600">Service</li>
                            <li class="breadcrumb-item text-gray-500">Recruitments</li>
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
                                        data-bs-placement="top" title="Add Recruitment">
                                        <i class="fas fa-plus-square mr-2"></i> Recruitment
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
                                        <th class="min-w-125px">Title / Position</th>
                                        <th class="min-w-125px">Description</th>
                                        <th class="min-w-125px">Qualification</th>
                                        <th class="min-w-125px">Expired At</th>
                                        <th class="text-end min-w-70px">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="fw-semibold text-gray-600">
                                    @if (count($job) > 0)
                                    @foreach ($job as $i => $u)
                                    <tr>
                                        <td class="text-capitalize">
                                            {{ $i+1 }}
                                        </td>
                                        <td class="text-capitalize">
                                            {{ $u->position }}
                                        </td>
                                        <td class="text-capitalize">
                                            {!! $u->description !!}
                                        </td>
                                        <td class="text-capitalize">
                                            {!! $u->qualification !!}
                                        </td>
                                        <td class="text-capitalize">
                                            {{ \Carbon\Carbon::parse($u->expire)->format("d M Y") }}
                                        </td>
                                        <td class="text-end">
                                            <div class="btn-group btn-group-sm" role="group">
                                                <button type="button"
                                                    wire:click.prevent="$emit('onClickUpdateJob', {{ $u }})"
                                                    class="btn btn-sm bg-success text-white btn-hover-rotate-start"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Edit {{ $u->position}}"><i
                                                        class="fas fa-edit text-light"></i></button>
                                                <button type="button"
                                                    wire:click.prevent="$emit('onClickDelete', `{{ $u->id }}`)"
                                                    class="btn btn-sm bg-danger btn-hover-rotate-end"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Delete {{ $u->position}}"><i
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
                                {{ $job->links() }}
                            </div>
                        </div>
                    </div>
                    <!--Modal Add -->
                    <div wire:ignore.self class="modal fade" tabindex="-1" id="modal_add" data-bs-backdrop="static"
                        data-bs-keyboard="false">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">
                                        @if ($type == 'save')
                                        Add job
                                        @else
                                        Edit {{ $position }}
                                        @endif
                                    </h5>

                                    <!--begin::Close-->
                                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                        data-bs-dismiss="modal" aria-label="Close">
                                        <span class="svg-icon svg-icon-2x"></span>
                                    </div>
                                    <!--end::Close-->
                                </div>

                                <form wire:ignore.self wire:submit.prevent="save" id="form_add" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        @include('helper.alert-message')
                                        <div class="text-center">
                                            @include('helper.simple-loading', ['target' => 'simpan', 'message' =>
                                            'Menyimpan data ...'])
                                        </div>
                                        <div class="mb-10">
                                            <label for="exampleFormControlInput1"
                                                class="required form-label">Title / Position</label>
                                            <input type="text" class="form-control form-control-solid"
                                                wire:model="position" placeholder="job titles / position" />
                                            @error('position')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="mt-10" wire:ignore id="desc">
                                            <label for="" class="required form-label">Jobs Description</label>
                                            <div id="description"></div>
                                        </div>
                                        <div>
                                            @error('description')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="mt-10" wire:ignore id="qualifi">
                                            <label for="" class="required form-label">Jobs Qualification</label>
                                            <div id="qualification"></div>
                                        </div>
                                        @error('qualification')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                        <div class="mb-10 mt-10">
                                            <label for="" class="required form-label">Expired Job at ?</label>
                                            <input type="date" name="expire" class="form-control form-control-solid" wire:model="expire">
                                            @error('expire')
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
            ClassicEditor
                .create(document.querySelector('#description'))
                .then(editor => {
                    editor.model.document.on('change:data', () => {
                        @this.set('description', editor.getData());
                    })
                })
                .catch(error => {
                    console.error(error);
            });

            ClassicEditor
                .create(document.querySelector('#qualification'))
                .then(editor => {
                    editor.model.document.on('change:data', () => {
                        @this.set('qualification', editor.getData());
                    })
                })
                .catch(error => {
                    console.error(error);
            });
        });

        window.addEventListener('contentChange', function(){

        })

        Livewire.on('onClickAdd', () => {
            @this.set('type', 'save')
            @this.set('job_id', null)
            Livewire.emit('resetInput');
            $('#modal_add').modal('show')
            const domEditableElement = document.querySelector( '#desc .ck-editor__editable' );

            // Get the editor instance from the editable element.
            const editorInstance = domEditableElement.ckeditorInstance;

            // Use the editor instance API.
            editorInstance.setData('');
        })

        Livewire.on('refresh', () => {
            $('#modal_update').modal('hide')
            $('#modal_add').modal('hide')
        })

        Livewire.on("finishJob", (status, message) => {
            alertMessage(status, message)
        })

        Livewire.on('onClickRefresh', (id) => {
            Livewire.emit('refreshJob')
            alertMessage(1, 'Data refreshed successfully!')
        })

        Livewire.on('onClickUpdateJob', (item) => {
            @this.set('type', 'update');
            Livewire.emit('setJob', item);
            $('#modal_add').modal('show');
            // A reference to the editor editable element in the DOM.
            const domEditableElement = document.querySelector( '#desc .ck-editor__editable' );

            // Get the editor instance from the editable element.
            const editorInstance = domEditableElement.ckeditorInstance;

            // Use the editor instance API.
            editorInstance.setData('');
            editorInstance.setData( item.description);

            const domEditableElement2 = document.querySelector( '#qualifi .ck-editor__editable' );

            // Get the editor instance from the editable element.
            const editorInstance2 = domEditableElement2.ckeditorInstance;

            // Use the editor instance API.
            editorInstance2.setData('');
            editorInstance2.setData( item.qualification);

        })

        Livewire.on('onClickDelete', async (id) => {
            const response = await alertHapus('Warning !!!', 'Are you sure to delete this data?')
            if(response.isConfirmed == true){
                @this.set('job_id', id)
                Livewire.emit('delete')
            }
        })
</script>
@endpush
