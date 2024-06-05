@extends('admin.layouts.template')

@section('content')
    
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Halo Konnichiwa</h3>
                    Selamat datang semua, ini coba-coba
                </div>
            </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <iframe width="600" height="450" src="https://lookerstudio.google.com/embed/reporting/b6aeb586-2c69-480f-afa7-f86dda6bab03/page/p_qlabwjaphd" frameborder="0" style="border:0" allowfullscreen sandbox="allow-storage-access-by-user-activation allow-scripts allow-same-origin allow-popups allow-popups-to-escape-sandbox"></iframe>                
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="home-tab">
                    <h1 style="font-family: 'Manrope', sans-serif;font-style: normal;font-weight: normal;font-size: 28px;line-height: 38px;color: #8D8D8D;margin-bottom: 10px;">Good Morning, <span class="text-black fw-bold">John Doe</span></h1>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Area Chart -->
            <div class="col-lg-8 d-flex flex-column">
                          <div class="row flex-grow">
                            <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                              <div class="card card-rounded">
                                <div class="card-body">
                                  <div class="d-sm-flex justify-content-between align-items-start">
                                    <div>
                                      <h4 class="card-title card-title-dash">Performance Line Chart</h4>
                                      <h5 class="card-subtitle card-subtitle-dash">Lorem Ipsum is simply dummy text of the printing</h5>
                                      <iframe width="600" height="450" src="https://lookerstudio.google.com/embed/reporting/b6aeb586-2c69-480f-afa7-f86dda6bab03/page/p_qlabwjaphd" frameborder="0" style="border:0" allowfullscreen sandbox="allow-storage-access-by-user-activation allow-scripts allow-same-origin allow-popups allow-popups-to-escape-sandbox"></iframe>
                                    </div>
                                    <div id="performanceLine-legend"></div>
                                  </div>
                                  <div class="chartjs-wrapper mt-4">
                                    <canvas id="performanceLine" width=""></canvas>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
        </div>
    </div>
@endsection