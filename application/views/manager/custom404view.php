<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php
$ci = new CI_Controller();
$ci =& get_instance();
$ci->load->helper('url');
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <title>404 Page</title>
</head>
<body>
<div>
       <p>How to Create Custom Codeigniter 404 Error Pages </p>
       <div>
           <p><a href="<?php echo base_url(); ?>">Go Back to Home</a></p>
       </div>
</div>
</body>
</html>