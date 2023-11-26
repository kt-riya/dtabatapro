@extends('layout.layout')
<div class="nk-content">
    <div class="container-fluid">
      <div class="nk-content-inner">


        <div class="nk-content-body">
          <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
              <div class="nk-block-head-content">
                <h6 class="nk-block-title page-title">All Users</h6>
                <div class="nk-block-des text-soft">
                  <p>You have total 2,595 users.</p>
                </div>
              </div>
              <div class="nk-block-head-content">
                <div class="toggle-wrap nk-block-tools-toggle">
                  <a
                    href="#"
                    class="btn btn-icon btn-trigger toggle-expand me-n1"
                    data-target="more-options"
                    ><em class="icon ni ni-more-v"></em
                  ></a>
                  <div
                    class="toggle-expand-content"
                    data-content="more-options"
                  >
                    <ul class="nk-block-tools g-3">
                      <li>
                        <div class="form-control-wrap">
                          <div class="form-icon form-icon-right">
                            <em class="icon ni ni-search"></em>
                          </div>
                          <input
                            type="text"
                            class="form-control"
                            id="default-04"
                            placeholder="Search by name"
                          />
                        </div>
                      </li>
                      <li>
                        <a
                          href="{{route('adduser')}}"
                          class="btn btn-primary d-none d-md-inline-flex" data-toggle="modal" data-target="#create"
                          ><em class="icon ni ni-plus" style="font-size: 10px"></em
                          ><span>Add User</span></a>
                    
                      </li>
                      <li class="nk-block-tools-opt">
                        <a
                          href="#"
                          class="btn btn-icon btn-primary d-md-none"
                          ><em class="icon ni ni-plus"></em></a
                        ><a
                          href="{{route('view.deleted.user')}}"
                          class="btn btn-danger d-none d-md-inline-flex"
                          ><em class="fa fa-trash" style="font-size: 15px"></em
                          ><span>Deleted Users</span></a
                        >
                      </li>
                      <li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="nk-block">
            <div class="nk-tb-list is-separate mb-3">
              <div class="nk-tb-item nk-tb-head">
                <div class="nk-tb-col nk-tb-col-check">
                  {{-- <div
                    class="custom-control custom-control-sm custom-checkbox notext"
                  >
                    <input
                      type="checkbox"
                      class="custom-control-input"
                      id="uid"
                    /><label
                      class="custom-control-label"
                      for="uid"
                    ></label>
                  </div> --}}
                </div>
                <div class="nk-tb-col">
                  <span class="sub-text">User Id</span>
                </div>
                <div class="nk-tb-col tb-col-mb">
                  <span class="sub-text">User name</span>
                </div>
                <div class="nk-tb-col tb-col-md">
                  <span class="sub-text">Email</span>
                </div>
                <div class="nk-tb-col tb-col-lg">
                  <span class="sub-text">Phone</span>
                </div>
                <div class="nk-tb-col tb-col-lg">
                  <span class="sub-text">Role </span>
                </div>
                <div class="nk-tb-col tb-col-md">
                  <span class="sub-text">Created at</span>
                </div>
                <div class="nk-tb-col tb-col-md">
                    <span class="sub-text">Action</span>
                  </div>
                <div>
                  <ul class="nk-tb-actions gx-1 my-n1">
                    <li>
                      <div class="drodown">
                        <div class="dropdown-menu dropdown-menu-end">
                          <ul class="link-list-opt no-bdr">
                            <li>
                              <a href="#"
                                ><em class="icon ni ni-mail"></em
                                ><span>Send Email to All</span></a
                              >
                            </li>
                            <li>
                              <a href="#"
                                ><em class="icon ni ni-na"></em
                                ><span>Suspend Selected</span></a
                              >
                            </li>
                            <li>
                              <a href="#"
                                ><em class="icon ni ni-trash"></em
                                ><span>Remove Seleted</span></a
                              >
                            </li>
                            <li>
                              <a href="#"
                                ><em class="icon ni ni-shield-star"></em
                                ><span>Reset Password</span></a
                              >
                            </li>
                          </ul>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              @foreach ($users as $user)
              <div class="nk-tb-item">
                <div class="nk-tb-col nk-tb-col-check">
                  <div
                    class="custom-control custom-control-sm custom-checkbox notext"
                  >
                  </div>
                </div>
                <div class="nk-tb-col">
                  <a href="ecommerce/customer-details.html"
                    ><div class="user-card">
                      <div class="user-info">
                        <span class="tb-lead"
                          >{{$user->user_id}}
                          <span
                            class="dot dot-success d-md-none ms-1"
                          ></span></span
                        >
                      </div>
                    </div></a
                  >
                </div>
                <div class="nk-tb-col tb-col-mb">
                  <span class="tb-amount"
                    >{{$user->user_name}}</span
                  >
                </div>
                <div class="nk-tb-col tb-col-md">
                  <span>{{$user->email}}</span>
                </div>
                <div class="nk-tb-col tb-col-lg">
                  <span>{{$user->phone}}</span>
                </div>
                <div class="nk-tb-col tb-col-lg">
                  <span>{{ isset($user->roles[0])? $user->roles[0]->name :'Role not assigned'  }}</span>
                </div>
                <div class="nk-tb-col tb-col-md">
                  <span>{{$user->created_at}}</span>
                </div>
                <div class="nk-tb-col nk-tb-col-lg">
                  <ul class="nk-tb-actions gx-1">
                        <td><a href="{{route('edit.user',($user->user_id))}}"  type="button" class="btn btn-primary">
                            <i class="fa fa-edit"></i>
                        </a></td>
                        <td><a href="{{route('delete.user',($user->user_id))}}" class="btn btn-danger" data-toggle="modal" data-target="#delete-{{$user->user_id}}">
                            <i class="fa fa-trash"></i>
                        </a></td>
                    <li class="nk-tb-action-hidden">
                      
                    </li>
                  </ul>
                </div>
                @include('users.adduser')
                @include('users.deleteuser')
              </div>
              @endforeach
            </div>
            <div class="card">
              <div class="card-inner">
                <div class="nk-block-between-md g-3">
                  <div class="g">
                    <ul
                      class="pagination justify-content-center justify-content-md-start"
                    >
                      <li class="page-item">
                        <a class="page-link" href="#">Prev</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">1</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">2</a>
                      </li>
                      <li class="page-item">
                        <span class="page-link"
                          ><em class="icon ni ni-more-h"></em
                        ></span>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">6</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">7</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                      </li>
                    </ul>
                  </div>
                  <div class="g">
                    <div
                      class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3"
                    >
                      <div>Page</div>
                      <div>
                        <select
                          class="form-select js-select2"
                          data-search="on"
                          data-dropdown="xs center"
                        >
                          <option value="page-1">1</option>
                          <option value="page-2">2</option>
                          <option value="page-4">4</option>
                          <option value="page-5">5</option>
                          <option value="page-6">6</option>
                          <option value="page-7">7</option>
                          <option value="page-8">8</option>
                          <option value="page-9">9</option>
                          <option value="page-10">10</option>
                          <option value="page-11">11</option>
                          <option value="page-12">12</option>
                          <option value="page-13">13</option>
                          <option value="page-14">14</option>
                          <option value="page-15">15</option>
                          <option value="page-16">16</option>
                          <option value="page-17">17</option>
                          <option value="page-18">18</option>
                          <option value="page-19">19</option>
                          <option value="page-20">20</option>
                        </select>
                      </div>
                      <div>OF 102</div>
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
    

