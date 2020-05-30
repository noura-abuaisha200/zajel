var tmp;

function doSearch() {
 

 document.designMode = "on";
        var sel = window.getSelection();
        sel.collapse(document.body, 0);

        while (window.find(tmp)) {
             
            document.execCommand("HiliteColor", false, 'inherit');


            sel.collapseToEnd();
        }
        document.designMode = "off";

 var text=document.getElementById("search").value;
 tmp=text;
var backgroundColor='#0066ff';
    if (window.find && window.getSelection) {
        document.designMode = "on";
        var sel = window.getSelection();
        sel.collapse(document.body, 0);

        while (window.find(text)) {
             
            document.execCommand("HiliteColor", true, backgroundColor);


            sel.collapseToEnd();
        }
        document.designMode = "off";
    }
            


}
