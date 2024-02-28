<?php

$site = "LoanOptions.ai Insurance";
$phone_number = "1300 060 684";
// $admin_email = "julian@loanoptions.ai";
$admin_email = "arijal@aiims.com.au";
// $bcc_email = 'kalbassit@aiims.com.au';
$bcc_email = "";
$no_reply_email = "info@loanoptions.ai";
$cc_email = "";

function renderImg($filename, $folder, $classname = "")
{
    $filename_without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
    $src = "./assets/images/" . $folder . "/" . $filename;

    if (file_exists("./assets/images/" . $folder . "/" . $filename_without_ext . ".webp")) {
        $src = "./assets/images/" . $folder . "/" . $filename_without_ext . ".webp";
    }

    return "<img src=" . $src . " alt=" . $filename_without_ext . " class='" . $classname . "'>";
}
