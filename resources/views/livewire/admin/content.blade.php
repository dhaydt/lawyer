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
                                <a href="../../index.html" class="text-gray-600 text-hover-primary">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item text-gray-600">Content</li>
                            <li class="breadcrumb-item text-gray-500">Post & Journals</li>
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
                                        data-bs-placement="top" title="Add Post/Journals">
                                        <i class="fas fa-plus-square mr-2"></i> Post/Journals
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
                                        <th class="min-w-125px">Title</th>
                                        <th class="min-w-125px">Images</th>
                                        <th class="min-w-125px">Hastag</th>
                                        <th class="min-w-125px">Category</th>
                                        <th class="text-end min-w-70px">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="fw-semibold text-gray-600">
                                    @if (count($content) > 0)
                                    @foreach ($content as $i => $u)
                                    <tr>
                                        <td class="text-capitalize">
                                            {{ $i+1 }}
                                        </td>
                                        <td class="text-capitalize">
                                            {{ $u->title }}
                                        </td>
                                        <td class="text-capitalize">
                                            @if ($u->image != null)
                                            <img height="100px" src="{{ asset($u->image) }}" alt="">
                                            @else
                                            <span class="badge badge-danger">No Image</span>
                                            @endif
                                        </td>
                                        <td class="text-capitalize text-center">
                                            @if ($u->hashtag != null)
                                                @foreach ( json_decode($u->hashtag) as $h)
                                                    <span class="badge badge-success">{{ $h }}</span>
                                                @endforeach
                                            @else
                                                <span class="badge badge-danger">No Hashtag</span>
                                            @endif
                                        </td>
                                        <td class="text-capitalize">
                                            {{ $u->category }}
                                        </td>
                                        <td class="text-end">
                                            <div class="btn-group btn-group-sm" role="group">
                                                <button type="button"
                                                    wire:click.prevent="$emit('onClickUpdateContent', {{ $u }})"
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
                                {{ $content->links() }}
                            </div>
                        </div>
                    </div>
                    <!--Modal Add -->
                    <div wire:ignore.self class="modal fade" tabindex="-1" id="modal_add" data-bs-backdrop="static"
                        data-bs-keyboard="false">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add content</h5>

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
                                                class="required form-label">Title</label>
                                            <input type="text" class="form-control form-control-solid"
                                                wire:model="title_content" placeholder="content title" />
                                            @error('title_content')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="mb-10 ">
                                            <label for="exampleFormControlInput1"
                                                class="required form-label">Category</label>
                                            <select class="form-select form-select-solid" wire:model="category">
                                                <option value="">-- Select Category --</option>
                                                <option value="post" class="text-capitalize">Post</option>
                                                <option value="journal" class="text-capitalize">Journal</option>
                                            </select>
                                            @error('category')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="mb-10" wire:ignore>
                                            <label for="exampleFormControlInput1"
                                                class="required form-label">Hashtag</label>
                                            <select id="hastag-dropdown" class="form-select form-select-solid" wire:model="hashtag" multiple>
                                                @foreach ($has_list as $hl)
                                                <option value="{{ $hl->name }}" class="text-capitalize">{{ $hl->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('hashtag')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="mb-10">
                                            <label class="col-lg-4 col-form-label fw-semibold fs-6">Image</label>
                                            <div class="col-lg-12 pt-4">
                                                <div class="image-input image-input-outline" data-kt-image-input="true">
                                                    <img class="image-input image-input-outline img-profile"
                                                        src="{{ $image ? $image->temporaryUrl() : asset('assets_metronic/image/placeholder.jpg') }}"></img>
                                                    {{-- <div class="image-input-wrapper w-125px h-125px"
                                                        style="background-image: url(../assets/img/users.png)">
                                                    </div> --}}
                                                    <label id="label-img"
                                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                        data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                        title="Add image content">
                                                        <i class="bi bi-pencil-fill fs-7"></i>
                                                        <input type="file" id="image" name="image"
                                                            accept=".png, .jpg, .jpeg" wire:model="image" />
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
                                            </div>
                                            @error('image')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="mb-10" id="add_content" wire:ignore>
                                            <label for="exampleFormControlInput1"
                                                class="required form-label">Content</label>
                                                <div id="editor"></div>
                                            {{--
                                            <x-forms.trix wire:model.lazy="isi_content" id="content"
                                                :initial-value="$content->content"
                                                @trix-attachment-add="console.log($event.attachment)" /> --}}
                                            @error('isi_content')
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
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Edit Content</h5>

                                    <!--begin::Close-->
                                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                        data-bs-dismiss="modal" aria-label="Close">
                                        <span class="svg-icon svg-icon-2x"></span>
                                    </div>
                                    <!--end::Close-->
                                </div>

                                <form wire:submit.prevent="update" id="form_update">
                                    <input type="hidden" wire:mode="cabang_id">
                                    <div class="modal-body">
                                        <div class="text-center">
                                            @include('helper.simple-loading', ['target' => 'update', 'message' =>
                                            'Menyimpan data ...'])
                                        </div>
                                        <div class="mb-10">
                                            <label for="exampleFormControlInput1"
                                                class="required form-label">Title</label>
                                            <input type="text" name="title" class="form-control form-control-solid"
                                                wire:model="title_content" placeholder="content title" />
                                            @error('title_content')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="mb-10 ">
                                            <label for="exampleFormControlInput1"
                                                class="required form-label">Category</label>
                                            <select class="form-select form-select-solid" wire:model="category">
                                                <option value="">-- Select Category --</option>
                                                <option value="post" class="text-capitalize">Post</option>
                                                <option value="journal" class="text-capitalize">Journal</option>
                                            </select>
                                            @error('category')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="mb-10">
                                            <label class="col-lg-4 col-form-label fw-semibold fs-6">Image</label>
                                            <div class="col-lg-12 pt-4">
                                                <div class="image-input image-input-outline" data-kt-image-input="true"
                                                    style="background-image: url('../assets/media/svg/avatars/blank.svg')">
                                                    @if ($image)
                                                    <img class="image-input image-input-outline img-profile"
                                                        src="{{ $image->temporaryUrl() }}"></img>
                                                    @else
                                                    <img id="placeholder"
                                                        src="{{ asset($photo) }}"
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
                                                        <input type="file" id="profile" name="image"
                                                            accept=".png, .jpg, .jpeg" wire:model="image" />
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
                                            </div>
                                            @error('image')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="mb-10 hashtag-parent" wire:ignore>
                                            <label for=""
                                                class="required form-label">Hashtag</label>
                                            <select id="hastag-dropdowns" data-dropdown-parent=".hashtag-parent" class="form-select form-select-solid" name="hashtag" wire:model="hashtag" multiple>
                                                @foreach ($has_list as $hl)
                                                <option value="{{ $hl->name }}" class="text-capitalize">{{ $hl->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('hashtag')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="mb-10" wire:ignore id="contents">
                                            <label for="exampleFormControlInput1"
                                                class="required form-label">Content</label>
                                                <div id="editors"></div>
                                            {{--
                                            <x-forms.trix wire:model.lazy="isi_content" id="content"
                                                :initial-value="$content->content"
                                                @trix-attachment-add="console.log($event.attachment)" /> --}}
                                            @error('isi_content')
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

        $('input[name="imgSecond"]').change(function(){
            $('#placeholder2').addClass('d-none');
        });

        $('input[name="img"]').change(function(){
            $('#placeholder').addClass('d-none');
        });

        window.addEventListener('contentChange', function(){
            $('#hastag-dropdowns').select2();
        })

        Livewire.on('onClickAdd', () => {
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

        Livewire.on("finishContent", (status, message) => {
            alertMessage(status, message)
        })

        Livewire.on('onClickRefresh', (id) => {
            Livewire.emit('refreshContent')
            alertMessage(1, 'Data refreshed successfully!')
        })

        Livewire.on('onClickUpdateContent', (item) => {
            Livewire.emit('setContent', item);
            $('#modal_update').modal('show');

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
                @this.set('content_id', id)
                Livewire.emit('delete')
            }
        })
</script>
@endpush
