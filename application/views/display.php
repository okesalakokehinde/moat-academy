<html>
<head>
<title>display Form</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.css" type="text/css">
</head>
<body>




<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>s/n</th>
            <th>Last Name</th>
            <th>First name</th>
            <th>Photograph</th>
        </tr>
    </thead>
    <tbody>
         <?php $kounter=1; foreach($result as $item){ ?>
        <tr>       
        <td><?php echo $kounter++; ?></td>
        <td><?php echo $item['lastname']; ?></td>
        <td><?php echo $item['firstname']; ?></td>
        <td><img class="img img-responsive" width="40px" src="<?php echo base_url().$item['photograph']; ?>" /></td>
        </tr>
        <?php } ?>
        
    </tbody>
    </table>

<p><?php echo anchor('upload', 'Upload Another File!'); ?></p>

</body>
</html>