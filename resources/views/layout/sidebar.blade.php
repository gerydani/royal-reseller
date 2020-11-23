{{-- @php
    use App\Modul;
    use App\SubModul;
    use App\MenuMapping;
@endphp --}}
<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul>
                <li>
                    <a href="" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> Dashboard </span> </a>
                </li>
                {{-- @if (session('role') == "Superadmin" || session('role') == "Direktur Utama")
                    @foreach (Modul::getAllModul() as $modul)
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="{{$modul->modul_icon}}"></i><span>{{$modul->modul_desc}}</span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    @foreach (SubModul::getSub($modul->modul_id) as $sub)
                                        @if($sub->submodul_id != "PRMC")
                                            <li><a href="{{route(''.$sub->submodul_page.'')}}">{{$sub->submodul_desc}}</a></li>
                                        @endif
                                    @endforeach
                                </ul>
                        </li>
                    @endforeach
                @else
                    @foreach (MenuMapping::getHeadModul(session('user_id')) as $modul)
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="{{$modul->modul_icon}}"></i><span>{{$modul->modul_desc}}</span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    @foreach (MenuMapping::getModul(session('user_id'),$modul->modul_id) as $sub)
                                        @if($sub->submodul_id != "PRMC")
                                            <li><a href="{{route(''.$sub->submodul_page.'')}}">{{$sub->submodul_desc}}</a></li>
                                        @endif
                                    @endforeach
                                </ul>
                        </li>
                    @endforeach
                @endif --}}

            </ul>
            <div class="clearfix"></div>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

    </div>

</div>
<!-- Left Sidebar End -->
