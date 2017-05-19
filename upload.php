<?php include 'includes/layout.inc.php';?>
<?php // Content Area?>

<?php
include 'db.php'
?>
    <br><br>
        <div class="container">
            <div class="row">

    <br>
                <div class="col-md-3 hidden-phone"></div>
                <div class="col-md-6" id="form-login">
                    <form  action="import.php" method="post" name="upload_excel" enctype="multipart/form-data">
                        <fieldset>
                            <legend><b>Import CSV/Excel file</b></legend>
                                <div class="control-group">
                                <div class="control-label">
                                    <label><b>CSV/Excel File:</b></label>
                                    <br><a href="download.php?file=data_format.xlsx">Click Here to Download Sample Format</a>
                                </div>
                                <input type="file" name="file" id="file">
                            </div>
                          <div class="control-group">
                                <div class="controls"><br>
                                <button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">Upload</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="col-md-3 hidden-phone"></div>
            </div>
            <br>
<?php include 'includes/footer.inc.php';?>
