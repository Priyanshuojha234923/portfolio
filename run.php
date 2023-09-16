
         <!--home control start-->
         <section>
        <div class="card card-primary" id="resumesetting">
              <div class="card-header bg-yellow">
                <span><b><i>Update Resume</b></span>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="control.php"method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputFile">Upload Photo</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="profile" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit"name="update-home" class="btn btn-primary bg-yellow" >Save Changes</button>
                </div>
              </form>
            </div> 
            </section>
             <!--home control end-->