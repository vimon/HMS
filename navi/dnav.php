<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>Fixed Navigation - Codrops</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <link rel="stylesheet" href="css/styleslide.css" type="text/css" charset="utf-8"/>
        <script type="text/javascript" src="js/jquery-1.3.2.js"></script>
    </head>
   <!-- <style>
        body{
            background:#fff url(desc.png) no-repeat 50px 100px;
            font-family:Arial;
            height:2000px;
        }
        .header
        {
            width:600px;
            height:56px;
            position:absolute;
            top:0px;
            left:25%;
            background:#fff url(title.png) no-repeat top left;
        }
        a.back{
            width:256px;
            height:73px;
            position:fixed;
            bottom:15px;
            right:15px;
            background:#fff url(codrops_back.png) no-repeat top left;
        }
        .scroll{
            width:133px;
            height:61px;
            position:fixed;
            bottom:15px;
            left:150px;
            background:#fff url(scroll.png) no-repeat top left;
        }
        .info{
            text-align:right;

        }
    </style>-->
    <body>
<!--        <div class="header"></div>
        <div class="scroll"></div>-->
       
               <a href="doctor.php" ><button class="btn btn-large btn-danger" style="height: 80px; width: 200px;" > <font color="red"><h2>Doctor Details</h2></font> </button></a>
               <a href="dleave.php" ><button class="btn btn-large btn-danger" style="height: 80px; width: 300px;" > <font color="red"><h2>Doctor Leave Updation</h2></font> </button></a>
               
                
    

   

        <script type="text/javascript">
            $(function() {
                $('#navigation a').stop().animate({'marginLeft':'-85px'},1000);

                $('#navigation > li').hover(
                    function () {
                        $('a',$(this)).stop().animate({'marginLeft':'-2px'},200);
                    },
                    function () {
                        $('a',$(this)).stop().animate({'marginLeft':'-85px'},200);
                    }
                );
            });
        </script>
    </body>
</html>
