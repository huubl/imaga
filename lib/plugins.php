<?
/**
 * Theme Plugins
 */

add_action( 'after_setup_theme', function() {

    $plugins = array(
      array(
        'name'               => 'WordPress Version Info',
        'slug'               => 'version-info',
         'required'           => true,
         'force_activation'   => true,
         'force_deactivation' => true,
      ),
      // array(
      //   'name'               => 'Advanced Custom Fields',
      //   'slug'               => 'advanced-custom-fields',
      //   'required'           => true,
      //   'force_activation'   => true,
      //   'force_deactivation' => true,
      // ),
      // array(
      // 'name'               => 'Advanced Custom Fields: Post2Post Add-on',
      // 'slug'               => 'post-2-post-for-acf',
      // 'required'           => true,
      // 'force_activation'   => true,
      // 'force_deactivation' => true,
      // ),
      // array(
      //   'name'               => 'Yoast SEO',
      //   'slug'               => 'wordpress-seo',
      //   'required'           => false,
      //   'force_activation'   => false,
      //   'force_deactivation' => false,
      // ),
      // array(
      //   'name'               => 'Post Types Order',
      //   'slug'               => 'post-types-order',
      // ),
      // array(
      //   'name'               => 'Duplicate Post',
      //   'slug'               => 'duplicate-post',
      // ),
      // array(
      //   'name'               => 'Smush Image Compression and Optimization',
      //   'slug'               => 'wp-smushit',
      // ),
      // array(
      //   'name'               => 'Regenerate Thumbnails',
      //   'slug'               => 'regenerate-thumbnails',
      // ),
      // array(
      //   'name'               => 'WP Fastest Cache',
      //   'slug'               => 'wp-fastest-cache',
      // ),
      // array(
      //   'name'               => 'WordPress Backup & Security Plugin – BlogVault',
      //   'slug'               => 'blogvault-real-time-backup',
      // ),
    );

    $config = array(
        'id'           => 'imaga',
        'default_path' => get_template_directory() . '/lib/plugins',
        'menu'         => 'tgmpa-install-plugins',
        'parent_slug'  => 'themes.php',
        'capability'   => 'edit_theme_options',
        'has_notices'  => true,
        'dismissable'  => true,
        'is_automatic' => true,
    );

    tgmpa( $plugins, $config );
});
