<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
     <title>Blog List</title>
</head>

<body>
     <div class="container">
          <h1>Blog  List</h1>
          <a href="<?php echo base_url('index.php/Blog/add_blog') ?>" class="btn btn-xs btn-success">New Blog</a>
          <table class=" table table-bordered">
               <tr>
                    <th>Serial</th>
                    <th>title</th>
                    <th>photo</th>
                    <th> category</th>
                    <th> details</th>
                    <th> date</th>
                    <th>Action</th>
               </tr>
               <?php $i = 0;
               foreach ($list as $r) {
                    $i += 1; 
                   ?>
                    <tr>
                         <td><?php echo $i ?></td>
                         <td><?php echo $r->title ?></td>
                         <td><?php echo $r->photo ?></td>
                         <td><?php echo $r->category ?></td>
                         <td><?php echo $r->details ?></td>
                         <td><?php echo $r->date ?></td>
                         <td>
                              <a href="<?php echo base_url('index.php/Blog/edit_blog/' . $r->id) ?>" class="btn btn-xs btn-primary">Edit</a>
                              <a href="<?php echo base_url('index.php/Blog/delete/' . $r->id) ?>" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                         </td>
                    </tr>
               <?php } ?>
          </table>
     </div>
</body>

</html>