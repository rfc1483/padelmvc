function Ajax(){
    var xmlhttp=false;
    try {
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
        try {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (E) {
            xmlhttp = false;
        }
    }
    if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
        xmlhttp = new XMLHttpRequest();
    }
    return xmlhttp;
}

function sortBy(field, sort, name, surname){
    //especificamos en div donde se mostrara el resultado
    divFind = document.getElementById('find');
    ajax=Ajax();
    //especificamos el archivo que realizara el listado
    //y enviamos las dos variables: field y sort
    ajax.open("GET", "find.php?field="+field+"&sort="+sort+"&name="+name
        +"&surname="+surname);
    ajax.onreadystatechange=function() {
        if (ajax.readyState==4) {
            divFind.innerHTML = ajax.responseText
        }
    }
    ajax.send(null)
}

function leagueSortBy(field, sort, name){
    //especificamos en div donde se mostrara el resultado
    divFind = document.getElementById('league');
    ajax=Ajax();
    //especificamos el archivo que realizara el listado
    //y enviamos las dos variables: field y sort
    ajax.open("GET", "league.php?field="+field+"&sort="+sort+"&name="+name+"&year="+year+"&status="+status);
    ajax.onreadystatechange=function() {
        if (ajax.readyState==4) {
            divFind.innerHTML = ajax.responseText
        }
    }
    ajax.send(null)
}