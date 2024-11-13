<aside class="main-sidebar sidebar-dark-blue elevation-4">
    <!-- Brand Logo -->
    <a href="index.php?r=site/index" class="brand-link">
<!--        <img src="--><?php //echo Yii::$app->request->baseUrl; ?><!--/uploads/logo/ab_logo.jpg" alt="mmc" class="brand-image">-->
<!--        <img src="--><?php //echo Yii::$app->request->baseUrl; ?><!--/uploads/logo/mmc_new.png" alt="mmc" width="100%">-->
                <span style="margin-left: 20px; " class="brand-text font-weight-light">Good CMMS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <?php if (!isset($_SESSION['driver_login'])): ?>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="index.php?r=site/index" class="nav-link site">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <!--                                <i class="right fas fa-angle-left"></i>-->
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?r=plant" class="nav-link plant">
                        <i class="nav-icon fas fa-th"></i>
                        ข้อมูลบริษัท
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?r=site/systemconfig" class="nav-link systemconfig">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            ตั้งค่าระบบ
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview has-sub">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            ตั้งค่าพื้นฐาน
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="index.php?r=department/index" class="nav-link department">
                                <i class="far fa-circlezz nav-icon"></i>
                                <p>ฝ่าย</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?r=section/index" class="nav-link section">
                                <i class="far fa-circlezz nav-icon"></i>
                                <p>แผนก</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?r=warehouse/index" class="nav-link warehouse">
                                <i class="far fa-circlezz nav-icon"></i>
                                <p>คลัง</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?r=location/index" class="nav-link location">
                                <i class="far fa-circlezz nav-icon"></i>
                                <p>Loc จัดเก็บ</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?r=unit/index" class="nav-link unit">
                                <i class="far fa-circlezz nav-icon"></i>
                                <p>หน่วยนับ</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?r=worktype/index" class="nav-link worktype">
                                <i class="far fa-circlezz nav-icon"></i>
                                <p>ประเภทใบสั่งงาน</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview has-sub">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-toolbox"></i>
                        <p>
                            ข้อมูลเครื่องจักร
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="index.php?r=assetgroup/index" class="nav-link assetgroup">
                                <i class="far fa-circlez nav-icon"></i>
                                <p>กลุ่ม</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?r=asset/index" class="nav-link asset">
                                <i class="far fa-circlez nav-icon"></i>
                                <p>รายชื่อเครื่องจักร</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?r=assetlocation/index" class="nav-link assetlocation">
                                <i class="far fa-circlez nav-icon"></i>
                                <p>ที่ตั้งเครื่องจักร</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?r=failure/index" class="nav-link failure">
                                <i class="far fa-circlez nav-icon"></i>
                                <p>รหัสความผิดพลาด</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview has-sub">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-wrench"></i>
                        <p>
                            อะไหล่
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="index.php?r=materialgroup/index" class="nav-link materialgroup">
                                <i class="far fa-circlez nav-icon"></i>
                                <p>กลุ่ม</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?r=material/index" class="nav-link material">
                                <i class="far fa-circlez nav-icon"></i>
                                <p>อะไหล่/Spare part</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview has-sub">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-calendar-alt"></i>
                        <p>
                            แผนบำรุงรักษา
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="index.php?r=tasklist/index" class="nav-link tasklist">
                                <i class="far fa-circlez nav-icon"></i>
                                <p>Task</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?r=pmschedule/index" class="nav-link pmschedule">
                                <i class="far fa-circlez nav-icon"></i>
                                <p>PM Schedule</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item">
                    <a href="index.php?r=employee" class="nav-link employee">
                        <i class="nav-icon fas fa-address-book"></i>
                        <p>
                            พนักงาน
                            <!--                                <span class="right badge badge-danger">New</span>-->
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview has-sub">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tools"></i>
                        <p>
                            งานแจ้งซ่อม
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="index.php?r=workrequest/index" class="nav-link workrequest">
                                <i class="far fa-circlez nav-icon"></i>
                                <p>คำร้องแจ้งซ่อม</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?r=workorder/index" class="nav-link workorder">
                                <i class="far fa-circlez nav-icon"></i>
                                <p>ใบสั่งซ่อม</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview has-sub">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            รายงาน
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="index.php?r=report" class="nav-link report">
                                <i class="far fa-circlez nav-icon"></i>
                                <p>รายจ่าย</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?r=report" class="nav-link report">
                                <i class="far fa-circlez nav-icon"></i>
                                <p>รายรับ</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview has-sub">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            ผู้ใช้งาน
                            <i class="fas fa-angle-left right"></i>
                            <!--                                <span class="badge badge-info right">6</span>-->
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="index.php?r=usergroup" class="nav-link usergroup">
                                <i class="far fa-circlez nav-icon"></i>
                                <p>กลุ่มผู้ใช้งาน</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?r=user" class="nav-link user">
                                <i class="far fa-circlez nav-icon"></i>
                                <p>ผู้ใช้งาน</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?r=authitem" class="nav-link auth">
                                <i class="far fa-circlez nav-icon"></i>
                                <p>สิทธิ์การใช้งาน</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview has-sub">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-database"></i>
                        <p>
                            สำรองข้อมูล
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="index.php?r=dbbackup/backuplist" class="nav-link dbbackup">
                                <i class="far fa-file-archive nav-icon"></i>
                                <p>สำรองข้อมูล</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?r=dbrestore/restorepage" class="nav-link dbrestore">
                                <i class="fa fa-upload nav-icon"></i>
                                <p>กู้คืนข้อมูล</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->

        <?php endif; ?>

    </div>
    <!-- /.sidebar -->
</aside>

