<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Salary account</title>
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
    <link rel="stylesheet" href="./css/service.css" />
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
        <!--img section  -->
    <div class="img-section">
      <img src="./images/SA-3-HERO.jpg" class="fd w-100" alt="..." />
    </div>
    <!--  -->
    <div class="container mt-4">
      <h3>Salary Account</h3>
      
      <div class="mt-3">
      Salary account is designed for people from the salaried class. These accounts are for employees of corporate institutions. This product has a wide range of benefits and services, as well as seamless access to secure Net Banking and Mobile Banking services. Salary account provides you access to your account anytime, anywhere through robust banking services and transactional benefits.
       </div>
      <h4 class="mt-4">Key Benefits:</h4>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">FEATURES</th>
            <th scope="col">BENEFITS</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Average Monthly Balance </td>
            <td>
              <ul>
                <li>Nil</li>
              </ul>
            </td>
          </tr>
          <tr>
            <td>Rate of Interest</td>
            <td>
              <ul>
                <li>
                Attractive and High Rate of Interest
                 </li>
                </ul>
            </td>
          </tr>
          <tr>
            <td>RuPay Debit Card</td>
            <td>
              <ul>
                <li>Rupay Platinum Debit Card with high ATM Withdrawal and POS Limit</li>
              </ul>
            </td>
          </tr>
          <tr>
            <td>Cash Withdrawal Limit at Branches</td>
            <td>
              <ul> 
                <li>Unlimited cash withdrawal with no cap on amount and number of transactions </li>
               </ul>
            </td>
          </tr>
          <tr>
            <td>Mobile Banking App	</td>
            <td>
              <ul> 
                <li> Mobile Banking App to transact comfortably</li>
               </ul>
            </td>
          </tr>
        </tbody>
      </table>

      <hr class="hr" />
      <h3>Eligibility Criteria</h3>
      <div class="mt-3">
 <ul>
    <li>Both new and existing customers of Jana Small Finance Bank can have a Salary Account</li>
    <li>Individual customers can open Salary Accounts introduced by their employer</li>
 </ul>    
  </div>
     <hr class="hr" />

      <div class="apply mt-3">
        <h3>How to Apply</h3>
        <ul>
          <li>
            Visit the <strong>nearest Branch </strong> of ENB and our Relationship
            Manager will guide you on the application process.
          </li>
          <li>
            You can also <strong> contact us </strong> and our Customer Care Executive will fix a service appointment with our Relationship Manager to help you with the application process.
           </li>
         </ul>
      </div>
    </div> 
    <!-- form -->
    <?php
    include_once('./html/service-form.html');
    ?>
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
