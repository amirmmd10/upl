<?php
/*
dev : 13 | instagram: sizdahorg 
Telegram channel: @tmsizdah
youtube: @13learn - @13hack
*/
define('API_KEY','7303078028:AAHSyRXVTn5GBHTu-Qd9DQVy77cNMIFzBT');
$SHA="https://sd4d="; 

date_default_timezone_set('Asia/Tehran'); 
$sizdahorg = "Halmidebootstrap";
$tmsizdah="Uplfirst_bot";
$channel3 = "tmsizdah";
$channel2 = "tmsizdah";
$channel = "tmsizdah";

//----######------
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
function Forward($koja,$key,$pm)
{
    bot('ForwardMessage',[
        'chat_id'=>$koja,
        'from_chat_id'=>$key,
        'message_id'=>$pm
    ]);
}
function sendmessage($chat_id, $text){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>$text,
 'parse_mode'=>"MarkDown"
 ]);
 } 
 function sendphoto($chat_id, $photo, $caption){
 bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>$photo,
 'caption'=>$caption,
 ]);
 }
 function senddocument($chat_id, $document, $caption){
 bot('senddocument',[
 'chat_id'=>$chat_id,
 'document'=>$document,
 'caption'=>$caption
 ]);
 }
$update = json_decode(file_get_contents('php://input'));
$message = $update->message; 
$chat_id = $message->chat->id;
$name = $message->from->first_name;
$last = $message->from->last_name;
$username = $message->from->username;
$from_id = $message->from->id;
$text = $message->text;
$chatid = $message->chat->id;
$message_id = $update->callback_query->message->message_id;
$msgid = $update->message->message_id;
$step = file_get_contents('admin.txt');
$data = file_get_contents("data/$from_id/test.txt");
$users = json_decode(file_get_contents("users.json"),true);
$logotxtes = $users[$from_id]["logotexts"];
//----###t.me/tmsizdah###------

    
if(strstr($text, "/start")){
 if (!file_exists("data/$from_id/test.txt")) {
        mkdir("data/$from_id");
        file_put_contents("data/$from_id/inv.txt","1");
        file_put_contents("data/$from_id/test.txt","1");
              
        $myfile2 = fopen("users.txt", "a") or die("Unable to open file!");
        fwrite($myfile2, "$from_id\n");
        fclose($myfile2);

          
   	
}
}
 
if($text !=""){

 if (file_exists("data/$from_id/report.txt")) {
     bot('sendMessage',[
                    'chat_id'=>$from_id,
                              'text' =>"شما از ربات مسدود شده اید.",
                                 'parse_mode'=>"HTML",
                              ]);
}else{
$je=json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@$channel2&user_id=$from_id")); 
$je1=json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@$channel&user_id=$from_id")); 
$je2=json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@$channel3&user_id=$from_id")); 


$kind=$je->result->status ;
$kind1=$je1->result->status ;
$kind2=$je2->result->status ;
if($kind== "member" and $kind1== "member" and $kind2== "member"){
    
    if(strpos($text,'/start') !== false) {
 $id = str_replace("/start ","",$text);
if($id == "/start"){
    
     bot('sendMessage',[
                    'chat_id'=>$from_id,
                              'text' =>"به ربات فالور➕ خوش آمدید.
با این ربات شما میتوانید بدون نیاز به پسورد پیج,فقط با داشتن آیدی پیج فالور های اون پیج رو افزایش بدین ✅
⭕️برای شروع یکی از گزینه هارا انتخاب کنید",
                                 'parse_mode'=>"HTML",
                                 
                                  'reply_markup'=>json_encode([
           'keyboard'=>[
    [['text'=>"🟢سفارش فالور"]],
    [['text'=>"📥دریافت بنر📥"],['text'=>"📯تعداد زیرمجموعه ها📯"]],
	[['text'=>"📚راهنما📚"]],
	],
		"resize_keyboard"=>true,
	 ])
                              ]);
                              

    
}else{
if($id=="$from_id"){
 bot('sendMessage',[
                    'chat_id'=>$from_id,
                              'text' =>"با لینک خودت میخای خودتون دعوت کنی 😐",
                                 'parse_mode'=>"HTML",
                                 
                                  'reply_markup'=>json_encode([
           'keyboard'=>[
    [['text'=>"🟢سفارش فالور"]],
    [['text'=>"📥دریافت بنر📥"],['text'=>"📯تعداد زیرمجموعه ها📯"]],
	[['text'=>"📚راهنما📚"]]
	],
		"resize_keyboard"=>true,
	 ])
                              ]);
 }else{
//==========



if (file_exists("data/$from_id/whoinv.txt")) {
 bot('sendMessage',[
                    'chat_id'=>$from_id,
                              'text' =>"✖️شما قبلا در ربات عضو بودید✖️",
                                 'parse_mode'=>"HTML",
                              ]);
}else{
file_put_contents("data/$from_id/whoinv.txt","");

$bgbfd=file_get_contents("data/$id/inv.txt");
$endoods= $bgbfd+1;
file_put_contents("data/$id/inv.txt","$endoods");
 bot('sendMessage',[
                    'chat_id'=>$id,
                              'text' =>"🎉تبریک🎉
🎊یک نفر با لینک شما وارد ربات شد🎊",
                                 'parse_mode'=>"HTML",
                              ]);
                              
                              bot('sendMessage',[
                    'chat_id'=>$from_id,
                              'text' =>"به ربات فالور➕ خوش آمدید.
با این ربات شما میتوانید بدون نیاز به پسورد پیج,فقط با داشتن آیدی پیج فالور های اون پیج رو افزایش بدین ✅
⭕️برای شروع یکی از گزینه هارا انتخاب کنید",
                                 'parse_mode'=>"HTML",
                                 
                                  'reply_markup'=>json_encode([
           'keyboard'=>[
    [['text'=>"🟢سفارش فالور"]],
    [['text'=>"📥دریافت بنر📥"],['text'=>"📯تعداد زیرمجموعه ها📯"]],
	[['text'=>"📚راهنما📚"]]
	],
		"resize_keyboard"=>true,
	 ])
                              ]);
}




}
}


}


//=========  
if($text == "📥دریافت بنر📥"){

  bot('sendphoto', [
                'chat_id' => $from_id,
                'photo' =>new CURLFILE('pic.png'),
                'caption' => "♥️افزایش فالور های اینستاگرام بصورت فالور واقعی

💙کاملا رایگان 
🧡بدون نیاز به پسودر پیج 
💚سرعت بالا در تکمیل سفارش ها 

💟جهت استفاده از این ربات فوق العاده روی لینک زیر بزنید👇
http://t.me/$tmsizdah?start=$from_id",
            ]);
                              
 }

if($text == "🟢سفارش فالور"){
$bgbfdnn=file_get_contents("data/$from_id/inv.txt");
if($bgbfdnn > 10){


file_put_contents("data/$from_id/stat.txt","addfollower");
 bot('sendMessage',[
                    'chat_id'=>$from_id,
                              'text' =>"❣️آیدی پیج اینستاگرام را همراه با @ وارد کنید :",
                                 'parse_mode'=>"HTML",
                                 
                                  'reply_markup'=>json_encode([
           'keyboard'=>[
    [['text'=>"💢بازگشت💢"]],
	],
		"resize_keyboard"=>true,
	 ])
                              ]);

}else{
bot('sendMessage',[
                    'chat_id'=>$from_id,
                              'text' =>"❌تعداد زیرمجموعه های شما برای ثبت سفارش کافی نمیباشد
〽️از طریق دکمه دریافت بنر , بنر خود را دریافت کنید و زیرمجموعه گیری کنید",
                                 'parse_mode'=>"HTML",
                                 
                                  'reply_markup'=>json_encode([
           'keyboard'=>[
    [['text'=>"🟢سفارش فالور"]],
    [['text'=>"📥دریافت بنر📥"],['text'=>"📯تعداد زیرمجموعه ها📯"]],
	[['text'=>"📚راهنما📚"]],
	],
		"resize_keyboard"=>true,
	 ])
                              ]);
}


}


$pposs=file_get_contents("data/$from_id/stat.txt");

if($text !="" and $pposs== "addfollower" ){
if($text == "💢بازگشت💢" Or $text == "🟢سفارش فالور"){
}else{
if(strstr($text,"@")){
file_put_contents("data/$from_id/stat.txt","");
$bgbbbfd=file_get_contents("data/$from_id/inv.txt");

$eccnns=$bgbbbfd-10;
file_put_contents("data/$from_id/inv.txt","$eccnns");

 bot('sendMessage',[
                    'chat_id'=>$from_id,
                              'text' =>"⏳در حال بررسی ...⏳",
                                 'parse_mode'=>"HTML",
                              ]);


$badadsime=explode("@","$text");
//////
  


file_get_contents("https://Y.com/S7/tu.php?id=$badadsime");
$bgbbbfd7=file_get_contents("data/$from_id/inv.txt");
 bot('sendMessage',[
                    'chat_id'=>$from_id,
                              'text' =>"✅سفارش شما با موفقیت ثبت شد و فالور ها در حال ارسال میباشند✅
❗️تا زمانی که فالور ها کامل واریز نشده دوباره برای این پیج سفارشی ثبت نکنید",
                                 'parse_mode'=>"HTML",
                                 
                                  'reply_markup'=>json_encode([
           'keyboard'=>[
    [['text'=>"🟢سفارش فالور"]],
    [['text'=>"📥دریافت بنر📥"],['text'=>"📯تعداد زیرمجموعه ها📯"]],
	[['text'=>"⚜️درباره ما⚜️"],['text'=>"📚راهنما📚"]],
	[['text'=>"❤️پشتیبانی❤️"]],
	],
		"resize_keyboard"=>true,
	 ])
                              ]);



}else{
 bot('sendMessage',[
                    'chat_id'=>$from_id,
                              'text' =>"⚠️لطفا آیدی پیج را همراه با @ وارد کنید:",
                                 'parse_mode'=>"HTML",
                              ]);

}

}

}else{


}
//=======================
if($text !="" && $pposs== "addfollower" &&$text == "💢بازگشت💢"){
                    file_put_contents("data/$from_id/stat.txt","");
                                 bot('sendMessage',[
                    'chat_id'=>$from_id,
                              'text' =>"🔅منوی اصلی🔅",
                                 'parse_mode'=>"HTML",
                                 
                                  'reply_markup'=>json_encode([
           'keyboard'=>[
    [['text'=>"🟢سفارش فالور"]],
    [['text'=>"📥دریافت بنر📥"],['text'=>"📯تعداد زیرمجموعه ها📯"]],
	[['text'=>"📚راهنما📚"]]
	],
		"resize_keyboard"=>true,
	 ])
                              ]);


}

if($text == "📚راهنما📚"){

                                 bot('sendMessage',[
                    'chat_id'=>$from_id,
                              'text' =>"♨️ربات ➕فالور➕ برای ارایه خدمات فالور بصورت رایگان ایجاد شده است.
🔰در این ربات شما با دعوت دوستاتون به ربات میتوانید تعداد زیرمجموعه های خود را افزایش بدید و به ازای 10 زیرمجموعه 70 فالور نیمه واقعی بگیرید.",
                                 'parse_mode'=>"HTML",
                                 
                                  'reply_markup'=>json_encode([
           'keyboard'=>[
    [['text'=>"🟢سفارش فالور"]],
    [['text'=>"📥دریافت بنر📥"],['text'=>"📯تعداد زیرمجموعه ها📯"]],
	[['text'=>"📚راهنما📚"]],
	],
		"resize_keyboard"=>true,
	 ])
                              ]);
}

if($text == "📯تعداد زیرمجموعه ها📯"){
$aaadads=file_get_contents("data/$from_id/inv.txt");
$pwpw=$aaadads *50;
                                 bot('sendMessage',[
                    'chat_id'=>$from_id,
                              'text' =>"💝شما تا کنون $aaadads نفر به ربات دعوت کردید💝
❣️به ازای هر10 زیرمجموعه میتوانید 70 فالور نیمه واقعی بگیرید❣️
",
                                 'parse_mode'=>"HTML",
                                 
                                  'reply_markup'=>json_encode([
           'keyboard'=>[
    [['text'=>"🟢سفارش فالور"]],
    [['text'=>"📥دریافت بنر📥"],['text'=>"📯تعداد زیرمجموعه ها📯"]],
	[['text'=>"📚راهنما📚"]],
	],
		"resize_keyboard"=>true,
	 ])
                              ]);
}

}else{
    
    if (preg_match('/[A-Za-z].*[0-9]|[0-9].*[A-Za-z]/', $text))
{
 
$nhnr= str_replace(" ","=",$text);
$bfbfb= str_replace("/","",$nhnr);
bot('sendMessage',[
                    'chat_id'=>$from_id,
                              'text' =>"⚠️برای حمایت از ما و مطلع شدن از آخرین بروز رسانی ها و اخبار درمورد ربات باید در چنل های زیر عضو شوید سپس به ربات برگشته و 
http://t.me/$tmsizdah?$bfbfb
ارسال نمایید

",
                                        'parse_mode'=>"HTML",
				    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
	   [
	  ['text'=> "♻️کانال اصلی♻️" ,'url'=>"https://t.me/$channel"]],
	  [['text'=> "📍عضویت در کانال" ,'url'=>"https://t.me/$channel2"],['text'=> "📍عضویت در کانال" ,'url'=>"https://t.me/$channel3"]
	  ],

   ]


])


                              ]);

}else{

bot('sendMessage',[
                    'chat_id'=>$from_id,
                              'text' =>"⚠️برای حمایت از ما و مطلع شدن از آخرین بروز رسانی ها و اخبار درمورد ربات باید در چنل های زیر عضو شوید سپس به ربات برگشته و /start بزنید
",
                                        'parse_mode'=>"HTML",
				    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
	   [
	  ['text'=> "♻️کانال اصلی♻️" ,'url'=>"https://t.me/$channel"]],
	  [['text'=> "📍عضویت در کانال" ,'url'=>"https://t.me/$channel2"],['text'=> "📍عضویت در کانال" ,'url'=>"https://t.me/$channel3"]
	  ],

   ]


])


                              ]);
}
    
    
}

}


}

/*
dev : 13 | instagram: sizdahorg 
Telegram channel: @tmsizdah
youtube: @13learn - @13hack
*/

?>