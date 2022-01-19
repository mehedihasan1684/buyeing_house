<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
     <title>Update blog</title>
</head>

<body>
     <div class="container">
          <h1>Update blog </h1>
          <?php echo form_open('Blog/update_blog/' . $edit->id) ?>

               <table class=" table table-bordered">
                    <tr>
                         <th>title</th>
                         <td><input type="text" name="title" class="form-control" value="<?php echo $edit->title ?>"></td>
                         <th>photo</th>
                         <td><input type="text" name="photo" class="form-control" value="<?php echo $edit->photo ?>"></td>
                    </tr>
                    <tr>
                         <th>category</th>
                         <td><input type="text" name="category" class="form-control" value="<?php echo $edit->category ?>"></td>
                    </tr>
                    <tr>
                          <th>details</th>
                         <td><input type="text" name="details" class="form-control" value="<?php echo $edit->details ?>"></td>
                          <th>date</th>
                         <td><input type="text" name="date" class="form-control" value="<?php echo $edit->date ?>"></td>
                    </tr>


                         <td colspan="2"><input type="submit" class="btn btn-block btn-primary" value="Save"></td>
                    </tr>
                    <?php echo form_close() ?>
               </table>
          </form>
     </div>
</body>

</html>