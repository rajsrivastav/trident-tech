<?php

//   Template Name: Contact
global $wpdb;
    get_header();
?>
    <section class="py-5">
        <div class="container">
            <div class="contact-form bg-light rounded-3">
                <div class="form-head px-5 py-5">
                    <div class="heading">
                        <h2 style="font-size: 96px;">Please fill out <br> the form below.</h2>
                        <p>The sooner you start, the sooner you’ll have it ready.</p>
                    </div>
                </div>
                <div class="form-body px-5 d-flex flex-column gap-3 pb-5">
                    <?php echo do_shortcode('[contact-form-7 id="9c685e8" title="Contact form 1"]') ?>
                </div>
            </div>
        </div>
    </section>
<?php
    get_footer();
?>

<?php 
  $name = sanitize_text_field(esc_html($_POST['your-name']));
  print_r($name);
  die();
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = sanitize_text_field(esc_html($_POST['your-name']));
    $email = sanitize_email($_POST['email']);
    $company_des = sanitize_text_field($_POST['textarea']);
    
    if (!empty($name) && !empty($email) && !empty($company_des)) {
        // Insert data securely using $wpdb->insert()
        $table_name ="contact_data";

        $inserted = $wpdb->insert(
            $table_name,
            [
                'name' => $name,
                'email' => $email,
                'company_des' => $company_des
            ],
            ['%s', '%s', '%s']
        );
        
        // Check if insertion was successful
        if ($inserted) {
            echo "<p style='color:green;'>Form submitted successfully!</p>";
        } else {
            echo "<p style='color:red;'>Error submitting form. Please try again.</p>";
        }
    }
}
?>