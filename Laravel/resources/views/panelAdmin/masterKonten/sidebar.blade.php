<div id="sidebar" class="sidebar responsive ace-save-state compact">
  <ul class="nav nav-list">
    @if ($active == 1)
    <li class="active">
    @else
    <li class="">
    @endif
      <a href="{{ route('adminPanel') }}">
        <i class="menu-icon fa fa-pencil-square-o"></i>
        <span class="menu-text"> Kendaraan Masuk </span>
      </a>
    </li>

    @if ($active == 2)
    <li class="active">
    @else
    <li class="">
    @endif
      <a href="{{ route('adminListParkir') }}">
        <i class="menu-icon fa fa-list"></i>
        <span class="menu-text"> Daftar Kendaraan </span>
      </a>
    </li>

    @if ($active == 3)
    <li class="active">
    @else
    <li class="">
    @endif
      <a href="#">
        <i class="menu-icon fa fa-tag"></i>
        <span class="menu-text"> Lapor </span>
      </a>
    </li>

  </ul>
</div>
