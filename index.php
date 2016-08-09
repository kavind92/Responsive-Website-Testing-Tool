<?php
$width = filter_input(INPUT_GET, 'w');
$height = filter_input(INPUT_GET, 'h');
$url = filter_input(INPUT_GET, 'u');
//$url = "ScreenSize.html";
//w=9367233&h=9367091
if($width > 9367233 || $height > 9367091){
    echo "Maximum Size reached.<br/>SUPPORTED :Width->9367233px and height->9367091px.<br/>CURRENT :Width->$width px and Height->$height px.";
    exit();
}
$deviceId = 'w' . $width . 'h' . $height;

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="MultipleDeviceTesting.css" />
        <title>Website UI Responsive Testing Tool</title>
        <style>
            *{padding: 0px;margin: 0px;}
            html,body{padding: 0px;margin: 0px;height:100%;}
            #wrapper {min-height:100%;position:relative;}
            #header {padding: 15px 0px 10px 0px;text-align: center;}
            #content {text-align: center;padding-bottom:100px; /* Height of the footer element */}
            #footer {text-align: center;padding: 15px 0px 10px 0px;height:100px;position:absolute;bottom:0;left:0;width:100%;}
            #getUrl{padding: 15px 0px 10px 0px;text-align: center;}
            span{font-weight: bold;margin: 5px 7px 5px 7px;}
            input{width:30%; min-width:150px;padding: 5px;border-radius: 5px;border: 1px #009688 solid;margin: 5px 7px 5px 7px;}
            input[type=submit]{padding: 5px;min-width:100px; max-width:250px;border-radius: 5px;border: 1px #009688 solid;margin: 5px 7px 5px 7px;}
            #deviceList{height: auto;padding: 5px 0px 5px 0px;margin: 0px;}
            #outputBrowser{padding: 5px 5px 5px 15px;margin: 0px 0px;}
            iframe{margin: 0px 20px 0px 0px; border: 30px solid #3071a9; border-radius: 5px;}
            a{text-decoration: none;color: #fff;font-weight: bold;background-color: #2196F3;border-radius: 5px;padding: 5px 7px;margin: 5px 5px 0px 0px;display: inline-block;}
            #<?php echo $deviceId; ?>B{background-color: #006666;}
            #<?php echo $deviceId; ?>{width: <?php echo $width; ?>px;height: <?php echo $height; ?>px;}
            
            @media screen and (min-width: 200px){*{font-size:12px;} }
            @media screen and (min-width: 300px){*{font-size:13px;} }
            @media screen and (min-width: 400px){*{font-size:14px;} }
            @media screen and (min-width: 500px){*{font-size:15px;} }
            @media screen and (min-width: 600px){*{font-size:16px;} }
            @media screen and (min-width: 700px){*{font-size:17px;} }
            @media screen and (min-width: 800px){*{font-size:18px;} }
            @media screen and (min-width: 900px){*{font-size:19px;} }
            @media screen and (min-width: 1000px){*{font-size:20px;} }
            @media screen and (min-width: 1100px){*{font-size:21px;} }
            @media screen and (min-width: 1200px){*{font-size:22px;} }
            @media screen and (min-width: 1300px){*{font-size:23px;} }
            @media screen and (min-width: 1400px){*{font-size:24px;} }
            @media screen and (min-width: 1500px){*{font-size:25px;} }
            
        </style>
    </head>
    <body>
        <div id="wrapper">

            <div id="header">
                <h1>WEBSITE USER INTERFACE TESTING TOOL</h1>
            </div><!-- #header -->

            <div id="content">
                <?php if ($url == "") { ?>
                    <div id="getUrl">
                        <form action="<?php echo htmlentities(filter_input(INPUT_SERVER, 'PHP_SELF')); /*$_SERVER['PHP_SELF']*/ ?>" method="GET">
                            <span>Website :</span> <input type="text" name="u" /> <input type="submit" value="Display Website" />
                        </form>
                    </div>
                <?php } else { ?>
                    <div id="deviceList">
                        <a href="?w=200&h=500&u=<?php echo $url; ?>" id="w200h500B">200x500</a>
                        <a href="?w=240&h=500&u=<?php echo $url; ?>" id="w240h500B">240x500</a>
                        <a href="?w=300&h=500&u=<?php echo $url; ?>" id="w300h500B">300x500</a>
                        <a href="?w=400&h=500&u=<?php echo $url; ?>" id="w400h500B">400x500</a>
                        <a href="?w=500&h=500&u=<?php echo $url; ?>" id="w500h500B">500x500</a>
                        <a href="?w=600&h=500&u=<?php echo $url; ?>" id="w600h500B">600x500</a>
                        <a href="?w=700&h=500&u=<?php echo $url; ?>" id="w700h500B">700x500</a>
                        <a href="?w=800&h=500&u=<?php echo $url; ?>" id="w800h500B">800x500</a>
                        <a href="?w=900&h=500&u=<?php echo $url; ?>" id="w900h500B">900x500</a>
                        <a href="?w=1000&h=500&u=<?php echo $url; ?>" id="w1000h500B">1000x500</a>
                        <a href="?w=1100&h=500&u=<?php echo $url; ?>" id="w1100h500B">1100x500</a>
                        <a href="?w=1200&h=500&u=<?php echo $url; ?>" id="w1200h500B">1200x500</a>
                        <a href="?w=1300&h=500&u=<?php echo $url; ?>" id="w1300h500B">1300x500</a>
                        <a href="?w=1400&h=500&u=<?php echo $url; ?>" id="w1400h500B">1400x500</a>
                        <a href="?w=1500&h=500&u=<?php echo $url; ?>" id="w1500h500B">1500x500</a>
                        <a href="?w=1600&h=500&u=<?php echo $url; ?>" id="w1600h500B">1600x500</a>
                        <a href="?w=1700&h=500&u=<?php echo $url; ?>" id="w1700h500B">1700x500</a>
                        <a href="?w=1800&h=500&u=<?php echo $url; ?>" id="w1800h500B">1800x500</a>
                        <a href="?w=1900&h=500&u=<?php echo $url; ?>" id="w1900h500B">1900x500</a>
                        <a href="?w=2000&h=500&u=<?php echo $url; ?>" id="w2000h500B">2000x500</a>
                        <a href="<?php echo $url; ?>" target="_blank" id="">Full Screen</a>
                        <a href="<?php echo htmlentities(filter_input(INPUT_SERVER, 'PHP_SELF')); /*$_SERVER['PHP_SELF']*/ ?>">Reset Website</a>
                    </div>
                    <div id="outputBrowser">
                        <iframe id="<?php echo $deviceId; ?>" src="<?php echo $url; ?>">
                        <p>Your browser does not support iframes.</p>
                        </iframe>
                    </div>
                <?php } ?>
            </div><!-- #content -->

            <div id="footer">
                <?php

                function auto_copyright($year = 'auto') {
                    if (intval($year) == 'auto') {
                        $year = date('Y');
                    } if (intval($year) == date('Y')) {
                        echo intval($year);
                    } if (intval($year) < date('Y')) {
                        echo intval($year) . ' - ' . date('Y');
                    } if (intval($year) > date('Y')) {
                        echo date('Y');
                    }
                }
                echo "<br/><br/>&COPY; COPYRIGHT ";
                //auto_copyright(); // 2011
                auto_copyright('2015');  // 2010 - 2011 
                ?>
                <br/>
            </div><!-- #footer -->

        </div><!-- #wrapper -->

    </body>
</html>
