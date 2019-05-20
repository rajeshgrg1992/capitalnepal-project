
<?php 
    $settings = $this->site_settings_model->get_site_settings(); 
?>

<!--footer-->
<footer class="page-footer">
    <div class="container">
        <div class="row pad-footer">
            <div class="col l5 s12 footer-address">
                <h5 class="white-text">क्यापिटल  <span>नेपाल</span></h5>
                <p class="grey-text text-lighten-4">
                    कालिकास्थान, काठमाडौँ, नेपाल <br>
                    सम्पर्क नम्बर : ९८०७५५५९२९<br>
                    इमेल : capbizmag@gmail.com<br>
                    वेबसाईट : www.capitalnepal.com<br>
                    <a href="https://www.facebook.com/capitalnepal/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.twitter.com/capitalnepal/" title="Twitter"><i class="fab fa-twitter"></i></i></a>
                    <a href="#" title="Youtube"><i class="fab fa-youtube"></i></i></a>
                    <a href="https://plus.google.com/u/0/103853723126446862404" title="Google Plus"><i class="fab fa-google-plus-square"></i></a>
                </p>
                <h6 class="white-text">बिज्ञापनको लागि सम्पर्क</h6>
                <p class="grey-text text-lighten-4">
                    Phone: +९७७९८०७५५५९२९
                </p>
            </div>

            <div class="col l7 s12 nav-footer">
                <div class="row">
                    <div class="col l3 s6 right">
                        <h5 class="white-text">विविध</h5>
                        <ul>
                            <li><a href="#">सुचना प्रविधी</a></li>
                            <li><a href="#">अन्तर्वार्ता</a></li>
                            <li><a href="#">बिषेश</a></li>
                            <li><a href="#">सम्पादकीय</a></li>
                        </ul>
                    </div>
                    <div class="col l3 s6 right">
                        <h5 class="white-text">मनोरञ्जन</h5>
                        <ul>
                            <li><a href="#">साहित्य</a></li>
                            <li><a href="#">कला</a></li>
                            <li><a href="#">भिडियो</a></li>
                            <li><a href="#">खेलकुद</a></li>
                        </ul>
                    </div>
                    <div class="col l3 s6 right">
                        <h5 class="white-text">क्यापिटल नेपाल</h5>
                        <ul>
                            <li><a href="#!">धेरै पढिएको</a></li>
                            <li><a href="#">पत्रपत्रिकाबाट</a></li>
                            <li><a href="#">बिचार</a></li>
                            <li><a href="#">ब्लग</a></li>
                            <li><a href="#">क्यापिटल नेपाल टिभी</a></li>
                        </ul>
                    </div>
                    <div class="col l3 s6 right">
                        <h5 class="white-text">समाचार</h5>
                        <ul>
                            <li><a href="#">समाज</a></li>
                            <li><a href="#">राजनीति</a></li>
                            <li><a href="#">पर्यटन</a></li>
                            <li><a href="#">अर्थ</a></li>
                            <li><a href="#">अन्तराष्ट्रिय</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <a href="#">हाम्रो टिम</a> <a href="#">विज्ञापन</a> <a href="#">सम्पर्क</a> <a href="#">सूचना विभाग दर्ता नं. १००७/०७५ -७६  </a>
            <span class="right">© 2019  क्यापिटल नेपाल. सर्वाधिकार सुरक्षित, &nbsp; Powered By<a href="#" target="_blank">Nectar Digit</a></span>
        </div>
    </div>
</footer>
<a href="#top" class="cd-top to-top" title="Back to top">Top</a>
<script type="text/javascript" src="<?php echo base_url(); ?>templates/ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>templates/asset/sites/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>templates/asset/sites/js/main.js"></script>
<script src="<?php echo base_url(); ?>templates/asset/sites/js/materialize.min.js"></script>
<script src="<?php echo base_url(); ?>templates/asset/sites/js/owl.carousel.min.js"></script>
<script type="text/javascript">
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:60,
        nav:true,
        dots:false,
        lazyLoad:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:4
            }}
    })
</script>
<script type="text/javascript">
    $( document ).ready(function(){
        $('.top-nav').pushpin({
            top: $('.logo').offset().top
        });

        $(".button-collapse").sideNav();
        $('ul.tabs').tabs();

        $('.trend_up').click(function(){
            $('.trending_taja').slideUp();
            $('.trending_update').slideToggle();
        });
        $('.close').click(function(){
            $('.trending_update').slideUp();
        });

        $('.taja_up').click(function(){
            $('.trending_update').slideUp();
            $('.trending_taja').slideToggle();
        });
        $('.close').click(function(){
            $('.trending_taja').slideUp();
        });
        $('.provien').click(function(){
            $('.provience').toggle(300);
        });

    });
</script>
</body>
</html>
