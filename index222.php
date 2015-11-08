<!DOCTYPE html>
<html>
<head>
<title>Главная страница</title>
<meta charset="utf-8">
    

<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js'></script>
<script type='text/javascript'>

$(function(){
    $('.input_form').submit(function(e){
        e.preventDefault();
        var m_method=$(this).attr('method');
        var m_action=$(this).attr('action');
        var m_data=$(this).serialize();
        $.ajax({
            type: m_method,
            url: m_action,
            data: m_data,
            success: function(result){
            $('#res').html(result);
            }
        });                           
    });
}); //
</script>
    </head>
<body>
    <?php
    for($i=0;$i<5;$i++){
        echo " <div class="container"> ";
echo " <div id="res"></div> ";
echo " <form method="get" action="arduino" class="input_form">:";
echo " <input type="hidden" name="switch" value="zs1"> "; 
echo " <input type="submit" value="Основной свет 1">  ";
echo " </form> ";
    }
    ?>
<div class="container">
<div id="res"></div>
<form method="get" action="arduino" class="input_form">
<input type="hidden" name="switch" value="zs1">
<input type="submit" value="Основной свет 1">  
</form>

<form method="get" action="arduino" class="input_form">
<input type="hidden" name="switch" value="zs2">
<input type="submit" value="Основной свет 2">  
</form>

<form method="get" action="arduino" class="input_form">
<input type="hidden" name="switch" value="zs3">
<input type="submit" value="Подсветка круг">  
</form>

<form method="get" action="arduino" class="input_form">
<input type="hidden" name="switch" value="zs4">
<input type="submit" value="Подсветка стена">  
</form>

<form method="get" action="arduino" class="input_form">
<input type="hidden" name="switch" value="zs5">
<input type="submit" value="Картинная подсветка">  
</form>

<form method="get" action="arduino" class="input_form">
<input type="hidden" name="switch" value="off">
<input type="submit" value="Выключить все">  
</form>

<form method="get" action="arduino" class="input_form">
<input type="hidden" name="switch" value="on">
<input type="submit" value="Включить все">  
</form>

<form method="get" action="arduino" class="input_form">
<input type="hidden" name="switch" value="on">
<input type="submit" value="Яркий свет">  
</form>
</div>
</body>
</html>