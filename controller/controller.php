<?php
require("../Smarty/Smarty.class.php");
require_once "../models/koyomi_model.php";
$seireki = $_GET["seireki"];
$wareki = $_GET["wareki"];
$gengo = $_GET["example"];
$month = $_GET["month"];
$day = $_GET["day"];
ini_set('display_errors', "0");

$smarty = new Smarty();
$smarty->template_dir = dirname( dirname(__FILE__)) . '/templates';
$smarty->compile_dir = dirname( dirname(__FILE__)) . '/templates_c';
$seireki_cal = new Seireki_calculation($seireki,$month,$day);
$wareki_cal = new Wareki_calculation($wareki,$gengo,$month,$day);
//エラーが発生した場合のフラグ
$flag = $seireki_cal->flag;
$wareki_flag = $wareki_cal->flag;
//subtitle用ロジック
$subtitle = $seireki_cal->subtitle();
//和暦用サブタイトル用ロジック
$wareki_subtitle = $wareki_cal->wareki_subtitle();
//和暦→西暦用ロジック
$wareki_result = $wareki_cal->two_dot_return();
//西暦用→和暦ロジック
$result = $seireki_cal->result_seireki();
//和暦→西暦用ロジック
$wareki_validation = $wareki_cal->wareki_validation_message();
//西暦用→和暦ロジック
$validation = $seireki_cal->validation_message();



$smarty->assign("flag",$flag);
$smarty->assign("wareki_flag",$wareki_flag);
$smarty->assign('subtitle',$subtitle);
$smarty->assign("validation",$validation);
$smarty->assign('cal_result',$result);
$smarty->assign("wareki_subtitle",$wareki_subtitle);
$smarty->assign("wareki_valida",$wareki_validation);
$smarty->assign("wareki_result",$wareki_result);
$smarty->display('index.tpl');
