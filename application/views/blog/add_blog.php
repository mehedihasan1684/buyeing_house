<body>


     <?php echo form_open_multipart('Blog/save_blog') ?>

    

          <?php if (isset($edit_id)) { ?>
               <input type="hidden" name="id" value="<?php echo $edit_id->id ?>">
          <?php } ?>
 <table class=" table table-bordered">
                    <tr>
                      <th>title</th>
                         <td><input type="text" name="title" class="form-control"></td>
     
               <th> Photo:</th>
              <td> <input type="file" name="photo" class="form-control" value=""></td>
         </tr>
               <tr>
                     <th>category</th>
                         <td><input type="text" name="category" class="form-control"></td>

               <th> details:</th>
               <td ><input type="text" name="details" class="form-control"><?php echo  @$edit_id->details ?></td>

            <th>date</th>
             <td><input type="date" name="date" class="form-control"></td>
                      </tr>
              <th><strong>&nbsp;</strong></th>
               <td><input type="submit" class="btn btn-block btn-primary" value="Save"></td>
         

          <?php echo form_close() ?>
     </div>