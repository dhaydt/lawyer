<div class="container my-3">
    <div class="row">
        <div class="card">
            <div class="card-header p-0">
                <div class="card-title mb-0">
                    <div class="post-text" style="background-size: cover;">
                        <h2 class="mb-0">Job Details</h2>
                    </div>
                </div>
            </div>
            <div class="card-body pl-4" wire:ignore>
                {!! $carrier->description !!}
            </div>
            <div class="card-header p-0">
                <div class="card-title mb-0">
                    <div class="post-text" style="background-size: cover;">
                        <h2 class="mb-0">Qualification</h2>
                    </div>
                </div>
            </div>
            <div class="card-body pl-4">
                {!! $carrier->qualification !!}
            </div>
            <div class="card-header p-0">
                <div class="card-title mb-0">
                    <div class="post-text" style="background-size: cover;">
                        <h2 class="mb-0">Form Application</h2>
                    </div>
                </div>
            </div>
            <div class="card-body pl-4">
                <div class="row">
                    <form wire:submit.prevent="save" id="form_add">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="required form-label">Full Name</label>
                                    <input type="text" class="form-control form-control-solid" wire:model="name"
                                        placeholder="Your full name" />
                                    @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="required form-label">Phone / WhatsApp
                                        Number</label>
                                    <input type="number" class="form-control form-control-solid" wire:model="phone"
                                        placeholder="Your phone number" />
                                    @error('phone')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="required form-label">Geder</label>
                                    <select name="gender" class="form-select form-select-solid" wire:model="gender">
                                        <option value="">- Select your gender -</option>
                                        <option value="man">Man</option>
                                        <option value="woman">Woman</option>
                                    </select>
                                    @error('gender')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="required form-label">Marital
                                        status</label>
                                    <select name="marital" class="form-select form-select-solid" wire:model="marital">
                                        <option value=""> -- Select Marital Status -- </option>
                                        <option value="single">Single</option>
                                        <option value="marry">Marry</option>
                                        <option value="divorced">Divorced</option>
                                        <option value="widower">Widower</option>
                                    </select>
                                    @error('marital')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="required form-label">Last
                                        Education</label>
                                    <select name="marital" class="form-select form-select-solid" wire:model="edu">
                                        <option value=""> -- Select Last Education --</option>
                                        @foreach ($edu_list as $e)
                                        <option value="{{ $e }}">{{ $e }}</option>
                                        @endforeach
                                    </select>
                                    @error('edu')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="required form-label">Religion</label>
                                    <select name="marital" class="form-select form-select-solid" wire:model="agama">
                                        <option value=""> -- Select Your Religion --</option>
                                        @foreach ($agama_list as $a)
                                        <option value="{{ $a }}">{{ $a }}</option>
                                        @endforeach
                                    </select>
                                    @error('agama')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="required form-label">Email</label>
                                    <input type="email" class="form-control" wire:model="email" placeholder="type your email">
                                    @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="" class="required form-label">Address</label>
                                    <textarea name="address" class="form-control" cols="30" rows="3"
                                        wire:model="address"></textarea>
                                    @error('address')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="" class="form-label">Upload KTP <small class="text-danger">(accepted file:
                                        .jpg, .png)</small></label>
                                <input type="file" class="form-control" accept="image/*" wire:model="ktp">
                                @error('ktp')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="" class="form-label">Upload Curriculum Vitae <small
                                        class="text-danger">(accepted file: .pdf)</small></label>
                                <input type="file" class="form-control" accept="application/pdf" wire:model="cv">
                                @error('cv')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="text-center">
                            @include('helper.simple-loading', ['target' => 'save', 'message' => 'Saving data...'])
                        </div>
                        <div class="card-footer d-flex justify-content-end mt-4">
                            <button type="submit" class="btn btn-success">Apply Jobs</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
