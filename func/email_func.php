<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'func/PHPMailer/src/Exception.php';
require 'func/PHPMailer/src/PHPMailer.php';
require 'func/PHPMailer/src/SMTP.php'; 

function sendEmail($to,$subject,$title,$info,$buttontxt,$buttonlink,$name){

    include  __DIR__ . '/../includes/mail_css.php';

    if($buttontxt != '' && $buttonlink != ''){
        $button = '<center style="min-width:580px; width:100%">
        <table class="button radius float-center" align="center" style="border-collapse:collapse; border-spacing:0; padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:center; vertical-align:top; word-wrap:break-word; float:none; margin:0 0 16px 0; width:auto" valign="top">
          <tbody>
            <tr style="padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:left; vertical-align:top" align="left" valign="top">
              <td style="-moz-hyphens:none; -webkit-hyphens:none; hyphens:none; word-wrap:break-word; padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:left; vertical-align:top; color:#0a0a0a;  font-weight:300; line-height:28px; margin:0; font-size:16px; overflow-wrap:break-word; border-collapse:collapse !important" align="left" valign="top">
                <table align="left" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse; border-spacing:0; padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:left; vertical-align:top; word-wrap:break-word; width:100%" valign="top">
                  <tbody>
                    <tr style="padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:left; vertical-align:top" align="left" valign="top">
                        <td align="left" style="-moz-hyphens:none; -webkit-hyphens:none; hyphens:none; word-wrap:break-word; padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:left; vertical-align:top; color:#fefefe;  font-weight:300; line-height:28px; margin:0; font-size:19px; overflow-wrap:break-word; background:#2a43f8; border:none; background-color:#2a43f8; background-image:linear-gradient(to left, #3196ec 3%, #2a43f8); border-color:#2a43f8; border-radius:40px; border-collapse:collapse !important" valign="top" bgcolor="#2a43f8">
                            <a href="'.$buttonlink.'" style="color:#fffffe;  font-weight:bold; line-height:34px; padding:8px 50px 8px 50px; text-align:left; text-decoration:none; border:0 solid #2199e8; border-radius:3px; display:inline-block; font-size:16px; border-color:#2a43f8" align="left">'.$buttontxt.'</a>
                        </td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
          </tbody>
        </table>
        </center>';
    }else{
        $button = '';
    }
    
    $message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
    <html xmlns="https://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width">
        <style type="text/css">
            @font-face {
                font-family: "Open Sans";
                font-style: normal;
                font-weight: 300;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/opensans/v20/mem5YaGs126MiZpBA-UN_r8-VQ.ttf) format("truetype");
            }
            @font-face {
                font-family: "Open Sans";
                font-style: normal;
                font-weight: 400;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/opensans/v20/mem8YaGs126MiZpBA-U1Ug.ttf) format("truetype");
            }
            @font-face {
                font-family: "Open Sans";
                font-style: normal;
                font-weight: 700;
                font-display: swap;
                src: url(https://fonts.gstatic.com/s/opensans/v20/mem5YaGs126MiZpBA-UN7rg-VQ.ttf) format("truetype");
            }
        </style>
    </head>
    <body>';
    $message .= $css;
    $message .= '
    <table class="body" data-made-with-foundation style="border-collapse:collapse; border-spacing:0; padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:left; vertical-align:top; word-wrap:break-word; background:#f3f3f3; height:100%; width:100%; color:#0a0a0a; font-weight:normal; line-height:130%; margin:0; font-size:16px" align="left" valign="top" height="100%">
        <tr style="padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:left; vertical-align:top" align="left" valign="top">
            <td class="float-center" align="center" valign="top" style="-moz-hyphens:none; -webkit-hyphens:none; hyphens:none; word-wrap:break-word; padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:center; vertical-align:top; color:#0a0a0a; font-weight:300; line-height:28px; margin:0 auto; font-size:16px; overflow-wrap:break-word; float:none; border-collapse:collapse !important">
                <center style="min-width:580px; width:100%">
                    <span class="spacer-fix" style="clear:both; display:block; height:0; line-height:0; margin:0; overflow:hidden; padding:0; width:100%" height="0"></span><!-- Thunderbird layout fix -->
                    <table class="spacer" style="border-collapse:collapse; border-spacing:0; padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:left; vertical-align:top; word-wrap:break-word; width:100%" align="left" valign="top">
                        <tbody>
                            <tr style="padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:left; vertical-align:top" align="left" valign="top">
                                <td height="40" style="-moz-hyphens:none; -webkit-hyphens:none; hyphens:none; word-wrap:break-word; padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:left; vertical-align:top; color:#0a0a0a; font-weight:300; line-height:40px; margin:0; font-size:40px; overflow-wrap:break-word; mso-line-height-rule:exactly; border-collapse:collapse !important" align="left" valign="top">&nbsp;</td>
                            </tr>
                        </tbody>
                    </table>
                    <span class="spacer-fix" style="clear:both; display:block; height:0; line-height:0; margin:0; overflow:hidden; padding:0; width:100%" height="0"></span><!-- Thunderbird layout fix -->
                    <table align="inherit" class="container" style="border-collapse:collapse; border-spacing:0; padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:inherit; vertical-align:top; word-wrap:break-word; background:#fefefe; margin:0 auto; width:580px" valign="top">
                        <tbody>
                            <tr style="padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:left; vertical-align:top" align="left" valign="top">
                            <td style="-moz-hyphens:none; -webkit-hyphens:none; hyphens:none; word-wrap:break-word; padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:left; vertical-align:top; color:#0a0a0a;  font-weight:300; line-height:28px; margin:0; font-size:16px; overflow-wrap:break-word; padding:28px 0; border-collapse:collapse !important" align="left" valign="top">
                                    
                            <span class="spacer-fix" style="clear:both; display:block; height:0; line-height:0; margin:0; overflow:hidden; padding:0; width:100%" height="0"></span><!-- Thunderbird layout fix -->
                            <table class="row" style="border-collapse:collapse; border-spacing:0; padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:left; vertical-align:top; word-wrap:break-word; padding:0; position:relative; width:100%; display:table" align="left" valign="top">
                                <tbody>
                                    <tr style="padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:left; vertical-align:top" align="left" valign="top">
                                        <th class="columns first last" style="-moz-hyphens:none; -webkit-hyphens:none; hyphens:none; word-wrap:break-word; padding-bottom:16px; padding-left:16px; padding-right:16px; padding-top:0; text-align:left; vertical-align:top; color:#0a0a0a;  font-weight:300; line-height:28px; margin:0 auto; font-size:16px; overflow-wrap:break-word; border-collapse:collapse !important" align="left" valign="top">
                                            <table style="border-collapse:collapse; border-spacing:0; padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:left; vertical-align:top; word-wrap:break-word; width:100%" align="left" valign="top">
                                                <tr style="padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:left; vertical-align:top" align="left" valign="top">
                                                    <th style="-moz-hyphens:none; -webkit-hyphens:none; hyphens:none; word-wrap:break-word; padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:left; vertical-align:top; color:#0a0a0a;  font-weight:300; line-height:28px; margin:0; font-size:16px; overflow-wrap:break-word; border-collapse:collapse !important" align="left" valign="top">               
                                                        <center style="min-width:580px; width:100%">
                                                        <img src="http://sirius-i.svpetroleum.com.my/assets/img/SVP-Logo-250x200.png" alt="SIRIUS-I" align="center" class="" style="-ms-interpolation-mode:bicubic; clear:both; display:block; max-width:125px; outline:none; text-decoration:none; width:100%" width="187">
                                                        </center>
                                                    </th>
                                                    <th class="expander" style="-moz-hyphens:none; -webkit-hyphens:none; hyphens:none; word-wrap:break-word; padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:left; vertical-align:top; color:#0a0a0a;  font-weight:300; line-height:28px; margin:0; font-size:16px; overflow-wrap:break-word; visibility:hidden; width:0; border-collapse:collapse !important; padding:0 !important" align="left" valign="top"></th>
                                                </tr>
                                            </table>
                                        </th>  
                                    </tr>
                                </tbody>
                            </table>
                            <span class="spacer-fix" style="clear:both; display:block; height:0; line-height:0; margin:0; overflow:hidden; padding:0; width:100%" height="0"></span><!-- Thunderbird layout fix -->
                            <table class="spacer" style="border-collapse:collapse; border-spacing:0; padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:left; vertical-align:top; word-wrap:break-word; width:100%" align="left" valign="top">
                                <tbody>
                                    <tr style="padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:left; vertical-align:top" align="left" valign="top">
                                        <td height="21" style="-moz-hyphens:none; -webkit-hyphens:none; hyphens:none; word-wrap:break-word; padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:left; vertical-align:top; color:#0a0a0a;  font-weight:300; line-height:21px; margin:0; font-size:21px; overflow-wrap:break-word; mso-line-height-rule:exactly; border-collapse:collapse !important" align="left" valign="top">&nbsp;</td>
                                    </tr>
                                </tbody>
                            </table>
                            <span class="spacer-fix" style="clear:both; display:block; height:0; line-height:0; margin:0; overflow:hidden; padding:0; width:100%" height="0"></span><!-- Thunderbird layout fix -->
                            <table class="row" style="border-collapse:collapse; border-spacing:0; padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:left; vertical-align:top; word-wrap:break-word; padding:0; position:relative; width:100%; display:table" align="left" valign="top">
                                <tbody>
                                    <tr style="padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:left; vertical-align:top" align="left" valign="top">  
                                        <th class="columns first last" style="-moz-hyphens:none; -webkit-hyphens:none; hyphens:none; word-wrap:break-word; padding-bottom:16px; padding-left:16px; padding-right:16px; padding-top:0; text-align:left; vertical-align:top; color:#0a0a0a;  font-weight:300; line-height:28px; margin:0 auto; font-size:16px; overflow-wrap:break-word; border-collapse:collapse !important" align="left" valign="top">
                                            <table style="border-collapse:collapse; border-spacing:0; padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:left; vertical-align:top; word-wrap:break-word; width:100%" align="left" valign="top">
                                                <tr style="padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:left; vertical-align:top" align="left" valign="top">
                                                    <th style="-moz-hyphens:none; -webkit-hyphens:none; hyphens:none; word-wrap:break-word; padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:left; vertical-align:top; color:#0a0a0a;  font-weight:300; line-height:28px; margin:0; font-size:16px; overflow-wrap:break-word; border-collapse:collapse !important" align="left" valign="top">
                                                        <h2 class="text-center" style="color:inherit;  font-weight:700; line-height:130%; margin:0; padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:center; margin-bottom:10px; word-wrap:break-word; font-size:30px; -moz-hyphens:none; -webkit-hyphens:none; hyphens:none; overflow-wrap:break-word; padding:0 28px" align="center">'.$title.'</h2>
                                                    </th>
                                                    <th class="expander" style="-moz-hyphens:none; -webkit-hyphens:none; hyphens:none; word-wrap:break-word; padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:left; vertical-align:top; color:#0a0a0a;  font-weight:300; line-height:28px; margin:0; font-size:16px; overflow-wrap:break-word; visibility:hidden; width:0; border-collapse:collapse !important; padding:0 !important" align="left" valign="top"></th>
                                                </tr>
                                            </table>
                                        </th>
                                    </tr>
                                </tbody>
                            </table>
                            <span class="spacer-fix" style="clear:both; display:block; height:0; line-height:0; margin:0; overflow:hidden; padding:0; width:100%" height="0"></span><!-- Thunderbird layout fix -->
                            <table class="callout" style="border-collapse:collapse; border-spacing:0; padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:left; vertical-align:top; word-wrap:break-word; margin-bottom:16px" align="left" valign="top">
                                <tbody>
                                    <tr style="padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:left; vertical-align:top" align="left" valign="top">
                                        <th class="callout-inner" style="-moz-hyphens:none; -webkit-hyphens:none; hyphens:none; word-wrap:break-word; padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:left; vertical-align:top; color:#0a0a0a;  font-weight:300; line-height:28px; margin:0; font-size:16px; overflow-wrap:break-word; background:#f7f9fe; border:none; padding:10px; width:100%; border-collapse:collapse !important" align="left" valign="top">
                                            <span class="spacer-fix" style="clear:both; display:block; height:0; line-height:0; margin:0; overflow:hidden; padding:0; width:100%" height="0"></span><!-- Thunderbird layout fix -->
                                            <table class="row" style="border-collapse:collapse; border-spacing:0; padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:left; vertical-align:top; word-wrap:break-word; padding:0; position:relative; width:100%; display:table" align="left" valign="top">
                                                <tbody>
                                                    <tr style="padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:left; vertical-align:top" align="left" valign="top">
                                                        <th class="columns first last" style="-moz-hyphens:none; -webkit-hyphens:none; hyphens:none; word-wrap:break-word; padding-bottom:16px; padding-left:16px; padding-right:16px; padding-top:0; text-align:left; vertical-align:top; color:#0a0a0a;  font-weight:300; line-height:28px; margin:0 auto; font-size:16px; overflow-wrap:break-word; border-collapse:collapse !important" align="left" valign="top">
                                                            <table style="border-collapse:collapse; border-spacing:0; padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:left; vertical-align:top; word-wrap:break-word; width:100%" align="left" valign="top">
                                                                <tr style="padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:left; vertical-align:top" align="left" valign="top">
                                                                    <th style="-moz-hyphens:none; -webkit-hyphens:none; hyphens:none; word-wrap:break-word; padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:left; vertical-align:top; color:#0a0a0a;  font-weight:300; line-height:28px; margin:0; font-size:16px; overflow-wrap:break-word; border-collapse:collapse !important" align="left" valign="top">
                                                                        <span class="spacer-fix" style="clear:both; display:block; height:0; line-height:0; margin:0; overflow:hidden; padding:0; width:100%" height="0"></span><!-- Thunderbird layout fix -->
                                                                        <table class="spacer hide-for-large" style="border-collapse:collapse; border-spacing:0; padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:left; vertical-align:top; word-wrap:break-word; display:none; font-size:0; line-height:0; max-height:0; mso-hide:all; overflow:hidden; width:100%" align="left" valign="top">
                                                                            <tbody>
                                                                            <tr style="padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:left; vertical-align:top" align="left" valign="top">
                                                                                <td height="20" style="-moz-hyphens:none; -webkit-hyphens:none; hyphens:none; word-wrap:break-word; padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:left; vertical-align:top; color:#0a0a0a;  font-weight:300; line-height:20px; margin:0; font-size:20px; overflow-wrap:break-word; mso-line-height-rule:exactly; border-collapse:collapse !important" align="left" valign="top">&nbsp;</td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>    
                                                                        <table class="spacer show-for-large" style="border-collapse:collapse; border-spacing:0; padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:left; vertical-align:top; word-wrap:break-word; width:100%" align="left" valign="top">
                                                                            <tbody>
                                                                            <tr style="padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:left; vertical-align:top" align="left" valign="top">
                                                                                <td height="70" style="-moz-hyphens:none; -webkit-hyphens:none; hyphens:none; word-wrap:break-word; padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:left; vertical-align:top; color:#0a0a0a;  font-weight:300; line-height:70px; margin:0; font-size:70px; overflow-wrap:break-word; mso-line-height-rule:exactly; border-collapse:collapse !important" align="left" valign="top">&nbsp;</td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>';
                                                                        if($name!=''){
                                                                            $hi = 'Hi <span class="ltr_if_rtl">'.$name.'</span>,<br><br>';
                                                                        }else{
                                                                            $hi = 'Hi <span class="ltr_if_rtl">'.$to.'</span>,<br><br>';
                                                                        }
                                                                        $message .= $hi;
                                                                        $message .= $info.
                                                                        '<br><br>'
                                                                        .$button.
                                                                        '<span class="spacer-fix" style="clear:both; display:block; height:0; line-height:0; margin:0; overflow:hidden; padding:0; width:100%" height="0"></span><!-- Thunderbird layout fix -->    
                                                                        <table class="spacer hide-for-large" style="border-collapse:collapse; border-spacing:0; padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:left; vertical-align:top; word-wrap:break-word; display:none; font-size:0; line-height:0; max-height:0; mso-hide:all; overflow:hidden; width:100%" align="left" valign="top">
                                                                            <tbody>
                                                                                <tr style="padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:left; vertical-align:top" align="left" valign="top">
                                                                                    <td height="20" style="-moz-hyphens:none; -webkit-hyphens:none; hyphens:none; word-wrap:break-word; padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:left; vertical-align:top; color:#0a0a0a;  font-weight:300; line-height:20px; margin:0; font-size:20px; overflow-wrap:break-word; mso-line-height-rule:exactly; border-collapse:collapse !important" align="left" valign="top">&nbsp;</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                        <table class="spacer show-for-large" style="border-collapse:collapse; border-spacing:0; padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:left; vertical-align:top; word-wrap:break-word; width:100%" align="left" valign="top">
                                                                            <tbody>
                                                                                <tr style="padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:left; vertical-align:top" align="left" valign="top">
                                                                                    <td height="70" style="-moz-hyphens:none; -webkit-hyphens:none; hyphens:none; word-wrap:break-word; padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:left; vertical-align:top; color:#0a0a0a;  font-weight:300; line-height:70px; margin:0; font-size:70px; overflow-wrap:break-word; mso-line-height-rule:exactly; border-collapse:collapse !important" align="left" valign="top">&nbsp;</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </th>
                                                                    <th class="expander" style="-moz-hyphens:none; -webkit-hyphens:none; hyphens:none; word-wrap:break-word; padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:left; vertical-align:top; color:#0a0a0a;  font-weight:300; line-height:28px; margin:0; font-size:16px; overflow-wrap:break-word; visibility:hidden; width:0; border-collapse:collapse !important; padding:0 !important" align="left" valign="top"></th>
                                                                </tr>
                                                            </table>
                                                        </th>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </th>
                                        <th class="expander" style="-moz-hyphens:none; -webkit-hyphens:none; hyphens:none; word-wrap:break-word; padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:left; vertical-align:top; color:#0a0a0a;  font-weight:300; line-height:28px; margin:0; font-size:16px; overflow-wrap:break-word; visibility:hidden; width:0; border-collapse:collapse !important; padding:0 !important" align="left" valign="top"></th>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="team_signature">
                                <span class="spacer-fix" style="clear:both; display:block; height:0; line-height:0; margin:0; overflow:hidden; padding:0; width:100%" height="0"></span><!-- Thunderbird layout fix -->
                                <table class="row" style="border-collapse:collapse; border-spacing:0; padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:left; vertical-align:top; word-wrap:break-word; padding:0; position:relative; width:100%; display:table" align="left" valign="top">
                                    <tbody>
                                        <tr style="padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:left; vertical-align:top" align="left" valign="top">
                                            <th class="columns first last" style="-moz-hyphens:none; -webkit-hyphens:none; hyphens:none; word-wrap:break-word; padding-bottom:16px; padding-left:16px; padding-right:16px; padding-top:0; text-align:left; vertical-align:top; color:#0a0a0a; font-weight:300; line-height:28px; margin:0 auto; font-size:16px; overflow-wrap:break-word; border-collapse:collapse !important" align="left" valign="top">
                                                <table style="border-collapse:collapse; border-spacing:0; padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:left; vertical-align:top; word-wrap:break-word; width:100%" align="left" valign="top">
                                                    <tr style="padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:left; vertical-align:top" align="left" valign="top">
                                                        <th style="-moz-hyphens:none; -webkit-hyphens:none; hyphens:none; word-wrap:break-word; padding-bottom:0; padding-left:32px; padding-right:0; padding-top:0; text-align:left; vertical-align:top; color:#0a0a0a;  font-weight:300; line-height:28px; margin:0; font-size:16px; overflow-wrap:break-word; border-collapse:collapse !important" align="left" valign="top">
                                                        SIRIUS-I Administrator.
                                                        </th>
                                                        <th class="expander" style="-moz-hyphens:none; -webkit-hyphens:none; hyphens:none; word-wrap:break-word; padding-bottom:0; padding-left:32px; padding-right:0; padding-top:0; text-align:left; vertical-align:top; color:#0a0a0a;  font-weight:300; line-height:28px; margin:0; font-size:16px; overflow-wrap:break-word; visibility:hidden; width:0; border-collapse:collapse !important; padding:0 !important" align="left" valign="top"></th>
                                                    </tr>
                                                </table>
                                            </th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                                    
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <span class="spacer-fix" style="clear:both; display:block; height:0; line-height:0; margin:0; overflow:hidden; padding:0; width:100%" height="0"></span><!-- Thunderbird layout fix -->
                    <table class="spacer" style="border-collapse:collapse; border-spacing:0; padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:left; vertical-align:top; word-wrap:break-word; width:100%" align="left" valign="top">
                        <tbody>
                            <tr style="padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:left; vertical-align:top" align="left" valign="top">
                                <td height="40" style="-moz-hyphens:none; -webkit-hyphens:none; hyphens:none; word-wrap:break-word; padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:left; vertical-align:top; color:#0a0a0a;  font-weight:300; line-height:40px; margin:0; font-size:40px; overflow-wrap:break-word; mso-line-height-rule:exactly; border-collapse:collapse !important" align="left" valign="top">&nbsp;</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="sent-by-footer" style="color:#a0a0a0; font-family:Arial, sans-serif; font-weight:normal; line-height:1.8; margin:0; padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:center; font-size:10px; margin-bottom:10px; font-stretch:normal; font-style:normal; letter-spacing:normal" align="center">Sent by SIRIUS-I, Setegap Ventures Petroleum Sdn Bhd. Kuala Lumpur.</p>
                    <span class="spacer-fix" style="clear:both; display:block; height:0; line-height:0; margin:0; overflow:hidden; padding:0; width:100%" height="0"></span><!-- Thunderbird layout fix -->
                    <table class="spacer" style="border-collapse:collapse; border-spacing:0; padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:left; vertical-align:top; word-wrap:break-word; width:100%" align="left" valign="top">
                        <tbody>
                            <tr style="padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:left; vertical-align:top" align="left" valign="top">
                                <td height="40" style="-moz-hyphens:none; -webkit-hyphens:none; hyphens:none; word-wrap:break-word; padding-bottom:0; padding-left:0; padding-right:0; padding-top:0; text-align:left; vertical-align:top; color:#0a0a0a;  font-weight:300; line-height:40px; margin:0; font-size:40px; overflow-wrap:break-word; mso-line-height-rule:exactly; border-collapse:collapse !important" align="left" valign="top">&nbsp;</td>
                            </tr>
                        </tbody>
                    </table>
                </center>
            </td>
        </tr>
    </table>
    </body>
    </html>';

    $alt_message = $hi."\r\n".$info;

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: SIRIUS-I Admin<noreply@svpetroleum.com.my>' . "\r\n";
    // $headers .= 'Cc: zulkipli.basir@gmail.com' . "\r\n";

    $mail = new PHPMailer;
    $mail->isSMTP(); 
    $mail->SMTPDebug = 0; // 2 for more detailed debug
    // $mail->Host = "smtp.gmail.com"; 
    $mail->Host = "mail.svpetroleum.com.my"; 
    $mail->Port = "587"; // typically 587 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // ssl is depracated
    $mail->SMTPAuth = true;
    // $mail->Username = "it.svpetroleum@gmail.com";
    $mail->Username = "administrator@svpetroleum.com.my";
    $mail->Password = "hJ@2.3qtw";
    $mail->setFrom("noreply@svpetroleum.com.my", "SIRIUS-I Admin");
    $mail->addAddress($to);
    $mail->Subject = $subject;
    $mail->msgHTML($message); // remove if you do not want to send HTML email
    $mail->AltBody = $alt_message;

    if(!$mail->send()){
        return $mail->ErrorInfo;
    }else{
        return true;
    }
    // echo 'Message has been sent';

}

?>