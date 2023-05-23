<div id="layoutSidenav_content">
                <main>
                    <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
                        <div class="container-xl px-4">
                            <div class="page-header-content">
                                <div class="row align-items-center justify-content-between pt-3">
                                    <div class="col-auto mb-3">
                                        <h1 class="page-header-title">
                                            <div class="page-header-icon"><i data-feather="user"></i></div>
                                            Opzioni Account - Security
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                    <!-- Main page content-->
                    <div class="container-xl px-4 mt-4">
                        <!-- Account page navigation-->
                        <nav class="nav nav-borders">
                            <a class="nav-link ms-0" href="{{url('account/profile/1')}}">Il tuo Profilo</a>
                            <a class="nav-link" href="account-billing.html">Billing</a>
                            <a class="nav-link active " href="{{url('account/profile/2')}}">Security</a>
                            <a class="nav-link" href="account-notifications.html">Notifications</a>
                        </nav>
                        <hr class="mt-0 mb-4" />
                        <div class="row">
                            <div class="col-lg-8">
                                <!-- Change password card-->
                                <div class="card mb-4">
                                    <div class="card-header">Cambio Password</div>
                                    <div class="card-body">
                                        <form action="{{url('saveaccount/1')}}" method="POST" >
                                            <!-- Form Group (current password)-->
                                            <div class="mb-3">
                                                <label class="small mb-1" for="currentPassword">Password Corrente</label>
                                                <input class="form-control" id="currentPassword" type="password" placeholder="Enter current password" />
                                            </div>
                                            <!-- Form Group (new password)-->
                                            <div class="mb-3">
                                                <label class="small mb-1" for="newPassword">Nuova Password</label>
                                                <input class="form-control" id="newPassword" type="password" placeholder="Enter new password" />
                                            </div>
                                            <!-- Form Group (confirm password)-->
                                            <div class="mb-3">
                                                <label class="small mb-1" for="confirmPassword">Conferma Password</label>
                                                <input class="form-control" id="confirmPassword" type="password" placeholder="Confirm new password" />
                                            </div>
                                            <button class="btn btn-primary" type="button">Save</button>
                                        </form>
                                    </div>
                                </div>
                                <!-- Security preferences card-->
                                
                            </div>
                            
                        </div>
                    </div>
                </main>
                <footer class="footer-admin mt-auto footer-light">
                    <div class="container-xl px-4">
                        <div class="row">
                            <div class="col-md-6 small">Copyright &copy; Your Website 2021</div>
                            <div class="col-md-6 text-md-end small">
                                <a href="#!">Privacy Policy</a>
                                &middot;
                                <a href="#!">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>