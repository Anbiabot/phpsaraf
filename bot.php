<?php
include 'test22.php';
date_default_timezone_set("Asia/Kabul");
    $bot_url = "https://api.telegram.org/bot2074467001:AAEOhogdrwkqke9Z9VF-JKFBLxKcOZTYWwc";
    
    //-------------------------------------
    
    $update = file_get_contents("php://input");
    
    $update_array = json_decode($update, true);
    
    if( isset($update_array["message"]) ) {
        
        $text    = $update_array["message"]["text"];
        $chat_id = $update_array["message"]["chat"]["id"];
        $username = $update_array["message"]["chat"]["first_name"];
    }

    //-------------------------------------
    
    $key1 = '🔄سرای شهزاده';
    $key2 = '🔄مارکت خراسان';
    $key3 = '🔄د افغانستان بانک';
    $key4 = '🔄بازار جهانی';
    $key5 = '🧑‍🔧 درباره ما';
 
    $reply_keyboard = [
                        [$key2 , $key1] ,
                        [$key4 , $key3] ,
                        [$key5] ,
                      ];
                      
    $reply_kb_options = [
                            'keyboard'          => $reply_keyboard ,
                            'resize_keyboard'   => true ,
                            'one_time_keyboard' => false ,
                        ];
    
    
    //-------------------------------------
    $txt = file_get_contents("used.txt");
    //-------------------------------------panel()
    
    switch($text) {
        
        case "/start" : show_menu();  break;
        case "/anbia" : panel();  break;
        case $key1 : shazada();  break;
        case $key2 : khorasan();    break;
        case $key3 : afg();    break;
        case $key4 : golb();    break;
        case $key5 : about(); break;
        case "$text" : show();  break;
        
    }
    
    //-------------------------------------
    
    // نمایش منو
    function show_menu() {
        $ip = $GLOBALS['chat_id'];
        if(!strstr(file_get_contents("user.txt"),"$ip")){
          $file=fopen("user.txt","a");
          fwrite($file,"$ip\n");
          fclose($file);
        }
        $json_kb = json_encode($GLOBALS['reply_kb_options']);
        $reply = "✋سلام👈 ".$GLOBALS['username']."
⭕️ به ربات تلگرام صراف خوش آمدید
🔴 با استفاده از این ربات شما میتوانید نرخ لحظه به لحظه اسعار را در مارکت خراسان، سرای شهزاده، د افغانستان بانک، و بازار جهانی بدست آورید
🔴 برای استفاده از این ربات یکی از کلید های ذیل را انتخاب کنید";
        $url = $GLOBALS['bot_url'] . "/sendMessage";
        $post_params = [ 'chat_id' =>  $GLOBALS['chat_id'] , 'text' => $reply , 'reply_markup' => $json_kb ];
        send_reply($url, $post_params);
    }
    
    //-------------------------------------
    function show() {
        $json_kb = json_encode($GLOBALS['reply_kb_options']);
        $reply = "🔴 برای استفاده از این ربات یکی از کلید های ذیل را انتخاب کنید\n 👇👇👇👇👇👇👇👇";
        $url = $GLOBALS['bot_url'] . "/sendMessage";
        $post_params = [ 'chat_id' =>  $GLOBALS['chat_id'] , 'text' => $reply , 'reply_markup' => $json_kb ];
        send_reply($url, $post_params);
    }
    //-------------------------------------
    
    // ارسال پیام
    function shazada() {
        include 'test22.php';
        $myfile2 = fopen("used.txt", 'a') or die("Unable to open file!");	
        fwrite($myfile2, $GLOBALS['chat_id']."\n");
        fclose($myfile2);
        $reply = "نرخ اسعار در سرای شهزاده 'کابل' \n";
        $reply .= "ساعت: ".date("h:i")." مورخ: ".date("Y/m/d")."\n";
        // $reply .="ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ\n";
        $reply .= "اسعار                 خرید            فروش \n";
        $reply .= "🇺🇸دالر              ".trim(strip_tags($ks[0]))."   ".trim(strip_tags($fs[0])). "\n";
        $reply .= "🇮🇷هزارتومن       ".trim(strip_tags($ks[4]))."      ".trim(strip_tags($fs[4])). "\n";
        $reply .= "🇵🇰هزارکلدار       ".trim(strip_tags($ks[5]))."       ".trim(strip_tags($fs[5])). "\n";
        $reply .= "🇪🇺یورو             ".trim(strip_tags($ks[1]))."   ".trim(strip_tags($fs[1])). "\n";
        $reply .= "🇬🇧پوند             ".trim(strip_tags($ks[2]))."   ".trim(strip_tags($fs[2])). "\n";
        $reply .= "🇮🇳هزار روپیه      ".trim(strip_tags($ks[3]))."    ".trim(strip_tags($fs[3])). "\n";
        $reply .= "🇸🇦ریال سعودی   ".trim(strip_tags($ks[6]))."   ".trim(strip_tags($fs[6])). "\n";
        $reply .= "🇦🇪درهم امارات   ".trim(strip_tags($ks[7]))."   ".trim(strip_tags($fs[7])). "\n";
        $reply .= "🇨🇭فرانک سویس ".trim(strip_tags($ks[8]))."  ".trim(strip_tags($fs[8])). "\n";
        $reply .= "🇦🇺دالراسترالیا     ".trim(strip_tags($ks[9]))."   ".trim(strip_tags($fs[9])). "\n";
        $reply .= "🇨🇦دالر کانادا       ".trim(strip_tags($ks[10]))."   ".trim(strip_tags($fs[10])). "\n";
        $reply .= "🇳🇴کرون ناروی    ".trim(strip_tags($ks[14]))."   ".trim(strip_tags($fs[14])). "\n";
        $reply .= "🇹🇷لیره              ".trim(strip_tags($ks[15]))."      ".trim(strip_tags($fs[15])). "\n";
        $reply .= "🇷🇺روبل روسیه    ".trim(strip_tags($ks[11]))."    ".trim(strip_tags($fs[11])). "\n";
        $reply .= "🇩🇰کرون دانمارک  ".trim(strip_tags($ks[12]))."  ".trim(strip_tags($fs[12])). "\n";
        $reply .= "🇨🇳ین چین         ".trim(strip_tags($ks[16]))."   ".trim(strip_tags($fs[16])). "\n";
        $reply .= "🇰🇼دینار کویت    ".trim(strip_tags($ks[17]))."       ".trim(strip_tags($fs[17])). "\n";
        $reply .= "🇶🇦ریال قطر       ".trim(strip_tags($ks[18]))."   ".trim(strip_tags($fs[18])). "\n";
        $reply .= "🇧🇭دینار بحرین   ".trim(strip_tags($ks[19]))."       ".trim(strip_tags($fs[19])). "\n";
        $reply .= "🇯🇵ین جاپان       ".trim(strip_tags($ks[20]))."       ".trim(strip_tags($fs[20])). "\n";
        $reply .= "🇸🇪کرون سویدن  ".trim(strip_tags($ks[13]))."   ".trim(strip_tags($fs[13])). "\n";

        $url = $GLOBALS['bot_url'] . "/sendMessage";
        $post_params = [ 'chat_id' =>  $GLOBALS['chat_id'] , 'text' => $reply ];
        send_reply($url, $post_params);
    }
    
    //-------------------------------------
    
    // ارسال عکس - تصویر
    function khorasan() {
        include 'herat.php';
        $myfile2 = fopen("used.txt", 'a') or die("Unable to open file!");	
        fwrite($myfile2, $GLOBALS['chat_id']."\n");
        fclose($myfile2);
        $reply = "نرخ اسعار در مارکت خراسان 'هرات' \n";
        $reply .= "ساعت: ".date("h:i")." مورخ: ".date("Y/m/d")."\n";
        $reply .= "اسعار                 خرید            فروش \n";
        $reply .= "🇺🇸دالر              ".$dk."   ".$df. "\n";
        $reply .= "🇮🇷هزارتومن       ".trim(strip_tags($ks[14]))."      ".trim(strip_tags($fs[15])). "\n";
        $reply .= "🇵🇰هزارکلدار       ".trim(strip_tags($ks[17]))."       ".trim(strip_tags($fs[18])). "\n";
        $reply .= "🇪🇺یورو             ".trim(strip_tags($ks[8]))."  ".trim(strip_tags($fs[9])). "\n";
        $reply .= "🇬🇧پوند              ".trim(strip_tags($ks[11]))."        ".trim(strip_tags($fs[12])). "\n";
        $reply .= "🇮🇳هزار روپیه      ".trim(strip_tags($ks[20]))."    ".trim(strip_tags($fs[21])). "\n";
        $reply .= "🇸🇦ریال سعودی   ".trim(strip_tags($ks[26]))."   ".trim(strip_tags($fs[27])). "\n";
        $reply .= "🇦🇪درهم امارات   ".trim(strip_tags($ks[23]))."   ".trim(strip_tags($fs[24])). "\n";
        $reply .= "🇨🇭فرانک سویس ".trim(strip_tags($ks[29]))."       ".trim(strip_tags($fs[30])). "\n";
        $reply .= "🇦🇺دالراسترالیا     ".trim(strip_tags($ks[35]))."   ".trim(strip_tags($fs[35])). "\n";
        $reply .= "🇨🇦دالر کانادا       ".trim(strip_tags($ks[32]))."         ".trim(strip_tags($fs[33])). "\n";
        $reply .= "🇳🇴کرون ناروی    ".trim(strip_tags($ks[38]))."   ".trim(strip_tags($fs[39])). "\n";
        $url = $GLOBALS['bot_url'] . "/sendMessage";
        $post_params = [ 'chat_id' =>  $GLOBALS['chat_id'] , 'text' => $reply ];
        send_reply($url, $post_params);
    }
    
    //-------------------------------------
    
    // ارسال فایل صوتی
    function afg() {
        include 'afg.php';
        $myfile2 = fopen("used.txt", 'a') or die("Unable to open file!");	
        fwrite($myfile2, $GLOBALS['chat_id']."\n");
        fclose($myfile2);
        $reply = "نرخ اسعار د افغانستان بانک \n";
        $reply .= "ساعت: ".date("h:i")." مورخ: ".date("Y/m/d")."\n";
        $reply .= "اسعار                 خرید            فروش \n";
        $reply .= "🇺🇸دالر              ".trim(strip_tags($ks[0]))."   ".trim(strip_tags($fs[0])). "\n";
        $reply .= "🇮🇷هزارتومن       ".trim(strip_tags($ks[4]))."      ".trim(strip_tags($fs[4])). "\n";
        $reply .= "🇵🇰هزارکلدار       ".trim(strip_tags($ks[5]))."       ".trim(strip_tags($fs[5])). "\n";
        $reply .= "🇪🇺یورو             ".trim(strip_tags($ks[1]))."   ".trim(strip_tags($fs[1])). "\n";
        $reply .= "🇬🇧پوند             ".trim(strip_tags($ks[2]))."   ".trim(strip_tags($fs[2])). "\n";
        $reply .= "🇮🇳هزار روپیه      ".trim(strip_tags($ks[3]))."    ".trim(strip_tags($fs[3])). "\n";
        $reply .= "🇸🇦ریال سعودی   ".trim(strip_tags($ks[6]))."   ".trim(strip_tags($fs[6])). "\n";
        $reply .= "🇦🇪درهم امارات   ".trim(strip_tags($ks[7]))."   ".trim(strip_tags($fs[7])). "\n";
        $reply .= "🇨🇭فرانک سویس ".trim(strip_tags($ks[8]))."  ".trim(strip_tags($fs[8])). "\n";
        $reply .= "🇨🇳ین چین         ".trim(strip_tags($ks[9]))."   ".trim(strip_tags($fs[9])). "\n";
        $url = $GLOBALS['bot_url'] . "/sendMessage";
        $post_params = [ 'chat_id' =>  $GLOBALS['chat_id'] , 'text' => $reply ];
        send_reply($url, $post_params);
    }
    
    //-------------------------------------
    
    // ارسال فایل ویدئویی
    function golb() {
        include 'g.php';
        $myfile2 = fopen("used.txt", 'a') or die("Unable to open file!");	
        fwrite($myfile2, $GLOBALS['chat_id']."\n");
        fclose($myfile2);
        $reply = "ساعت: ".date("h:i")." مورخ: ".date("Y/m/d")."\n";
        // $reply .="\n";
        $reply .= "✅💵 یک دالر= ".$dg;
        $url = $GLOBALS['bot_url'] . "/sendMessage";
        $post_params = [ 'chat_id' =>  $GLOBALS['chat_id'] , 'text' => $reply ];
        send_reply($url, $post_params);
    }
    
    //-------------------------------------
    
    // ارسال داکیومنت - فایل
    function about() {
         
        $reply = "
🔴این ربات قیمت لحظه به لحظه اسعار را در مارکت خراسان هرات، سرای شهزاده کابل، د افغانستان بانک و بازار جهانی رابه شما ارسال میکند
🔴 نرخ ها در این ربات هر لحظه تا زمانی که مارکت خراسان و سرای شهزاده باز باشد آپدیت میشود اما نرخ در بازار جهانی به صورت 24 ساعته و هفت روز هفته هر لحظه آپدیت میشود
❤️ جهت حمایت از ما لطفا چینل ما عضو شوید و نظرات و پیشنهادات خود را ارسال نمایید.
آی دی ادمین 👈 @Ahmadwh
چنل ربات 👈 @saraf0093
    ";
        $url = $GLOBALS['bot_url'] . "/sendMessage";
        $post_params = [ 'chat_id' =>  $GLOBALS['chat_id'] , 'text' => $reply ];
        send_reply($url, $post_params);
    }
    
    //-------------------------------------
        // ارسال عکس - تصویر
    function panel() {
        $count = substr_count(file_get_contents('used.txt'), "\n");
        $count1 = substr_count(file_get_contents('user.txt'), "\n");
        $reply = "تعداد استفاده:".$count."\nتعداد کاربر".$count1;
        $url = $GLOBALS['bot_url'] . "/sendMessage";
        $post_params = [ 'chat_id' =>  $GLOBALS['chat_id'] , 'text' => $reply ];
        send_reply($url, $post_params);
    }
    //-------------------------------------
    
    function send_reply($url, $post_params) {
        
        $cu = curl_init();
        curl_setopt($cu, CURLOPT_URL, $url);
        curl_setopt($cu, CURLOPT_POSTFIELDS, $post_params);
        curl_setopt($cu, CURLOPT_RETURNTRANSFER, true);  // get result
        $result = curl_exec($cu);
        curl_close($cu);
        return $result;
    }
    
    //-------------------------------------
?>