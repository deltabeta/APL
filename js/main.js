/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function() {
    $('#selecctall').click(function(event) {  //on click 
        if (this.checked) { // check select status
            $('.checkbox1').each(function() { //loop through each checkbox
                this.checked = true;  //select all checkboxes with class "checkbox1"               
            });
        } else {
            $('.checkbox1').each(function() { //loop through each checkbox
                this.checked = false; //deselect all checkboxes with class "checkbox1"                       
            });
        }
    });




});
function listcountry(param, page)
{
    indice = param - 1;
    if (document.getElementById('Company_comp_id_' + indice).checked == true) {
        if (document.all){
            //Internet Explorer
            var XhrObj = new ActiveXObject("Microsoft.XMLHTTP");
        }//fin if
        else{
            //Mozilla
            var XhrObj = new XMLHttpRequest();
        }//fin else

        //dÃ©finition de l'endroit d'affichage:

        var content = document.getElementById("country" + param);

        XhrObj.open("POST", page);

        //Ok pour la page cible
        XhrObj.onreadystatechange = function(){
            if (XhrObj.readyState == 4 && XhrObj.status == 200)
                content.innerHTML = XhrObj.responseText;
        }
        XhrObj.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        XhrObj.send(param);
    }
    else {
        var content = document.getElementById("country" + param);
        content.innerHTML = '';
        
    }


}//fin fonction SendData



function sendData(param, page)
{
    
        if (document.all){
            //Internet Explorer
            var XhrObj = new ActiveXObject("Microsoft.XMLHTTP");
        }//fin if
        else{
            //Mozilla
            var XhrObj = new XMLHttpRequest();
        }//fin else

        //dÃ©finition de l'endroit d'affichage:

        var content = document.getElementById("user");

        XhrObj.open("POST", page);

        //Ok pour la page cible
        XhrObj.onreadystatechange = function(){
            if (XhrObj.readyState == 4 && XhrObj.status == 200)
                content.innerHTML = XhrObj.responseText;
        }
        XhrObj.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        XhrObj.send(param);
    


}//fin fonction SendData





function read() {

    if (document.getElementById('create').checked) {
        document.getElementById("listexist").disabled = true;
        document.getElementById("ListContact_list_name").disabled = false;
    }
    if (document.getElementById('update').checked) {
        document.getElementById("ListContact_list_name").disabled = true;
        document.getElementById("listexist").disabled = false;
    }


}


