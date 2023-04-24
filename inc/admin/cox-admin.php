<h1>Cox Setting</h1>
<?php settings_errors(); ?>

<?php
    // function deleteDir($path) {
    //     if (empty($path)) { 
    //         return false;
    //     }
    //     return is_file($path) ?
    //             @unlink($path) :
    //             array_map(__FUNCTION__, glob($path.'/*')) == @rmdir($path);
    // }
    // if(deleteDir("C:/home/site/wwwroot/wp-content/plugins/advanced-custom-fields")){
    //     echo "deleted";
    // }else{
    //     echo("not deleted");
    // }
    // if(deleteDir("C:/home/site/wwwroot/wp-content/plugins/advanced-custom-fields")){
    //     echo "deleted";
    // }else{
    //     echo("not deleted");
    // }

    global $wpdb;
    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    $table_name = $wpdb->prefix . "cox_setting";
    //$table_name = "wp_commentmeta";
    $query = $wpdb->prepare( 'SHOW TABLES LIKE %s', $wpdb->esc_like( $table_name ) );
    if ( ! $wpdb->get_var( $query ) == $table_name ) {
        $charset_collate = $wpdb->get_charset_collate();
        $sql = "CREATE TABLE $table_name (
              id int(10) unsigned NOT NULL AUTO_INCREMENT,
              name varchar(255) NOT NULL,
              type varchar(100) not null,
              value longtext NULL,
              UNIQUE (name),PRIMARY KEY  (id)
              
        ) $charset_collate;";
        $res = dbDelta($sql);
        $wpdb->insert($table_name, array(
            'name' => 'email',
            'type'=>'info'
        ));
        $wpdb->insert($table_name, array(
            'name' => 'address',
            'type'=>'info'
        ));
        $wpdb->insert($table_name, array(
            'name' => 'phone',
            'type'=>'info'
        ));
        $wpdb->insert($table_name, array(
            'name' => 'facebook',
            'type'=>'social'
        ));
        $wpdb->insert($table_name, array(
            'name' => 'twitter',
            'type'=>'social'
        ));
        $wpdb->insert($table_name, array(
            'name' => 'linked_in',
            'type'=>'social'
        ));
        $wpdb->insert($table_name, array(
            'name' => 'instagram',
            'type'=>'social'
        ));
        $wpdb->insert($table_name, array(
            'name' => 'youtube',
            'type'=>'social'
        ));
        $wpdb->insert($table_name, array(
            'name' => 'home_card_enable',
            'type'=>'home',
             'value'=>'false'
        ));
        $wpdb->insert($table_name, array(
            'name' => 'home_about_enable',
            'type'=>'home',
             'value'=>'false'
        ));
        $wpdb->insert($table_name, array(
            'name' => 'home_youtube_link',
            'type'=>'home'
        ));
        $wpdb->insert($table_name, array(
            'name' => 'home_title',
            'type'=>'home'
        ));
        $wpdb->insert($table_name, array(
            'name' => 'home_detail_title',
            'type'=>'home'
        ));
        $wpdb->insert($table_name, array(
            'name' => 'home_block_quote',
            'type'=>'home'
        ));
        $wpdb->insert($table_name, array(
            'name' => 'home_content',
            'type'=>'home'
        ));
        $wpdb->insert($table_name, array(
            'name' => 'home_testimonial_enable',
            'type'=>'home',
            'value'=>'false'
        ));
        $wpdb->insert($table_name, array(
            'name' => 'home_testimonial_image_url',
            'type'=>'home'
        ));
    }



    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $twitter = $_POST['twitter'];
        $facebook = $_POST['facebook'];
        $linked_in = $_POST['linked_in'];
        $instagram = $_POST['instagram'];
        $youtube = $_POST['youtube'];
        $sql = "update $table_name set value='$email' where name='email'";
        $wpdb->query($wpdb->prepare($sql));
         $sql = "update $table_name set value='$facebook' where name='facebook'";
        $wpdb->query($wpdb->prepare($sql));
         $sql = "update $table_name set value='$phone' where name='phone'";
        $wpdb->query($wpdb->prepare($sql));
         $sql = "update $table_name set value='$twitter' where name='twitter'";
        $wpdb->query($wpdb->prepare($sql));
         $sql = "update $table_name set value='$linked_in' where name='linked_in'";
        $wpdb->query($wpdb->prepare($sql));
         $sql = "update $table_name set value='$instagram' where name='instagram'";
        $wpdb->query($wpdb->prepare($sql));
         $sql = "update $table_name set value='$youtube' where name='youtube'";
        $wpdb->query($wpdb->prepare($sql));
        $sql = "update $table_name set value='$address' where name='address'";
        $wpdb->query($wpdb->prepare($sql));
        $home_card_enable = isset($_POST['home_card_enable'])?"true":"false";
        $sql = "update $table_name set value='$home_card_enable' where name='home_card_enable'";
        $wpdb->query($wpdb->prepare($sql));

        $home_about_enable = isset($_POST['home_about_enable'])?"true":"false";
        $sql = "update $table_name set value='$home_about_enable' where name='home_about_enable'";
        $wpdb->query($wpdb->prepare($sql));

        $home_testimonial_enable = isset($_POST['home_testimonial_enable'])?"true":"false";
        $sql = "update $table_name set value='$home_testimonial_enable' where name='home_testimonial_enable'";
        $wpdb->query($wpdb->prepare($sql));

         $home_youtube_link = $_POST['home_youtube_link'];
         $sql = "update $table_name set value='$home_youtube_link' where name='home_youtube_link'";
        $wpdb->query($wpdb->prepare($sql));

         $home_title = $_POST['home_title'];
         $sql = "update $table_name set value='$home_title' where name='home_title'";
        $wpdb->query($wpdb->prepare($sql));

         $home_detail_title = $_POST['home_detail_title'];
         $sql = "update $table_name set value='$home_detail_title' where name='home_detail_title'";
        $wpdb->query($wpdb->prepare($sql));

         $home_block_quote = $_POST['home_block_quote'];
         $sql = "update $table_name set value='$home_block_quote' where name='home_block_quote'";
        $wpdb->query($wpdb->prepare($sql));

         $home_content = $_POST['home_content'];
         $sql = "update $table_name set value='$home_content' where name='home_content'";
        $wpdb->query($wpdb->prepare($sql));

         $home_testimonial_image_url = $_POST['home_testimonial_image_url'];
         $sql = "update $table_name set value='$home_testimonial_image_url' where name='home_testimonial_image_url'";
        $wpdb->query($wpdb->prepare($sql));


    }

    $sql = "select * from $table_name where type='info'";
    $infoResult = $wpdb->get_results( $wpdb->prepare($sql) );
    $sql = "select * from $table_name where type='social'";
    $socialResult = $wpdb->get_results( $wpdb->prepare($sql) );
    $sql = "select * from $table_name where type='home'";
    $homeResult = $wpdb->get_results( $wpdb->prepare($sql) );
?>
<style>
    .mt-2{
        margin-top: 10px;
    }
    .cox_container h4{
        background: #b6d4fe;
        padding: 10px 5px;
    }
    .cox_container h5{
        background: #b6d4fe;
        padding: 10px 5px;
    }
    .cox_container label{
        min-width: 15%;
    }
    .cox_container .d-flex{
        display: flex;
        justify-content: center;
        width: 30%;
        margin-top: 10px;

    }
    .cox_container label{
        font-weight: bold;
    }
    .cox_container input[type="submit"]{
        background: #0a58ca;
        color: #f6f6f6;
        outline: none;
        border: none;
        padding: 10px 30px;
        border-radius: 10px;
        font-weight: 700;
    }
    .cox_container input[type="submit"]:hover{
        cursor: pointer;

    }
</style>
<div class="cox_container">
    <form method="post">

        <div class="cox_social">
            <h5>Cox Info</h5>
            <?php
            foreach ($infoResult as $info){  ?>

                <div class="form-control mt-2">
                    <label style="display: inline-block"><?php echo $info->name ?></label>
                    <input name="<?php echo $info->name ?>" type="text" value="<?php echo $info->value ?>" placeholder="<?php echo $info->name ?>">
                </div>
            <?php   }
            ?>
        </div>

        <div class="cox_social">
            <h4>Social Setting</h4>
            <?php
                foreach ($socialResult as $social){  ?>
                  <div class="form-control mt-2">
                      <label style="display: inline-block"><?php echo $social->name ?></label>
                      <input name="<?php echo $social->name ?>" type="url" value="<?php echo $social->value ?>" placeholder="<?php echo $social->name ?>">
                  </div>
             <?php   }
            ?>
        </div>

        <div class="cox_home">
            <h4>Home Template Setting</h4>
            <?php
                foreach ($homeResult as $home){  ?>
                  <div class="form-control mt-2">
                      <?php if($home->name=="home_card_enable" || $home->name=="home_about_enable" || $home->name=="home_testimonial_enable"){ ?>
                          <label style="display: inline-block"><?php echo str_replace("_"," ",$home->name) ?></label>
                            <input name="<?php echo $home->name ?>" type="checkbox" <?php if($home->value=="true") echo "checked" ?> >
                      <?php }else{ ?>
                          <label style="display: inline-block"><?php echo str_replace("_"," ",$home->name)?></label>
                          <?php
                            if($home->name=="home_content"){ ?>
                                <textarea name="<?php echo $home->name ?>" placeholder="<?php echo str_replace("_"," ",$home->name) ?>" rows="3"><?php echo $home->value ?></textarea>
                            <?php }else{ ?>
                                <input name="<?php echo $home->name ?>" type="text" value="<?php echo $home->value ?>" placeholder="<?php echo str_replace("_"," ",$home->name) ?>">
                            <?php }
                          ?>
                     <?php } ?>

                  </div>
             <?php   }
            ?>
        </div>

        <div class="d-flex justify-content-center">
            <input type="submit" value="Update Setting" name="submit">
        </div>
    </form>
</div>
