/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function() {
    $('#selecctall').click(function(event) {  //on click 
        if (this.checked) { // check select status
            $('.checkbox1').each(function() { //loop through each checkbox
                this.checked = true;  //select    all checkboxes with class "checkbox1"               
            });
        } else {
            $('.checkbox1').each(function() { //loop through each checkbox
                this.checked = false; //deselect all checkboxes with class "checkbox1"                       
            });
        }
        
        
    });


document.getElementById("updateButton").disabled = true;
document.getElementById("tagUpdate").disabled = true;

        $("a[name='add']").attr('disabled','disabled');
        
        $("a[name='addall']").attr('disabled','disabled');


});
function listcountry(param, page)
{
    indice = param - 1;
    if (document.getElementById('Company_comp_id_' + indice).checked == true) {
        if (document.all) {
            //Internet Explorer
            var XhrObj = new ActiveXObject("Microsoft.XMLHTTP");
        }//fin if
        else {
            //Mozilla
            var XhrObj = new XMLHttpRequest();
        }//fin else

        //dÃ©finition de l'endroit d'affichage:

        var content = document.getElementById("country" + param);

        XhrObj.open("POST", page);

        //Ok pour la page cible
        XhrObj.onreadystatechange = function() {
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

    if (document.all) {
        //Internet Explorer
        var XhrObj = new ActiveXObject("Microsoft.XMLHTTP");
    }//fin if
    else {
        //Mozilla
        var XhrObj = new XMLHttpRequest();
    }//fin else

    //dÃ©finition de l'endroit d'affichage:

    var content = document.getElementById("user");

    XhrObj.open("POST", page);

    //Ok pour la page cible
    XhrObj.onreadystatechange = function() {
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
        document.getElementById("updateButton").disabled = true;
        document.getElementById("createButton").disabled = false;
        document.getElementById("tagUpdate").disabled = true;
        
        $("a[name='add']").attr('disabled','disabled');
        
        $("a[name='addall']").attr('disabled','disabled');
        
    }
    if (document.getElementById('update').checked) {
        document.getElementById("listexist").disabled = false;
        document.getElementById("ListContact_list_name").disabled = true;
        document.getElementById("updateButton").disabled = false;
        document.getElementById("createButton").disabled = true;
        document.getElementById("tagUpdate").disabled = false;
        
        $("a[name='add']").removeAttr('disabled');
        
        $("a[name='addall']").removeAttr('disabled');
    }
    

}


function  choosedate( )
{

    if ((document.getElementById('Press_press_status_0').checked) || (document.getElementById('Press_press_status_1').checked))
    {
        document.getElementById("Press_press_date_started").disabled = true;

        document.getElementById("yw4").disabled = true;
    }
    else {
        document.getElementById("Press_press_date_started").disabled = false;

        document.getElementById("yw4").disabled = false;

    }
}


function  check() {

    var elements = document.getElementsByName("contact_id[]");
    document.getElementById('Delete').disabled = true;
    for (var i = 0; i < elements.length; i++) {
        if (elements[i].checked) {
//            alert("The " + (i + 1) + ". radio button is checked");
            document.getElementById('Delete').disabled = false;
        }
    }

}


function  checkall() {
    if (document.getElementById('selecctall').checked) 
        document.getElementById('Delete').disabled = false;
    else 
        document.getElementById('Delete').disabled = true;
}


function  add_addall()
{
    var element = document.getElementById("tagCreate");
    if(element.selectedIndex != -1){
        
        if(document.getElementById('update').checked){
            $(document).ready(function() {
        $("a[name='add']").removeAttr('disabled');
        
        $("a[name='addall']").removeAttr('disabled');
        
        $("a[name='remove']").removeAttr('disabled');
        
        $("a[name='removeall']").removeAttr('disabled');
        });
        }
        
        
    }
    else {
        $("a[name='add']").attr('disabled','disabled');
        
        $("a[name='addall']").attr('disabled','disabled');
    }
    
}
function  Remove_Removeall()
{
    var element = document.getElementById("tagUpdate");
    if(element.selectedIndex != -1){
        $(document).ready(function() {
        $("a[name='Remove']").removeAttr('disabled');
        $("a[name='Removeall']").removeAttr('disabled');
        });
    }
    else {
        $("a[name='Remove']").attr('disabled','disabled');
        $("a[name='Removeall']").attr('disabled','disabled');
    }
    

}    
    
    
//    var element = document.getElementById("tag");
//    
//   // document.getElementById('add').disabled = true;
//    if(element.selectedIndex != -1)
//    { //alert( document.getElementBy('add').value); 
//       document.getElementById('add').enabled = true;
//        }
    

//    var elements = document.getElementsByID("tag");
//    for (var i = 0; i < elements.length; i++) {
//        if (elements[i].checked) {
//            alert("The " + (i + 1) + ". radio button is checked");
//        }
//    }


