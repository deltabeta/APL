/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function() {
    $('#selecctall').click(function(event) {  //on click 
        if(this.checked) { // check select status
            $('.checkbox1').each(function() { //loop through each checkbox
                this.checked = true;  //select all checkboxes with class "checkbox1"               
            });
        }else{
            $('.checkbox1').each(function() { //loop through each checkbox
                this.checked = false; //deselect all checkboxes with class "checkbox1"                       
            });         
        }
    });
    
});

function read(){
       
        if(document.getElementById('create').checked){
          document.getElementById("listexist").disabled = true; 
          document.getElementById("ListContact_list_name").disabled = false; 
        }
        if(document.getElementById('update').checked){
          document.getElementById("ListContact_list_name").disabled = true;
          document.getElementById("listexist").disabled = false; 
        }
        

    }


