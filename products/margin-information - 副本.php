<?php include( "../header.php") ?>
  <script>document.getElementById("title").innerHTML = "Margin Information | AFTT";</script>
  <!-- banner -->
  <div class="container-fluid maket_header" style="background-color: #111827;">
    <div class="container ">
      <div class="row text-white">
        <div class="col-sm-12 p_center">
          <h1 class="mb-3 mt-5" style="font-size: 2.5rem;">Margin Information</h1>
          <h5 style="font-size: 1.25rem;">View our margin requirements, and other information regarding margin trading with AFTT</h5></div>
      </div>
    </div>
  </div>
  <div class="container-fluid" style="background: #f3f4f6; overflow: hidden;">
    <div class="container maket_header">
      <div class="row">
        <div class="col-12 pb-4">
          <h2 style="font-size: 2rem;">Forex Options</h2></div>
        <div class="col-12">
          <div class="accordion specification_card" id="accordionExample2">
            <div class="card">
              <div class="card-header" id="help_h_02_01">
                <h2 class="mb-0">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#help_02_01" aria-expanded="true" aria-controls="help_02_01" style="font-size: 1.25rem;">What are Initial and Maintenance Margin?</button></h2>
              </div>
              <div id="help_02_01" class="collapse show" aria-labelledby="help_h_02_01" data-parent="#accordionExample2" style="">
                <div class="card-body ">
                  <p style="font-size: 1rem;">Initial and maintenance margins create a buffer between your trading capacity and the margin close-out level, aiming to protect you from losses during adverse market conditions.
                    <br>1. Initial Margin: This is the pre-trade margin provided at the time of trading, meaning your account must have enough margin collateral to meet the initial margin requirement for the entire margin portfolio when establishing a new position.
                    <br>2. Maintenance Margin: This is a continuous margin, representing the minimum amount of cash or approved margin collateral your account must have while holding a position. Maintenance margin is used to calculate the margin usage; if your account fails to meet the maintenance margin requirement, we will close your position immediately.</p></div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="help_h_02_02">
                <h2 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#help_02_02" aria-expanded="flase" aria-controls="help_02_02" style="font-size: 1.25rem;">Margin Calculation for Forex Vanilla Options</button></h2>
              </div>
              <div id="help_02_02" class="collapse" aria-labelledby="help_h_02_02" data-parent="#accordionExample2" style="">
                <div class="card-body ">
                  <p style="font-size: 1rem;">Margin requirements for Forex options are calculated based on each currency pair (to ensure consistency with tiered margin requirements for each Forex spot and forward) and each expiry date. Each currency pair's margin requirement is capped at the maximum potential risk in Forex options, Forex spot, and forward positions, multiplied by the current spot margin requirement. This calculation also considers potential netting between Forex options, Forex spot, and forward positions.</p>
                  <p style="font-size: 1rem;">For limited risk strategies (e.g., selling a call spread), the margin requirement for the Forex options portfolio will be calculated based on the maximum future loss.</p>
                  <p style="font-size: 1rem;">For unlimited risk strategies (e.g., short naked options), the margin requirement will equal the notional amount multiplied by the current spot margin requirement.</p>
                  <p style="font-size: 1rem;">If a client's margin is affected by the current Forex spot margin requirement rather than the maximum future loss, tiered margin rates should be used when calculating Forex options margin. The current Forex spot margin level will be tiered according to the USD notional amount; the higher the potential notional amount, the higher the margin rate. The tiered margin requirement will be calculated for each currency pair. When calculating Forex options margin, the current spot margin requirement for each currency pair will be applied as either tiered or blended margin rates, depending on the highest potential risk among the Forex options, Forex spot, and forward positions.</p>
                  <p style="font-size: 1rem;">Example 1: Selling a call spread or limited risk strategy
                    <br>You sell a call spread for USD/CAD 10 million at strikes of 1.41 and 1.42.
                    <br>The current spot price is 1.40.
                    <br>The margin requirement will be the maximum future loss of USD 71,429 (USD 10 million x (1.42 – 1.41) = CAD 100,000 / USD @ 1.40).</p>
                  <p style="font-size: 1rem;">Example 2: Unlimited downside risk
                    <br>You sell a put option for USD/CAD 10 million. You have unlimited downside risk. Therefore, the margin requirement will equal the notional amount multiplied by the current spot margin requirement.</p>
                  <p style="font-size: 1rem;">The current spot margin rate is determined by the highest potential risk, which is USD 10 million.
                    <br>Thus, the current spot price is the blended margin rate of 2.2% ( (1% x USD 3 million + 2% x USD 2 million + 3% x USD 5 million) / USD 10 million).
                    <br>Therefore, the margin requirement is USD 220,000 (2.2% x USD 10 million).</p></div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="help_h_02_03">
                <h2 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#help_02_03" aria-expanded="flase" aria-controls="help_02_03" style="font-size: 1.25rem;">Margin Information for Forex Touch Options (Professional Clients Only)</button></h2>
              </div>
              <div id="help_02_03" class="collapse" aria-labelledby="help_h_02_03" data-parent="#accordionExample2" style="">
                <div class="card-body ">
                  <p style="font-size: 1rem;">Margin calculation for Forex options does not apply to touch options, but holding a position will affect the "amount available for margin trading," which will be displayed in the "Account Summary."</p>
                  <p style="font-size: 1rem;">Therefore, if the account holds margin positions, adding a touch option position will increase the "margin usage."</p>
                  <p style="font-size: 1rem;">Note: Before opening a position, we will conduct a pre-check to ensure that you will not accidentally open a touch option position that leads to a margin utilization rate exceeding 100%.</p></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid" style="background: #f3f4f6; overflow: hidden;">
    <div class="container ">
      <div class="row">
        <div class="col-12 pb-4">
          <h2 style="font-size: 2rem;">Futures</h2></div>
        <div class="col-12">
          <div class="accordion specification_card" id="accordionExample">
            <div class="card">
              <div class="card-header" id="help_h_01_01">
                <h2 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#help_01_01" aria-expanded="true" aria-controls="help_01_01" style="font-size: 1.25rem;">What are Initial and Maintenance Margin?</button></h2>
              </div>
              <div id="help_01_01" class="collapse" aria-labelledby="help_h_02_01" data-parent="#accordionExample" style="">
                <div class="card-body ">
                  <p style="font-size: 1rem;">Initial and maintenance margins create a buffer between your trading capacity and the margin close-out level, aiming to protect you from losses during adverse market conditions.
                    <br>1. Initial Margin: This is the pre-trade margin provided at the time of trading, meaning your account must have enough margin collateral to meet the initial margin requirement for the entire margin portfolio when establishing a new position.
                    <br>2. Maintenance Margin: This is a continuous margin, representing the minimum amount of cash or approved margin collateral your account must have while holding a position. Maintenance margin is used to calculate the margin usage; if your account fails to meet the maintenance margin requirement, we will close your position immediately.</p></div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="help_h_01_02">
                <h2 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#help_01_02" aria-expanded="flase" aria-controls="help_01_02" style="font-size: 1.25rem;">Margin Rate: Futures</button></h2>
              </div>
              <div id="help_01_02" class="collapse" aria-labelledby="help_h_01_02" data-parent="#accordionExample" style="">
                <div class="card-body ">
                  <p>Initial and Maintenance Margin</p>
                  <table class="table table-striped" data-widget-id="50793" cellspacing="0" style="width:100%">
                    <thead>
                      <tr>
                        <th data-column-id="19012" data-column-type="FuturesBaseDescription" class="column-19012 r1 h-font">Futures Contract</th>
                        <th data-column-id="19015" data-column-type="FuturesInitialMargin" class="column-19015 h-font">Initial Margin</th>
                        <th data-column-id="19016" data-column-type="FuturesMaintanenceMargin" class="column-19016 h-font">Maintenance Margin</th>
                        <th data-column-id="19011" data-column-type="FuturesSector" class="column-19011 h-font">Group</th></tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">1-Month SOFR</td>
                        <td class="bgrCol col1 column-19015">USD 1,380</td>
                        <td class="bgrCol col2 column-19016">USD 1,250</td>
                        <td class="bgrCol col3 column-19011">Financials - Short-term Interest Rates</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">10 Year Government of Canada Bond</td>
                        <td class="bgrCol2 col1 column-19015">CAD 2,706</td>
                        <td class="bgrCol2 col2 column-19016">CAD 2,460</td>
                        <td class="bgrCol2 col3 column-19011">Financials - Bonds</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">10-Year U.S. Treasury Note</td>
                        <td class="bgrCol col1 column-19015">USD 2,200</td>
                        <td class="bgrCol col2 column-19016">USD 2,000</td>
                        <td class="bgrCol col3 column-19011">Financials - Bonds</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">10-year Japanese Govt. Bond</td>
                        <td class="bgrCol2 col1 column-19015">JPY 1,653,168</td>
                        <td class="bgrCol2 col2 column-19016">JPY 1,502,880</td>
                        <td class="bgrCol2 col3 column-19011">Financials - Bonds</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">2 year Government of Canada Bond</td>
                        <td class="bgrCol col1 column-19015">CAD 704</td>
                        <td class="bgrCol col2 column-19016">CAD 640</td>
                        <td class="bgrCol col3 column-19011">Financials - Bonds</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">2-Year U.S. Treasury Note</td>
                        <td class="bgrCol2 col1 column-19015">USD 1,210</td>
                        <td class="bgrCol2 col2 column-19016">USD 1,100</td>
                        <td class="bgrCol2 col3 column-19011">Financials - Bonds</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">3 Month Bankers' Acceptance</td>
                        <td class="bgrCol col1 column-19015">CAD 420</td>
                        <td class="bgrCol col2 column-19016">CAD 380</td>
                        <td class="bgrCol col3 column-19011">Financials - Short-term Interest Rates</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">3 Month CORRA</td>
                        <td class="bgrCol2 col1 column-19015">CAD 1,056</td>
                        <td class="bgrCol2 col2 column-19016">CAD 960</td>
                        <td class="bgrCol2 col3 column-19011">Financials - Short-term Interest Rates</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">3 Month Euribor</td>
                        <td class="bgrCol col1 column-19015">EUR 1,080</td>
                        <td class="bgrCol col2 column-19016">EUR 980</td>
                        <td class="bgrCol col3 column-19011">Financials - Short-term Interest Rates</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">3 Month SARON</td>
                        <td class="bgrCol2 col1 column-19015">CHF 1,100</td>
                        <td class="bgrCol2 col2 column-19016">CHF 1,000</td>
                        <td class="bgrCol2 col3 column-19011">Financials - Short-term Interest Rates</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">3 Month SONIA</td>
                        <td class="bgrCol col1 column-19015">GBP 1,430</td>
                        <td class="bgrCol col2 column-19016">GBP 1,300</td>
                        <td class="bgrCol col3 column-19011">Financials - Short-term Interest Rates</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">3-Month SOFR</td>
                        <td class="bgrCol2 col1 column-19015">USD 880</td>
                        <td class="bgrCol2 col2 column-19016">USD 800</td>
                        <td class="bgrCol2 col3 column-19011">Financials - Short-term Interest Rates</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">3-Year U.S. Treasury Note</td>
                        <td class="bgrCol col1 column-19015">USD 1,870</td>
                        <td class="bgrCol col2 column-19016">USD 1,700</td>
                        <td class="bgrCol col3 column-19011">Financials - Bonds</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">30 Day Interbank Cash Rate</td>
                        <td class="bgrCol2 col1 column-19015">AUD 720</td>
                        <td class="bgrCol2 col2 column-19016">AUD 650</td>
                        <td class="bgrCol2 col3 column-19011">Financials - Short-term Interest Rates</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">30-Day Federal Funds</td>
                        <td class="bgrCol col1 column-19015">USD 1,380</td>
                        <td class="bgrCol col2 column-19016">USD 1,250</td>
                        <td class="bgrCol col3 column-19011">Financials - Short-term Interest Rates</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">5-Year U.S. Treasury Note</td>
                        <td class="bgrCol2 col1 column-19015">USD 1,430</td>
                        <td class="bgrCol2 col2 column-19016">USD 1,300</td>
                        <td class="bgrCol2 col3 column-19011">Financials - Bonds</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">90 Day Bank Accepted Bills</td>
                        <td class="bgrCol col1 column-19015">AUD 1,150</td>
                        <td class="bgrCol col2 column-19016">AUD 1,040</td>
                        <td class="bgrCol col3 column-19011">Financials - Short-term Interest Rates</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">90 Day New Zealand Bank Bill</td>
                        <td class="bgrCol2 col1 column-19015">NZD 990</td>
                        <td class="bgrCol2 col2 column-19016">NZD 900</td>
                        <td class="bgrCol2 col3 column-19011">Financials - Short-term Interest Rates</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">AEX Index</td>
                        <td class="bgrCol col1 column-19015">EUR 11,610</td>
                        <td class="bgrCol col2 column-19016">EUR 10,550</td>
                        <td class="bgrCol col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">ASX SPI 200 Index</td>
                        <td class="bgrCol2 col1 column-19015">AUD 17,420</td>
                        <td class="bgrCol2 col2 column-19016">AUD 15,830</td>
                        <td class="bgrCol2 col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">ATX® Index</td>
                        <td class="bgrCol col1 column-19015">EUR 4,092</td>
                        <td class="bgrCol col2 column-19016">EUR 3,720</td>
                        <td class="bgrCol col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">AUDUSD</td>
                        <td class="bgrCol2 col1 column-19015">USD 1,600</td>
                        <td class="bgrCol2 col2 column-19016">USD 1,450</td>
                        <td class="bgrCol2 col3 column-19011">Financials - Currencies</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">Australian 10 Year T-Bond</td>
                        <td class="bgrCol col1 column-19015">AUD 3,135</td>
                        <td class="bgrCol col2 column-19016">AUD 2,850</td>
                        <td class="bgrCol col3 column-19011">Financials - Bonds</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">Australian 20 Year T-Bond</td>
                        <td class="bgrCol2 col1 column-19015">AUD 4,140</td>
                        <td class="bgrCol2 col2 column-19016">AUD 3,760</td>
                        <td class="bgrCol2 col3 column-19011">Financials - Bonds</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">Australian 3 Year T-Bond.</td>
                        <td class="bgrCol col1 column-19015">AUD 1,170</td>
                        <td class="bgrCol col2 column-19016">AUD 1,060</td>
                        <td class="bgrCol col3 column-19011">Financials - Bonds</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">BRLUSD</td>
                        <td class="bgrCol2 col1 column-19015">USD 1,749</td>
                        <td class="bgrCol2 col2 column-19016">USD 1,590</td>
                        <td class="bgrCol2 col3 column-19011">Financials - Currencies</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">Brent Crude</td>
                        <td class="bgrCol col1 column-19015">USD 5,841</td>
                        <td class="bgrCol col2 column-19016">USD 5,310</td>
                        <td class="bgrCol col3 column-19011">Energies</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">Brent Crude Oil LD European</td>
                        <td class="bgrCol2 col1 column-19015">USD 5,874</td>
                        <td class="bgrCol2 col2 column-19016">USD 5,340</td>
                        <td class="bgrCol2 col3 column-19011">Energies</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">Butter Cash-settled</td>
                        <td class="bgrCol col1 column-19015">USD 1,870</td>
                        <td class="bgrCol col2 column-19016">USD 1,700</td>
                        <td class="bgrCol col3 column-19011">Agriculture</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">CAC 40 Index</td>
                        <td class="bgrCol2 col1 column-19015">EUR 6,050</td>
                        <td class="bgrCol2 col2 column-19016">EUR 5,500</td>
                        <td class="bgrCol2 col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">CAC 40 Index Mini</td>
                        <td class="bgrCol col1 column-19015">EUR 605</td>
                        <td class="bgrCol col2 column-19016">EUR 550</td>
                        <td class="bgrCol col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">CADUSD</td>
                        <td class="bgrCol2 col1 column-19015">USD 1,100</td>
                        <td class="bgrCol2 col2 column-19016">USD 1,000</td>
                        <td class="bgrCol2 col3 column-19011">Financials - Currencies</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">CBOE Volatility Index (VIX)</td>
                        <td class="bgrCol col1 column-19015">USD 6,930</td>
                        <td class="bgrCol col2 column-19016">USD 6,300</td>
                        <td class="bgrCol col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">CHFUSD</td>
                        <td class="bgrCol2 col1 column-19015">USD 4,070</td>
                        <td class="bgrCol2 col2 column-19016">USD 3,700</td>
                        <td class="bgrCol2 col3 column-19011">Financials - Currencies</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">CNH/USD Futures</td>
                        <td class="bgrCol col1 column-19015">USD 1,375</td>
                        <td class="bgrCol col2 column-19016">USD 1,250</td>
                        <td class="bgrCol col3 column-19011">Financials - Currencies</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">Cheese Cash-settled</td>
                        <td class="bgrCol2 col1 column-19015">USD 2,101</td>
                        <td class="bgrCol2 col2 column-19016">USD 1,910</td>
                        <td class="bgrCol2 col3 column-19011">Agriculture</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">Class III Milk</td>
                        <td class="bgrCol col1 column-19015">USD 1,771</td>
                        <td class="bgrCol col2 column-19016">USD 1,610</td>
                        <td class="bgrCol col3 column-19011">Agriculture</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">Cocoa</td>
                        <td class="bgrCol2 col1 column-19015">USD 17,320</td>
                        <td class="bgrCol2 col2 column-19016">USD 15,740</td>
                        <td class="bgrCol2 col3 column-19011">Softs</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">Coffee C</td>
                        <td class="bgrCol col1 column-19015">USD 7,315</td>
                        <td class="bgrCol col2 column-19016">USD 6,650</td>
                        <td class="bgrCol col3 column-19011">Softs</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">Copper</td>
                        <td class="bgrCol2 col1 column-19015">USD 6,050</td>
                        <td class="bgrCol2 col2 column-19016">USD 5,500</td>
                        <td class="bgrCol2 col3 column-19011">Base Metals</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">Corn</td>
                        <td class="bgrCol col1 column-19015">USD 1,430</td>
                        <td class="bgrCol col2 column-19016">USD 1,300</td>
                        <td class="bgrCol col3 column-19011">Agriculture</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">Cotton No. 2</td>
                        <td class="bgrCol2 col1 column-19015">USD 2,585</td>
                        <td class="bgrCol2 col2 column-19016">USD 2,350</td>
                        <td class="bgrCol2 col3 column-19011">Softs</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">DAX® Index</td>
                        <td class="bgrCol col1 column-19015">EUR 33,825</td>
                        <td class="bgrCol col2 column-19016">EUR 30,750</td>
                        <td class="bgrCol col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">Dutch TTF Gas Month</td>
                        <td class="bgrCol2 col1 column-19015">EUR 5,005</td>
                        <td class="bgrCol2 col2 column-19016">EUR 4,550</td>
                        <td class="bgrCol2 col3 column-19011">Energies</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">E-Mini S&amp;P MidCap 400</td>
                        <td class="bgrCol col1 column-19015">USD 18,260</td>
                        <td class="bgrCol col2 column-19016">USD 16,600</td>
                        <td class="bgrCol col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">E-Mini Silver</td>
                        <td class="bgrCol2 col1 column-19015">USD 6,336</td>
                        <td class="bgrCol2 col2 column-19016">USD 5,760</td>
                        <td class="bgrCol2 col3 column-19011">Precious Metals</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">E-micro AUD/USD</td>
                        <td class="bgrCol col1 column-19015">USD 170</td>
                        <td class="bgrCol col2 column-19016">USD 150</td>
                        <td class="bgrCol col3 column-19011">Financials - Currencies</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">E-micro CAD/USD</td>
                        <td class="bgrCol2 col1 column-19015">USD 110</td>
                        <td class="bgrCol2 col2 column-19016">USD 100</td>
                        <td class="bgrCol2 col3 column-19011">Financials - Currencies</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">E-micro CHF/USD</td>
                        <td class="bgrCol col1 column-19015">USD 407</td>
                        <td class="bgrCol col2 column-19016">USD 370</td>
                        <td class="bgrCol col3 column-19011">Financials - Currencies</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">E-micro EURUSD</td>
                        <td class="bgrCol2 col1 column-19015">USD 240</td>
                        <td class="bgrCol2 col2 column-19016">USD 210</td>
                        <td class="bgrCol2 col3 column-19011">Financials - Currencies</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">E-micro GBP/USD</td>
                        <td class="bgrCol col1 column-19015">USD 209</td>
                        <td class="bgrCol col2 column-19016">USD 190</td>
                        <td class="bgrCol col3 column-19011">Financials - Currencies</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">E-micro Gold</td>
                        <td class="bgrCol2 col1 column-19015">USD 1,100</td>
                        <td class="bgrCol2 col2 column-19016">USD 1,000</td>
                        <td class="bgrCol2 col3 column-19011">Precious Metals</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">E-micro INR/USD</td>
                        <td class="bgrCol col1 column-19015">USD 1,188</td>
                        <td class="bgrCol col2 column-19016">USD 1,080</td>
                        <td class="bgrCol col3 column-19011">Financials - Currencies</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">E-micro Silver</td>
                        <td class="bgrCol2 col1 column-19015">USD 2,530</td>
                        <td class="bgrCol2 col2 column-19016">USD 2,300</td>
                        <td class="bgrCol2 col3 column-19011">Precious Metals</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">E-micro USD/JPY</td>
                        <td class="bgrCol col1 column-19015">JPY 47,355</td>
                        <td class="bgrCol col2 column-19016">JPY 43,050</td>
                        <td class="bgrCol col3 column-19011">Financials - Currencies</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">E-mini Dow ($5)</td>
                        <td class="bgrCol2 col1 column-19015">USD 10,230</td>
                        <td class="bgrCol2 col2 column-19016">USD 9,300</td>
                        <td class="bgrCol2 col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">E-mini EURUSD</td>
                        <td class="bgrCol col1 column-19015">USD 1,160</td>
                        <td class="bgrCol col2 column-19016">USD 1,050</td>
                        <td class="bgrCol col3 column-19011">Financials - Currencies</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">E-mini Gold</td>
                        <td class="bgrCol2 col1 column-19015">USD 5,500</td>
                        <td class="bgrCol2 col2 column-19016">USD 5,000</td>
                        <td class="bgrCol2 col3 column-19011">Precious Metals</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">E-mini Light Sweet Crude Oil</td>
                        <td class="bgrCol col1 column-19015">USD 3,289</td>
                        <td class="bgrCol col2 column-19016">USD 2,990</td>
                        <td class="bgrCol col3 column-19011">Energies</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">E-mini Natural Gas</td>
                        <td class="bgrCol2 col1 column-19015">USD 660</td>
                        <td class="bgrCol2 col2 column-19016">USD 600</td>
                        <td class="bgrCol2 col3 column-19011">Energies</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">E-mini Russell 2000</td>
                        <td class="bgrCol col1 column-19015">USD 7,480</td>
                        <td class="bgrCol col2 column-19016">USD 6,800</td>
                        <td class="bgrCol col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">E-mini S&amp;P 500 (Dollar)</td>
                        <td class="bgrCol2 col1 column-19015">USD 14,410</td>
                        <td class="bgrCol2 col2 column-19016">USD 13,100</td>
                        <td class="bgrCol2 col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">E-mini S&amp;P 500 ESG</td>
                        <td class="bgrCol col1 column-19015">USD 10,450</td>
                        <td class="bgrCol col2 column-19016">USD 9,500</td>
                        <td class="bgrCol col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">ECX EUA</td>
                        <td class="bgrCol2 col1 column-19015">EUR 9,290</td>
                        <td class="bgrCol2 col2 column-19016">EUR 8,440</td>
                        <td class="bgrCol2 col3 column-19011">Energies</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">EURAUD</td>
                        <td class="bgrCol col1 column-19015">AUD 3,850</td>
                        <td class="bgrCol col2 column-19016">AUD 3,500</td>
                        <td class="bgrCol col3 column-19011">Financials - Currencies</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">EURCAD</td>
                        <td class="bgrCol2 col1 column-19015">CAD 2,750</td>
                        <td class="bgrCol2 col2 column-19016">CAD 2,500</td>
                        <td class="bgrCol2 col3 column-19011">Financials - Currencies</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">EURCHF</td>
                        <td class="bgrCol col1 column-19015">CHF 2,860</td>
                        <td class="bgrCol col2 column-19016">CHF 2,600</td>
                        <td class="bgrCol col3 column-19011">Financials - Currencies</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">EURGBP</td>
                        <td class="bgrCol2 col1 column-19015">GBP 3,784</td>
                        <td class="bgrCol2 col2 column-19016">GBP 3,440</td>
                        <td class="bgrCol2 col3 column-19011">Financials - Currencies</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">EURJPY</td>
                        <td class="bgrCol col1 column-19015">JPY 550,000</td>
                        <td class="bgrCol col2 column-19016">JPY 500,000</td>
                        <td class="bgrCol col3 column-19011">Financials - Currencies</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">EURO STOXX Insurance Index</td>
                        <td class="bgrCol2 col1 column-19015">EUR 2,112</td>
                        <td class="bgrCol2 col2 column-19016">EUR 1,920</td>
                        <td class="bgrCol2 col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">EURO STOXX® 50 Index</td>
                        <td class="bgrCol col1 column-19015">EUR 3,421</td>
                        <td class="bgrCol col2 column-19016">EUR 3,110</td>
                        <td class="bgrCol col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">EURO STOXX® 50 Index Dividend Index</td>
                        <td class="bgrCol2 col1 column-19015">EUR 594</td>
                        <td class="bgrCol2 col2 column-19016">EUR 540</td>
                        <td class="bgrCol2 col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">EURO STOXX® 50 ex. Financials Index</td>
                        <td class="bgrCol col1 column-19015">EUR 1,628</td>
                        <td class="bgrCol col2 column-19016">EUR 1,480</td>
                        <td class="bgrCol col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">EURO STOXX® Autom. &amp; Parts Index</td>
                        <td class="bgrCol2 col1 column-19015">EUR 2,794</td>
                        <td class="bgrCol2 col2 column-19016">EUR 2,540</td>
                        <td class="bgrCol2 col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">EURO STOXX® Bank Index</td>
                        <td class="bgrCol col1 column-19015">EUR 847</td>
                        <td class="bgrCol col2 column-19016">EUR 770</td>
                        <td class="bgrCol col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">EURO STOXX® Basic Resources Index</td>
                        <td class="bgrCol2 col1 column-19015">EUR 1,045</td>
                        <td class="bgrCol2 col2 column-19016">EUR 950</td>
                        <td class="bgrCol2 col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">EURO STOXX® Chemicals Index</td>
                        <td class="bgrCol col1 column-19015">EUR 5,126</td>
                        <td class="bgrCol col2 column-19016">EUR 4,660</td>
                        <td class="bgrCol col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">EURO STOXX® Construction &amp; Matls Index</td>
                        <td class="bgrCol2 col1 column-19015">EUR 2,629</td>
                        <td class="bgrCol2 col2 column-19016">EUR 2,390</td>
                        <td class="bgrCol2 col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">EURO STOXX® Financial Services Index</td>
                        <td class="bgrCol col1 column-19015">EUR 2,673</td>
                        <td class="bgrCol col2 column-19016">EUR 2,430</td>
                        <td class="bgrCol col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">EURO STOXX® Food &amp; Beverage Index</td>
                        <td class="bgrCol2 col1 column-19015">EUR 1,243</td>
                        <td class="bgrCol2 col2 column-19016">EUR 1,130</td>
                        <td class="bgrCol2 col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">EURO STOXX® Health Index</td>
                        <td class="bgrCol col1 column-19015">EUR 1,936</td>
                        <td class="bgrCol col2 column-19016">EUR 1,760</td>
                        <td class="bgrCol col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">EURO STOXX® Media Index</td>
                        <td class="bgrCol2 col1 column-19015">EUR 1,100</td>
                        <td class="bgrCol2 col2 column-19016">EUR 1,000</td>
                        <td class="bgrCol2 col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">EURO STOXX® Oil &amp; Gas Index</td>
                        <td class="bgrCol col1 column-19015">EUR 1,364</td>
                        <td class="bgrCol col2 column-19016">EUR 1,240</td>
                        <td class="bgrCol col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">EURO STOXX® Pers. &amp; Househ. Goods Index</td>
                        <td class="bgrCol2 col1 column-19015">EUR 4,664</td>
                        <td class="bgrCol2 col2 column-19016">EUR 4,240</td>
                        <td class="bgrCol2 col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">EURO STOXX® Real Estate Index</td>
                        <td class="bgrCol col1 column-19015">EUR 627</td>
                        <td class="bgrCol col2 column-19016">EUR 570</td>
                        <td class="bgrCol col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">EURO STOXX® Retail Index</td>
                        <td class="bgrCol2 col1 column-19015">EUR 2,497</td>
                        <td class="bgrCol2 col2 column-19016">EUR 2,270</td>
                        <td class="bgrCol2 col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">EURO STOXX® Technology Index</td>
                        <td class="bgrCol col1 column-19015">EUR 5,082</td>
                        <td class="bgrCol col2 column-19016">EUR 4,620</td>
                        <td class="bgrCol col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">EURO STOXX® Telecom. Index</td>
                        <td class="bgrCol2 col1 column-19015">EUR 704</td>
                        <td class="bgrCol2 col2 column-19016">EUR 640</td>
                        <td class="bgrCol2 col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">EURO STOXX® Travel &amp; Leisure</td>
                        <td class="bgrCol col1 column-19015">EUR 825</td>
                        <td class="bgrCol col2 column-19016">EUR 750</td>
                        <td class="bgrCol col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">EURO STOXX® Utilities Index</td>
                        <td class="bgrCol2 col1 column-19015">EUR 1,210</td>
                        <td class="bgrCol2 col2 column-19016">EUR 1,100</td>
                        <td class="bgrCol2 col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">EURUSD</td>
                        <td class="bgrCol col1 column-19015">USD 2,310</td>
                        <td class="bgrCol col2 column-19016">USD 2,100</td>
                        <td class="bgrCol col3 column-19011">Financials - Currencies</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">Euro-BOBL</td>
                        <td class="bgrCol2 col1 column-19015">EUR 1,617</td>
                        <td class="bgrCol2 col2 column-19016">EUR 1,470</td>
                        <td class="bgrCol2 col3 column-19011">Financials - Bonds</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">Euro-BONO</td>
                        <td class="bgrCol col1 column-19015">EUR 3,124</td>
                        <td class="bgrCol col2 column-19016">EUR 2,840</td>
                        <td class="bgrCol col3 column-19011">Financials - Bonds</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">Euro-BTP</td>
                        <td class="bgrCol2 col1 column-19015">EUR 3,443</td>
                        <td class="bgrCol2 col2 column-19016">EUR 3,130</td>
                        <td class="bgrCol2 col3 column-19011">Financials - Bonds</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">Euro-BUXL</td>
                        <td class="bgrCol col1 column-19015">EUR 7,139</td>
                        <td class="bgrCol col2 column-19016">EUR 6,490</td>
                        <td class="bgrCol col3 column-19011">Financials - Bonds</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">Euro-Bund</td>
                        <td class="bgrCol2 col1 column-19015">EUR 3,124</td>
                        <td class="bgrCol2 col2 column-19016">EUR 2,840</td>
                        <td class="bgrCol2 col3 column-19011">Financials - Bonds</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">Euro-OAT</td>
                        <td class="bgrCol col1 column-19015">EUR 3,102</td>
                        <td class="bgrCol col2 column-19016">EUR 2,820</td>
                        <td class="bgrCol col3 column-19011">Financials - Bonds</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">Euro-Schatz</td>
                        <td class="bgrCol2 col1 column-19015">EUR 660</td>
                        <td class="bgrCol2 col2 column-19016">EUR 600</td>
                        <td class="bgrCol2 col3 column-19011">Financials - Bonds</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">Euronext ESG Large 80 Index</td>
                        <td class="bgrCol col1 column-19015">EUR 2,387</td>
                        <td class="bgrCol col2 column-19016">EUR 2,170</td>
                        <td class="bgrCol col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">FTSE 100 Index</td>
                        <td class="bgrCol2 col1 column-19015">GBP 4,310</td>
                        <td class="bgrCol2 col2 column-19016">GBP 3,910</td>
                        <td class="bgrCol2 col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">FTSE China A50 Index</td>
                        <td class="bgrCol col1 column-19015">USD 1,309</td>
                        <td class="bgrCol col2 column-19016">USD 1,190</td>
                        <td class="bgrCol col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">FTSE MIB Index</td>
                        <td class="bgrCol2 col1 column-19015">EUR 28,072</td>
                        <td class="bgrCol2 col2 column-19016">EUR 25,520</td>
                        <td class="bgrCol2 col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">Feeder Cattle</td>
                        <td class="bgrCol col1 column-19015">USD 4,550</td>
                        <td class="bgrCol col2 column-19016">USD 4,130</td>
                        <td class="bgrCol col3 column-19011">Meats</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">GBPUSD</td>
                        <td class="bgrCol2 col1 column-19015">USD 2,893</td>
                        <td class="bgrCol2 col2 column-19016">USD 2,630</td>
                        <td class="bgrCol2 col3 column-19011">Financials - Currencies</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">Gold</td>
                        <td class="bgrCol col1 column-19015">USD 11,000</td>
                        <td class="bgrCol col2 column-19016">USD 10,000</td>
                        <td class="bgrCol col3 column-19011">Precious Metals</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">HK MSCI Taiwan Index</td>
                        <td class="bgrCol2 col1 column-19015">USD 6,320</td>
                        <td class="bgrCol2 col2 column-19016">USD 5,060</td>
                        <td class="bgrCol2 col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">Hang Seng China Ent. Index (HSCEI)</td>
                        <td class="bgrCol col1 column-19015">HKD 31,260</td>
                        <td class="bgrCol col2 column-19016">HKD 25,010</td>
                        <td class="bgrCol col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">Hang Seng Index</td>
                        <td class="bgrCol2 col1 column-19015">HKD 73,150</td>
                        <td class="bgrCol2 col2 column-19016">HKD 58,520</td>
                        <td class="bgrCol2 col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">Hang Seng TECH Index</td>
                        <td class="bgrCol col1 column-19015">HKD 18,720</td>
                        <td class="bgrCol col2 column-19016">HKD 14,970</td>
                        <td class="bgrCol col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">Henry Hub Natural Gas</td>
                        <td class="bgrCol2 col1 column-19015">USD 3,014</td>
                        <td class="bgrCol2 col2 column-19016">USD 2,740</td>
                        <td class="bgrCol2 col3 column-19011">Energies</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">Hot-Rolled Coil Steel Index</td>
                        <td class="bgrCol col1 column-19015">USD 880</td>
                        <td class="bgrCol col2 column-19016">USD 800</td>
                        <td class="bgrCol col3 column-19011">Base Metals</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">IBEX 35 Index</td>
                        <td class="bgrCol2 col1 column-19015">EUR 11,000</td>
                        <td class="bgrCol2 col2 column-19016">EUR 10,000</td>
                        <td class="bgrCol2 col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">INRUSD</td>
                        <td class="bgrCol col1 column-19015">USD 5,929</td>
                        <td class="bgrCol col2 column-19016">USD 5,390</td>
                        <td class="bgrCol col3 column-19011">Financials - Currencies</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">Iron Ore CFR China (62% Fe Fines)</td>
                        <td class="bgrCol2 col1 column-19015">USD 1,080</td>
                        <td class="bgrCol2 col2 column-19016">USD 980</td>
                        <td class="bgrCol2 col3 column-19011">Base Metals</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">JPX Nikkei Index 400</td>
                        <td class="bgrCol col1 column-19015">JPY 154,462</td>
                        <td class="bgrCol col2 column-19016">JPY 140,420</td>
                        <td class="bgrCol col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">JPYUSD</td>
                        <td class="bgrCol2 col1 column-19015">USD 3,080</td>
                        <td class="bgrCol2 col2 column-19016">USD 2,800</td>
                        <td class="bgrCol2 col3 column-19011">Financials - Currencies</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">KCBT Hard Red Winter Wheat</td>
                        <td class="bgrCol col1 column-19015">USD 2,310</td>
                        <td class="bgrCol col2 column-19016">USD 2,100</td>
                        <td class="bgrCol col3 column-19011">Agriculture</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">Lean Hogs</td>
                        <td class="bgrCol2 col1 column-19015">USD 1,650</td>
                        <td class="bgrCol2 col2 column-19016">USD 1,500</td>
                        <td class="bgrCol2 col3 column-19011">Meats</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">Light Sweet Crude Oil (WTI)</td>
                        <td class="bgrCol col1 column-19015">USD 6,545</td>
                        <td class="bgrCol col2 column-19016">USD 5,950</td>
                        <td class="bgrCol col3 column-19011">Energies</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">Live Cattle</td>
                        <td class="bgrCol2 col1 column-19015">USD 2,700</td>
                        <td class="bgrCol2 col2 column-19016">USD 2,450</td>
                        <td class="bgrCol2 col3 column-19011">Meats</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">London Cocoa</td>
                        <td class="bgrCol col1 column-19015">GBP 18,238</td>
                        <td class="bgrCol col2 column-19016">GBP 16,580</td>
                        <td class="bgrCol col3 column-19011">Softs</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">Long Gilt</td>
                        <td class="bgrCol2 col1 column-19015">GBP 4,048</td>
                        <td class="bgrCol2 col2 column-19016">GBP 3,680</td>
                        <td class="bgrCol2 col3 column-19011">Financials - Bonds</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">Low Sulphur Gasoil</td>
                        <td class="bgrCol col1 column-19015">USD 5,060</td>
                        <td class="bgrCol col2 column-19016">USD 4,600</td>
                        <td class="bgrCol col3 column-19011">Energies</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">MSCI AC Asia Pacific ex Japan Index</td>
                        <td class="bgrCol2 col1 column-19015">USD 4,037</td>
                        <td class="bgrCol2 col2 column-19016">USD 3,670</td>
                        <td class="bgrCol2 col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">MSCI China A 50 Connect</td>
                        <td class="bgrCol col1 column-19015">USD 3,540</td>
                        <td class="bgrCol col2 column-19016">USD 2,830</td>
                        <td class="bgrCol col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">MSCI China Index</td>
                        <td class="bgrCol2 col1 column-19015">USD 1,749</td>
                        <td class="bgrCol2 col2 column-19016">USD 1,590</td>
                        <td class="bgrCol2 col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">MSCI EM Asia Index Futures</td>
                        <td class="bgrCol col1 column-19015">USD 4,796</td>
                        <td class="bgrCol col2 column-19016">USD 4,360</td>
                        <td class="bgrCol col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">MSCI EM ESG Screened Index</td>
                        <td class="bgrCol2 col1 column-19015">USD 1,166</td>
                        <td class="bgrCol2 col2 column-19016">USD 1,060</td>
                        <td class="bgrCol2 col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">MSCI EM Latin America Index Futures</td>
                        <td class="bgrCol col1 column-19015">USD 6,446</td>
                        <td class="bgrCol col2 column-19016">USD 5,860</td>
                        <td class="bgrCol col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">MSCI Europe Index</td>
                        <td class="bgrCol2 col1 column-19015">EUR 2,266</td>
                        <td class="bgrCol2 col2 column-19016">EUR 2,060</td>
                        <td class="bgrCol2 col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">MSCI India (USD) Index</td>
                        <td class="bgrCol col1 column-19015">USD 3,650</td>
                        <td class="bgrCol col2 column-19016">USD 2,920</td>
                        <td class="bgrCol col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">MSCI India Index</td>
                        <td class="bgrCol2 col1 column-19015">USD 11,330</td>
                        <td class="bgrCol2 col2 column-19016">USD 10,300</td>
                        <td class="bgrCol2 col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">MSCI Japan Index</td>
                        <td class="bgrCol col1 column-19015">USD 5,423</td>
                        <td class="bgrCol col2 column-19016">USD 4,930</td>
                        <td class="bgrCol col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">MSCI Singapore Index</td>
                        <td class="bgrCol2 col1 column-19015">SGD 3,476</td>
                        <td class="bgrCol2 col2 column-19016">SGD 3,160</td>
                        <td class="bgrCol2 col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">MSCI USA ESG Screened Index</td>
                        <td class="bgrCol col1 column-19015">USD 2,794</td>
                        <td class="bgrCol col2 column-19016">USD 2,540</td>
                        <td class="bgrCol col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">MSCI World Index</td>
                        <td class="bgrCol2 col1 column-19015">USD 7,821</td>
                        <td class="bgrCol2 col2 column-19016">USD 7,110</td>
                        <td class="bgrCol2 col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">MSCI World Index (EUR)</td>
                        <td class="bgrCol col1 column-19015">EUR 3,069</td>
                        <td class="bgrCol col2 column-19016">EUR 2,790</td>
                        <td class="bgrCol col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">Maize</td>
                        <td class="bgrCol2 col1 column-19015">EUR 1,690</td>
                        <td class="bgrCol2 col2 column-19016">EUR 1,530</td>
                        <td class="bgrCol2 col3 column-19011">Agriculture</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">Micro 10-Year Yield</td>
                        <td class="bgrCol col1 column-19015">USD 360</td>
                        <td class="bgrCol col2 column-19016">USD 320</td>
                        <td class="bgrCol col3 column-19011">Financials - Bonds</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">Micro 2-Year Yield</td>
                        <td class="bgrCol2 col1 column-19015">USD 363</td>
                        <td class="bgrCol2 col2 column-19016">USD 330</td>
                        <td class="bgrCol2 col3 column-19011">Financials - Bonds</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">Micro 30-Year Yield</td>
                        <td class="bgrCol col1 column-19015">USD 297</td>
                        <td class="bgrCol col2 column-19016">USD 270</td>
                        <td class="bgrCol col3 column-19011">Financials - Bonds</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">Micro Copper</td>
                        <td class="bgrCol2 col1 column-19015">USD 605</td>
                        <td class="bgrCol2 col2 column-19016">USD 550</td>
                        <td class="bgrCol2 col3 column-19011">Base Metals</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">Micro DAX® Index</td>
                        <td class="bgrCol col1 column-19015">EUR 1,353</td>
                        <td class="bgrCol col2 column-19016">EUR 1,230</td>
                        <td class="bgrCol col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">Micro E-mini Dow</td>
                        <td class="bgrCol2 col1 column-19015">USD 1,023</td>
                        <td class="bgrCol2 col2 column-19016">USD 930</td>
                        <td class="bgrCol2 col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">Micro E-mini Nasdaq 100</td>
                        <td class="bgrCol col1 column-19015">USD 2,178</td>
                        <td class="bgrCol col2 column-19016">USD 1,980</td>
                        <td class="bgrCol col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">E-mini NASDAQ-100</td>
                        <td class="bgrCol2 col1 column-19015">USD 21,780</td>
                        <td class="bgrCol2 col2 column-19016">USD 19,800</td>
                        <td class="bgrCol2 col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">GBPJPY</td>
                        <td class="bgrCol col1 column-19015">JPY 878,020</td>
                        <td class="bgrCol col2 column-19016">JPY 798,200</td>
                        <td class="bgrCol col3 column-19011">Financials - Currencies</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">MXNUSD</td>
                        <td class="bgrCol2 col1 column-19015">USD 1,771</td>
                        <td class="bgrCol2 col2 column-19016">USD 1,610</td>
                        <td class="bgrCol2 col3 column-19011">Financials - Currencies</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">Micro E-mini Russell 2000</td>
                        <td class="bgrCol col1 column-19015">USD 748</td>
                        <td class="bgrCol col2 column-19016">USD 680</td>
                        <td class="bgrCol col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">Micro E-mini S&amp;P 500</td>
                        <td class="bgrCol2 col1 column-19015">USD 1,441</td>
                        <td class="bgrCol2 col2 column-19016">USD 1,310</td>
                        <td class="bgrCol2 col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">Micro Euro STOXX® 50 Index</td>
                        <td class="bgrCol col1 column-19015">EUR 352</td>
                        <td class="bgrCol col2 column-19016">EUR 320</td>
                        <td class="bgrCol col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">Micro FTSE MIB Index</td>
                        <td class="bgrCol2 col1 column-19015">EUR 1,144</td>
                        <td class="bgrCol2 col2 column-19016">EUR 1,040</td>
                        <td class="bgrCol2 col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">Micro NYSE FANG + Index</td>
                        <td class="bgrCol col1 column-19015">USD 3,025</td>
                        <td class="bgrCol col2 column-19016">USD 2,750</td>
                        <td class="bgrCol col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">Micro SMI® Index</td>
                        <td class="bgrCol2 col1 column-19015">CHF 682</td>
                        <td class="bgrCol2 col2 column-19016">CHF 620</td>
                        <td class="bgrCol2 col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">Micro WTI Crude Oil</td>
                        <td class="bgrCol col1 column-19015">USD 660</td>
                        <td class="bgrCol col2 column-19016">USD 600</td>
                        <td class="bgrCol col3 column-19011">Energies</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">Milling Wheat</td>
                        <td class="bgrCol2 col1 column-19015">EUR 1,560</td>
                        <td class="bgrCol2 col2 column-19016">EUR 1,410</td>
                        <td class="bgrCol2 col3 column-19011">Agriculture</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">Mini CBOE Volatility Index (VIX)</td>
                        <td class="bgrCol col1 column-19015">USD 700</td>
                        <td class="bgrCol col2 column-19016">USD 630</td>
                        <td class="bgrCol col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">Mini FTSE MIB Index</td>
                        <td class="bgrCol2 col1 column-19015">EUR 5,621</td>
                        <td class="bgrCol2 col2 column-19016">EUR 5,110</td>
                        <td class="bgrCol2 col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">Mini Hang Seng China Ent. Index (HSCEI)</td>
                        <td class="bgrCol col1 column-19015">HKD 6,260</td>
                        <td class="bgrCol col2 column-19016">HKD 5,000</td>
                        <td class="bgrCol col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">Mini Hang Seng Index</td>
                        <td class="bgrCol2 col1 column-19015">HKD 14,630</td>
                        <td class="bgrCol2 col2 column-19016">HKD 11,710</td>
                        <td class="bgrCol2 col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">Mini IBEX 35</td>
                        <td class="bgrCol col1 column-19015">EUR 1,100</td>
                        <td class="bgrCol col2 column-19016">EUR 1,000</td>
                        <td class="bgrCol col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">Mini JGB</td>
                        <td class="bgrCol2 col1 column-19015">JPY 165,000</td>
                        <td class="bgrCol2 col2 column-19016">JPY 150,000</td>
                        <td class="bgrCol2 col3 column-19011">Financials - Bonds</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">Mini MDAX Futures</td>
                        <td class="bgrCol col1 column-19015">EUR 2,134</td>
                        <td class="bgrCol col2 column-19016">EUR 1,940</td>
                        <td class="bgrCol col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">Mini MSCI EAFE Index</td>
                        <td class="bgrCol2 col1 column-19015">USD 4,565</td>
                        <td class="bgrCol2 col2 column-19016">USD 4,150</td>
                        <td class="bgrCol2 col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">Mini MSCI Emerging Markets Index</td>
                        <td class="bgrCol col1 column-19015">USD 2,013</td>
                        <td class="bgrCol col2 column-19016">USD 1,830</td>
                        <td class="bgrCol col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">Mini SGX USDSGD</td>
                        <td class="bgrCol2 col1 column-19015">SGD 1,130</td>
                        <td class="bgrCol2 col2 column-19016">SGD 1,020</td>
                        <td class="bgrCol2 col3 column-19011">Financials - Currencies</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">Mini Soybean</td>
                        <td class="bgrCol col1 column-19015">USD 528</td>
                        <td class="bgrCol col2 column-19016">USD 480</td>
                        <td class="bgrCol col3 column-19011">Agriculture</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">Mini-Corn</td>
                        <td class="bgrCol2 col1 column-19015">USD 290</td>
                        <td class="bgrCol2 col2 column-19016">USD 260</td>
                        <td class="bgrCol2 col3 column-19011">Agriculture</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">Mini-DAX®</td>
                        <td class="bgrCol col1 column-19015">EUR 10,197</td>
                        <td class="bgrCol col2 column-19016">EUR 9,270</td>
                        <td class="bgrCol col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">Mini-sized Chicago SRW Wheat</td>
                        <td class="bgrCol2 col1 column-19015">USD 470</td>
                        <td class="bgrCol2 col2 column-19016">USD 420</td>
                        <td class="bgrCol2 col3 column-19011">Agriculture</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">NOKUSD</td>
                        <td class="bgrCol col1 column-19015">USD 7,480</td>
                        <td class="bgrCol col2 column-19016">USD 6,800</td>
                        <td class="bgrCol col3 column-19011">Financials - Currencies</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">NY Harbor ULSD</td>
                        <td class="bgrCol2 col1 column-19015">USD 7,689</td>
                        <td class="bgrCol2 col2 column-19016">USD 6,990</td>
                        <td class="bgrCol2 col3 column-19011">Energies</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">NZDUSD</td>
                        <td class="bgrCol col1 column-19015">USD 1,540</td>
                        <td class="bgrCol col2 column-19016">USD 1,400</td>
                        <td class="bgrCol col3 column-19011">Financials - Currencies</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">Nikkei 225 (Yen)</td>
                        <td class="bgrCol2 col1 column-19015">JPY 990,011</td>
                        <td class="bgrCol2 col2 column-19016">JPY 900,010</td>
                        <td class="bgrCol2 col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">Nikkei 225 (Dollar)</td>
                        <td class="bgrCol col1 column-19015">USD 9,900</td>
                        <td class="bgrCol col2 column-19016">USD 9,000</td>
                        <td class="bgrCol col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">Nikkei 225 (Osaka)</td>
                        <td class="bgrCol2 col1 column-19015">JPY 2,523,114</td>
                        <td class="bgrCol2 col2 column-19016">JPY 2,293,740</td>
                        <td class="bgrCol2 col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">Mini Nikkei 225 (Osaka)</td>
                        <td class="bgrCol col1 column-19015">JPY 252,318</td>
                        <td class="bgrCol col2 column-19016">JPY 229,380</td>
                        <td class="bgrCol col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">Nikkei 225</td>
                        <td class="bgrCol2 col1 column-19015">JPY 990,000</td>
                        <td class="bgrCol2 col2 column-19016">JPY 900,010</td>
                        <td class="bgrCol2 col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">Non-fat Dry Milk</td>
                        <td class="bgrCol col1 column-19015">USD 2,101</td>
                        <td class="bgrCol col2 column-19016">USD 1,910</td>
                        <td class="bgrCol col3 column-19011">Agriculture</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">Nordic Electricity Base Av Month Future</td>
                        <td class="bgrCol2 col1 column-19015">EUR 11,869</td>
                        <td class="bgrCol2 col2 column-19016">EUR 10,790</td>
                        <td class="bgrCol2 col3 column-19011">Energies</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">Nordic Electricity Base Quarter Future</td>
                        <td class="bgrCol col1 column-19015">EUR 35,761</td>
                        <td class="bgrCol col2 column-19016">EUR 32,510</td>
                        <td class="bgrCol col3 column-19011">Energies</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">Nordic Electricity Base Year Future</td>
                        <td class="bgrCol2 col1 column-19015">EUR 126,654</td>
                        <td class="bgrCol2 col2 column-19016">EUR 115,140</td>
                        <td class="bgrCol2 col3 column-19011">Energies</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">OBX Index</td>
                        <td class="bgrCol col1 column-19015">NOK 14,916</td>
                        <td class="bgrCol col2 column-19016">NOK 13,560</td>
                        <td class="bgrCol col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">OMX Index</td>
                        <td class="bgrCol2 col1 column-19015">SEK 22,913</td>
                        <td class="bgrCol2 col2 column-19016">SEK 20,830</td>
                        <td class="bgrCol2 col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">Oats</td>
                        <td class="bgrCol col1 column-19015">USD 1,540</td>
                        <td class="bgrCol col2 column-19016">USD 1,400</td>
                        <td class="bgrCol col3 column-19011">Agriculture</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">Orange Juice</td>
                        <td class="bgrCol2 col1 column-19015">USD 5,770</td>
                        <td class="bgrCol2 col2 column-19016">USD 5,240</td>
                        <td class="bgrCol2 col3 column-19011">Softs</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">Palladium</td>
                        <td class="bgrCol col1 column-19015">USD 11,550</td>
                        <td class="bgrCol col2 column-19016">USD 10,500</td>
                        <td class="bgrCol col3 column-19011">Precious Metals</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">Platinum</td>
                        <td class="bgrCol2 col1 column-19015">USD 3,377</td>
                        <td class="bgrCol2 col2 column-19016">USD 3,070</td>
                        <td class="bgrCol2 col3 column-19011">Precious Metals</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">RBOB Gasoline</td>
                        <td class="bgrCol col1 column-19015">USD 7,359</td>
                        <td class="bgrCol col2 column-19016">USD 6,690</td>
                        <td class="bgrCol col3 column-19011">Energies</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">RMBUSD</td>
                        <td class="bgrCol2 col1 column-19015">USD 4,680</td>
                        <td class="bgrCol2 col2 column-19016">USD 4,250</td>
                        <td class="bgrCol2 col3 column-19011">Financials - Currencies</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">Rapeseed Euro</td>
                        <td class="bgrCol col1 column-19015">EUR 3,069</td>
                        <td class="bgrCol col2 column-19016">EUR 2,790</td>
                        <td class="bgrCol col3 column-19011">Agriculture</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">Robusta Coffee</td>
                        <td class="bgrCol2 col1 column-19015">USD 5,918</td>
                        <td class="bgrCol2 col2 column-19016">USD 5,380</td>
                        <td class="bgrCol2 col3 column-19011">Softs</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">Rough Rice</td>
                        <td class="bgrCol col1 column-19015">USD 1,738</td>
                        <td class="bgrCol col2 column-19016">USD 1,580</td>
                        <td class="bgrCol col3 column-19011">Agriculture</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">S&amp;P 500 Annual Dividend Index</td>
                        <td class="bgrCol2 col1 column-19015">USD 570</td>
                        <td class="bgrCol2 col2 column-19016">USD 510</td>
                        <td class="bgrCol2 col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">S&amp;P Goldman Sachs Commodity Index</td>
                        <td class="bgrCol col1 column-19015">USD 7,700</td>
                        <td class="bgrCol col2 column-19016">USD 7,000</td>
                        <td class="bgrCol col3 column-19011">Commodity Index</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">S&amp;P/TSX 60 Index</td>
                        <td class="bgrCol2 col1 column-19015">CAD 13,959</td>
                        <td class="bgrCol2 col2 column-19016">CAD 12,690</td>
                        <td class="bgrCol2 col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">SEKUSD</td>
                        <td class="bgrCol col1 column-19015">USD 7,051</td>
                        <td class="bgrCol col2 column-19016">USD 6,410</td>
                        <td class="bgrCol col3 column-19011">Financials - Currencies</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">SGX AUDJPY</td>
                        <td class="bgrCol2 col1 column-19015">JPY 52,800</td>
                        <td class="bgrCol2 col2 column-19016">JPY 48,000</td>
                        <td class="bgrCol2 col3 column-19011">Financials - Currencies</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">SGX AUDUSD</td>
                        <td class="bgrCol col1 column-19015">USD 550</td>
                        <td class="bgrCol col2 column-19016">USD 500</td>
                        <td class="bgrCol col3 column-19011">Financials - Currencies</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">SGX FTSE Taiwan Index</td>
                        <td class="bgrCol2 col1 column-19015">USD 8,140</td>
                        <td class="bgrCol2 col2 column-19016">USD 7,400</td>
                        <td class="bgrCol2 col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">SGX INRUSD</td>
                        <td class="bgrCol col1 column-19015">USD 2,376</td>
                        <td class="bgrCol col2 column-19016">USD 2,160</td>
                        <td class="bgrCol col3 column-19011">Financials - Currencies</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">SGX KRWUSD Mini</td>
                        <td class="bgrCol2 col1 column-19015">USD 1,804</td>
                        <td class="bgrCol2 col2 column-19016">USD 1,640</td>
                        <td class="bgrCol2 col3 column-19011">Financials - Currencies</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">SGX SICOM Rubber TSR20</td>
                        <td class="bgrCol col1 column-19015">USD 550</td>
                        <td class="bgrCol col2 column-19016">USD 500</td>
                        <td class="bgrCol col3 column-19011">Agriculture</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">SGX USDCNH</td>
                        <td class="bgrCol2 col1 column-19015">CNH 23,936</td>
                        <td class="bgrCol2 col2 column-19016">CNH 21,760</td>
                        <td class="bgrCol2 col3 column-19011">Financials - Currencies</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">SMIM® Index</td>
                        <td class="bgrCol col1 column-19015">CHF 1,727</td>
                        <td class="bgrCol col2 column-19016">CHF 1,570</td>
                        <td class="bgrCol col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">SMI® Index</td>
                        <td class="bgrCol2 col1 column-19015">CHF 6,732</td>
                        <td class="bgrCol2 col2 column-19016">CHF 6,120</td>
                        <td class="bgrCol2 col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">SOFFEX Swiss government Bond</td>
                        <td class="bgrCol col1 column-19015">CHF 2,948</td>
                        <td class="bgrCol col2 column-19016">CHF 2,680</td>
                        <td class="bgrCol col3 column-19011">Financials - Bonds</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">STOXX® 50 Index</td>
                        <td class="bgrCol2 col1 column-19015">EUR 2,904</td>
                        <td class="bgrCol2 col2 column-19016">EUR 2,640</td>
                        <td class="bgrCol2 col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">STOXX® Europe 600 Autom. &amp; Parts Index</td>
                        <td class="bgrCol col1 column-19015">EUR 2,915</td>
                        <td class="bgrCol col2 column-19016">EUR 2,650</td>
                        <td class="bgrCol col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">STOXX® Europe 600 Banks Index</td>
                        <td class="bgrCol2 col1 column-19015">EUR 1,133</td>
                        <td class="bgrCol2 col2 column-19016">EUR 1,030</td>
                        <td class="bgrCol2 col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">STOXX® Europe 600 Basic Resources Index</td>
                        <td class="bgrCol col1 column-19015">EUR 3,322</td>
                        <td class="bgrCol col2 column-19016">EUR 3,020</td>
                        <td class="bgrCol col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">STOXX® Europe 600 Chemicals Index</td>
                        <td class="bgrCol2 col1 column-19015">EUR 4,444</td>
                        <td class="bgrCol2 col2 column-19016">EUR 4,040</td>
                        <td class="bgrCol2 col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">STOXX® Europe 600 Constr. &amp; Mat. Index</td>
                        <td class="bgrCol col1 column-19015">EUR 2,893</td>
                        <td class="bgrCol col2 column-19016">EUR 2,630</td>
                        <td class="bgrCol col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">STOXX® Europe 600 Financial Serv. Index</td>
                        <td class="bgrCol2 col1 column-19015">EUR 3,663</td>
                        <td class="bgrCol2 col2 column-19016">EUR 3,330</td>
                        <td class="bgrCol2 col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">STOXX® Europe 600 Food &amp; Beverage Index</td>
                        <td class="bgrCol col1 column-19015">EUR 1,540</td>
                        <td class="bgrCol col2 column-19016">EUR 1,400</td>
                        <td class="bgrCol col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">STOXX® Europe 600 Health Care Index</td>
                        <td class="bgrCol2 col1 column-19015">EUR 2,783</td>
                        <td class="bgrCol2 col2 column-19016">EUR 2,530</td>
                        <td class="bgrCol2 col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">STOXX® Europe 600 Ind. Goods &amp; Serv.</td>
                        <td class="bgrCol col1 column-19015">EUR 3,421</td>
                        <td class="bgrCol col2 column-19016">EUR 3,110</td>
                        <td class="bgrCol col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">STOXX® Europe 600 Insurance Index</td>
                        <td class="bgrCol2 col1 column-19015">EUR 1,980</td>
                        <td class="bgrCol2 col2 column-19016">EUR 1,800</td>
                        <td class="bgrCol2 col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">STOXX® Europe 600 Media Index</td>
                        <td class="bgrCol col1 column-19015">EUR 1,375</td>
                        <td class="bgrCol col2 column-19016">EUR 1,250</td>
                        <td class="bgrCol col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">STOXX® Europe 600 Oil &amp; Gas Index</td>
                        <td class="bgrCol2 col1 column-19015">EUR 1,441</td>
                        <td class="bgrCol2 col2 column-19016">EUR 1,310</td>
                        <td class="bgrCol2 col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">STOXX® Europe 600 Pers. &amp; Househ. Index</td>
                        <td class="bgrCol col1 column-19015">EUR 3,036</td>
                        <td class="bgrCol col2 column-19016">EUR 2,760</td>
                        <td class="bgrCol col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">STOXX® Europe 600 Real Estate Index</td>
                        <td class="bgrCol2 col1 column-19015">EUR 561</td>
                        <td class="bgrCol2 col2 column-19016">EUR 510</td>
                        <td class="bgrCol2 col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">STOXX® Europe 600 Retail Index</td>
                        <td class="bgrCol col1 column-19015">EUR 1,276</td>
                        <td class="bgrCol col2 column-19016">EUR 1,160</td>
                        <td class="bgrCol col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">STOXX® Europe 600 Technology Index</td>
                        <td class="bgrCol2 col1 column-19015">EUR 3,366</td>
                        <td class="bgrCol2 col2 column-19016">EUR 3,060</td>
                        <td class="bgrCol2 col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">STOXX® Europe 600 Telecomm. Index</td>
                        <td class="bgrCol col1 column-19015">EUR 528</td>
                        <td class="bgrCol col2 column-19016">EUR 480</td>
                        <td class="bgrCol col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">STOXX® Europe 600 Travel &amp; Leis. Index</td>
                        <td class="bgrCol2 col1 column-19015">EUR 1,012</td>
                        <td class="bgrCol2 col2 column-19016">EUR 920</td>
                        <td class="bgrCol2 col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">STOXX® Europe 600 Utilities Index</td>
                        <td class="bgrCol col1 column-19015">EUR 1,232</td>
                        <td class="bgrCol col2 column-19016">EUR 1,120</td>
                        <td class="bgrCol col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">Short-Term-Euro-BTP</td>
                        <td class="bgrCol2 col1 column-19015">EUR 1,078</td>
                        <td class="bgrCol2 col2 column-19016">EUR 980</td>
                        <td class="bgrCol2 col3 column-19011">Financials - Bonds</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">Silver</td>
                        <td class="bgrCol col1 column-19015">USD 12,661</td>
                        <td class="bgrCol col2 column-19016">USD 11,510</td>
                        <td class="bgrCol col3 column-19011">Precious Metals</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">South African Rand</td>
                        <td class="bgrCol2 col1 column-19015">USD 1,540</td>
                        <td class="bgrCol2 col2 column-19016">USD 1,400</td>
                        <td class="bgrCol2 col3 column-19011">Financials - Currencies</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">Soybean Meal</td>
                        <td class="bgrCol col1 column-19015">USD 2,310</td>
                        <td class="bgrCol col2 column-19016">USD 2,100</td>
                        <td class="bgrCol col3 column-19011">Agriculture</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">Soybean Oil</td>
                        <td class="bgrCol2 col1 column-19015">USD 1,980</td>
                        <td class="bgrCol2 col2 column-19016">USD 1,800</td>
                        <td class="bgrCol2 col3 column-19011">Agriculture</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">Soybeans</td>
                        <td class="bgrCol col1 column-19015">USD 2,640</td>
                        <td class="bgrCol col2 column-19016">USD 2,400</td>
                        <td class="bgrCol col3 column-19011">Agriculture</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">Stoxx Europe 600 Index</td>
                        <td class="bgrCol2 col1 column-19015">EUR 1,727</td>
                        <td class="bgrCol2 col2 column-19016">EUR 1,570</td>
                        <td class="bgrCol2 col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">Sugar No. 11</td>
                        <td class="bgrCol col1 column-19015">USD 1,419</td>
                        <td class="bgrCol col2 column-19016">USD 1,290</td>
                        <td class="bgrCol col3 column-19011">Softs</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">TOPIX Index</td>
                        <td class="bgrCol2 col1 column-19015">JPY 1,659,372</td>
                        <td class="bgrCol2 col2 column-19016">JPY 1,508,520</td>
                        <td class="bgrCol2 col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">TecDAX® Index</td>
                        <td class="bgrCol col1 column-19015">EUR 2,805</td>
                        <td class="bgrCol col2 column-19016">EUR 2,550</td>
                        <td class="bgrCol col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">U.S. Treasury Bond</td>
                        <td class="bgrCol2 col1 column-19015">USD 4,070</td>
                        <td class="bgrCol2 col2 column-19016">USD 3,700</td>
                        <td class="bgrCol2 col3 column-19011">Financials - Bonds</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">US Dollar Index</td>
                        <td class="bgrCol col1 column-19015">USD 1,749</td>
                        <td class="bgrCol col2 column-19016">USD 1,590</td>
                        <td class="bgrCol col3 column-19011">Financials - Currencies</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">USD Denominated Ibovespa</td>
                        <td class="bgrCol2 col1 column-19015">USD 27,401</td>
                        <td class="bgrCol2 col2 column-19016">USD 24,910</td>
                        <td class="bgrCol2 col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">USD/CNH Future</td>
                        <td class="bgrCol col1 column-19015">CNH 23,925</td>
                        <td class="bgrCol col2 column-19016">CNH 21,750</td>
                        <td class="bgrCol col3 column-19011">Financials - Currencies</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">Ultra 10-Year U.S. Treasury Note</td>
                        <td class="bgrCol2 col1 column-19015">USD 2,860</td>
                        <td class="bgrCol2 col2 column-19016">USD 2,600</td>
                        <td class="bgrCol2 col3 column-19011">Financials - Bonds</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">Ultra T-Bond</td>
                        <td class="bgrCol col1 column-19015">USD 6,050</td>
                        <td class="bgrCol col2 column-19016">USD 5,500</td>
                        <td class="bgrCol col3 column-19011">Financials - Bonds</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">VSTOXX® Mini</td>
                        <td class="bgrCol2 col1 column-19015">EUR 374</td>
                        <td class="bgrCol2 col2 column-19016">EUR 340</td>
                        <td class="bgrCol2 col3 column-19011">Stock Indices</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">WTI Light Sweet Crude Oil</td>
                        <td class="bgrCol col1 column-19015">USD 7,205</td>
                        <td class="bgrCol col2 column-19016">USD 6,550</td>
                        <td class="bgrCol col3 column-19011">Energies</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">Wheat</td>
                        <td class="bgrCol2 col1 column-19015">USD 2,310</td>
                        <td class="bgrCol2 col2 column-19016">USD 2,100</td>
                        <td class="bgrCol2 col3 column-19011">Agriculture</td></tr>
                      <tr>
                        <td class="bgrCol r1 col0 column-19012">White Sugar</td>
                        <td class="bgrCol col1 column-19015">USD 2,178</td>
                        <td class="bgrCol col2 column-19016">USD 1,980</td>
                        <td class="bgrCol col3 column-19011">Softs</td></tr>
                      <tr>
                        <td class="bgrCol2 r1 col0 column-19012">mini-TOPIX</td>
                        <td class="bgrCol2 col1 column-19015">JPY 165,946</td>
                        <td class="bgrCol2 col2 column-19016">JPY 150,860</td>
                        <td class="bgrCol2 col3 column-19011">Stock Indices</td></tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid" style="background: #f3f4f6;overflow: hidden;">
    <div class="container maket_header">
      <div class="row">
        <div class="col-12 pb-4">
          <h2 class="">Option</h2></div>
        <div class="col-12">
          <div class="accordion specification_card" id="accordionExample3">
            <div class="card">
              <div class="card-header" id="help_h_03_01">
                <h2 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#help_03_01" aria-expanded="true" aria-controls="help_03_01">Client Margin Profile</button></h2>
              </div>
              <div id="help_03_01" class="collapse " aria-labelledby="help_h_03_01" data-parent="#accordionExample3" style="">
                <div class="card-body ">
                  <p>AFTT operates two client margin profiles related to listed options trading
                    <sup>1</sup>:</p>
                  <p>Basic Profile: Clients can purchase (hold) listed options.
                    <br>Advanced Profile: Clients can purchase (hold) and sell (issue) listed options. Clients will gain margin benefits when trading option strategies and/or portfolios of listed products (i.e., combinations of listed options and/or related products).</p>
                  <p>Clients are initially set to the basic profile, which means they cannot sell (issue) listed options. To activate the advanced profile and be able to issue listed options, clients must meet the following requirements:</p>
                  <p>The client's account value must be at least USD 5,000 or the equivalent.
                    <br>The client must provide a written statement indicating that they understand the risks associated with short selling (issuing) options.
                    <br>
                    <sup>1</sup>Listed options include stock options and contract options on futures and indices.</p>
                  <table cellpadding="0" cellspacing="0" class="table table-striped">
                    <thead>
                      <tr>
                        <th>Strategy</th>
                        <th style="text-align:left">Initial &amp; Maintenance Margin</th></tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td data-label="Strategy">
                          <p>Long Strangle
                            <br>Buy Straddle Option</p></td>
                        <td data-label="Initial &amp; Maintenance Margin" style="text-align:left">None</td></tr>
                      <tr>
                        <td data-label="Strategy">Out-of-the-money Naked Call Option</td>
                        <td data-label="Initial &amp; Maintenance Margin" style="text-align:left">
                          <h4 style="text-align:left">
                            <strong>Stock Options</strong></h4>
                          <p style="text-align:left">Call Option Price + (Max of (X% * Underlying Price - Out-of-the-money Amount), (Y% * Underlying Price))</p>
                          <p style="text-align:left">If the out-of-the-money amount of the call option equals: Max of (0, Option Strike Price - Underlying Price)</p>
                          <p style="text-align:left">
                            <strong>Example:</strong>Sell 1 DTE Call Option at a price of 0.08 (Expiration: Jan 14, Strike Price: 12.50)</p>
                          <p style="text-align:left">Underlying Price 12.30</p>
                          <ul>
                            <li style="text-align:left">
                              <span style="font-size:0.875rem">Margin for selling options = Option Premium Margin + Additional Margin</span></li>
                            <li style="text-align:left">
                              <span style="font-size:0.875rem"></span>(0.08*100 shares) + ((0.15*12.30) - (12.50 - 12.30)) * 100 shares</li>
                            <li style="text-align:left">8 € Option Premium + 164.5 € Margin = 172.50 € Margin Requirement</li></ul>
                        </td>
                      </tr>
                      <tr>
                        <td data-label="Strategy">Sell Uncovered Put Option Short Strategy</td>
                        <td data-label="Initial &amp; Maintenance Margin" style="text-align:left">
                          <h4 style="text-align:left">
                            <strong>Stock Options</strong></h4>
                          <p style="text-align:left">Put Option Price + (Max of (X% * Underlying Price - Out-of-the-money Amount), (Y% * Strike Price))</p>
                          <p style="text-align:left">If the out-of-the-money amount of the put option equals: Max of (0, Underlying Price - Option Strike Price)</p>
                          <p style="text-align:left">
                            <strong>Example:</strong>Sell 1 DTE Put Option at a price of 0.06 (Expiration: Jan 14, Strike Price: 12)</p>
                          <p style="text-align:left">Underlying Price 12.30</p>
                          <ul>
                            <li style="text-align:left">Margin for selling options = Option Premium Margin + Additional Margin</li>
                            <li style="text-align:left">(0.06*100 shares) + ((0.15*12.30) - (12.30 - 12)) * 100 shares</li>
                            <li style="text-align:left">6 € Option Premium + 154.5 € Margin = 160.50 € Margin Requirement</li></ul>
                        </td>
                      </tr>
                      <tr>
                        <td data-label="Strategy">Long Call Spread Strategy</td>
                        <td data-label="Initial &amp; Maintenance Margin">
                          <p style="text-align:left">Max of ((Bought Call Option Strike Price - Sold Call Option Strike Price), 0)</p>
                          <p style="text-align:left">
                            <strong>Example:&nbsp;</strong>Buy DTE Call Option at a price of 0.10 (Expiration: Jan 14, Strike Price: 12.5), then Sell DTE Call Option at a price of 0.02 (Expiration: Jan 14, Strike Price: 13.5)</p>
                          <ul>
                            <li style="text-align:left">Max of ((12.5 - 13.5), 0)</li>
                            <li style="text-align:left">8 € Option Premium + 0 € Margin Requirement</li></ul>
                        </td>
                      </tr>
                      <tr>
                        <td data-label="Strategy">
                          <p>Short Put Spread Combination</p>
                        </td>
                        <td data-label="Initial &amp; Maintenance Margin" style="text-align:left">
                          <p style="text-align:left">(Sold Put Option Strike Price - Bought Put Option Strike Price) - (Sold Put Option Price - Bought Put Option Price)</p>
                          <p style="text-align:left">
                            <strong>Example:&nbsp;</strong>Sell DTE Put Option at a price of 0.08 (Expiration: Jan 14, Strike Price: 12), then Buy DTE Put Option at a price of 0.02 (Expiration: Jan 14, Strike Price: 11)</p>
                          <ul>
                            <li style="text-align:left">((12-11) - (0.08-0.02))* 100 shares</li>
                            <li style="text-align:left">(1 - 0.06)* 100 shares</li>
                            <li style="text-align:left">6 € Option Premium + 94 € Margin Requirement</li></ul>
                        </td>
                      </tr>
                      <tr>
                        <td data-label="Strategy">
                          <p>Short Straddle Strategy
                            <br>Short Strangle Strategy</p></td>
                        <td data-label="Initial &amp; Maintenance Margin">
                          <p style="text-align:left">If the initial margin for selling put options &gt; Initial margin for selling call options, then
                            <br>Use the initial margin for selling put options + selling call option price
                            <br>Or
                            <br>If the initial margin shortfall &gt;= Initial margin for selling call options, then
                            <br>Use the initial margin shortfall + buying call option price</p></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="help_h_03_02">
                <h2 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#help_03_02" aria-expanded="flase" aria-controls="help_03_02">Margin Relief Arrangement</button></h2>
              </div>
              <div id="help_03_02" class="collapse" aria-labelledby="help_h_03_02" data-parent="#accordionExample3" style="">
                <div class="card-body ">
                  <p>In a spread combination, the long option position hedges the short position of the same type. When the call option is relatively in-the-money compared to the put option (Debit Spread), the value of the buyer's position fully covers the seller's position, so no additional margin is required. When the put option is relatively in-the-money compared to the call option (Credit Spread), the value of the buyer's position is insufficient to cover the seller's position, and additional margin is required. The margin amount equals the difference between the two option strike prices.</p>
                  <p>Note: We recommend that when trading a spread combination position, you close the short position before the long position. This helps avoid the high margin requirement that results from only having the short position. However, please be aware that the account may be locked due to insufficient spread margin to repurchase the long option position, and additional funds may need to be transferred into the account to complete this transaction.</p>
                  <p>Straddle/Strangle Sellers</p>
                  <p>The rules for straddle/strangle sellers differ from those for protective puts and spread combinations. The difference is that the two sides of a straddle/strangle do not hedge each other. A short straddle/strangle consists of a call option seller and a put option seller. Since the market directions of the call seller and the put seller differ, AFTT requires additional margin, charging the highest margin on either side as additional margin.</p>
                  <p>When the call side of a strangle position is transferred, the customer must deliver the corresponding stock. Similarly, when the put side is transferred, the customer must deliver the corresponding stock. Holding the stock and the remaining call side of the original strangle position then forms a protective put.</p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="help_h_03_03">
                <h2 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#help_03_03" aria-expanded="flase" aria-controls="help_03_03">Margin Requirements</button></h2>
              </div>
              <div id="help_03_03" class="collapse" aria-labelledby="help_h_03_03" data-parent="#accordionExample3" style="">
                <div class="card-body ">
                  <p>For certain specific products, including stock options, we require margin to cover potential losses on holding such products.</p>
                  <p>Stock option transactions are calculated based on the full option premium.</p>
                  <p>Example of full option premium</p>
                  <p>When purchasing an option with a full option premium, the option fee is deducted from the cash balance. Aside from margin relief arrangements, the value of the purchased option cannot be used for margin trading.</p>
                  <p>In the following case, a customer buys a call option on Apple Inc. with a strike price of $530 in December 2013 for $25 (Apple Inc.'s stock price is $529.85, one option corresponds to 100 shares, and the buy/sell commission is $6 per contract. The transaction fee is $0.3).</p>
                  <p>The customer has a cash account of $10,000, and the account's option calculation summary is as follows:</p>
                  <table class="table table-striped">
                    <tbody>
                      <tr>
                        <th rowspan="1" colspan="3">
                          <h4>
                            <strong>Cash and Position Summary</strong></h4>
                        </th>
                      </tr>
                      <tr>
                        <td>
                          <p>Non-Marginable Position</p>
                        </td>
                        <td>
                          <p>1 * 25 * 100 Shares =</p>
                        </td>
                        <td>
                          <p style="text-align:right">2,500.00 USD</p>
                          <p>&nbsp;</p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <p>Margin Unrealized P/L</p>
                        </td>
                        <td></td>
                        <td>
                          <p>--</p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <p>Estimated Close-Out Commission</p>
                        </td>
                        <td>
                          <p>- 1 * ($6 + $0.30) =</p>
                        </td>
                        <td>
                          <p style="text-align:right">- 6.30 USD</p>
                          <p>&nbsp;</p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <h4>
                            <strong>Position Value</strong></h4>
                        </td>
                        <td colspan="2">
                          <p style="text-align:right">
                            <strong>2,493.70 USD</strong></p>
                        </td>
                      </tr>
                      <tr>
                        <td></td>
                        <td colspan="2"></td>
                      </tr>
                      <tr>
                        <td>
                          <p>Cash Balance</p>
                        </td>
                        <td></td>
                        <td>
                          <p>10,000.00 USD</p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <p>Pending Settlement Amount</p>
                        </td>
                        <td>
                          <p>- ($2,500 + $6.30) =</p>
                        </td>
                        <td>
                          <p>- 2,506.30 USD</p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <h4>
                            <strong>Total Account Value</strong></h4>
                        </td>
                        <td colspan="2">
                          <p style="text-align:right">
                            <strong>9,987.40 USD</strong></p>
                        </td>
                      </tr>
                      <tr>
                        <td></td>
                        <td colspan="2"></td>
                      </tr>
                      <tr>
                        <td>
                          <p>Non-Marginable Value</p>
                        </td>
                        <td>
                          <p>- 1 * 25 * 100 Shares =</p>
                        </td>
                        <td>
                          <p>- 2,500.00 USD</p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <p>Margin Occupied</p>
                        </td>
                        <td></td>
                        <td>
                          <p>--</p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <h4>
                            <strong>Available for Margin Trading</strong></h4>
                        </td>
                        <td colspan="2">
                          <p style="text-align:right">
                            <strong>7,487.40 USD</strong></p>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <p>For an option with full premium, the pending settlement amount will be credited to the client's cash balance overnight. The next day, when the option price rises to $41 (with the stock price at $556.5), the option calculation summary is as follows:</p>
                  <table class="table table-striped">
                    <tbody>
                      <tr>
                        <th rowspan="1" colspan="3">
                          <h4>
                            <strong>Cash and Position Summary</strong></h4>
                        </th>
                      </tr>
                      <tr>
                        <td>
                          <p>Non-Marginable Position</p>
                        </td>
                        <td>
                          <p>1 * 41 * 100 Shares =</p>
                        </td>
                        <td>
                          <p>$4,100.00</p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <p>Margin Unrealized P/L</p>
                        </td>
                        <td></td>
                        <td>
                          <p>--</p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <p>Estimated Close-Out Commission</p>
                        </td>
                        <td>
                          <p>- 1 * ($6 + $0.30) =</p>
                        </td>
                        <td>
                          <p>-$6.30</p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <h4>
                            <strong>Position Value</strong></h4>
                        </td>
                        <td colspan="2">
                          <h4>$4,093.70</h4></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td colspan="2"></td>
                      </tr>
                      <tr>
                        <td>
                          <p>Cash Balance</p>
                        </td>
                        <td></td>
                        <td>
                          <p>$7,493.70</p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <p>Pending Settlement Amount</p>
                        </td>
                        <td></td>
                        <td>
                          <p>--</p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <h4>
                            <strong>Total Account Value</strong></h4>
                        </td>
                        <td colspan="2">
                          <h4>$11,587.40</h4></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td colspan="2"></td>
                      </tr>
                      <tr>
                        <td>
                          <p>Non-Marginable Value</p>
                        </td>
                        <td>
                          <p>- 1 * 41 * 100 Shares =</p>
                        </td>
                        <td>
                          <p>-$4,100.00</p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <p>Margin Occupied</p>
                        </td>
                        <td></td>
                        <td>
                          <p>--</p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <h4>
                            <strong>Available for Margin Trading</strong></h4>
                        </td>
                        <td colspan="2">
                          <h4>$7,487.40</h4></td>
                      </tr>
                    </tbody>
                  </table>
                  <p>Non-Marginable Position: Increases as the option price rises.
                    <br>Position Value: Increases as the option price rises.
                    <br>Cash Balance: Deducted by the option price. It will be zero at the time of recording the transaction.
                    <br>Total Account Value: Increases as the option price rises.
                    <br>Non-Marginable Value: Increases with the new value of the position.</p>
                  <h6>Margin for Selling Options</h6>
                  <p>When the buyer of a stock option exercises it, the seller must transfer the corresponding shares. If the market moves against the seller's position, the potential losses could be significant. Therefore, we require an option premium margin to ensure that there are sufficient funds for the seller to close the position, along with an additional margin to cover potential overnight stock price movements. Margin requirements are closely monitored, and if the total margin requirement exceeds the client's margin call threshold, it will trigger a forced liquidation.</p>
                  <p>The margin for a stock option seller is generally calculated as follows: Stock Option Seller Margin = Option Premium Margin + Additional Margin</p>
                  <p>The option premium margin ensures that the short stock option can be closed at market value during trading hours, while the additional margin covers the risk of overnight price changes if the stock option cannot be closed due to limited trading hours.</p>
                  <p>Stock Options</p>
                  <p>For stock options, the additional margin is a percentage of the corresponding stock value minus a discount for out-of-the-money options.
                    <br>Call Option Additional Margin = Max(X% * Related Stock Price - Out-of-the-Money Amount, Y% * Related Stock Price)
                    <br>Put Option Additional Margin = Max(X% * Related Stock Price - Out-of-the-Money Amount, Y% * Strike Price)</p>
                  <p>The margin rate is set by AFTT and adjusted according to market conditions. The actual amount varies significantly depending on the option contract and can be adjusted. Clients can see applicable values for different scenarios.</p>
                  <p>The out-of-the-money amount for a call option equals:
                    <br>Max(0, Strike Price - Stock Price)</p>
                  <p>The out-of-the-money amount for a put option equals:
                    <br>Max(0, Stock Price - Strike Price)</p>
                  <p>To calculate the corresponding amount, the margin requirement must be multiplied by one trading unit (100 shares).</p>
                  <p>Example:</p>
                  <p>Assume the margin rate for Apple stock options is 15% for X and 10% for Y.</p>
                  <p>A client sells a call option for Apple stock at $1.90 with a strike price of $535 (Apple's stock price is $523.74). The option corresponds to 100 shares. The out-of-the-money amount is 11.26 stock price points (535 - 523.74), so the additional margin is 67.30 stock price points ($6,730). In the account summary, the option premium margin is deducted from the position.</p>
                  <table class="table table-striped">
                    <tbody>
                      <tr>
                        <th colspan="3">Cash and Position Summary</th></tr>
                      <tr>
                        <td>Non-Marginable Position</td>
                        <td>- 1 * $1.90 * 100 Shares =</td>
                        <td>$190.00</td></tr>
                      <tr>
                        <td>Margin Unrealized P/L</td>
                        <td></td>
                        <td>--</td></tr>
                      <tr>
                        <td>Estimated Close-Out Commission</td>
                        <td>- ($6 + $0.30) =</td>
                        <td>-$6.30</td></tr>
                      <tr>
                        <td>
                          <strong>Position Value</strong></td>
                        <td colspan="2">
                          <strong>$196.30</strong></td>
                      </tr>
                      <tr>
                        <td>Cash Balance</td>
                        <td></td>
                        <td>$10,000.00</td></tr>
                      <tr>
                        <td>Pending Settlement Amount</td>
                        <td>$190 - ($6 + $0.30) =</td>
                        <td>$183.70</td></tr>
                      <tr>
                        <td>
                          <strong>Total Account Value</strong></td>
                        <td colspan="2">
                          <strong>$9,987.40</strong></td>
                      </tr>
                      <tr>
                        <td>Non-Marginable Value</td>
                        <td></td>
                        <td>--</td></tr>
                      <tr>
                        <td>Margin Occupied</td>
                        <td>- 100 Shares * ((0.15 * $523.74) - 11.26)</td>
                        <td>-$6,730.00</td></tr>
                      <tr>
                        <td>
                          <strong>Available for Margin Trading</strong></td>
                        <td colspan="2">
                          <strong>$3,257.40</strong></td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="card">
                    <div class="card-header" id="help_h_03_04">
                      <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#help_03_04" aria-expanded="flase" aria-controls="help_03_04">淡倉交易 - 保證金</button></h2>
                    </div>
                    <div id="help_03_04" class="collapse" aria-labelledby="help_h_03_04" data-parent="#accordionExample3" style="">
                      <div class="card-body ">
                        <p>期權賣家（發行人）有義務根據買家要求的指定價格，向期權買家（持有人）出售（若是認購），或向期權買家購入（若是認沽）相關產品。</p>
                        <p>如果市場走勢與倉位走勢不符，則淡倉期權倉位或會造成巨額損失。盛寶會收取溢價，從而確保客戶賬戶擁有充足資金，以用於為淡倉期權平倉；此外，我們亦會收取一筆額外的保證金，以應對任何相關產品的隔夜價格變動。</p>
                        <p>淡倉期權保證金費用的一般計算公式為：淡倉期權保證金 = 溢價保證金 + 額外保證金。</p>
                        <p>我們會即時監控保證金要求。如果客戶的損失超出保證金的金額，就或會出現保證金自動平倉的情況，即代表盛寶會嘗試立即終止、取消並沽出所有或部分持有倉位。</p>
                        <p>保證金交易風險巨大，可能會導致大量損失，甚至超出客戶賬戶的現金和/或已核准抵押品價值。</p>
                        <p>保證金交易並非適合所有人士。請確保您已完全理解相關風險，並在必要時尋求獨立建議。</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid">
          <div class="container maket_header">
            <div class="row">
              <div class="col-12 pb-4">
                <h2 class="mb-3">保證金交易的抵押率</h2>
                <h6>（僅適用於專業客戶）</h6></div>
              <div class="col-12">
                <div class="accordion specification_card" id="accordionExample4">
                  <div class="card">
                    <div class="card-header" id="help_h_04_01">
                      <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#help_04_01" aria-expanded="true" aria-controls="help_04_01">股票和交易所買賣基金的抵押率</button></h2>
                    </div>
                    <div id="help_04_01" class="collapse show" aria-labelledby="help_h_04_01" data-parent="#accordionExample4" style="">
                      <div class="card-body ">
                        <p>盛寶 允許將某些股票和交易所買賣基金投資的特定百分比用作為保證金交易活動的抵押品。股票或交易所買賣基金倉位的抵押品價值取決於個別股票和交易所買賣基金的評級；詳情請查看以下換算表。</p>
                        <table cellpadding="0" cellspacing="0" class="table table-striped">
                          <tbody>
                            <tr>
                              <th>評級</th>
                              <th>
                                <div style="text-align:center">1</div></th>
                              <th>
                                <div style="text-align:center">2</div></th>
                              <th>
                                <div style="text-align:center">3</div></th>
                              <th>
                                <div style="text-align:center">4</div></th>
                              <th>
                                <div style="text-align:center">5</div></th>
                              <th>
                                <div style="text-align:center">6</div></th>
                            </tr>
                            <tr>
                              <th>倉位抵押品價值</th>
                              <td>
                                <div style="text-align:center">70%</div></td>
                              <td>
                                <div style="text-align:center">50%</div></td>
                              <td>
                                <div style="text-align:center">50%</div></td>
                              <td>
                                <div style="text-align:center">25%</div></td>
                              <td>
                                <div style="text-align:center">0%</div></td>
                              <td>
                                <div style="text-align:center">0%</div></td>
                            </tr>
                          </tbody>
                        </table>
                        <p>案例：若股票或交易所買賣基金倉位評級為 1 級，其 70% 的價值可用作交易保證金產品（例如外匯、差價合約、期貨和期權）的抵押品（以代替現金）。 請注意，盛寶 將保留相關權利，當倉位規模較大或股票投資組合風險極高時，盛寶金融有權減少或移除股票或交易所買賣基金作為抵押品的價值比例。</p>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="help_h_04_02">
                      <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#help_04_02" aria-expanded="flase" aria-controls="help_04_02">債券抵押率</button></h2>
                    </div>
                    <div id="help_04_02" class="collapse" aria-labelledby="help_h_04_02" data-parent="#accordionExample4" style="">
                      <div class="card-body ">
                        <p>盛寶 允許將某些債券投資的特定百分比用作為保證金交易活動的抵押品。</p>
                        <p>債券倉位的抵押品價值取決於個別債券的評級，如下所示：</p>
                        <table cellpadding="0" cellspacing="0" class="table table-striped">
                          <tbody>
                            <tr>
                              <th>評級定義*</th>
                              <th>抵押品百分比</th></tr>
                            <tr>
                              <td>最高評級 (AAA)</td>
                              <td>95%</td></tr>
                            <tr>
                              <td>非常優質 (AA)</td>
                              <td>90%</td></tr>
                            <tr>
                              <td>優質 (A)</td>
                              <td>80%</td></tr>
                          </tbody>
                        </table>
                        <p>* 根據盛寶內部評級</p>
                        <p>案例：若債券倉位評級為 A，其 80% 的市場價值可用作交易保證金產品（例如外匯、差價合約或期貨和期權）的抵押品（以代替現金）。</p>
                        <p>請注意，盛寶金融保留權利，有權降低將債券倉位持作抵押品的比例或撤銷此項安排。</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid" style="background: #f3f4f6;">
          <div class="container maket_header products_p">
            <div class="row">
              <div class="col-sm-12 mb-4">
                <h2>查看我們的所有價格</h2></div>
              <div class="col-lg-3 col-md-4 col-6">
                <a href="/rates-and-conditions/forex.php" class="pricie_bg">
                  <p class="fwb mb-3">外匯</p>
                  <p class=" ">點差低至</p>
                  <h1>0.4
                    <span class="h3">點子</span></h1>
                  <p class="pricie_cont">交易主要貨幣對、次要貨幣對、稀有貨幣對，加上現貨金屬的 185 個外匯現貨對和 140 個遠期合約，而且沒有佣金費用。</p>
                  <p class="blue fwb mb-0">查看所有價格</p></a>
              </div>
              <div class="col-lg-3 col-md-4 col-6">
                <a href="/rates-and-conditions/forex-options.php" class="pricie_bg">
                  <p class="fwb mb-3">外匯期權</p>
                  <p class=" ">價差低至</p>
                  <h1>3
                    <span class="h3">點子</span></h1>
                  <p class="pricie_cont">買賣 45 種外匯普通期權，到期日由一天至 12 個月不等。</p>
                  <p class="blue fwb mb-0">查看所有價格</p></a>
              </div>
              <div class="col-lg-3 col-md-4 col-6">
                <a href="/rates-and-conditions/stocks.php" class="pricie_bg">
                  <p class="fwb mb-3">股票</p>
                  <p class=" ">美股佣金低至</p>
                  <h1>1
                    <span class="h3">美元</span></h1>
                  <p class="pricie_cont">買賣世界各地 50 間交易所的核心和新興市場逾 23,500 款股票。</p>
                  <p class="blue fwb mb-0">查看所有價格</p></a>
              </div>
              <div class="col-lg-3 col-md-4 col-6">
                <a href="/rates-and-conditions/etf.php" class="pricie_bg">
                  <p class="fwb mb-3">交易所買賣基金</p>
                  <p class=" ">美國上市交易所買賣基金佣金低至</p>
                  <h1>1
                    <span class="h3">美元</span></h1>
                  <p class="pricie_cont">買賣逾 30 個交易所超過 7,000 種交易所交易基金。</p>
                  <p class="blue fwb mb-0">查看所有價格</p></a>
              </div>
              <div class="col-lg-3 col-md-4 col-6">
                <a href="/rates-and-conditions/futures.php" class="pricie_bg">
                  <p class="fwb mb-3">期貨</p>
                  <p class=" ">佣金低至每手</p>
                  <h1>1
                    <span class="h3">美元</span></h1>
                  <p class="pricie_cont">交易逾 250 種期貨，包括股票指數、能源、金屬、農業、利率和外匯。</p>
                  <p class="blue fwb mb-0">查看所有價格</p></a>
              </div>
              <div class="col-lg-3 col-md-4 col-6">
                <a href="/rates-and-conditions/bonds.php" class="pricie_bg">
                  <p class="fwb mb-3">債券</p>
                  <p class=" ">政府債券佣金低至</p>
                  <h1>0.05%
                    <span class="h3"></span></h1>
                  <p class="pricie_cont">網上或離線交易26 個國家/地區、21 種</p>
                  <p class="blue fwb mb-0">查看所有價格</p></a>
              </div>
              <div class="col-lg-3 col-md-4 col-6">
                <a href="/rates-and-conditions/listed-options.php" class="pricie_bg">
                  <p class="fwb mb-3">上市期權</p>
                  <p class=" ">佣金低至每手</p>
                  <h1>0.75
                    <span class="h3">美元</span></h1>
                  <p class="pricie_cont">交易來自全球 20 間交易所的股票、能源和金屬等 3,200 款上市期權。</p>
                  <p class="blue fwb mb-0">查看所有價格</p></a>
              </div>
              <div class="col-lg-3 col-md-4 col-6">
                <a href="/products/mutual-funds.php" class="pricie_bg">
                  <p class="fwb mb-3">共同基金</p>
                  <p class=" ">佣金、託管費及平台費低至</p>
                  <h1>0
                    <span class="h3">美元</span></h1>
                  <p class="pricie_cont">透過全球最大投資者全面接通逾 500 個頂級共同基金。</p>
                  <p class="blue fwb mb-0">查看所有價格</p></a>
              </div>
              <div class="col-lg-3 col-md-4 col-6">
                <a href="/products/ipo.php" class="pricie_bg">
                  <p class="fwb mb-3">IPO</p>
                  <p class=" ">融資利率低至</p>
                  <h1>0%
                    <span class="h3"></span></h1>
                  <p class="pricie_cont">認購港交所上市的公開發售新股享受高達10倍槓桿和低手續費待遇。</p>
                  <p class="blue fwb mb-0">查看所有價格</p></a>
              </div>
              <div class="col-lg-3 col-md-4 col-6">
                <a href="/rates-and-conditions/commodities.php" class="pricie_bg">
                  <p class="fwb mb-3">商品</p>
                  <p class=" ">佣金低至</p>
                  <h1>0.85
                    <span class="h3">美元</span></h1>
                  <p>每手</p>
                  <p class="pricie_cont" style="min-height: 62px;">交易各種商品，如差價合約、期貨、期權與現貨對等。</p>
                  <p class="blue fwb mb-0">查看所有價格</p></a>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid text-white" style="background: #0d1017;">
          <div class="container maket_header">
            <div class="row text-center ">
              <div class="col-sm-12">
                <h2 class="mb-1">準備好開始了嗎？</h2>
                <h5 class="">開立賬戶只需約 5 分鐘</h5></div>
              <div class="col-sm-12">
                <div class="pt-4">
                  <a href="#" class="btn btn-primary">
                    <strong>開立賬戶</strong></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php include( "../footer.php") ?>
          <script type="text/javascript">$('.app_ys li').click(function() {
              $(this).siblings('li').removeClass('active');
              $(this).addClass('active');
            });
            $(document).ready(function() {
              $('.app_ys li').click(function() {
                var index = $(this).index(); // 获取悬停的li的索引
                $('#image-viewer img').hide(); // 先隐藏所有的图片
                $('#image-viewer img').eq(index).show(); // 显示对应索引的图片
              });
            });</script>