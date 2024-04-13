<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Back Bussiness account</title>
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
      <img src=" ./images/CA-3-hero.jpg" class="fd w-100" alt="..." />
    </div>
    <!--      -->
    <div class="container mt-4">
      <h3>MONEY Back Business Account</h3>
      <div class="mt-3">
        MONEY Back Business Account is designed and customized for your business
        needs. Our innovative Sweep Facility ensures that cash in your account
        is invested to multiply your otherwise idle funds.
      </div>
      <div class="mt-3">
        With rich business digital solution features, MONEY Back Business
        Account enables you to manage your business like a pro, while earning
        hassle-free returns.
      </div>
      <h4 class="mt-4">Product features and benefits:</h4>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">FEATURES</th>
            <th scope="col">BENEFITS</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Average Quarterly Balance</td>
            <td>
              <ul>
                <li>₹ 1,00,000/-</li>
              </ul>
            </td>
          </tr>
          <tr>
            <td></td>
            <td>
              <ul>
                <li>Attractive and High Interest Rate</li>
                <li>
                  Earn higher rate of interest on your idle funds in Current
                  Account with Jana Small Finance Bank
                </li>
                <li>Threshold amount - ₹ 10,00,000/-</li>
                <li>Amount multiple for sweep - ₹ 5,000/-</li>
              </ul>
            </td>
          </tr>
          <tr>
            <td>Digital Business Solution</td>
            <td>
              <ul>
                <li>Digital Collections through QR code</li>
                <li>Virtual Accounts</li>
                <li>Sponsor Bank Programs</li>
              </ul>
            </td>
          </tr>
          <tr>
            <td>Cash Deposit Limit at Branches</td>
            <td>
              <ul>
                <li>No charge upto ₹ 20,00,000 per month</li>
              </ul>
            </td>
          </tr>
        </tbody>
      </table>

      <hr class="hr" />
      <h3>Eligibility Criteria</h3>
      <div class="mt-3">
        Both new and existing customers of ENB Bank can have a MONEY Back
        Business Account
      </div>
      <div class="mt-3">As per KYC policy of the bank.</div>
      <hr class="hr" />

      <div class="apply mt-3">
        <h3>How to Apply</h3>
        <ul>
          <li>
            Visit the <strong>nearest branch </strong> of ENB Bank and our
            Relationship Manager will guide you on the application process.
          </li>
          <li>
            You can also <strong> contact us </strong> and our Customer Care
            Executive will fix a service appointment with our Relationship
            Manager to help you with the application process.
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
