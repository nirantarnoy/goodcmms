<?php
$this->title = 'ข้อมูลภาพรวมระบบ';
?>
<!--<div class="row">-->
<!--    <div class="col-lg-12 text-center welcome-message">-->
<!--        <h2>-->
<!--            Welcome to Homer Theme-->
<!--        </h2>-->
<!---->
<!--        <p>-->
<!--            Special <strong>Admin Theme</strong> for medium and large web applications with very clean and-->
<!--            aesthetic style and feel.-->
<!--        </p>-->
<!--    </div>-->
<!--</div>-->
<br />
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3 text-center">
                        <div class="small">
                            <i class="fa fa-bolt"></i> ใบแจ้งซ่อม/ใบสั่งงาน
                        </div>
                        <div>
                            <h1 class="font-extra-bold m-t-xl m-b-xs">
                                150
                            </h1>
                            <small>ใบแจ้งซ่อมทั้งหมดเดือนนี้</small>
                        </div>
                        <div class="small m-t-xl">
                            <i class="fa fa-clock-o"></i> ประจำเดือน พฤษภาคม
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-center small">
                            <i class="fa fa-laptop"></i> กราฟแสดงจำนวนใบแจ้งซ่อมแยกตามประเภท
                        </div>
                        <div class="flot-chart" style="height: 160px">
                            <div class="flot-chart-content" id="flot-line-chart"></div>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="small">
                            <i class="fa fa-clock-o"></i> Breakdown ล่าสุด
                        </div>
                        <div>
                            <h1 class="font-extra-bold m-t-xl m-b-xs">
                                10 วัน
                            </h1>
                            <small>แผนกสารสนเทศ</small>
                        </div>
                        <div class="small m-t-xl">
                            <i class="fa fa-clock-o"></i>วันที่ 25/10/2018
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
<!--                    <span class="pull-right">-->
<!--                          You have two new messages from <a href="">Monica Bolt</a>-->
<!--                    </span>-->
                อัพเดทล่าสุด: 10/01/2019
            </div>
        </div>
    </div>
</div>
<br />
<div class="row">
    <div class="col-lg-3">
        <div class="card">
            <div class="card-body text-center h-200">
                <i class="pe-7s-graph1 fa-4x"></i>

                <h1 class="m-xs">18,800 THB</h1>

                <h3 class="font-extra-bold no-margins text-success">
                    ค่าใช้จ่ายในการซ่อมรวม
                </h3>
                <small></small>
            </div>
            <div class="card-footer">
                ดูรายละเอียด
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card">
            <div class="card-body h-200">
                <div class="stats-title pull-left">
                    <h4>เปรียบเทียบยอดใบแจ้งซ่อม</h4>
                </div>
                <div class="stats-icon pull-right">
                    <i class="pe-7s-share fa-4x"></i>
                </div>
                <div class="m-t-xl">
                    <h3 class="m-b-xs">210</h3>
                    <span class="font-bold no-margins">
                        สถานะ
                    </span>

                    <div class="progress m-t-xs full progress-small">
                        <div style="width: 55%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="55"
                             role="progressbar" class=" progress-bar progress-bar-success">
                            <span class="sr-only">35% Complete (success)</span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-6">
                            <small class="stats-label">ดำเนินการแล้ว</small>
                            <h4>7.80</h4>
                        </div>

                        <div class="col-xs-6">
                            <small class="stats-label">แจ้งดำเนินการ</small>
                            <h4>76.43%</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                ดูรายละเอียด
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card">
            <div class="card-body h-200">
                <div class="stats-title pull-left">
                    <h4>จำนวนเครื่องจักร/อุปรกรณ์</h4>
                </div>
                <div class="stats-icon pull-right">
                    <i class="pe-7s-monitor fa-4x"></i>
                </div>
                <div class="m-t-xl">
                    <h1 class="text-success">368</h1>
                    <span class="font-bold no-margins">
                        เครื่องจักร/อุปกรณ์ในหน่วยงาน
                    </span>
                    <br/>
                    <small>

                    </small>
                </div>
            </div>
            <div class="card-footer">
                ดูรายละเอียด
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card">
            <div class="card-body h-200">
                <div class="stats-title pull-left">
                    <h4>รายการเบิกอะไหล่ </h4>
                </div>
                <div class="stats-icon pull-right">
                    <i class="pe-7s-cash fa-4x"></i>
                </div>
                <div class="clearfix"></div>
                <div class="flot-chart">
                    <div class="flot-chart-content" id="flot-income-chart"></div>
                </div>
                <div class="m-t-xs">

                    <div class="row">
                        <div class="col-lg-6">
                            <small class="stat-label">วันนี้</small>
                            <h4 class="text-warning">230,000 THB</h4>
                        </div>
                        <div class="col-lg-6">
                            <small class="stat-label">อาทิตย์ที่แล้ว</small>
                            <h4 class="text-success">980,600 THB <i class="fa fa-level-up text-success"></i></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                ดูรายละเอียด
            </div>
        </div>
    </div>
</div>
<br />
<div class="row">
    <div class="col-lg-3">
        <div class="card">

            <div class="card-body list">
                <h5>หน่วยงานที่แจ้งซ่อมสูงสุด</h5>
                <div class="list-item-container">
                    <div class="list-item">
                        <h3 class="no-margins font-extra-bold text-success">199</h3>
                        <small>ฝ่ายผลิต</small>
                        <div class="pull-right font-bold">98% <i class="fa fa-level-up text-success"></i></div>
                    </div>
                    <div class="list-item">
                        <h3 class="no-margins font-extra-bold text-color3">122</h3>
                        <small>ฝ่ายเทคนิคการผลิต</small>
                        <div class="pull-right font-bold">13% <i class="fa fa-level-down text-color3"></i></div>
                    </div>
                    <div class="list-item">
                        <h3 class="no-margins font-extra-bold text-color3">80</h3>
                        <small>ฝ่ายควบคุมคุณภาพ</small>
                        <div class="pull-right font-bold">22% <i class="fa fa-bolt text-color3"></i></div>
                    </div>
                    <div class="list-item">
                        <h3 class="no-margins font-extra-bold text-success">50</h3>
                        <small>ฝ่ายสนับสนุนงานผลิต</small>
                        <div class="pull-right font-bold">44% <i class="fa fa-level-up text-success"></i></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body list">
                <h5>รายการแจ้งซ่อมล่าสุด</h5>
                <div class="table-responsive project-list">
                    <table class="table table-striped">
                        <thead>
                        <tr>

                            <th colspan="2">รายละเอียด</th>
                            <th>สถานะ</th>
                            <th>แผนก</th>
                            <th>วันที่</th>
                            <th>ผู้แจ้ง</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><input type="checkbox" class="i-checks" checked></td>
                            <td>เครื่อง restart บ่อยมาก
                                <br/>
                                <small><i class="fa fa-clock-o"></i> 14/08/2023</small>
                            </td>
                            <td><a href=""><i class="fa fa-check text-success"></i></a></td>
                            <td><strong>บัญชี</strong></td>
                            <td>14/08/2023</td>
                            <td>
                                <div class="badge badge-info">user01</div>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="i-checks"></td>
                            <td>โปรแกรมแจ้งเตือนต่ออายุ
                                <br/>
                                <small><i class="fa fa-clock-o"></i> 21/07/2023</small>
                            </td>
                            <td><a href=""><i class="fa fa-check text-success"></i></a></td>
                            <td><strong>วิศวกรรม</strong></td>
                            <td>21/07/2023</td>
                            <td><div class="badge badge-info">user01</div></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="i-checks" checked></td>
                            <td>จอคอมเป็นเส้นมุมขวา
                                <br/>
                                <small><i class="fa fa-clock-o"></i> 12/06/2023</small>
                            </td>
                            <td><a href=""><i class="fa fa-check text-navy"></i></a></td>
                            <td><strong>ผลิต</strong></td>
                            <td>12/06/2023</td>
                            <td><div class="badge badge-info">user01</div></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="i-checks"></td>
                            <td>คอมเปิดไม่ติด
                                <br/>
                                <small><i class="fa fa-clock-o"></i> 06/03/2023</small>
                            </td>
                            <td><a href=""><i class="fa fa-check text-navy"></i></a></td>
                            <td><strong>ขายในประเทศ</strong></td>
                            <td>06/03/2023</td>
                            <td><div class="badge badge-info">user01</div></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card">
            <div class="card-body list">
                <h5>เครื่องจักร/อุปกรณ์ที่มีค่าใช้จ่ายสูงสุด</h5>
                <div class="list-item-container">
                    <div class="list-item">
                        <h3 class="no-margins font-extra-bold text-success">2,773</h3>
                        <small>IT01 สารสนเทศ</small>
                        <div class="pull-right font-bold">98% <i class="fa fa-level-up text-success"></i></div>
                    </div>
                    <div class="list-item">
                        <h3 class="no-margins font-extra-bold text-color3">4,422</h3>
                        <small>EN010 วิศวกรรม</small>
                        <div class="pull-right font-bold">13% <i class="fa fa-level-down text-color3"></i></div>
                    </div>
                    <div class="list-item">
                        <h3 class="no-margins font-extra-bold text-color3">9,180</h3>
                        <small>AC01</small>
                        <div class="pull-right font-bold">22% <i class="fa fa-bolt text-color3"></i></div>
                    </div>
                    <div class="list-item">
                        <h3 class="no-margins font-extra-bold text-color3">1,180</h3>
                        <small>SM09</small>
                        <div class="pull-right font-bold">11% <i class="fa fa-bolt text-color3"></i></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
