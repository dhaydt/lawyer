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
                            <li class="breadcrumb-item text-gray-600">Client</li>
                            <li class="breadcrumb-item text-gray-500">List Client Company</li>
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
                                        data-bs-placement="top" title="Add Client">
                                        <i class="fas fa-plus-square mr-2"></i> Client
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
                                        <th class="min-w-125px">Logo</th>
                                        <th class="min-w-125px">Description</th>
                                        <th class="text-end min-w-70px">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="fw-semibold text-gray-600">
                                    @if (count($client) > 0)
                                    @foreach ($client as $i => $u)
                                    <tr>
                                        <td class="text-capitalize">
                                            {{ $i+1 }}
                                        </td>
                                        <td class="text-capitalize">
                                            {{ $u->name }}
                                        </td>
                                        <td class="text-capitalize">
                                            @if ($u->img != null)
                                            <img height="100px" src="{{ asset($u->img) }}" alt="">
                                            @else
                                            <span class="badge badge-danger">No Logo</span>
                                            @endif
                                        </td>
                                        <td class="text-capitalize">
                                            {{ $u->description }}
                                        </td>
                                        <td class="text-end">
                                            <div class="btn-group btn-group-sm" role="group">
                                                <button type="button"
                                                    wire:click.prevent="$emit('onClickUpdateClient', {{ $u }})"
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
                                {{ $client->links() }}
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
                                        Add Client
                                        @else
                                        Edit {{ $name }}
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
                                                class="required form-label">Company name</label>
                                            <input type="text" class="form-control form-control-solid"
                                                wire:model="name" placeholder="company name" />
                                            @error('name')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="mb-10">
                                            <label class="col-lg-4 col-form-label fw-semibold fs-6">Logo</label>
                                            <div class="col-lg-12 pt-4">
                                                <div class="image-input image-input-outline" data-kt-image-input="true">
                                                    @if ($type == 'save')
                                                    <img class="image-input image-input-outline img-profile"
                                                        src="{{ $image ? $image->temporaryUrl() : asset('assets_metronic/image/logo-placeholder.png') }}"></img>
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
                                                        title="Change client company logo">
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
                                        </div>
                                        <div class="mb-10">
                                            <label for="" class="required form-label">Description service</label>
                                            <textarea name="description" class="form-control form-control-solid" cols="30" rows="3"
                                                wire:model="description"></textarea>
                                            <div class="form-text">Description of the problem faced by the client.</div>
                                            {{--
                                            <x-forms.trix wire:model.lazy="isi_client" id="client"
                                                :initial-value="$client->client"
                                                @trix-attachment-add="console.log($event.attachment)" /> --}}
                                            @error('isi_client')
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
        $('#hastag-dropdown').select2({
            placeholder: "-- Select Hashtag --"
        });

        $('#hastag-dropdowns').select2({
        });

        $('#hastag-dropdown').on('change', function (e) {
            let data = $(this).val();
            @this.set('hashtag', data);
        });

        $('#hastag-dropdowns').on('change', function (e) {
            let data = $(this).val();
            @this.set('hashtag', data);
        });

        ClassicEditor
        .create(document.querySelector('#editor'))
        .then(editor => {
            editor.model.document.on('change:data', () => {
                @this.set('isi_content', editor.getData());
            })
        })
        .catch(error => {
            console.error(error);
        });

        ClassicEditor
            .create(document.querySelector('#editors'))
            .then(editor => {
                editor.model.document.on('change:data', () => {
                    @this.set('isi_content', editor.getData());
                })
            })
            .catch(error => {
                console.error(error);
            });
        });

        window.addEventListener('contentChange', function(){
            $('#hastag-dropdowns').select2();
        })

        Livewire.on('onClickAdd', () => {
            @this.set('type', 'save')
            @this.set('client_id', null)
            Livewire.emit('resetInput');
            $('#modal_add').modal('show');
            const domEditableElement = document.querySelector( '#add_content .ck-editor__editable' );

            // Get the editor instance from the editable element.
            const editorInstance = domEditableElement.ckeditorInstance;

            // Use the editor instance API.
            editorInstance.setData('');
        })

        Livewire.on('refresh', () => {
            $('#modal_update').modal('hide')
            $('#modal_add').modal('hide')
        })

        Livewire.on("finishClient", (status, message) => {
            alertMessage(status, message)
        })

        Livewire.on('onClickRefresh', (id) => {
            Livewire.emit('refreshClient')
            alertMessage(1, 'Data refreshed successfully!')
        })

        Livewire.on('onClickUpdateClient', (item) => {
            @this.set('type', 'update');
            Livewire.emit('setClient', item);
            $('#modal_add').modal('show');

            // $('#hastag-dropdowns').select2({
            //     value: item.hashtag
            // })

            // $('#hastag-dropdowns').select2({
            //     placeholder: JSON.parse(item.hashtag)
            // })



            // A reference to the editor editable element in the DOM.
            const domEditableElement = document.querySelector( '#contents .ck-editor__editable' );

            // Get the editor instance from the editable element.
            const editorInstance = domEditableElement.ckeditorInstance;

            // Use the editor instance API.
            editorInstance.setData('');
            editorInstance.setData( item.content);
            $('#hastag-dropdowns').val(item.hashtag).trigger('change');


        })

        Livewire.on('onClickDelete', async (id) => {
            const response = await alertHapus('Warning !!!', 'Are you sure to delete this data?')
            if(response.isConfirmed == true){
                @this.set('client_id', id)
                Livewire.emit('delete')
            }
        })
</script>
@endpush
