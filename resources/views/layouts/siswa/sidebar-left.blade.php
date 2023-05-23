
<div class="left-side-bar">
    <div class="brand-logo">
        <a href="index.html">
            <img src="{{asset('assets/vendors/images/deskapp-logo.svg')}}" alt="" class="dark-logo">
            <img src="{{asset('assets/vendors/images/deskapp-logo-white.svg')}}" alt="" class="light-logo">
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
            
                <li>
                    <a href="{{route('tugas.index')}}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-calendar1"></span><span class="mtext">Tugas</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/siswa/siswa-kelas') }}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-calendar1"></span><span class="mtext">Kelas</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/siswa/siswa-forum') }}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-calendar1"></span><span class="mtext">Forum</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>