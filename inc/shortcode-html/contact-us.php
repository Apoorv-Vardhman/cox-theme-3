<?php
global $wpdb;
$table_name = $wpdb->prefix . "cox_setting";
$sql = "select * from $table_name where type='info' or type='social'";
$result = $wpdb->get_results( $wpdb->prepare($sql) );
$site_email = "";
$site_address = "";
$site_phone = "";
foreach ($result as $item){
    if($item->name=="address"){
        $site_address = $item->value;
    }else if($item->name=="email"){
        $site_email = $item->value;
    }else if($item->name=="phone"){
        $site_phone = $item->value;
    }
}
?>

<div class="contact-us-wrapper section-padding">
    <div class="container">
        <div class="row eq-height">
            <div class="col-lg-8 col-12">
                <div class="contact-form">
                    <h2>Get in Touch</h2>
                    <form action="" method="POST" class="row" id="contact-form">
                        <div class="col-md-6 col-12">
                            <div class="single-personal-info">
                                <input type="text" name="name" placeholder="Name" >
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="single-personal-info">
                                <input type="email" name="email" placeholder="Email" >
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="single-personal-info">
                                <input type="text" name="phone" placeholder="Number">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="single-personal-info">
                                <input type="text" name="subject" placeholder="Subject">
                            </div>
                        </div>
                        <div class="col-md-12 col-12">
                            <div class="single-personal-info">
                                <textarea name="message" placeholder="message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 col-12">
                            <input class="submit-btn" type="submit" value="Submit Now">
                        </div>
                    </form>
                    <span class="form-message"></span>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="contact-us-sidebar mt-5 mt-lg-0">
                    <div class="contact-info">
                        <h2>CONTACT INFO</h2>
                        <div class="single-info">
                            <div class="icon">
                                <i class="flaticon-email"></i>
                            </div>
                            <div class="text">
                                <span>Email Us</span>
                                <h5><?php echo $site_email; ?></h5>
                            </div>
                        </div>
                        <div class="single-info">
                            <div class="icon">
                                <i class="flaticon-phone-call-1"></i>
                            </div>
                            <div class="text">
                                <span>Call Us</span>
                                <h5><?php echo $site_phone; ?></h5>
                            </div>
                        </div>
                        <div class="single-info">
                            <div class="icon">
                                <i class="flaticon-pin"></i>
                            </div>
                            <div class="text">
                                <span>Location</span>
                                <h5><?php echo $site_address; ?></h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
