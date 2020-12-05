<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Loan Calculator</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css"
    />
    <script
      defer
      src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"
    ></script>
  </head>
  <bodys>
    <section class="section">
      <div class="container">
        <div class="content">
          <h1>Calculate Your EMI</h1>
          <p>
            This Loan Calculator will determine your estimated payments
            for loan amounts, interest rates and terms. You may calculate your EMI before apply.
          </p>
        </div>

        <div class="columns">
          <div class="column is-three-quarters">
            <div class="card">
              <div class="card-content">
                <form id="loan-form">
                  <div class="level">
                    <!-- Left side -->
                    <div class="level-left is-marginless">
                      <div class="level-item">
                        <p class="number">1</p>
                        Loan Amount
                      </div>
                    </div>

                    <!-- Right side -->
                    <div class="level-right">
                      <div class="level-item">
                        <div class="field">
                          <div class="control has-icons-left ">
                            <input class="input" id="amount" min="0" type="number" />
                            <span class="icon is-small is-left">
                              <i class="fa fa-dollar-sign"></i>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="level">
                    <!-- Left side -->
                    <div class="level-left is-marginless">
                      <div class="level-item">
                        <p class="number">2</p>
                        Interest Rate
                      </div>
                    </div>

            <!-- Right side -->
            <div class="level-right">
              <div class="level-item">
                <div class="field">
                  <div class="control has-icons-right">
                    <input class="input" id="interest" min="5" type="number" />
                    <span class="icon is-small is-right">
                      <i class="fa fa-percentage"></i>
                      
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="level">
                    <!-- Left side -->
                    <div class="level-left is-marginless">
                      <div class="level-item">
                        <p class="number">3</p>
                        Number Of Years
                      </div>
                    </div>

              <!-- Right side -->
              <div class="level-right">
                <div class="level-item">
                  <div class="field">
                    <div class="control has-icons-left">
                      <input class="input" id="years" min="1" type="number" />
                      <span class="icon is-small is-left">
                        <i class="fa fa-calendar"></i>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

                  <div class="control">
                    <button
                     class="button is-large is-fullwidth is-primary is-outlined">
                      Calculate
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </section>

    <!-- RESULTS -->
    <section class="section"> 
      <h1 class="title ">Calculated Results</h1>
<div class="columns is-multiline">
  
  <div class="column is-12-tablet is-6-desktop is-3-widescreen">
    <div class="notification is-primary has-text">
      <p id="monthlyPayment" class="title is-1">BDT</p>
      <p class="subtitle is-4">Monthly Payments</p>
    </div>
  </div>

    <div class="column is-12-tablet is-6-desktop is-3-widescreen">
        <div class="notification is-info has-text">
          <p id="totalInterest" class="title is-1">%</p>
          <p class="subtitle is-4">Total Interest</p>
        </div>
      </div>

      <div class="column is-12-tablet is-6-desktop is-3-widescreen">
        <div class="notification is-link has-text">
          <p id="totalPayment" class="title is-1">BDT</p>
          <p class="subtitle is-4">Total Amount</p>
        </div>
      </div>

</div>
</section>



  </body>

  <script src="app.js"></script>
</html>
