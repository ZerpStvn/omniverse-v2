<?php

class ContentManagement
{
    function __construct()
    {
        add_action("init", array($this, "content_manangement"));
        add_action("init", array($this, "content_taxonomy"));
    }

    function content_manangement()
    {

        if (!post_type_exists('content')) {
            $labels = array(
                'name' => 'Contents',
                'singular_name' => 'Contents',
                'menu_name' => __('Contents'),
                'parent_item_colon' => __('Parent Contents'),
                'all_items' => __('All Contents'),
                'view_item' => __('View Contents'),
                'add_new_item' => __('Add New Contents'),
                'add_new' => __('Add New'),
                'edit_item' => __('Edit Contents'),
                'update_item' => __('Update Contents'),
                'search_items' => __('Search Contents'),
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
                    'thumbnail',
                ),
            );

            register_post_type('content', $args);
        }
    }
    function content_taxonomy()
    {

        $labels = array(
            'name' => _x('Contents Category', 'Contents Category'),
            'singular_name' => _x('Contents Category', 'taxonomy singular name'),
            'search_items' => __('Search Contents Categories'),
            'all_items' => __('All Contents Categories'),
            'parent_item' => __('Parent Subject'),
            'parent_item_colon' => __('Parent Subject:'),
            'edit_item' => __('Edit Subject'),
            'update_item' => __('Update Subject'),
            'add_new_item' => __('Add New Subject'),
            'new_item_name' => __('New Subject Name'),
            'menu_name' => __('Contents Category'),
        );

        // Now register the taxonomy
        register_taxonomy(
            'content_cat',
            array('content'),
            array(
                'hierarchical' => true,
                'labels' => $labels,
                'show_ui' => true,
                'show_in_rest' => true,
                'show_admin_column' => true,
                'query_var' => true,
                'rewrite' => array('slug' => 'content_cat'),
            )
        );
    }
}
new ContentManagement;