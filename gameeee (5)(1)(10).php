<?php
ob_start();
$API_KEY = '1929881890:AAENBLcqBYl_qg3k8EErYMqwY8T5EZ454wY';
define('API_KEY',$API_KEY);
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
            function bot($method,$datas=[]){
    $rembo = http_build_query($datas);
        $url = "https://api.telegram.org/bot".API_KEY."/".$method."?$rembo";
        $h4ck3riraq = file_get_contents($url);
        return json_decode($h4ck3riraq);
}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$message = $update->message;
$admin = 1197106808; // ايديك
$list = file_get_contents("block.txt");
$ex = explode("\n",$list);
$username = $message->from->username;
$message_id2 = $update->callback_query->message->message_id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$Name = $update->callback_query->from->first_name;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$fn = $message->from->first_name;
$user_id = $message->from->id;
$ch = "Z6ZZZZ" ; //معرف قناتك دون @
#---------@ABoTaiM--------#
$T4TTTT = 1197106808; //ايديك
$SAIED = file_get_contents("SAIED.txt");
$SAIED0 = file_get_contents("SAIED0.txt"); 
$SAIED1= file_get_contents("SAIED1.txt");
$SAIED5 = file_get_contents("SAIED2.txt");
$SAIED6 = file_get_contents("SAIED3.txt");
$SAIED20 = json_decode(file_get_contents('php://input'));
$SAIED18 = $update->message;
$SAIED13 = $SAIED18->chat->id;
$SAIED17 = $SAIED18->text;
$SAIED19 = $SAIED20->callback_query->data;
$SAIED12 = $SAIED20->callback_query->message->chat->id;
$SAIED14 =  $SAIED20->callback_query->message->message_id;
$SAIED15 = $SAIED18->from->first_name;
$SAIED16 = $SAIED18->from->username;
$SAIED11 = $SAIED18->from->id;
$SAIED2 = explode("\n",file_get_contents("SAIED4.txt"));
$SAIED3 = count($SAIED2)-1;
if ($SAIED18 && !in_array($SAIED11, $SAIED2)) {
    file_put_contents("SAIED4.txt", $SAIED11."\n",FILE_APPEND);
  }
  if(in_array($from_id,$ex)){
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"• عزيزي انت محظور من البوت",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);    
}
$from_id = $message->from->id;
mkdir("eqab");
if(isset($message)){
$al = file_get_contents('SAIED4.txt');
$alo = explode("\n",$al);
if(!in_array($from_id,$alo)){
$eqab2 = fopen("SAIED4.txt", "a") or die("Unable to open file!");
fwrite($eqab2, "$from_id\n");
fclose($eqab2);}}
$first_name = $message->from->first_name;
$username = $message->from->username;
$from_id = $message->from->id;
$marcus = explode("\n",file_get_contents("SAIED4.txt"));
$hassan = count($marcus)-1;
if ($message && !in_array($from_id, $marcus)) {
    file_put_contents("SAIED4.txt", $from_id."\n",FILE_APPEND);
  }
$SAIED9 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$SAIED0&user_id=".$SAIED11);
$SAIED10 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$SAIED1&user_id=".$SAIED11);
if($SAIED18 && (strpos($SAIED9,'"status":"left"') or strpos($SAIED9,'"Bad Request: USER_ID_INVALID"') or strpos($SAIED9,'"status":"kicked"') or strpos($SAIED10,'"status":"left"') or strpos($SAIED10,'"Bad Request: USER_ID_INVALID"') or strpos($SAIED10,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$SAIED13,
'parse_mode'=>"Markdown",
'text'=>'- ▫️ عذراً عزيزي  ، 🔰
▪️ يجب عليك الإشتراك في قناة المطور أولاً ⚜️؛

- اشترك ثم ارسل { /start }📛!

'.$SAIED0.'
'.$SAIED1,
]);return false;}
if($SAIED17 == "/admin" and $SAIED11 == $T4TTTT){
bot("sendmessage",[
"chat_id"=>$SAIED13,
'parse_mode'=>"Markdown",
'text' => "• مرحباً بك  [$fn](tg://user?id=$chat_id)
- هذه لوحة التحكم الخاصة بك ،
- يمكنك التحكم بجميع اوامر البوت من هنا ،", 
'reply_to_message_id'=>$message->message_id,
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الاحصائيات' ,'callback_data'=>"SAIED7"]],
[['text'=>'اذاعه توجيه' ,'callback_data'=>"SAIED5"],['text'=>'اذاعه' ,'callback_data'=>"SAIED6"]],
[['text'=>'الاشتراك الاجباري' ,'callback_data'=>"SAIED33"],["text"=>"الحظر","callback_data"=>"bn24"]], 
[['text'=>'تفعيل التنبيه','callback_data'=>"SAIED9"],['text'=>'تعطيل التنبيه' ,'callback_data'=>"SAIED10"]],
[['text'=>'تفعيل التوجيه' ,'callback_data'=>"SAIED11"],['text'=>'تعطيل التوجيه' ,'callback_data'=>"SAIED12"]],
[["text"=>"عدد المشتركين : $SAIED3","callback_data"=>"memmn"]],   
   ] 
   ])
]);
}
if($SAIED19 == "SAIED" ){
bot('EditMessageText',[
'chat_id'=>$SAIED12,
'message_id'=>$SAIED14,
'text'=> "• مرحباً بك مجددا 
- هذه لوحة التحكم الخاصة بك ،
- يمكنك التحكم بجميع اوامر البوت من هنا ،",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'الاحصائيات' ,'callback_data'=>"SAIED7"]],
[['text'=>'اذاعه توجيه' ,'callback_data'=>"SAIED5"],['text'=>'اذاعه' ,'callback_data'=>"SAIED6"]],
[['text'=>'الاشتراك الاجباري' ,'callback_data'=>"SAIED33"],["text"=>"الحظر","callback_data"=>"bn24"]],
[['text'=>'تفعيل التنبيه','callback_data'=>"SAIED9"],['text'=>'تعطيل التنبيه' ,'callback_data'=>"SAIED10"]],
[['text'=>'تفعيل التوجيه' ,'callback_data'=>"SAIED11"],['text'=>'تعطيل التوجيه' ,'callback_data'=>"SAIED12"]],
[["text"=>"عدد المشتركين : $SAIED3","callback_data"=>"memmn"]],
   ] 
   ])
]);
unlink("SAIED.txt");
}
$bnnnn = file_get_contents("block.txt");
$band = explode("\n",file_get_contents("block.txt"));
$bnn = count($band)-1;
if($data == "bn24" and $admin){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"• مرحبا بك في قسم الحظر 💫

- يمكنك حظر عضو والغاء حظر عضو بالايدي 
- اختر ماتريده من الازرار بلاسفل
——————————",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"حظر عضو","callback_data"=>"bn"],["text"=>"الغاء حظر عضو","callback_data"=>"unbn"]],
[["text"=>"المحظورين","callback_data"=>"bnnnn"]],
[["text"=>"عدد المحظورين : $bnn","callback_data"=>"bnn"]],
[["text"=>"العوده","callback_data"=>"SAIED"]],
]])
]); 
unlink("SAIED.txt");  
}
if($data == "bn" and $admin){
file_put_contents("block.txt","bn");
 bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"• حسنأ الان قم برسال ايدي العضو
• ليتم حظره من البوت",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"العوده","callback_data"=>"SAIED"]],
]])
]);
}
if($bot == "bn" and $text != "/start" and $admin){
$myfile2 = fopen("block.txt", "a") or die("Unable to open file!");	
fwrite($myfile2, "$text\n");
fclose($myfile2);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"• تم حظر العضو بنجاح
• الان لم يتمكن من استخدام البوت",
]);
bot('sendmessage',[
'chat_id'=>$text,
'text'=>"• عذرا عزيزي تم حظرك من البوت
• من قبل المطور الاساسي",
]);
unlink("SAIED.txt");
}
$listt = file_get_contents("block.txt");
if($data == "unbn" and $admin){
file_put_contents("block.txt","unbn");
 bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"• حسنأ الان قم برسال ايدي العضو
• ليتم فك الحظر والقيود عنه",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"العوده","callback_data"=>"SAIED"]],
]])
]);
} 
if($bot == "unbn" and $text != "/start" and $admin){
$newlist = str_replace($text,"",$listt);
file_put_contents("block.txt",$newlist);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"• تم الغاء حظر العضو بنجاح
• الان هو قادر على استخدام البوت",
]);
bot('sendmessage',[
'chat_id'=>$text,
'text'=>"• عزيزي تم الغاء الحظر عنك
• يمكنك استخدام البوت الان",
]);
unlink("SAIED.txt");
}
$band = explode("\n",file_get_contents("block.txt"));
$bnn = count($band)-1;
if($data == "bnnnn" and $admin){
file_get_contents("block.txt");
 bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"• قائمة المحظوريين في المجموعه 
━━━━━━━━
$bnnnn",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"عدد المحظورين : $bnn","callback_data"=>"bnn"]],
[["text"=>"مسح المحظورين","callback_data"=>"bnnnnn"]],
[["text"=>"العوده","callback_data"=>"SAIED"]],
]])
]);   
unlink("SAIED.txt");
}
if($data == "bnnnnn" and $admin){
file_put_contents("block.txt");
 bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"• تم مسح جميع المحظورين
• عددهم [ $bnn ] ",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"العوده","callback_data"=>"SAIED"]],
]])
]);   
unlink("block.txt");
}
if($SAIED19 == "SAIED2"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- حسناً ، الآن قم بإرسال معرف قناتك ليتم وضعه في خدمة الإشتراك الإجباري للقناة الثانية ، 📢
#مثال :
▪️@Z6ZZZZ',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'العوده' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED.txt","SAIED1");
}
if($SAIED17 and $SAIED == "SAIED1" and $SAIED11 == $T4TTTT){
bot("sendmessage",[
"chat_id"=>$SAIED13,
"text"=>'- لقد تم وضع القناة بنجاح ، 📣
- قم برفع البوت أدمن داخل القناة ، 🗞',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'العوده' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED1.txt","$SAIED17");
unlink("SAIED.txt");
}
if($SAIED19 == "delete22"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- حسناً هل أنت متأكد من أنك تريد حذف القناة من الإشتراك الإجباري ، 🚫',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'• لا ، ❎', 'callback_data'=>'SAIED'],
['text'=>'• نعم ، ✅','callback_data'=>'SAIED3'],
]    
]])
]);    
}
if($SAIED19 == "SAIED3"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- لقد تم حذف القناة الثانية من الإشتراك الإجباري بنجاح ، 📮',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'العوده' ,'callback_data'=>"SAIED"]],
]])
]);
unlink("SAIED.txt");
unlink("SAIED1.txt");
}
if($SAIED19 == "SAIED4"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>"- هذه قائمة القنوات الأشتراك الاجباري ، 🔰
- القناة الاولى ،  $SAIED1
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'العوده' ,'callback_data'=>"SAIED"]],
]])
]);
unlink("SAIED.txt");
}
if($SAIED19 == "SAIED5"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>"~ أرسل رسالتك وسيتم توجيهها لـ [ $SAIED3 ] مشترك ، 🐙 ",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'العوده' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED.txt","SAIED2");
}
if($SAIED18 and $SAIED == "SAIED2" and $SAIED11 == $T4TTTT){
bot("sendmessage",[
"chat_id"=>$SAIED13,
"text"=>'- تم التوجيه بنجاح 🦕',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'العوده' ,'callback_data'=>"SAIED"]],
]])
]);
for($i=0;$i<count($SAIED2); $i++){
bot('forwardMessage', [
'chat_id'=>$SAIED2[$i],
'from_chat_id'=>$SAIED11,
'message_id'=>$SAIED18->message_id
]);
unlink("SAIED.txt");
}
}
if($SAIED19 == "SAIED6"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>"~ أرسل رسالتك وسيتم إرسالها لـ [ $SAIED3 ] مشترك ، 🐠",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'العوده' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED.txt","SAIED3");
}
if($SAIED17 and $SAIED == "SAIED3" and $SAIED11 == $T4TTTT){
bot("sendmessage",[
"chat_id"=>$SAIED13,
"text"=>'- تم النشر بنجاح 🐋',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'العوده' ,'callback_data'=>"SAIED"]],
]])
]);
for($i=0;$i<count($SAIED2); $i++){
bot('sendMessage', [
'chat_id'=>$SAIED2[$i],
'text'=>$SAIED17
]);
unlink("SAIED.txt");
}
}
if($SAIED19 == "SAIED7"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>"• اهلا بك في قسم الاحصائيات",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[["text"=>"عدد المشتركين : $SAIED3","callback_data"=>"memmn"]],
[['text'=>'العوده' ,'callback_data'=>"SAIED"]],
]])
]);
unlink("SAIED.txt");
}
if($SAIED19 == "SAIED9"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- تم تفعيل دخول المشتركين ، 🐎',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'العوده' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED2.txt","SAIED");
}
if($SAIED17 == "/start" and $SAIED5 == "SAIED" and $SAIED11 != $T4TTTT){
bot("sendmessage",[
"chat_id"=>$T4TTTT,
"text"=>"- عضو جديد قام بالدخول الى البوت ، 🛡
- الاسم ، [$SAIED15](tg://user?id=$chat_id) ، 🦕
- المعرف ، [@$SAIED16](tg://user?id=$chat_id) ، 🐢
- الايدي ، [$SAIED11](tg://user?id=$chat_id) ، 🐝 
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
~  عدد المشتركين ، { $SAIED3 } ، 🦑 ",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
]);
}
if($SAIED19 == "SAIED10"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- تم تعطيل دخول المشتركين ، 🦍 ',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'العوده' ,'callback_data'=>"SAIED"]],
]])
]);
unlink("SAIED.txt");
unlink("SAIED2.txt");
}
if($SAIED19 == "SAIED11"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- تم تفعيل توجيه الرسائل ، 🦇',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'العوده' ,'callback_data'=>"SAIED"]],
]])
]);
file_put_contents("SAIED3.txt","SAIED");
}
if($SAIED18 and $SAIED6 == "SAIED" and $SAIED11 != $T4TTTT){
bot('forwardMessage', [
'chat_id'=>$T4TTTT,
'from_chat_id'=>$SAIED11,
'message_id'=>$SAIED18->message_id
]);
}
if($SAIED18 and $SAIED6 == "SAIED" and $SAIED11 == $T4TTTT){
bot('sendMessage',[
'chat_id'=>$SAIED18->reply_to_message->forward_from->id,
    'text'=>$SAIED17,
    ]);
}
if($SAIED19 == "SAIED12"){
bot('EditMessageText',[
    'chat_id'=>$SAIED12,
    'message_id'=>$SAIED14,
'text'=>'- تم تعطيل توجيه الرسائل ، 🐌',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'العوده' ,'callback_data'=>"SAIED"]],
]])
]);
unlink("SAIED.txt");
unlink("SAIED3.txt");
}

if($text ==  '/start' ){
bot( sendMessage ,[
chat_id =>$chat_id,
'parse_mode'=>"Markdown",
text => "- مرحبـا بك  [$fn](tg://user?id=$chat_id)
- في بوت الالعاب الجديد 🎓
- البوت يحتوي ع مجموعه من الالعاب الخاصه ب تلقرام 🚸
- لـ استخدام البوت يجب عليك 🗳
- اختيار نوع اللعبه . 

• اضغط على زر الالعاب لـ رؤية قسم الالعاب 👇🏻" ,
'reply_to_message_id' =>$message->message_id,
'parse_mode'=>"MarkDown",'disable_web_page_preview'=>true,
reply_markup =>json_encode([
inline_keyboard =>[
[['text'=> 'الالعاب' ,'callback_data' => 'gamee']], 
[['text'=> 'اضف البوت لقروبك' ,'url' => 'https://telegram.me/I6JBOT?startgroup=start']],
[[ 'text' => '𝐒𝐨𝐮𝐫𝐜𝐞','callback_data' => 'Devbot1' ]],
]])]);}

  
if($data=="gamee"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"
- 🖇 أهلاً بك عزيزي 
- 📝 اختر احد الالعاب من الاسفل 👇👇
- 🥳 يمكنك اللعب معي ف الخاص او 
- ف المجموعات ايضا .
",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>  "لعبة فلابي بيرد 🐥"  ,'url'=>'https://t.me/awesomebot?game=FlappyBird'],['text'=>"تحداني فالرياضيات 🔢",'url'=>'https://t.me/gamebot?game=MathBattle']],
[['text'=>"تحداني في ❌⭕️",'url'=>'t.me/Xo_motazbot?start3836619'],['text'=>"سباق الدراجات 🏍",'url'=>'https://t.me/gamee?game=MotoFX']],
[['text'=>"سباق سيارات 🏎",'url'=>'https://t.me/gamee?game=F1Racer'],['text'=>"متشابه 👾",'url'=>'https://t.me/gamee?game=DiamondRows']],
[['text'=>"كرة قدم ⚽",'url'=>'https://t.me/gamee?game=FootballStar']],
[['text'=>"دومنا🥇",'url'=>'https://vipgames.com/play/?affiliateId=wpDom/#/games/domino/lobby'],['text'=>"❕ليدو",'url'=>'https://vipgames.com/play/?affiliateId=wpVG#/games/ludo/lobby']],
[['text'=>"ورق🤹‍♂",'url'=>'https://t.me/gamee?game=Hexonix'],['text'=>"Hexonix❌",'url'=>'https://t.me/gamee?game=Hexonix']],
[['text'=>"MotoFx🏍️",'url'=>'https://t.me/gamee?game=MotoFx']],
[['text'=>"لعبة 2048 🎰",'url'=>'https://t.me/awesomebot?game=g2048'],['text'=>"Squares🏁",'url'=>'https://t.me/gamee?game=Squares']],
[['text'=>"Atomic 1▶️",'url'=>'https://t.me/gamee?game=AtomicDrop1'],['text'=>"Corsairs",'url'=>'https://t.me/gamebot?game=Corsairs']],
[['text'=>"LumberJack",'url'=>'https://t.me/gamebot?game=LumberJack']],
[['text'=>"LittlePlane",'url'=>'https://t.me/gamee?game=LittlePlane'],['text'=>"RollerDisco",'url'=>'https://t.me/gamee?game=RollerDisco']],
[['text'=>"🦖 Dragon Game 🦖",'url'=>'https://t.me/T4TTTTBOT?game=dragon'],['text'=>"🐍 3D Snake Game 🐍",'url'=>'https://t.me/T4TTTTBOT?game=snake']],
[['text'=>"🔵 Color Game 🔴",'url'=>'https://t.me/T4TTTTBOT?game=color']],
[['text'=>"🚀 Rocket Game 🚀",'url'=>'https://t.me/T4TTTTBOT?game=rocket'],['text'=>"🏹 Arrow Game 🏹",'url'=>'https://t.me/T4TTTTBOT?game=arrow']],
[['text'=>"♟ Chess Game ♟",'url'=>'https://t.me/T4TTTTBOT?game=chess']],
[['text'=>"العوده",'callback_data'=>"home"]],
]])]);}

if($text == "العاب"){ 
bot('sendmessage',[
'chat_id'=>$chat_id,
'parse_mode'=>"Markdown",
'text'=>"
- 🖇 أهلاً بك عزيزي [$Name](tg://user?id=$chat_id2)
- 📝 اختر احد الالعاب من الاسفل 👇👇
- 🥳 يمكنك اللعب معي ف الخاص او 
- ف المجموعات ايضا .
",
'reply_to_message_id' =>$message->message_id,
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>  "لعبة فلابي بيرد 🐥"  ,'url'=>'https://t.me/awesomebot?game=FlappyBird'],['text'=>"تحداني فالرياضيات 🔢",'url'=>'https://t.me/gamebot?game=MathBattle']],
[['text'=>"تحداني في ❌⭕️",'url'=>'t.me/Xo_motazbot?start3836619'],['text'=>"سباق الدراجات 🏍",'url'=>'https://t.me/gamee?game=MotoFX']],
[['text'=>"سباق سيارات 🏎",'url'=>'https://t.me/gamee?game=F1Racer'],['text'=>"متشابه 👾",'url'=>'https://t.me/gamee?game=DiamondRows']],
[['text'=>"كرة قدم ⚽",'url'=>'https://t.me/gamee?game=FootballStar']],
[['text'=>"دومنا🥇",'url'=>'https://vipgames.com/play/?affiliateId=wpDom/#/games/domino/lobby'],['text'=>"❕ليدو",'url'=>'https://vipgames.com/play/?affiliateId=wpVG#/games/ludo/lobby']],
[['text'=>"ورق🤹‍♂",'url'=>'https://t.me/gamee?game=Hexonix'],['text'=>"Hexonix❌",'url'=>'https://t.me/gamee?game=Hexonix']],
[['text'=>"MotoFx🏍️",'url'=>'https://t.me/gamee?game=MotoFx']],
[['text'=>"لعبة 2048 🎰",'url'=>'https://t.me/awesomebot?game=g2048'],['text'=>"Squares🏁",'url'=>'https://t.me/gamee?game=Squares']],
[['text'=>"Atomic 1▶️",'url'=>'https://t.me/gamee?game=AtomicDrop1'],['text'=>"Corsairs",'url'=>'https://t.me/gamebot?game=Corsairs']],
[['text'=>"LumberJack",'url'=>'https://t.me/gamebot?game=LumberJack']],
[['text'=>"LittlePlane",'url'=>'https://t.me/gamee?game=LittlePlane'],['text'=>"RollerDisco",'url'=>'https://t.me/gamee?game=RollerDisco']],
[['text'=>"🦖 Dragon Game 🦖",'url'=>'https://t.me/T4TTTTBOT?game=dragon'],['text'=>"🐍 3D Snake Game 🐍",'url'=>'https://t.me/T4TTTTBOT?game=snake']],
[['text'=>"🔵 Color Game 🔴",'url'=>'https://t.me/T4TTTTBOT?game=color']],
[['text'=>"🚀 Rocket Game 🚀",'url'=>'https://t.me/T4TTTTBOT?game=rocket'],['text'=>"🏹 Arrow Game 🏹",'url'=>'https://t.me/T4TTTTBOT?game=arrow']],
[['text'=>"♟ Chess Game ♟",'url'=>'https://t.me/T4TTTTBOT?game=chess']],
[['text'=>"العوده",'callback_data'=>"home"]],
]])]);}

if($data ==  'home' ){
bot( editMessageText ,[
chat_id =>$chat_id2,
 'message_id'=>$message_id,
'parse_mode'=>"Markdown",
'text'=> "- مرحبـا بك مجددا
- في بوت الالعاب الجديد 🎓
- البوت يحتوي ع مجموعه من الالعاب الخاصه ب تلقرام 🚸
- لـ استخدام البوت يجب عليك 🗳
- اختيار نوع اللعبه . 

• اضغط على زر الالعاب لـ رؤية قسم الالعاب 👇🏻" ,
'reply_to_message_id' =>$message->message_id,
'parse_mode'=>"MarkDown",'disable_web_page_preview'=>true,
reply_markup =>json_encode([
inline_keyboard =>[
[['text'=> 'الالعاب' ,'callback_data' => 'gamee']], 
[['text'=> 'اضف البوت لقروبك' ,'url' => 'https://telegram.me/I6JBOT?startgroup=start']],
[[ 'text' => '𝐒𝐨𝐮𝐫𝐜𝐞','callback_data' => 'Devbot1' ]],
]])
]);
}
if($data == "Devbot1" ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"

*• The Bot Was Create By :*
-----------------------

𝐃𝐞𝐯 : [eqab . 🇸🇦](https://t.me/VJJJJJ)

[𝐒𝐨𝐮𝐫𝐜𝐞 C𝐡𝐚𝐧𝐧𝐞𝐥](https://t.me/z6zzzz)
-----------------------

",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'𝐃𝐞𝐯 .','url'=>'https://t.me/VJJJJJ']],
[['text'=>'𝐒𝐨𝐮𝐫𝐜𝐞 𝐂𝐡𝐚𝐧𝐧𝐞𝐥 .','url'=>'https://t.me/z6zzzz']],
[['text'=>'العوده','callback_data'=>'home']],
]])
]);   
}
if($data == "SAIED33" ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
اهلا بك في قسم الاشتراك الإجباري :
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'اضف قناة' ,'callback_data'=>"SAIED2"],['text'=>'حذف قناة' ,'callback_data'=>"delete22"]],
[['text'=>'قناة الاشتراك الإجباري' ,'callback_data'=>"SAIED4"]],
[['text'=>'العوده','callback_data'=>'SAIED']],
]])
]);   
}