<?php include("../header.php") ?>
<script>
    document.getElementById("title").innerHTML="Refer Friends and Earn Trading Rewards | AFTT Financial";
</script>
<!-- banner -->
<div class="container-fluid banner_refer">
    <div class="container">
        <div class="row text-white">
            <div class="col-sm-7 p_center">
                <h2 class="mb-3">Refer Friends and Earn Trading Rewards</h2>
                <h5>Recommend like-minded investors to use AFTT and earn trading rewards.</h5>
            </div>
        </div>
    </div>
</div>
<div class="container maket_header">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <img src="/images/referral-refunding.webp" alt="Referral Program Image">
        </div>
        <div class="col-sm-6">
            <h2 class="mb-4">Benefits of the Referral Program</h2>
            <h5>Let your friends and family fully utilize market opportunities. They can trade on global markets, use platform tools, and explore content that inspires trading ideas, just like you. Additionally, both of you can earn trading rewards to offset your trading commissions.</h5>
        </div>
    </div>
</div>
<div class="container-fluid" style="background: #f7f9fa;">
    
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
