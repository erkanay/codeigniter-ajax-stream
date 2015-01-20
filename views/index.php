<!DOCTYPE HTML>
<html>
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        <style>
            .myform{
                width:600px;margin: 0 auto;
            }
            .myform select,input{
                max-width: 120px;
            }
            .post-stream{
                width:600px;margin:0 auto;
            }
             
        </style>
    </head>
<body>
    <form action="" method="post" class="myform">
        <div class="alert alert-warning" role="alert"> 
            <?php echo validation_errors(); ?>
        </div>
        <span class="label label-default">Post</span>
        <textarea class="form-control" rows="8" cols="50" name="post"></textarea><br>
        <span class="label label-default">Category</span>
        <select class="form-control" name="category">
            {categories}
            <option value={c_id}>{name}</option>
            {/categories}
        </select>
        <br>
        <input type="submit" class="btn btn-success" value="Post it!"> 
    </form>
    <br>
    <div class="post-stream">
        <span class="label label-primary">Posts</span>
        <ul class="list-group">
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Morbi leo risus</li>
            <li class="list-group-item">Porta ac consectetur ac</li>
            <li class="list-group-item">Vestibulum at eros</li>
        </ul>
    </div>
</body>
</html>
 
