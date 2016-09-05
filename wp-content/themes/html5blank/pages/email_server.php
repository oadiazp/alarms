<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
<title>Email Template</title>
<style type="text/css" charset="utf-8">
    body{
        width: 100%;
        background-color: #F1F2F7;
        margin:0;
        padding:0;
        -webkit-font-smoothing: antialiased;
        font-family: arial;
    }
    html{
        width: 100%;
    }
    table{
        font-size: 14px;
        border: 0;
    }
    @media only screen and (max-width: 640px){
        /*------ top header ------ */
        .header-bg{width: 440px !important; height: 10px !important;}
        .main-header{line-height: 28px !important;}
        .main-subheader{line-height: 28px !important;}
        .container{width: 440px !important;}
        .container-middle{width: 420px !important;}
        .mainContent{width: 400px !important;}
        .main-image{width: 400px !important; height: auto !important;}
        .banner{width: 400px !important; height: auto !important;}
        /*------ sections ---------*/
        .section-item{width: 400px !important;}
        .section-img{width: 400px !important; height: auto !important;}
        /*------- prefooter ------*/
        .prefooter-header{padding: 0 10px !important; line-height: 24px !important;}
        .prefooter-subheader{padding: 0 10px !important; line-height: 24px !important;}
        /*------- footer ------*/
        .top-bottom-bg{width: 420px !important; height: auto !important;}
    }
    @media only screen and (max-width: 479px){
        /*------ top header ------ */
        .header-bg{width: 280px !important; height: 10px !important;}
        .top-header-left{width: 260px !important; text-align: center !important;}
        .top-header-right{width: 260px !important;}
        .main-header{line-height: 28px !important; text-align: center !important;}
        .main-subheader{line-height: 28px !important; text-align: center !important;}
        /*------- header ----------*/
        .logo{width: 260px !important;}
        .nav{width: 260px !important;}
        .container{width: 280px !important;}
        .container-middle{width: 260px !important;}
        .mainContent{width: 240px !important;}
        .main-image{width: 240px !important; height: auto !important;}
        .banner{width: 240px !important; height: auto !important;}
        /*------ sections ---------*/
        .section-item{width: 240px !important;}
        .section-img{width: 240px !important; height: auto !important;}
        /*------- prefooter ------*/
        .prefooter-header{padding: 0 10px !important;line-height: 28px !important;}
        .prefooter-subheader{padding: 0 10px !important; line-height: 28px !important;}
        /*------- footer ------*/
        .top-bottom-bg{width: 260px !important; height: auto !important;}
    }
</style>
</head>
<body leftmargin="0" topmargin="0" marginheight="0" marginwidth="0">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody><tr><td height="30"></td></tr>
<tr bgcolor="#F1F2F7">
<td align="center" bgcolor="#F1F2F7" valign="top" width="100%">
<table class="container" align="center" border="0" cellpadding="0" cellspacing="0" width="600">
    <tbody>
        <tr bgcolor="#323537"><td height="5"></td></tr>
        <tr bgcolor="#323537"><td>
            <table class="container-middle" align="center" border="0" cellpadding="0" cellspacing="0" width="560">
                <tbody>
                    <tr><td>
                        <table class="logo" align="center" border="0" cellpadding="0" cellspacing="0">
                            <tbody>
                                <tr><td align="center">
                                        <a href=""><img class="logo" style="display:block;" src="http://<?php echo $_SERVER["SERVER_NAME"].substr($_SERVER["SCRIPT_NAME"], 0, -23); ?>/img/logo.png" alt="logo" width="150"></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table></td>
                    </tr>
                </tbody>
            </table></td>
        </tr>
        <tr bgcolor="#323537"><td height="5"></td></tr>
    </tbody>
</table>
<!--  end top header  -->
<!-- main content -->
<table class="container" align="center"  border="0" cellpadding="0" cellspacing="0" width="600" bgcolor="ffffff">
<tbody><tr><td height="30"></td></tr> 
<!--section 1 -->
<tr>
    <td>
        <table class="container-middle" align="center" border="0" cellpadding="0" cellspacing="0" width="560" bgcolor="F1F2F7">
            <tr >
                <td>
                    <table class="mainContent" align="center" border="0" cellpadding="0" cellspacing="0" width="528">
                        <tbody><tr><td height="20"></td></tr>
                        <tr>
                            <td>
                                <table align="left" border="0" cellpadding="0" cellspacing="0">
                                    <tbody><tr><td height="30" width="30"></td></tr>
                                    </tbody>
                                </table>
                                <table class="section-item" align="left" border="0" cellpadding="0" cellspacing="0" width="360">
                                    <tbody>                                 									
                                    <tr><td height="15"></td></tr>
                                    <tr>
                                        <td style="color:#a4a4a4;font-size:12px;font-weight:normal;font-family:Helvetica,Arial,sans-serif;">
    										<p><strong>Name:</strong> [nome] [lastname]</p>
    										<p><strong>Email:</strong> [email]</p>
    										<p><strong>Phone:</strong> [phone]</p><br/>
                                            <p><strong>Property Type:</strong> [type]</p>
                                            <p><strong>Property Size:</strong> [size]</p>
                                            <p><strong>Property Doors:</strong> [door]</p>
										</td>
                                    </tr>
                                    <tr><td height="15"></td></tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr><td height="20"></td></tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </table>
    </td>
</tr>
<!-- end section 1-->
<tr><td height="35"></td></tr>
<!-- prefooter -->
</tbody>
</table>
<!--end main Content -->
<!-- footer -->
<table class="container" border="0" cellpadding="0" cellspacing="0" width="600">
    <tbody>
    <tr bgcolor="#58BC62"><td height="15"></td></tr>
    <tr bgcolor="#58BC62">
        <td  style="color:#fff;font-size:12px;font-weight:normal;font-family:Helvetica,Arial,sans-serif;" align="center">
           FrontPoint © Copyright 2016. All Rights Reserved.
        </td>
    </tr>
    <tr>
        <td bgcolor="#58BC62" height="14"></td>
    </tr>
    </tbody></table>
<!-- end footer-->
</td>
</tr>
<tr><td height="30"></td></tr>
</tbody>
</table>
</body>
</html>