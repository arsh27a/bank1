<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Main page</title>
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
  <body>
  <!-- navbar -->
  <?php
        include_once('./html/nav-bar.html');  
    ?>
    <!-- hero section -->
    <?php
        include_once('./html/hero.html');  
    ?>
  
    <!-- content1 -->
    <div class="container">
      <div class="row">
        <div class="col-md-15">
          <p class="text text-#000000">Here to serve you better</p>
        </div>
      </div>
    </div>
    <!-- main section -->
    <div class="container main1">
      <div class="row">
        <div class="col-sm-4">
          <div class="card demo mx-auto">
            <img src="./images/Index-FD.jpeg" class="card-img-body" alt="..." />
            <div class="card-body">
              <p class="card-text">
                Secure growth with our reliable fixed deposit accounts.
              </p>
              <a href="./fixed-deposit.php" class="btn btn-outline-dark btn-block">
                <p class="btn-txt">Start Now!</p></a
              >
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card demo mx-auto">
            <img src="./images/Index-cA.jpeg" class="card-img-body" alt="..." />
            <div class="card-body">
              <p class="card-text">
                Smart banking solution. For a smart business.
              </p>
              <a href="./current-account.php" class="btn btn-outline-dark btn-block">
                <p class="btn-txt">Start Now!</p></a
              >
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card demo mx-auto">
            <img src="./images/Index-SA.jpeg" class="card-img-body" alt="..." />
            <div class="card-body">
              <p class="card-text">
                Secure your future with our high-yield savings accounts.
              </p>
              <a href="./saving-account.php" class="btn btn-outline-dark btn-block">
                <p class="btn-txt">Start Now!</p></a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- another main section -->
    <div class="container mt-3 main1">
      <div class="row">
        <div class="col-sm-4">
          <div class="card demo mx-auto">
            <img src="./images/Index-GD.jpeg" class="card-img-body" alt="..." />
            <div class="card-body">
              <p class="card-text">
                Unlock instant funds with our hassle-free gold loans.
              </p>
              <a href="./gold-loan.php" class="btn btn-outline-dark btn-block">
                <p class="btn-txt">Know More</p></a
              >
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card demo mx-auto">
            <img src="./images/Index-HM.jpeg" class="card-img-body "   alt="..." />
            <div class="card-body">
              <p class="card-text">
                Secure your dream home with our flexible loan options.
              </p>
              <a href="./home-loan.php" class="btn btn-outline-dark btn-block"
                ><p class="btn-txt">Apply Now</p>
              </a>
            </div> 
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card demo mx-auto">
            <img src="./images/main6.jpg.jpg" class="card-img-body" alt="..." />
            <div class="card-body">
              <p class="card-text">
                RBI Never asks for your Bank Account Details.
              </p>
              <a  class=" btn btn-outline-dark btn-block"> <p onclick="openPDF()" class="btn-txt">Know More</p></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- form --> 
  <div id="section1">
     <div class="container mt-5" style="border:.5px solid; padding:2rem; width:60%; border-radius:10px; margin-bottom:20px ">
        <div class="row">
          <div class="col-md-12">
            <form id="dataForm" method="POST" action="dbcustomer-master.php">
              
                <h2 class="text-center">Enter Your Details </h2>

                <!-- customer id -->
              <div class="form-group">
                    <label for="customer-id"></label>
                    <input
                    type="text"
                    class="form-control"
                    id="customer-id"
                    name="customer-id"
                    required
                    placeholder="Customer ID"
                    />
                </div>
                   <!-- text input -->
                   <div class="form-group">
                    <label for="name"></label>
                    <input
                    type="text"
                    class="form-control"
                    id="name"
                    name="name"
                    required
                    placeholder="Enter Name"
                    />
                </div>
                 <!-- father name-->
               <div class="form-group">
                    <label for="father-name"></label>
                    <input
                    type="text"
                    class="form-control"
                    id="father-name"
                    name="father-name"
                    placeholder="Enter Father Name"
                    />
                </div>
                 <!-- gender -->
                 <select class="form-select" id="gender" name="gender" style="margin-top:36px; margin-bottom:10px;"  aria-label="Default select example">
                      <option selected disabled>Gender</option>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                      <option value="other">Other</option>
                    </select>
                 <!--pan no -->
                 <div class="form-group">
                    <label for="PAN-no"></label>
                    <input
                    type="text"
                    class="form-control"
                    id="PAN-no"
                    name="PAN-no"
                    required
                    placeholder="Enter PAN"
                    />
                </div>
                 <!-- aadhar -->
                 <div class="form-group">
                    <label for="aadhar-no"></label>
                    <input
                    type="tel"
                    class="form-control"
                    id="aadhar-no"
                    name="aadhar-no"
                    placeholder="Enter Aadhar no."
                    />
                </div>
                     <!-- mobile -->
                     <div class="form-group">
                    <label for="mobile-no"></label>
                    <input
                    type="tel"
                    class="form-control"
                    id="mobile-no"
                    name="mobile-no"
                    placeholder="Enter Mobile no."
                    />
                </div>
                
                <!-- signup button -->
                <input type="submit" value="Submit" onclick="saveData()" style="margin-top:20px;" class="btn btn-outline-dark btn-block"/> 
            </form>
          </div>
        </div>
      </div>
    
    <!-- form end -->
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
    <script>
function openPDF() {
  var pdfUrl = "pdf/rbi-guidlines.pdf";
  window.open(pdfUrl, '_blank');
}
</script>
  </body>
</html>
