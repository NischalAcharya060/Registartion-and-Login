<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>404</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <head>
        <link
          rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"
        />
        <link
          rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Arvo"
        />
        <style>
            
      body {
        margin: 0;
        padding: 0;
        font-family: "Arvo", serif;
      }

      .page_404 {
        height: 100vh;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .four_zero_four_bg {
        background-image: url(https://cdn.dribbble.com/users/285475/screenshots/2083086/dribbble_1.gif);
        background-size: cover;
        background-repeat: no-repeat;
        height: 500px;
        width: 500px;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .four_zero_four_bg h1 {
        font-size: 120px;
        margin: 0;
        color: #fff;
        text-shadow: 2px 2px #000;
      }

      .contant_box_404 {
        margin-top: -100px;
        text-align: center;
      }

      .contant_box_404 h3 {
        font-size: 50px;
        margin: 0;
        color: #444;
        text-transform: uppercase;
      }

      .contant_box_404 p {
        font-size: 18px;
        margin-top: 30px;
        color: #444;
      }

      .link_404 {
        color: #fff;
        background-color: #39ac31;
        padding: 12px 20px;
        border-radius: 25px;
        font-size: 20px;
        text-transform: uppercase;
        text-decoration: none;
        margin-top: 50px;
        display: inline-block;
        transition: all 0.3s ease-in-out;
      }

      .link_404:hover {
        background-color: #333;
        color: #fff;
        transform: scale(1.1);
      }

      footer {
        position: fixed;
        bottom: 0;
        right: 0;
        padding: 10px;
        background-color: #f2f2f2;
        font-size: 14px;
        font-family: Arial, sans-serif;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: #666;
      }

      footer a {
        color: #666;
        text-decoration: none;
        transition: color 0.2s ease;
      }

      footer a:hover {
        color: #000;
      }
            </style>
        
      </head>
      <body>
        <section class="page_404">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div class="col-sm-10 col-sm-offset-1 text-center">
                  <div class="four_zero_four_bg">
                    <h1 class="text-center">404</h1>
                  </div>
    
                  <div class="contant_box_404">
                    <h3 class="h2">Oops! Looks like you're lost</h3>
    
                    <p>
                      The page you are looking for is not available.Please feel free
                      to contact Nischal Acharya for better answer..
                    </p>
    
                    <button class="link_404" onclick="goBack()">Go Back</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <footer>
          &copy; Nischal Acharya -
          <script>
            document.write(new Date().getFullYear());
          </script>
          <script>
            function goBack() {
                window.history.back();
            }
        </script>
        </footer>
      
      </body>
</head>    