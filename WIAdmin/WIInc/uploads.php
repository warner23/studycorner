

 <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Upload Center
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Upload center</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-xs-6 col-xl-12">
                            <!-- input box's box -->
<!-- start of multiple upload custom code-->


<!-- end of multiple custom upload code-->

<div class="container">
    <div class="page-header">
        <h1>WI Upload Center</h1>
        <h2>File Upload, Resize &amp; Crop Center </h2>
    </div>
    <br>
    <!-- The file upload form used as target for the file upload widget -->
<form  enctype="multipart/form-data" method="post" id="upload">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" multiple>

            <label for="file_upload">File:</label>
            <input type="file" name="file_upload" id="file_upload" multiple>
        <input class="button" type="submit" name="submit" value="Submit Content" onclick="uploads.files()">
        <progress id="progressBar" value="0" max="100"></progress>
        <h3 id="status"></h3>
        <p id="loaded_n_total"></p>
</form>


                        </div><!-- ./col -->
                     </div>
                     </section>

                     <script type="text/javascript" src="WICore/WIJ/upload.js"></script>