<?php
// @FrrFrFF | @FrrFrFF
error_reporting(0);
ob_start();
header("Content-Type: application/json; charset=UTF-8");
ob_start();
date_default_timezone_set('Asia/Baghdad');
$API_KEY = "5844249243:AAEY-mCqg4_TQj5sR9XzdDf8XRWUwpR92H4" ;
define('API_KEY',$API_KEY);
define("IDBot", explode(":", $API_KEY)[0]);


function bot($method, $datas = []) {
    $url = "https://api.telegram.org/bot" . API_KEY . "/" . $method;
    $options = [
        'http' => [
            'method'  => 'POST',
            'content' => http_build_query($datas),
            'header'  => 'Content-Type: application/x-www-form-urlencoded\r\n',
        ],
    ];
    $context  = stream_context_create($options);
    $res = file_get_contents($url, false, $context);

    if ($res === FALSE) {
        return json_encode(['error' => 'Request failed']);
    } else {
        return json_decode($res);
    }
}

class OctaHox
{
    private $baseUrl;

    public function __construct($baseUrl)
    {
        $this->baseUrl = $baseUrl;
    }

    public function encrypt($data)
    {
        if (!empty($data)) {
            $data = urlencode($data);
            return $this->sendRequest('encrypt', $data);
        }
    }

    public function decode($data)
    {
        if (!empty($data)) {
            $data = urlencode($data);
            return $this->sendRequest('decode', $data);
        }
    }

    private function sendRequest($action, $input)
    {
        $url = sprintf(
            'https://%s/FileS/index.php?action=%s&Service=%s&input=%s',
            $this->baseUrl,
            'start',
            $action,
            $input
        );

        return file_get_contents($url);
    }
}

// Examples
$OctaHox = new OctaHox('dev-octahox.pantheonsite.io');




$update = json_decode(file_get_contents('php://input'));
$FileName = "Octa-Hox" ;
$h = json_decode(file_get_contents($FileName), 1);
if ($update->message) {
    $message = $update->message;
    $message_id = $message->message_id;
    $username = $message->from->username;
    $chat_id = $message->chat->id;
    $title = isset($message->chat->title) ? $message->chat->title : '';
    $text = isset($message->text) ? $message->text : '';
    $user = $message->from->username;
    $name = $message->from->first_name;
    $from_id = $message->from->id;
}

if ($update->callback_query) {
    $callback_query = $update->callback_query;
    $data = $callback_query->data;
    $message = $callback_query->message;
    $chat_id = $message->chat->id;
    $title = isset($message->chat->title) ? $message->chat->title : '';
    $message_id = $message->message_id;
    $name = $message->chat->first_name;
    $user = $message->chat->username;
    $from_id = $callback_query->from->id;
}


function X($data, $filename) {
    $jsonString = json_encode($data, JSON_PRETTY_PRINT);
    if (file_put_contents($filename, $jsonString) !== false) {
        return true; 
    } else {
        return false; 
    }
}

if($text == '/start'){
    bot('sendmessage',[
        'chat_id' => $chat_id,
        'text' => '
"Welcome to OctaHox Encryption Services! 

At OctaHox, we redefine security through cutting-edge encryption solutions. Your datas protection is our top priority. Join us on the forefront of digital security and experience the peace of mind that comes with robust encryption.
        
"     OctaHox! 

  OctaHox         .        .               .
        
   
        
   
     
     
         
    OctaHox     .    !"
         "
         'reply_markup' => json_encode([
             'inline_keyboard' => [
                 [['text' => " " 'callback_data' => "enc"] ['text' => "  " 'callback_data' => "dec"]]
                 [['text' => "  ", 'callback_data' => ""]],
                 [['text' => "  ", 'callback_data' => "about"]],
            ]
        ])
    ]);
    unset($h["mode"]);
X($h, $FileName);
die();
}

if($data == 'bback'){
    bot('editmessagetext',[
        'chat_id' => $chat_id,
        'message_id'=>$message_id,
        'text' => '
"     OctaHox! 

  OctaHox         .        .               .
        
   
        
   
     
     
         
    OctaHox     .    !"
         "
         'reply_markup' => json_encode([
             'inline_keyboard' => [
                 [['text' => " " 'callback_data' => "enc"] ['text' => "  " 'callback_data' => "dec"]]
                 [['text' => "  ", 'callback_data' => ""]],
                 [['text' => "  ", 'callback_data' => "about"]],
            ]
        ])
    ]);
    unset($h["mode"]);
X($h, $FileName);
die();
}

if($data == 'about'){
    bot('editmessagetext',[
        'chat_id' => $chat_id,
        'message_id'=>$message_id,
        'text' => '
  !  

              .             .  
        
  :
 1.   :          .
 2.   :      .
 3.   :       .
        
      OctaHox!   .  
        
 #OctaHox # # 

  !   : https://@FrrFrFF
        
        ',
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => " Back", 'callback_data' => "bback"]],
            ]
        ])
    ]);
    unset($h["mode"]);
X($h, $FileName);
die();
}

if($data == 'refresh'){
    bot('editmessagetext',[
        'chat_id' => $chat_id,
        'message_id'=>$message_id,
        'text' => '
   !  

         .    !  
        
          .   OctaHox  !
        

 OctaHox -   !  
        
        ',
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => " Back", 'callback_data' => "bback"]],
            ]
        ])
    ]);
    unset($h["mode"]);
X($h, $FileName);
die();
}

if($data == 'dec'){
    bot('editmessagetext',[
        'chat_id' => $chat_id,
        'message_id'=>$message_id,
        'text' => '
     OctaHox!  

          .  
        
   :
        
 OctaHox -    !  
        
        
        ',
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => " Back", 'callback_data' => "bback"]],
            ]
        ])
    ]);
    $h["mode"] = $data;
X($h, $FileName);
}


if($text and $h["mode"] == 'dec'){
    $decode = $OctaHox->decode($text);
    if($decode == null or $decode == false){
        bot('sendmessage',[
            'chat_id' => $chat_id,
            'text' => '
 :     !  

            .            .  
            
             .
            
 OctaHox -   !  
            ',
            'parse_mode'=>'markdown',
        ]);
        unset($h["mode"]);
        X($h, $FileName);
        die();
    }
    bot('sendmessage',[
        'chat_id' => $chat_id,
        'text' => '
 :     !  

             .              .  
            
              .
            
  OctaHox -   !  
        
 :
`'.$decode.'`
        
        .  OctaHox -   !  
            
        ',
        'parse_mode'=>'markdown',
    ]);
    unset($h["mode"]);
    X($h, $FileName);
    die();
}

if($data == 'enc'){
    bot('editmessagetext',[
        'chat_id' => $chat_id,
        'message_id'=>$message_id,
        'text' => '
       OctaHox!  

          .        .           OctaHox   .
        
      :
 [  ]
        
 OctaHox -     !  
        
        ',
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => " Back", 'callback_data' => "bback"]],
            ]
        ])
    ]);
    $h["mode"] = $data;
X($h, $FileName);
}

if($text and $h["mode"] == 'enc'){
    $encode = $OctaHox->encrypt($text);
    bot('sendmessage',[
        'chat_id' => $chat_id,
        'text' => '
   !  

            .  
        
 :
`'.$encode.'`
        
          .   OctaHox    .
        
             .
        
 OctaHox -    !  
        
        ',
        'parse_mode'=>'markdown',
    ]);
    unset($h["mode"]);
    X($h, $FileName);
}