<div class="modal bg-body fade" id="kt_modal_add_customer" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog  modal-fullscreen">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Form-->
            <form class="form" action="{{ route('admin.laws.post') }}" id="kt_modal_add_customer_form" method="POST" enctype="multipart/form-data">
                @csrf
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_add_customer_header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bold">Add Law</h2>
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body">
                    <!--begin::Scroll-->
                    <div class="scroll-y me-n7 pe-7" id="kt_modal_add_customer_scroll"
                        data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
                        data-kt-scroll-max-height="auto"
                        data-kt-scroll-dependencies="#kt_modal_add_customer_header"
                        data-kt-scroll-wrappers="#kt_modal_add_customer_scroll"
                        data-kt-scroll-offset="300px">
                        <div class="row">
                            <div class="col col-md-6">
                                <div class="fv-row mb-7">
                                    <label class="required fs-6 fw-semibold mb-2">Law number</label>
                                    <input type="number" class="form-control form-control-solid" placeholder="Number of law"
                                        name="nomor"/>
                                </div>
                            </div>
                            <div class="col col-md-6">
                                <div class="fv-row mb-7">
                                    <label class="required fs-6 fw-semibold mb-2">Law Year</label>
                                    <input type="number" class="form-control form-control-solid" placeholder="Law year"
                                    name="year"/>
                                </div>
                            </div>
                        </div>
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold mb-2">
                                <span class="required">Law Title</span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <textarea class="form-control form-control-solid"
                                name="about"></textarea>
                            <!--end::Input-->
                        </div>
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold mb-2">
                                <span class="">File PDF</span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="file" name="file" accept="application/pdf" class="form-control">
                            <!--end::Input-->
                        </div>
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold mb-2">
                                <span class="required">Law Content</span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <textarea class="form-control form-control-solid"
                                name="keterangan" id="myeditorinstance" rows="3"></textarea>
                            <!--end::Input-->
                        </div>
                    </div>
                    <!--end::Scroll-->
                </div>
                <!--end::Modal body-->
                <!--begin::Modal footer-->
                <div class="modal-footer flex-center">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="kt_modal_add_customer_submit" class="btn btn-primary">
                        <span class="indicator-label">Save law</span>
                        <span class="indicator-progress">Please wait...
                            <span
                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                    <!--end::Button-->
                </div>
                <!--end::Modal footer-->
            </form>
            <!--end::Form-->
        </div>
    </div>
</div>
