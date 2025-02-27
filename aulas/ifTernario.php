<?php

    $nome = "Victor Costa";
    $email = "victorcosta@gmail.com";

?>

<div>
    <form method="post">
        nome: <input type="text" name="nome" value="<?php echo $nome ?>"> <br>
        email: <input type="text" name="email" value="<?php echo isset ($email) ? $email: "" ?>">

        <input type="submit">
    </form>
</div>