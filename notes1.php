<?php include 'filelogic.php';?>
<!DOCTYPE html>
<html>
    <head>
        <title>Notes and pdf upload and download application</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, intial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="pdfnotes.css">
    </head>
    <body>
         <div class="row">
                <form action="filelogic.php" method="post" enctype="multipart/form-data">
                <h3>Upload Files</h3>
                <input type="file" name="myfile"><br>
                <button type="submit" name="save">Upload</button>   <p> <h3>NOTE:</h3> Change files name a/c to subject before upload.</p>    
                </form>
              </div>
           <h2>Download and Read following notes which you need.</h2>
              <table>
                <thead>
                    <th>ID</th>
                    <th>Filename</th>
                    <th>size (in mb)</th>
                    <th>Downloads</th>
                    <th>Action</th>
                </thead>
                <tbody>
                  <?php foreach ($files as $file): ?>
                    <tr>
                      <td><?php echo $file['id']; ?></td>
                      <td><?php echo $file['name']; ?></td>
                      <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
                      <td><?php echo $file['downloads']; ?></td>
                      <td><a href="notes1.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
                    </tr>
                  <?php endforeach;?>
                </tbody>
                </table>
              </div>
    </body>
</html>