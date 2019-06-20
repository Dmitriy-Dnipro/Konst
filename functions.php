<?php
/**
 * konstrack functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package konstrack
 */

if ( ! function_exists( 'konstrack_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function konstrack_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on konstrack, use a find and replace
		 * to change 'konstrack' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'konstrack', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'konstrack' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'konstrack_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'konstrack_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function konstrack_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'konstrack_content_width', 640 );
}
add_action( 'after_setup_theme', 'konstrack_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function konstrack_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'konstrack' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'konstrack' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar(
        array(
            'name' => 'Share',
            'id' => 'sidebar8',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => '',
        ));
}
add_action( 'widgets_init', 'konstrack_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function konstrack_scripts() {

	wp_enqueue_style( 'konstrack-theme-oldstyle', get_template_directory_uri() . '/css/old-style.css'  );
	wp_enqueue_style( 'konstrack-theme-style', get_template_directory_uri() . '/css/style.css'  );
	wp_enqueue_style( 'konstrack-idea-style', get_template_directory_uri() . '/css/idea.css'  );
	wp_enqueue_style( 'konstrack-fontewasome', 'https://use.fontawesome.com/releases/v5.7.0/css/all.css' );

	wp_enqueue_style( 'konstrack-swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/css/swiper.min.css' );
	wp_enqueue_style( 'konstrack-animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css' );


	wp_enqueue_style( 'konstrack-style', get_stylesheet_uri() );


	wp_enqueue_style( 'konstrack-phonemask-styles', get_template_directory_uri() . '/js/components/phones-mask/css/countrySelect.css', array(), '20151215', true ); 
	// wp_enqueue_style( 'konstrack-phonemasks-styles', get_template_directory_uri() . '/js/components/phones-mask/css/intlTelInput.css', array(), '20151215', true );

	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.0.0.min.js', array(), '20151215', true );
	wp_enqueue_script( 'jq-validate', 'https://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js', array(), '20151215', true );

	wp_enqueue_script( 'konstrack-phonemask', get_template_directory_uri() . '/js/components/phones-mask/js/countrySelect.js', array(), '20151215', true ); 
	wp_enqueue_script( 'konstrack-phonemasks', get_template_directory_uri() . '/js/components/phones-mask/js/custom_script.js', array(), '20151215', true ); 
	// wp_enqueue_script( 'konstrack-phonemaskt', 'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/15.0.2/js/intlTelInput.js', array(), '20151215', true ); 

	wp_enqueue_script( 'konstrack-bootstrap-js', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), '20151215', true );
	wp_enqueue_script( 'konstrack-read-more', get_template_directory_uri() . '/js/components/Trim-Text-Lines-jQuery-moreLines/jquery.morelines.min.js', array(), '20151215', true );

	wp_enqueue_script( 'konstrack-swiper', get_template_directory_uri() . '/js/components/swiper/swiper.min.js', array(), '20151215', true );

	wp_enqueue_script( 'konstrack-slick', get_template_directory_uri() . '/js/components/slick.min.js', array(), '20151215', true );
	
	wp_enqueue_script( 'konstrack-scripts-min', get_template_directory_uri() . '/js/components/scripts.min.js', array(), '20151215', true );
	
	$lang = pll_current_language();

	if($lang == 'ru'){
		$translation_array = array(
			'read_more_show' => __('Читать больше', 'read_more_button' ),
			'read_more_hide' => __('Скрыть', 'read_more_button' )
		);
	}else if($lang == 'en'){
		$translation_array = array(
			'read_more_show' => __('Read more', 'read_more_button' ),
			'read_more_hide' => __('Hide', 'read_more_button' )
		);	
	}else if($lang == 'uk'){
		$translation_array = array(
			'read_more_show' => __('Читати більше', 'read_more_button' ),
			'read_more_hide' => __('Приховати', 'read_more_button' )
		);	
	}

	wp_localize_script('konstrack-scripts-min', 'langvars', $translation_array);


	wp_enqueue_script( 'konstrack-js', get_template_directory_uri() . '/js/custom.js', array(), '20151215', true );

	wp_enqueue_script( 'konstrack-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'konstrack-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'konstrack_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

if( function_exists('acf_add_options_page') ) {
	
	$option_page = acf_add_options_page(array(
		'page_title' 	=> 'Основные настройки сайта',
		'menu_title' 	=> 'Настройки сайта',
		'menu_slug' 	=> 'theme-general-settings',
		'capability' 	=> 'edit_posts',
		'redirect' 	=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Настройки шапки сайта',
		'menu_title' 	=> 'Header',
		'parent_slug' 	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Настройки подвала сайта',
		'menu_title' 	=> 'Footer',
		'parent_slug' 	=> 'theme-general-settings',
	)); 

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Калькулятор Подбора оборудования',
		'menu_title' 	=> 'Calculator',
		'parent_slug' 	=> 'theme-general-settings',
	)); 
}



/* Custom search form*/
add_filter( 'get_search_form', 'my_search_form' );
function my_search_form( $form ) {

	$form = '
	<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
	<input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="Поиск" />
	</form>';

	return $form;
}

/* Menu areas */
register_nav_menus(array(
	'main_top'    => 'Главное верхнее меню',    //Название месторасположения меню в шаблоне
	'categories_top'    => 'Меню категорий в верхнем меню', 
	'footer_first_menu' => 'Меню в первом блоке в футере',    
	'footer_second_menu' => 'Меню во втором блоке в футере'
));




/* Reviews */
function konstrack_create_post_type() {
	$labels = array(
		'name' => __( 'Reviews', 'konstrack' ),
		'singular_name' => __( 'Reviews', 'konstrack' ),
		'add_new' => __( 'New Review', 'konstrack' ),
		'add_new_item' => __( 'Add New Review', 'konstrack' ),
		'edit_item' => __( 'Edit Review', 'konstrack' ),
		'new_item' => __( 'New Review', 'konstrack' ),
		'view_item' => __( 'View Review', 'konstrack' ),
		'search_items' => __( 'Search Reviews', 'konstrack' ),
		'not_found' =>  __( 'No Reviews Found', 'konstrack' ),
		'not_found_in_trash' => __( 'No Reviews found in Trash', 'konstrack' ),
	);
	$args = array(
		'labels' => $labels,
		'has_archive' => true,
		'public' => true,
		'hierarchical' => false,
		'menu_position' => 5,
		'taxonomies' => array('articles_category'),
		'rewrite' => array( 'slug' => 'otziv' ),
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'custom-fields',
			'thumbnail'
		),
	);
	register_post_type( 'articles', $args );
}
add_action( 'init', 'konstrack_create_post_type' );

function konstrack_register_taxonomy() {
	register_taxonomy( 'articles_category', 'articles',
		array(
			'labels' => array(
				'name'              => __('Review Categories', 'konstrack'),
				'singular_name'     => __('Review Category', 'konstrack'),
				'search_items'      => __('Search Review Categories', 'konstrack'),
				'all_items'         => __('All Review Categories', 'konstrack'),
				'edit_item'         => __('Edit Review Categories', 'konstrack'),
				'update_item'       => __('Update Review Category', 'konstrack'),
				'add_new_item'      => __('Add New Review Category', 'konstrack'),
				'new_item_name'     => __('New Review Category Name', 'konstrack'),
				'menu_name'         => __('Review Category', 'konstrack'),
			),
			'hierarchical' => true,
			'sort' => true,
			'args' => array( 'orderby' => 'term_order' ),
			'show_admin_column' => true
		)
	);
}
add_action( 'init', 'konstrack_register_taxonomy' );

/* Add scripts for jQuery Tabs in WP */
function load_custom_scripts() {
    wp_enqueue_script('jquery-ui-core');// enqueue jQuery UI Core
    wp_enqueue_script('jquery-ui-tabs');// enqueue jQuery UI Tabs
}

add_action( 'wp_enqueue_scripts', 'load_custom_scripts' );


/**
 * Выводим 9 записей на странице поиска
 *
 * @param type $query
 * @return type
 */
 function search_results_page_func($query) {
	// запрос на странице поиска
	if (!is_admin() && $query->is_main_query() && $query->is_search()) {
	$query->set('posts_per_page', 9);
	}
   return $query;
	}
   add_action('pre_get_posts', 'search_results_page_func');

















/* Ajax dependent select in calculator */
add_action("wp_ajax_calculator_pylegaz_action", "konstrak_ajax_calculator_pylegaz_action");// для фронтенда 
add_action("wp_ajax_nopriv_calculator_pylegaz_action", "konstrak_ajax_calculator_pylegaz_action");// для админки
function konstrak_ajax_calculator_pylegaz_action(){
	$lang = pll_current_language();
	$filter_table = 	(!empty($_POST['filters_table'])) 		? $_POST['filters_table'] : '';
	$process_table = 	(!empty($_POST['process_table'])) 		? $_POST['process_table'] : '';
	$selected_process = (!empty($_POST['selected_process'])) 	? $_POST['selected_process'] : ''; 

	if (($process_table !== '') && ($selected_process !== '')) {

		$filters_design_arary = (explode(";",$process_table[($selected_process-1)]['filter_design']));

		if (count($filters_design_arary) > 1) {
			if($lang == 'ru'){
				$result = '<div class="construct"><label>Предпочтительный конструктив фильтра:</label>';
			}else if($lang == 'uk'){
				$result = '<div class="construct"><label>Переважний конструктив фільтра:</label>';
			}
			$result .= '<select name="filters-design-select" id="filters-design-select" class="filters-design-select"> <br />';
		} elseif ( count($filters_design_arary) === 1 ) {
			if($lang == 'ru'){
				$result = '<label>Предпочтительный конструктив фильтра:</label>';
			}else if($lang == 'uk'){
				$result = '<label>Переважний конструктив фільтра:</label>';
			}
			$result .= '<select name="filters-design" id="filters-design-select" class="filters-design-select disabled" disabled="disabled"> ';
		}

		if($lang == 'ru'){
			for ($i=0; $i < count($filters_design_arary); $i++) { 
				for ($j=0; $j < count($filter_table); $j++) { 
					if( trim($filters_design_arary[$i]) == trim($filter_table[$j]['title']) )
						$result .= '<option value="'. $filter_table[$j]['title'] . '">' . $filter_table[$j]['description'] . '</option>';
				}
			}

		}else if($lang == 'uk'){
			for ($i=0; $i < count($filters_design_arary); $i++) { 
				for ($j=0; $j < count($filter_table); $j++) { 
					if( trim($filters_design_arary[$i]) == trim($filter_table[$j]['title']) )
						$result .= '<option value="'. $filter_table[$j]['title'] . '">' . $filter_table[$j]['description_uk'] . '</option>';
				}
			}
		}

	
	} else {
		
	}

	$result .= '</select></div>';
	echo $result;
	wp_die();
}
/* Ajax dependent select in calculator EOF */

/* Ajax filter events */
add_action("wp_ajax_calculator_pylegaz_filter_action", "konstrak_ajax_calculator_pylegaz_filter_action");// для фронтенда 
add_action("wp_ajax_nopriv_calculator_pylegaz_filter_action", "konstrak_ajax_calculator_pylegaz_filter_action");// для админки
function konstrak_ajax_calculator_pylegaz_filter_action(){ 
	$lang = pll_current_language();
	$str = (!empty($_POST['form_data'])) ? $_POST['form_data'] : '';	
	$const = (!empty($_POST['const'])) ? $_POST['const'] : '60';											//файла с данными о всех фильтр.
														//все данные с формы (3 элем.)
	$filters_design_select = (!empty($_POST['filters_design_select'])) ? $_POST['filters_design_select'] : '';				//+ Предпочтительный конструктив
	$process_table = (!empty($_POST['process_table'])) ? $_POST['process_table'] : '';										//таблица процессов 
	$filter_material_type_list = (!empty($_POST['filter_material_type_list'])) ? $_POST['filter_material_type_list'] : '';	//таблица сущ. материалов
	$all_filters = (!empty($_POST['all_filters'])) ? $_POST['all_filters'] : '';	
	$temperature_table = (!empty($_POST['temperature_table'])) ? $_POST['temperature_table'] : '';	 //табл. с температурами со стр. настроек
	$filter_design = (!empty($_POST['filter_design'])) ? $_POST['filter_design'] : '';	 //табл. с температурами со стр. настроек

	if ($str !== '') {
		$params = explode("&", $str);
		for ($i=0; $i < count($params); $i++) { 
			$array = explode("=", $params[$i]);

			$res[] = $array;

			if ($array[0] === 'process') {
				$process = $array[1];
			}
			if ($array[0] === 'volume') {
				$volume = $array[1];
			}
			if ($array[0] === 'temperature') {
				$temperature = $array[1];
			}
			if ($array[0] === 'filters-design-select') {
				$filters_design_select = $array[1];
			}

			$array = [];
		}
	}

	$current_process_rate = $process_table[($process-1)]['rate'];
	
	$filter_place_area = floatval($volume)/floatval($const)/floatval($current_process_rate); //площадь фильтровальной поверхности

	
	$matches = 0;
	foreach ($all_filters[$filters_design_select]['file_content'] as $key => $value) {
		if (($value['filter_place_area'] > $filter_place_area)) {
			if (($matches === 2)) break;

			$id = array_search($filters_design_select, array_column($filter_design, 'title'));
			if($lang == 'ru'){
				$matches_array[] = [
					'filter_title' => (!empty($filter_design[$id]['result_title'])) ? trim($filter_design[$id]['result_title']) : trim($filter_design[$id]['title']),
					'filter_description' => trim($filter_design[$id]['description']),
					'filter_link' => trim($filter_design[$id]['link']['url']),
					'size' => trim($value['size'])
				];
			}else if($lang == 'uk'){
				$matches_array[] = [
					'filter_title' => (!empty($filter_design[$id]['result_title_uk'])) ? trim($filter_design[$id]['result_title_uk']) : trim($filter_design[$id]['title']),
					'filter_description' => trim($filter_design[$id]['description_uk']),
					'filter_link' => trim($filter_design[$id]['link_uk']['url']),
					'size' => trim($value['size'])
				];	
			}

			$matches++;
		}
	}
	$result['filters'] = $matches_array;

	foreach ($temperature_table as $value) {
		if (($temperature >= $value['temperatura']['first_value']) && ($temperature <= $value['temperatura']['last_value'])) {

			if($lang == 'ru'){
				$result = array_merge($result, ['material' => $value['title']]);
			}else if($lang == 'uk'){
				$result = array_merge($result, ['material' => $value['title_ua']]);
			}

			break;
		}
	}

	if (array_key_exists('material', $result) === false)	 {
	 	$result = array_merge($result, ['material' => 'уточните у менеджера']);
	 }
	
	if($lang == 'ru'){
		$res_blocks = '
		<div class="filter row align-items-center">
			<div class="col-xl-4 col-lg-4 col-md-4 col-12">

				<div class="title-bl services-block__tit-padd">
					<div class="title-bl__title">Вам подходит</div>
					<div class="title-bl__description"></div>
				</div>

			</div>
			<div class=" calculator-body col-xl-8 col-lg-8 col-md-8 col-12">

		<div class="calculator_results-list row">';
	}else if($lang == 'uk'){

		$res_blocks = '
		<div class="filter row align-items-center">
			<div class="col-xl-4 col-lg-4 col-md-4 col-12">

				<div class="title-bl services-block__tit-padd">
					<div class="title-bl__title">Вам підходить</div>
					<div class="title-bl__description"></div>
				</div>

			</div>
			<div class=" calculator-body col-xl-8 col-lg-8 col-md-8 col-12">

		<div class="calculator_results-list row">';
	}

	$i = 0;
	foreach ($result['filters'] as $key => $item) {
		$res_blocks .= '<div class="calculator_results-item col-lg-6 col-xs-12 col-12"><a class="inner" href="' . $item['filter_link'] . '">';

		if($lang == 'ru'){
		$res_blocks .= '<div class="title">' . $item['filter_title'] . '</div>' 
						. '<div class="row"><div class="label col-lg-6 col-xs-6 col-6">' . __('Размер', 'filter_results') . '</div><div class="value col-lg-6 col-xs-6 col-6">' . $item['size'] . '</div></div>' 
						. '<div class="row"><div class="label col-lg-6 col-xs-6 col-6">' . __('материал', 'filter_results') . '</div><div class="value col-lg-6 col-xs-6 col-6">' . $result['material']. '</div></div>';
		}else if($lang == 'uk'){
			$res_blocks .= '<div class="title">' . $item['filter_title'] . '</div>' 
						. '<div class="row"><div class="label col-lg-6 col-xs-6 col-6">' . __('Розмiр', 'filter_results') . '</div><div class="value col-lg-6 col-xs-6 col-6">' . $item['size'] . '</div></div>' 
						. '<div class="row"><div class="label col-lg-6 col-xs-6 col-6">' . __('матеріал', 'filter_results') . '</div><div class="value col-lg-6 col-xs-6 col-6">' . $result['material']. '</div></div>';
		}

		$res_blocks .= '</a></div>';
		$i ++;
	}
	unset($i, $key, $item);

	$res_blocks .= '</div></div>
    </div>';

	echo ( $res_blocks );
	wp_die();
}
/* Ajax filter events EOF */

















add_filter( 'the_content_more_link', '__return_empty_string' ); 




