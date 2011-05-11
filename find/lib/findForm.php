<html>
    <head>
        <title>Busqueda</title>
    </head>
    <body>
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
        </form>
    </body>
</html>