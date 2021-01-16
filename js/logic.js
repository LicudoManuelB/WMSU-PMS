function exportTableToExcel(tableID, filename = ''){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');

    //specify file name
    filename = filename?filename+'.xls':'excel_data.xls';
    
    //create download link element
    downloadLink = document.createElement("a");

    document.body.appendChild(downloadLink);

    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff,tableHTML'],{
            type: dataType
        });
        navigator.msSaveOrOpenBlob(blob,filename);
    }else{
        //crate a lnk to the file
        downloadLink.href = 'data:'+dataType + ', '+tableHTML;

        //setting the file name
        downloadLink.download = filename;

        //triggering the function
        downloadLink.click();
    }
}

function printThis(btn,tableID){
    $("."+btn).click(function(){
        var printme = document.getElementById(tableID);
        var wme = window.open("","","width=900,height=700");
        wme.document.write(printme.outerHTML);
        wme.document.close();
        wme.focus();
        wme.print();
        wme.close();
    })
}