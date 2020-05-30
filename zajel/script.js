
function v_hidden1() {
    var elems = document.getElementsByClassName('v_hidden1');
    for (var i = 0; i < elems.length; i += 1) {
        elems[i].style.display = 'none';
    }

    var info = document.getElementsByClassName('info');
    info[0].style.backgroundSize = "0%";

    var area = document.getElementsByClassName('text-area');
    area[0].style.display = "block";

}

function v_hidden2() {
    var area = document.getElementsByClassName('text-area');
    area[0].style.display = "none";

    var elems = document.getElementsByClassName('v_hidden1');
    for (var i = 0; i < elems.length; i += 1) {
        elems[i].style.display = 'none';
        var info = document.getElementsByClassName('advertising');
        info[0].style.display = "none";

    }

    var info = document.getElementsByClassName('info');
    info[0].style.backgroundSize = "0%";

    var info = document.getElementsByClassName('advertising');
    info[0].style.display = "block";


}

function getMand() {
    /*    var value = document.getElementsByClassName('display-none');
    
        if (value[0].style.display == "tablerow")
            alert('s');
    
        if (value[0].style.display === "none")
            value[0].style.display = "table-row";
    
        //value[0].style.display = "none";
    
    
    
    
    
    
    */
    var count = document.getElementsByClassName("xx").length;
    for (var i = 0; i < count; i++) {
        if (document.getElementsByClassName("xx")[i].style.display == 'none') {
            document.getElementsByClassName("xx")[i].style.display = 'table-row';
        } else {
            document.getElementsByClassName("xx")[i].style.display = 'none';
        }
    }
}


