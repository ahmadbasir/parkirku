<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 text-center">
            <h2 class="section-heading">Lapor !!!</h2>
            <hr class="primary">
            <p>Laporkan Tentang Kami <br>Kehilangan, Kritik, Maupun Saran</p>
        </div>
        <div class="col-lg-8 col-lg-offset-2 text-center">
          <br>
        </div>
        <div class="col-lg-8 col-lg-offset-2">
          <form method="post" action="{{ route('lapor') }}">
            {{ csrf_field() }}
              <div class="row control-group">
                  <div class="form-group col-xs-12">
                      <label>Nama Pelapor</label>
                      <input type="text" name="nama" class="form-control" placeholder="Nama">
                  </div>
              </div>
              <div class="row control-group">
                  <div class="form-group col-xs-12">
                      <label>No. HP</label>
                      <input type="text" name="noHP" class="form-control" placeholder="No. HP">
                      <p><font size="2">( NB: Pastikan No. HP anda <b>aktif</b> dan sudah terintergrasi dengan Line, WA, atau Telegram.
                        Sehingga dapat dihubungi dengan segera )</font></p>
                  </div>
              </div>
              <br><br>
              <div class="row control-group">
                  <div class="form-group col-xs-12 floating-label-form-group controls">
                      <label>Judul Lapor</label>
                      <input type="text" name="judul" class="form-control" placeholder="Judul Lapor">
                  </div>
              </div>
              <div class="row control-group">
                  <div class="form-group col-xs-12">
                      <label>Pesan</label>
                      <textarea rows="6" name="pesan" class="form-control" placeholder="Pesan"></textarea>
                      <p class="help-block text-danger"></p>
                  </div>
              </div>
              <br>
              <div class="row">
                  <div class="form-group col-xs-12 text-center">
                      <button type="submit" class="btn btn-success btn-lg">Send</button>
                  </div>
              </div>
          </form>
        </div>




        <!-- <div class="col-lg-4 col-lg-offset-2 text-center">
            <i class="fa fa-phone fa-3x sr-contact"></i>
            <p>123-456-6789</p>
        </div>
        <div class="col-lg-4 text-center">
            <i class="fa fa-envelope-o fa-3x sr-contact"></i>
            <p><a href="mailto:your-email@your-domain.com">feedback@startbootstrap.com</a></p>
        </div> -->
    </div>
</div>
