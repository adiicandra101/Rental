<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="index.html" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Data mobil<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('merek.index') }}"><i class="fa fa-maxcdn"></i> Merek</a>
                        <a href="{{ route('sopir.index') }}"><i class="fas fa-user-secret"></i> Sopir</a>
                    </li>
                    <li>
                        <a href="morris.html">merek</a>
                    </li>
                </ul>

            <li>
                <a href="#"><i class="fas fa-cart-arrow-down"></i> Transaksi<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">booking</a>
                    </li>
                    <li>
                        <a href="#">pengambilan</a>
                    </li>
                    <li>
                        <a href="#">pengembalian</a>
                    </li>
