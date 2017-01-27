<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>

</div> <!-- content-wrap -->
<footer>
    <div class="row">
        <div class="col-md-4 col-sm-6 hidden-xs hidden-sm footer-navigation">
            <h3><a href="#">KevinBisneau<span>.com </span></a></h3>
            <p class="links"><a href="<?php echo base_url('home');?>">Home</a><strong> · </strong><a href="<?php echo base_url('home/resume');?>">Resume</a><strong> · </strong><a href="#">About</a><strong> · </strong><a href="#">Contact</a></p>
            <p class="company-name">KevinBisneau.com © 2017 </p>
        </div>
        <div class="col-md-4 col-sm-6 hidden-xs hidden-sm footer-contacts">
            <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                <p><span class="new-line-span"><?php echo (isset($username)) ? '415 Quentin Rd' : '';?></span>Utica, N.Y.</p>
            </div>
            <div><span class="fa fa-phone footer-contacts-icon"></span>
                <p class="footer-center-info email text-left"> +1 315 982-4834</p>
            </div>
            <div><span class="fa fa-envelope footer-contacts-icon"></span>
                <p> <a href="#" target="_blank">contact@kevinbisneau.com</a></p>
            </div>
        </div>
        <div class="clearfix visible-sm-block"></div>
        <div class="col-md-4 footer-about">
            <h4>About KevinBisneau.com</h4>
            <p>This website was set up to demonstrate my skills and abilities with web programming. I am a self-taught full stack developer currently seeking opportunities.</p>
            <div class="social-links social-icons"><a href="#"><span class="fa fa-facebook"></span></a><a href="#"><span class="fa fa-linkedin"></span></a><a href="#"><span class="fa fa-github"></span></a></div>
        </div>
    </div>
</footer>
<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/user.js'); ?>"></script>
</body>

</html>
