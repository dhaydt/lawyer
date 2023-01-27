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
                            <li class="breadcrumb-item text-gray-600">Service</li>
                            <li class="breadcrumb-item text-gray-500">Applied Jobs</li>
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
                                {{-- <div class="card-toolbar w-50 justify-content-end">
                                    <button type="button" wire:click.prevent="$emit('onClickAdd')"
                                        class="btn btn-primary btn-hover-rotate-end" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Add applied">
                                        <i class="fas fa-plus-square mr-2"></i> applied
                                    </button>
                                </div> --}}
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            @include('livewire.helper.alert-session')
                            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
                                <thead>
                                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                        <th class="min-w-125px">No.</th>
                                        <th class="min-w-125px">Name</th>
                                        <th class="min-w-125px">Position</th>
                                        <th class="text-end min-w-70px">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="fw-semibold text-gray-600">
                                    @if (count($applied) > 0)
                                    @foreach ($applied as $i=>$u)
                                    <tr>
                                        <td class="text-capitalize">
                                            {{ $i + 1 }}
                                        </td>
                                        <td class="text-capitalize">
                                            {{ $u->name }}
                                        </td>
                                        <td class="text-capitalize">
                                            {{ $u->job->position }}
                                        </td>
                                        <td class="text-end">
                                            <div class="btn-group btn-group-sm" role="group">
                                                <button type="button"
                                                    wire:click.prevent="$emit('onClickUpdateApplied', {{ $u }})"
                                                    class="btn btn-sm bg-primary text-white btn-hover-rotate-start"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Details {{ $u->name}}"><i
                                                        class="fas fa-eye text-light"></i></button>
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
                                {{ $applied->links() }}
                            </div>
                        </div>
                    </div>

                    <!--Modal Update -->
                    <div wire:ignore.self class="modal fade" tabindex="-1" id="modal_update" data-bs-backdrop="static"
                        data-bs-keyboard="false">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-capitalize">Applied {{ $name }}</h5>

                                    <!--begin::Close-->
                                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                        data-bs-dismiss="modal" aria-label="Close">
                                        <span class="svg-icon svg-icon-2x"></span>
                                    </div>
                                    <!--end::Close-->
                                </div>
                                <div class="modal-body">

                                    <div class="row mb-7">
                                        <label class="col-lg-4 fw-semibold text-muted">Position</label>
                                        <div class="col-lg-8">
                                            <span class="fw-bold fs-6 text-gray-800">: {{ $position }}</span>
                                        </div>
                                    </div>
                                    <div class="row mb-7">
                                        <label class="col-lg-4 fw-semibold text-muted">Full name</label>
                                        <div class="col-lg-8">
                                            <span class="fw-bold fs-6 text-gray-800">: {{ $name}}</span>
                                        </div>
                                    </div>
                                    <div class="row mb-7">
                                        <label class="col-lg-4 fw-semibold text-muted">Phone / WhatsApp</label>
                                        <div class="col-lg-8">
                                            <span class="fw-bold fs-6 text-gray-800">: {{ $phone }}</span>
                                        </div>
                                    </div>
                                    <div class="row mb-7">
                                        <label class="col-lg-4 fw-semibold text-muted">Email</label>
                                        <div class="col-lg-8">
                                            <span class="fw-bold fs-6 text-gray-800">: {{ $email}}</span>
                                        </div>
                                    </div>
                                    <div class="row mb-7">
                                        <label class="col-lg-4 fw-semibold text-muted">Gender</label>
                                        <div class="col-lg-8">
                                            <span class="fw-bold fs-6 text-gray-800">: {{ $gender }}</span>
                                        </div>
                                    </div>
                                    <div class="row mb-7">
                                        <label class="col-lg-4 fw-semibold text-muted">Marital Status</label>
                                        <div class="col-lg-8">
                                            <span class="fw-bold fs-6 text-gray-800">: {{ $marital }}</span>
                                        </div>
                                    </div>
                                    <div class="row mb-7">
                                        <label class="col-lg-4 fw-semibold text-muted">Education</label>
                                        <div class="col-lg-8">
                                            <span class="fw-bold fs-6 text-gray-800">: {{ $edu}}</span>
                                        </div>
                                    </div>
                                    <div class="row mb-7">
                                        <label class="col-lg-4 fw-semibold text-muted">Religion</label>
                                        <div class="col-lg-8">
                                            <span class="fw-bold fs-6 text-gray-800">: {{ $agama}}</span>
                                        </div>
                                    </div>
                                    <div class="row mb-7">
                                        <label class="col-lg-4 fw-semibold text-muted">KTP</label>
                                        <div class="col-lg-8">
                                            <a href="{{ asset('/'.$ktp) }}" data-bs-toggle="tootlip" title="View" target="_blank" class="symbol symbol-80px symbol-lg-150px mb-4">
                                                <img src="{{ asset('/'.$ktp) }}" class="" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row mb-7">
                                        <label class="col-lg-4 fw-semibold text-muted">Curriculum Vitae</label>
                                        <div class="col-lg-8">
                                            <span class="fw-bold fs-6 text-gray-800">: <a href="{{ asset('/'.$cv) }}" target="_blank">Download Curriculum Vitae</a></span>
                                        </div>
                                    </div>
                                    <div class="row mb-7">
                                        <label class="col-lg-4 fw-semibold text-muted">Address</label>
                                        <div class="col-lg-8">
                                            <span class="fw-bold fs-6 text-gray-800">: {{ $address }}</span>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
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

        Livewire.on("finishApplied", (status, message) => {
            alertMessage(status, message)
        })

        Livewire.on('onClickRefresh', (id) => {
            Livewire.emit('refreshApplied')
            alertMessage(1, 'Data refreshed successfully!')
        })

        Livewire.on('onClickUpdateApplied', (item) => {
            Livewire.emit('setApplied', item);
            $('#modal_update').modal('show')
        })

        Livewire.on('onClickDelete', async (id) => {
            const response = await alertHapus('Warning !!!', 'Are you sure to delete this data?')
            if(response.isConfirmed == true){
                @this.set('applied_id', id)
                Livewire.emit('delete')
            }
        })
</script>
@endpush
