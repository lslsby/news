<?php
include("phpqrcode.php");
class Advertise {

    function qrcode() {
        $advertiseUrl = "./database/img/logo/";
        $filenames = scandir($advertiseUrl);
        // echo count($filenames);
        
        $advertise = D("advertisement");

        for ($i = 0; $i < count($filenames); $i++) {
            if (0 == strncmp($filenames[$i], "logo_", 5)) {
                $value = array("name"=>"上海电机学院");
                $value["url"] = "http://www.sdju.edu.cn";
                $value["content"] = "http://www.sdju.edu.cn";
                $value["img"] = "/news/database/img/logo/" . $filenames[$i];
                $value["qrcode"] = "/news/database/qrcode/" . $filenames[$i];

                $logo = "./database/img/logo/sdju_1_x.jpg"; //准备好的logo图片
                $QR = "./database/qrcode/" . $filenames[$i]; //已经生成的原始二维码图 
                $newPosiont = $QR;

                $errorCorrectionLevel = "L"; //容错级别
                $matrixPointSize = 6; //生成图片大小
                QRcode::png($value['url'], $QR, $errorCorrectionLevel, $matrixPointSize, 2);

                if ($logo !== false) {
                     $QR = imagecreatefromstring(file_get_contents($QR)); 
                     $logo = imagecreatefromstring(file_get_contents($logo)); 
                     $QR_width = imagesx($QR);//二维码图片宽度 
                     $QR_height = imagesy($QR);//二维码图片高度 
                     $logo_width = imagesx($logo);//logo图片宽度 
                     $logo_height = imagesy($logo);//logo图片高度 
                     $logo_qr_width = $QR_width / 5; 
                     $scale = $logo_width/$logo_qr_width; 
                     $logo_qr_height = $logo_height/$scale; 
                     $from_width = ($QR_width - $logo_qr_width) / 2; 
                     //重新组合图片并调整大小 
                     imagecopyresampled($QR, $logo, $from_width, $from_width, 0, 0, $logo_qr_width, 
                     $logo_qr_height, $logo_width, $logo_height); 
                     imagepng($QR, $newPosiont);   
                     @$advertise->insert($value);
                }
            }
        }
    }
}
?>
