<?php
define("OMNI_DIR", get_template_directory());
define("OMNI_URL", get_template_directory_uri());
define("OMNI_INC", OMNI_DIR . '/include');
define('OMNI_ASSETS', OMNI_URL . '/assets');
define('OMNI_CSS', OMNI_ASSETS . '/css');
define('OMNI_JS', OMNI_ASSETS . '/js');
define('OMNI_IMG', OMNI_ASSETS . '/img');

add_action("wp_enqueue_scripts", "add_theme");

function add_theme()
{
    //    Plugins
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');

    // styles
    wp_enqueue_style('common_css', OMNI_CSS . '/common.css');
    wp_enqueue_style('top_css', OMNI_CSS . '/top.css');
    wp_enqueue_style('product_css', OMNI_CSS . '/product.css');
    wp_enqueue_style('contact_css', OMNI_CSS . '/contact.css');
    wp_enqueue_style('about_css', OMNI_CSS . '/about.css');
    wp_enqueue_style('aos_css', OMNI_CSS . '/aos.css');
    wp_enqueue_style('fonts_css', OMNI_CSS . '/fonts.css');
    wp_enqueue_style('root_css', OMNI_CSS . '/root.css');
    wp_enqueue_style('blogs_css', OMNI_CSS . '/blogs.css');
    wp_enqueue_style('message_css', OMNI_CSS . '/message.css');
    wp_enqueue_style('offer_css', OMNI_CSS . '/offer.css');
    wp_enqueue_style('faqs_css', OMNI_CSS . '/faqs.css');


    // scripts
    wp_enqueue_script('aos_js', OMNI_JS . '/aos.js', NULL, 1.0, true);
    wp_enqueue_script('jquery_js', OMNI_JS . '/jquery.js', NULL, 1.0, true);
    wp_enqueue_script('common_js', OMNI_JS . '/common.js', NULL, array('jquery'), 1.0, true);
    wp_enqueue_script('top_js', OMNI_JS . '/top.js', NULL, array('jquery'), 1.0, true);
}

add_action('init', 'add_pages');
function add_pages()
{
    $pages = array(
        array(
            'post_title' => 'Home',
            'post_content' => 'Home page',
            'post_excerpt' => 'Learn about our company and our mission to provide innovative solutions in clean energy. Discover our team and values at Company Name.',
            'post_status' => 'publish',
            'post_author' => 1,
            'post_type' => 'page',
            'post_name' => 'home'
        ),
        array(
            'post_title' => 'Who we are',
            'post_content' => 'Who we are',
            'post_excerpt' => 'Learn all about Metaverse discover our awesome products',
            'post_status' => 'publish',
            'post_author' => 1,
            'post_type' => 'page',
            'post_name' => 'about'
        ),
        array(
            'post_title' => 'What we offer',
            'post_content' => 'What we offer',
            'post_excerpt' => 'Explore our range of services, including renewable energy solutions, energy consulting, and sustainability assessments. Find out how we can help your business.',
            'post_status' => 'publish',
            'post_author' => 1,
            'post_type' => 'page',
            'post_name' => 'offer'
        ),
        array(
            'post_title' => 'Privacy and Policy',
            'post_content' => 'Privacy and Policy',
            'post_excerpt' => '',
            'post_status' => 'publish',
            'post_author' => 1,
            'post_type' => 'page',
            'post_name' => 'privacy_policy'
        ),
        array(
            'post_title' => 'Blog',
            'post_content' => 'Blogs',
            'post_excerpt' => 'Explore our product Electromagnetic energy flux Reactor (EER) Stationary Power Generation (SPG)',
            'post_status' => 'publish',
            'post_author' => 1,
            'post_type' => 'page',
            'post_name' => 'blogs'
        ),
        array(
            'post_title' => 'Contact',
            'post_content' => 'Contact page',
            'post_excerpt' => 'Getting to know us',
            'post_status' => 'publish',
            'post_author' => 1,
            'post_type' => 'page',
            'post_name' => 'contact'
        ),
        array(
            'post_title' => 'Privacy Policy',
            'post_content' => 'Privacy Policy',
            'post_excerpt' => 'Omniverse Privacy Policy',
            'post_status' => 'publish',
            'post_author' => 1,
            'post_type' => 'page',
            'post_name' => 'privacy'
        ),
        array(
            'post_title' => 'Thank You',
            'post_content' => 'Thank You',
            'post_status' => 'publish',
            'post_author' => 1,
            'post_type' => 'page',
            'post_name' => 'thank-you'
        ),
        array(
            'post_title' => 'Faqs',
            'post_content' => 'Faqs',
            'post_status' => 'publish',
            'post_author' => 1,
            'post_type' => 'page',
            'post_name' => 'faqspage'
        ),


    );

    foreach ($pages as $page) {
        $existing_page = get_page_by_path($page['post_name']);
        if (is_null($existing_page)) {
            wp_insert_post($page);
        }
    }

    // Set the home page as the main page
    $homepage = get_page_by_path('home');
    update_option('page_on_front', $homepage->ID);
    update_option('show_on_front', 'page');
}
function custom_excerpt_length($length)
{
    return 220;
}

add_filter('excerpt_length', 'custom_excerpt_length');

// function remove_excerpt_more($more)
// {
//     return '...';
// }
// add_filter('excerpt_more', 'remove_excerpt_more');
add_theme_support('post-thumbnails');


// secnding email
add_action('admin_post_custom_form_submission', 'handle_custom_form_submission');
add_action('admin_post_nopriv_custom_form_submission', 'handle_custom_form_submission');

function handle_custom_form_submission()
{
    if (isset($_POST['custom_form_nonce_field']) && wp_verify_nonce($_POST['custom_form_nonce_field'], 'custom_form_nonce')) {
        $username = sanitize_text_field($_POST['username']);
        $email = sanitize_email($_POST['email']);
        $number = sanitize_text_field($_POST['number']);
        $phonenumber = sanitize_text_field($_POST['phonenumber']);
        $company = sanitize_text_field($_POST['company']);
        $inquiry = sanitize_text_field($_POST['inquiry']);
        $industry = sanitize_text_field($_POST['industry']);
        $message = esc_textarea($_POST['message']);

        $subject = $inquiry;

        $message_body = "Full Name: $username\n";
        $message_body .= "Email: $email\n";
        $message_body .= "Mobile Number: $number\n";
        $message_body .= "Phone Number: $phonenumber\n";
        $message_body .= "Company: $company\n";
        $message_body .= "Inquiry Subject: $inquiry\n";
        $message_body .= "Industry: $industry\n\n";
        $message_body .= "Message:\n$message";

        $headers = array('Content-Type: text/plain; charset=UTF-8');

        $recipient_email = 'stevefelizardo4@gmail.com'; // Replace with your recipient's email address

        $email_sent = wp_mail($recipient_email, $subject, $message_body, $headers);

        if ($email_sent) {
            wp_redirect(get_permalink(get_page_by_path('thank-you')));
            exit;
        } else {
            wp_die('Email not sent. Please try again later.');
        }
    } else {
        wp_die('Nonce verification failed. Please try again.');
    }
}

include_once OMNI_INC . "/custom_post/content.php";
include_once OMNI_INC . "/custom_post/faqs.php";