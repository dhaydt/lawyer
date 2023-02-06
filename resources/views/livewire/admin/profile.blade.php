<div class="content flex-row-fluid" id="kt_content">
    <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
        <!--begin::Card header-->
        <div class="card-header cursor-pointer">
            <!--begin::Card title-->
            <div class="card-title m-0">
                <h3 class="fw-bold m-0">Profile {{ $profile->name }}</h3>
            </div>
            <div class="tools">
                <a href="javascript:" class="btn btn-primary align-self-center">Edit Profile</a>
                <a href="javascript:" class="btn btn-primary align-self-center">Change Password</a>
            </div>
        </div>
        <div class="card-body p-9">
            <div class="row mb-7">
                <label class="col-lg-4 fw-semibold text-muted">Name</label>
                <div class="col-lg-8">
                    <span class="fw-bold fs-6 text-gray-800">{{ $profile->name }}</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-semibold text-muted">Email</label>
                <div class="col-lg-8 fv-row">
                    <span class="fw-semibold text-gray-800 fs-6">{{ $profile->email }}</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-semibold text-muted">Phone</label>
                <div class="col-lg-8 d-flex align-items-center">
                    <span class="fw-bold fs-6 text-gray-800 me-2">{{ $profile->phone }}</span>
                </div>
            </div>
        </div>
        <!--end::Card body-->
    </div>
</div>