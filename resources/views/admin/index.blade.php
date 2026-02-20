@extends('admin.admin_master')
@section('admin')


   <!-- App body starts -->
          <div class="app-body">

            <!-- Row starts -->
            <div class="row">
              <div class="col-xl-3 col-sm-6 col-12">
                <div class="card mb-4">
                  <div class="card-body d-flex align-items-center p-0">
                    <div class="stats-icon bg-primary">
                      <i class="bi bi-pie-chart fs-2 text-white"></i>
                    </div>
                    <div class="py-4">
                      <h5 class="text-secondary fw-light mb-1">Visitors</h5>
                      <h1 class="m-0">6650</h1>
                    </div>
                    <span class="badge bg-primary-subtle text-primary position-absolute top-0 end-0 m-3"><i
                        class="bi bi-caret-up-fill"></i>18%</span>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 col-12">
                <div class="card mb-4">
                  <div class="card-body d-flex align-items-center p-0">
                    <div class="stats-icon bg-primary">
                      <i class="bi bi-sticky fs-2 text-white"></i>
                    </div>
                    <div class="py-4">
                      <h5 class="text-secondary fw-light mb-1">Sales</h5>
                      <h1 class="m-0">4500</h1>
                    </div>
                    <span class="badge bg-primary-subtle text-primary position-absolute top-0 end-0 m-3"><i
                        class="bi bi-caret-up-fill"></i>15%</span>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 col-12">
                <div class="card mb-4">
                  <div class="card-body d-flex align-items-center p-0">
                    <div class="stats-icon bg-primary">
                      <i class="bi bi-emoji-smile fs-2 text-white"></i>
                    </div>
                    <div class="py-4">
                      <h5 class="text-secondary fw-light mb-1">Income</h5>
                      <h1 class="m-0">7500</h1>
                    </div>
                    <span class="badge bg-primary-subtle text-primary position-absolute top-0 end-0 m-3"><i
                        class="bi bi-caret-up-fill"></i>11%</span>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 col-12">
                <div class="card mb-4">
                  <div class="card-body d-flex align-items-center p-0">
                    <div class="stats-icon bg-danger">
                      <i class="bi bi-star fs-2 text-white"></i>
                    </div>
                    <div class="py-4">
                      <h5 class="text-secondary fw-light mb-1">Reviews</h5>
                      <h1 class="m-0 text-danger">98%</h1>
                    </div>
                    <span class="badge bg-danger-subtle text-danger position-absolute top-0 end-0 m-3"><i
                        class="bi bi-caret-down-fill"></i>9%</span>
                  </div>
                </div>
              </div>
            </div>
            <!-- Row ends -->

            <!-- Row starts -->
            <div class="row">
              <div class="col-xxl-9 col-xl-8 col-sm-12">
                <div class="card mb-4">
                  <div class="card-header">
                    <h5 class="card-title">Sales Report</h5>
                  </div>
                  <div class="card-body">
                    <div class="chart-height-xl overflow-hidden">
                      <div id="salesReport"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-3 col-xl-4 col-sm-12">
                <div class="card mb-4">
                  <div class="card-header">
                    <h5 class="card-title">Visitors</h5>
                  </div>
                  <div class="card-body">
                    <div class="chart-height-xl overflow-hidden">
                      <div id="visitors"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Row end -->

     
     

            


    
@endsection