<?php
include "config.php";
$query="SELECT *FROM tb_note";
$sql=mysqli_query($conn,$query);
$nomor=0;


//var_dump($result);
//die();




?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Belajar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
      footer{
        margin-top:17rem;
        margin-left:35rem;
        color:white;
      }
    </style>
</head>

<body style="background-image: url(https://i.pinimg.com/236x/68/d6/11/68d611cf833d9030711aad3a2939df8b.jpg);">
  <h3 class="text-dark">
    <!--Navbar bostrap-->
    <nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid d-flex justify-content-center">
    <a class="navbar-brand d-flex align-items-center" href="#">
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="mb-1 bi bi-journal-bookmark-fill" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M6 1h6v7a.5.5 0 0 1-.757.429L9 7.083 6.757 8.43A.5.5 0 0 1 6 8V1z"/>
        <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
        <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
      </svg>
      <span class="ms-1">CATATAN GUA !</span>
    </a>
  </div>
</nav>
  </h3>
  <div class="container">
    <div class="card shadow bg-body-tertiary rounded mb-4">
      <div class="card-body">
        <form class="d-flex" action="insert.php" method="post">
          <input class="form-control me-2" type="text" name="title_note" placeholder="JANGAN LUPA JUDUL !....." required>
          <input class="form-control me-2" type="text" name="note_note" placeholder="LU MAU NULIS ?....."required>
          <button class="btn btn-primary" type="submit">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
              class="bi bi-bookmark-plus" viewBox="0 0 16 16">
              <path
                d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z" />
              <path
                d="M8 4a.5.5 0 0 1 .5.5V6H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V7H6a.5.5 0 0 1 0-1h1.5V4.5A.5.5 0 0 1 8 4z" />
            </svg>
            Save
          </button>
        </form>
      </div>
    </div>

   
        <?php
              while($result=mysqli_fetch_assoc($sql)){
              
              
              ?>
       
            <div class="card">
            <div class="card-header">
               <?php echo ++$nomor?>
            </div>
            <div class="card-body">
              <h5 class="card-title"></h5> <?php echo $result ['title_note']?></h5>
              <p class="card-text" ></p> <?php echo $result ['note_note']?></p>
              <a href="update.php?edit=<?php echo $result ['id_note']?>" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                  fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                  <path
                    d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                  <path
                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                </svg>
                edit</a>
              <a href="delete.php?delete=<?php echo $result ['id_note']?>" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                  fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                  <path
                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                  <path
                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                </svg>
                delete</a>
            </div>
          </div>
        <?php }?>
      </div>
     
      <footer class="footer">
        <div class="footer-text">
            <p>Copyright & Copy; 2023 by RAJA DRMN_D | ALL Right Reserved</p>
        </div>
    </footer>
      


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
      </script>
</body>

</html>