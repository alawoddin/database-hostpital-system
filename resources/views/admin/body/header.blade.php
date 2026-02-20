  <!-- App header starts -->
          <div class="app-header d-flex align-items-center">

            <!-- Toggle buttons start -->
            <div class="d-flex">
              <button type="button" class="btn btn-outline-primary me-2 toggle-sidebar" id="toggle-sidebar">
                <i class="bi bi-text-indent-left fs-5"></i>
              </button>
              <button type="button" class="btn btn-outline-primary me-2 pin-sidebar" id="pin-sidebar">
                <i class="bi bi-text-indent-left fs-5"></i>
              </button>
            </div>
            <!-- Toggle buttons end -->

            <!-- App brand sm start -->
            <div class="app-brand-sm d-md-none d-sm-block">
              <a href="index-2.html">
                <img src="{{ asset('backend/assets/images/logo-sm.svg') }}" class="logo" alt="Bootstrap Gallery">
              </a>
            </div>
            <!-- App brand sm end -->

            <!-- App header actions start -->
            <div class="header-actions">

              <!-- Search container start -->
              <div class="search-container d-lg-block d-none mx-3">
                <input type="text" class="form-control" id="searchId" placeholder="Search">
                <i class="bi bi-search"></i>
              </div>
              <!-- Search container end -->

              <!-- Header stats starts -->
              <div class="d-lg-flex gap-3 d-none">
                <div class="dropdown">
                  <a class="dropdown-toggle" href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('backend/assets/images/flags/1x1/gb.svg') }}" class="header-country-flag" alt="Bootstrap Dashboards">
                  </a>
                  <div class="dropdown-menu dropdown-menu-end dropdown-mini">
                    <div class="country-container">
                      <a href="index-2.html" class="py-2">
                        <img src="{{ asset('backend/assets/images/flags/1x1/us.svg') }}" alt="Admin Panel">
                      </a>
                      <a href="index-2.html" class="py-2">
                        <img src="{{ asset('backend/assets/images/flags/1x1/in.svg') }}" alt="Admin Panels">
                      </a>
                      <a href="index-2.html" class="py-2">
                        <img src="{{ asset('backend/assets/images/flags/1x1/br.svg') }}" alt="Admin Dashboards">
                      </a>
                      
                    </div>
                  </div>
                </div>
                <div class="dropdown">
                  <a class="dropdown-toggle" href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-grid"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end dropdown-300">

                    <div class="scroll350">
                      <!-- Activity List Starts -->
                      <div class="p-3">
                        <ul class="p-0 m-0 activity-list2">
                          <li class="activity-item pb-3 mb-3">
                            <a href="#!">
                              <h5 class="fw-regular">
                                <i class="bi bi-stop-fill text-danger me-1"></i>
                                Invoices paid.
                              </h5>
                              <div class="ps-3 ms-2 border-start">
                                <div class="d-flex align-items-center mb-2">
                                  <div class="flex-shrink-0">
                                    <img src="{{ asset('backend/assets/images/mobiles/mob2.jpg') }}" class="img-3x rounded-1"
                                      alt="Admin Templates">
                                  </div>
                                  <div class="flex-grow-1 ms-3">
                                    23 invoices have been paid to the Bootstrap Gallery.
                                  </div>
                                </div>
                                <p class="m-0 small text-secondary">10:20AM Today</p>
                              </div>
                            </a>
                          </li>
                          <li class="activity-item pb-3 mb-3">
                            <a href="#!">
                              <h5 class="fw-regular">
                                <i class="bi bi-stop-fill text-info me-1"></i>
                                Projects created.
                              </h5>
                              <div class="ps-3 ms-2 border-start">
                                <div class="d-flex align-items-center mb-2">
                                  <div class="flex-shrink-0">
                                    <img src="{{ asset('backend/assets/images/mobiles/mob4.jpg') }}" class="img-3x rounded-1"
                                      alt="Admin Templates">
                                  </div>
                                  <div class="flex-grow-1 ms-3">
                                    28 projects have been created and assigned to Developers.
                                  </div>
                                </div>
                                <p class="m-0 small text-secondary">04:30PM Today</p>
                              </div>
                            </a>
                          </li>
                          <li class="activity-item pb-3 mb-3">
                            <a href="#!">
                              <h5 class="fw-regular">
                                <i class="bi bi-stop-fill text-success me-1"></i>
                                Tasks assigned.
                              </h5>
                              <div class="ps-3 ms-2 border-start">
                                <div class="d-flex align-items-center mb-2">
                                  <div class="flex-shrink-0">
                                    <img src="{{ asset('backend/assets/images/mobiles/mob6.jpg') }}" class="img-3x rounded-1"
                                      alt="Admin Templates">
                                  </div>
                                  <div class="flex-grow-1 ms-3">
                                    36 tasks have been assigned to Developers.
                                  </div>
                                </div>
                                <p class="m-0 small text-secondary">06:50PM Today</p>
                              </div>
                            </a>
                          </li>
                        </ul>
                      </div>
                      <!-- Activity List Ends -->
                    </div>
                    <div class="d-grid m-3">
                      <a href="javascript:void(0)" class="btn btn-primary">View all</a>
                    </div>

                  </div>
                </div>
              
              </div>
              <!-- Header stats ends -->

              <!-- Header settings starts -->
              <div class="dropdown ms-3">
                <a id="userSettings" class="dropdown-toggle" href="#!" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="{{ asset('backend/assets/images/user.png') }}" class="profile-avatar" alt="Bootstrap Gallery">
                </a>
                <div class="dropdown-menu dropdown-menu-end shadow">
                  <a class="dropdown-item d-flex align-items-center" href="profile.html"><i
                      class="bi bi-person fs-4 me-2"></i>Profile</a>
                  <a class="dropdown-item d-flex align-items-center" href="settings.html"><i
                      class="bi bi-gear fs-4 me-2"></i>Account Settings</a>
                  <a class="dropdown-item d-flex align-items-center" href="login.html"><i
                      class="bi bi-escape fs-4 me-2"></i>Logout</a>
                </div>
              </div>
              <!-- Header settings ends -->

            </div>
            <!-- App header actions end -->

          </div>
          <!-- App header ends -->
              <!-- App hero header starts -->
          <div class="app-hero-header d-flex align-items-start">

            <!-- Breadcrumb start -->
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <i class="bi bi-house"></i>
                <a href="index-2.html">Home</a>
              </li>
              <li class="breadcrumb-item" aria-current="page">Dashboard</li>
            </ol>
            <!-- Breadcrumb end -->

            <!-- Sales stats starts -->
            <div class="ms-auto d-lg-flex d-none gap-4">
              <div class="d-flex align-items-center">
                <div id="orders" class="me-3"></div>
                <div>
                  <h3 class="m-0">6900</h3>
                  <h6 class="m-0">Orders</h6>
                </div>
              </div>
              <div class="d-flex align-items-center">
                <div id="sales" class="me-3"></div>
                <div>
                  <h3 class="m-0">9800</h3>
                  <h6 class="m-0">Sales</h6>
                </div>
              </div>
            </div>
            <!-- Sales stats ends -->

          </div>
          <!-- App Hero header ends -->


     
        
            
