<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Email Format</title>
    <style type="text/css">
        h4,
        p {
            margin: 0;
        }

        table,
        td {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 13px;
        }

        a {
            color: #09F;
        }
    </style>
</head>

<body style="margin:0; background:#f8f8f8;">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#f8f8f8" style="padding-top:20px;">

        <tr>
            <td align="center" valign="top">
                <table width="600" border="0" cellspacing="0" cellpadding="10" bgcolor="#FFFFFF"
                    style="-webkit-box-shadow: 0px 0px 5px 0px rgba(50, 50, 50, 0.20); -moz-box-shadow: 0px 0px 5px 0px rgba(50, 50, 50, 0.20); box-shadow: 0px 0px 5px 0px rgba(50, 50, 50, 0.20);">
                    <tr>
                        <td>
                            <table width="100%" border="0" cellspacing="0" cellpadding="10">
                                <tr>
                                    <td align="left" colspan="2">
                                        <h4>Hey Admin,</h4>
                                        <p>Feedback comes Home Page</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table width="100%" border="0" cellspacing="0" cellpadding="5"
                                            bgcolor="#f8f8f8" style="border:1px solid #eee;">

                                            <tr>
                                                <td align="right" valign="top"><strong>Name :</strong></td>
                                                <td align="left" valign="top"> {{ $notifiable->name }} </td>
                                            </tr>


                                            <tr>
                                                <td align="right" valign="top"><strong>Mobile :</strong></td>
                                                <td align="left" valign="top"> {{ $notifiable->contactNumber }}
                                                </td>
                                            </tr>

                                            <tr>
                                                <td align="right" valign="top"><strong>Email :</strong></td>
                                                <td align="left" valign="top"> {{ $notifiable->email }}
                                                </td>
                                            </tr>


                                            <tr>
                                                <td align="right" valign="top"><strong>Course :</strong></td>
                                                <td align="left" valign="top"> {{ $notifiable->course }} </td>
                                            </tr>

                                            <tr>
                                                <td align="right" valign="top"><strong>Branch :</strong></td>
                                                <td align="left" valign="top">

                                                    {{ $notifiable->branch }}

                                                </td>
                                            </tr>


                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>

            </td>
        </tr>
        <tr>
            <td align="center" valign="top" style="padding:20px 0;"><a href="#">Ducat0</a></td>
        </tr>
    </table>
</body>

</html>
