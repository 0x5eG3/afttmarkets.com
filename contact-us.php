<?php include("header.php") ?>
<script>
    document.getElementById("title").innerHTML="Contact Us | AFTT";
</script>

<!-- Start of aftthelp Zendesk Widget script -->
<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=7af1fa43-3db0-4cb8-ba78-380897ca3300"> </script>
<!-- End of aftthelp Zendesk Widget script -->
<!-- Banner Section -->
<div class="container-fluid" style="padding-top:76px;">
    <div class="container maket_header">
        <div class="row">
            <div class="col-sm-6">
                <h3 class="mb-3 pt-3 "><b>New Zealand</b></h3>
                <h6 class="mb-5">11 Customs Street WestAuckland CBD, Auckland 1010, New Zealand<br>Commercial Bay Tower, Hong Kong</h6>
                <hr>
                <h5 class="fwb mt-4">Support Centre</h5>
                <h6>If you have any questions about the AFTT platform's features, contact us through the following methods.</h6>
                <table class="table table-borderless mt-3">
                    <tbody>
                        <tr style="background-color: rgba(243,244,246,.6);">
                            <td>&nbsp;<span style="color:black">Phone</span></td>
                            <td class="text-right"><span style="color:black"><a href="tel:+852 2207 6040">+852 2207 6040</a></span>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;<span style="color:black">Taiwan Toll-Free Number</span></td>
                            <td class="text-right"><span style="color:black"><a href="tel:00801 85 6862">00801 85 6862</a></span>&nbsp;</td>
                        </tr>
                        <tr style="background-color: rgba(243,244,246,.6);">
                            <td>&nbsp;<span style="color:black">Existing Client Enquiries</span></td>
                            <td class="text-right">
                                <span style="color:black"><a href="#">Live Chat</a></span>
                                <span style="color:black"> or </span>
                                <span style="color:black"><a href="#" target="_blank">Raise a Ticket</a></span>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <h6 class="mb-4">All departments are available 09:00 to 18:00 Monday to Friday.</h6>
                <hr>
            </div>
            <div class="col-sm-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3192.9230868046748!2d174.7655649601327!3d-36.84431804018936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d0d47f981cb7917%3A0xb873537bb913e5dc!2s11%20Customs%20Street%20West%2C%20Auckland%20CBD%2C%20Auckland%201010%2C%20New%20Zealand!5e0!3m2!1sen!2shk!4v1723557784497!5m2!1sen!2shk" width="600" height="450" style="border:0; width:100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>




<!-- Ready to Start Section -->
<div class="container-fluid text-white" style="background: #0d1017;">
    <div class="container maket_header">
        <div class="row text-center">
            <div class="col-sm-12 mb-5">
                <h2 class="mb-3">Ready to Get Started?</h2>    
                <h5 class="grew">Open an AFTT account now; depending on your initial funding, you<br>could instantly earn enough points to qualify for higher tier benefits.</h5>
            </div>
            <div class="col-sm-4">
                <div class="h1 blue">1</div>
                <h5 class="fwb">Submit your online application in just 5 minutes</h5>
            </div>
            <div class="col-sm-4">
                <div class="h1 blue">2</div>
                <h5 class="fwb">Earn points with every trade</h5>
            </div>
            <div class="col-sm-4">
                <div class="h1 blue">3</div>
                <h5 class="fwb">Get better pricing and enhanced services</h5>
            </div>
            <div class="col-sm-12">
                <div class="pt-4">                                            
                    <a href="#" class="btn btn-primary"><strong>Open an Account</strong></a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("footer.php") ?>
<script type="text/javascript">
$('.app_ys li').click(function() {
        $(this).siblings('li').removeClass('active');
        $(this).addClass('active');    
});
$(document).ready(function() {
  $('.app_ys li').click(function() {
    var index = $(this).index(); // Get the index of the hovered li
    $('#image-viewer img').hide(); // Hide all images
    $('#image-viewer img').eq(index).show(); // Show the image corresponding to the index
  });
});
</script>
