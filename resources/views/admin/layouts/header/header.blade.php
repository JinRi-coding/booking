        <!-- ============================================================= -->
                <!-- ===============    Top bar header content start  ================= -->
                <!-- ============================================================= -->
                <div class="navbar-custom">
                    <!------------------------------------->
                 
                    <!-- right side topbar content start -->
                    <ul class="list-unstyled topbar-right-menu float-right mb-0">
                        
                        <li class="dropdown notification-list topbar-dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="feather icon-mail noti-icon"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu">
                                <a href="javascript:" class="dropdown-item"><i class="feather icon-map-pin text-muted"></i> &nbsp; Loction</a>
                                <a href="javascript:" class="dropdown-item"><i class="feather icon-upload-cloud text-muted"></i> &nbsp; Upload File</a>
                                <a href="javascript:" class="dropdown-item"><i class="feather icon-activity text-muted"></i> &nbsp; Report</a>
                                <a href="javascript:" class="dropdown-item"><i class="feather icon-life-buoy text-muted"></i> &nbsp; Support</a>
                                <div class="dropdown-divider"></div>
                                <a href="javascript:" class="dropdown-item"><i class="feather icon-github text-muted"></i> &nbsp; Github</a>
                                <a href="javascript:" class="dropdown-item"><i class="feather icon-slack text-muted"></i> &nbsp; Slack</a>
                            </div>
                        </li>

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="feather icon-bell noti-icon"></i>
                                <span class="noti-icon-badge"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">
                                <div class="dropdown-item noti-title">
                                    <h5 class="m-0">
                                        <span class="float-right">
                                            <a href="javascript: void(0);" class="text-dark">
                                                <small>Clear All</small>
                                            </a>
                                        </span>Notification <span class="badge badge-danger badge-pill">5 new</span>
                                    </h5>
                                </div>
                                <div class="slimscroll" style="max-height: 230px;">
                                    <!-- item start-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-primary">
                                            <i class="mdi mdi-comment-account-outline"></i>
                                        </div>
                                        <p class="notify-details">New order has been received.
                                            <small class="text-muted">1 min ago</small>
                                        </p>
                                    </a>
                                    <!-- item end-->
                                    <!-- item start-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-info">
                                            <i class="mdi mdi-account-plus"></i>
                                        </div>
                                        <p class="notify-details">Membership application has been added.
                                            <small class="text-muted">5 hours ago</small>
                                        </p>
                                    </a>
                                    <!-- item end-->
                                    <!-- item start-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon">
                                            <img src="{{ asset('assets/images/users/avatar-2.jpg') }}" class="img-fluid rounded-circle" alt="" /> </div>
                                        <p class="notify-details">Cristina Pride</p>
                                        <p class="text-muted mb-0 user-msg">
                                            <small>New report file has been uploaded.</small>
                                        </p>
                                    </a>
                                    <!-- item end-->
                                    <!-- item start-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-primary">
                                            <i class="mdi mdi-comment-account-outline"></i>
                                        </div>
                                        <p class="notify-details">Database sever #2 has been fully restarted.
                                            <small class="text-muted">4 days ago</small>
                                        </p>
                                    </a>
                                    <!-- item end-->
                                    <!-- item start-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon">
                                            <img src="{{ asset('assets/images/users/avatar-4.jpg') }}" class="img-fluid rounded-circle" alt="" /> </div>
                                        <p class="notify-details">Karen Robinson</p>
                                        <p class="text-muted mb-0 user-msg">
                                            <small>Membership application has been added.</small>
                                        </p>
                                    </a>
                                    <!-- item end-->
                                    <!-- item start-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-info">
                                            <i class="mdi mdi-heart"></i>
                                        </div>
                                        <p class="notify-details">Herry liked
                                            <b>Admin </b>
                                            <small class="text-muted">13 days ago</small>
                                        </p>
                                    </a>
                                </div>
                                <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                    View All
                                </a>
                            </div>
                        </li>
                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user arrow-none mx-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <span class="account-user-avatar">
                                    <img src="{{ asset('assets/images/profile/avatar2.jpg') }}" alt="user-image" class="rounded-circle">
                                </span>
                                <span>
                                    <span class="account-user-name">Rang Avdhut</span>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                <a href="javascript:" class="dropdown-item"><i class="feather icon-user text-muted"></i> &nbsp; My profile</a>
                                <a href="javascript:" class="dropdown-item"><i class="feather icon-mail text-muted"></i> &nbsp; Messages</a>
                                <a href="javascript:" class="dropdown-item"><i class="feather icon-settings text-muted"></i> &nbsp; settings</a>
                                <div class="dropdown-divider"></div>
                                <a href="{{ route('logout') }}" class="dropdown-item"><i class="feather icon-power text-danger"></i> &nbsp; Log Out</a>
                            </div>
                        </li>
                    </ul>
                    <!-- right side topbar content end -->
                    <!------------------------------------->

                    <!---------------------------------------------->
                    <!-- Left side topbar content Start -->

                    <!-- Minimenu and mobille toggle button start -->
                    <button class="button-menu-mobile open-left">
                        <i class="feather icon-menu"></i>
                    </button>
                    <!-- Minimenu and mobille toggle button end -->


                    <div class="header-search">
                        <form>
                            <div class="input-group">
                                <span class="feather icon-search"></span>
                                <input type="text" class="form-control" placeholder="Search...">
                            </div>
                        </form>
                    </div>
                    <!-- Left side topbar content end -->
                    <!------------------------------------->
                </div>
                <!-- ================================================================== -->
                <!-- ===============    Top bar header content end  ================= -->
                <!-- ================================================================== -->
