<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                @if (!empty($halaman) && $halaman=='Home')
                    <li><a href="{{url('/')}}" class="active">
                @else
                    <li><a href="{{url('/')}}" class="">
                @endif
                        <i class="lnr lnr-home"></i><span>Home</span></a>
                    </li>
                
                @if (!empty($halaman) && $halaman=='LRA')
                    <li><a href="{{url('lra')}}" class="active">
                @else
                    <li><a href="{{url('lra')}}" class="">
                @endif
                        <i class="lnr lnr-chart-bars"></i> <span>Data LRA</span></a>
                    </li>

                @if (Auth::check() && (Auth::user()->level == ('admin') || Auth::user()->level == ('operator')))
                    @if (!empty($halaman) && ($halaman=='Provinsi'||$halaman=='Kabupaten/Kota'))
                        <li><a href="#subPages" data-toggle="collapse" class="collapsed active">
                    @else
                        <li><a href="#subPages" data-toggle="collapse" class="collapsed">
                    @endif
                            <i class="lnr lnr-file-empty"></i><span>Data Daerah</span><i class="icon-submenu lnr lnr-chevron-left"></i></a>
                            <div id="subPages" class="collapse ">
                                <ul class="nav">
                                    @if (!empty($halaman) && $halaman=='Provinsi')
                                        <li><a href="{{url('provinsi')}}" class="active">
                                    @else
                                        <li><a href="{{url('provinsi')}}" class="">
                                    @endif
                                            <i class="lnr lnr-earth"></i> <span>Provinsi</span></a>
                                        </li>
                                    @if (!empty($halaman) && $halaman=='Kabupaten/Kota')
                                        <li><a href="{{url('kabkota')}}" class="active">
                                    @else
                                        <li><a href="{{url('kabkota')}}" class="">
                                    @endif
                                            <i class="lnr lnr-apartment"></i> <span>Kabupaten/Kota</span></a>
                                        </li>
                                </ul>
                            </div>
                        </li>
                @endif

                @if (Auth::check() && Auth::user()->level == 'admin')
                    @if (!empty($halaman) && $halaman=='User')
                        <li><a href="{{url('user')}}" class="active">
                    @else
                        <li><a href="{{url('user')}}" class="">
                    @endif
                            <i class="lnr lnr-user"></i> <span>User</span></a>
                        </li>
                @endif        
            </ul>
        </nav>
    </div>
</div>
