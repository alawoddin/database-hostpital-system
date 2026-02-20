@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


    <div class="app-body">

        <!-- Row start -->
        <div class="row gx-4">
            <div class="col-sm-12">
                <div class="card mb-4">
                    <div class="card-body">

                        <!-- Tabs starts -->
                        <ul class="nav nav-pills mb-3 gap-1" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link rounded-pill active " id="pills-a-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-a" type="button" role="tab" aria-controls="pills-a"
                                    aria-selected="true">General</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link rounded-pill" id="pills-c-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-c" type="button" role="tab" aria-controls="pills-c"
                                    aria-selected="false">Billing</button>
                            </li>

                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-a" role="tabpanel"
                                aria-labelledby="pills-a-tab" tabindex="0">

                                <!-- Row start -->
                                <div class="row gx-4">
                                    <div class="col-xxl-9 col-sm-12">
                                        <div class="border rounded-2 p-3 mb-3">
                                            <form action="{{ route('profile.store') }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <!-- Row start -->
                                                <div class="row gx-4">
                                                    <div class="col-xxl-3 col-sm-4">
                                                        <div class="mb-2">
                                                            <img id="showImage"
                                                                src="{{ !empty($profileData->photo) ? url('upload/user_images/' . $profileData->photo) : url('upload/no_image.jpg') }}"
                                                                class=" avatar-xl img-thumbnail float-start"
                                                                alt="image profile">

                                                        </div>
                                                        <label class="form-label">Profile Image</label>
                                                        <input class="form-control" type="file" name="photo"
                                                            id="image">
                                                        <div class="form-text">
                                                            Max file size 1MB
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-9 col-sm-8">

                                                        <div class="mb-4 bg-primary-subtle text-primary p-2 rounded-2">
                                                            <h6 class="m-0">Update Your Details</h6>
                                                        </div>

                                                        <!-- Row start -->
                                                        <div class="row gx-4">
                                                            <div class="col-sm-6">

                                                                <div class="mb-3">
                                                                    <label for="displayName" class="form-label">Display
                                                                        Name</label>
                                                                    <input class="form-control" type="text"
                                                                        name="name" value="{{ $profileData->name }}">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="yourEmail" class="form-label">Email</label>
                                                                    <input class="form-control" type="email"
                                                                        name="email" value="{{ $profileData->email }}">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="mb-3">
                                                                    <label for="fullName" class="form-label">Address</label>
                                                                    <input name="address" class="form-control"
                                                                        placeholder="Add your address"
                                                                        value="{{ $profileData->address }}">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="yourPhone" class="form-label">Phone
                                                                        Number</label>
                                                                    <input class="form-control" type="text"
                                                                        name="phone" value="{{ $profileData->phone }}">
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="d-flex justify-content-end gap-1">
                                                                    <button class="btn btn-danger"
                                                                        type="button">Reset</button>
                                                                    <button class="btn btn-primary" type="submit">Update
                                                                        Profile

                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Row end -->

                                                    </div>
                                                </div>
                                                <!-- Row end -->

                                            </form>

                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-sm-12">
                                        <div class="border rounded-2 p-3 mb-3">
                                            <div class="mb-4 bg-light-subtle p-2 rounded-2">
                                                <h6 class="m-0">Link Accounts</h6>
                                            </div>
                                            <div class="d-grid gap-3">
                                                <div class="d-flex align-items-center gap-2">
                                                    <img src="{{ asset('backend/assets/images/social/facebook.svg') }}"
                                                        class="img-2x" alt="Admin Templates">
                                                    <span>Facebook</span>
                                                    <button type="button"
                                                        class="btn btn-outline-primary btn-sm rounded-pill ms-auto">Connect</button>
                                                </div>
                                                <div class="d-flex align-items-center gap-2">
                                                    <img src="{{ asset('backend/assets/images/social/x.svg') }}"
                                                        class="img-2x" alt="Admin Templates">
                                                    <span>X</span>
                                                    <button type="button"
                                                        class="btn btn-outline-primary btn-sm rounded-pill ms-auto">Connect</button>
                                                </div>
                                                <div class="d-flex align-items-center gap-2">
                                                    <img src="{{ asset('backend/assets/images/social/google.svg') }}"
                                                        class="img-2x" alt="Admin Templates">
                                                    <span>Google</span>
                                                    <button type="button"
                                                        class="btn btn-outline-primary btn-sm rounded-pill ms-auto">Connect</button>
                                                </div>
                                                <div class="d-flex align-items-center gap-2">
                                                    <img src="{{ asset('backend/assets/images/social/github.svg') }}"
                                                        class="img-2x" alt="Admin Templates">
                                                    <span>Github</span>
                                                    <button type="button"
                                                        class="btn btn-outline-primary btn-sm rounded-pill ms-auto">Connect</button>
                                                </div>
                                                <div class="d-flex align-items-center gap-2">
                                                    <img src="{{ asset('backend/assets/images/social/instagram.svg') }}"
                                                        class="img-2x" alt="Admin Templates">
                                                    <span>Instagram</span>
                                                    <button type="button"
                                                        class="btn btn-outline-primary btn-sm rounded-pill ms-auto">Connect</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Row end -->

                            </div>

                            <div class="tab-pane fade" id="pills-c" role="tabpanel" aria-labelledby="pills-c-tab"
                                tabindex="0">

                                <!-- Row start -->
                                <div class="row gx-4">
                                    <div class="col-sm-12">
                                        <div class="border rounded-2 p-3 mb-3">
                                            <div class="mb-4 bg-primary-subtle p-2 rounded-2">
                                                You can upgrade and downgrade whenever you want.
                                            </div>

                                            <!-- Row start -->
                                            <div class="row gx-4 justify-content-center mb-5">
                                                <div class="col-xl-3 col-sm-4">
                                                    <a href="javascript:void(0)"
                                                        class="d-flex border border-3 rounded-3 p-3 position-relative">
                                                        <div class="d-grid gap-3">
                                                            <i class="bi bi-star text-primary fs-3"></i>
                                                            <h3 class="m-0 fw-bold">$3.00/<small
                                                                    class="fw-normal text-secondary">mo</small>
                                                            </h3>
                                                            <h6 class="m-0 text-uppercase">Basic</h6>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-xl-3 col-sm-4">
                                                    <a href="javascript:void(0)"
                                                        class="d-flex border border-primary border-3 rounded-3 p-3 position-relative">
                                                        <div class="ribbon-2-end">Selected</div>
                                                        <div class="d-grid gap-3">
                                                            <i class="bi bi-star-half text-primary fs-3"></i>
                                                            <h3 class="m-0 fw-bold">$9.99/<small
                                                                    class="fw-normal text-secondary">mo</small>
                                                            </h3>
                                                            <h6 class="m-0 text-uppercase">Standard</h6>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-xl-3 col-sm-4">
                                                    <a href="javascript:void(0)"
                                                        class="d-flex border border-3 rounded-3 p-3 position-relative">
                                                        <div class="d-grid gap-3">
                                                            <i class="bi bi-star-fill text-primary fs-3"></i>
                                                            <h3 class="m-0 fw-bold">$19.00/<small
                                                                    class="fw-normal text-secondary">mo</small>
                                                            </h3>
                                                            <h6 class="m-0 text-uppercase">Business</h6>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- Row end -->



                                        </div>
                                    </div>
                                </div>
                                <!-- Row end -->

                            </div>





                        </div>

                    </div>
                    <!-- Tabs ends -->

                </div>
            </div>
        </div>
    </div>
    <!-- Row end -->




    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            })
        })
    </script>
@endsection
