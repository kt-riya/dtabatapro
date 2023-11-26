
@extends('layout.layout')
<div class="d-flex flex-column flex-column-fluid container-fluid">
    <div class="content flex-column-fluid position-relative" id="kt_content">
        {{-- <div class="position-absolute"
                style=" background-image: url('https://dtabata.howincloud.com/public/assets/images/d-tabata-logo.svg') ;background-position: center;background-repeat: no-repeat;background-size: 30%;opacity:0.1;left:0;top:0;width:100%;height:100%">
            </div> --}}
        <div class="card mb-5 mb-xxl-8">
            <div class="card-body pt-9 pb-0">
                <!--begin::Details-->
                <div class="d-flex flex-wrap flex-sm-nowrap">
                    <!--begin: Pic-->
                    <div class="me-7 mb-4">
                        <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                            <img src="https://dtabata.howincloud.com/public/users/1698645494girl-removebg-preview.png" style="object-fit:cover; height:200px; width:200px" alt="image">
                        </div>
                    </div>

                    <!--end::Pic-->
                    <!--begin::Info-->
                    <div class="flex-grow-1">
                        <!--begin::Title-->
                        <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                            <!--begin::User-->
                            <div class="d-flex flex-column">
                                <!--begin::Name-->
                                <div class="d-flex align-items-center mb-2">
                                    <span class="text-gray-900  fs-2 fw-bolder me-1">admin@dtabata.com</span>
                                    <span>
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen026.svg-->
                                        <span class="svg-icon svg-icon-1 svg-icon-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                                <path d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z" fill="#00A3FF"></path>
                                                <path class="permanent" d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z" fill="white"></path>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                </div>
                                <!--end::Name-->
                                <!--begin::Info-->
                                <div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">
                                    <span class="d-flex align-items-center text-gray-400  me-5 mb-2">
                                        <!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
                                            <span class="svg-icon svg-icon-4 me-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z" fill="black"></path>
                                                <path d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z" fill="black"></path>
                                            </svg>
                                        </span>
                                        Super Admin
                                    </span>
                                    <span class="d-flex align-items-center text-gray-400  me-5 mb-2">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                        <span class="svg-icon svg-icon-4 me-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->8787656765
                                    </span>
                                    <span class="d-flex align-items-center text-gray-400  mb-2">
                                        <!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
                                        <span class="svg-icon svg-icon-4 me-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="black"></path>
                                                <path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="black"></path>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->haafilhalf@gmail.com
                                    </span>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::User-->
                        </div>
                        <!--end::Title-->
                        <!--begin::Stats-->
                        <div class="d-flex flex-wrap flex-stack">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column flex-grow-1 pe-8">
                                <!--begin::Stats-->
                                <div class="d-flex flex-wrap">
                                    <!--begin::Stat-->

                                    <!--end::Stat-->
                                    <!--begin::Stat-->
                                    <!--end::Stat-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Stats-->
                    </div>
                    <!--end::Info-->
                </div>
                
                <div class="card mt-4 mb-4" style="background-color: white; box-shadow:0px 0px 0px">
                
                    <div class="card-header  card-header-stretch" style="background-color: white;" >
                        <div class="card-toolbar">
                            <ul class="nav nav-pill border-0 flex-row flex-md-row me-5 mb-3 mb-md-0 fs-6">
                                <li class="nav-item w-md-120px me-0">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#kt_vtab_pane_1">General</a>
                                </li>
                                <li class="nav-item w-md-120px me-0">
                                    <a class="nav-link" data-bs-toggle="tab" href="#kt_vtab_pane_2">Roles and permissions</a>
                                </li>
                                                            
                                    <li class="nav-item w-md-120px me-0">
                                        <a class="nav-link" data-bs-toggle="tab" href="#kt_vtab_pane_4">Weight History</a>
                                    </li>
                                    <li class="nav-item w-md-120px me-0">
                                        <a class="nav-link" data-bs-toggle="tab" href="#kt_vtab_pane_5">Refer and Earnings</a>
                                    </li>
                                
                            </ul>
                        </div>
                    </div>
                    
                    
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="kt_vtab_pane_1" role="tabpanel">
                                <div class="border-0 cursor-pointer " role="button" data-bs-toggle="collapse"
                                    data-bs-target="#kt_account_profile_details" aria-expanded="true"
                                    aria-controls="kt_account_profile_details">
                                    <div class="mb-4">
                                        <h3 class="fw-bolder m-0 align-items-center">User Info</h3>
                                    </div>
                                    <!--end::Card title-->
                                </div>
                                <div id="kt_account_settings_profile_details" class="collapse show">
                                    <!--begin::Form-->
                                    {{-- <form class="form fv-plugins-bootstrap5 fv-plugins-framework"
                                        action="{{ route('update.user', encrypt($user->id)) }}" method="post"
                                        enctype="multipart/form-data"> --}}
                                        <form action="{{ route('update.user', ($user->user_id)) }}" method="post">
                                            @csrf
                                        {{-- <input type="hidden" name="_token" value="BqPnp7jddPhZfWrNRQ4cbbVtEk86DhKlI79fkSH2">                                     --}}
                                        <input type="hidden" name="id" value="{{$user->user_id}}">
                                        <!--begin::Card body-->
                                        <div class="card-body border-top p-9">
                                            <!--begin::Input group-->
                                            <div class="row mb-6">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 col-form-label required fw-bold fs-6">User Name</label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                                    <input type="text" name="name"
                                                        class="form-control form-control-lg form-control-solid"
                                                        placeholder="Enter Your Name" value="{{$user->user_name}}" required>
                                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Input group-->
                                            <div class="row mb-6">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 col-form-label fw-bold fs-6">Image</label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8">
                                                    <!--begin::Image input-->
                                                    <div class="image-input image-input-outline" data-kt-image-input="true"
                                                        style="background-image: url('https://dtabata.howincloud.com/public/') ;background-position: center">
                                                        <!--begin::Preview existing avatar-->
                                                        <div class="image-input-wrapper w-125px h-125px"
                                                            style="background-image: url('https://dtabata.howincloud.com/public/') ;background-position: center">
                                                        </div>
                                                        <!--end::Preview existing avatar-->
                                                        <!--begin::Label-->
                                                        <label
                                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                            data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                            title="" data-bs-original-title="Change avatar">
                                                            <i class="bi bi-pencil-fill fs-7"></i>
                                                            <!--begin::Inputs-->
                                                            <input type="file" name="image"
                                                                accept=".png, .jpg, .jpeg, .svg, .gif">
                                                            <input type="hidden" name="avatar_remove">
                                                            <!--end::Inputs-->
                                                        </label>
                                                        <!--end::Label-->
                                                        <!--begin::Cancel-->
                                                        <span
                                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                            data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                            title="" data-bs-original-title="Cancel avatar">
                                                            <i class="bi bi-x fs-2"></i>
                                                        </span>
                                                        <!--end::Cancel-->
                                                        <!--begin::Remove-->
                                                        <span
                                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                            data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                            title="" data-bs-original-title="Remove avatar">
                                                            <i class="bi bi-x fs-2"></i>
                                                        </span>
                                                        <!--end::Remove-->
                                                    </div>
                                                    <!--end::Image input-->
                                                    <!--begin::Hint-->
                                                    <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                                    <!--end::Hint-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--begin::Input group-->
                                            
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="row mb-6">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 col-form-label required fw-bold fs-6">Gender </label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                                    <select class="form-select form-select-solid" data-control="select2"
                                                        data-placeholder="Select an Option" data-allow-clear="true"
                                                        name="gender" required>
                                                        <option value="MALE"
                                                            >Male</option>
                                                        <option value="FEMALE"
                                                            >Female</option>
                                                        <option value="OTHER"
                                                            >Other</option>
                                                    </select>
                                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="row mb-6">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 col-form-label required fw-bold fs-6">Email</label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                                    <input type="email" name="email"
                                                        class="form-control form-control-lg form-control-solid"
                                                        placeholder="user@example.com" value="{{$user->email}}" required>
                                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="row mb-6">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 col-form-label fw-bold fs-6">
                                                    <span class="required">Phone</span>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                                    <input type="tel" class="form-control form-control-solid"
                                                        placeholder="9999999999" name="phone" minlength="10"
                                                        maxlength="12" value="{{$user->phone}}" pattern="[6789][0-9]{9}"
                                                        title="Phone Number should start with 6,7,8,9 | Min Length = 10"
                                                        required />
                                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                        </div>
                                        <!--begin::Actions-->
                                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                        <!--end::Actions-->
                                        <input type="hidden">
                                        <div></div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="kt_vtab_pane_2" role="tabpane1">
                                <div class="border-0 cursor-pointer " role="button" data-bs-toggle="collapse"
                                    data-bs-target="#kt_account_profile_details" aria-expanded="true"
                                    aria-controls="kt_account_profile_details">
                                    <div class="mb-4">
                                        <h3 class="fw-bolder m-0 align-items-center">Roles And Permissions
                                        </h3>
                                    </div>
                                    <!--end::Card title-->
                                </div>
                                <div id="kt_account_settings_profile_details" class="collapse show">
                                    <!--begin::Form-->
                                    <form action="{{ route('change.role', ($user->user_id)) }}" method="post">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$user->user_id}}">
                                        <!--begin::Card body-->
                                        <div class="card-body border-top p-9">
                                            <div class="row mb-6">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 col-form-label fw-bold fs-6">Change Password</label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                                    <input type="password" name="password"
                                                        class="form-control form-control-lg form-control-solid"
                                                        placeholder="Password" minlength="8">
                                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <div class="row mb-6">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 col-form-label fw-bold fs-6">Current Role</label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                                    <span class="badge badge-primary">
                                                        <span>{{ isset($user->roles[0])? $user->roles[0]->name :'Role not assigned'  }}</span>
                                                    </span>
                                                </div>
                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                            <div class="row mb-6">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 col-form-label fw-bold fs-6">Change
                                                    Role</label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                                    <select class="form-select form-select-solid" data-control="select2"
                                                        name="role">
                                                        @foreach ($roles as $role)
                                                            <option value="{{$role->name}}">{{$role->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                        </div>
                                        <!--begin::Actions-->
                                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                                            <button type="submit" class="btn btn-primary" id="">Update</button>
                                        </div>
                                        <!--end::Actions-->
                                        <input type="hidden">
                                        <div></div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="kt_vtab_pane_3" role="tabpane1">
                                <div class="border-0 cursor-pointer " role="button" data-bs-toggle="collapse"
                                    data-bs-target="#kt_account_profile_details" aria-expanded="true"
                                    aria-controls="kt_account_profile_details">
                                    <div class="mb-4">
                                        <h3 class="fw-bolder m-0 align-items-center">Plans
                                        </h3>
                                    </div>
                                </div>
                                <div id="kt_account_settings_profile_details" class="collapse show">
                                    <!--begin::Form-->
                                    <form class="form fv-plugins-bootstrap5 fv-plugins-framework"
                                        action="https://dtabata.howincloud.com/public/update-user-plan" method="post">
                                        <input type="hidden" name="_token" value="BqPnp7jddPhZfWrNRQ4cbbVtEk86DhKlI79fkSH2">                                    <input type="hidden" name="id" value="12">
                                        <!--begin::Card body-->
                                        <div class="card-body border-top p-9">
    
                                            <div class="row mb-6">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 col-form-label fw-bold fs-6">Current
                                                    Subscription</label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                                                                                        No Plan Selected
                                                                                                </div>
                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                            <div class="row mb-6">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 col-form-label fw-bold fs-6">Change Subscription</label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                                    <select class="form-select form-select-solid" data-control="select2"
                                                        name="plan_id">
                                                                                                        </select>
                                                </div>
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                            </div>
                                        </div>
                                        <!--begin::Actions-->
                                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                                            <button type="submit" class="btn btn-primary" id="">Update</button>
                                        </div>
                                        <!--end::Actions-->
                                        <input type="hidden">
                                        <div></div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="kt_vtab_pane_4" role="tabpane1">
                                <div class="border-0 cursor-pointer " role="button" data-bs-toggle="collapse"
                                    data-bs-target="#kt_account_profile_details" aria-expanded="true"
                                    aria-controls="kt_account_profile_details" sty>
                                    <div class="nk-block mb-4">
                                        <h3 class="fw-bolder m-0 align-items-center">Weight History
                                        </h3>
                                        <li>
                                            <a
                                              href="{{route('weight.user')}}"
                                              class="btn btn-primary d-none d-md-inline-flex" data-toggle="modal" data-target="#Weight"
                                              ><em class="icon ni ni-plus" style="font-size: 10px"></em
                                              ><span>Weight details</span></a>
                                              @include('users.edit.weight')
                                        
                                          </li>
                                    </div>
                                </div>
                                <div id="kt_account_settings_profile_details" class="collapse show  border-top">
                                    <div class="table-responsive">
                                        <table id="weight_history"
                                            class="table align-middle table-row-dashed fs-6 gy-5 text-center mt-5">
                                            <thead>
                                                <tr class=" fw-bolder fs-7 text-uppercase gs-0">
                                                    <th class="text-center">Date</th>
                                                    <th class="text-center"> Weight (Kg)</th>
                                                    <th class="text-center">Weight (Lbs)</th>
                                                </tr>
                                            </thead>
                                            <tbody class="text-gray-600 fw-bold text-center">
                                                
                                                @foreach ($user->weights as $weight)
                                                <tr>
                                                    <td>{{$weight->created_at}}</td>
                                                    <td>{{$weight->weight_kg}}</td>
                                                    <td>{{$weight->weight_lbs}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="kt_vtab_pane_5" role="tabpanel">
                                <div class="border-0 cursor-pointer " role="button" data-bs-toggle="collapse"
                                    data-bs-target="#kt_account_profile_details" aria-expanded="true"
                                    aria-controls="kt_account_profile_details" sty>
                                    <div class="mb-4">
                                        <h3 class="fw-bolder m-0 align-items-center">Refer and Earnings
                                        </h3>
                                    </div>
                                </div>
                                <div class="card mb-xl-10">
                                    <div class="card-body py-10">
                                        
                                        <div class="d-flex justify-content-center flex-wrap">
                                            <div class=" me-4">
                                                <div class="card card-dashed flex-center min-w-175px w-300px my-3 p-6">
                                                    <span class="fs-4 fw-bold text-success pb-1 px-2">Earnings </span>
                                                    <span class="fs-lg-2tx fw-bolder d-flex justify-content-center">
                                                    <span data-kt-countup="true"
                                                            data-kt-countup-value="">0</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div class="card card-dashed flex-center min-w-175px w-300px my-3 p-6">
                                                    <span class="fs-4 fw-bold text-primary pb-1 px-2">Refferal Sign
                                                        Ups</span>
                                                    <span class="fs-lg-2tx fw-bolder d-flex justify-content-center">
                                                        <span data-kt-countup="true"
                                                            data-kt-countup-value="0">0</span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header card-header-stretch">
                                        <div class="card-title">
                                            <h3>Reffered Users</h3>
                                            
                                        </div>
                                        <div class="card-toolbar">
                                        </div>
                                    </div>
                                    <div  class="tab-content">
                                        <div class="card-body p-0 tab-pane fade show active"
                                            role="tabpanel">
                                            <div class="table-responsive">
                                                <table id="referrals"
                                                    class="table table-row-bordered table-flush align-middle gy-6">
                                                    <thead class="border-bottom border-gray-200 fs-6 fw-bolder bg-lighten">
                                                        <tr>
                                                            <th class="min-w-125px ps-9">User ID</th>
                                                            <th class="min-w-125px px-0">User Name</th>
                                                            <th class="min-w-125px">Date</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="fs-6 fw-bold text-gray-600">
    
                                                    </tbody>
                                                </table>
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
            </div>
        </div>
    </div>
</div>
</div>