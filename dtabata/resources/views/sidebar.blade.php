<body class="nk-body bg-lighter npc-default has-sidebar ">

    <div class="nk-app-root">
        <div class="nk-main ">
            <div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
                <div class="nk-sidebar-element nk-sidebar-head">
                    <div class="nk-sidebar-brand"><a href="index.html" class="logo-link nk-sidebar-logo"><img
                                class="logo-light logo-img" src="images/logo.png" srcset="/demo2/images/logo2x.png 2x"
                                alt="logo"><img class="logo-dark logo-img" src="images/logo-dark.png"
                                srcset="/demo2/images/logo-dark2x.png 2x" alt="logo-dark"><img
                                class="logo-small logo-img logo-img-small" src="images/logo-small.png"
                                srcset="/demo2/images/logo-small2x.png 2x" alt="logo-small"></a></div>
                    <div class="nk-menu-trigger me-n2"><a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none"
                            data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a><a href="#"
                            class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex"
                            data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a></div>
                </div>
                <div class="nk-sidebar-element">
                    <div class="nk-sidebar-content">
                        <div class="nk-sidebar-menu" data-simplebar>
                            <ul class="nk-menu">
                                {{-- <li class="nk-menu-heading">
                                    <h6 class="overline-title text-primary-alt">Use-Case Preview</h6>
                                </li> --}}
                                <li class="nk-menu-item"><a href="ecommerce/index.html" class="nk-menu-link"><span
                                            class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span><span
                                            class="nk-menu-text">Dashboard</span>
                                <li class="nk-menu-item"><a href="lms/index.html" class="nk-menu-link"><span
                                            class="nk-menu-icon"><em class="icon ni ni-clock"></em></span><span
                                            class="nk-menu-text">Live Session Management</span>
                                {{-- <li class="nk-menu-heading">
                                    <h6 class="overline-title text-primary-alt">Dashboards</h6>
                                </li> --}}
                                <li class="nk-menu-item"><a href="index.html" class="nk-menu-link"><span
                                            class="nk-menu-icon"><em class="icon ni ni-trophy"></em></span><span
                                            class="nk-menu-text">Subscription Management</span></a></li>
                                <li class="nk-menu-item"><a href="{{route('user')}}" class="nk-menu-link"><span
                                            class="nk-menu-icon"><em
                                                class="icon ni ni-users-fill"></em></span><span
                                            class="nk-menu-text">User Management</span></a></li>
                                <li class="nk-menu-item"><a href="index-analytics.html" class="nk-menu-link"><span
                                            class="nk-menu-icon"><em class="icon ni ni-user-list-fill"></em></span><span
                                            class="nk-menu-text">Trainer Management</span></a></li>
                                {{-- <li class="nk-menu-heading">
                                    <h6 class="overline-title text-primary-alt">Applications</h6>
                                </li> --}}
                                <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link "><span
                                            class="nk-menu-icon"><em
                                                class="icon ni ni-user"></em></span><span
                                            class="nk-menu-text">Client Management</span></a>
                                    {{-- <ul class="nk-menu-sub">
                                        <li class="nk-menu-item"><a href="project-card.html" class="nk-menu-link"><span
                                                    class="nk-menu-text">Project Cards</span></a></li>
                                        <li class="nk-menu-item"><a href="project-list.html" class="nk-menu-link"><span
                                                    class="nk-menu-text">Project List</span></a></li>
                                    </ul> --}}
                                </li>
                                <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link "><span
                                            class="nk-menu-icon"><em class="icon ni ni-video"></em></span><span
                                            class="nk-menu-text">Recorded Training</span></a>
                                    {{-- <ul class="nk-menu-sub">
                                        <li class="nk-menu-item"><a href="user-list-default.html"
                                                class="nk-menu-link"><span class="nk-menu-text">User List -
                                                    Default</span></a></li>
                                        <li class="nk-menu-item"><a href="user-list-regular.html"
                                                class="nk-menu-link"><span class="nk-menu-text">User List -
                                                    Regular</span></a></li>
                                        <li class="nk-menu-item"><a href="user-list-compact.html"
                                                class="nk-menu-link"><span class="nk-menu-text">User List -
                                                    Compact</span></a></li>
                                        <li class="nk-menu-item"><a href="user-details-regular.html"
                                                class="nk-menu-link"><span class="nk-menu-text">User Details -
                                                    Regular</span></a></li>
                                        <li class="nk-menu-item"><a href="user-profile-regular.html"
                                                class="nk-menu-link"><span class="nk-menu-text">User Profile -
                                                    Regular</span></a></li>
                                        <li class="nk-menu-item"><a href="user-card.html" class="nk-menu-link"><span
                                                    class="nk-menu-text">User Contact - Card</span></a></li>
                                    </ul> --}}
                                </li>
                                <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link "><span
                                            class="nk-menu-icon"><em class="icon ni ni-pie-fill"></em></span><span
                                            class="nk-menu-text">Diet Plan Management</span></a>
                                    {{-- <ul class="nk-menu-sub">
                                        <li class="nk-menu-item"><a href="customer-list.html" class="nk-menu-link"><span
                                                    class="nk-menu-text">Customer List</span></a></li>
                                        <li class="nk-menu-item"><a href="customer-details.html"
                                                class="nk-menu-link"><span class="nk-menu-text">Customer
                                                    Details</span></a></li>
                                    </ul> --}}
                                </li>
                                <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link "><span
                                            class="nk-menu-icon"><em class="icon ni ni-question"></em></span><span
                                            class="nk-menu-text">FAQ Management</span></a>
                                    
                                </li>
                                <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link "><span
                                            class="nk-menu-icon"><em class="icon ni ni-question"></em></span><span
                                            class="nk-menu-text">Permission Management</span></a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>




            <!-- {{------------------sidebar ends here------------------}} -->




            <div class="nk-wrap ">




                <!-- {{------------------navbar starts here------------------}} -->





                <div class="nk-header nk-header-fixed is-light">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                            <div class="nk-menu-trigger d-xl-none ms-n1"><a href="#"
                                    class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em
                                        class="icon ni ni-menu"></em></a></div>
                            <div class="nk-header-brand d-xl-none"><a href="index.html" class="logo-link"><img
                                        class="logo-light logo-img" src="images/logo.png"
                                        srcset="/demo2/images/logo2x.png 2x" alt="logo"><img class="logo-dark logo-img"
                                        src="images/logo-dark.png" srcset="/demo2/images/logo-dark2x.png 2x"
                                        alt="logo-dark"></a></div>
                            <div class="nk-header-search ms-3 ms-xl-0"><em class="icon ni ni-search"></em><input
                                    type="text" class="form-control border-transparent form-focus-none"
                                    placeholder="Search anything"></div>
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    <li class="dropdown language-dropdown d-none d-sm-block me-n1"><a href="#"
                                            class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                                            <div class="quick-icon border border-light"><img class="icon"
                                                    src="images/flags/english-sq.png" alt=""></div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-s1">
                                            <ul class="language-list">
                                                <li><a href="#" class="language-item"><img
                                                            src="images/flags/english.png" alt=""
                                                            class="language-flag"><span
                                                            class="language-name">English</span></a></li>
                                                <li><a href="#" class="language-item"><img
                                                            src="images/flags/spanish.png" alt=""
                                                            class="language-flag"><span
                                                            class="language-name">Español</span></a></li>
                                                <li><a href="#" class="language-item"><img src="images/flags/french.png"
                                                            alt="" class="language-flag"><span
                                                            class="language-name">Français</span></a></li>
                                                <li><a href="#" class="language-item"><img src="images/flags/turkey.png"
                                                            alt="" class="language-flag"><span
                                                            class="language-name">Türkçe</span></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="dropdown chats-dropdown hide-mb-xs"><a href="#"
                                            class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                                            <div class="icon-status icon-status-na"><em
                                                    class="icon ni ni-comments"></em></div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end">
                                            <div class="dropdown-head"><span class="sub-title nk-dropdown-title">Recent
                                                    Chats</span><a href="#">Setting</a></div>
                                            <div class="dropdown-body">
                                                <ul class="chat-list">
                                                    <li class="chat-item"><a class="chat-link" href="apps-chats.html">
                                                            <div class="chat-media user-avatar"><span>IH</span><span
                                                                    class="status dot dot-lg dot-gray"></span></div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">Iliash Hossain</div><span
                                                                        class="time">Now</span>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">You: Please confrim if you got my
                                                                        last messages.</div>
                                                                    <div class="status delivered"><em
                                                                            class="icon ni ni-check-circle-fill"></em>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a></li>
                                                    <li class="chat-item is-unread"><a class="chat-link"
                                                            href="apps-chats.html">
                                                            <div class="chat-media user-avatar bg-pink">
                                                                <span>AB</span><span
                                                                    class="status dot dot-lg dot-success"></span></div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">Abu Bin Ishtiyak</div><span
                                                                        class="time">4:49 AM</span>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">Hi, I am Ishtiyak, can you help me
                                                                        with this problem ?</div>
                                                                    <div class="status unread"><em
                                                                            class="icon ni ni-bullet-fill"></em></div>
                                                                </div>
                                                            </div>
                                                        </a></li>
                                                    <li class="chat-item"><a class="chat-link" href="apps-chats.html">
                                                            <div class="chat-media user-avatar"><img
                                                                    src="images/avatar/b-sm.jpg" alt=""></div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">George Philips</div><span
                                                                        class="time">6 Apr</span>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">Have you seens the claim from
                                                                        Rose?</div>
                                                                </div>
                                                            </div>
                                                        </a></li>
                                                    <li class="chat-item"><a class="chat-link" href="apps-chats.html">
                                                            <div class="chat-media user-avatar user-avatar-multiple">
                                                                <div class="user-avatar"><img
                                                                        src="images/avatar/c-sm.jpg" alt=""></div>
                                                                <div class="user-avatar"><span>AB</span></div>
                                                            </div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">Softnio Group</div><span
                                                                        class="time">27 Mar</span>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">You: I just bought a new computer
                                                                        but i am having some problem</div>
                                                                    <div class="status sent"><em
                                                                            class="icon ni ni-check-circle"></em></div>
                                                                </div>
                                                            </div>
                                                        </a></li>
                                                    <li class="chat-item"><a class="chat-link" href="apps-chats.html">
                                                            <div class="chat-media user-avatar"><img
                                                                    src="images/avatar/a-sm.jpg" alt=""><span
                                                                    class="status dot dot-lg dot-success"></span></div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">Larry Hughes</div><span
                                                                        class="time">3 Apr</span>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">Hi Frank! How is you doing?</div>
                                                                </div>
                                                            </div>
                                                        </a></li>
                                                    <li class="chat-item"><a class="chat-link" href="apps-chats.html">
                                                            <div class="chat-media user-avatar bg-purple">
                                                                <span>TW</span></div>
                                                            <div class="chat-info">
                                                                <div class="chat-from">
                                                                    <div class="name">Tammy Wilson</div><span
                                                                        class="time">27 Mar</span>
                                                                </div>
                                                                <div class="chat-context">
                                                                    <div class="text">You: I just bought a new computer
                                                                        but i am having some problem</div>
                                                                    <div class="status sent"><em
                                                                            class="icon ni ni-check-circle"></em></div>
                                                                </div>
                                                            </div>
                                                        </a></li>
                                                </ul>
                                            </div>
                                            <div class="dropdown-foot center"><a href="apps-chats.html">View All</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown notification-dropdown"><a href="#"
                                            class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                                            <div class="icon-status icon-status-info"><em class="icon ni ni-bell"></em>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end">
                                            <div class="dropdown-head"><span
                                                    class="sub-title nk-dropdown-title">Notifications</span><a
                                                    href="#">Mark All as Read</a></div>
                                            <div class="dropdown-body">
                                                <div class="nk-notification">
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon"><em
                                                                class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">You have requested to
                                                                <span>Widthdrawl</span></div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon"><em
                                                                class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">Your <span>Deposit
                                                                    Order</span> is placed</div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon"><em
                                                                class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">You have requested to
                                                                <span>Widthdrawl</span></div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon"><em
                                                                class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">Your <span>Deposit
                                                                    Order</span> is placed</div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon"><em
                                                                class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">You have requested to
                                                                <span>Widthdrawl</span></div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon"><em
                                                                class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">Your <span>Deposit
                                                                    Order</span> is placed</div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-foot center"><a href="#">View All</a></div>
                                        </div>
                                    </li>
                                    <li class="dropdown user-dropdown"><a href="#" class="dropdown-toggle me-n1"
                                            data-bs-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm"><em class="icon ni ni-user-alt"></em></div>
                                                <div class="user-info d-none d-xl-block">
                                                    <div class="user-status user-status-unverified">Unverified</div>
                                                    <div class="user-name dropdown-indicator">Abu Bin Ishityak</div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end">
                                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                <div class="user-card">
                                                    <div class="user-avatar"><span>AB</span></div>
                                                    <div class="user-info"><span class="lead-text">Abu Bin
                                                            Ishtiyak</span><span
                                                            class="sub-text">info@softnio.com</span></div>
                                                </div>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="user-profile-regular.html"><em
                                                                class="icon ni ni-user-alt"></em><span>View
                                                                Profile</span></a></li>
                                                    <li><a href="user-profile-setting.html"><em
                                                                class="icon ni ni-setting-alt"></em><span>Account
                                                                Setting</span></a></li>
                                                    <li><a href="user-profile-activity.html"><em
                                                                class="icon ni ni-activity-alt"></em><span>Login
                                                                Activity</span></a></li>
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="#"><em class="icon ni ni-signout"></em><span>Sign
                                                                out</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- {{------------------navbar ends here------------------}} -->

                <div class="nk-footer">
                    <div class="container-fluid">
                        <div class="nk-footer-wrap">
                            <div class="nk-footer-copyright"> &copy; 2023 DashLite. Template by <a
                                    href="https://softnio.com/" target="_blank">Softnio</a></div>
                            <div class="nk-footer-links">
                                <ul class="nav nav-sm">
                                    <li class="nav-item dropup"><a href="#"
                                            class="dropdown-toggle dropdown-indicator has-indicator nav-link text-base"
                                            data-bs-toggle="dropdown" data-offset="0,10"><span>English</span></a>
                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                            <ul class="language-list">
                                                <li><a href="#" class="language-item"><span
                                                            class="language-name">English</span></a></li>
                                                <li><a href="#" class="language-item"><span
                                                            class="language-name">Español</span></a></li>
                                                <li><a href="#" class="language-item"><span
                                                            class="language-name">Français</span></a></li>
                                                <li><a href="#" class="language-item"><span
                                                            class="language-name">Türkçe</span></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item"><a data-bs-toggle="modal" href="#region" class="nav-link"><em
                                                class="icon ni ni-globe"></em><span class="ms-1">Select
                                                Region</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="region">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content"><a href="#" class="close" data-bs-dismiss="modal"><em
                        class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title mb-4">Select Your Country</h5>
                    <div class="nk-country-region">
                        <ul class="country-list text-center gy-2">
                            <li><a href="#" class="country-item"><img src="images/flags/arg.png" alt=""
                                        class="country-flag"><span class="country-name">Argentina</span></a></li>
                            <li><a href="#" class="country-item"><img src="images/flags/aus.png" alt=""
                                        class="country-flag"><span class="country-name">Australia</span></a></li>
                            <li><a href="#" class="country-item"><img src="images/flags/bangladesh.png" alt=""
                                        class="country-flag"><span class="country-name">Bangladesh</span></a></li>
                            <li><a href="#" class="country-item"><img src="images/flags/canada.png" alt=""
                                        class="country-flag"><span class="country-name">Canada
                                        <small>(English)</small></span></a></li>
                            <li><a href="#" class="country-item"><img src="images/flags/china.png" alt=""
                                        class="country-flag"><span class="country-name">Centrafricaine</span></a></li>
                            <li><a href="#" class="country-item"><img src="images/flags/china.png" alt=""
                                        class="country-flag"><span class="country-name">China</span></a></li>
                            <li><a href="#" class="country-item"><img src="images/flags/french.png" alt=""
                                        class="country-flag"><span class="country-name">France</span></a></li>
                            <li><a href="#" class="country-item"><img src="images/flags/germany.png" alt=""
                                        class="country-flag"><span class="country-name">Germany</span></a></li>
                            <li><a href="#" class="country-item"><img src="images/flags/iran.png" alt=""
                                        class="country-flag"><span class="country-name">Iran</span></a></li>
                            <li><a href="#" class="country-item"><img src="images/flags/italy.png" alt=""
                                        class="country-flag"><span class="country-name">Italy</span></a></li>
                            <li><a href="#" class="country-item"><img src="images/flags/mexico.png" alt=""
                                        class="country-flag"><span class="country-name">México</span></a></li>
                            <li><a href="#" class="country-item"><img src="images/flags/philipine.png" alt=""
                                        class="country-flag"><span class="country-name">Philippines</span></a></li>
                            <li><a href="#" class="country-item"><img src="images/flags/portugal.png" alt=""
                                        class="country-flag"><span class="country-name">Portugal</span></a></li>
                            <li><a href="#" class="country-item"><img src="images/flags/s-africa.png" alt=""
                                        class="country-flag"><span class="country-name">South Africa</span></a></li>
                            <li><a href="#" class="country-item"><img src="images/flags/spanish.png" alt=""
                                        class="country-flag"><span class="country-name">Spain</span></a></li>
                            <li><a href="#" class="country-item"><img src="images/flags/switzerland.png" alt=""
                                        class="country-flag"><span class="country-name">Switzerland</span></a></li>
                            <li><a href="#" class="country-item"><img src="images/flags/uk.png" alt=""
                                        class="country-flag"><span class="country-name">United Kingdom</span></a></li>
                            <li><a href="#" class="country-item"><img src="images/flags/english.png" alt=""
                                        class="country-flag"><span class="country-name">United State</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>




            </div>
        </div>
    </div>

    <!-- {{------------------sticky starts here------------------}} -->


    
    <ul class="nk-sticky-toolbar">
        <li class="demo-layout"><a class="toggle tipinfo" data-target="demoML" href="#" title="Main Demo Preview"><em
                    class="icon ni ni-dashlite"></em></a></li>
        <li class="demo-thumb"><a class="toggle tipinfo" data-target="demoUC" href="#" title="Use Case Concept"><em
                    class="icon ni ni-menu-squared"></em></a></li>
        <li class="demo-settings"><a class="toggle tipinfo" data-target="settingPanel" href="#"
                title="Demo Settings"><em class="icon ni ni-setting-alt"></em></a></li>
        <li class="demo-purchase"><a class="tipinfo" target="_blank" href="https://1.envato.market/e0y3g"
                title="Purchase"><em class="icon ni ni-cart"></em></a></li>
    </ul>
    <div class="nk-demo-panel nk-demo-panel-2x toggle-slide toggle-slide-right" data-content="demoML"
        data-toggle-overlay="true" data-toggle-body="true" data-toggle-screen="any">
        <div class="nk-demo-head">
            <h6 class="mb-0">Switch Demo Layout</h6><a
                class="nk-demo-close toggle btn btn-icon btn-trigger revarse mr-n2" data-target="demoML" href="#"><em
                    class="icon ni ni-cross"></em></a>
        </div>
        <div class="nk-demo-list" data-simplebar>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo1/index.html">
                    <div class="nk-demo-image bg-blue"><img class="bg-purple" src="../images/landing/layout-1d.jpg"
                            srcset="https://dashlite.net/images/landing/layout-1d2x.jpg 2x" alt="Demo Layout 1"></div>
                    <span class="nk-demo-title"><strong>Demo Layout 1</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="index.html">
                    <div class="nk-demo-image bg-purple"><img src="../images/landing/layout-2d.jpg"
                            srcset="https://dashlite.net/images/landing/layout-2d2x.jpg 2x" alt="Demo Layout 2"></div>
                    <span class="nk-demo-title"><strong>Demo Layout 2</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo3/index.html">
                    <div class="nk-demo-image bg-success"><img src="../images/landing/layout-3d.jpg"
                            srcset="https://dashlite.net/images/landing/layout-3d2x.jpg 2x" alt="Demo Layout 3"></div>
                    <span class="nk-demo-title"><strong>Demo Layout 3</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo4/index.html">
                    <div class="nk-demo-image bg-indigo"><img src="../images/landing/layout-4d.jpg"
                            srcset="https://dashlite.net/images/landing/layout-4d2x.jpg 2x" alt="Demo Layout 4"></div>
                    <span class="nk-demo-title"><strong>Demo Layout 4</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo5/index.html">
                    <div class="nk-demo-image bg-orange"><img src="../images/landing/layout-5d.jpg"
                            srcset="https://dashlite.net/images/landing/layout-5d2x.jpg 2x" alt="Demo Layout 5"></div>
                    <span class="nk-demo-title"><strong>Demo Layout 5</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo6/index.html">
                    <div class="nk-demo-image bg-purple"><img src="../images/landing/layout-6d.jpg"
                            srcset="https://dashlite.net/images/landing/layout-6d2x.jpg 2x" alt="Demo Layout 6"></div>
                    <span class="nk-demo-title"><strong>Demo Layout 6</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo7/index.html">
                    <div class="nk-demo-image bg-teal"><img src="../images/landing/layout-7d.jpg"
                            srcset="https://dashlite.net/images/landing/layout-7d2x.jpg 2x" alt="Demo Layout 7"></div>
                    <span class="nk-demo-title"><strong>Demo Layout 7</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo8/index.html">
                    <div class="nk-demo-image bg-azure"><img src="../images/landing/layout-8d.jpg"
                            srcset="https://dashlite.net/images/landing/layout-8d2x.jpg 2x" alt="Demo Layout 8"></div>
                    <span class="nk-demo-title"><strong>Demo Layout 8</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo9/index.html">
                    <div class="nk-demo-image bg-pink"><img src="../images/landing/layout-9d.jpg"
                            srcset="https://dashlite.net/images/landing/layout-9d2x.jpg 2x" alt="Demo Layout 9"></div>
                    <span class="nk-demo-title"><strong>Demo Layout 9</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/landing/index.html">
                    <div class="nk-demo-image bg-red"><img src="../images/landing/main-landing.jpg"
                            srcset="https://dashlite.net/images/landing/main-landing2x.jpg 2x" alt="Landing Page"></div>
                    <span class="nk-demo-title"><strong>Landing Page</strong> <span
                            class="badge badge-danger ml-1">Free</span></span>
                </a></div>
        </div>
    </div>
    <div class="nk-demo-panel nk-demo-panel-2x toggle-slide toggle-slide-right" data-content="demoUC"
        data-toggle-overlay="true" data-toggle-body="true" data-toggle-screen="any">
        <div class="nk-demo-head">
            <h6 class="mb-0">Use Case Concept</h6><a class="nk-demo-close toggle btn btn-icon btn-trigger revarse mr-n2"
                data-target="demoUC" href="#"><em class="icon ni ni-cross"></em></a>
        </div>
        <div class="nk-demo-list" data-simplebar>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo9/copywriter/index.html">
                    <div class="nk-demo-image bg-indigo"><img src="../images/landing/demo-ai-copywriter.jpg"
                            srcset="https://dashlite.net/images/landing/demo-ai-copywriter2x.jpg 2x"
                            alt="ai-copywriter"></div><span class="nk-demo-title"><em
                            class="text-primary">Demo9</em><br><strong>Ai Copywriter Panel</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo7/pharmacy/index.html">
                    <div class="nk-demo-image bg-warning"><img src="../images/landing/demo-pharmacy.jpg"
                            srcset="https://dashlite.net/images/landing/demo-pharmacy2x.jpg 2x" alt="pharmacy"></div>
                    <span class="nk-demo-title"><em class="text-primary">Demo7</em><br><strong>Pharmacy Management
                            Panel</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo5/loan/index.html">
                    <div class="nk-demo-image bg-purple"><img src="../images/landing/demo-loan.jpg"
                            srcset="https://dashlite.net/images/landing/demo-loan2x.jpg 2x" alt="loan"></div><span
                        class="nk-demo-title"><em class="text-primary">Demo5</em><br><strong>Loan Management
                            Panel</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="ecommerce/index.html">
                    <div class="nk-demo-image bg-dark"><img src="../images/landing/demo-ecommerce.jpg"
                            srcset="https://dashlite.net/images/landing/demo-ecommerce2x.jpg 2x" alt="Ecommerce"></div>
                    <span class="nk-demo-title"><em class="text-primary">Demo2</em><br><strong>E-Commerce
                            Panel</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="lms/index.html">
                    <div class="nk-demo-image bg-danger"><img src="../images/landing/demo-lms.jpg"
                            srcset="https://dashlite.net/images/landing/demo-lms2x.jpg 2x" alt="LMS"></div><span
                        class="nk-demo-title"><em class="text-primary">Demo2</em><br><strong>LMS / Learning Management
                            System</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo1/crm/index.html">
                    <div class="nk-demo-image bg-info"><img src="../images/landing/demo-crm.jpg"
                            srcset="https://dashlite.net/images/landing/demo-crm2x.jpg 2x"
                            alt="CRM / Customer Relationship"></div><span class="nk-demo-title"><em
                            class="text-primary">Demo1</em><br><strong>CRM / Customer Relationship
                            Management</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo7/hospital/index.html">
                    <div class="nk-demo-image bg-indigo"><img src="../images/landing/demo-hospital.jpg"
                            srcset="https://dashlite.net/images/landing/demo-hospital2x.jpg 2x"
                            alt="Hospital Managemen"></div><span class="nk-demo-title"><em
                            class="text-primary">Demo7</em><br><strong>Hospital Management</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo1/hotel/index.html">
                    <div class="nk-demo-image bg-pink"><img src="../images/landing/demo-hotel.jpg"
                            srcset="https://dashlite.net/images/landing/demo-hotel2x.jpg 2x" alt="Hotel Managemen">
                    </div><span class="nk-demo-title"><em class="text-primary">Demo1</em><br><strong>Hotel
                            Management</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo3/cms/index.html">
                    <div class="nk-demo-image bg-dark"><img src="../images/landing/demo-cms.jpg"
                            srcset="https://dashlite.net/images/landing/demo-cms2x.jpg 2x" alt="cms"></div><span
                        class="nk-demo-title"><em class="text-primary">Demo3</em><br><strong>CMS Panel</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo5/crypto/index.html">
                    <div class="nk-demo-image bg-warning"><img src="../images/landing/demo-buysell.jpg"
                            srcset="https://dashlite.net/images/landing/demo-buysell2x.jpg 2x"
                            alt="Crypto BuySell / Wallet"></div><span class="nk-demo-title"><em
                            class="text-primary">Demo5</em><br><strong>Crypto BuySell Panel</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo6/invest/index.html">
                    <div class="nk-demo-image bg-indigo"><img src="../images/landing/demo-invest.jpg"
                            srcset="https://dashlite.net/images/landing/demo-invest2x.jpg 2x" alt="HYIP / Investment">
                    </div><span class="nk-demo-title"><em class="text-primary">Demo6</em><br><strong>HYIP / Investment
                            Panel</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo3/apps/file-manager.html">
                    <div class="nk-demo-image bg-purple"><img src="../images/landing/demo-file-manager.jpg"
                            srcset="https://dashlite.net/images/landing/demo-file-manager2x.jpg 2x" alt="File Manager">
                    </div><span class="nk-demo-title"><em class="text-primary">Demo3</em><br><strong>Apps - File
                            Manager</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo4/subscription/index.html">
                    <div class="nk-demo-image bg-primary"><img src="../images/landing/demo-subscription.jpg"
                            srcset="https://dashlite.net/images/landing/demo-subscription2x.jpg 2x"
                            alt="SAAS / Subscription"></div><span class="nk-demo-title"><em
                            class="text-primary">Demo4</em><br><strong>SAAS / Subscription Panel</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/covid/index.html">
                    <div class="nk-demo-image bg-danger"><img src="../images/landing/demo-covid19.jpg"
                            srcset="https://dashlite.net/images/landing/demo-covid192x.jpg 2x" alt="Covid Situation">
                    </div><span class="nk-demo-title"><em class="text-primary">Covid</em><br><strong>Coronavirus
                            Situation</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo3/apps/messages.html">
                    <div class="nk-demo-image bg-success"><img src="../images/landing/demo-messages.jpg"
                            srcset="https://dashlite.net/images/landing/demo-messages2x.jpg 2x" alt="Messages"></div>
                    <span class="nk-demo-title"><em class="text-primary">Demo3</em><br><strong>Apps -
                            Messages</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo3/apps/mailbox.html">
                    <div class="nk-demo-image bg-purple"><img src="../images/landing/demo-inbox.jpg"
                            srcset="https://dashlite.net/images/landing/demo-inbox2x.jpg 2x" alt="Inbox"></div><span
                        class="nk-demo-title"><em class="text-primary">Demo3</em><br><strong>Apps -
                            Mailbox</strong></span>
                </a></div>
            <div class="nk-demo-item"><a href="https://dashlite.net/demo3/apps/chats.html">
                    <div class="nk-demo-image bg-purple"><img src="../images/landing/demo-chats.jpg"
                            srcset="https://dashlite.net/images/landing/demo-chats2x.jpg 2x" alt="Chats / Messenger">
                    </div><span class="nk-demo-title"><em class="text-primary">Demo3</em><br><strong>Apps -
                            Chats</strong></span>
                </a></div>
        </div>
    </div>
    <div class="nk-demo-panel toggle-slide toggle-slide-right" data-content="settingPanel" data-toggle-overlay="true"
        data-toggle-body="true" data-toggle-screen="any">
        <div class="nk-demo-head">
            <h6 class="mb-0">Preview Settings</h6><a class="nk-demo-close toggle btn btn-icon btn-trigger revarse mr-n2"
                data-target="settingPanel" href="#"><em class="icon ni ni-cross"></em></a>
        </div>
        <div class="nk-opt-panel" data-simplebar>
            <div class="nk-opt-set">
                <div class="nk-opt-set-title">Direction Change</div>
                <div class="nk-opt-list col-2x">
                    <div class="nk-opt-item only-text active" data-key="dir" data-update="ltr"><span
                            class="nk-opt-item-bg"><span class="nk-opt-item-name">LTR Mode</span></span></div>
                    <div class="nk-opt-item only-text" data-key="dir" data-update="rtl"><span
                            class="nk-opt-item-bg"><span class="nk-opt-item-name">RTL Mode</span></span></div>
                </div>
            </div>
            <div class="nk-opt-set">
                <div class="nk-opt-set-title">Main UI Style</div>
                <div class="nk-opt-list col-2x">
                    <div class="nk-opt-item only-text active" data-key="style" data-update="ui-default"><span
                            class="nk-opt-item-bg"><span class="nk-opt-item-name">Default</span></span></div>
                    <div class="nk-opt-item only-text" data-key="style" data-update="ui-bordered"><span
                            class="nk-opt-item-bg"><span class="nk-opt-item-name">Bordered</span></span></div>
                </div>
            </div>
            <div class="nk-opt-set nk-opt-set-aside">
                <div class="nk-opt-set-title">Sidebar Style</div>
                <div class="nk-opt-list col-4x">
                    <div class="nk-opt-item" data-key="aside" data-update="is-light"><span
                            class="nk-opt-item-bg is-light"><span class="bg-lighter"></span></span><span
                            class="nk-opt-item-name">White</span></div>
                    <div class="nk-opt-item" data-key="aside" data-update="is-default"><span
                            class="nk-opt-item-bg is-light"><span class="bg-light"></span></span><span
                            class="nk-opt-item-name">Light</span></div>
                    <div class="nk-opt-item active" data-key="aside" data-update="is-dark"><span
                            class="nk-opt-item-bg"><span class="bg-dark"></span></span><span
                            class="nk-opt-item-name">Dark</span></div>
                    <div class="nk-opt-item" data-key="aside" data-update="is-theme"><span class="nk-opt-item-bg"><span
                                class="bg-theme"></span></span><span class="nk-opt-item-name">Theme</span></div>
                </div>
            </div>
            <div class="nk-opt-set nk-opt-set-header">
                <div class="nk-opt-set-title">Header Style</div>
                <div class="nk-opt-list col-4x">
                    <div class="nk-opt-item active" data-key="header" data-update="is-light"><span
                            class="nk-opt-item-bg is-light"><span class="bg-lighter"></span></span><span
                            class="nk-opt-item-name">White</span></div>
                    <div class="nk-opt-item" data-key="header" data-update="is-default"><span
                            class="nk-opt-item-bg is-light"><span class="bg-light"></span></span><span
                            class="nk-opt-item-name">Light</span></div>
                    <div class="nk-opt-item" data-key="header" data-update="is-dark"><span class="nk-opt-item-bg"><span
                                class="bg-dark"></span></span><span class="nk-opt-item-name">Dark</span></div>
                    <div class="nk-opt-item" data-key="header" data-update="is-theme"><span class="nk-opt-item-bg"><span
                                class="bg-theme"></span></span><span class="nk-opt-item-name">Theme</span></div>
                </div>
            </div>
            <div class="nk-opt-set nk-opt-set-skin">
                <div class="nk-opt-set-title">Primary Skin</div>
                <div class="nk-opt-list">
                    <div class="nk-opt-item active" data-key="skin" data-update="default"><span
                            class="nk-opt-item-bg"><span class="skin-default"></span></span><span
                            class="nk-opt-item-name">Default</span></div>
                    <div class="nk-opt-item" data-key="skin" data-update="blue"><span class="nk-opt-item-bg"><span
                                class="skin-blue"></span></span><span class="nk-opt-item-name">Blue</span></div>
                    <div class="nk-opt-item" data-key="skin" data-update="egyptian"><span class="nk-opt-item-bg"><span
                                class="skin-egyptian"></span></span><span class="nk-opt-item-name">Egyptian</span></div>
                    <div class="nk-opt-item" data-key="skin" data-update="bluelite"><span class="nk-opt-item-bg"><span
                                class="skin-bluelite"></span></span><span class="nk-opt-item-name">Blue Light</span>
                    </div>
                    <div class="nk-opt-item" data-key="skin" data-update="green"><span class="nk-opt-item-bg"><span
                                class="skin-green"></span></span><span class="nk-opt-item-name">Green</span></div>
                    <div class="nk-opt-item" data-key="skin" data-update="red"><span class="nk-opt-item-bg"><span
                                class="skin-red"></span></span><span class="nk-opt-item-name">Red</span></div>
                </div>
            </div>
            <div class="nk-opt-set">
                <div class="nk-opt-set-title">Skin Mode</div>
                <div class="nk-opt-list col-2x">
                    <div class="nk-opt-item active" data-key="mode" data-update="light-mode"><span
                            class="nk-opt-item-bg is-light"><span class="theme-light"></span></span><span
                            class="nk-opt-item-name">Light Skin</span></div>
                    <div class="nk-opt-item" data-key="mode" data-update="dark-mode"><span class="nk-opt-item-bg"><span
                                class="theme-dark"></span></span><span class="nk-opt-item-name">Dark Skin</span></div>
                </div>
            </div>
            <div class="nk-opt-reset"><a href="#" class="reset-opt-setting">Reset Setting</a></div>
        </div>
    </div>
</body>