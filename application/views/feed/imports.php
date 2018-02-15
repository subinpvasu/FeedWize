 <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="highlight-box-hi">
                            Upload your feed
                    </div>
                        
                    
                    <div class="row">
                <div class="col-lg-3 import-type-box"  data-toggle="modal" data-target="#FeedModal" onclick="document.getElementById('csv').checked=true;document.getElementById('xml').checked=false;">
                        <img src="<?php echo base_url();?>/images/csvicon.ico" class="iconsize">
                    <div class="checkbox highlight-box">
                        <label><input type="checkbox" name="import_type" id="csv" value="csv">CSV</label>
                    </div>
                    </div>
                <div class="col-lg-3 import-type-box" data-toggle="modal" data-target="#FeedModal" onclick="document.getElementById('xml').checked=true;document.getElementById('csv').checked=false;">
                        <img src="<?php echo base_url();?>/images/xmlicon.png"  class="iconsize">
                        <div class="checkbox highlight-box" >
                    <label><input type="checkbox" name="import_type" id="xml" value="xml">XML</label>
                    </div>
                    </div>
                    </div>
                  </div>  
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->