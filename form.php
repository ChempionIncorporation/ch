<meta charset="utf-8">
<?php
if($_POST)
{
    $to = "web_champ@ukr.net"; //куда отправлять письмо
    $from = $_POST['send_mail']; // от кого
    //$subject = "Проверка почты"; //тема
    $message = '<center><b>Сообщение из сайта CHAMP.IN.UA</b></center><b style="font-size: 20px;">Имя</b>: '.$_POST['send_name'].';<br /> <b style="font-size: 20px;">Телефон</b>: '.$_POST['send_phone'].';<br /> <b style="font-size: 20px;">Комментарий</b>: '.$_POST['send_comment'].';';
    $headers = "Content-type: text/html; charset=UTF-8 \r\n";
    $headers .= "From: ".$from.">\r\n";
    $result = mail($to, $subject, $message, $headers);
    mail($from, "Champion", "Спасибо за вашу заявку, в течении нескольки минут с вами свяжентся менеджер. <br /> <b>Желаем удачи</b>", "From: champ.in.ua@ukr.net\r\n");
    //mail($to, $subject, $message, $headers);
    if ($result){
        echo "Cообщение успешно отправленно. Пожалуйста, оставайтесь на связи";
    }
}
?>