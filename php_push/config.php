<?php
// function init_Config($value)
{

/*
log switch : 是否將送入 apns / gcm 的 log 顯示在 web 上
*/
$is_show_log = "yes";

/*測試設定
1. 是否開啟測試   :yes or no
2. 測試目標類別   :"ios"、"android"
3. 測試 token
4. 測試 推播內容
*/
$isTestOpen = "yes"; // if yes, start test, and setting follow below
$push_test_category = "ios"; // "ios", "android"
$push_test_token = "1a6869c947894a9df0a0974bf149edd4ea841fd24544ccc7d00ed7c928cb4ead";//寫入 ios or android 的 token
$push_test_PushSubject = "測試說 hi";
if ($isTestOpen == 'yes') {
    echo "**測試開啟，正式上版前，請關閉**<br><br>";
    echo "測試目標 ： " . $push_test_category . "<br><br>";
}

/*api 參數取得
1. 目標類別 : "ios"、"android"
2. 目標token
3. 目標推播內容
*/
$category       = ($isTestOpen=="yes")?  $push_test_category : $_GET['category'];
$DeviceToken    = ($isTestOpen=="yes")?  $push_test_token : $_GET['DeviceToken'];
$PushSubject    = ($isTestOpen=="yes")?  $push_test_PushSubject : $_GET['PushSubject'];

/*ios 參數設定
1. 推播模式 : dev or pro
2. 金鑰密碼
3. 金鑰路徑名稱
4. token
5. 推播內容參數設定，主要跟 api 取得參數相關
*/
$apns_mode                  = "dev"; // 可更動
$apns_phasePass             = "test"; // 可更動
$apns_dev_pem_path          = "apns/apns_dev.pem"; // 可更動
$apns_pro_pem_path          = "apns/apns_pro.pem"; // 可更動
$apns_pem_path              = ($apns_mode=="dev")? $apns_dev_pem_path : $apns_pro_pem_path;
$apns_token                 = $DeviceToken;
$apns_message['aps']        = array(
                                'alert' => $PushSubject,
                                'sound' => 'default',
                                'badge' => '1',
                                'content-available' => '1',
                            ); // 可更動

/*android 參數 設定
1. gcm key
2. 推播內容參數設定，主要跟 api 取得參數相關
*/
$gcm_API_KEY                = "AIzaSyCPTtNTYyzprq1a-lD4syP3-RzDa7NENKU"; // 可更動
$gcm_token                  = $DeviceToken;
$gcm_message                = array(
                                "message" => $PushSubject
                            ); // 可更動

}
?>