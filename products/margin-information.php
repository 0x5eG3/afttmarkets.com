<?php include( "../header.php") ?>
  <script>document.getElementById("title").innerHTML = "保證金訊息 | AFTT盛寶金融";</script>
  <!-- banner -->
  <div class="container-fluid maket_header" style="background-color: #111827;">
    <div class="container ">
      <div class="row text-white">
        <div class="col-sm-12 p_center">
          <h1 class="mb-3 mt-5">保證金訊息</h1>
          <h5>查看我們的保證金要求，以及有關透過盛寶進行保證金交易的其他資訊</h5></div>
      </div>
    </div>
  </div>
  <div class="container-fluid" style="background: #f3f4f6;overflow: hidden;">
    <div class="container maket_header">
      <div class="row">
        <div class="col-12 pb-4">
          <h2 class="">外匯期權</h2></div>
        <div class="col-12">
          <div class="accordion specification_card" id="accordionExample2">
            <div class="card">
              <div class="card-header" id="help_h_02_01">
                <h2 class="mb-0">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#help_02_01" aria-expanded="true" aria-controls="help_02_01">初始及維持保證金是什麽？</button></h2>
              </div>
              <div id="help_02_01" class="collapse show" aria-labelledby="help_h_02_01" data-parent="#accordionExample2" style="">
                <div class="card-body ">
                  <p>初始保證金和維持保證金在您的交易能力和保證金平倉水平之間建立緩衝區，盡力保障您在遇到不利市場狀況時所受的損失。
                    <br>1、初始保證金：這是交易時提供的交易前保證金，即是在設立新倉位時，賬戶必須擁有足夠的保證金抵押品，以符合整個保證金組合的初始保證金要求。
                    <br>2、維持保證金：這是一種持續性的保證金，即是持有倉位期間，賬戶必須擁有的現金或已核准保證金抵押品之金額下限。維持保證金會用於計算保證金的運用情況；一旦您的賬戶未能符合維持保證金要求，我們便會立即平倉。</p></div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="help_h_02_02">
                <h2 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#help_02_02" aria-expanded="flase" aria-controls="help_02_02">外匯普通期權保證金計算</button></h2>
              </div>
              <div id="help_02_02" class="collapse" aria-labelledby="help_h_02_02" data-parent="#accordionExample2" style="">
                <div class="card-body ">
                  <p>外匯期權的保證金要求是根據每種貨幣對（以確保與每種外匯現貨和外匯遠期的分級保證金一致）和每個到期日計算所得。每種貨幣對的保證金要求均設有上限，其值等於外匯期權、外匯現貨與遠期倉位中的最高潛在風險乘以現行現貨保證金要求。這個計算方式亦會將外匯期權、外匯現貨與遠期倉位之間的潛在淨額結算納入考量範圍內。 若是有限風險策略（如賣出看漲期權點差），外匯期權投資組合的保證金要求將根據最大未來損失計算。</p>
                  <p>若是無限風險策略（如淡倉裸期權），保證金要求將等於名義金額乘以現行現貨保證金要求。</p>
                  <p>如果客戶的保證金受當前外匯現貨保證金要求影響，而非最大未來損失，則計算外匯期權保證金時需使用分級保證金率。當前外匯現貨保證金級別將根據美元名義金額分級；潛在的名義金額越高，保證金率便會越高。分級保證金要求會根據每種貨幣對計算。計算外匯期權保證金時，每種貨幣對的現行現貨保證金要求將採用分級或混合保證金率，該保證金率將取決於外匯期權、外匯現貨與遠期倉位中的最高潛在風險。</p>
                  <p>案例 1：賣出看漲期權點差或有限風險策略
                    <br>您以 1,000 萬美元/加拿大元的價格賣出一項認購期權點差，成交價為 1.41 和 1.42。
                    <br>當前現貨價格為 1.40。
                    <br>保證金要求將會是最大未來損失 71,429 美元（1,000 萬 x (1.42 – 1.41) = 10 萬加拿大元 / 美元 @ 1.40）。</p>
                  <p>案例 2：無限的下行風險
                    <br>您以 1,000 萬美元/加拿大元的價格賣出一項認沽期權。您擁有無限的下行風險。因此，保證金要求將等於名義金額乘以現行現貨保證金要求。</p>
                  <p>現行現貨保證金率由最高潛在風險決定，其值為 1,000 萬美元。
                    <br>所以，現行現貨價格為混合保證金率 2.2%（（1% x 300 萬美元 + 2% x 200 萬美元 + 3% x 500 萬美元）/ 1,000 萬）。
                    <br>因此保證金要求為 22 萬美元（2.2% x 1,000 萬美元）。</p></div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="help_h_02_03">
                <h2 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#help_02_03" aria-expanded="flase" aria-controls="help_02_03">外匯觸式期權保證金資訊（僅適用於專業客戶）</button></h2>
              </div>
              <div id="help_02_03" class="collapse" aria-labelledby="help_h_02_03" data-parent="#accordionExample2" style="">
                <div class="card-body ">
                  <p>外匯期權保證金的計算不適用於觸式期權，但是持有倉位將影響您「可用於保證金交易的金額」，該金額將顯示在「賬戶摘要」中。</p>
                  <p>因此，如果賬戶持有保證金倉位，當您加入觸式期權倉位時，「保證金使用率」將會增加。</p>
                  <p>注意事項。開倉前，我們會預先檢查，確保您不會意外開立導致保證金利用率超過 100% 的觸式期權倉位。</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid" style="background: #f3f4f6;overflow: hidden;">
    <div class="container ">
      <div class="row">
        <div class="col-12 pb-4">
          <h2 class="">期貨</h2></div>
        <div class="col-12">
          <div class="accordion specification_card" id="accordionExample">
            <div class="card">
              <div class="card-header" id="help_h_01_01">
                <h2 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#help_01_01" aria-expanded="true" aria-controls="help_01_01">初始及維持保證金是什麽？</button></h2>
              </div>
              <div id="help_01_01" class="collapse" aria-labelledby="help_h_02_01" data-parent="#accordionExample" style="">
                <div class="card-body ">
                  <p>初始保證金和維持保證金在您的交易能力和保證金平倉水平之間建立緩衝區，盡力保障您在遇到不利市場狀況時所受的損失。
                    <br>1、初始保證金：這是交易時提供的交易前保證金，即是在設立新倉位時，賬戶必須擁有足夠的保證金抵押品，以符合整個保證金組合的初始保證金要求。
                    <br>2、維持保證金：這是一種持續性的保證金，即是持有倉位期間，賬戶必須擁有的現金或已核准保證金抵押品之金額下限。維持保證金會用於計算保證金的運用情況；一旦您的賬戶未能符合維持保證金要求，我們便會立即平倉。</p></div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="help_h_01_02">
                <h2 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#help_01_02" aria-expanded="flase" aria-controls="help_01_02">保證金率：期貨</button></h2>
              </div>
              <div id="help_01_02" class="collapse" aria-labelledby="help_h_01_02" data-parent="#accordionExample" style="">
                <div class="card-body ">
                  <p>初始及維持保證金</p>
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
          <h2 class="">上市期權</h2></div>
        <div class="col-12">
          <div class="accordion specification_card" id="accordionExample3">
            <div class="card">
              <div class="card-header" id="help_h_03_01">
                <h2 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#help_03_01" aria-expanded="true" aria-controls="help_03_01">客戶保證金檔案</button></h2>
              </div>
              <div id="help_03_01" class="collapse " aria-labelledby="help_h_03_01" data-parent="#accordionExample3" style="">
                <div class="card-body ">
                  <p>盛寶會營運兩個與上市期權交易1相關的客戶保證金檔案：</p>
                  <p>基本檔案：客戶可以購入（持有）上市期權
                    <br>進階檔案：客戶可以購入（持有）和出售（發行）上市期權。客戶將會在交易上市產品的期權策略和/或投資組合（即上市期權和/或相關產品的組合）時獲得保證金收益。</p>
                  <p>客戶將預設為基本檔案，因此無法出售（發行）上市期權。如欲發行上市期權，客戶必須符合下列要求，以啟用進階檔案。</p>
                  <p>客戶的賬戶價值必須不低於 5,000 美元或同等價值
                    <br>客戶必須提供書面聲明，表明自己已了解淡倉賣出（發行）期權的相關風險
                    <br>
                    <sup>1
                      <sup>上市期權包括期貨和指數的股票期權和合約期權。</p>
                  <table cellpadding="0" cellspacing="0" class="table table-striped">
                    <thead>
                      <tr>
                        <th>策略</th>
                        <th style="text-align:left">初始及維持保證金</th></tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td data-label="Strategy">
                          <p>多頭寬跨式交易
                            <br>買入勒式期權</p></td>
                        <td data-label="Initial &amp; maintenance margin" style="text-align:left">無</td></tr>
                      <tr>
                        <td data-label="Strategy">價外裸認購期權</td>
                        <td data-label="Initial &amp; maintenance margin" style="text-align:left">
                          <h4 style="text-align:left">
                            <strong>股票期權</strong></h4>
                          <p style="text-align:left">認購期權價格 +（（X% * 標的價格）- 價外金額)，（Y% * 標的價格））之最大值</p>
                          <p style="text-align:left">假如認購期權的價外金額等於：（0，期權行使價 - 標的價格）之最大值</p>
                          <p style="text-align:left">
                            <strong>示例：</strong>以 0.08 的價格沽出 1 份 DTE 認購期權（到期日：1 月 14 日，行使價：12.50）</p>
                          <p style="text-align:left">標的價格12.30</p>
                          <ul>
                            <li style="text-align:left">
                              <span style="font-size:0.875rem">賣出期權的保證金=期權金保證金 + 額外保證金</span></li>
                            <li style="text-align:left">
                              <span style="font-size:0.875rem"></span>（0.08*100股）+ ((0.15*12.30)-(12.50-12.30)) * 100 股票</li>
                            <li style="text-align:left">8 € 期權金+ 164.5 € 保證金= 172.50 € 保證金要求</li></ul>
                        </td>
                      </tr>
                      <tr>
                        <td data-label="Strategy">賣出無掩護認沽期權賣空策略</td>
                        <td data-label="Initial &amp; maintenance margin" style="text-align:left">
                          <h4 style="text-align:left">
                            <strong>股票期權</strong></h4>
                          <p style="text-align:left">認沽期權價格 +（（X% * 標的價格）- 價外金額)，（Y% * 行使價））之最大值
                            <br>
                            <br>如果認沽期權的價外金額等於：（0，標的價格 – 期權行使價）之最大值</p>
                          <p style="text-align:left">
                            <strong>示例：</strong>以 0.06 的價格沽出 1 份 DTE 認沽證（到期日：1 月 14 日，行使價：12）</p>
                          <p style="text-align:left">標的價格12.30</p>
                          <ul>
                            <li style="text-align:left">賣出期權的保證金=期權金保證金 + 額外保證金</li>
                            <li style="text-align:left">(0.06*100股) + ((0.15*12.30)-(12.30-12)) * 100 股票</li>
                            <li style="text-align:left">6 € 期權金+ 154.5 € 保證金= 160.50 € 保證金要求</li></ul>
                        </td>
                      </tr>
                      <tr>
                        <td data-label="Strategy">買入跨價認購期權策略</td>
                        <td data-label="Initial &amp; maintenance margin">
                          <p style="text-align:left">（（買入認購期權行使價 - 沽出認購期權行使價），0）之最大值</p>
                          <p style="text-align:left">
                            <strong>案例：&nbsp;</strong>以 0.10 的價格購入 DTE 認購期權（到期日：1 月 14 日，行使價：12.5），然後以 0.02 的價格沽出 DTE 認購期權（到期日：1 月 14 日，行使價：13.5）</p>
                          <ul>
                            <li style="text-align:left">（（12.5 – 13.5），0）之最大值</li>
                            <li style="text-align:left">8 歐元期權金 + 0 歐元保證金要求</li></ul>
                        </td>
                      </tr>
                      <tr>
                        <td data-label="Strategy">
                          <p>沽空跨價認沽期權組合</p>
                        </td>
                        <td data-label="Initial &amp; maintenance margin" style="text-align:left">
                          <p style="text-align:left">（賣出認沽期權行使價 - 買入認沽期權行使價） – （賣出認沽期權價格 – 買入認沽期權價格）</p>
                          <p style="text-align:left">
                            <strong>案例：&nbsp;</strong>以 0.08 的價格沽出 DTE 認沽期權（到期日：1 月 14 日，行使價：12），然後以 0.02 的價格購入 DTE 認沽期權（到期日：1 月 14 日，行使價：11）</p>
                          <ul>
                            <li style="text-align:left">((12-11) – (0.08-0.02))* 100 股</li>
                            <li style="text-align:left">(1 – 0.06)* 100 股</li>
                            <li style="text-align:left">6 歐元期權金 + 94 歐元保證金要求</li></ul>
                        </td>
                      </tr>
                      <tr>
                        <td data-label="Strategy">
                          <p>賣出跨式組合策略
                            <br>賣出寬跨式組合策略</p></td>
                        <td data-label="Initial &amp; maintenance margin">
                          <p style="text-align:left">如果初始保證金賣出認沽期權 &gt; 初始賣出認購期權，則
                            <br>使用初始保證金賣出認沽期權 + 賣出認購期權價
                            <br>或者
                            <br>如果初始保證金做空催繳 &gt;= 初始賣出認購期權，則
                            <br>使用初始保證金做空催繳 + 買入認購期權價</p></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="help_h_03_02">
                <h2 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#help_03_02" aria-expanded="flase" aria-controls="help_03_02">保證金減免安排</button></h2>
              </div>
              <div id="help_03_02" class="collapse" aria-labelledby="help_h_03_02" data-parent="#accordionExample3" style="">
                <div class="card-body ">
                  <p>在一個價差組合中，期權長倉對同一類的短倉作出對沖。當認購期權比認沽相對價內（Debit Spread），買方倉位的價值完全覆蓋了賣方倉位，所以此時不需要額外保證金。 認沽期權比認購相對價內（Credit Spread），買方倉位的全部價值不足覆蓋賣方倉位，此時需要承擔一筆額外保證金。保證金金額等於兩個期權行使價的差價。</p>
                  <p>注意：我們建議在交易價差組合倉位時，首先平掉短倉後再平掉長倉。這樣就可以避免承擔只剩短倉的高額保證金。但請注意，客戶可能因為價差保證金不足以買回期權長倉，而賬戶被鎖死，只能使用匯入額外資金才能完成此交易。</p>
                  <p>跨式組合/寬跨式組合賣方</p>
                  <p>跨式組合/寬跨式組合賣方的規則不同於保護性買權以及價差組合。差別在於跨式組合賣方的兩邊並不對沖對方。一個賣出跨式組合/寬跨式組合由一個認購期權賣方和一個認沽期權賣方組合。鑒於認購賣方和認沽賣方的市場方向不同，盛寶需要收取其中一邊的最高保證金作額外保證金。</p>
                  <p>當寬跨式倉位的認購邊被過戶，客戶需要交割相關股票。同樣地，當認沽邊被過戶，客戶需要交割相關股票。持有股票和原寬跨式組合中剩餘的認購邊此時又組合了一個保護性買權。</p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="help_h_03_03">
                <h2 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#help_03_03" aria-expanded="flase" aria-controls="help_03_03">保證金需求</button></h2>
              </div>
              <div id="help_03_03" class="collapse" aria-labelledby="help_h_03_03" data-parent="#accordionExample3" style="">
                <div class="card-body ">
                  <p>對包括股票期權在內的某些特定產品，我們需收取保證金以覆蓋對持有此類產品的潛在損失。</p>
                  <p>股票期權交易按照全價期權金計算。</p>
                  <p>全價期權金例子</p>
                  <p>當買入一份全價期權金的期權時，期權費將從現金結額中扣除。除了保證金減免方案，所買入期權的價值將不能進行保證金交易。</p>
                  <p>在以下案例中，客戶以25美元買入一份蘋果公司2013年12月行使價格為530美元的認購期權（蘋果公司的股價為529.85美元，一份期權對應100股，買入/賣出的佣金為6美元每手。交易費用為0.3美元）。</p>
                  <p>客戶有一個10000美元的現金賬戶，他賬戶的期權計算摘要如下：</p>
                  <table class="table table-striped">
                    <tbody>
                      <tr>
                        <th rowspan="1" colspan="3">
                          <h4>
                            <strong>現金和倉位摘要</strong></h4>
                        </th>
                      </tr>
                      <tr>
                        <td>
                          <p>非保證金交易倉位</p>
                        </td>
                        <td>
                          <p>1 * 25 * 100 股 =</p>
                        </td>
                        <td>
                          <p style="text-align:right">2,500.00 美元</p>
                          <p>&nbsp;</p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <p>保證金賬面盈利/虧損</p>
                        </td>
                        <td></td>
                        <td>
                          <p>--</p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <p>預計平倉所需佣金</p>
                        </td>
                        <td>
                          <p>- 1* ($6 + $0.30) =</p>
                        </td>
                        <td>
                          <p style="text-align:right">- 6.30 美元</p>
                          <p>&nbsp;</p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <h4>
                            <strong>倉位賬面價值</strong></h4>
                        </td>
                        <td colspan="2">
                          <p style="text-align:right">
                            <strong>2,493.70 美元</strong></p>
                        </td>
                      </tr>
                      <tr>
                        <td></td>
                        <td colspan="2"></td>
                      </tr>
                      <tr>
                        <td>
                          <p>現金餘額</p>
                        </td>
                        <td></td>
                        <td>
                          <p>10,000.00 美元</p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <p>待記賬金額</p>
                        </td>
                        <td>
                          <p>- ($2,500 + $6.30) =</p>
                        </td>
                        <td>
                          <p>- 2,506.30 美元</p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <h4>
                            <strong>賬戶總值</strong></h4>
                        </td>
                        <td colspan="2">
                          <p style="text-align:right">
                            <strong>9,987.40 美元</strong></p>
                        </td>
                      </tr>
                      <tr>
                        <td></td>
                        <td colspan="2"></td>
                      </tr>
                      <tr>
                        <td>
                          <p>不可應用於保證金抵押</p>
                        </td>
                        <td>
                          <p>- 1 * 25 * 100 股 =</p>
                        </td>
                        <td>
                          <p>- 2,500.00 美元</p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <p>已佔用的保證金</p>
                        </td>
                        <td></td>
                        <td>
                          <p>--</p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <h4>
                            <strong>可用於保證金交易</strong></h4>
                        </td>
                        <td colspan="2">
                          <p style="text-align:right">
                            <strong>7,487.40 美元</strong></p>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <p>以全價期權金的期權為例，待記賬金額將被過夜計入客戶現金餘額中。第二日，當期權價格升至41美元（即股價556.5美元），期權計算總結摘要入下：</p>
                  <table class="table table-striped">
                    <tbody>
                      <tr>
                        <th rowspan="1" colspan="3">
                          <h4>
                            <strong>現金和倉位摘要</strong></h4>
                        </th>
                      </tr>
                      <tr>
                        <td>
                          <p>非保證金交易倉位</p>
                        </td>
                        <td>
                          <p>1 * 41 * 100 股 =</p>
                        </td>
                        <td>
                          <p>$4,100.00</p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <p>保證金賬面盈利/虧損</p>
                        </td>
                        <td></td>
                        <td>
                          <p>--</p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <p>預計平倉所需佣金</p>
                        </td>
                        <td>
                          <p>- 1*($6+$0.30) =</p>
                        </td>
                        <td>
                          <p>-$6.30</p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <h4>
                            <strong>倉位賬面價值</strong></h4>
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
                          <p>現金餘額</p>
                        </td>
                        <td></td>
                        <td>
                          <p>$7,493.70</p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <p>待記賬金額</p>
                        </td>
                        <td></td>
                        <td>
                          <p>--</p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <h4>
                            <strong>賬戶總值</strong></h4>
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
                          <p>不可應用於保證金抵押</p>
                        </td>
                        <td>
                          <p>- 1 * 41 * 100 股 =</p>
                        </td>
                        <td>
                          <p>-$ 4,100.00</p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <p>已佔用的保證金</p>
                        </td>
                        <td></td>
                        <td>
                          <p>--</p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <h4>
                            <strong>可用於保證金交易</strong></h4>
                        </td>
                        <td colspan="2">
                          <h4>$7,487.40</h4></td>
                      </tr>
                    </tbody>
                  </table>
                  <p>非保證金交易倉：隨著期權價格上升而增長。
                    <br>倉位賬面價值：隨著期權價格上升而增長。
                    <br>現金餘額：扣除期權價格。為登記交易此時為0。
                    <br>賬戶總值：隨著期權價格上升而增長
                    <br>不可應用於保證金抵押：隨著期倉位新價值上升而增長。</p>
                  <h6>賣出期權的保證金
                    <h6>當股票期權買方行權時，賣方持有者要過戶交收相關股票。若市場方向不利於賣方倉位方向發展，賣方所承受的虧損將會很大。因此我們會收取期權金保證金，以保證有足夠的資金讓賣方平倉以及額外保證金用於覆蓋股票價格隔夜變動帶來的損失。保證金需求緊盯市場價值，當保證金交易倉位所需的總保證金需求超過客戶追加保證金需求的時候，將觸發強制平倉。</p>
                      <p>股票期權賣方保證金費用一般計算公式如下： 股票期權賣方所須保證金 = 期權金保證金 + 額外保證金</p>
                      <p>期權金保證金用以保證股票期權短倉可以按市價平倉，等於在交易時間內期權的買入報價。額外保證金用以在股票期權由於交易時間有限而無法平倉時，應付相關股票價格過夜變化的風險。</p>
                      <p>股票期權</p>
                      <p>對股票期權，額外保證金等於對應相關股票價值的一個百分比減去處於價外期權的一個折扣。
                        <br>認購期權額外保證金 = Max(X% *相關股票價格 – 價外期權數量, Y% * 相關股票價格)
                        <br>認沽期權額外保證金 = Max(X% *相關股票價格 – 價外期權數量, Y% * 行使價)</p>
                      <p>保證金比率由盛寶金融設定，並隨行就市調整。實際金額視期權合約不同而變化很大，且可調整。客戶可以看到期權合約不同情形下的適用值。</p>
                      <p>認購期權的價外數量等於:
                        <br>Max （0, 期權行使價 – 股價)</p>
                      <p>認購期權的價外數量等於：
                        <br>Max （0, 股價 - 期權行使價 )</p>
                      <p>為了對應金額，保證金需求需要乘以一個交易單位（100股）</p>
                      <p>案例:</p>
                      <p>假設蘋果公司股票期權的保證金比率X為15%,Y為10%</p>
                      <p>一個客戶以1.90美元賣空蘋果公司股票期權認購期權，行使價535美元（蘋果公司股價523.74美元）。期權對應100股股票。價外期權量是11.26股價點(535 – 523.74)，那麼額外保證金就是67.30股票點（6730美元）。在賬戶摘要中，期權金保證金從倉位中剔除。</p>
                      <table class="table table-striped">
                        <tbody>
                          <tr>
                            <th rowspan="1" colspan="3">現金和倉位摘要</th></tr>
                          <tr>
                            <td rowspan="1" colspan="1">
                              <p>非保證金交易倉位</p>
                            </td>
                            <td>
                              <p>- 1 * $1.90 * 100 股 =</p>
                            </td>
                            <td>
                              <p>190.00 美元</p>
                            </td>
                          </tr>
                          <tr>
                            <td rowspan="1" colspan="1">
                              <p>保證金賬面盈利/虧損</p>
                            </td>
                            <td></td>
                            <td>
                              <p>--</p>
                            </td>
                          </tr>
                          <tr>
                            <td rowspan="1" colspan="1">
                              <p>預計平倉所需佣金</p>
                            </td>
                            <td>
                              <p>- (6 + $0.30) =</p>
                            </td>
                            <td>
                              <p>- 6.30 美元</p>
                            </td>
                          </tr>
                          <tr>
                            <td rowspan="1" colspan="1">
                              <p>
                                <strong>倉位賬面價值</strong></p>
                            </td>
                            <td colspan="2">
                              <p>
                                <strong>196.30 美元</strong></p>
                            </td>
                          </tr>
                          <tr>
                            <td rowspan="1" colspan="1"></td>
                            <td colspan="2"></td>
                          </tr>
                          <tr>
                            <td rowspan="1" colspan="1">
                              <p>現金餘額</p>
                            </td>
                            <td></td>
                            <td>
                              <p>10,000.00 美元</p>
                            </td>
                          </tr>
                          <tr>
                            <td rowspan="1" colspan="1">
                              <p>待記賬金額</p>
                            </td>
                            <td>
                              <p>$190 - ($6 + $0.30) =</p>
                            </td>
                            <td>
                              <p>183.70 美元</p>
                            </td>
                          </tr>
                          <tr>
                            <td rowspan="1" colspan="1">
                              <p>
                                <strong>賬戶總值</strong></p>
                            </td>
                            <td colspan="2">
                              <p>
                                <strong>9,987.40 美元</strong></p>
                            </td>
                          </tr>
                          <tr>
                            <td rowspan="1" colspan="1"></td>
                            <td colspan="2"></td>
                          </tr>
                          <tr>
                            <td rowspan="1" colspan="1">
                              <p>不可應用於保證金抵押</p>
                            </td>
                            <td></td>
                            <td>
                              <p>--</p>
                            </td>
                          </tr>
                          <tr>
                            <td rowspan="1" colspan="1">
                              <p>已佔用的保證金</p>
                            </td>
                            <td>
                              <p>- 100 股 *( (0.15 * 523.74) – 11.26)</p>
                            </td>
                            <td>
                              <p>- 6,730.00 美元</p>
                            </td>
                          </tr>
                          <tr>
                            <td rowspan="1" colspan="1">
                              <p>
                                <strong>可用於保證金交易</strong></p>
                            </td>
                            <td colspan="2">
                              <p>
                                <strong>3,257.40 美元</strong></p>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                </div>
              </div>
            </div>
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