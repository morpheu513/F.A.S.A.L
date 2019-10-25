var arrHead = new Array();
arrHead = ['Farmer Name', 'Crop', 'Quantity', 'Price','Accept']; 
function addRow() {
  var tab = document.getElementById('reqtable');
  
  var rowCnt = tab.rows.length;       
  var tr = tab.insertRow(rowCnt);      
  tr = tab.insertRow(rowCnt);
  
  
  for (var c = 0; c < arrHead.length; c++) {
    var td = document.createElement('td');         
    td = tr.insertCell(c);
    
  
    if (c == 4) {         
  
        var form = document.createElement('form')
        var label = document.createElement('label');
        var button = document.createElement('input');
        var radio1 = document.createElement('input');
        var radio2 = document.createElement('input');
  
        button.setAttribute('type', 'button');
        button.setAttribute('value', 'Submit');
        button.setAttribute('id','table-button');
        radio1.setAttribute('type','radio');
        radio1.setAttribute('value','yes');
        radio1.setAttribute('name','rbutton');
        radio1.setAttribute('id','table-radio-button');
        radio2.setAttribute('type','radio');
        radio2.setAttribute('value','no');
        radio2.setAttribute('name','rbutton');
        radio2.setAttribute('id','table-radio-button');  
        
        button.setAttribute('onclick', 'submitreq(this)');
        
        label.appendChild(radio1);
        label.appendChild(document.createTextNode("yes"));
        label.appendChild(radio2);
        label.appendChild(document.createTextNode("no"));
        form.appendChild(label);
        form.appendChild(button);
        td.appendChild(form);
    }
    else {
        // CREATE AND ADD TEXTBOX IN EACH CELL.
        var ele = document.createElement('input');
        ele.setAttribute('type', 'text');
        ele.setAttribute('value', '');
        ele.setAttribute('id','table-box');
        td.appendChild(ele);
    }
  }
}