<?php

class Faqs
{
    function __construct()
    {
        add_action("init", array($this, "faqsmanagement"));
        add_action("init", array($this, "faqs_taximony"));
    }

    function faqsmanagement()
    {

        if (!post_type_exists('faqs')) {
            $labels = array(
                'name' => 'FAQs',
                'singular_name' => 'FAQs',
                'menu_name' => __('FAQs'),
                'parent_item_colon' => __('Parent FAQs'),
                'all_items' => __('All FAQs'),
                'view_item' => __('View FAQs'),
                'add_new_item' => __('Add New FAQs'),
                'add_new' => __('Add New'),
                'edit_item' => __('Edit FAQs'),
                'update_item' => __('Update FAQs'),
                'search_items' => __('Search FAQs'),
                'not_found' => __('Not Found'),
                'not_found_in_trash' => __('Not found in Trash'),
            );

            $args = array(
                'labels' => $labels,
                'public' => TRUE,
                'has_archive' => TRUE,
                'publicly_queryable' => TRUE,
                'query_var' => TRUE,
                'rewrite' => TRUE,
                'capability' => 'post',
                'hierarchical' => FALSE,
                'supports' => array(
                    'title',
                    'editor',
                ),
            );

            register_post_type('faqs', $args);
        }
    }
    function faqs_taximony()
    {

        $labels = array(
            'name' => _x('FAQs Category', 'FAQs Category'),
            'singular_name' => _x('FAQs Category', 'taxonomy singular name'),
            'search_items' => __('Search FAQs Categories'),
            'all_items' => __('All FAQs Categories'),
            'parent_item' => __('Parent Subject'),
            'parent_item_colon' => __('Parent Subject:'),
            'edit_item' => __('Edit Subject'),
            'update_item' => __('Update Subject'),
            'add_new_item' => __('Add New Subject'),
            'new_item_name' => __('New Subject Name'),
            'menu_name' => __('FAQs Category'),
        );

        // Now register the taxonomy
        register_taxonomy(
            'fqs_cat',
            array('faqs'),
            array(
                'hierarchical' => true,
                'labels' => $labels,
                'show_ui' => true,
                'show_in_rest' => true,
                'show_admin_column' => true,
                'query_var' => true,
                'rewrite' => array('slug' => 'fqs_cat'),
            )
        );
    }
}
new Faqs;