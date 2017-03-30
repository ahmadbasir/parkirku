@extends('panelAdmin.masterAdmin')

@section('sidebar')
  @include('panelAdmin.masterKonten.sidebar',['active'=>$active])
@endsection

@section('contentNavbar')
  @include('panelAdmin.masterKonten.contentNavbar',['titleTop'=>$titleTop])
@endsection

@section('layanan')

<div class="row">
  <div class="col-xs-12 page-content">

  	<div class="timeline-container">
  		<div class="timeline-label">
  			<span class="label label-primary label-lg">
  				<b>Pengenalan Content</b>
  			</span>
  		</div>
  		<div class="timeline-items">
  			<div class="timeline-item clearfix">
  				<div class="timeline-info">
  					<span class="label label-success label-sm">#*</span>
  				</div>
  				<div class="widget-box transparent">
  					<div class="widget-header widget-header-small">
  						<h5 class="widget-title smaller">
  							<span class="grey">Markir</span>
  						</h5>
  						<span class="widget-toolbar no-border">
  							<a href="#" class="green">
  								<i class="ace-icon glyphicon glyphicon-send"></i><b> Go</b>
  							</a>
  						</span>
  					</div>
  				</div>
  			</div>
  		</div>
  		<div class="timeline-items">
  			<div class="timeline-item clearfix">
  				<div class="timeline-info">
  					<span class="label label-danger label-sm"><b>#1</b></span>
  				</div>
  				<div class="widget-box transparent">
  					<div class="widget-header widget-header-small">
  						<h5 class="widget-title smaller">
							<span class="grey">Kendaraan Masuk</span>
  						</h5>
  						<span class="widget-toolbar no-border">
							<a href="#" class="red">
								<i class="ace-icon glyphicon glyphicon-send"></i><b> Go</b>
							</a>
  						</span>
  					</div>
  				</div>

  			</div>
  		</div>
  		<div class="timeline-items">
  			<div class="timeline-item clearfix">
  				<div class="timeline-info">
  					<span class="label label-warning label-sm">#2</span>
  				</div>
  				<div class="widget-box transparent">
  					<div class="widget-header widget-header-small">
  						<h5 class="widget-title smaller">
  							<span class="grey">Daftar Kendaraan</span>
  						</h5>
  						<span class="widget-toolbar no-border">
  							<a href="#" style="color: #f89406;">
  								<i class="ace-icon glyphicon glyphicon-send"></i><b> Go</b>
  							</a>
  						</span>
  					</div>
  				</div>
  			</div>
  		</div>
  		<div class="timeline-items">
  			<div class="timeline-item clearfix">
  				<div class="timeline-info">
  					<span class="label label-info label-sm">#3</span>
  				</div>
  				<div class="widget-box transparent">
  					<div class="widget-header widget-header-small">
  						<h5 class="widget-title smaller">
  							<span class="grey">Lapor</span>
  						</h5>
  						<span class="widget-toolbar no-border">
  							<a href="#" class="blue">
  								<i class="ace-icon glyphicon glyphicon-send"></i><b> Go</b>
  							</a>
  						</span>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
  	<div class="timeline-container">
  		<div class="timeline-label">
  			<span class="label label-primary arrowed-in-right label-lg">
  				<b>Introduce</b>
  			</span>
  		</div>
  		<div class="timeline-items">
  			<div class="timeline-item clearfix">
  				<div class="timeline-info">
  					<i class="timeline-indicator ace-icon btn no-hover glyphicon glyphicon-tags"></i>
  				</div>
  				<div class="widget-box transparent">
  					<div class="widget-header widget-header-small">
  						<h5 class="widget-title smaller"><b>Kendaraan Masuk</b></h5>
  						<span class="widget-toolbar no-border">
  								<i class="ace-icon fa fa-check blue"></i>
  						</span>
  					</div>
  					<div class="widget-body">
  						<div class="widget-main col-sm-4 col-xs-12">

  							<p style="text-align: justify;">
                  <span class="label-lg blue alert-info"><b>1.</b></span> pada menu kendaraan masuk, aplikasi akan menampilkan form pengisian kendaraan masuk dari tiap gedung.
                  <br><br>
                  <img class="img-rounded img-responsive" src="{{asset('assets/images/tampilan_kendaraan_masuk.png')}}" alt="tampilan kendaraan masuk" />
                  <br>
                </p>
              </div>
              <div class="widget-main col-sm-8 col-xs-12">
                <p>
                  <span class="label-lg blue alert-info"><b>2.</b></span> Pada tampilan tersebut terlihat pada bagian atas terdapat tab yang bertuliskan tiap gedung yang akan dijadikan tempat parkir. Misalkan anda sebagai petugas di bagian gedung D, maka tekanlah tombol gedung D pada tab yang kemudian anda akan diarahkan kebagian pengisian form untuk parkir di gedung tersebut.
                  <br><br>
                  <img class="img-rounded img-responsive" src="{{asset('assets/images/tab_kendaraan_masuk.png')}}" alt="tab kendaraan masuk" />
                  <br>
                  <h3>#petunjuk pengisian</h3><br>
                  <ol type="1">
                    <li>pilihlah gedung dimana anda ditugaskan</li>
                    <li>masukkan nomor plat kendaraan yang masuk dengan format, contoh: K5944ACC tanpa tanda spasi</li>
                    <li>pilihlah tipe kendaraan yang masuk</li>
                    <li>submit data kendaraan</li>
                  </ol>
                  <br>
                  pada bagian pengisian form juga terdapat sisa kuota/slot sisa parkir yang tersedia
                </p>

  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
      <div class="timeline-items">
  			<div class="timeline-item clearfix">
  				<div class="timeline-info">
  					<i class="timeline-indicator ace-icon btn no-hover glyphicon glyphicon-tags"></i>
  				</div>
  				<div class="widget-box transparent">
  					<div class="widget-header widget-header-small">
  						<h5 class="widget-title smaller"><b>Daftar Kendaraan</b></h5>
  						<span class="widget-toolbar no-border">
  								<i class="ace-icon fa fa-check blue"></i>
  						</span>
  					</div>
  					<div class="widget-body">
  						<div class="widget-main">
  							<p>
                  Pada menu menampilkan informasi semua daftar kendaraan berupa no plat, lokasi kendaraan,
                  jenis kendaraan, waktu masuk dan keluar, dan tombol aksi untuk informasi kendaraan.
                  <br><br>
                  <img class="img-rounded img-responsive" src="{{asset('assets/images/daftar_kendaraan_potrait.png')}}" alt="daftar kendaraan potrait" />
                  <br> ( mode potrait pada mobile ) <br><br>
                  <img class="img-rounded img-responsive" src="{{asset('assets/images/daftar_kendaraan_landscape.png')}}" alt="daftar kendaraan landscape" />
                  <br> ( mode landscape pada mobile ) <br><br>
                  Pada tampilan tersebut terdapat icon <img class="img-rounded img-responsive" src="{{asset('assets/images/icon.png')}}" alt="icon" />
                  jika ditekan akan muncul beberapa tombol <img class="img-rounded img-responsive" src="{{asset('assets/images/icon_up.png')}}" alt="icon" />
                  jika icon ditekan dan statusnya sudah keluar <img class="img-rounded img-responsive" src="{{asset('assets/images/icon_ok.png')}}" alt="icon" />
                  <br>
                  <div class="alert alert-info">
                    Note: icon tidak akan muncul pada tampilan Desktop.
                  </div>
                </p>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>

  </div>
</div>
@endsection
