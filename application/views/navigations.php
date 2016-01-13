<!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $this->session->userdata('username'); ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout"><i class="fa fa-fw fa-power-off"></i> Signout</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#sales"></i> Sales </a>
                        <ul id="sales" class="collapse">
                            <li>
                                <a href="#">Create Order</a>
                            </li>
                            <li>
                                <a href="#">View Orders</a>
                            </li>
                            <li>
                                <a href="#">Add Client</a>
                            </li>
                            <li>
                                <a href="#">View clients</a>
                            </li>
                        </ul>
                    </li>                   
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#purchases"></i> Purchases</i></a>
                        <ul id="purchases" class="collapse">
                             <li>
                                <a href="#">Create Order</a>
                            </li>
                            <li>
                                <a href="#">View Orders</a>
                            </li>
                            <li>
                                <a href="#">Add Supplier</a>
                            </li>
                            <li>
                                <a href="#">View clients</a>
                            </li>
                        </ul>
                    </li>                   
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#products"></i> Products</a>
                        <ul id="products" class="collapse">
                            <li>
                                <a href="#">Sales</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                    </li>  
                     <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#users"> Users </a>
                        <ul id="users" class="collapse">
                            <li>
                                <a href="#">Add User</a>
                            </li>
                            <li>
                                <a href="#">View Users</a>
                            </li>
                        </ul>
                    </li>                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>