<?php

namespace backend\controllers;

use backend\models\OrderSearch;
use backend\models\Quotation;
use backend\models\QuotationSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * QuotationController implements the CRUD actions for Quotation model.
 */
class QuotationController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Quotation models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $viewstatus = 1;

        if(\Yii::$app->request->get('viewstatus')!=null){
            $viewstatus = \Yii::$app->request->get('viewstatus');
        }

        $pageSize = \Yii::$app->request->post("perpage");
        $searchModel = new QuotationSearch();
        $dataProvider = $searchModel->search(\Yii::$app->request->queryParams);
//        if($viewstatus ==1){
//            $dataProvider->query->andFilterWhere(['status'=>$viewstatus]);
//        }
//        if($viewstatus == 2){
//            $dataProvider->query->andFilterWhere(['status'=>0]);
//        }

        $dataProvider->setSort(['defaultOrder' => ['id' => SORT_DESC]]);
        $dataProvider->pagination->pageSize = $pageSize;

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'perpage' => $pageSize,
            'viewstatus'=>$viewstatus,
        ]);
    }

    /**
     * Displays a single Quotation model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Quotation model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Quotation();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $xdate = explode('-', $model->quotation_date);
                $t_date = date('Y-m-d');
                if (count($xdate) > 1) {
                    $t_date = $xdate[2] . '-' . $xdate[1] . '-' . $xdate[0];
                }

                $line_product_id = \Yii::$app->request->post('line_product_id');
                $line_qty = \Yii::$app->request->post('line_qty');
                $line_price = \Yii::$app->request->post('line_price');
                $line_unit_id = \Yii::$app->request->post('line_unit_id');
                $line_total = \Yii::$app->request->post('line_total');


                if($model->save(false)){
                    $total_all = 0;
                    if($line_product_id!=null){
                        for($i=0;$i<count($line_product_id);$i++){
                            $model_line = new \common\models\QuotationLine();
                            $model_line->quotation_id = $model->id;
                            $model_line->product_id = $line_product_id[$i];
                            $model_line->qty = $line_qty[$i];
                            $model_line->unit_id = $line_unit_id[$i];
                            $model_line->line_price = $line_price[$i];
                            $model_line->line_total = $line_total[$i];
                            if($model_line->save(false)){
                                $total_all += $model_line->line_total;
                            }
                        }
                    }
                    $model->total_text = $this->numtothai($total_all);
                    $model->save(false);
                    return $this->redirect(['view', 'id' => $model->id]);
                }
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Quotation model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model_detail = \common\models\QuotationLine::find()->where(['quotation_id'=>$id])->all();

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            $xdate = explode('-', $model->quotation_date);
            $t_date = date('Y-m-d');
            if (count($xdate) > 1) {
                $t_date = $xdate[2] . '-' . $xdate[1] . '-' . $xdate[0];
            }

            $line_product_id = \Yii::$app->request->post('line_product_id');
            $line_qty = \Yii::$app->request->post('line_qty');
            $line_price = \Yii::$app->request->post('line_price');
            $line_unit_id = \Yii::$app->request->post('line_unit_id');
            $line_total = \Yii::$app->request->post('line_total');
            $line_recid = \Yii::$app->request->post('line_recid');
            $removelist = \Yii::$app->request->post('removelist');


            if($model->save(false)){
                $total_all = 0;
                if($line_product_id!=null){
                    for($i=0;$i<count($line_product_id);$i++){
                        if($line_recid[$i] == 0){
                            $model_line = new \common\models\QuotationLine();
                            $model_line->quotation_id = $model->id;
                            $model_line->product_id = $line_product_id[$i];
                            $model_line->qty = $line_qty[$i];
                            $model_line->unit_id = $line_unit_id[$i];
                            $model_line->line_price = $line_price[$i];
                            $model_line->line_total = $line_total[$i];
                            if($model_line->save(false)){
                                $total_all += $model_line->line_total;
                            }
                        }else{
                            $model_line_update = \common\models\QuotationLine::find()->where(['id'=>$line_recid[$i]])->one();
                            $model_line_update->product_id = $line_product_id[$i];
                            $model_line_update->qty = $line_qty[$i];
                            $model_line_update->unit_id = $line_unit_id[$i];
                            $model_line_update->line_price = $line_price[$i];
                            $model_line_update->line_total = $line_total[$i];
                            if($model_line_update->save(false)){
                                $total_all += $model_line_update->line_total;
                            }
                        }

                    }
                }
                $model->total_text = $this->numtothai($total_all);
                $model->save(false);


                if ($removelist != null) {
                    $x = explode(',', $removelist);
                    if($x!=null){
                        for($i=0;$i<count($x);$i++){
                            \common\models\QuotationLine::deleteAll(['id'=>$x[$i]]);
                        }
                    }

                }
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('update', [
            'model' => $model,
            'model_line'=> $model_detail
        ]);
    }

    public function actionPrint($id)
    {
        $model = \common\models\Quotation::findOne($id);
        $model_line = \common\models\QuotationLine::find()->where(['quotation_id'=>$id])->all();
        return $this->render('_print', [
            'model' => $model,
            'model_line' => $model_line
        ]);
    }

    /**
     * Deletes an existing Quotation model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Quotation model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Quotation the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Quotation::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function numtothai($num)
    {
        $return = "";
        $num = str_replace(",", "", $num);
        $number = explode(".", $num);
        if (sizeof($number) > 2) {
            return 'รูปแบบข้อมุลไม่ถูกต้อง';
            exit;
        } else if (sizeof($number) == 1) {
            $number[1] = 0;
        }
        // return $number[0];
        $return .= self::numtothaistring($number[0]) . "บาท";

        $stang = intval($number[1]);
        // return $stang;
        if ($stang > 0) {
            if (strlen($stang) == 1) {
                $stang = $stang . '0';
            }
            if ($stang == '10') {
                $return .= 'สิบสตางค์';
            } else if ($stang == '11') {
                $return .= 'สิบเอ็ดสตางค์';
            } else if ($stang == '12') {
                $return .= 'สิบสองสตางค์';
            } else if ($stang == '13') {
                $return .= 'สิบสามสตางค์';
            } else if ($stang == '14') {
                $return .= 'สิบสี่สตางค์';
            } else if ($stang == '15') {
                $return .= 'สิบห้าสตางค์';
            } else if ($stang == '16') {
                $return .= 'สิบหกสตางค์';
            } else if ($stang == '17') {
                $return .= 'สิบเจ็ดสตางค์';
            } else if ($stang == '18') {
                $return .= 'สิบแปดสตางค์';
            } else if ($stang == '19') {
                $return .= 'สิบเก้าสตางค์';
            } else {
                $return .= self::numtothaistring($stang) . "สตางค์";
            }

        } else {
            $return .= "ถ้วน";
        }
        return $return;
    }

    public function numtothaistring($num)
    {
        $return_str = "";
        $txtnum1 = array('', 'หนึ่ง', 'สอง', 'สาม', 'สี่', 'ห้า', 'หก', 'เจ็ด', 'แปด', 'เก้า');
        $txtnum2 = array('', 'สิบ', 'ร้อย', 'พัน', 'หมื่น', 'แสน', 'ล้าน');
        $num_arr = str_split($num);
        $count = count($num_arr);
        foreach ($num_arr as $key => $val) {
            // echo $count." ".$val." ".$key."</br>";
            if ($count > 1 && $val == 1 && $key == ($count - 1)) {
                $return_str .= "เอ็ด";
            } else if ($count > 1 && $val == 1 && $key == 2) {
                $return_str .= $txtnum2[$val];
            } else if ($count > 1 && $val == 2 && $key == ($count - 2)) {
                $return_str .= "ยี่" . $txtnum2[$count - $key - 1];
            } else if ($count > 1 && $val == 0) {
            } else {
                $return_str .= $txtnum1[$val] . $txtnum2[$count - $key - 1];
            }
        }
        return $return_str;
    }
}