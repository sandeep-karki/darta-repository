
<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">

                <li class="menu-title">Navigation</li>

                <li>
                    <a href="{{ route('backend.dashboard.index') }}">
                        <i class="fe-airplay"></i>
                        <span> Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="fas fa-user-injured"></i><span>Test</span><span class="menu-arrow"></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="{{ route('backend.test.create') }}">Create</a>
                        </li>
                        <li>
                            <a href="{{  route('backend.test.index')  }}">List</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="fas fa-piggy-bank"></i><span>बैंक</span><span class="menu-arrow"></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="{{ route('backend.bank.create') }}">बैंक रचनुहोस</a>
                        </li>
                        <li>
                            <a href="{{  route('backend.bank.index')  }}">बैंकको सुची</a>
                        </li>
                    </ul>
                </li>   

                <li>
                    <a href="javascript: void(0);"><i class="fas fa-registered"></i><span>प्रदेश</span><span class="menu-arrow"></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="{{ route('backend.province.create') }}">नयाँ रच्नुहोस</a>
                        </li>
                        <li>
                            <a href="{{  route('backend.province.index')  }}">प्रदेशहरुको सूची</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="fas fa-registered"></i><span>जिल्ला</span><span class="menu-arrow"></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="{{ route('backend.district.create') }}">नयाँ रच्नुहोस</a>
                        </li>
                        <li>
                            <a href="{{  route('backend.district.index')  }}">जिल्लाहरुको सूची</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="fas fa-registered"></i><span>स्थानिय तह</span><span class="menu-arrow"></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="{{ route('backend.municipality.create') }}">नयाँ रच्नुहोस</a>
                        </li>
                        <li>
                            <a href="{{  route('backend.municipality.index')  }}">स्थानिय तहहरुको सूची</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="fas fa-registered"></i><span>अपराधको प्रकार</span><span class="menu-arrow"></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="{{ route('backend.crime.create') }}">नयाँ रच्नुहोस</a>
                        </li>
                        <li>
                            <a href="{{  route('backend.crime.index')  }}">अपराधको प्रकारका सूची</a>
                        </li>
                    </ul>
                </li>   
                
                <li>
                    <a href="javascript: void(0);"><i class="fa fa-registered"></i><span>ठगीको माध्यम</span><span class="menu-arrow"></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="{{ route('backend.cheat.create') }}">नयाँ रच्नुहोस</a>
                        </li>
                        <li>
                            <a href="{{  route('backend.cheat.index')  }}">दर्ता सूची</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="fa fa-registered"></i><span>दर्ता गर्नुहोस</span><span class="menu-arrow"></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="{{ route('backend.victim.create') }}">नयाँ रच्नुहोस</a>
                        </li>
                        <li>
                            <a href="{{  route('backend.victim.index')  }}">दर्ता सूची</a>
                        </li>
                    </ul>
                </li>

            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
