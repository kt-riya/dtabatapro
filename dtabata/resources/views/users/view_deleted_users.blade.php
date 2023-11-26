@extends('layout.layout')
<div class="col-lg-12 ">
    <div class="card mb-5 mb-xl-8">
        <div class="card-header border-0 pt-5" style="display: flex; justify-content: space-between">
            <h3 class="card-title align-items-start flex-display">
                <span class="card-label fw-bolder fs-3 mb-1">Deleted Users</span><br>
                <span class="text-muted mt-1 fw-bold fs-3">Over 3 members</span>
            </h3>
            <div class="card-toolbar">
                <a type="button" class="btn btn-sm btn-info btn-active-light-dark m-5"
                    href="{{route('user')}}">
                    View Users
                </a>
            </div>
        </div>
        <div class="card-body py-3">
            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table id="addUserModal" class="table align-middle gs-0 gy-4">
                    <!--begin::Table head-->
                    <thead class="text-center">
                        <tr class="fw-bolder text-muted bg-light">
                            <th class="">ID</th>
                            <th class="">Name</th>
                            <th class="">Email</th>
                            <th class="">Phone</th>
                            <th class="">Created At</th>
                            <th></th>
                        </tr>
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    @foreach ($users as $user)
                    <tbody class="text-center">
                            <tr>
                                <td>{{$user->user_id}}</td>
                                <td>{{$user->user_name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->phone}}</td>
                                <td>{{$user->created_at}}</td>

                                <td>
                                    <button class="btn btn-success btn-active-color-dark"
                                        type="button" back data-bs-toggle="modal"
                                        data-bs-target="#restore-{{$user->user_id}}">
                                        <i class="fa fa-undo text-white" aria-hidden="true"></i>
                                    </button>
                                </td>
                            </tr>
                    </tbody>
                    @endforeach
                    <!--end::Table body-->
                </table>
                <!--end::Table-->
                @foreach ($users as $user)
                        <div class="modal" id="restore-{{$user->user_id}}" data-bs-backdrop="static"
                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Warning!!!</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Do you want to restore Trainer 1 ?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light"
                                        data-bs-dismiss="modal">Close</button>
                                    <a type="button" class="btn btn-primary"
                                        href="{{route('activate.user',$user->user_id)}}">Yes</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach  
                </div> 
                       
            </div>
        </div>
    </div>
</div>