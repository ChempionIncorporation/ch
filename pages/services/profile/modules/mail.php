<?php
function sendMail($mail, $p)
{
    $shifr = "http://www.champ.in.ua/auth/?gr0me=" . $p;

    /* получатели */
    $to = $mail;

    /* тема/subject */
    $subject = "Подтверждение аккаунта в Champ.in.ua";

    /* сообщение */
    $message = '
                <html>
                    <head>
                        <title>Champion</title>
                    </head>
                    <body>
                        Доброго времени суток <br>
                        Подтверждение своего аккаунта нажмите по ссылке<br>
                            <a href=' . $shifr . '>Перейти</a>
                    </body>
                </html>
                ';

    /* Для отправки HTML-почты вы можете установить шапку Content-type. */
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";

    $re = mail($to, $subject, $message, $headers);
//   return $re;
}