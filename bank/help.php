<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help Page</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="./css/main.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"
      rel="stylesheet"
    />
</head>
<body> <!-- navbar -->
    <?php
          include_once('./html/nav-bar.html');  
      ?>
      <!-- hero section -->
      <!-- help form -->
      <div
  class="container"
  style="
    border: 0.5px solid;
    padding: 2rem;
    width: 60%;
    border-radius: 10px;
    margin-top: 15vh;
  "
>
  <div class="row">
    <div class="col-md-12">
      <form id="dataForm">
        <h2 class="text-center">Apply Now</h2>
        <p>
          We appreciate your interest in ESB. Simply leave your details below to
          get a call back from our customer care.
        </p>
        <!-- text input -->
        <div class="form-group" action="dbcustomer-care.php" method="post">
          <label for="name"></label>
          <input
            type="text"
            class="form-control"
            id="name"
            required
            placeholder="Enter Name"
          />
        </div>
        <!-- mobile -->
        <div class="form-group">
          <label for="mobile-no"></label>
          <input
            type="tel"
            class="form-control"
            id="mobile-no"
            required
            placeholder="Enter Mobile No."
          />
        </div>
        <!-- email -->
        <div class="form-group">
          <label for="email"></label>
          <input
            type="text"
            class="form-control"
            id="email"
            required
            placeholder="Enter Email ID"
          />
        </div>
        <!-- city -->
        <div class="form-group">
          <label for="city"></label>
          <input
            type="text"
            class="form-control"
            id="city"
            required
            placeholder="Enter city"
          />
        </div>
        <!-- pincode -->
        <div class="form-group">
          <label for=" pincode"></label>
          <input
            type="tel"
            class="form-control"
            id="pincode"
            required
            placeholder="Enter Pincode"
          />
        </div>
        <!-- textbox -->
        <div class="form-group">
                    <label for="text-box"></label>
                    <input
                    type="text-area"
                    class="form-control"
                    id="text-box"
                    required
                    placeholder="Remark"
                    />
                </div>

        <!-- signup button -->
        <input
          type="submit"
          value="Submit"
          onclick="saveData()"
          style="margin-top: 20px"
          class="btn btn-primary btn-block"
        />
      </form>
    </div>
  </div>
</div>
 <!-- footer -->
 <?php
        include_once('./html/footer.html');
    ?>
     <!-- alert -->
  <?php
  include_once('./html/alert.html');
  ?>
      <!-- form end -->
   <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script> 
</body>
</html>
