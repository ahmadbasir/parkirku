@extends('panelAdmin.masterAdmin')

@section('sidebar')
  @include('panelAdmin.masterKonten.sidebar')
@endsection

@section('contentNavbar')
  @include('panelAdmin.masterKonten.contentNavbar')
@endsection

@section('layanan')
<div class="page-header">
  <h1>
    Daftar Kendaraan
  </h1>
</div>

<div class="row">
  <div class="col-xs-12">
    <!-- PAGE CONTENT BEGINS -->
    <table id="simple-table" class="table table-bordered table-hover">
      <thead>
        <tr>
          <th>NOMOR PLAT</th>
          <th>TIPE</th>
          <th>
            <i class="ace-icon fa fa-clock-o bigger-110"></i>
            MASUK
          </th>
          <th>
            <i class="ace-icon fa fa-clock-o bigger-110"></i>
            KELUAR
          </th>
          <th>STATUS</th>
          <th class="hidden-480"></th>
        </tr>
      </thead>
      <tbody>
        @foreach($list as $lists)
        <tr>
          <td>{{ $lists->noPlat }}</td>
          <td>{{ $lists->tipeKendaraan }}</td>
          <td>{{ $lists->created_at }}</td>

          @if ($lists->kondisi == 0)
          <td></td>
          @else
          <td>{{ $lists->updated_at }}</td>
          @endif

          @if ($lists->kondisi == 0)
          <td class="hidden-480">
            <span class="label label-sm label-success">BELUM KELUAR</span>
          </td>
          @else
          <td class="hidden-480">
            <span class="label label-sm label-warning">SUDAH KELUAR</span>
          </td>
          @endif

          @if ($lists->kondisi == 0)
          <td>
            <form action="{{ route('adminKendaraanKeluar', $lists->id) }}" method="POST">
              {{ csrf_field() }}
              {{ method_field('PUT') }}
              <button type="submit" class="btn btn-xs btn-danger">
                <i class="ace-icon fa fa-external-link  bigger-120"></i>
                KELUAR
              </button>
            </form>
          </td>
          @else
          <td></td>
          @endif
        </tr>
        @endforeach
      </tbody>
    </table>
    <!-- PAGE CONTENT ENDS -->
  </div>
</div>
@endsection
