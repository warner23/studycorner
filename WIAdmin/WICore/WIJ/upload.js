var uploads = {};

uploads.files = function (){
     
// Variable to store your files
var files = getElementById("file_upload");
alert(files);

// Add events
$('input[type=file]').on('change', prepareUpload);

// Grab the files and set them to our variable
function prepareUpload(event)
{
  files = event.target.files;
}

alert(files);

function uploadFiles(event)
{
  event.stopPropagation(); // Stop stuff happening
    event.preventDefault(); // Totally stop stuff happening

    // START A LOADING SPINNER HERE

    // Create a formdata object and add the files
    var data = new FormData();
    $.each(files, function(key, value)
    {
        data.append(key, value);
    });

    alert(data);

     ajax.upload.addEventListener("progress", progressHandler, false);
        ajax.addEventListener("load", completeHandler, false);
        ajax.addEventListener("error", errorHandler, false);
        ajax.addEventListener("abort", abortHandler, false);


     $.ajax({
       url: "WICore/WIClass/WIAjax.php",
       type: "POST",
       data: {
           action: "upload",
           data: data
       },
       success: function (result) {
        alert(result);
       }

});
};
};


 function progressHandler(event){
        _("loaded_n_total").innerHTML = "Uploaded "+event.loaded+" bytes of "+event.total;

        var percent = (event.loaded / event.total) * 100;

        _("progressBar").value = math.round(percent);

        _("status").innerHTML = math.round(percent)+"% uploaded.... please wait";
    }

        function completeHandler(event){

        _("status").innerHTML = event.target.responseText;
        _("progressBar").value = 0 ;
    }

            function errorHandler(event){

        _("status").innerHTML = "Upload Failed";
    }

            function abortHandler(event){

        _("status").innerHTML = "Upload Failed";
    }
