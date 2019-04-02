<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
        <title></title>
        <link rel="stylesheet" href="css/css_sablonu.css"/>
        <script type="text/javascript" src="jq/jquery.min.js"></script>
        <script type="text/javascript" src="jq/jquery.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $(".tab_content").hide();
                $("ul.tabs li:first").addClass("active").show();
                $(".tab_content:first").show();


                $("ul.tabs li").click(function () {
                    $("ul.tabs li").removeClass("active");
                    $(this).addClass("active");
                    $(".tab_content").hide();
                    var activeTab = $(this).find("a").attr("href");
                    $(activeTab).fadeIn();
                    return false;
                });

            });
        </script>
    </head>
    <body>
        <div class="sablonum">
            <?php require './include/menu.php'; ?>
        </div>
        

    </body>
</html>
