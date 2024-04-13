<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home-loan</title>
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
      <img src="./images/HL-main.jpg" class="fd w-100" alt="..." />
    </div>
    <!--  -->
    <div class="container mt-5">
      <h3 class="text-center"> Home Loan</h3>
      <div class="mt-3">
      Welcome to <strong>ESB Bank </strong>,offers home loans which are designed to fulfil all your housing finance/mortgage requirements. You can avail Home Loans for Resale purchase/ flat or apartment purchase/ residential plot purchase plus construction/self-construction and even for re-financing existing loans you may have availed from other banks or housing finance companies. Apart from this you can also avail Loan against property(LAP) and loans for purchase of commercial property/shops.
      </div>
      <hr class="hr" />

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
            <td>Loan Amount & Tenure</td>
            <td>
              <ul>
                <li>Avail maximum Loan up to 3 crores for a tenure of up to 30 years </li>
              </ul>
            </td>
          </tr>
          <tr>
            <td> Multiple variants</td>
            <td>
                <p>You can avail home loan for a variety of purposes based on your requirement such as:</p>
              <ul>
                <li>Purchase a house / flat </li>
                <li>Purchase a plot for construction of a house</li>
                <li>Balance Transfer & Top-Up</li>
                <li>Loan Against Property</li>
                <li>Commercial Purchase</li>
                <li>Home Improvement</li>
               </ul>
            </td>
          </tr>
          <tr>
            <td>Attractive Interest Rate</td>
            <td>
                <p>We offer the following interest rates:</p>
              <ul>
                <li>Housing Loan - 9.75%-16.75% p.a. </li>
                <li> Non Housing Loan - 11.50%-23% p.a.</li>
                  </ul>
            </td>
          </tr>
          <tr>
            <td>Savings Account	</td>
            <td>
              <ul> 
                <li>We offer Zero balance Jana Bank Savings Account along with Debit Card at 5% interest with ease of repayment and savings with attractive rate of interest.</li>
               </ul>
            </td>
          </tr>
          <tr>
            <td>Convenient Banking Services	</td>
            <td>
               <ul>
                <li>Minimal Documentation and Doorstep Service leads to swift processing of your loan documents. </li>
                 <li>Safe custody of property documents </li>
                <li>Thorough due diligence on the title of the property </li>
                <li>Balance transfer of existing loan with additional top up </li>
                </ul>
            </td>
          </tr>
          <tr>
            <td> Insurance Facility</td>
            <td>
               <ul>
                 <li>Avail Credit Life Insurance for applicant and co-applicant </li>
               </ul>
            </td>
          </tr>
          <tr>
            <td>Subsidy </td>
            <td>
               <ul>
                <li><strong> Avail subsidy up to ₹ 2.67 lakhs under Pradhan Mantri Awaas Yojana</strong></li>
               </ul>
            </td>
          </tr>
        </tbody>
      </table>

      <hr class="hr" />
      <h3>Eligibility Criteria</h3>
      <div class="mt-3">
       <ul>
        <li>Both new and existing customers of ESB can avail Home Loan.</li>
        <li>Any self-employed professional, self-employed non-professional & salaried professional can avail Home Loan from us.</li>
        <li>Professionals with cash income can also apply.</li>
        <li>Minimum household income of Rs.10,000 per month</li>
        <li>Minimum 25 years of age and up to 75 years during loan maturity</li>
       </ul>
     </div>
      <hr class="hr" />

      <div class="apply mt-3">
        <h3>How to Apply</h3>
        <ul>
          <li>
             <strong>Share uour details </strong>  with us and our Customer Care Executive will fix a service appointment with our Relationship Manager to help you with the application process.  
          </li>
          <li>
            You can also <strong> contact us </strong> and our Customer Care Executive will fix a service appointment with our Relationship Manager to help you with the application process.
           </li>
         </ul>
      </div>
      <hr class="hr" />
<div class="note">
  <p>  <strong>Note:</strong>Our Home Loan services are currently available in Madhya Pradesh, Chhattisgarh, Rajasthan, Maharashtra, Tamil Nadu, Karnataka, Bihar, Jharkhand, Delhi NCR, West Bengal, Punjab, Haryana and Gujarat. Please feel free to get in touch with your nearest branch for any further details.</p>
</div>
    </div>
     <!--  -->
     <p class="text-center mt-4"> Don't have created customer ID?<a href="index.php#section1">   Please Enter Your Personal Details First.</p></a>

    <!-- form --> 
    <div class="container mt-4" style="border:.5px solid; padding:2rem; width:60%; border-radius:10px; margin-bottom:20px ">
        <div class="row">
          <div class="col-md-12">
            <form id="dataForm" action="dbhome-loan.php" method="post">
              
                <h2 class="text-center">Home Loan</h2>
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
               <!-- acc type -->
                <select class="form-select" id="bank" name="bank" style="margin-top:40px; margin-bottom:15px;" required aria-label="Default select example">
                       <option selected disabled>Select Bank</option>
                      <option value="icici">ICICI</option>
                      <option value="pnb">PNB</option>
                      <option value="axis">AXIS</option>
                    </select> 
                         <!-- plot area -->
                 <div class="form-group">
                    <label for=" plot-area"></label>
                    <input
                    type="text"
                    class="form-control"
                    id="plot-area"
                    required
                    name=" plot area"
                    placeholder="Enter Plot Area in square feet"
                    />
                </div>
                      <!-- demanded amount -->
                 <div class="form-group">
                    <label for="demanded-amount"></label>
                    <input
                    type="text"
                    class="form-control"
                    id="demanded-amount"
                    required
                    name="demanded-amount"
                    placeholder="Enter Demanded Amount"
                    />
                </div>
                <!-- tenure -->
                <select id="tenure" name="tenure" required class="form-select" onChange="calculateHomeLoan()" style="margin-top:40px; margin-bottom:15px;"  aria-label="Default select example">
                      <option selected disabled>Select Tenure</option>      
                      <option value="4">4 year</option>
                      <option value="5">5 year</option>
                      <option value="6">6 years</option>
                      <option value="7">7 years</option>
                      <option value="8">8 years</option>
                    </select>
                     <!-- actual amount -->
                 <div class="form-group">
                    <label for="loan-amount"></label>
                    <input
                    type="type"
                    class="form-control"
                    id="loan-amount"
                    name="loan-amount"
                    readonly
                    placeholder="Loan Amount"
                    />
                </div>
                <!--  -->
                <!-- signup button -->
                <input type="submit" value="Submit" onclick="saveData()" style="margin-top:30px;" class="btn btn-outline-dark btn-block"/>
                  
            </form>
          </div>
        </div>
      </div>
    
    <!-- form end -->
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
      function calculateHomeLoan() {

        const ValuePerSQFT = 9000; 
        const loanToValueRatio = 0.75;

        var plotArea = parseFloat(document.getElementById("plot-area").value);
        var expectedAmount = parseFloat(document.getElementById("demanded-amount").value);
        var tenure = parseInt(document.getElementById("tenure").value);

        const maximumLoanAmount = plotArea * ValuePerSQFT * loanToValueRatio;
        console.log(maximumLoanAmount)
        const actualLoanAmount = Math.min(expectedAmount, maximumLoanAmount);
        console.log(actualLoanAmount,tenure)
        const interest = actualLoanAmount * 0.08 * tenure ; 
        console.log(interest)
        const totalPayableAmount = actualLoanAmount + interest;
        document.getElementById("loan-amount").value = totalPayableAmount;
        }
    </script>
  </body>
</html>
