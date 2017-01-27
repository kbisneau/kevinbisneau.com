<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
    <div class="row">
    <div class="error-template">
	    <h1>Oops!</h1>
	    <h2>404 Not Found</h2>
	    <div class="error-details">
		Sorry, an error has occured, Requested page not found!<br>
	    </div>
	    <div class="error-actions">
		<a href="<?php echo base_url('home'); ?>" class="btn btn-primary">
		    <i class="icon-home icon-white"></i> Take Me Home </a>
		<a href="mailto:contact@kevinbisneau.com" class="btn btn-default">
		    <i class="icon-envelope"></i> Contact Support </a>
	    </div>
	</div>
    </div>
</div>
