<?

namespace IMAGA\Theme\Taxonomie\Skills;

/*
 * Skills Taxonomy for Employees
 */
function create_taxonomies_skills() {

  $labels = array(
    'name'                       => _x( 'Skills', 'Skills General Name', 'imaga' ),
    'singular_name'              => _x( 'Skill', 'Skill Singular Name', 'imaga' ),
  );

  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => false,
    'public'                     => true,
    'show_ui'                    => false,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => false,
  );

  // Registering the taxonomy
  register_taxonomy( 'skills', array( 'employees' ), $args );
}

add_action( 'init', __NAMESPACE__ . '\\create_taxonomies_skills' );
