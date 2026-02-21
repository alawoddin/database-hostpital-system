    <!-- Sidebar wrapper start -->
        <nav id="sidebar" class="sidebar-wrapper">

          <!-- App brand starts -->
          <div class="app-brand p-4">
            <a href="{{ route('dashboard') }}">
              <img src="{{ asset('backend/assets/images/logo.svg') }}" class="logo" alt="Bootstrap Gallery">
            </a>
          </div>
          <!-- App brand ends -->

          <!-- Sidebar profile actions starts -->
          <ul class="profile-actions d-lg-flex d-none">
            <li>
              <a href="{{ route('admin.profile') }}" data-bs-toggle="tooltip" data-bs-placement="bottom"
                data-bs-custom-class="custom-tooltip-success" data-bs-title="Settings">
                <i class="bi bi-gear"></i>
              </a>
            </li>
            
           
          </ul>
          <!-- Sidebar profile actions ends -->

          <!-- Sidebar menu starts -->
          <div class="sidebarMenuScroll">
            <ul class="sidebar-menu">
              <li class="active current-page">
                <a href="{{ route('dashboard') }}">
                  <i class="bi bi-pie-chart"></i>
                  <span class="menu-text">Dashboard</span>
                </a>
              </li>
      
              <li class="treeview">
                <a href="#!">
                  <i class="bi bi-stickies"></i>
                  <span class="menu-text">Type OPD</span>
                </a>
                <ul class="treeview-menu">

                    <li>
                    <a href="{{ route('add.opd') }}">Add  OPD</a>
                  </li>

                  <li>
                    <a href="{{ route('all.opd') }}">All  OPDs</a>
                  </li>
                
                
                 
                </ul>
              </li>

                     <li class="treeview">
                <a href="#!">
                  <i class="bi bi-stickies"></i>
                  <span class="menu-text">EEG</span>
                </a>
                <ul class="treeview-menu">

                    <li>
                    <a href="{{ route('add.eeg') }}">Add EEG</a>
                  </li>

                  <li>
                    <a href="{{ route('all.eeg') }}">All EEG</a>
                  </li>
                
                
                 
                </ul>
              </li>

                              <li class="treeview">
                <a href="#!">
                  <i class="bi bi-stickies"></i>
                  <span class="menu-text">ICU</span>
                </a>
                <ul class="treeview-menu">

                    <li>
                    <a href="{{ route('add.icu') }}">Add ICU</a>
                  </li>

                  <li>
                    <a href="{{ route('all.icu') }}">All ICU</a>
                  </li>
                
                
                 
                </ul>
              </li>

                                    <li class="treeview">
                <a href="#!">
                  <i class="bi bi-stickies"></i>
                  <span class="menu-text">LAB</span>
                </a>
                <ul class="treeview-menu">

                    <li>
                    <a href="{{ route('add.lab') }}">Add LAB</a>
                  </li>

                  <li>
                    <a href="{{ route('all.lab') }}">All LAB</a>
                  </li>
                
                
                 
                </ul>
              </li>

                                              <li class="treeview">
                <a href="#!">
                  <i class="bi bi-stickies"></i>
                  <span class="menu-text">WARD</span>
                </a>
                <ul class="treeview-menu">

                    <li>
                    <a href="{{ route('add.ward') }}">Add WARD</a>
                  </li>

                  <li>
                    <a href="{{ route('all.ward') }}">All WARD</a>
                  </li>
                
                
                 
                </ul>
              </li>

                     <li class="treeview">
                <a href="#!">
                  <i class="bi bi-stickies"></i>
                  <span class="menu-text">Procedure</span>
                </a>
                <ul class="treeview-menu">

                    <li>
                    <a href="{{ route('add.procedure') }}">Add Procedure</a>
                  </li>

                  <li>
                    <a href="{{ route('all.procedure') }}">All Procedures</a>
                  </li>
                
                
                 
                </ul>
              </li>




                   {{-- <li class="treeview">
                <a href="#!">
                  <i class="bi bi-stickies"></i>
                  <span class="menu-text">X ray </span>
                </a>
                <ul class="treeview-menu">

               
                    <li>
                      <a href="{{ route('add.xray') }}">Add X ray</a>

                  </li>

                  <li>
                    <a href="{{ route('all.xray') }}">All X ray</a>
                  </li>
                
                
                 
                </ul>
              </li> --}}

                  {{-- <li class="treeview">
                <a href="#!">
                  <i class="bi bi-stickies"></i>
                  <span class="menu-text">EEG</span>
                </a>
                <ul class="treeview-menu">

               
                    <li>
                      <a href="{{ route('add.eeg') }}">Add EEG</a>

                  </li>

                  <li>
                    <a href="{{ route('all.eeg') }}">All EEG</a>
                  </li>
                
                
                 
                </ul>
              </li> --}}

                      {{-- <li class="treeview">
                <a href="#!">
                  <i class="bi bi-stickies"></i>
                  <span class="menu-text">ICO</span>
                </a>
                <ul class="treeview-menu">

               
                    <li>
                      <a href="{{ route('add.ico') }}">Add ICO</a>

                  </li>

                  <li>
                    <a href="{{ route('all.ico') }}">All ICO</a>
                  </li>
                
                
                 
                </ul>
              </li> --}}


                      {{-- <li class="treeview">
                <a href="#!">
                  <i class="bi bi-stickies"></i>
                  <span class="menu-text">Lab</span>
                </a>
                <ul class="treeview-menu">

               
                    <li>
                      <a href="{{ route('add.lab') }}">Add Lab</a>

                  </li>

                  <li>
                    <a href="{{ route('all.lab') }}">All Lab</a>
                  </li>
                
                
                 
                </ul>
              </li> --}}

                             {{-- <li class="treeview">
                <a href="#!">
                  <i class="bi bi-stickies"></i>
                  <span class="menu-text">Ward</span>
                </a>
                <ul class="treeview-menu">

               
                    <li>
                      <a href="{{ route('add.ward') }}">Add Ward</a>

                  </li>

                  <li>
                    <a href="{{ route('all.ward') }}">All Ward</a>
                  </li>
                
                
                 
                </ul>
              </li> --}}

                                {{-- <li class="treeview">
                <a href="#!">
                  <i class="bi bi-stickies"></i>
                  <span class="menu-text">Pro</span>
                </a>
                <ul class="treeview-menu">

               
                    <li>
                      <a href="{{ route('add.procedure') }}">Add Procedure</a>

                  </li>

                  <li>
                    <a href="{{ route('all.procedure') }}">All Procedure</a>
                  </li>
                
                
                 
                </ul>
              </li> --}}


{{-- 
                                       <li class="treeview">
                <a href="#!">
                  <i class="bi bi-stickies"></i>
                  <span class="menu-text">Consultation</span>
                </a>
                <ul class="treeview-menu">

               
                    <li>
                      <a href="{{ route('add.consultation') }}">Add Consultation</a>

                  </li>

                  <li>
                    <a href="{{ route('all.consultation') }}">All Consultation</a>
                  </li>
                
                
                 
                </ul>
              </li> --}}
              

            
                

       

            </ul>
          </div>
          <!-- Sidebar menu ends -->

        </nav>
        <!-- Sidebar wrapper end -->