<?php
/**
 * Created by PhpStorm.
 * User: niran.w
 * Date: 17/01/2019
 * Time: 16:14:41
 */

use yii\helpers\ArrayHelper;

?>
<div class="row">
    <div class="col-lg-12">

        <div class="row">
            <div class="col-md-6 text-center">
                <div class="table-responsive project-list">
                    <table class="table">
                        <?php $items = \backend\helpers\ConfigItem::asArrayObject(); ?>
                        <?php for ($i = 0; $i <= count($items) - 1; $i++): ?>
                            <tr>
                                <td style="text-align: left"><input type="checkbox" class="i-checks" checked></td>
                                <td style="text-align: left"><?= $items[$i]['name'] ?></td>
                            </tr>
                        <?php endfor; ?>
                    </table>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <div class="table-responsive project-list">
                    <table class="table">
                        <?php $items = \backend\helpers\ConfigItem::asArrayObject(); ?>
                        <?php for ($i = 0; $i <= count($items) - 1; $i++): ?>
                            <tr>
                                <td style="text-align: left"><input type="checkbox" class="i-checks" checked></td>
                                <td style="text-align: left"><?= $items[$i]['name'] ?></td>
                            </tr>
                        <?php endfor; ?>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="row">
    <div class="col-lg-12">

        <div class="row">
            <div class="col-md-6 text-center">
                <div class="table-responsive project-list">
                    <table class="table">
                        <?php $items = \backend\helpers\ConfigItem::asArrayObject(); ?>
                        <?php for ($i = 0; $i <= count($items) - 1; $i++): ?>
                            <tr>
                                <td style="text-align: left"><input type="checkbox" class="i-checks" checked></td>
                                <td style="text-align: left"><?= $items[$i]['name'] ?></td>
                            </tr>
                        <?php endfor; ?>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="row">
    <div class="col-lg-12">

        <div class="row">
            <div class="col-md-6 text-center">
                <div class="table-responsive project-list">
                    <table class="table">
                        <?php $items = \backend\helpers\ConfigItem::asArrayObject(); ?>
                        <?php for ($i = 0; $i <= count($items) - 1; $i++): ?>
                            <tr>
                                <td style="text-align: left"><input type="checkbox" class="i-checks" checked></td>
                                <td style="text-align: left"><?= $items[$i]['name'] ?></td>
                            </tr>
                        <?php endfor; ?>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="btn btn-success pull-right">บันทึก</div>
    </div>
</div>
