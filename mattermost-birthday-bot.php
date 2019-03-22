<?php

//require("common.php"); Contains json_post() - a function common to all the mattermost bots used by knoxmakers


function json_post($url, $data){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    $payload = json_encode($data);
    curl_setopt($ch, CURLOPT_POST, 1);
        //curl_setopt($ch, CURLOPT_POSTFIELDS, 'payload='.$payload);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_HEADER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Content-Length: ' . strlen($payload))
    );

        $result = curl_exec($ch);
        curl_close($ch);
    return json_decode($result, true);
}



$_HOOK = "mattermost-hook";

$output = array();
$output["channel"] = "channel";
$output["username"] = "BirthdayBot";
$output["icon_url"] = "image.png";
$txt = "";


$today = date("m");

if ($today == "02") {
        $name = "Charles";
}  else if ($today == "03") {
        $name = "Albert";

}  else {
        exit();
}



$wishes = array("It is your birthday!",
                "Happy Birthday month, $name!",
                "Time to celebrate!",
                "This month is the best month!",
                "Happy Birthday, $name!",
                "Gratulerer med dagen!",
                "Birthday wishes for you, $name!",
                "Happy Birthday!",
                "Herzlichen Glückwunsch zum Geburtstag!",
                "Joyeux anniversaire!",
                );

$wishes_choice = $wishes[array_rand($wishes)];


$emojis = array(":cake:", ":tada:", ":blush:", ":mega:", ":star2:", ":gift:",);

$emojis_choice = $emojis[array_rand($emojis)];

if ($name) {
        $txt = "$emojis_choice  $wishes_choice  $emojis_choice";
}

print_r($txt);

$output["text"] = $txt;
json_post($_HOOK, $output);


?>


                                                                                                                                                                                         58,0-1        Bot

