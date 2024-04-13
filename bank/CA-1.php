<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>freedom Account</title>
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
      <img src="./images/CA-1-hero.jpg" class="fd w-100" alt="..." />
    </div>
    <!--  -->
    <div class="container mt-4">
      <h3>Freedom Account</h3>
      <div class="mt-3">
        Introducing Freedom Account - Your Gateway to Unleash Business
        Potential!
      </div>
      <div class="mt-3">
        Step into the realm where your business expansion takes centre stage.
        Recognizing the distinct requirements of self-employed individuals and
        growing enterprises, we present the Freedom Account – a meticulously
        crafted solution to liberate your business with a suite of services that
        will truly set your business free.
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
            <td>NIL</td>
          </tr>
          <tr>
            <td>Cash Deposit Limit at Branches</td>
            <td>Free* cash deposit limit of ₹ 4 Lakhs per month</td>
          </tr>
          <tr>
            <td>Cash Withdrawal at Branches</td>
            <td>Unlimited Cash Withdrawal</td>
          </tr>
          <tr>
            <td>Fund Transfers (IMPS, NEFT & RTGS)</td>
            <td>Zero charges</td>
          </tr>
          <tr>
            <td>Digital Business Solutions:</td>
            <td>
              <ul>
                <li>Point of Sale (POS) Device</li>
                <li>Payment Gateway Services</li>
                <li>QR Code</li>
                <li>Virtual Accounts</li>
              </ul>
            </td>
          </tr>
        </tbody>
      </table>
      <div class="mt-3">
        *Customers will be eligible for free cash deposit limit of up to ₹
        4lakhs for the first 4 months from the date of account opening. To
        further enjoy free cash deposit limits, customer needs to maintain an
        Average Monthly Balance of ₹ 10,000/-.
      </div>
      <hr class="hr" />
      <h3>Eligibility Criteria</h3>
      <div class="mt-3">
        Both new and existing customers of the Bank can open Freedom Account as
        per the KYC policy of the Bank.
      </div>
      <hr class="hr" />

      <div class="apply mt-3">
        <h3>How to Apply</h3>
        <ul>
          <li>
            Visit the <strong>nearest Bank</strong> branch and our Relationship
            Manager will guide you on the application process.
          </li>
          <li>
            You can also <strong>contact us </strong> at 1800 2080 and our
            Customer Care Executive will fix an appointment with our
            Relationship Manager to help you with the application process.
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
