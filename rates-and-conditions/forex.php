<?php include("../header.php") ?>
<script>
    document.getElementById("title").innerHTML = "Industry-Leading Pricing | AFTT Bank";
</script>
<!-- banner -->
<div class="container-fluid maket_header" style="background-color: #111827;">
    <div class="container">
        <div class="row text-white">
            <div class="col-sm-12 p_center">
                <h1 class="mb-3 mt-5">Forex Pricing</h1>
                <h5>Explore our industry-leading forex spreads and low financing costs.</h5>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" style="background: #f3f4f6; overflow: hidden;">
    <div class="container maket_header">
        <div class="row">
            <div class="col-12 pb-4">
                <h2>Pricing Tiers</h2>
                <p>We offer three pricing tiers. The more you trade, the lower the costs.</p>
                <a href="/accounts.php">Learn more about our account tiers</a>
            </div>
            <div class="col-sm-12">
                <table cellpadding="0" cellspacing="0" class="table border-bottom table-striped">
                    <thead class="v2-bg--white v2-rounded-corner--none">
                        <tr>
                            <th>Instrument</th>
                            <th>Classic Account</th>
                            <th>Platinum Account</th>
                            <th>VIP Account</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>EUR/USD</td>
                            <td>0.6</td>
                            <td>0.5</td>
                            <td>0.4</td>
                        </tr>
                        <tr>
                            <td>GBP/USD</td>
                            <td>0.7</td>
                            <td>0.6</td>
                            <td>0.4</td>
                        </tr>
                        <tr>
                            <td>EUR/JPY</td>
                            <td>0.9</td>
                            <td>0.8</td>
                            <td>0.6</td>
                        </tr>
                        <tr>
                            <td>AUD/USD</td>
                            <td>0.4</td>
                            <td>0.3</td>
                            <td>0.3</td>
                        </tr>
                    </tbody>
                </table>
                <p class="mt-4 text-center">Please note, the above prices are minimum spreads.</p>
                <h5 class="mt-4 text-center">Trade more with our Platinum and VIP accounts to enjoy lower prices. <a href="/accounts.php">Learn more</a></h5>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" style="background: #111827;">
    <div class="container pt-4 pb-4 text-white p_center">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <h3 class="mb-0">Start Trading with AFTT Now</h3>
                <h6>Opening an account takes only 5 minutes</h6>
            </div>
            <div class="col-sm-6">
                <div class="pt-2 pb-2 text-right p_center">
                    <a href="" class="btn btn-primary"><strong>Open an Account</strong></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" style="background: #f3f4f6; overflow: hidden;">
    <div class="container maket_header">
        <div class="row">
            <div class="col-12 pb-4"><h2>Financing Details</h2></div>
            <div class="col-12">
                <div class="accordion specification_card" id="accordionExample2">
                    <div class="card">
                        <div class="card-header" id="help_h_02_01">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#help_02_01" aria-expanded="true" aria-controls="help_02_01">
                                    Forex Overnight Interest Calculation Steps
                                </button>
                            </h2>
                        </div>
                        <div id="help_02_01" class="collapse show" aria-labelledby="help_h_02_01" data-parent="#accordionExample2" style="">
                            <div class="card-body ">
                                <p>Spot forex trades use the spot market pricing. "Spot" refers to the standard settlement convention of T+2 (two business days after the trade date). For example, a EUR/USD trade executed on Monday would settle on Wednesday, assuming Tuesday and Wednesday are not public holidays in the countries involved. AFTT does not settle forex spot trades. We roll over open positions to the next business day at the end of the trading day (17:00 EST).</p>
                                <p>Overnight interest comprises two parts: tomorrow/next swap points (forward price) and financing on unrealized profits/losses.</p>
                                <p>1. Tomorrow/Next Swap Points (Forward Price)<br>Swap points for each currency are quoted by major banks, and AFTT applies a markup based on the client's tier. These points are added to or subtracted from the position's opening price to adjust it for the next day.</p>
                                <table class="table border">
                                    <thead>
                                        <tr>
                                            <td style="text-align:center;font-weight:bold;width:380px"></td>
                                            <td style="text-align:center;font-weight:bold;background-color:#05acfa;color:#fff;border-left:2px solid #fff">Classic Account</td>
                                            <td style="text-align:center;font-weight:bold;background-color:#0070c3;color:#fff;border-left:2px solid #fff">Platinum Account</td>
                                            <td style="text-align:center;font-weight:bold;background-color:#333e50;color:#fff;border-left:2px solid #fff">VIP Account</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="text-align:center">Tomorrow/Next Swap Points</td>
                                            <td style="text-align:center;border-left:2px solid #fff">+/-0.60%</td>
                                            <td style="text-align:center;border-left:2px solid #fff">+/-0.50%</td>
                                            <td style="text-align:center;border-left:2px solid #fff">+/-0.45%</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p>*Effective from November 7, 2022</p>
                                <p>2. Financing on Unrealized Profits/Losses<br>We roll over all unrealized profits/losses to the next business day. Unrealized P&L is the difference between the position's opening price (possibly adjusted by prior overnight interest) and the spot price at the time of the overnight interest calculation.</p>
                                <p>The rate is calculated as the daily market overnight rate plus/minus a +/- 2.00% adjustment. The final rate is used to adjust the position's closing price.</p>
                                <p>Example: Buy 100,000 EUR/USD spot on Monday, sell 100,000 EUR/USD spot on Tuesday.</p>
                                <table cellpadding="0" cellspacing="0" class="table border">
                                    <thead>
                                        <tr>
                                            <th style="text-align:center"><strong>Day</strong></th>
                                            <th style="text-align:center"><strong>Value Date</strong></th>
                                            <th style="text-align:center"><strong>Position</strong></th>
                                            <th style="text-align:center"><strong>Description</strong></th>
                                        </tr>
                                    </thead>
                                    <tbody style="text-align:left">
                                        <tr>
                                            <td data-label="Day" style="text-align:center">Monday</td>
                                            <td data-label="Value Date" style="text-align:center">Today (T)</td>
                                            <td data-label="Position" style="text-align:center">+100,000</td>
                                            <td data-label="Description" style="text-align:center">» Trade at 12:00 GMT, buy 100,000 EUR/USD with T+2 settlement<br></td>
                                        </tr>
                                        <tr>
                                            <td data-label="Day" style="text-align:center">Tuesday</td>
                                            <td data-label="Value Date" style="text-align:center">T+1</td>
                                            <td data-label="Position" style="text-align:center">-100,000</td>
                                            <td data-label="Description" style="text-align:center">» Trade at 03:30 GMT, sell 100,000 EUR/USD with T+2 settlement<br>» Rollover position to T+3 at 10:00 GMT<br>» Unrealized P&L visible in Position Module from 10:00 GMT<br>» End-of-day file available from 10:00 GMT</td>
                                        </tr>
                                        <tr>
                                            <td data-label="Day" style="text-align:center">Wednesday</td>
                                            <td data-label="Value Date" style="text-align:center">T+2</td>
                                            <td data-label="Position" style="text-align:center"></td>
                                            <td data-label="Description" style="text-align:center">» Unrealized P&L visible in Position Module from 00:00 GMT<br>» Forex Overnight Interest Report available from 04:00 GMT</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p class="text--meta"><sup>1</sup>The T+2 standard settlement convention applies to most currency pairs, but there are exceptions, such as USD/CAD, which settles on the next business day (T+1).</p>
                                <p class="text--meta"><sup>2</sup>The global market convention is to set the forex settlement day cutoff at 17:00 EST, with exceptions such as NZD, which has a cutoff of 07:00 NZDT.</p>
                                <p class="text--meta"><sup>3</sup>For trades involving MXN, RUB, TRY, and ZAR, an additional +/- 0.30% adjustment applies.</p>
                                <p class="text--meta"><sup>4</sup>Applicable for the default overnight interest calculation method.</p>
                                <p class="text--meta"><sup>5</sup>Market prices for each currency are based on the most liquid trading session's average price, except for SGD, HKD, CNH, and THB, which use the 14:00 HKT price.</p>
                                <p class="text--meta"><sup>6</sup>Positions' opening prices may be adjusted based on forward prices and financing interest. You can view unrealized P&L in the Position Module.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="help_h_02_02">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#help_02_02" aria-expanded="false" aria-controls="help_02_02">
                                    What are AFTT's General Charges?
                                </button>
                            </h2>
                        </div>
                        <div id="help_02_02" class="collapse" aria-labelledby="help_h_02_02" data-parent="#accordionExample2" style="">
                            <div class="card-body">
                                <p>Learn more about our <a href="/rates-and-conditions/commissions-charges-and-margin-schedule.php">general charges</a>.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="help_h_02_03">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#help_02_03" aria-expanded="false" aria-controls="help_02_03">
                                    Historical Swap Points
                                </button>
                            </h2>
                        </div>
                        <div id="help_02_03" class="collapse" aria-labelledby="help_h_02_03" data-parent="#accordionExample2" style="">
                            <div class="card-body">
                                <p>We publish the swap points used to calculate the daily overnight interest to provide full transparency to our clients.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" style="background: #f3f4f6;">
    <div class="container maket_header pt-0 products_p">
        <div class="row">
            <div class="col-sm-12 mb-4">
                <h2>Explore All Our Pricing</h2>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <a href="/rates-and-conditions/forex-options.php" class="pricie_bg">
                    <p class="fwb mb-3">Forex Options</p>
                    <p class="">Spreads as low as</p>
                    <h1>3 <span class="h3"> Pips</span></h1>
                    <p class="pricie_cont">Trade 45 forex vanilla options with maturities ranging from one day to 12 months.</p>
                    <p class="blue fwb mb-0">View All Pricing</p>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <a href="/rates-and-conditions/stocks.php" class="pricie_bg">
                    <p class="fwb mb-3">Stocks</p>
                    <p class="">US Stocks Commission from</p>
                    <h1>1 <span class="h3"> USD</span></h1>
                    <p class="pricie_cont">Trade over 23,500 stocks across 50 global exchanges in core and emerging markets.</p>
                    <p class="blue fwb mb-0">View All Pricing</p>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <a href="/rates-and-conditions/etf.php" class="pricie_bg">
                    <p class="fwb mb-3">ETFs</p>
                    <p class="">US-Listed ETFs Commission from</p>
                    <h1>1 <span class="h3"> USD</span></h1>
                    <p class="pricie_cont">Trade over 7,000 ETFs across more than 30 exchanges.</p>
                    <p class="blue fwb mb-0">View All Pricing</p>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <a href="/rates-and-conditions/futures.php" class="pricie_bg">
                    <p class="fwb mb-3">Futures</p>
                    <p class="">Commission as low as</p>
                    <h1>1 <span class="h3"> USD</span></h1>
                    <p class="pricie_cont">Trade over 250 futures including stock indices, energy, metals, agriculture, rates, and forex.</p>
                    <p class="blue fwb mb-0">View All Pricing</p>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <a href="/rates-and-conditions/bonds.php" class="pricie_bg">
                    <p class="fwb mb-3">Bonds</p>
                    <p class="">Government Bonds Commission from</p>
                    <h1>0.05% <span class="h3"></span></h1>
                    <p class="pricie_cont">Trade bonds online or offline from 26 countries/regions.</p>
                    <p class="blue fwb mb-0">View All Pricing</p>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <a href="/rates-and-conditions/listed-options.php" class="pricie_bg">
                    <p class="fwb mb-3">Listed Options</p>
                    <p class="">Commission as low as</p>
                    <h1>0.75 <span class="h3"> USD</span></h1>
                    <p class="pricie_cont">Trade over 3,200 listed options across 20 global exchanges.</p>
                    <p class="blue fwb mb-0">View All Pricing</p>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <a href="/products/mutual-funds.php" class="pricie_bg">
                    <p class="fwb mb-3">Mutual Funds</p>
                    <p class="">Commission, Custody, and Platform Fees from</p>
                    <h1>0 <span class="h3"> USD</span></h1>
                    <p class="pricie_cont">Access over 500 top mutual funds from the world's largest investment houses.</p>
                    <p class="blue fwb mb-0">View All Pricing</p>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <a href="/products/ipo.php" class="pricie_bg">
                    <p class="fwb mb-3">IPO</p>
                    <p class="">Financing Rate from</p>
                    <h1>0% <span class="h3"></span></h1>
                    <p class="pricie_cont">Subscribe to HKEX IPOs with up to 10x leverage and low handling fees.</p>
                    <p class="blue fwb mb-0">View All Pricing</p>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <a href="/rates-and-conditions/commodities.php" class="pricie_bg">
                    <p class="fwb mb-3">Commodities</p>
                    <p class="">Commission as low as</p>
                    <h1>0.85 <span class="h3"> USD</span></h1>
                    <p>per lot</p>
                    <p class="pricie_cont" style="min-height: 62px;">Trade various commodities including CFDs, futures, options, and spot contracts.</p>
                    <p class="blue fwb mb-0">View All Pricing</p>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid text-white" style="background: #0d1017;">
    <div class="container maket_header">
        <div class="row text-center">
            <div class="col-sm-12">
                <h2 class="mb-1">Ready to Get Started?</h2>
                <h5>Opening an account takes just about 5 minutes</h5>
            </div>
            <div class="col-sm-12">
                <div class="pt-4">
                    <a href="#" class="btn btn-primary"><strong>Open an Account</strong></a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("../footer.php") ?>
<script type="text/javascript">
$('.app_ys li').click(function() {
    $(this).siblings('li').removeClass('active');
    $(this).addClass('active');
});
$(document).ready(function() {
    $('.app_ys li').click(function() {
        var index = $(this).index();
        $('#image-viewer img').hide();
        $('#image-viewer img').eq(index).show();
    });
});
</script>
