<?php

/**
 * Plugin Name:       Serp Cars CPT
 * Plugin URI:        https://github.com/Mr-spShuvo/serp-cars
 * Description:       Enables custom post types and taxonomies. 
 * Version:           1.0.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Md. Shahriar Parvez
 * Author URI:        https://github.com/Mr_spShuvo
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       scars-cars-cpt
 */

function scars_register_cpts()
{

  /**
   * Post Type: Cars.
   */

  $labels = [
    "name" => __("Cars", "serp-cars"),
    "singular_name" => __("Car", "serp-cars"),
    "menu_name" => __("Serp Cars", "serp-cars"),
    "all_items" => __("All Cars", "serp-cars"),
    "add_new" => __("Add new", "serp-cars"),
    "add_new_item" => __("Add new Car", "serp-cars"),
    "edit_item" => __("Edit Car", "serp-cars"),
    "new_item" => __("New Car", "serp-cars"),
    "view_item" => __("View Car", "serp-cars"),
    "view_items" => __("View Cars", "serp-cars"),
    "search_items" => __("Search Cars", "serp-cars"),
    "not_found" => __("No Cars found", "serp-cars"),
    "not_found_in_trash" => __("No Cars found in trash", "serp-cars"),
    "parent" => __("Parent Car:", "serp-cars"),
    "featured_image" => __("Featured image for this Car", "serp-cars"),
    "set_featured_image" => __("Set featured image for this Car", "serp-cars"),
    "remove_featured_image" => __("Remove featured image for this Car", "serp-cars"),
    "use_featured_image" => __("Use as featured image for this Car", "serp-cars"),
    "archives" => __("Car archives", "serp-cars"),
    "insert_into_item" => __("Insert into Car", "serp-cars"),
    "uploaded_to_this_item" => __("Upload to this Car", "serp-cars"),
    "filter_items_list" => __("Filter Cars list", "serp-cars"),
    "items_list_navigation" => __("Cars list navigation", "serp-cars"),
    "items_list" => __("Cars list", "serp-cars"),
    "attributes" => __("Cars attributes", "serp-cars"),
    "name_admin_bar" => __("Car", "serp-cars"),
    "item_published" => __("Car published", "serp-cars"),
    "item_published_privately" => __("Car published privately.", "serp-cars"),
    "item_reverted_to_draft" => __("Car reverted to draft.", "serp-cars"),
    "item_scheduled" => __("Car scheduled", "serp-cars"),
    "item_updated" => __("Car updated.", "serp-cars"),
    "parent_item_colon" => __("Parent Car:", "serp-cars"),
  ];

  $args = [
    "label" => __("Cars", "serp-cars"),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => true,
    "rewrite" => ["slug" => "cars", "with_front" => true],
    "query_var" => true,
    "menu_position" => 6,
    "menu_icon" => "dashicons-car",
    "supports" => ["title", "thumbnail", "custom-fields"],
    "taxonomies" => ["brands"],
    "show_in_graphql" => false,
  ];

  register_post_type("cars", $args);
}
add_action('init', 'scars_register_cpts');


function scars_register_taxes()
{

  /**
   * Taxonomy: Brands.
   */

  $labels = [
    "name" => __("Brands", "serp-cars"),
    "singular_name" => __("Brand", "serp-cars"),
    "menu_name" => __("Brands", "serp-cars"),
    "all_items" => __("All Brands", "serp-cars"),
    "edit_item" => __("Edit Brand", "serp-cars"),
    "view_item" => __("View Brand", "serp-cars"),
    "update_item" => __("Update Brand name", "serp-cars"),
    "add_new_item" => __("Add new Brand", "serp-cars"),
    "new_item_name" => __("New Brand name", "serp-cars"),
    "parent_item" => __("Parent Brand", "serp-cars"),
    "parent_item_colon" => __("Parent Brand:", "serp-cars"),
    "search_items" => __("Search Brands", "serp-cars"),
    "popular_items" => __("Popular Brands", "serp-cars"),
    "separate_items_with_commas" => __("Separate Brands with commas", "serp-cars"),
    "add_or_remove_items" => __("Add or remove Brands", "serp-cars"),
    "choose_from_most_used" => __("Choose from the most used Brands", "serp-cars"),
    "not_found" => __("No Brands found", "serp-cars"),
    "no_terms" => __("No Brands", "serp-cars"),
    "items_list_navigation" => __("Brands list navigation", "serp-cars"),
    "items_list" => __("Brands list", "serp-cars"),
    "back_to_items" => __("Back to Brands", "serp-cars"),
  ];


  $args = [
    "label" => __("Brands", "serp-cars"),
    "labels" => $labels,
    "public" => true,
    "publicly_queryable" => true,
    "hierarchical" => false,
    "show_ui" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "query_var" => true,
    "rewrite" => ['slug' => 'brands', 'with_front' => true,],
    "show_admin_column" => false,
    "show_in_rest" => true,
    "rest_base" => "brands",
    "rest_controller_class" => "WP_REST_Terms_Controller",
    "show_in_quick_edit" => false,
    "show_in_graphql" => false,
  ];

  register_taxonomy("brands", ["cars"], $args);
}
add_action('init', 'scars_register_taxes');
