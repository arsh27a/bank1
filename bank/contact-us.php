<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us</title>
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
    <link rel="stylesheet" href=" ./css/service.css"/>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"
      rel="stylesheet"
    />
  </head>
  <body>
  <?php
 include_once('./html/nav-bar.html');
 ?>
 <!-- main section -->
         <!-- form -->
        <div
  class="container"
  style="
    border: 0.5px solid;
    padding: 2rem;
    width: 60%;
    border-radius: 10px;
    margin-bottom: 20px;
    margin-top:100px;
  "
>
  <div class="row">
    <div class="col-md-12">
      <form id="dataForm">
        <h2 class="text-center">Connect With Us </h2>
        <!-- text input -->
        <div class="form-group" method="post" action="dbcustomer-care.php">
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
          class="btn btn-outline-dark btn-block"
        />
      </form>
    </div>
  </div>
</div>
    <!-- form end -->
    <div class="container mt-5">
      <div class="row"> 
        <div class="col-6">
          <h3>Registered office</h3>
          <p> Electronic Service Bank (ESB)
              Tech Plaza, 3rd Floor,
              Survey No. 25/3 & 25/4,
              Electronic City Phase II,
              Hosur Road,
              Bengaluru – 560100
          </p>
             <p> <strong>Customer Care Banking Toll-free No.: 1800 500 7000 (24x7)
              Email: <span class="text-muted">customersupport@esbbank.in</span>
              Registered Office No.: 080-XXXXXXX
              Tech Support Toll-Free: 1800 600 8000 </strong>
            </p>
       </div>
       <div class="col-6">
        <h3 > Write To Us</h3>
          <p>
          Customer Care
          customercare@esbbank.in
          </p>
          <p>
          Grievance Redressal:
Grievance.redressal@esbbank.in
          </p>
          <p>
          Principal Nodal Officer:
nodal.officer@esbbank.in
          </p>
          <p>
          Investor Grievance Cell:
investor.grievance@esbbank.in
          </p>
          <p>
          Media Queries:
Press Relations Team
media@esbbank.in
          </p>
         <p>
Careers:
Human Resources Department
careers@esbbank.in
         </p>
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
   <!--  -->
   <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>