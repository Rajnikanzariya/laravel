  <footer class="page-footer notlogin">
        <div class="footer-copyright">
            <div class="container">
                <!-- Copyright © 2019 <a class="grey-text text-lighten-4" href="http://awsapp.mypandit.com/" target="_blank">MyPandit</a> All rights reserved. -->
               
                @if(session()->has('token'))              
                <div class="footer_link_cls">
                    <a href="/contact-us" class="pull-right">Contact Us</a> |
                    <a href="/privacy-policy" class="pull-right">Privacy Policy</a> | <a href="/terms-of-service">Terms & Conditions</a> | <a href="/terms-of-service/#cancellation_policy_data" class="cancellation-smooth-goto">Cancellation Policy</a>
                </div>
                <div class="footer_copy_cls">
                    Copyright © <?php echo date('Y');?> <a class="grey-text text-lighten-4" href="http://www.mypandit.com/" target="_blank">MyPandit</a> All rights reserved.
                </div>
                @else
                <div class="footer_copy_cls footer-without-login">
                    Copyright © <?php echo date('Y');?> <a class="grey-text text-lighten-4" href="http://www.mypandit.com/" target="_blank">MyPandit</a> All rights reserved.
                </div>
                @endif
            </div>
        </div>
    </footer>
<script>
    $('.cancellation-smooth-goto').on('click', function() {  
    	var section = $(this).attr("href");
    	$('html,body').animate({
  		scrollTop: $(window.location.hash).offset().top
		});
	});
</script>