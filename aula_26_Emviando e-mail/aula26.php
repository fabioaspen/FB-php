<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form name="email" method="POST" action="envia.php">
        <label for="email_txt">E_mail</label><br>
        <input type="text" name="email_txt"><br>
        <label for="assunto_txt">Assunto</label><br>
        <input type="text" name="assunto_txt"><br>
        <label for="nsg_txt">Mensagem</label><br>
        <textarea name="msg_txt" rows="5" cols="50"></textarea> </textarea><br><br>
        <input type="submit" valeu="Enviar">

    </form>
</body>
</html>