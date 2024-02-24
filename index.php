<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dharamsinh Desai University</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        .bg-img {
            /* Adjust the height to be 100vh minus the height of your navbar */
            height: calc(100vh - 56px);
            width: 100%;
            background: url("Images/DDU-main.jpg") no-repeat center / cover;
            display: flex;
            justify-content: center;
            align-items: center; /* This will center the content vertically */
            color: #fff; /* Ensures text is white for better visibility */
            text-align: center; /* Centers the text horizontally */
        }
        /* Ensure the navbar stays at the top */
        .navbar {
            width: 100%;
        }
        h1 {
            margin: 0; /* Removes default margin */
            color:#f8f9fa; /* Adjust font size as needed */
        }
		.myquote{
			width:100%
			height:10%;
		}
    </style>
</head>
<body>
    
<?php include('common/header.php') ?>
    <!-- Background image section -->
    <div class="bg-img">
        <h1 style="font-size:90px;">Dharamsinh Desai University</h1>
    </div>


	<section class="vh-40 bg-dark myquote">
  <div class="container py-3 h-1">
    <div class="row d-flex justify-content-center align-items-center h-80">
      <div class="col col-lg-10 col-xl-8">
        <figure class="note note-primary p-4">
          <blockquote class="blockquote">
            <p class="pb-2" style="color:white; opacity:0.7;">
              "If it's a good idea, go ahead and do it. It's much easier to apologize than it is to get
              permission."
            </p>
          </blockquote>
          <figcaption class="blockquote-footer mb-0">
            Grace Hopper
          </figcaption>
        </figure>

      </div>
    </div>
  </div>
</section>



<?php include('common/cards.php') ?>
<br><br><br>
<?php include('common/footer.php') ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>