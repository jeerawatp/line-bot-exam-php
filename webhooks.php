<?php
    $accessToken = "lzESjLlqEGHgvouFj3u+0Mz/a8mmiOJVXcQQzWimGq9nMukl+0+i3dyZrNdFoKl9xW0NmtpGH2xP/UMkx4JNUkdzDhcQaOqHapy8yfAqCEn1ANA/rqd4sE1FLzfVdQOEczF3qE2f0kTYy2qYoooNHQdB04t89/1O/w1cDnyilFU=";//copy Channel access token ตอนที่ตั้งค่ามาใส่
    
    $content = file_get_contents('php://input');
    $events = json_decode($content, true);
    
    $arrayHeader = array();
    $arrayHeader[] = "Content-Type: application/json";
    $arrayHeader[] = "Authorization: Bearer {$accessToken}";
    
    $message = $events['events'][0]['message']['text'];

    // Loop through each event
    foreach ($events['events'] as $event) {




           if($event['message']['text'] == "สวัสดี"){
                $arrayPostData['replyToken'] = $event['replyToken'];
                $arrayPostData['messages'][0]['type'] = "text";
                $arrayPostData['messages'][0]['text'] = "สวัสดีจ้าาา";
                replyMsg($arrayHeader,$arrayPostData);
            }else
            if($event['message']['text'] == "รหัส"){
                $arrayPostData['replyToken'] = $event['replyToken'];
                $arrayPostData['messages'][0]['type'] = "text";
                $arrayPostData['messages'][0]['text'] = $event['source']['userId'];
                replyMsg($arrayHeader,$arrayPostData);
            }else
            if($event['message']['text'] == "แมว"){
            $image_url = "https://i.pinimg.com/originals/cc/22/d1/cc22d10d9096e70fe3dbe3be2630182b.jpg";
            $arrayPostData['replyToken'] = $event['replyToken'];
            $arrayPostData['messages'][0]['type'] = "image";
            $arrayPostData['messages'][0]['originalContentUrl'] = $image_url;
            $arrayPostData['messages'][0]['previewImageUrl'] = $image_url;
            replyMsg($arrayHeader,$arrayPostData);
            }
        


        }

function replyMsg($arrayHeader,$arrayPostData){
        $strUrl = "https://api.line.me/v2/bot/message/reply";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$strUrl);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $arrayHeader);    
        curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($arrayPostData));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($ch);
        curl_close ($ch);
    }
   exit;
?>
