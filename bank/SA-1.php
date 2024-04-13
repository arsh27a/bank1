<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Premium Saving account</title>
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
      <img src="./images/SA-1.jpeg" class="fd w-100" alt="..." />
    </div>
    <!--  -->
    <div class="container mt-4">
      <h3>Premium Savings Account</h3>
      
      <div class="mt-3">
      Welcome to the world of privileges! Premium Savings by Jana Bank provides you the banking services with no fees.
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
            <td> Rate of Interest</td>
            <td>
              <ul>
                <li>Attractive interest rates </li>
              </ul>
            </td>
          </tr>
          <tr>
            <td> Average Monthly Balance</td>
            <td>
              <ul>
                <li>
                Metro – INR 2,00,000/-
                </li>
                <li>Non Metro – INR 1,00,000/- </li>
               </ul>
            </td>
          </tr>
          <tr>
            <td>World of Privileges	
 </td>
            <td>
              <ul>
                <li>Complimentary Golf Lessons</li>
                <li>Complimentary OTT subscriptions</li>
                <li>Anywhere Banking</li>
                <li>Free SPA session </li>
              </ul>
            </td>
          </tr>
          <tr>
            <td> No Fees Banking Services	</td>
            <td>
              <ul> 
                <li>Free Select Debit Card</li>
                <li> Free Unlimited ATM transactions</li>
                <li> Free online and branch transactions</li>
                <li>Free Cheque Book Card</li>
               </ul>
            </td>
          </tr>
        </tbody>
      </table>

      <hr class="hr" />
      <h3>Eligibility Criteria</h3>
      <div class="mt-3">
      Applicants must be Resident Indians to be eligible to apply for Premium Savings Account of the following types: 
      </div>
      <div class="mt-3"><ul>
        <li>
        Individual (sole or joint account)
      </li>
      <li>
      Senior Citizen
      </li>
    </ul></div>
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
