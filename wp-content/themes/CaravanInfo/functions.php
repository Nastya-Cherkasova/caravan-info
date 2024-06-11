<?php
// Создание Лого и Названия Сайта
if (!function_exists('caravan_setup')) {
  function caravan_setup()
  {
    // Динмаический логотип
    add_theme_support('custom-logo', [
      'height'      => 71,
      'width'       => 101,
      'flex-width'  => true,
      'flex-height' => true,
      'header-text' => '',
      'unlink-homepage-logo' => false,
    ]);
    // Динамический Title-tag
    add_theme_support('title-tag');
    // Миниатюра постов
    add_theme_support('post-thumbnails');
  }
  add_action('after_setup_theme', 'caravan_setup');
}

// Переименовать CSS-класс ссылок в шапке
add_filter('get_custom_logo', 'change_logo_class');

function change_logo_class($html)
{
  $html = str_replace('custom-logo', 'header__logo', $html);

  return $html;
}

// Подключение скриптов и стилей
function scripts_method()
{
  wp_enqueue_style('font', get_template_directory_uri() . '/assets/fonts/OpenSans/stylesheet.css');
  wp_enqueue_style('swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.css');
  wp_enqueue_style('main_style', get_template_directory_uri() . '/assets/css/main.css');


  wp_deregister_script('jquery');
  wp_register_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js');

  wp_enqueue_script('jquery');
  wp_enqueue_script('main_script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), 'null', true);
  wp_enqueue_script('swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js');
  wp_enqueue_script('swiper-config', get_template_directory_uri() . '/assets/js/swiper-config.js', array('swiper'), 'null', true);
  wp_enqueue_script('currencyConverter', get_template_directory_uri() . '/assets/js/currencyConverter.js', array(), 'null', true);
  wp_enqueue_script('weather', get_template_directory_uri() . '/assets/js/weather.js', array(), 'null', true);
  wp_enqueue_script('calendar', get_template_directory_uri() . '/assets/js/calendar.js', array(), 'null', true);
}
add_action('wp_enqueue_scripts', 'scripts_method');

// Создание точек под меню
function caravan_menus()
{
  $locations = array(
    'header' => __('Меню в шапке', 'caranav'),
    'dropdown_header_countries' => __('Страны в шапке', 'caranav'),
    'dropdown_header_theme' => __('Категории в шапке', 'caranav'),
    'top' => __('Страны на баннере', 'caranav'),
    'under_top' => __('Категории под баннером', 'caranav'),
    'widget-themes' => __('Список в виджете', 'caranav'),
    'footer' => __('Меню в подвале', 'caranav'),
  );

  register_nav_menus($locations);
}
add_action('init', 'caravan_menus');

// Добавить класс тегам в постах
add_filter('the_tags', 'add_tag_class');

function add_tag_class($tags)
{
  $tags = str_replace('<a', '<a class="post__theme"', $tags);
  return $tags;
}

// Добавить класс рубрикам в постах
add_filter('the_category', 'add_category_class');

function add_category_class($categories)
{
  $categories = str_replace('<a', '<a class="post__country"', $categories);
  return $categories;
}

// Инициализация Сайдбара
function caravan_widgets_init()
{
  register_sidebar(array(
    'name'          => esc_html__('Сайдбар главного меню', 'caravan'),
    'id'            => "sidebar-main",
    'class'         => '',
    'before_widget' => '<section id="%1$s" class="sidebar-block %2$s">',
    'after_widget'  => "</section>\n",
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => "</h2>\n",
  ));
}
add_action('widgets_init', 'caravan_widgets_init');

// Удаление конструкции [...] на конце the_excerpt();
add_filter('excerpt_more', fn () => '...');

// Добавление функции для кастомного excerpt
function custom_excerpt($text = '', $length = 55)
{
  if ('' === $text) {
    $text = get_the_content('');
    $text = strip_shortcodes($text);
    $text = apply_filters('the_content', $text);
    $text = str_replace(']]>', ']]&gt;', $text);
    $text = wp_trim_words($text, $length, '...');
  }
  return $text;
}

// Шорткод для использования кастомного excerpt в темах
function custom_the_excerpt($length = 55)
{
  echo custom_excerpt('', $length);
}

// Использование шорткода в WordPress
add_shortcode('custom_excerpt', function ($atts) {
  $atts = shortcode_atts(array(
    'length' => 55,
  ), $atts, 'custom_excerpt');

  return custom_excerpt('', $atts['length']);
});

function add_smooth_scroll_script()
{
?>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      if (window.location.hash) {
        var element = document.querySelector(window.location.hash);
        if (element) {
          element.scrollIntoView({
            behavior: 'smooth'
          });
        }
      }
    });
  </script>
<?php
}
add_action('wp_footer', 'add_smooth_scroll_script');

?>