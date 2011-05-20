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
    // Sets the file that will make the listing and we send the two
    // variables: field and sort
    ajax.open("GET", "find.php?field="+field+"&sort="+sort+"&name="+name
        +"&surname="+surname);
    ajax.onreadystatechange=function() {
        if (ajax.readyState==4) {
            divFind.innerHTML = ajax.responseText
        }
    }
    ajax.send(null)
}

function leagueSortBy(field, sort, name, year, status){
    // We specify in the div where the result will be shown    
    divFind = document.getElementById('league');
    ajax=Ajax();
    // Sets the file that will make the listing and we send the two
    // variables: field and sort
    ajax.open("GET", "league.php?field="+field+"&sort="+sort+"&name="+name+"&year="+year+"&status="+status);
    ajax.onreadystatechange=function() {
        if (ajax.readyState==4) {
            divFind.innerHTML = ajax.responseText
        }
    }
    ajax.send(null)
}