<?php include("db_conect.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FEEDBACK</title> 
    <link rel="stylesheet" href="feedback1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
<form action="submit_feedback.php" method="POST">
<div class="background">
    <div class="container">
      <div class="screen">
        <div class="screen-header">
          <div class="screen-header-left">
            <div class="screen-header-button close"></div>
            <div class="screen-header-button maximize"></div>
            <div class="screen-header-button minimize"></div>
          </div>
          <div class="screen-header-right">
            <div class="screen-header-ellipsis"></div>
            <div class="screen-header-ellipsis"></div>
            <div class="screen-header-ellipsis"></div>
          </div>
        </div>
        <div class="screen-body">
            <div class="screen-body-item left">
              <div class="app-title">
                <span>FEEDBACK</span>
              </div>
            <div class="screen-body-item">
              <div class="app-form">
                <div class="app-form-group">
                  <input class="app-form-control" type="text" id="Nama" name="Name" placeholder="NAME">
                </div>
                <div class="app-form-group">
                  <input class="app-form-control" type="text" id="email" name="Email" placeholder="EMAIL">
                </div>
                <div class="app-form-group message">
                  <input class="app-form-control" id="message" name="Message" placeholder="MESSAGE">
                </div>
                <div class="app-form-group button">
                <input class="app-form-button" type="submit" name="Send"></input>
                </div>
              </div>
            </div>
          </div>



  
</form>

</body>

  