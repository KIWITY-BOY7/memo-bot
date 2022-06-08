<?php
ob_start();
$API_KEY = '5507234209:AAEdl5PoKf6JuzYiPins9rIA-OBD-EmH6Vw';
$sudo = 1074236074; 
$bot_id = 5507234209; 
$sudo2 = 52833329141;
$sudo3 = 5003632829;
$e = "@MemoDbot";
define('API_KEY',$API_KEY);
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


$update = json_decode(file_get_contents('php://input'));
var_dump($update);
$message    = $update->message;
$message_id = $update->message->message_id;
$re_msgid   = $update->message->reply_to_message->message_id;
$from_id    = $message->from->id;
$text= $message->text;
$chat_id    = $message->chat->id;
$new = $message->new_chat_member;
$left= $update->message->left_chat_member;
$result2    = $json2->result;
$contact    = $update->message->contact;
$audio      = $update->message->audio;
$location   = $update->message->location;
$memb= $update->message->message_id;
$game= $update->message->game; 
$name= $update->message->from->first_name;
$re  = $update->message->reply_to_message;
$re_msgid   = $update->message->reply_to_message->message_id;
$re_id      = $update->message->reply_to_message->from->id;
$gp_name    = $update->message->chat->title;
$user= $update->message->from->username;
$for = $update->message->from->id;
$sticker    = $update->message->sticker;
$video      = $update->message->video;
$photo      = $update->message->photo;
$voice      = $update->message->voice;
$doc = $update->message->document;
$fwd = $update->message->forward_from;
$re  = $update->message->reply_to_message;
$re_id      = $update->message->reply_to_message->from->id;
$re_user    = $update->message->reply_to_message->from->username;
$re_msgid   = $update->message->reply_to_message->message_id;
$type= $update->message->chat->type;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$id = $message->from->id;
$message_id = $message->message_id;
  $LE_C4_KR = $message->message_id;
@$message = $update->message;
@$from_id = $message->from->id;
@$chat_id = $message->chat->id;
@$message_id = $message->message_id;
@$first_name = $message->from->first_name;
@$last_name = $message->from->last_name;
@$username = $message->from->username;
@$text = $message->text;
@$firstname = $update->callback_query->from->first_name;
@$usernames = $update->callback_query->from->username;
@$chatid = $update->callback_query->message->chat->id;
@$fromid = $update->callback_query->from->id;
@$membercall = $update->callback_query->id;
@$reply = $update->message->reply_to_message->forward_from->id;
@$data = $update->callback_query->data;
@$messageid = $update->callback_query->message->message_id;
@$tc = $update->message->chat->type;
@$gpname = $update->callback_query->message->chat->title;
@$namegroup = $update->message->chat->title;
@$text = $update->inline_qurey->qurey;
@$newchatmemberid = $update->message->new_chat_member->id;
@$newchatmemberu = $update->message->new_chat_member->username;
@$rt = $update->message->reply_to_message;
@$replyid = $update->message->reply_to_message->message_id;
@$tedadmsg = $update->message->message_id;
@$edit = $update->edited_message->text;
@$re_id = $update->message->reply_to_message->from->id;
@$re_user = $update->message->reply_to_message->from->username;
@$re_name = $update->message->reply_to_message->from->first_name;
@$re_msgid = $update->message->reply_to_message->message_id;
@$re_chatid = $update->message->reply_to_message->chat->id;
@$message_edit_id = $update->edited_message->message_id;
@$chat_edit_id = $update->edited_message->chat->id;
@$edit_for_id = $update->edited_message->from->id;
@$edit_chatid = $update->callback_query->edited_message->chat->id;
@$caption = $update->message->caption;
$chatid3=$update->message->chat->id;
$fromid3=$update->message->from->id;
$text=$update->message->text;
$mid=$update->message->message_id;
@$statjson = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$from_id),true);
@$status = $statjson['result']['status'];
@$statjsonrt = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$re_id),true);
@$statusrt = $statjsonrt['result']['status'];
@$statjsonq = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chatid&user_id=".$fromid),true);
@$statusq = $statjsonq['result']['status'];
@$info = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_edit_id&user_id=".$edit_for_id),true);
@$you = $info['result']['status'];
@$forchannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=@".$channel."&user_id=".$from_id));
@$tch = $forchannel->result->status;
$title =$message->chat->title;
$rep = $message->reply_to_message;
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
@$settings2 = json_decode(file_get_contents("data/$chatid.json"),true);
@$editgetsettings = json_decode(file_get_contents("data/$chat_edit_id.json"),true);
@$user = json_decode(file_get_contents("data/user.json"),true);
@$filterget = $settings["filterlist"];
$message = $update->message;
$id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$name = $message->from->first_name;
$username = $message->from->username;
$title = $message->chat->title;
$edited = $update->edited_message;
$chat_ed = $update->edited_message->chat->id;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$user = $message->from->username;
$namesaeedh = $update->message->reply_to_message->from->first_name;
$fromid = $update->callback_query->from->id;
$rep = $message->reply_to_message; 
$rep_msg = $rep->message_id;
$message_id2 = $update->callback_query->message->message_id;
$re = $update->message->reply_to_message;
$re_id = $update->message->reply_to_message->from->id;
$re_user = $update->message->reply_to_message->from->username;
$user_id = $update->message->from->id;
$re_name = $update->message->reply_to_message->from->first_name;
$re_msgid = $update->message->reply_to_message->message_id;
$username = $message->from->username;
$about = $get->result->description;
/*===== فاكشن =====*/
function SendMessage($chat_id, $text){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$text,
'parse_mode'=>'MarkDown']);
}
 function Forward($berekoja,$azchejaei,$kodompayam)
{
bot('ForwardMessage',[
'chat_id'=>$berekoja,
'from_chat_id'=>$azchejaei,
'message_id'=>$kodompayam
]);
}
function  getUserProfilePhotos($token,$from_id) {
  @$url = 'https://api.telegram.org/bot'.$token.'/getUserProfilePhotos?user_id='.$from_id;
  @$result = file_get_contents($url);
  @$result = json_decode ($result);
  @$result = $result->result;
  return $result;
}
function check_filter($str){
global $filterget;
foreach($filterget as $d){
	if (mb_strpos($str, $d) !== false) {
		return true;
}
}
}
if ($tc == 'private'){  
@$user = json_decode(file_get_contents("data/user.json"),true);
if(!in_array($from_id, $user["userlist"])) {
$user["userlist"][]="$from_id";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
}
elseif ($tc == 'group' | $tc == 'supergroup'){  
@$user = json_decode(file_get_contents("data/user.json"),true);
if(!in_array($chat_id, $user["grouplist"])) {
$user["grouplist"][]="$chat_id";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
}
$message_id = $update->message->message_id;
$user          = $update->message->from->username;
$from_id     = $message->from->id;
$re         = $update->message->reply_to_message;


mkdir("data/member");
mkdir("data/member/$chat_id");

$Cmember = file_get_contents("data/member/$chat_id/Cmember.txt");
$CCmember = file_get_contents("data/member/$chat_id/member.txt");
$getCCmember = explode("\n",$CCmember);  

$forward = $update->message->forward_from_id;
$number     = str_word_count($text);
$numper     = strlen($text);
$set = file_get_contents("data/$chat_id.txt");
$ex  = explode("\n", $set);
$photo1     = $ex[0];
$sticker1   = $ex[1];
$contact1   = $ex[2];
$doc1= $ex[3];
$fwd1= $ex[4];
$voice1     = $ex[5];
$link1      = $ex[6];
$audio1     = $ex[7];
$video1     = $ex[8];
$tag1= $ex[9];
$mark1      = $ex[10];
$bots1      = $ex[11];
$commands = array('/add','/lock photo','/lock voice','/lock audio','/lock video','/lock link','/lock user','/lock sticker','/lock contact','/lock doc','/promote','/ban','/kick','/pin','/setname',"قفل الصور","قفل البصمات","قفل الصوت","قفل الفيديو","قفل الروابط","قفل الجهات","قفل الملفات","حظر","طرد","رفع ادمن","ضع اسم","تثبيت","/link","الرابط");
$s = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$bot_id);
$ss = json_decode($s, true);
$bot = $ss['result']['status'];
if(in_array($text, $commands) and $bot != "administrator"){
  bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"البوت ليس ادمن في المجموعه",
  'reply_to_message_id'=>$mid
    ]);
}

$from_id     = $message->from->id;
$get = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$info = json_decode($get, true);
$you = $info['result']['status'];
$gp_get = file_get_contents("data/groups.txt");
$groups = explode("\n", $gp_get);
 if($text=="/start" and $type == "private"){
bot('sendphoto',[
    'chat_id'=>$chat_id,
    'photo'=>"https://t.me/RNRRNR/24",
    'caption'=>"◉︙اهلا بك @$user في بوت الحمايه
◉︙وضيفتي حمايه المجموعات من السبام والتفليش والخ..
◉︙لتفعيل البوت ارسل كلمه تفعيل
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
◉︙ مطور البوت ❪@TVVTP❫",
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 [['text'=>"آلمـطـور ",'url'=>"https://t.me/TVVTP"]]
    ]

  ])
  ]);
}
if ($new and $new->id == $bot_id) {
  bot('sendphoto',[
    'chat_id'=>$chat_id,
    'photo'=>"https://t.me/IIMemoll/3",
    'caption'=>"◉︙اهلا بك @$user في بوت الحمايه
◉︙وضيفتي حمايه المجموعات من السبام والتفليش والخ..
◉︙لتفعيل البوت ارسل كلمه تفعيل",
    
    ]);
}

if ($type == "supergroup" and in_array($chat_id, $groups)){
  
  if($you != "creator" && $you != "administrator" && $from_id != $sudo){
    if($photo && $photo1 == "l"){
 bot('deleteMessage',[
     'chat_id'=>$chat_id,
     'message_id'=>$message->message_id
 ]);
    }

    if($voice and $voice1 == "l"){
      bot('deleteMessage',[
   'chat_id'=>$chat_id,
   'message_id'=>$message->message_id
      ]);
    } 
    if($audio && $audio1 == "l"){
      bot('deleteMessage',[
   'chat_id'=>$chat_id,
   'message_id'=>$message->message_id
      ]);
    }
    if($video && $video1 == "l"){
      bot('deleteMessage',[
   'chat_id'=>$chat_id,
   'message_id'=>$message->message_id
      ]);
    }
    if($link1 == "l" and preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/',$text) ){
bot('deleteMessage',[
  'chat_id'=>$chat_id,
  'message_id'=>$message->message_id
      ]);
    } 
    if($tag1 == "l" and  preg_match('/^(.*)@|@(.*)|(.*)@(.*)|(.*)#(.*)|#(.*)|(.*)#/',$text)){
bot('deleteMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message->message_id
]);
    }
    if($doc and $doc1 == "l"){
      bot('deleteMessage',[
   'chat_id'=>$chat_id,
   'message_id'=>$message->message_id
      ]);
    }
    if($sticker and $sticker1 == "l"){
      bot('deleteMessage',[
   'chat_id'=>$chat_id,
   'message_id'=>$message->message_id
      ]);
    }
    if($update->message->forward_from && $fwd1 == "l"){
      bot('deleteMessage',[
   'chat_id'=>$chat_id,
   'message_id'=>$message->message_id
      ]);
    }
    if($message->entities and $mark1 == "l"){
      bot('deleteMessage',[
   'chat_id'=>$chat_id,
   'message_id'=>$message->message_id
      ]);
    }
    if($new and $bots1 == "l"){
      $new_user = $new->username;
      if (preg_match('/^(.*)([Bb][Oo][Tt]/', $new_user)) {
 bot('kickChatMember',[
   'chat_id'=>$chat_id,
   'user_id'=>$new->id
   ]);
      }
    }
  }

if($bot == "administrator"){
if($you == "creator" or $you == "administrator") {
$re_user    = $update->message->reply_to_message->from->username;
  if($re  &&  $text == "/del"){
    bot('deleteMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$re_msgid
    ]);
  }
  if($re and $re_id != $bot and $re_id != $sudo and $text=="/ban" or $text == "حظر" or $text == "/kick" or $text=="طرد"){
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"
◉︙ العضــو » ❪ @$re_user ❫
◉︙ الايـدي » ( $re_id )
◉︙ تم حظره 
",
  'reply_to_message_id'=>$mid
      ]);
    bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$re_id
      ]);
  }
  if($re and $re_id != $bot and $re_id != $sudo and $text=="الغاء حظر" or $text == "الغاء الحظر" or $text == "فك الحظر"){
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"
◉︙ العضــو » @$re_user 
◉︙ الايـدي » ( $re_id )
◉︙ تم الغاء حظره 
",
  'reply_to_message_id'=>$mid
      ]);
    bot('unbanChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$re_id
      ]);
    }
  if($text == "اد" or $text == "رفع ادمن " and $you != "memb"){
      bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"
◉︙ العضــو » @$re_user 
◉︙ الايـدي » ( $re_id )
◉︙ تـم رفعه ادمن للـكروب 
",
  'reply_to_message_id'=>$mid
      ]);
      bot('promoteChatMember',[
   'chat_id'=>$chat_id,
   'user_id'=>$re_id
 ]);
  }
  $ename = str_replace("/setname ", "$ename", $text);
  $aname = str_replace("ضع اسم ", "$aname", $text);
  if($text == "/setname $ename"){
    bot('setChatTitle',[
      'chat_id'=>$chat_id,
      'title'=>$ename 
      ]);
  }
   if($text == "ضع اسم $aname"){
     bot('setChatTitle',[
      'chat_id'=>$chat_id,
      'title'=>$aname 
      ]);
   }
   if($re and $text == "pin" or $text == "تثبيت"){
    bot('pinChatMessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$re_msgid
      ]);
   }
   if($text == "/lock photo" or $text == "قفل الصور"){
    file_put_contents("data/$chat_id.txt", "l\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
     bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"
◉︙ تم قفل الصور بواسطه $name 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
 
   if($text == "/open photo" or $text == "فتح الصور"){
    file_put_contents("data/$chat_id.txt", "o\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"◉︙ تم فتح الصور بواسطه $name 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
 
    if($text == "/lock sticker" or $text == "قفل الملصقات"){
    file_put_contents("data/$chat_id.txt", "$photo1\nl\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"◉︙ تم قفل الملصقات$name 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
if($text == "فتح ملصقات" or $text == "فتح الملصقات"){
    file_put_contents("data/$chat_id.txt", "$photo1\no\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"◉︙ تم فتح الملصقات بواسطه $name 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
if($text == "قفل جهات" or $text == "قفل الجهات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\nl\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"◉︙ تم قفل جهات بواسطه $name  
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
 if($text == "/open contact" or $text == "فتح الجهات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\no\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"◉︙ تم فتح جهات بواسطه $name 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "قفل ملفات" or $text == "قفل الملفات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\nl\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"◉︙ تم قفل الملفات بواسطه $name 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
  if($text == "فتح ملفات" or $text == "فتح الملفات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\no\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"◉︙ تم فتح الملفات بواسطه $name 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
if($text == "قفل توجيه" or $text == "قفل التوجيه"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\nl\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"◉︙ تم قفل التوجيه بواسطه $name  
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "فتح توجيه" or $text == "فتح التوجيه"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\no\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"◉︙ تم فتح التوجيه بواسطه $name 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "قفل بصمات" or $text == "قفل البصمات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\nl\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"◉︙ تم قفل البصمات بواسطه $name 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
     if($text == "فتح بصمات" or $text == "فتح البصمات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\no\n$link1\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"◉︙ تم فتح بصمات بواسطه $name 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
     if($text == "قفل روابط" or $text == "قفل الروابط"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\nl\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"◉︙ تم قفل الروابط بواسطه $name 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "فتح روابط" or $text == "فتح الروابط"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\no\n$audio1\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"◉︙ تم فتح الروابط بواسطه $name 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "قفل صوت" or $text == "قفل الصوت"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\nl\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"◉︙ تم قفل الصوت $name 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "فتح صوت" or $text == "فتح الصوت"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\no\n$video1\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"◉︙ تم فتح الصوت بواسطه $name 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "قفل فيديو" or $text == "قفل الفيديو"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\nl\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"◉︙ تم قفل الفيديو بواسطه $name 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "فتح فيديو" or $text == "فتح الفيديو"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\no\n$tag1\n$mark1\n$bots1");
    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"◉︙ تم فتح الفيديو بواسطه $name 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "قفل معرفات" or $text == "قفل المعرفات" or $text == "قفل اليوزرات" or $text == "قفل يوزرات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\nl\n$mark1\n$bots1");
    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"◉︙ تم قفل اليوزرات بواسطه $name 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "فتح يوزرات" or $text == "فتح المعرفات" or $text == "فتح اليوزرات" or $text == "فتح يوزرات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\no\n$mark1\n$bots1");
    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"◉︙ تم فتح اليوزرات بواسطه $name 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
    if($text == "قفل ماركدون" or $text == "قفل الماركدون"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\nl\n$bots1");
    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"◉︙ تم قفل الازرار الشفافه بواسطه $name 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "فتح ماركدون" or $text == "فتح الماركدون"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\no\n$bots1");
    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"◉︙ تم فتح الازرار الشفافه بواسطه $name 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
  if($text == "قفل بوتات" or $text == "قفل البوتات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\nl");
    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"◉︙ تم قفل البوتات بواسطه $name 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }
   if($text == "/open bots" or $text == "فتح البوتات"){
    file_put_contents("data/$chat_id.txt", "$photo1\n$sticker1\n$contact1\n$doc1\n$fwd1\n$voice1\n$link1\n$audio1\n$video1\n$tag1\n$mark1\no");
    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"◉︙ تم فتح بوتات بواسطه $name 
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
      ]);
   }


    $export = json_decode(file_get_contents("https://api.telegram.org/bot$API_KEY/exportChatInviteLink?chat_id=$chat_id"));
    $l = $export->result;

   if($you == "creator" or $you == "administrator" or $you == "member" or $from_id == $sudo){
    if ($text == "المطور" or $text ==  مطور  and  $you == "administrator") {
    $result2 = $json2->result;
    bot( sendmessage ,[
     chat_id =>$chat_id, 
     text =>"
     ◉︙ مرحبا عزيزي قمت بارسال رساله للمطور في الخاص للحضور
     ◉︙ وارفقت مع الرساله معلومات المجموعه ومعلوماتك
     ◉︙ انتضر قليلا ",
     reply_to_message_id =>$message->message_id,
    ]);
    bot( sendMessage ,[
     chat_id =>$sudo,
     text =>"
   ◉︙ ايها  المطــور الاساسي
   ◉︙ قــام احد الاشخاص بأستدعائــك
   ◉︙ اسم العضو ( $name )
   ◉︙ رابط الكروب ( $l )
   ◉︙ اسم المجموعه  $gp_name 
   ◉︙ ايــدي المجمــوعه » $chat_id 
   ◉︙ يوزر الــذي قام بأستدعائــك  » @$user
    ",
    ]);
    }
    }


   if(preg_match('/^(مسح) (.*)/', $text, $delmsg) and $from_id == $sudo){
    for($h=$message_id; $h>=$message_id-$delmsg[2]; $h--){
    bot('deletemessage',[
    'chat_id' => $chat_id,
    'message_id' =>$h,]);}}
    $editMessage = $update->edited_message;
    $chatedit = $update->edited_message->chat->id;
    $chat_id2 = $update->callback_query->message->chat->id;
    $message_id = $update->callback_query->message->message_id;
    $data = $update->callback_query->data;
    if($editMessage){
         bot('sendMessage',[
         'chat_id'=>$chatedit,
         'text'=>'سحك وعدل',
         'message_id'=>$message->edited_message->message_id,
         'reply_to_message_id'=>$update->edited_message->message_id,
         ]);
     }
   if($text=="الاوامر"){
    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"❂
◉︙ اوامر الپوت
 ٴ━━━━━━━━━━
◉︙ مہ1 » لعَرض قائمهۃ الـحمـايهۃ 
◉︙ مہ2 » لعَرض اوامر الاعضاء
◉︙ مہ3» لعَرض قائمهۃ الحظَر والخہ...
◉︙ مہ4 » لعَرض قائمهۃ الادمنيهۃ
 ٴ━━━━━━━━━━
◉︙ مہ5 » لعَرض اوامر المدراء
◉︙ مہ6 » لعَرض اوامر المنشئين
◉︙ مہ7 » لعَرض اوامر اﻟ̣مطور
◉︙ مہ8 » لعَرض اوامر اﻟ̣مطور الاساسي 
◉︙ مہ9 » لعَرض اوامر اﻟ̣تمبلر
◉︙ مہ10 » لعَرض اوامر اﻟ̣تحشيش
 ٴ━━━━━━━━━━
◉︙ للمزيد من المعلومات راسلنا  ࿈

◉︙ م $name » لعَرض اوامر اوامر $name


 ‏‎‏❋¦ رآسـلني للآسـتفسـآر ☜ { @TVVTP } ",
      ]);
   }
  if($text=="الاوامر"){
    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"❂
◉︙ اوامر الپوت
 ٴ━━━━━━━━━━
◉︙ مہ1 » لعَرض قائمهۃ الـحمـايهۃ 
◉︙ مہ2 » لعَرض اوامر الاعضاء
◉︙ مہ3» لعَرض قائمهۃ الحظَر والخہ...
◉︙ مہ4 » لعَرض قائمهۃ الادمنيهۃ
 ٴ━━━━━━━━━━
◉︙ مہ5 » لعَرض اوامر المدراء
◉︙ مہ6 » لعَرض اوامر المنشئين
◉︙ مہ7 » لعَرض اوامر اﻟ̣مطور
◉︙ مہ8 » لعَرض اوامر اﻟ̣مطور الاساسي 
◉︙ مہ9 » لعَرض اوامر اﻟ̣تمبلر
◉︙ مہ10 » لعَرض اوامر اﻟ̣تحشيش
 ٴ━━━━━━━━━━
◉︙ للمزيد من المعلومات راسلنا  ࿈

◉︙ م $name » لعَرض اوامر اوامر $name


 ‏‎‏❋¦ رآسـلني للآسـتفسـآر ☜ { @TT54T } ",
      ]);
  }
 }
}
if($text=="اوامر القفل" or $text=="/setting$e" or $text=="الاعدادات"){

  bot('sendMessage',['chat_id'=>$chat_id, 'text'=>"➖➖➖
   ◉︙ اهلا بك في اوامر القفل
   ◉︙ ڨفلٰ ‹› ڤتح » الامر
  ٴ━━━━━━━━━━
   ◉︙ الروابط «» الكلايش
   ◉︙ المعرفات «» اللستات
   ◉︙ التاك «» الصوت 
   ◉︙ البوتات «» المتحركه
   ◉︙ التوجيه «» الدردشه
   ◉︙ التثبيت «» الملفات
   ◉︙ الاشعارات «» الفيديو
   ◉︙ الماركدون «» الاغاني
   ◉︙ التعديل «» الالعاب
   ◉︙ تعديل الميديا «» الصور
   ◉︙ الملصقات «» السيلفي
   ◉︙ الجهات «» الدخول «» الاضافه
   ٴ━━━━━━━━━━
   ◉︙ للمزيد من الاوامر ارسل ↓
   ◉︙ اوامر الكتم » لعرض اوامر الكتم
   ◉︙ اوامر التقيد » لعرض اوامر التقيد
   ◉︙ اوامر الطرد » لعرض اوامر الطرد
   ٴ━━━━━━━━━━
  ◉︙ للمزيد من المعلومات راسلنا  ࿈
",
]);
}
}
if($bot == "administrator"){
 if ($you == "administrator" or $you == "creator") {
if($text == "/add" or $text == "/add$e" or $text=="تفعيل"){
if(!in_array($chat_id, $groups)){
  file_put_contents("data/$chat_id.txt", "o\no\no\no\nl\no\nl\no\no\nl\no");
  file_put_contents("data/groups.txt", "$chat_id\n",FILE_APPEND);
$t =  $message->chat->title;
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"◉︙ تـم تـفـعـيـل الـمـجـمـوعـه ✓️ 
    ◉︙ وتم رفع جمـيع آلآدمـنيهہ‌‌‏ آلگروب بآلبوت 
    ✓
",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
    ]);
 }
if (in_array($chat_id, $groups)) {
$t =  $message->chat->title;
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"◉︙ المجموعه بالتأكيد  تم تفعيلها",
  'reply_to_message_id'=>$mid,
  'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>true,
    ]);
 }
}
}
}
 if($text == "عدد الكروبات"){
  $c = count($groups);
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"◉︙ عدد عدد الكروبات المفعلة » $c  ➼"
    ]);
 }
if($text == "اذاعه" and $for == $sudo){
  file_put_contents("mode.txt", "bc");
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"◉︙ ارسال الان نص او الميديا : (صوره - فديو - متحركه - ملف)"
    ]);
}
$mode = file_get_contents("mode.txt");
if($text != "اذاعه" and $mode=="bc" and $for == $sudo){
  for ($i=0; $i < count($groups); $i++) { 
    bot('sendMessage',[
      'chat_id'=>$groups[$i],
      'text'=>" $text"
    ]);
  }
  unlink("mode.txt");
}
/////////////////////////////////////////////////////////////////////////////////////
$update     = json_decode(file_get_contents('php://input'));
$message = $update->message;
$text           = $message->text;
$chat_id     = $message->chat->id;
$user          = $update->message->from->username;
$from_id     = $message->from->id;
$from_user = $message->from->username;
$get             = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$info            = json_decode($get, true);
$JJ117        = $info['result']['status'];
if($message){
$msgs = json_decode(file_get_contents('msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$msgs['msgs'][$chat_id][$from_id] = ($msgs['msgs'][$chat_id][$from_id]+1);
file_put_contents('msgs.json', json_encode($msgs));}
$iBadlz = array(
"خوش متفاعل 🌝",
"متفاعل ✨",
"اسطورة التفاعل 🌈ء",
"الله مال تفاعل ⚜️",
"نايس التفاعل 💘ء");
 $JJ119 = array_rand($iBadlz,1);
 $p_pppp = array(
    "0.14%",
    "0.22%",
    "0.31%",
    "0.65%",
    "0.77%",
    "0.80%",
    "0.89%",
    "0.95%");
     $markst = array_rand($p_pppp,1);
    
$photo = "https://t.me/$user";
if($text=="ايدي" or $text=="ا"and $from_id == $sudo){
bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$photo,
'caption'=>"*
    ُ˛ ٓNaMe     •  $name
    ُُ˛ ٓID • ❲ $from_id ❳  
    ُ˛ ٓUsEr • ❲ $from_user ❳ ،
    ُ˛ ٓStA • ❲ مطور اساسي ❳،
    ُ˛ ٓMsGs •  ❲ ".$msgs['msgs'][$chat_id][$from_id]" ❳ 
    ُ˛ $gp_name
    -----------------------
*",
"parse_mode"=>"MARKDOWN",
'message_id'=>$message->message_id,
'reply_to_message_id' =>$message->message_id, 
]);
}elseif($text=="ايدي" or $text=="ا"and $from_id == $sudo){
 bot("sendmessage",[
 'chat_id'=>$chat_id,
 'text'=>"*
    ُ˛ ٓNaMe     •  $name
    ُُ˛ ٓID • ❲ $from_id ❳  
    ُ˛ ٓUsEr • ❲ $from_user ❳ ،
    ُ˛ ٓStA • ❲ مطور اساسي ❳،
    ُ˛ ٓMsGs •  ❲ ".$msgs['msgs'][$chat_id][$from_id]" ❳ 
    ُ˛ $gp_name
    -----------------------
• لاتمتلك صوره لحسابك ،ء
*",
"parse_mode"=>"MARKDOWN",
 ]);
 }
if($text=="ايدي" or $text=="ا"and $JJ117 == "creator" and $from_id != $sudo){
bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$photo,
'caption'=>"*
    ُ˛ ٓNaMe     •  $name
    ُُ˛ ٓID • ❲ $from_id ❳  
    ُ˛ ٓUsEr • ❲ $from_user ❳ ،
    ُ˛ ٓStA • ❲ منشئ اساسي ❳،
    ُ˛ ٓMsGs •  ❲ ".$msgs['msgs'][$chat_id][$from_id]" ❳ 
    ُ˛ $gp_name
    -----------------------
*",
"parse_mode"=>"MARKDOWN",
'message_id'=>$message->message_id,
'reply_to_message_id' =>$message->message_id, 
]);
}elseif($text=="ايدي" or $text=="ا"and $JJ117 == "administrator" and $id !== $sudo2){
bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$photo,
'caption'=>"*
    ُ˛ ٓNaMe     •  $name
    ُُ˛ ٓID • ❲ $from_id ❳  
    ُ˛ ٓUsEr • ❲ $from_user ❳ ،
    ُ˛ ٓStA • ❲ ادمن في القروب ❳،
    ُ˛ ٓMsGs •  ❲ ".$msgs['msgs'][$chat_id][$from_id]" ❳ 
    ُ˛ $gp_name
    -----------------------
*",
"parse_mode"=>"MARKDOWN",
'message_id'=>$message->message_id,
'reply_to_message_id' =>$message->message_id, 
]);
}elseif($text=="ايدي" or $text=="ا"and $JJ117 == "member"){
bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$photo,
'caption'=>"*
    ُ˛ ٓNaMe     •  $name
    ُُ˛ ٓID • ❲ $from_id ❳  
    ُ˛ ٓUsEr • ❲ $from_user ❳ ،
    ُ˛ ٓStA • ❲ فقط عضو ❳،
    ُ˛ ٓMsGs •  ❲ ".$msgs['msgs'][$chat_id][$from_id]" ❳ 
    ُ˛ $gp_name
    -----------------------
*",
"parse_mode"=>"MARKDOWN",
'message_id'=>$message->message_id,
'reply_to_message_id' =>$message->message_id, 
]);
}

if($text=="ايدي" or $text=="ا"and $id == $sudo2){
    bot("sendPhoto",[
    'chat_id'=>$chat_id,
    "photo"=>$photo,
    'caption'=>"*
    ُ˛ ٓNaMe     •  $name
    ُُ˛ ٓID • ❲ $from_id ❳  
    ُ˛ ٓUsEr • ❲ $from_user ❳ ،
    ُ˛ ٓStA • ❲ مطور رتبه ثانيه❳ ،
    ُ˛ ٓMsGs •  ❲ ".$msgs['msgs'][$chat_id][$from_id]" ❳ 
    ُ˛ $gp_name
    -----------------------
    *",
    "parse_mode"=>"MARKDOWN",
    'message_id'=>$message->message_id,
    'reply_to_message_id' =>$message->message_id, 
    ]);
    }
if($text=="صورتي"){
$photo = "https://t.me/$user";
bot('SendPhoto',[
'chat_id'=>$chat_id,
'photo'=>$photo,
'caption'=>"
صورتك : @$from_user
",
'message_id'=>$message->message_id,
'reply_to_message_id' =>$message->message_id, 
]);
}
if($text == "msg" or $text == "رسائلي" and $id == $sudo){
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
 ◉︙ مرحبا عزيزي » ❲ المطور الاساسي⭐️ ❳
 ◉︙ رسائلك » ❲ ".$msgs['msgs'][$chat_id][$from_id]." ❳
 💥
 ",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 if($text == "msg" or $text == "رسائلي" and $you == "member"){
  bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"
  ◉︙ مرحبا عزيزي » ❲ عضو مهتلف ❳
  ◉︙ رسائلك » ❲ ".$msgs['msgs'][$chat_id][$from_id]." ❳
  💥
  ",
  'reply_to_message_id'=>$message->message_id, 
  ]);
  }
  if($text == "msg" or $text == "رسائلي" and $you == "administrator"){
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    ◉︙ مرحبا عزيزي » ❲ ادمن الكروب ❳
    ◉︙ رسائلك » ❲ ".$msgs['msgs'][$chat_id][$from_id]." ❳
    💥
    ",
    'reply_to_message_id'=>$message->message_id, 
    ]);
    }
    if($text == "msg" or $text == "رسائلي" and $you == "creator" and $you !== "administrator"){
      bot('sendmessage',[
      'chat_id'=>$chat_id,
      'text'=>"
      ◉︙ مرحبا عزيزي » ❲ منشئ الكروب ❳
      ◉︙ رسائلك » ❲ ".$msgs['msgs'][$chat_id][$from_id]." ❳
      💥
      ",
      'reply_to_message_id'=>$message->message_id, 
      ]);
      }
 ///////////teeeest//////////
 
//////////////////////////////منهاية قفل ال
//////////////////////////////منهاية قفل الفارسيه///////////////////////
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$p_pppp = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$message_id2 = $update->callback_query->message->message_id;
$data = $update->callback_query->data;



##### الستارت #####
if($text == 'تفعيل الالعاب'){ 
bot('sendMessage', [
'chat_id'=>$p_pppp,
'text'=>"◉︙ تم تفعيل الالعاب في المجموعه 
✓",
]);}


##### الاسئله #####
$هدوء = array('الكلمة ◉︙ [ ل س ا ق ت ب ا ] '
,'الكلمة ◉︙ [ ه ا ر س ي ]'
,'الكلمة ◉︙ [ ر و ح س ]'
,'الكلمة ◉︙ [ ن ف ه ق ]'
,'الكلمة ◉︙ [ و ن ي ا ف  ]'
,'الكلمة ◉︙ [  ن و ه ب ز  ]'
,'الكلمة ◉︙ [ ر ك و س ت ن ا ي ]'
,'الكلمة ◉︙ [ ا ع ل ق ا ر ]'
,'الكلمة ◉︙ [ و هـ ك ه ]'
,'الكلمة ◉︙ [ ف ي س ه ن ]'
,'الكلمة ◉︙ [ ج ا د ج  ه ]'
,'الكلمة ◉︙ [ س م ر د ه ]'
,'الكلمة ◉︙ [ ا ن ا و ل ]'
,'الكلمة ◉︙ [ ه غ ف ر ]'
,'الكلمة ◉︙ [ ج ه ث ل ا ]'
,'الكلمة ◉︙ [ خ م ب ط ]'
);
$ailnoor = array_rand($هدوء, 1);
if($text =="الاسرع" or $text =="اسرع واحد"){
bot('sendMessage',[
'chat_id'=>$p_pppp,
'text'=>$هدوء[$ailnoor],
'reply_to_message_id'=>$message->message_id
]);
}


##### الاجوبه #####
if($text == 'سحور' or $text == 'سياره'  or $text == 'استقبال'  or $text == 'قنفه'  or $text == 'ايفون'  or $text == 'بزونه' or  $text == 'مطبخ' or $text == 'كرستيانو' or $text == 'دجاجه' or $text == 'مدرسه' or $text == 'الوان' or $text == 'غرفه' or $text == 'ثلاجه' or $text == 'كهوه' or $text == 'سفينه' or $text == 'العراق'){
$LE_C4_KR = array('◉︙ مبروك فزت انت الاسرع
 ◉︙ لقد حصلت على { 1 }من نقاط يمكنك استبدالهن برسائل',
'◉︙ مبروك فزت انت الاسرع
 ◉︙ لقد حصلت على { 1 }من نقاط يمكنك استبدالهن برسائل',
' ◉︙ مبروك فزت انت الاسرع
 ◉︙ لقد حصلت على { 1 }من نقاط يمكنك استبدالهن برسائل',
'◉︙ مبروك فزت انت الاسرع
 ◉︙ لقد حصلت على { 1 }من نقاط يمكنك استبدالهن برسائل',);
$php = array_rand($LE_C4_KR, 1);
bot('sendMessage',[
'chat_id'=>$p_pppp,
'text'=>$LE_C4_KR[$php],
'reply_to_message_id'=>$message->message_id
]);
}



  
  /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  
 //////////////////////////////////////////////////////////////////////////////////////////////////////////
$rnd = rand(1,999999999999999999);
if($text=="صورتي"){
$re = bot("getUserProfilePhotos",["user_id"=>$id,"limit"=>1,"offset"=>0]);
$res = $re->result->photos[0][2]->file_id;
$pa = bot("getFile",["file_id"=>$res]);
$path = $pa->result->file_path;
file_put_contents("$rnd.jpg",file_get_contents("https://api.telegram.org/file/bot".$API_KEY."/".$path));
$uphoto = "https://hamza70788.000webhostapp.com//$rnd.jpg"; // رابط استضافتك
bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>$uphoto,
'caption'=>" ",
'reply_to_message_id'=>$message->message_id, 
]);
unlink("$rnd.jpg");
}
if($text == "ر" or $text == "الرابط"){
    $export = json_decode(file_get_contents("https://api.telegram.org/bot$API_KEY/exportChatInviteLink?chat_id=$chat_id"));
    $l = $export->result;
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"ٴ◉︙ » رابط مجموعة ↓
      ٴ◉︙ » $t
    ◉︙ُ »  $l
      ◉︙ تم طلب الرابط بواسطة »( $name )
      ◉︙ معرفه »( @$user )",
      'disable_web_page_preview'=>true,
      'reply_to_message_id'=>$message->message_id,
      ]);
  
   }
$New_member = $message->new_chat_member;
$usser = $New_member->username;
$id = $New_member->id; 
$id_bot = 5507234209;
if(preg_match('/^(.*)([Bb][Oo][Tt])/',$usser) and $New_member and $id != $id_bot and  $you == "member"){
bot('kickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$id
]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"◉︙ آلعضـو : @$user
◉︙ ايدي : $id 
◉︙ مـمـنوع آضـآفهہ آلبوتآت 
◉︙ تم طـرد آلبوت والعضو الذي اضاف البوت
✘",
]);
}

if($rep && $text == "ايدي" or $text == "ايديه"){
bot('sendmessage', [
'chat_id' => $chat_id,
'text' => " 
ايديه : $re_id
معرفه : @$re_user ",
'reply_to_message_id'=>$message->message_id,

]);
}
if($text == "م2"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
◉︙ ڤي اوآمر الادمنيهۃ..
 ٴ━━━━━━━━━━
 ◉︙ رفع مٰميز !
 ◉︙ تنزيل مٰميز !
 ◉︙ تثبيت !
 ٴ━━━━━━━━━━
◉︙ اوامر التفعيل و التعطيٰل ★
 ٴ━━━━━━━━━━
◉︙ تڤعيل – تعطيل – اطردني !
◉︙ تڤعيل – تعطيل – الترحيب !
◉︙ تڤعيل – تعطيل – جلب الصور !
◉︙ تڤعيل – تعطيل–  الترحيب !
 ٴ━━━━━━━━━━
◉︙ اوآمر الوضَع ↑↓
 ٴ━━━━━━━━━━
◉︙ ضع رابط » ثم ارسل الرابط
◉︙ ضع صورهۃ » ثم ارسل الصوره
◉︙ ضع قوانين » ثم ارسل النص
◉︙ ضع ترحيب » ثم ارسل النص
◉︙ ضع وصف » ثم ارسل النص
 ٴ━━━━━━━━━━
◉︙ مسح + الامر ادناه ↑↓
 ٴ━━━━━━━━━━
 ◉︙ مسح المحظٓورين ٭
 ◉︙ مسح المكتومين ٭
 ◉︙ مسح المَميزين ٭
 ◉︙ مسح المڨيدين ٭
 ◉︙ مسح قائمهۃ المنع ٭
 ◉︙ مسح الڨوانين ٭
 ◉︙ مسح التَرحيب ٭
 ◉︙ مسح الرابط ٭
 ٴ━━━━━━━━━━
 ◉︙ لعرضَ القوائمہَ ↑↓
 ٴ━━━━━━━━━━
◉︙ قائمهۃ المنعَ «
◉︙ الڨوانين «
◉︙ الرابطہَ «
◉︙ المميزين «
◉︙ المڨيدين «
◉︙ المحظورين «
◉︙ المگتومين «
 ٴ━━━━━━━━━━
◉︙ للمزيد من المعلومات راسلنا  ࿈

┇ـ➖➖➖➖➖

 ◉︙ راسلني للاستفسار ↭ @TT54T",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "م2"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" ◉︙ اوامر الوضع للمجموعه ::

 ◉︙ ضع اسم :↜ لوضع اسم  
  
 ◉︙ الـرابـط :↜  لعرض الرابط  

 ◉︙¦  اوامر رؤية الاعدادات ::

 ◉︙ $name : لعرض معلومات $name 
 ◉︙ معلوماتي :↜لعرض معلوماتك  
 ◉︙ الاعدادات : لعرض اعدادات المجموعه 
 ◉︙ المجموعه : لعرض معلومات المجموعه 

➖➖➖➖➖➖➖
 ◉︙ راسلني للاستفسار ↭ @TT54T",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "م3"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اوامر حماية المجموعه 

◉︙️ قفل ~ فتح :  الصوت
◉︙ قفل ~ فتح :  الــفيديو
◉︙ قفل ~ فتح :  الـصــور 
◉︙ قفل ~ فتح :  الملصقات
◉︙ قفل ~ فتح : الروابط
◉︙ قفل ~ فتح : البوتات
◉︙ ️قفل ~ فتح : المعرفات
◉︙| قفل ~ فتح :  التوجيه
◉︙ قفل ~ فتح : الجهات 
◉︙ قفل ~ فتح : الملفات
 ◉︙ قفل ~ فتح : الماركدون
 ◉︙ قفل ~ فتح : البصمات
 ٴ━━━━━━━━━━
 ◉︙ رفع المدراء
 ◉︙ مسح المدراء
 ◉︙ مسح + العدد 
 ◉︙ مسح البوتات 
 ◉︙ الاعدادات 
 ◉︙ اعدادات الكتمہ
 ◉︙ اعدادات التقيد 
 ◉︙ اعدادات الطرد 
 ٴ━━━━━━━━━━
◉︙ اوآمر الردود ↑↓
 ٴ━━━━━━━━━━
◉︙ اضف رد ---> رد
◉︙ حذف رد --> حذ
◉︙ قائمه الردود 
◉︙ مسح الردود 
ٴ━━━━━━━━━━
◉︙ اوآمر الردود بالرد ↑↓
 ٴ━━━━━━━━━━
 ◉︙ اضف رد بالرد --> رد
 ◉︙ حذف رد بالرد
 ◉︙ قائمه ردود بالرد 
 ◉︙ مسح ردود بالرد  
 ٴ━━━━━━━━━━
◉︙ اوآمر تفعيل و التعطيل ↑↓
 ٴ━━━━━━━━━━
◉︙ تفعيل ‹› تعطيل » نزلني 
◉︙ تفعيل ‹› تعطيل » الايدي 
◉︙ تفعيل ‹› تعطيل » الزخرفه 
◉︙ تفعيل ‹› تعطيل » ردود البوت  
◉︙ تفعيل ‹› تعطيل » الردود  
◉︙ تفعيل ‹› تعطيل » الردود بالرد 
 ٴ━━━━━━━━━━
◉︙ للمزيد من المعلومات راسلنا  ࿈
◉︙ راسلني للاستفسار ↭ @TT54T",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "م4"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"◉︙ ڤي اوآمر الكتم والحظَر الخہ...
 ٴ━━━━━━━━━━
◉︙ كتم » { ايدي › معرف › رد }
◉︙ الغاء الكتم » { ايدي › معرف › رد }
◉︙ تقيد » { ايدي › معرف › رد }
◉︙ الغاء تقيد » { ايدي › معرف › رد }
◉︙ حظر » { ايدي › معرف › رد }
◉︙ الغاء الحظر » { ايدي › معرف › رد }
◉︙ طرد » { ايدي › معرف › رد }
◉︙ رفع القيود » { ايدي › معرف › رد }
 ٴ━━━━━━━━━━

 ◉︙ راسلني للاستفسار ↭ @TT54T",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "م4"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"◉︙  اوامــر $name الآسٰاسي .
ٴ━━━━━━━━━━
 ◉︙ ارسل الاوامَر فيہَ الخاص
 ◉︙  حظر + ايدي الكروب
 ◉︙  الغاء الحظر + ايدي الكروب
ٴ━━━━━━━━━━
◉︙ رفع مطور – تنزيل مطور   
◉︙ المطَورين – مسح $nameين
◉︙ رفع مميز عامہ – تنزيل مميز عامہ
◉︙ المميزين عامہ – مسح المميزين عام
◉︙ حظر عامہ – الغاء العامہ 
◉︙ قائمهہَ العامہ – مسح قائمه العام
ٴ━━━━━━━━━━
◉︙ ردود $name - مسح ردود $name
◉︙ تفعيل ردود $name
◉︙ تعطيل ردود $name 
◉︙ اضف رد عام - مسح رد عام 
◉︙ ردود $name بالرد 
◉︙ مسح ردود $name بالرد
◉︙ تفعيل ردود $name بالرد
◉︙ تعطيل ردود $name بالرد
◉︙ اضف رد عام بالرد   -- رد
◉︙ حذف رد عام بالرد 
ٴ━━━━━━━━━━
◉︙ وضع اسم للبوت 
◉︙ اذاعه + ايدي لكروب 
◉︙ اذاعهہَ!
◉︙ اذاعهہَ خاص!
◉︙ اذاعهہَ عام!
◉︙ اذاعهہَ بالتوجيه!
◉︙ اذاعهہَ خاص بالتوجيهہَ!
◉︙ اذاعهہَ عام بالتوجيهہَ!

◉︙ تفعيل : لتفعيل البوت 
◉︙ اذاعه : لنشر كلمه لكل عدد الكروبات
◉︙ استخدم /admin في خاص البوت فقط : لعرض كيبود الخاص بك 
◉︙ تحديث: لتحديث ملفات البوت


 ◉︙ راسلني للاستفسار ↭ @TT54T",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "م9"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"◉︙ ڤي اوآمر التمبلر...
 ٴ━━━━━━━━━━
♬ : ايدي - ا .
♬ : الرابط - ر .
♬ : صوره - ص 
♬ : رفع مميز - م .
♬ : اضف رد - رد . 
♬ : رفع ادمن - اد .
♬ : حذف رد - حذ .
♬ : رفع مدير - مد .
♬ : رفع مطور - مط .
♬ : تنزيل الكل - تك .
♬ : مسح المكتومين - ،، .
♬ : مسح قائمة العام - # .
♬ : رفع مطور الاساسي - اس .
 ٴ━━━━━━━━━━

 ◉︙ راسلني للاستفسار ↭ @TT54T",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "م10" or $text == "اوامر التحشيش" or $text == "الاوامر التحشيش" ){
if ( $you == 'creator'  or $you == 'administrator' or in_array($from_id,$Dev) or $from_id==928337883 ) { 
if ($tc == 'group' or $tc == 'supergroup'){  
 
bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"
 ¦ اوامر التحشيش ✓
⇓⇓⇓ـ⇓⇓⇓ـ⇓⇓⇓
┓ـ——————⇓——————ـ┏
︙ •⊱ رفع ↭ لرفع امر ✓ ⊰•
︙•⊱ تنزيل ↭ لتزيل امر ✓ ⊰•
┛ـ——————⇑——————ـ┗
┓ـ——————⇓——————ـ┏

•⊱ حمار  ↭ جحش  ⊰•
•⊱ كلب  ↭ مطي   ⊰•
•⊱ بغل  ↭ فرخ  ⊰•
•⊱ زوج ↭ زوجة ⊰•
•⊱ قرد  ↭ زواحف  ⊰•
•⊱ حصان  ↭ بقره  ⊰•

┛ـ——————⇑——————ـ┗
┓ـ——————⇓——————ـ┏

أوامر أخرة 

┛ـ——————⇑——————ـ┗
┓ـ——————⇓——————ـ┏

•⊱ زواج  ↭ طلاق  ⊰•
•⊱ خطبة  ↭ مكورن  ⊰•

┛ـ——————⇑——————ـ┗

 ◉︙ راسلني للاستفسار ↭ @TT54T",
'reply_to_message_id'=>$message->message_id, 
]);
}
$hloobotkkykkn = array('رفع حمار','رفع جحش','رفع كلب','رفع مطي','رفع بغل','رفع فرخ','رفع زوج','رفع زوجة','رفع قرد','رفع زواحف','رفع حصان','رفع بقرة','رفع بقره','رفع زوجه');
if(in_array($text,$hloobotkkykkn) and $reply){
if ( $you == 'creator'  or $you == 'administrator' or in_array($from_id,$Dev) or $from_id==928337883 ) { 
if ($tc == 'group' or $tc == 'supergroup'){  

if($text == 'رفع بقره' or $text == 'رفع بقرة'){
bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"
  تم رفع $namesaeedh كبقرة  الجروب
  البقرة جاهزة للحلب 
  "]);
}
if($text == 'رفع حمار' or $text == "رفع جحش"){
$a = str_replace('رفع ','',$text);
bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"
  تم رفع $namesaeedh ك$a الجروب 
  تحتاج فقط لعربة 
  "]);
}
if($text == 'رفع كلب'){
bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"
  تم رفع $namesaeedh ككلب الجروب 
  هدية لك على حساب المطور 
  "]);
}
if($text == 'رفع مطي'){
bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"
  تم رفع $namesaeedh كمطي الجروب 
  #مطي_ويفتخر
  "]);
}
if($text == 'رفع بغل'){
bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"
  تم رفع $namesaeedh كبغل الجروب
  
  "]);
}
if($text == 'رفع فرخ') {
bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"
  تم رفع $namesaeedh كفرخ  الجروب
  هديتو  كيس علف من مطوري 
  "]);
}
if($text == 'رفع قرد'){
bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"
  تم رفع $namesaeedh كقرد  الجروب
  هديتو موزة  من مطوري 
  "]);
}
if($text == 'رفع حصان'){
bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"
  تم رفع $namesaeedh كحضان الجروب
  تمت زياد سرعتك يا $namesaeedh لتصبح كسرعة 10 حمير 
  "]);
}
if($text == 'رفع زواحف'){
bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"
  تم رفع $namesaeedh كزاحف الجروب 
  
  "]);
}
if($text == 'رفع زوج'){
bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"
  تم رفع $namesaeedh كزوج ل$name 
  عيلة تجنن 
  "]);
}
if($text == 'رفع زوجه' or $text == 'رفع زوجة'){
bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"
  تم رفع $namesaeedh كزوجة ل$name 
  عيلة تجنن 
  "]);
}
}
}
}
if($text == "زواج" or $text == "خطبة" or $text == "خطبه" or $text == "مكورن" or $text == "طلاق"and $reply){
 if ( $you == 'creator'  or $you == 'administrator' or in_array($from_id,$Dev) or $from_id==928337883 ) { 
if ($tc == 'group' or $tc == 'supergroup'){  

 if($text == "زواج"){
  bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"
تم عقد القران بين $name الذي كان بدور الزوج و $namesaeedh التي كانت بدور الزوجة
تم حجز فندق 5⭐ على شاطىء الاحلام 
  "]);
  }
  
  if($text == 'طلاق'){
   bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"
  تمت عملية طلاق جديدة من قبل الزوج $name الذي طلق امرأته $namesaeedh بسبب لعبة البوبجي 
  "]);
   }
   
   if($text == 'خطبة'or $text == "خطبه"){
    bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"
تمت عملة ال$text من قبل $name للمستورة $namesaeedh الله يتمم على خير 
  "]);
    }
    
    if($text == "مكورن"){
     bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"
 الله يشفيه ترا كورونا مرض خطير 
وينتقل عن طريق التوجيه  نرجو لبس الكممات وتعقيم صورة الهاتف 
  "]);
     }
     }}}
  



if($text == '$name' or $text == "مطور"){
bot('sendContact',[
'chat_id'=>$chat_id,
'user_name'=>"@TVVTP",
'first_name'=>"ميمو",
'last_name'=>"MS",
'reply_to_message_id'=>$message->message_id, 
]);
}
////////الرتب///////////
if($text=="رتبتي" and $you == "creator"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"
◉︙ رتبة البوت » ❲ منشئ المجموعه️ ❳
◉︙ رتبتة الكروب » ❲ مطور اساسي ❳
💥
",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="رتبتي" and  $you == "administrator"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"
◉︙ رتبة البوت » ❲ ادمن ️ ❳
◉︙ رتبتة الكروب » ❲ ادمن ❳
💥",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="رتبتي" and  $you == "member"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"
◉︙ رتبة البوت » ❲ عضو ️ ❳
◉︙ رتبتة الكروب » ❲ عضو ❳",
'reply_to_message_id'=>$message->message_id, 
]);
}
//////////الرسائل الجانبيه/////////
if($text=="رسائلي" and $id == $sudo ){
  bot('sendmessage',[
  'chat_id'=>$chat_id, 
  'text'=>"
  ◉︙ مرحبا عزيزي » ❲ المطور الاساسي⭐️ ❳
  ◉︙ رسائلك » ❲ ".$msgs['msgs'][$chat_id][$from_id]." ❳
  ",
  'reply_to_message_id'=>$message->message_id, 
  ]);
  }
//////////////////مدير-////////////////
if($re and $text == "رفع مدير"  or $text =="مد" and !in_array($re_id,$getCCmember)){
file_put_contents("data/member/$chat_id/member.txt",$re_id ."\n",FILE_APPEND);
file_put_contents("data/member/$chat_id/Cmember.txt","- @" . $re_user . " ٭ " . $re_id . " ٭" . "\n" , FILE_APPEND);
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"
  ◉︙ العضو » [$re_name](tg://user?id=$re_id) 
  ◉︙ الايدي » {`$re_id`}
  ◉︙ تمت ترقيته ليصبح مدير 
✓️
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message->message_id,
  ]);
}

if($re and $text == "رفع مدير" or $text == "مد" and in_array($re_id,$getCCmember)){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"
  ◉︙ العضو » [$re_name](tg://user?id=$re_id) 
  ◉︙ الايدي » {`$re_id`}
  ◉︙ تمت ترقيته ليصبح مدير مسبقا
✓️
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message->message_id,
  ]);
}


if($re and $text == "تنزيل مدير"  and in_array($re_id,$getCCmember)){
$str = str_replace($re_id,"",$getCCmember);
$str2 = str_replace("- @" . $re_user . " ٭ " . $re_id . " ٭","",$Cmember);
$ex = explode("\n",$str);
$ex2 = explode("\n",$str2);
file_put_contents("data/member/$chat_id/member.txt",$ex);
file_put_contents("data/member/$chat_id/Cmember.txt",$ex2);
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"
  ◉︙ العضو » [$re_name](tg://user?id=$re_id) 
  ◉︙ الايدي » {`$re_id`}
  ◉︙¦ تمت تنزيله ليصبح عضو 
✓️
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message->message_id,
  ]);
}
if($re and $text == "تنزيل مدير"  and !in_array($re_id,$getCCmember)){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"
 ◉︙ العضو » [$re_name](tg://user?id=$re_id) 
 ◉︙ الايدي » {`$re_id`}
 ◉︙ تمت تنزيله مسبقا 
✓️
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message->message_id,
  ]);
}


if($text == "مسح المدراء" || $text == "مسح قائمه المدراء"){
file_put_contents("data/member/$chat_id/member.txt","");
file_put_contents("data/member/$chat_id/Cmember.txt","");
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"🥠¦ تم حذف جميع المدراء",
'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
         }
    }
}
/////////////////////////رفع مطور ////////////////
if($re and $text == "رفع مطور" or $text =="مط" and $re_id !=$id_Bot and  in_array($from_id,$sudo) and !in_array($re_id,$developer)){
file_put_contents("data/developers/developer.txt",$re_id ."\n " , FILE_APPEND);
file_put_contents("data/developers/developers.txt","~» (" . "@". $re_user .")  " . "»" . "  (". $re_id .") ". "\n" , FILE_APPEND);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
  ◉︙ العضو » [$usew]
  ◉︙ ايديه » {$re_id}
  ◉︙ رفعه مطور في البوت 
➖
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($re and $text == "رفع مطور"  or $text =="مط" and $re_id !=$id_Bot and in_array($from_id,$Dev)  and in_array($re_id,$developer)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"  ◉︙ العضو » [$usew]
  ◉︙ ايديه » {$re_id}
  ◉︙ تم رفعه مطور من قبل
➖
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($re and $text == "رفع مطور اساسي" or $text =="اس"and $re_id !=$id_Bot and  in_array($from_id,$Dev)){
file_put_contents("$re_id.txt",$re_id);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
  ◉︙ العضو » [$usew]
  ◉︙ ايديه » {$re_id}
  ◉︙ تم رفعه مطور اساسي معك
➖
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($re and $text == "رفع مطور"  || $text == "رفع ادمن" || $text == "رفع مميز" || $text == "رفع مدير" || $text == "رفع منشئ" and $re_id ==$bot_id and in_array($from_id,$Dev)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
  ◉︙ لاتحرجناش والله ماريد 
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
$cdevs = count($developers)-1;
if($text == "مسح المطورين" and $cdevs != 0 and in_array($from_id,$Dev)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
  ◉︙ بواسطة الـ مطور الاساسي
  ◉︙ تم حذف {$cdevs} مطور
➖
",'reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
file_put_contents("data/developers/developer.txt"," ");
file_put_contents("data/developers/developers.txt"," ");
}
if($text == "مسح المطورين" and $cdevs == 0 and in_array($from_id,$Dev)){
$cdevs = count($developers);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
  ◉︙ عذرا ! لم يتم رفع اي مطورين
➖
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
file_put_contents("data/developers/developer.txt"," ");
file_put_contents("data/developers/developers.txt"," ");
}
if($status == "creator" and in_array($from_id,$Dev)){
if($text == "تنزيل الكل" or $text == "حذف الكل" or $text =="تك"){
$CMM = count($mmyazs)-1;
$CM = count($mangers)-1;
$CA = count($admin_users)-1;
$CALL = $CA + $CM + $CMM;
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
 ◉︙ بواسطـة $info
ـــ ـــ ـــ ــــ ــــ 
 ◉︙تم حذف {$CA} من الادمنيه
 ◉︙تم حذف {$CM} من المدراء
 ◉︙تم حذف {$CMM} من المميزين
ـــ ـــ ـــ ــــ ــــ 
 ◉︙تم حذف {$CALL} من المرفوعين
 ◉︙تم حذف الكل بنجاح 
✓
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
file_put_contents("data/manger/$chat_id.txt","");
file_put_contents("data/manger/$chat_id.txt","");
file_put_contents("data/manger/$chat_id/mange.txt" ,"");
file_put_contents("data/mmyaz/$chat_id.txt","");
file_put_contents("data/mmyaz/$chat_id.txt","");
file_put_contents("data/mmyaz/$chat_id/mange.txt" ,"");
file_put_contents("data/admin_user/$chat_id.txt","");
file_put_contents("data/admin_user/$chat_id/mange.txt","");
}
}
if(in_array($from_id,$Dev)){
if($text == "المطورين" and $cdevs != 0){
if ($tc == 'group' | $tc == 'supergroup'){
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
 ◉︙ المطورين {$cdevs} : 
$developers_infos
",
]);
}
}
if($text == "المطورين" and $cdevs == 0 || $developers_info == ""){
if ($tc == 'group' | $tc == 'supergroup'){
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
  ◉︙عذرا ! لم يتم رفع اي مطورين
➖
",
]);
}
}
}
$CM = count($mangers)-1;
if($text == "المدراء" and $CM != 0){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
 ◉︙ المدراء[{$CM}] : 
$mangers_infos
",
]);
}
}
}
if($text == "المدراء" and $CM == 0){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>
"
 ◉︙عذرا ! لم يتم رفع اي مدراء
➖",
]);
}
}
}
$CA = count($admin_users)-1;
if($text == "الادمنيه" || $text == "الادمنية" and $admin_users_infos != null){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
 ◉︙ قائمه الادمنية [{$CA}] :
$admin_users_infos",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
]);
}
}
}
if($text == "الادمنيه" || $text == "الادمنية" and $admin_users_infos == null){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
 ◉︙ لايوجد مجلد - *الادمنيه* -
➖",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
]);
}
}
}
$CMM = count($mmyazs)-1;
if($text == "المميزين" and $mmyazs_infos != null){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
 ◉︙ قائمه المميزين [{$CMM}] :
$mmyazs_infos",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
]);
}
}
}
if($text == "المميزين" and $mmyazs_infos == null){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
 ◉︙ لايوجد مجلد - *المميزين* -
➖",
]);
}
}
}
if($status == "creator" ||  $status == "administrator" or in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$admin_user) || in_array($from_id,$manger)) {
if($re and $text == "رفع مميز" or $text == "م" and !in_array($re_id,$mmyaz)){
file_put_contents("data/mmyaz/$chat_id.txt",$re_id . "\n" , FILE_APPEND);
file_put_contents("data/mmyaz/$chat_id/mange.txt" , "| {[" . "@". $re_user ."]}  " . "»" . "  (`". $re_id ."`) ". "\n" , FILE_APPEND);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
العضو » [$usew]
ايديه » {$re_id}
تم رفعه عضو مميز
➖
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
if($status == "creator" ||  $status == "administrator" or in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$admin_user) || in_array($from_id,$manger)) {
if($re and $text == "رفع مميز" or $text =="م" and in_array($re_id,$mmyaz)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
العضو  » [$usew]
ايديه » {$re_id}
تم رفعه مميز من قبل
➖
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
if($status == "creator" ||  $status == "administrator" or in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$admin_user) || in_array($from_id,$manger)) {
if($text == "مسح المميزين" ){
$cmmyz = count($mmyazs)-1;
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
بواسطه الـ $info
تم حذف {$cmmyz} مميز
➖
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,  
]);
file_put_contents("data/mmyaz/$chat_id.txt","");
file_put_contents("data/mmyaz/$chat_id.txt","");
file_put_contents("data/mmyaz/$chat_id/mange.txt" ,"");
}}

if($re and $text == "تنزيل مميز"   and in_array($re_id,$mmyaz)){
if($status == "creator" ||  $status == "administrator" or in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$admin_user) || in_array($from_id,$manger)) {
	$re_id_info = file_get_contents("data/mmyaz/$chat_id.txt");
	$mdrs = file_get_contents("data/mmyaz/$chat_id/mange.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace("| {[" . "@". $re_user ."]}  " . "»" . "  (`". $re_id ."`) .","",$mdrs1);
	file_put_contents("data/mmyaz/$chat_id.txt",$str);
	file_put_contents("data/mmyaz/$chat_id/mange.txt",$str2);
	bot('SendMessage',['chat_id'=>$chat_id,
    'text'=>"
📬┊العضو » [$usew]
👤┊ايديه » {$re_id}
🎖┊تم تنزيله من المميزين
➖
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
if($status == "creator" ||  $status == "administrator" or in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$admin_user) || in_array($from_id,$manger)) {
if($re and $text == "تنزيل مميز" and !in_array($re_id,$mmyaz)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
📬┊العضو » [$usew]
👤┊ايديه » {$re_id}
🎖┊انه ليس مميز لتنزيله
➖
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
//////////////صورتي//////////////
if($text=="صورتي" or $text=="صوره" or $text=="ص"){
$photo = "https://t.me/$user";
bot('SendPhoto',[
'chat_id'=>$chat_id,
'photo'=>$file_id,
'caption'=>"
صورتك : [@$from_user]
",
'message_id'=>$message->message_id,
'reply_to_message_id' =>$message->message_id, 
]);
}

////////////////////////رد-حذف////////////////////
if($status == "creator" || $status == "administrator" || in_array($from_id,$Dev) || in_array($from_id,$useradmin) || in_array($from_id,$getCCmember) ) {
if($text == "اضف رد" or $text=="رد"){
	
mkdir("data/addrd/$chat_id");
mkdir("data/addrd/$chat_id/media");
mkdir("data/addrd/$chat_id/media/sticker");
mkdir("data/addrd/$chat_id/media/video");
mkdir("data/addrd/$chat_id/media/videonote");
mkdir("data/addrd/$chat_id/media/document");
mkdir("data/addrd/$chat_id/media/photo");
mkdir("data/addrd/$chat_id/media/audio");
mkdir("data/addrd/$chat_id/media/contact");

 file_put_contents("data/addrd/$chat_id/from_id.txt",$from_id);
 file_put_contents("data/addrd/$chat_id/opption.txt","GG1ZZ");
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>" ◉︙¦ حسننا , الان ارسل كلمه الرد 
-",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 if($text and in_array($from_id,$get_from_id_) and $opption == "GG1ZZ"){
 	file_put_contents("data/addrd/$chat_id/opption.txt","IBADLZ");
     file_put_contents("data/addrd/$chat_id/mod.txt",$text);
     file_put_contents("data/addrd/$chat_id/media/media.txt",$text);
     file_put_contents("data/addrd/$chat_id/getrd.txt", "- ". $text . "\n" , FILE_APPEND);
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"
📜¦ جيد , يمكنك الان ارسال جواب الرد 
🔛¦ [ نص,صوره,فيديو,متحركه,بصمه,اغنيه ] ✓
- 
",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 if($message and in_array($from_id,$get_from_id_) and $opption == "IBADLZ"){
  file_put_contents("data/addrd/$chat_id/opption.txt","");
  $IB_3ADLZ = file_get_contents("data/addrd/$chat_id/mod.txt");
  $IB_4ADLZ = file_get_contents("data/addrd/$chat_id/media/media.txt");

  $IB_2ADLZ = fopen("data/addrd/$chat_id/mod.txt", "a") or die("Unable to open file!"); 
   fwrite($IB_2ADLZ, "$IB_3ADLZ\n");
   fclose($IB_2ADLZ);
   
   $IB_5ADLZ = fopen("data/addrd/$chat_id/media/media.txt", "a") or die("Unable to open file!"); 
   fwrite($IB_5ADLZ, "$IB_4ADLZ\n");
   fclose($IB_5ADLZ);
   
   file_put_contents("data/addrd/$chat_id/$IB_3ADLZ.txt",$text);
   file_put_contents("data/addrd/$chat_id/mod.txt","");
   file_put_contents("data/addrd/$chat_id/media/media.txt","");
   file_put_contents("data/addrd/$chat_id/media/$IB_4ADLZ.txt",$message->voice->file_id);
   file_put_contents("data/addrd/$chat_id/media/sticker/$IB_4ADLZ.txt",$message->sticker->file_id );
   file_put_contents("data/addrd/$chat_id/media/document/$IB_4ADLZ.txt",$message->document->file_id);
   file_put_contents("data/addrd/$chat_id/media/videonote/$IB_4ADLZ.txt",$message->video_note->file_id);
   file_put_contents("data/addrd/$chat_id/media/contact/$IB_4ADLZ.txt",$message->contact->phone_number);
   file_put_contents("data/addrd/$chat_id/media/video/$IB_4ADLZ.txt",$message->video->file_id);
   file_put_contents("data/addrd/$chat_id/media/photo/$IB_4ADLZ.txt",$message->photo[0]->file_id);
   file_put_contents("data/addrd/$chat_id/media/audio/$IB_4ADLZ.txt",$message->audio->file_id );
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"*مقفول️ تم ٱضافةهہ الرد بنجٱح ،*",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 
 if($text == "حذف رد" or $text=="مسح رد" or $text=="حذ"){
 file_put_contents("data/addrd/$chat_id/from_id.txt",$from_id);
 file_put_contents("data/addrd/$chat_id/opption.txt","delete");
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>" ◉︙ حسننا عزيزي  
 ◉︙ الان ارسل الرد لمسحها من  للمجموعه ",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 
 if(file_exists("data/addrd/$chat_id/$text.txt") and in_array($from_id,$get_from_id_) and $opption == "delete"){
 	$str = str_replace("- $text","",$get_rd);
     file_put_contents("data/addrd/$chat_id/getrd.txt",$str);
      file_put_contents("data/addrd/$chat_id/from_id.txt","");
      file_put_contents("data/addrd/$chat_id/opption.txt","");
 	unlink("data/addrd/$chat_id/$text.txt");
     unlink("data/addrd/$chat_id/media/$text.txt");
     unlink("data/addrd/$chat_id/media/sticker/$text.txt");
     unlink("data/addrd/$chat_id/media/video/$text.txt");
     unlink("data/addrd/$chat_id/media/videonote/$text.txt");
     unlink("data/addrd/$chat_id/media/document/$text.txt");
     unlink("data/addrd/$chat_id/media/photo/$text.txt");
     unlink("data/addrd/$chat_id/media/audio/$text.txt");
     unlink("data/addrd/$chat_id/media/contact/$text.txt");
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"*($text)
  ✓ تم مسح الرد * ",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 
elseif(!file_exists("data/addrd/$chat_id/$text.txt") and in_array($from_id,$get_from_id_) and $opption == "delete"){
	file_put_contents("data/addrd/$chat_id/from_id.txt","");
    file_put_contents("data/addrd/$chat_id/opption.txt","");
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>" ◉︙ هذا الرد ليس مضاف في قائمه الردود *",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }

if($text == "مسح الردود"){
$links = __DIR__ . "/data/addrd/$chat_id";
$media = __DIR__ . "/data/addrd/$chat_id/media";
$media_contact = __DIR__ . "/data/addrd/$chat_id/media/contact";
$media_document = __DIR__ . "/data/addrd/$chat_id/media/document";
$media_video = __DIR__ . "/data/addrd/$chat_id/media/video";
$media_videonote = __DIR__ . "/data/addrd/$chat_id/media/videonote";
$media_photo = __DIR__ . "/data/addrd/$chat_id/media/photo";
$media_sticker = __DIR__ . "/data/addrd/$chat_id/media/sticker";
$media_audio = __DIR__ . "/data/addrd/$chat_id/media/audio";


$files = scandir($links);
$files_media = scandir($media);
$files_media_contact = scandir($media_contact);
$files_media_document = scandir($media_document);
$files_media_video = scandir($media_video);
$files_media_videonote = scandir($media_videonote);
$files_media_photo = scandir($media_photo);
$files_media_sticker = scandir($media_sticker);
$files_media_audio = scandir($media_audio);

foreach ($files as $file) {
if(is_file($links . "/" . $file)){
	unlink ($links . "/" .$file);
}
}
foreach ($files_media as $filemedia) {
if(is_file($media . "/" . $filemedia)){
	unlink ($media . "/" .$filemedia);
}
}
foreach ($files_media_contact as $file_media_contact) {
if(is_file($media_contact . "/" . $file_media_contact)){
	unlink ($media_contact . "/" .$file_media_contact);
}
}
foreach ($files_media_document as $file_media_document) {
if(is_file($media_document . "/" . $file_media_document)){
	unlink ($media_document . "/" .$file_media_document);
}
}
foreach ($files_media_video as $file_media_video) {
if(is_file($media_video . "/" . $file_media_video)){
	unlink ($media_video . "/" .$file_media_video);
}
}
foreach ($files_media_videonote as $file_media_videonote) {
if(is_file($media_videonote . "/" . $file_media_videonote)){
	unlink ($media_videonote . "/" .$file_media_videonote);
}
}
foreach ($files_media_photo as $file_media_photo) {
if(is_file($media_photo . "/" . $file_media_photo)){
	unlink ($media_photo . "/" .$file_media_photo);
}
}
foreach ($files_media_sticker as $file_media_sticker) {
if(is_file($media_sticker . "/" . $file_media_sticker)){
	unlink ($media_sticker . "/" . $file_media_sticker);
}
}
foreach ($files_media_audio as $file_media_audio) {
if(is_file($media_audio . "/" . $file_media_audio)){
	unlink ($media_audio . "/" . $file_media_audio);
}
}
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"*✓ تم مسح كل الردود *",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
file_put_contents("data/addrd/$chat_id/getrd.txt", "");
}


if($text == "الردود" and $get_rd != NULL and $get_rd != "" and $get_rd != " " and $get_rd != "\n\n" and $get_rd != "\n" and $get_rd != "\n\n\n" and $get_rd != "\n\n\n\n" and $get_rd != "\n\n\n\n\n" and $get_rd != "\n\n\n\n\n\n"){
	bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"*ردود البوت في المجموعه  :

$get_rd

➖➖➖*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}
if($text == "الردود" and $get_rd == NULL || $get_rd == "" || $get_rd == " " || $get_rd == "\n\n" || $get_rd == "\n" || $get_rd == "\n\n\n" || $get_rd == "\n\n\n\n" || $get_rd == "\n\n\n\n\n" || $get_rd == "\n\n\n\n\n\n"){
	bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"*لا يوجد ردود مضافه حاليا 
*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}
}
if( $text  == "مسح المكتومين" or $text == "مسح المكاتيم" or $text=="،،") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
$silent = $settings["silentlist"];
for($z = 0;$z <= count($silent)-1;$z++){
 bot('restrictChatMember',[
   'user_id'=>$silent[$z],   
   'chat_id'=>$chat_id,
   'can_post_messages'=>true,
   'can_add_web_page_previews'=>false,
   'can_send_other_messages'=>true,
   'can_send_media_messages'=>true,
         ]);
}
	  bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"  
بواسطهةة $keees
تم تنظيف سلة المكتومين
➖
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
unset($settings["silentlist"]);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
/////////////////////////ممحيبس/////////////////
if($text=="محيبس"){
bot('sendmessage',[
  'chat_id'=>$chat_id, 
  'text'=>"
  ➀        ➁       ➂
↓      ↓     ↓     
👊 ‹› 👊 ‹› 👊
 ➃         ➃      ➅
↓      ↓     ↓
👊 ‹› 👊 ‹› 👊 
  
 ◉︙ اختر لأستخراج المحيبس الايد التي تحمل المحيبس 
 ◉︙ الفائز يحصل على { 3 } من النقاط
  ",
  'reply_to_message_id'=>$message->message_id, 
  ]);
  }
  if($text=="بات"){
 bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"
➀        ➁       ➂
↓      ↓     ↓
👊 ‹› 👊 ‹› 👊
➃         ➃      ➅
↓      ↓     ↓
👊 ‹› 👊 ‹› 👊 

◉︙ اختر لأستخراج المحيبس الايد التي تحمل المحيبس 
◉︙ الفائز يحصل على { 3 } من النقاط
",
'reply_to_message_id'=>$message->message_id, 
]);
 }
if($text=="1"){
 bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"
◉︙ للاسف لقد خسرت 
◉︙ المحيبس بل ايد رقم { 2 }
◉︙ حاول مره اخرى للعثور على المحيبس
",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="2"){
  bot('sendmessage',[
 'chat_id'=>$chat_id, 
 'text'=>"
 ◉︙ للاسف لقد خسرت 
 ◉︙ المحيبس بل ايد رقم { 5 }
 ◉︙ حاول مره اخرى للعثور على المحيبس
 ",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 if($text=="5"){
  bot('sendmessage',[
 'chat_id'=>$chat_id, 
 'text'=>"
 ◉︙ للاسف لقد خسرت 
 ◉︙ المحيبس بل ايد رقم { 3 }
 ◉︙ حاول مره اخرى للعثور على المحيبس
 ",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 if($text=="3"){
  bot('sendmessage',[
 'chat_id'=>$chat_id, 
 'text'=>"
 ◉︙ للاسف لقد خسرت 
 ◉︙ المحيبس بل ايد رقم { 1 }
 ◉︙ حاول مره اخرى للعثور على المحيبس
 ",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 if($text=="4"){
  bot('sendmessage',[
 'chat_id'=>$chat_id, 
 'text'=>"
 ◉︙ مبروك فزت وطلعت المحيبس بل ايد رقم { 4 }
  ◉︙ لقد حصلت على { 3 }من نقاط يمكنك استبدالهن برسائل
 ",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 if($text=="6"){
  bot('sendmessage',[
 'chat_id'=>$chat_id, 
 'text'=>"
 ◉︙ مبروك فزت وطلعت المحيبس بل ايد رقم { 6 }
 ◉︙ لقد حصلت على { 3 }من نقاط يمكنك استبدالهن برسائل
 ",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 if($text=="طك 5"){
  bot('sendmessage',[
 'chat_id'=>$chat_id, 
 'text'=>"
 ✊🏻 هاي؟
 ",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 if($text=="اي هاي"){
  bot('sendmessage',[
 'chat_id'=>$chat_id, 
 'text'=>"
 🖐🏻 فارغه ويرجع بسم الدوله
 ",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
//////////////end ///////////
if($text=="انجب" and $you == "creator"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"حاظر تاج راسي انجبيت 
",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="انجب" and $you == "administrator"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"فوك ما مصعدك ادمن و تكلي انجب  ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="انجب" and $you == "member"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"انجب انته لا تندفر ",
'reply_to_message_id'=>$message->message_id, 
]);
}
$me = $message->reply_to_message; 
$mem = $me->message_id;
$MARKS = explode('كله',$text);
if($MARKS){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$MARKS[1],
'reply_to_message_id'=>$mem,
]);
}
$MARKS = explode('كول',$text);
if($MARKS){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$MARKS[1],
]);
}
$u = explode("\n",file_get_contents("memb.txt"));
$m = count($u)-1;
$modxe = file_get_contents("usr.txt");
if ($update && !in_array($chat_id, $u)) {
    file_put_contents("memb.txt", $chat_id."\n",FILE_APPEND);
  }
if($text == '/admin' and $for == $sudo){ 
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>'◈￤ آهہ‏‏لآ عزيزي آلمـطـور 
◈￤ آنتهہ‏‏ آلمـطـور آلآسـآسـي هہ‏‏نآ 
...

◉︙ تسـتطـيع‏‏ آلتحگم بگل آلآوآمـر آلمـمـوجودهہ‏‏ بآلگيبورد
◉︙ فقط آضـغط ع آلآمـر آلذي تريد تنفيذهہ‏‏', 
'reply_markup'=>json_encode([ 
'keyboard'=>[ 
[ 
['text'=>'◈￤ ايديك •'] ,['text'=>'◈￤ ضع كليشه المطور'] ,['text'=>'◈￤ تحديث السورس'] 
], 
[
['text'=>'◈￤ الملفات'] ,['text'=>'◈￤ اذاعه •'] ,['text'=>'◈￤ اذاعه خاص']
], 
[ 
['text'=>'◈￤ فحص الكروبات القليله •'] ,  ['text'=>'◈￤ عدد الكروبات •'] ,['text'=>'🆔¦ تغير اسم البوت •'] 
], 
[ 
], 
[ 
['text'=>'◈￤ اذاعه عام'] ,['text'=>'◈￤ اذاعه عام توجيه'] ,['text'=>'◈￤ اذاعه خاص توجيه'] 
], 
[ 
], 
[ 
['text'=>'◈￤ الاحصائيات'] ,['text'=>'◈￤ المحظورين عام •'] ,['text'=>'◈￤ المكتومين عام •'] 
], 
[ 
['text'=>'◈￤  المساعدة •'] ,  ['text'=>'◈￤ روابط الكروبات •'] 
], 
[ 
['text'=>'◈￤  $name •'] ,['text'=>'🆔¦ ايديك •'] ,['text'=>'◈￤ قناة $name •']

], 
[ 
],  
] 
]) 
]); 
}
/////////////////////////بنل المطور + لتخمط وتغير حقوق ضلعي/////////// الاذاعههه/////


$update     = json_decode(file_get_contents('php://input'));
$message = $update->message;
$message_id = $update->message->message_id;
$text           = $message->text;
$chat_id     = $message->chat->id;
$user          = $update->message->from->username;
$from_id     = $message->from->id;
$from_user = $message->from->username;
mkdir("Fri3nd_s");

$message_id = $message->message_id;
$gp_get = file_get_contents("Fri3nd_s/groups.txt");
$groups = explode("\n", $gp_get);
$GG1ZZ = file_get_contents("Fri3nd_s/iBadlz.txt");
$pirvate = explode("\n",file_get_contents("Fri3nd_s/pirvate.txt"));
$forward = $update->message->forward_from;
if($message and !in_array($chat_id, $groups)){
file_put_contents("Fri3nd_s/groups.txt", "$chat_id\n",FILE_APPEND);
bot("sendmessage",[
'chat_id'=>$chat_id,
'text'=>" ",
]);
}elseif($message and in_array($chat_id, $groups)) {
bot("sendmessage",[
'chat_id'=>$chat_id,
'text'=>" ",
]);
}

if($text == "◈￤ اذاعه عام توجيه" || $text == "اذاعه عام بالتوجيه" || $text == "اذاعه للكل بالتوجيه" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/iBadlz.txt","iBadlz");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    ◈￤ اهلا عزيزي الـمطور ، 
    ◈￤ قم بارسال التوجيه لعمل اذاعه",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "iBadlz" and $from_id == $sudo ){
  for($i=0;$i<count($groups);$i++){
bot('ForwardMessage',[
 'chat_id'=>$groups[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message_id,
 ]);
} 
$MOhaMMed = count($pirvate)-1;
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"
◈￤ اهلا عزيزي الـمطور الاساسي
◈￤ تم توجيه رسالتك الى $MOhaMMed عضو ، وجميع مجموعات البوت ",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id
   ]);
 unlink("Fri3nd_s/iBadlz.txt");
} 







if($message and !in_array($from_id, $pirvate)){
file_put_contents("Fri3nd_s/pirvate.txt", "$from_id\n",FILE_APPEND);
bot("sendmessage",[
'chat_id'=>$chat_id,
'text'=>" ",
]);
}elseif($message and in_array($from_id, $pirvate)) {
bot("sendmessage",[
'chat_id'=>$chat_id,
'text'=>" ",
]);
}



if($text == "◈￤ اذاعه خاص" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/iBadlz.txt","JJ119");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
◈￤ اهلا عزيزي الـمطور ، قم بأرسال رسالتك
◈￤ ملاحظةهہ : يمكنك استعمال الماركداون ،! *",
'parse_mode'=>"MarkDown",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "JJ119" and $from_id == $sudo ){
    for ($i=0; $i<count($pirvate); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$pirvate[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
 file_put_contents("Fri3nd_s/iBadlz.txt","MMoHaMMeD");
} 
$MOhaMMed = count($pirvate)-1;
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"
◈￤ اهلا عزيزي الـمطور ، 
◈￤ تم ارسال رسالتك الى $MOhaMMed عضو ",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id
          ]);
}
if ($text == "◈￤ اذاعه عام" || $text == "اذاعه عام" || $text == "اذاعه" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/iBadlz.txt","LE_C4_KR");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
◈￤ اهلا عزيزي الـمطور الاساسي قم بأرسال رسالتك
◈￤ ملاحظةهہ : يمكنك استعمال الماركداون ",
'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "LE_C4_KR" and $from_id == $sudo ){
    for ($i=0; $i<count($groups); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$groups[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,

]);
 unlink("Fri3nd_s/iBadlz.txt");
} 
$MoHaMMed = count($private)-1;
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"
◈￤ اهلا عزيزي الـمطور الاساسي
◈￤ تم ارسال رسالتك الى $MoHaMMed عضو وجميع مجموعات البوت ،ء*",
 'parse_mode'=>"MarkDown",
          'reply_to_message_id'=>$message->message_id
          ]);
}

if($text == "◈￤اذاعه خاص توجيه" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/iBadlz.txt","od_1j");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    ◈￤ مرحبا عزيزي المطور الاساسي
◈￤ قم بارسال رسالتك للقيام بلاذاعه",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "od_1j" and $from_id == $sudo ){
for($i=0;$i<count($pirvate);$i++){
bot('forwardMessage',[
 'chat_id'=>$pirvate[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message->message_id,
 ]);
} 
$MOhaMMed = count($pirvate)-1;
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"
◈￤ اهلا عزيزي الـمطور الاساسي
◈￤ تم توجيه رسالتك الى $MOhaMMed  عضو",
'parse_mode'=>"MARKDOWN",
          'reply_to_message_id'=>$message->message_id
   ]);
 unlink("Fri3nd_s/iBadlz.txt");
}
/////////////نهاية الاذاعه///////////////
$sudo2 = file_get_contents("data/sudo.txt");
if($from_id == $sudo){
if($text=="◈￤ ضع كليشه المطور"){
     file_put_contents("data//setengs.txt", "set");
     bot('sendMessage',[
         'chat_id'=>$chat_id,
         'text'=>"◈￤ ارسل الكليشه",
         'reply_to_message_id'=>$message->message_id
     ]);
 }
 if($text !== "ضع كليشه المطور" && $text == "$text" and file_exists("data/setengs.txt")){
 file_put_contents("data/sudo.txt","$text");
     bot('sendMessage',[
         'chat_id'=>$chat_id,
         'text'=>"◈￤ تم التغير الى :- $text",
         'reply_to_message_id'=>$message->message_id
     ]);
     unlink("data/setengs.txt");
 }
}

if($text == "المطور" or $text == 'مطور'){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>"$sudo2",
'reply_to_message_id'=>$message->message_id
]);
}

if($text == "$namebots"){
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>$jasmea[$reply_as],
'reply_to_message_id'=>$message->message_id
]);
}

///////sudo المطور p_pppp///////////

$left = explode("\n", $gp_left);
$gp_get = file_get_contents("data/groups.txt");
$groups = explode("\n", $gp_get);
if($text == "◉︙ الاحصائيات" and $from_id == $sudo){
$m = count($left)-1;
$c = count($groups)-1;
$r = $c - $m;
echo"$r";
$memocount = count($memopv) -1;
bot('sendMessage',[
'chat_id'=>$chat_id,
"text"=>"
◈￤ عدد الكلي للمجموعات « *$c* »
◈￤ عدد المجموعات الغير مفعله « *$m* »
◈￤ عدد المجموعات المدفوعه « *0* »
◈￤ عدد المجموعات الصحيح « *$r* »
◈￤ عدد اعضاء الخاص :- $memocount",
'reply_to_message_id'=>$message->message_id
]);
}

///////////الاحصائيات p_pppp////////////
if($text == "◉︙ عدد الكروبات •"){
  $c = count($groups);
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    ◉︙ عدد المجموعات المفعله ↫ ❪ $c ❫
    ◉︙ عدد المشتركين ↫ 
    ✓   ➼"
    ]);
 }
$id = $message->from->id;
if($text == "🆔¦ ايديك •"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" $id ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "◉︙ اسمك •"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" $name ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "◉︙ مطور الملف •"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"◉︙   مـطـور الملف : @TT54T ️ ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "السورس"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"◈￤ اهلا بك في سورس ميمو بلغة  php

◈￤MEMO

◈￤ لتنصيب السورس @TT54T 
◈￤  قناة شروحات السورس @IIMemoll
◈￤ ملفات السورس @TVVTP

◈￤ مطور السورس @TT54T ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "◉︙ معرفك •"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" @$user ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "◉︙  $name •" and $for == $sudo){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" ◉︙ مـطـور البوت : @$user  ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "◉︙ المشتركين •" and $from_id == $sudo){
$m = count($u)-1;
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> "◉︙ عدد مشتركين البوت :- { $m }" ,
'reply_to_message_id'=>$message->message_id,
]);
}

if($text == "◉︙ قناة $name •"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"◉︙    قناة مـطـور الملف : @IIMemoll  ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "◉︙  المساعدة •"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"💯¦ للمساعدة او اي أراء او افكار تواصل مع مطور الملف @TT54T √",
'reply_to_message_id'=>$message->message_id, 
]);
}
$export = json_decode(file_get_contents("https://api.telegram.org/bot$API_KEY/exportChatInviteLink?chat_id=$chat_id"));
$l = $export->result;
if($you == "creator" or $you == "administrator" or $from_id == $sudo){
if ($text == "تفعيل" or $text == '/add' and  $you == "administrator") {
$result2 = $json2->result;
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>" ",
'reply_to_message_id'=>$message->message_id,
]);
bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>"
◉︙ قام احد المدراء بتفعيل البوت
◉︙ Member Name( $name )
◉︙  Groub Link ( $l )
◉︙ Groub Name  $gp_name  】
◉︙ Groub Id » $chat_id
◉︙ member count【  $result2  】 
◉︙ by » $name
◉︙ user » @$user
◉︙ Chat Id $chat_id 🗣

",
]);
}
}
if($text == "ا"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" $id ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "معرفي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" @$user ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "اسمي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" $name ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "بوت"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"أسمي ميمو",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "اكرهك"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ديله هوا بلكوه يطيقك",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "باي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"بايات  $name",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == 'ميمو'){
$rand = array('سويت هواي شغلات سخيفه بحياتي بس عمري مصحت على واحد وكلتله انجب ','نعم حبي ','اشتعلو اهل ميمو شتريد ','لك فداك ميمو حبيبتي انتي اموووح ','بووووووووو 👻 ها ها فزيت شفتك شفتك لا تحلف ','هياتني اجيت ️','راجع المكتب حبيبي عبالك ميمو: سهل تحجي ويا ','باقي ويتمدد ','لك دبدل ملابسي اطلع برااااا  ناس متستحي','دا اشرب جاي تعال غير وكت ','هوه غير يسكت عاد ها شتريد ','انت مو اجيت البارحه تغلط عليه ');
$ra = array_rand($rand ,1);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$rand[$ra],
'reply_to_message_id'=>$message_id
]);
}

if($re and $re_id != $bot and $re_id != $sudo and $text=="تقييد"){
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"◉︙ العضو » @$re_user
◉︙ ID » ( $re_id )
◉︙ تم تقييده 
",
  'reply_to_message_id'=>$mid
      ]);
    bot('restrictChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$re_id
      ]);
  }

mkdir(id/$chat_id);
if($text == "فتح الايدي"){
file_put_contents("id/$chat_id/id.txt", "$id");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"<b>تم فتح الايدي بنجاح </b>",
    'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"html",
]);
}
if($text == "قفل الايدي"){
unlink("id/$chat_id/id.txt");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"<b>تم قفل الايدي بنجاح </b>",
    'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"html",
]);
}
if (preg_match('/(حظر عام)(.*)/', $text) and $from_id == $sudo) {
  $text = str_replace('حظر عام', '', $text);
  $bans[] = trim($text,'@');
  file_put_contents('bans.json', $text);
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>'~> '.$text."\n - تم حظره عام ،",
    'reply_to_message_id'=>$message->message_id
  ]);
}
if ($message and in_array($message->from->username, $bans) or in_array($message->from->id, $bans)) {
  bot('kickchatmember',[
    'chat_id'=>$chat_id,
    'user_id'=>$message->from->id
  ]);
}


$id = $message->from->id;
$iBadlz = $update->message->reply_to_message->from->id;
$TlllllT = $update->message->reply_to_message->from->username;
if($text =="رفع ادمن" or $text =="اد" and $id == $sudo){
bot('promoteChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$iBadlz,
'can_delete_messages'=>true,
'can_invite_users'=>true,
'can_restrict_members'=>true,
'can_pin_messages'=>true,
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
◉︙العضو » @$TlllllT
◉︙ الايدي » ( $iBadlz )
◉︙ تم رفعه ادمن بالمجموعه ،!
",
'reply_to_message_id'=>$message->message_id,
]);
}elseif($text =="رفع ادمن" or $text =="اد" and $id != $sudo){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=> "
◉︙ انت لست مدير او منشئ 
◉︙ لايمكن اتمام الامر
",
'reply_to_message_id'=>$message->message_id,
]);
}
if($text =="الغاء تقيد" || $text =="الغاء التقيد" || $text =="الغاء التقييد" || $text =="الغاء تقييد" and $id == $sudo){
bot('promoteChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$iBadlz,
'can_send_messages'=>true,
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
◉︙ العضو » @$TlllllT
◉︙ الايدي » ( $iBadlz )
◉︙ تم الغاء تقيده من المجموعه ،!
",
'reply_to_message_id'=>$message->message_id,
]);
}elseif($text =="الغاء تقيد" || $text =="الغاء التقيد" || $text =="الغاء التقييد" || $text =="الغاء تقييد" and $id != $sudo){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
◉︙ انت لست مدير او منشئ او ادمن
◉︙ لايمكن اتمام الامر
",
'reply_to_message_id'=>$message->message_id,
]);
}
if( $text=="تقيد" || $text == "تقييد" and $id == $sudo){
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"
◉︙ NaMe » @$TlllllT
◉︙ ID » ( $iBadlz )
◉︙ تم تقيده من المجموعه ،!
",
'reply_to_message_id'=>$message->message_id,
      ]);
    bot('restrictChatMember',[
        'chat_id'=>$chat_id,
        'user_id'=>$iBadlz
      ]);
  }elseif( $text=="تقيد" || $text == "تقييد" and $id != $sudo){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
◉︙ انت لست مدير او منشئ او ادمن
◉︙ لايمكن اتمام الامر
",
'reply_to_message_id'=>$message->message_id,
]);
}
  

      //////////////////////////////////////////////////////// الاعاااااااب/////////////////
      $EN = explode("EN", $text);
      if($EN[1]){
      $EN = str_replace('q', '•🇶', $EN);
      $EN = str_replace('w', '•🇼', $EN);
      $EN = str_replace('e', '•🇪', $EN);
      $EN = str_replace('r', '•🇷', $EN);
      $EN = str_replace('t', '•🇹', $EN);
      $EN = str_replace('y', '•🇾', $EN);
      $EN = str_replace('u', '•🇻', $EN);
      $EN = str_replace('i', '•🇮', $EN);
      $EN = str_replace('o', '•🇴', $EN);
      $EN = str_replace('p', '•🇵', $EN);
      $EN = str_replace('a', '•🇦', $EN);
      $EN = str_replace('s', '•🇸', $EN);
      $EN = str_replace('d', '•🇩', $EN);
      $EN = str_replace('f', '•🇫', $EN);
      $EN = str_replace('g', '•🇬', $EN);
      $EN = str_replace('h', '•🇭', $EN);
      $EN = str_replace('j', '•🇯', $EN);
      $EN = str_replace('k', '•🇰', $EN);
      $EN = str_replace('l', '•🇱', $EN);
      $EN = str_replace('z', '•🇿', $EN);
      $EN = str_replace('x', '•🇽', $EN);
      $EN = str_replace('c', '•🇨', $EN);
      $EN = str_replace('v', '•🇺', $EN);
      $EN = str_replace('b', '•🇧', $EN);
      $EN = str_replace('n', '•🇳', $EN);
      $EN = str_replace('m', '•🇲', $EN);
      bot('sendmessage',[
      'chat_id'=>$chat_id,
      'text'=>$EN[1],
       ]);
       }
       $EN0 = explode("EN", $text);
       if($EN0[1]){
      $EN0 = str_replace('q', 'Ⴓ' , $EN0);
        $EN0 = str_replace('w', 'ᗯ' , $EN0);
      $EN0 = str_replace('e', 'ᕮ' , $EN0);
        $EN0 = str_replace('r', 'ᖇ' , $EN0);
      $EN0 = str_replace('t', 'ͳ' , $EN0);
        $EN0 = str_replace('y', 'ϒ' , $EN0);
      $EN0 = str_replace('u', 'ᘮ' , $EN0);
        $EN0 = str_replace('i', 'ᓰ' , $EN0);
      $EN0 = str_replace('o', '〇' , $EN0);
        $EN0 = str_replace('p', 'ᖘ' , $EN0);
      $EN0 = str_replace('a', 'ᗩ' , $EN0);
        $EN0 = str_replace('s', 'ᔕ' , $EN0);
      $EN0 = str_replace('d', 'ᗪ' , $EN0);
        $EN0 = str_replace('f', 'Բ' , $EN0);
      $EN0 = str_replace('g', 'ᘐ' , $EN0);
        $EN0 = str_replace('h', 'ᕼ' , $EN0);
      $EN0 = str_replace('j', 'ᒎ' , $EN0);
        $EN0 = str_replace('k', 'Ḱ' , $EN0);
      $EN0 = str_replace('l', 'ᒪ' , $EN0);
        $EN0 = str_replace('z', 'Ꙁ' , $EN0);
      $EN0 = str_replace('x', 'Ꮖ' , $EN0);
        $EN0 = str_replace('c', 'ᑕ' , $EN0);
      $EN0 = str_replace('v', 'ᐯ' , $EN0);
        $EN0 = str_replace('b', 'ᙖ' , $EN0);
        $EN0 = str_replace('n', 'ᘉ' , $EN0);
      $EN0 = str_replace('m', 'ᙢ' , $EN0);
      bot('sendmessage',[
       'chat_id'=>$chat_id,
       'text'=>$y[1],
       ]);
       }
       $EN1 = explode("EN", $text);
       if($EN1[1]){
      $EN1 = str_replace('q', 'q' , $EN1);
        $EN1 = str_replace('w', 'ω' , $EN1);
      $EN1 = str_replace('e', 'ε' , $EN1);
        $EN1 = str_replace('r', 'я' , $EN1);
      $EN1 = str_replace('t', 'т' , $EN1);
        $EN1 = str_replace('y', 'ү' , $EN1);
      $EN1 = str_replace('u', 'υ' , $EN1);
        $EN1 = str_replace('i', 'ι' , $EN1);
      $EN1 = str_replace('o', 'σ' , $EN1);
        $EN1 = str_replace('p', 'ρ' , $EN1);
      $EN1 = str_replace('a', 'α' , $EN1);
        $EN1 = str_replace('s', 's' , $EN1);
      $EN1 = str_replace('d', '∂' , $EN1);
        $EN1 = str_replace('f', 'ғ' , $EN1);
      $EN1 = str_replace('g', 'g' , $EN1);
        $EN1 = str_replace('h', 'н' , $EN1);
      $EN1 = str_replace('j', 'נ' , $EN1);
        $EN1 = str_replace('k', 'к' , $EN1);
      $EN1 = str_replace('l', 'ℓ' , $EN1);
        $EN1 = str_replace('z', 'z' , $EN1);
      $EN1 = str_replace('x', 'x' , $EN1);
        $EN1 = str_replace('c', 'c' , $EN1);
      $EN1 = str_replace('v', 'v' , $EN1);
        $EN1 = str_replace('b', 'в' , $EN1);
        $EN1 = str_replace('n', 'η' , $EN1);
      $EN1 = str_replace('m', 'м' , $EN1);
      bot('sendmessage',[
       'chat_id'=>$chat_id,
       'text'=>$EN1[1],
       
       ]);
       }
       $EN2 = explode("EN", $text);
       if($EN2[1]){
      $EN2 = str_replace('q', 'ᵠ' , $EN2);
        $EN2 = str_replace('w', 'ʷ' , $EN2);
      $EN2 = str_replace('e', 'ᵉ' , $EN2);
        $EN2 = str_replace('r', 'ʳ' , $EN2);
      $EN2 = str_replace('t', 'ᵗ' , $EN2);
        $EN2 = str_replace('y', 'ʸ' , $EN2);
      $EN2 = str_replace('u', 'ᵘ' , $EN2);
        $EN2 = str_replace('i', 'ᶤ' , $EN2);
      $EN2 = str_replace('o', 'ᵒ' , $EN2);
        $EN2 = str_replace('p', 'ᵖ' , $EN2);
      $EN2 = str_replace('a', 'ᵃ' , $EN2);
        $EN2 = str_replace('s', 'ˢ' , $EN2);
      $EN2 = str_replace('d', 'ᵈ' , $EN2);
        $EN2 = str_replace('f', 'ᶠ' , $EN2);
      $EN2 = str_replace('g', 'ᵍ' , $EN2);
        $EN2 = str_replace('h', 'ʰ' , $EN2);
      $EN2 = str_replace('j', 'ʲ' , $EN2);
        $EN2 = str_replace('k', 'ᵏ' , $EN2);
      $EN2 = str_replace('l', 'ˡ' , $EN2);
        $EN2 = str_replace('z', 'ᶻ' , $EN2);
      $EN2 = str_replace('x', 'ˣ' , $EN2);
        $EN2 = str_replace('c', 'ᶜ' , $EN2);
      $EN2 = str_replace('v', 'ᵛ' , $EN2);
        $EN2 = str_replace('b', 'ᵇ' , $EN2);
        $EN2 = str_replace('n', 'ᶰ' , $EN2);
      $EN2 = str_replace('m', 'ᵐ' , $EN2);
      bot('sendmessage',[
       'chat_id'=>$chat_id,
       'text'=>$EN2[1],
       
       ]);
       }
   $EN3 = explode("EN", $text);
       if($EN3[1]){
      $EN3 = str_replace('q', 'Θ' , $EN3);
        $EN3 = str_replace('w', 'ẁ' , $EN3);
      $EN3 = str_replace('e', 'ë' , $EN3);
        $EN3 = str_replace('r', 'я' , $EN3);
      $EN3 = str_replace('t', 'ť' , $EN3);
        $EN3 = str_replace('y', 'y' , $EN3);
      $EN3 = str_replace('u', 'ע' , $EN3);
        $EN3 = str_replace('i', 'į' , $EN3);
      $EN3 = str_replace('o', 'ð' , $EN3);
        $EN3 = str_replace('p', 'ρ' , $EN3);
      $EN3 = str_replace('a', 'à' , $EN3);
        $EN3 = str_replace('s', 'ś' , $EN3);
      $EN3 = str_replace('d', 'ď' , $EN3);
        $EN3 = str_replace('f', '∫' , $EN3);
      $EN3 = str_replace('g', 'ĝ' , $EN3);
        $EN3 = str_replace('h', 'ŋ' , $EN3);
      $EN3 = str_replace('j', 'Ј' , $EN3);
        $EN3 = str_replace('k', 'қ' , $EN3);
      $EN3 = str_replace('l', 'Ŀ' , $EN3);
        $EN3 = str_replace('z', 'ź' , $EN3);
      $EN3 = str_replace('x', 'א' , $EN3);
        $EN3 = str_replace('c', 'ć' , $EN3);
      $EN3 = str_replace('v', 'V' , $EN3);
        $EN3 = str_replace('b', 'Ђ' , $EN3);
        $EN3 = str_replace('n', 'ŋ' , $EN3);
      $EN3 = str_replace('m', 'm' , $EN3);
      bot('sendmessage',[
       'chat_id'=>$chat_id,
       'text'=>$EN3[1],
       
       ]);
       }
   $EN3 = explode("EN", $text);
       if($EN3[1]){
      $EN3 = str_replace('q', 'Ҩ' , $EN3);
        $EN3 = str_replace('w', 'Щ' , $EN3);
      $EN3 = str_replace('e', 'Є' , $EN3);
        $EN3 = str_replace('r', 'R' , $EN3);
      $EN3 = str_replace('t', 'ƚ' , $EN3);
        $EN3 = str_replace('y', '￥' , $EN3);
      $EN3 = str_replace('u', 'Ц' , $EN3);
        $EN3 = str_replace('i', 'Ī' , $EN3);
      $EN3 = str_replace('o', 'Ø' , $EN3);
        $EN3 = str_replace('p', 'P' , $EN3);
      $EN3 = str_replace('a', 'Â' , $EN3);
        $EN3 = str_replace('s', '$' , $EN3);
      $EN3 = str_replace('d', 'Ð' , $EN3);
        $EN3 = str_replace('f', 'Ŧ' , $EN3);
      $EN3 = str_replace('g', 'Ǥ' , $EN3);
        $EN3 = str_replace('h', 'Ħ' , $EN3);
      $EN3 = str_replace('j', 'ʖ' , $EN3);
        $EN3 = str_replace('k', 'Қ' , $EN3);
      $EN3 = str_replace('l', 'Ŀ' , $EN3);
        $EN3 = str_replace('z', 'Ẕ' , $EN3);
      $EN3 = str_replace('x', 'X' , $EN3);
        $EN3 = str_replace('c', 'Ĉ' , $EN3);
      $EN3 = str_replace('v', 'V' , $EN3);
        $EN3 = str_replace('b', 'ß' , $EN3);
        $EN3 = str_replace('n', 'И' , $EN3);
      $EN3 = str_replace('m', 'ⴅ' , $EN3);
      bot('sendmessage',[
       'chat_id'=>$chat_id,
       'text'=>$EN3[1],
       
       ]);
       }
    $EN5 = explode("EN", $text);
       if($EN5[1]){
      $EN5 = str_replace('q', 'Ҩ' , $EN5);
        $EN5 = str_replace('w', 'Ɯ' , $EN5);
      $EN5 = str_replace('e', 'Ɛ' , $EN5);
        $EN5 = str_replace('r', '尺' , $EN5);
      $EN5 = str_replace('t', 'Ť' , $EN5);
        $EN5 = str_replace('y', 'Ϥ' , $EN5);
      $EN5 = str_replace('u', 'Ц' , $EN5);
        $EN5 = str_replace('i', 'ɪ' , $EN5);
      $EN5 = str_replace('o', 'Ø' , $EN5);
        $EN5 = str_replace('p', 'þ' , $EN5);
      $EN5 = str_replace('a', 'Λ' , $EN5);
        $EN5 = str_replace('s', 'ら' , $EN5);
      $EN5 = str_replace('d', 'Ð' , $EN5);
        $EN5 = str_replace('f', 'F' , $EN5);
      $EN5 = str_replace('g', 'Ɠ' , $EN5);
        $EN5 = str_replace('h', 'н' , $EN5);
      $EN5 = str_replace('j', 'ﾌ' , $EN5);
        $EN5 = str_replace('k', 'Қ' , $EN5);
      $EN5 = str_replace('l', 'Ł' , $EN5);
        $EN5 = str_replace('z', 'Ẕ' , $EN5);
      $EN5 = str_replace('x', 'χ' , $EN5);
        $EN5 = str_replace('c', 'ㄈ' , $EN5);
      $EN5 = str_replace('v', 'Ɣ' , $EN5);
        $EN5 = str_replace('b', 'Ϧ' , $EN5);
        $EN5 = str_replace('n', 'Л' , $EN5);
      $EN5 = str_replace('m', '௱' , $EN5);
      bot('sendmessage',[
       'chat_id'=>$chat_id,
       'text'=>$EN5[1],
       
       ]);
       }
      $EN6 = explode("EN", $text);
       if($EN6[1]){
      $EN6 = str_replace('q', 'Ⴓ' , $EN6);
        $EN6 = str_replace('w', 'Ш' , $EN6);
      $EN6 = str_replace('e', 'Σ' , $EN6);
        $EN6 = str_replace('r', 'Γ' , $EN6);
      $EN6 = str_replace('t', 'Ƭ' , $EN6);
        $EN6 = str_replace('y', 'Ψ' , $EN6);
      $EN6 = str_replace('u', 'Ʊ' , $EN6);
        $EN6 = str_replace('i', 'I' , $EN6);
      $EN6 = str_replace('o', 'Θ' , $EN6);
        $EN6 = str_replace('p', 'Ƥ' , $EN6);
      $EN6 = str_replace('a', 'Δ' , $EN6);
        $EN6 = str_replace('s', 'Ѕ' , $EN6);
      $EN6 = str_replace('d', 'D' , $EN6);
        $EN6 = str_replace('f', 'F' , $EN6);
      $EN6 = str_replace('g', 'G' , $EN6);
        $EN6 = str_replace('h', 'H' , $EN6);
      $EN6 = str_replace('j', 'J' , $EN6);
        $EN6 = str_replace('k', 'Ƙ' , $EN6);
      $EN6 = str_replace('l', 'L' , $EN6);
        $EN6 = str_replace('z', 'Z' , $EN6);
      $EN6 = str_replace('x', 'Ж' , $EN6);
        $EN6 = str_replace('c', 'C' , $EN6);
      $EN6 = str_replace('v', 'Ʋ' , $EN6);
        $EN6 = str_replace('b', 'Ɓ' , $EN6);
        $EN6 = str_replace('n', '∏' , $EN6);
      $EN6 = str_replace('m', 'Μ' , $EN6);
      bot('sendmessage',[
       'chat_id'=>$chat_id,
       'text'=>$EN6[1],
       
       ]);
       }
   $EN7 = explode("EN", $text);
       if($EN7[1]){
      $EN7 = str_replace('q', 'Q' , $EN7);
        $EN7 = str_replace('w', 'Щ' , $EN7);
      $EN7 = str_replace('e', '乇' , $EN7);
        $EN7 = str_replace('r', '尺' , $EN7);
      $EN7 = str_replace('t', 'ｲ' , $EN7);
        $EN7 = str_replace('y', 'ﾘ' , $EN7);
      $EN7 = str_replace('u', 'Ц' , $EN7);
        $EN7 = str_replace('i', 'ﾉ' , $EN7);
      $EN7 = str_replace('o', 'Ծ' , $EN7);
        $EN7 = str_replace('p', 'ｱ' , $EN7);
      $EN7 = str_replace('a', 'ﾑ' , $EN7);
        $EN7 = str_replace('s', '丂' , $EN7);
      $EN7 = str_replace('d', 'Ð' , $EN7);
        $EN7 = str_replace('f', 'ｷ' , $EN7);
      $EN7 = str_replace('g', 'Ǥ' , $EN7);
        $EN7 = str_replace('h', 'ん' , $EN7);
      $EN7 = str_replace('j', 'ﾌ' , $EN7);
        $EN7 = str_replace('k', 'ズ' , $EN7);
      $EN7 = str_replace('l', 'ﾚ' , $EN7);
        $EN7 = str_replace('z', '乙' , $EN7);
      $EN7 = str_replace('x', 'ﾒ' , $EN7);
        $EN7 = str_replace('c', 'ζ' , $EN7);
      $EN7 = str_replace('v', 'Џ' , $EN7);
        $EN7 = str_replace('b', '乃' , $EN7);
        $EN7 = str_replace('n', '刀' , $EN7);
      $EN7 = str_replace('m', 'ᄊ' , $EN7);
      bot('sendmessage',[
       'chat_id'=>$chat_id,
       'text'=>$EN7[1],
       
       ]);
       }
       $EN8 = explode("EN", $text);
       if($EN8[1]){
      $EN8 = str_replace('q', 'ợ' , $EN8);
        $EN8 = str_replace('w', 'ฬ' , $EN8);
      $EN8 = str_replace('e', 'є' , $EN8);
        $EN8 = str_replace('r', 'г' , $EN8);
      $EN8 = str_replace('t', 't' , $EN8);
        $EN8 = str_replace('y', 'ץ' , $EN8);
      $EN8 = str_replace('u', 'ย' , $EN8);
        $EN8 = str_replace('i', 'เ' , $EN8);
      $EN8 = str_replace('o', '๏' , $EN8);
        $EN8 = str_replace('p', 'թ' , $EN8);
      $EN8 = str_replace('a', 'ค' , $EN8);
        $EN8 = str_replace('s', 'ร' , $EN8);
      $EN8 = str_replace('d', '๔' , $EN8);
        $EN8 = str_replace('f', 'Ŧ' , $EN8);
      $EN8 = str_replace('g', 'ɠ' , $EN8);
        $EN8 = str_replace('h', 'ђ' , $EN8);
      $EN8 = str_replace('j', 'ן' , $EN8);
        $EN8 = str_replace('k', 'к' , $EN8);
      $EN8 = str_replace('l', 'l' , $EN8);
        $EN8 = str_replace('z', 'z' , $EN8);
      $EN8 = str_replace('x', 'א' , $EN8);
        $EN8 = str_replace('c', 'ς' , $EN8);
      $EN8 = str_replace('v', 'ⱴ' , $EN8);
        $EN8 = str_replace('b', '๒' , $EN8);
        $EN8 = str_replace('n', 'ภ' , $EN8);
      $EN8 = str_replace('m', '๓' , $EN8);
      bot('sendmessage',[
       'chat_id'=>$chat_id,
       'text'=>$EN8[1],
       
       ]);
       }
   $EN9 = explode("EN", $text);
       if($EN9[1]){
      $EN9 = str_replace('q', 'ҩ' , $EN9);
        $EN9 = str_replace('w', 'ω' , $EN9);
      $EN9 = str_replace('e', '૯' , $EN9);
        $EN9 = str_replace('r', 'Ր' , $EN9);
      $EN9 = str_replace('t', '੮' , $EN9);
        $EN9 = str_replace('y', 'ע' , $EN9);
      $EN9 = str_replace('u', 'υ' , $EN9);
        $EN9 = str_replace('i', 'ɿ' , $EN9);
      $EN9 = str_replace('o', '૦' , $EN9);
        $EN9 = str_replace('p', 'ƿ' , $EN9);
      $EN9 = str_replace('a', 'ค' , $EN9);
        $EN9 = str_replace('s', 'ς' , $EN9);
      $EN9 = str_replace('d', 'ძ' , $EN9);
        $EN9 = str_replace('f', 'Բ' , $EN9);
      $EN9 = str_replace('g', '૭' , $EN9);
        $EN9 = str_replace('h', 'Һ' , $EN9);
      $EN9 = str_replace('j', 'ʆ' , $EN9);
        $EN9 = str_replace('k', 'қ' , $EN9);
      $EN9 = str_replace('l', 'Ն' , $EN9);
        $EN9 = str_replace('z', 'ઽ' , $EN9);
      $EN9 = str_replace('x', '૪' , $EN9);
        $EN9 = str_replace('c', '८' , $EN9);
      $EN9 = str_replace('v', '౮' , $EN9);
        $EN9 = str_replace('b', 'ც' , $EN9);
        $EN9 = str_replace('n', 'Ո' , $EN9);
      $EN9 = str_replace('m', 'ɱ' , $EN9);
      bot('sendmessage',[
       'chat_id'=>$chat_id,
       'text'=>$EN9[1],
       
       ]);
       }
    $EN10 = explode("EN", $text);
       if($EN10[1]){
      $EN10 = str_replace('q', 'Ꝙ' ,$EN10);
        $EN10 = str_replace('w', 'Ѡ' ,$EN10);
      $EN10 = str_replace('e', 'Ɛ' ,$EN10);
        $EN10 = str_replace('r', 'Ɽ' ,$EN10);
      $EN10 = str_replace('t', 'Ͳ' ,$EN10);
        $EN10 = str_replace('y', 'Ỿ' ,$EN10);
      $EN10 = str_replace('u', 'Ʊ' ,$EN10);
        $EN10 = str_replace('i', 'ị' ,$EN10);
      $EN10 = str_replace('o', 'Ỗ' ,$EN10);
        $EN10 = str_replace('p', 'Ꝓ' ,$EN10);
      $EN10 = str_replace('a', 'Λ' ,$EN10);
        $EN10 = str_replace('s', 'Ṥ' ,$EN10);
      $EN10 = str_replace('d', 'δ' ,$EN10);
        $EN10 = str_replace('f', 'Բ' ,$EN10);
      $EN10 = str_replace('g', '₲' ,$EN10);
        $EN10 = str_replace('h', 'Ḩ' ,$EN10);
      $EN10 = str_replace('j', 'Ĵ' ,$EN10);
        $EN10 = str_replace('k', 'Ҡ' ,$EN10);
      $EN10 = str_replace('l', 'Ⱡ' ,$EN10);
        $EN10 = str_replace('z', 'Ꙃ' ,$EN10);
      $EN10 = str_replace('x', 'Ӿ' ,$EN10);
        $EN10 = str_replace('c', 'Ƈ' ,$EN10);
      $EN10 = str_replace('v', 'Ѵ' ,$EN10);
        $EN10 = str_replace('b', 'ß' ,$EN10);
        $EN10 = str_replace('n', 'ⴂ' ,$EN10);
      $EN10 = str_replace('m', 'ⴅ' ,$EN10);
       bot('sendmessage',[
       'chat_id'=>$chat_id,
       'text'=>$EN10[1],
       
       ]);
       }
    $EN11 = explode("EN", $text);
       if($EN11[1]){
      $EN11 = str_replace('q', 'ǫ' , $EN11);
        $EN11 = str_replace('w', 'ᴡ' , $EN11);
      $EN11 = str_replace('e', 'ᴇ' , $EN11);
        $EN11 = str_replace('r', 'ʀ' , $EN11);
      $EN11 = str_replace('t', 'ᴛ' , $EN11);
        $EN11 = str_replace('y', 'ʏ' , $EN11);
      $EN11 = str_replace('u', 'ᴜ' , $EN11);
        $EN11 = str_replace('i', 'ɪ' , $EN11);
      $EN11 = str_replace('o', 'ᴏ' , $EN11);
        $EN11 = str_replace('p', 'ᴘ' , $EN11);
      $EN11 = str_replace('a', 'ᴀ' , $EN11);
        $EN11 = str_replace('s', 'ѕ' , $EN11);
      $EN11 = str_replace('d', 'ᴅ' , $EN11);
        $EN11 = str_replace('f', 'ғ' , $EN11);
      $EN11 = str_replace('g', 'ɢ' , $EN11);
        $EN11 = str_replace('h', 'ʜ' , $EN11);
      $EN11 = str_replace('j', 'ᴊ' , $EN11);
        $EN11 = str_replace('k', 'ᴋ' , $EN11);
      $EN11 = str_replace('l', 'ʟ' , $EN11);
        $EN11 = str_replace('z', 'ᴢ' , $EN11);
      $EN11 = str_replace('x', 'х' , $EN11);
        $EN11 = str_replace('c', 'ᴄ' , $EN11);
      $EN11 = str_replace('v', 'ᴠ' , $EN11);
        $EN11 = str_replace('b', 'ʙ' , $EN11);
        $EN11 = str_replace('n', 'ɴ' , $EN11);
      $EN11 = str_replace('m', 'ᴍ' , $EN11);
      bot('sendmessage',[
       'chat_id'=>$chat_id,
       'text'=>$EN11[1],
       
       ]);
       }
    $EN12 = explode("EN", $text);
       if($EN12[1]){
      $EN12 = str_replace('q', 'Ｑ' , $EN12);
        $EN12 = str_replace('w', 'Ｗ' , $EN12);
      $EN12 = str_replace('e', 'Ｅ' , $EN12);
        $EN12 = str_replace('r', 'Ｒ' , $EN12);
      $EN12 = str_replace('t', 'Ｔ' , $EN12);
        $EN12 = str_replace('y', 'Ｙ' , $EN12);
      $EN12 = str_replace('u', 'Ｕ' , $EN12);
        $EN12 = str_replace('i', 'Ｉ' , $EN12);
      $EN12 = str_replace('o', 'Ｏ' , $EN12);
        $EN12 = str_replace('p', 'Ｐ' , $EN12);
      $EN12 = str_replace('a', 'Ａ' , $EN12);
        $EN12 = str_replace('s', 'Ｓ' , $EN12);
      $EN12 = str_replace('d', 'Ｄ' , $EN12);
        $EN12 = str_replace('f', 'Բ' , $EN12);
      $EN12 = str_replace('g', 'Ｇ' , $EN12);
        $EN12 = str_replace('h', 'Ｈ' , $EN12);
      $EN12 = str_replace('j', 'Ｊ' , $EN12);
        $EN12 = str_replace('k', 'Ｋ' , $EN12);
      $EN12 = str_replace('l', 'Ｌ' , $EN12);
        $EN12 = str_replace('z', 'Ｚ' , $EN12);
      $EN12 = str_replace('x', 'Ｘ' , $EN12);
        $EN12 = str_replace('c', 'С' , $EN12);
      $EN12 = str_replace('v', 'Ｖ' , $EN12);
        $EN12 = str_replace('b', 'Ｂ' , $EN12);
        $EN12 = str_replace('n', 'Ｎ' , $EN12);
      $EN12 = str_replace('m', 'Ⅿ' , $EN12);
      bot('sendmessage',[
       'chat_id'=>$chat_id,
       'text'=>$EN12[1],
       
       ]);
       }
    $EN13 = explode("EN", $text);
       if($EN13[1]){
      $EN13 = str_replace('q', 'Ǫ' , $EN13);
        $EN13 = str_replace('w', 'Ш' , $EN13);
      $EN13 = str_replace('e', 'Ξ' , $EN13);
        $EN13 = str_replace('r', 'Я' , $EN13);
      $EN13 = str_replace('t', '₮' , $EN13);
        $EN13 = str_replace('y', 'Џ' , $EN13);
      $EN13 = str_replace('u', 'Ǚ' , $EN13);
        $EN13 = str_replace('i', 'ł' , $EN13);
      $EN13 = str_replace('o', 'Ф' , $EN13);
        $EN13 = str_replace('p', 'ק' , $EN13);
      $EN13 = str_replace('a', 'Λ' , $EN13);
        $EN13 = str_replace('s', 'Ŝ' , $EN13);
      $EN13 = str_replace('d', 'Ð' , $EN13);
        $EN13 = str_replace('f', 'Ŧ' , $EN13);
      $EN13 = str_replace('g', '₲' , $EN13);
        $EN13 = str_replace('h', 'Ḧ' , $EN13);
      $EN13 = str_replace('j', 'J' , $EN13);
        $EN13 = str_replace('k', 'К' , $EN13);
      $EN13 = str_replace('l', 'Ł' , $EN13);
        $EN13 = str_replace('z', 'Ꙃ' , $EN13);
      $EN13 = str_replace('x', 'Ж' , $EN13);
        $EN13 = str_replace('c', 'Ͼ' , $EN13);
      $EN13 = str_replace('v', 'Ṽ' , $EN13);
        $EN13 = str_replace('b', 'Б' , $EN13);
        $EN13 = str_replace('n', 'Л' , $EN13);
      $EN13 = str_replace('m', 'Ɱ' , $EN13);
      bot('sendmessage',[
       'chat_id'=>$chat_id,
       'text'=>$EN13[1],
       
       ]);
       }
       ///////////////////// store ///////////////

   
       
          if($text=="◉︙ الملفات" and $id == $sudo){
            bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"◉︙ مرحبا بكم في متجر الملفات »  
ـ----------------------------
◉︙ جميع الملفات متاحه الان .

1- zhrf.php » {✖️}
:- ملف الزغرفه
l»» تفاصيل اكثر»» @LE_C4_KR
------------------------------
2- iranblok.php » {✖️}
:- ملف قفل الفارسيه
l»»  تفاصيل اكثر»» @LE_C4_KR
------------------------------

* علامه الـ✓ تعني الملف مفعل
* وعلامه الـ✖️ تعني الملف غير مفعل
 ﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
'reply_to_message_id'=>$message->message_id, 
]);
}
 if($text == "تفعيل ملف zhrf.php" and $id == $sudo ){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"◉︙ مرحبا عزيزي المطور الاساسي   
ـ------------------------
◉︙ تم تفعيل ملف الزغرفه .
◉︙ الزغرفه بلانكليزيه فقط EN + NAME
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
◉︙كمثال .... 
 
◉︙EN marks
----------------------
◉︙ zhrf.php » {✓}
----------------------
 
  ",
'reply_to_message_id'=>$message->message_id, 
]);
}
           

if($text == "تفعيل ملف zhrf.php" and $id == $sudo ){
  bot('sendMessage',[
  'chat_id'=>$chat_id, 
  'text'=>"
◉︙ مرحبا عزيزي المطور الاساسي 
◉︙ جميع الملفات : 
 
  ---------------------- 
 ✔️┇الملفات المفعله 
   zhrf.php 

   
    ",
  'reply_to_message_id'=>$message->message_id, 
  ]);
  }
if($text == "اطردني" and $you == "member"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
◉︙ ارسل ؛ نعم ، ليتم طردك
◉︙ ارسل ؛ لا ، لالغاء الامر",
'parse_mode'=>'MarkDown'
]);
}
elseif($text == "نعم" and $you == "member"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"◉︙ تم طردك من المجموعة سارسل لك الرابط في الخاص اذا غيرت رأيك ",
'reply_to_message_id'=>$LE_C4_KR
]);
bot('kickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$id
]);
}

if (preg_match('/(فحص الاعضاء)(.*)/', $text) and $message->from->id == $sudo) { 
  $get = json_decode(file_get_contents('data.json'),true); 
  $bye_keko = $get; 
  $text = str_replace('فحص الاعضاء', '', $text); 
  if (isset($get['groups'])) { 
    $bye_keko = $get['groups']; 
  } 
  foreach ($bye_keko as $key => $value) { 
    $hello_keko = json_decode(file_get_contents("http://api.telegram.org/bot".API_KEY."/getChatMemberscount?chat_id=$key"))->result; 
    if ($hello_keko < $text) { 
      bot('leaveChat',[ 
        'chat_id'=>$key, 
      ]); 
      bot('sendmessage',[ 
        'chat_id'=>$sudo, 
        'text'=>"id => $key \n members => $hello_keko \n bot leave Chat" 
      ]); 
    } 
  } 
}


function sendmessage($chat_id, $text){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>$text,
 'parse_mode'=>"MarkDown"
 ]);
 }
function save($filename, $data)
{
    $file = fopen($filename, 'w');
    fwrite($file, $data);
    fclose($file);
}



$update = json_decode(file_get_contents('php://input'));
$message = $update->message; 
$chat_id = $message->chat->id;
$text = $message->text;
$message_id = $message->message_id;
$from_id = $message->from->id;
$firstname = $message->from->first_name;
$lastname = $message->from->last_name;
$username = $message->from->username;
$textmessage = $message->text;
$step = file_get_contents("data/ko/step.txt");
$btn = file_get_contents("data/ko/btnlist.txt");
$dex = file_get_contents("data/ko/dex.txt");


if ($textmessage == 'رد') {
    save("data/ko/step.txt","set txtbt");
  var_dump(bot('sendMessage',[
         'chat_id'=>$update->message->chat->id,
         'text'=>"رسل الكلمه التي تريد اضافتها",
         'reply_to_message_id'=>$message->message_id, 

      ]));
 }
 
 
 if ($step == 'set txtbt') {
  save("data/ko/step.txt","set txtans");
  var_dump(bot('sendMessage',[
         'chat_id'=>$update->message->chat->id,
         'text'=>"◉︙ الان ارسل الرد الذي تريد اضافته",
      ]));
   save("data/ko/$textmessaage.txt","");
   save("data/ko/last_btn.txt",$textmessage);
 }
 if ($step == 'set txtans') {
  save("data/ko/step.txt","none");
  
  $last = file_get_contents("data/ko/last_btn.txt");
   $myfile2 = fopen("data/ko/btnlist.txt", "a") or die("Unable to open file!"); 
   fwrite($myfile2, "$last\n");
   fclose($myfile2);
   save("data/ko/$last.txt","$textmessage");
  
  var_dump(bot('sendMessage',[
         'chat_id'=>$update->message->chat->id,
         'text'=>"◉︙ تم حفظ الرد",
         'reply_to_message_id'=>$message->message_id, 

      ]));
 }

 if (file_exists("data/ko/$textmessage.txt")) {
  Sendmessage($chat_id,file_get_contents("data/ko/$textmessage.txt"));
}


if($text == 'تفعيل ملف iranblok.php'){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>'◉︙ اهــلا عـزيـزي المطور الاساسي 
◉︙ تـم قفل  ✓ الفارسيه
◉︙ سيتم حظر كل عضو ايراني'
]);
}


if ($text == "📎⎮تحديث السورس" and $id == $sudo ){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>'⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️0%',
'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
 'text'=>'⬛️⬜️⬜️⬜️⬜️⬜️⬜️⬜️10%',
          'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬜️⬜️⬜️⬜️⬜️⬜️20%',
          'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬜️⬜️⬜️⬜️⬜️30%',
          'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️🔳⬜️⬜️⬜️⬜️40%',
          'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬜️⬜️⬜️⬜️50%',
          'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️⬜️⬜️⬜️60%',
          'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️▪️⬜️⬜️70%',
          'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️⬛️⬜️⬜️80%',
          'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️90%',
          'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️100%',
          'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'
◉︙  تم تحديث البوت بنجاح
◉︙ تم تحديث ملفات البوت
◉︙ تم التسريع والتخلص من الشحطات',
         'reply_to_message_id'=>$message->message_id, 

 ]);
 }

