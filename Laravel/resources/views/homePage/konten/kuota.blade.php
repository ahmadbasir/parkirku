@extends('homePage.masterHomePage')
@section('kuota')
  <div class="container">
      <div class="row">
          <div class="col-lg-12 text-center">
              <h2 class="section-heading">Kuota Hari Ini</h2>
              <hr class="primary">
          </div>
      </div>
  </div>
  <div class="container">
      <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
              <div class="service-box">
                  <i class="fa fa-4x fa-bookmark  text-primary sr-icons"></i>
                  <h2>Gedung G</h2>
                  <h3 class="text-muted">
                    <table align="center">
                      <tr>
                        <td align="left">Motor</td>
                        <td>&nbsp; : &nbsp;</td>
                        <td align="right"><strong>{{ $totalMotorG }}</strong>/200 </td>
                      </tr>
                      <tr>
                        <td align="left">Mobil</td>
                        <td>&nbsp; : &nbsp;</td>
                        <td align="right"><strong>{{ $totalMobilG }}</strong>/35 </td>
                      </tr>
                    </table>
                  </h3>
              </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
              <div class="service-box">
                  <i class="fa fa-4x fa-bookmark-o text-primary sr-icons"></i>
                  <h2>Gedung H</h2>
                  <h3 class="text-muted"><table align="center">
                    <tr>
                      <td align="left">Motor</td>
                      <td>&nbsp; : &nbsp;</td>
                      <td align="right"><strong>{{ $totalMotorH }}</strong>/200 </td>
                    </tr>
                  </table>
                </h3>
              </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
              <div class="service-box">
                  <i class="fa fa-4x fa-bookmark text-primary sr-icons"></i>
                  <h2>Gedung D</h2>
                  <h3 class="text-muted">
                    <table align="center">
                    <tr>
                      <td align="left">Motor</td>
                      <td>&nbsp; : &nbsp;</td>
                      <td align="right"><strong>{{ $totalMotorD }}</strong>/100 </td>
                    </tr>
                  </table>
                </h3>
              </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
              <div class="service-box">
                  <i class="fa fa-4x fa-bookmark-o text-primary sr-icons"></i>
                  <h2>Gedung E</h2>
                  <h3 class="text-muted">
                    <table align="center">
                      <tr>
                        <td align="left">Motor</td>
                        <td>&nbsp; : &nbsp;</td>
                        <td align="right"><strong>{{ $totalMotorE }}</strong>/300 </td>
                      </tr>
                      <tr>
                        <td align="left">Mobil</td>
                        <td>&nbsp; : &nbsp;</td>
                        <td align="right"><strong>{{ $totalMobilE }}</strong>/50 </td>
                      </tr>
                    </table>
                  </h3>
              </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center">
          </div>

          <div class="col-lg-3 col-md-6 text-center">
              <div class="service-box">
                  <i class="fa fa-4x fa-bookmark text-primary sr-icons"></i>
                  <h2>Gedung C</h2>
                  <h3 class="text-muted">
                    <table align="center">
                      <tr>
                        <td align="left">Motor</td>
                        <td>&nbsp; : &nbsp;</td>
                        <td align="right"><strong>{{ $totalMotorC }}</strong>/100 </td>
                      </tr>
                      <tr>
                        <td align="left">Mobil</td>
                        <td>&nbsp; : &nbsp;</td>
                        <td align="right"><strong>{{ $totalMobilC }}</strong>/25 </td>
                      </tr>
                    </table>
                  </h3>
              </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
              <div class="service-box">
                  <i class="fa fa-4x fa-bookmark-o text-primary sr-icons"></i>
                  <h2>Lapangan Basket</h2>
                  <h3 class="text-muted">
                    <table align="center">
                      <tr>
                        <td align="left">Motor</td>
                        <td>&nbsp; : &nbsp;</td>
                        <td align="right"><strong>{{ $totalMotorLB }}</strong>/250 </td>
                      </tr>
                    </table>
                  </h3>
              </div>
          </div>
      </div>
  </div>
@endsection
