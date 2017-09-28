<html>
<head>
<title>Upload Form</title>
</head>
<body>

<h3>Your file was successfully uploaded!</h3>

<ul>
<?php foreach ($upload_data as $item => $value):?>
<li><?php echo $item;?>: <?php echo $value;?></li>
<?php endforeach; ?>
</ul>
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
         <?php $kounter=1; foreach($result as $item=>$value){ ?>
        <tr>       
        <td><?php echo $kounter++; ?></td>
        <td><?php echo $result['lastname']; ?></td>
        <td><?php echo $result['firstname']; ?></td>
        <td><?php echo $result['photograph']; ?></td>
        </tr>
        <?php } ?>
        
    </tbody>
    </table>

<p><?php echo anchor('upload', 'Upload Another File!'); ?></p>

</body>
</html>