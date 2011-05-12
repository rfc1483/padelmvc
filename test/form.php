<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Busqueda</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <script type="text/javascript" src="ajax.js"></script>
        <script type="text/javascript" src="messages.js"></script>
        <!--        <link href="estilos.css" rel="stylesheet" type="text/css"></link>-->
    </head>
    <body>
        <div id="find">
            <form name="form" id="form" class="form" action="index.php" method="post">
                <fieldset>
                    <legend>
                        <span>Busqueda</span>
                    </legend>
                    <input type="hidden" name="page_mode" id="page_mode" value="find" />
                    <div>
                        <label for="name">Nombre</label>
                        <input id="name" name="name" type="text" />
                    </div>
                    <div>
                        <label for="surname">Apellido</label>
                        <input id="surname" name="surname" type="text" />
                    </div>
                    <div>
                        <label for="phone">Telefono</label>
                        <input id="phone" name="phone" type="text" />
                    </div>
                    <div>
                        <label for="email">E-mail</label>
                        <input id="email" name="email" type="text" />
                    </div>
                    <div>
                        <label for="user_name">Usuario</label>
                        <input id="user_name" name="user_name" type="text" />
                    </div>
                    <div>
                        <label for="state">Estado</label>
                        <input id="state" name="state" type="text" />
                    </div>
                    <div>
                        <label for="paid">Pago</label>
                        <input id="paid" name="paid" type="text" />
                    </div>
                    <div>
                        <label for="league">Liga</label> <br />
                        <input id="league" name="league" type="text" />
                    </div>
                </fieldset>
                <fieldset class="submit">
                    <input name="submit" id="submit" value="Buscar" type="submit" class="button"/>
                </fieldset>
        </div>
    </body>
</html>