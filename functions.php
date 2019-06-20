<?php
function wp_corenavi() {
  global $wp_query;
  $pages = '';
  $max = $wp_query->max_num_pages;
  if (!$current = get_query_var('paged')) $current = 1;
  $a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
  $a['total'] = $max;
  $a['current'] = $current;

  $total = 0; //1 - выводить текст "Страница N из N", 0 - не выводить
  $a['mid_size'] = 2; //сколько ссылок показывать слева и справа от текущей
  $a['end_size'] = 1; //сколько ссылок показывать в начале и в конце
  $a['prev_text'] = '<<'; //текст ссылки "Предыдущая страница"
  $a['next_text'] = '>>'; //текст ссылки "Следующая страница"

  if ($max > 1) echo '<div class="pagination">';
  if ($total == 1 && $max > 1) $pages = '<span class="pages">Страница ' . $current . ' из ' . $max . '</span>'."\r\n";
  echo $pages . paginate_links($a);
  if ($max > 1) echo '</div>';
}

//удаляем лишние поля в комментариях для заполнения
function remove_comment_fields($fields) { 
	unset($fields['url']); 
	unset($fields['email']); 
	return $fields; 
} 
add_filter('comment_form_default_fields', 'remove_comment_fields');

//порядок полей в комментариях
function sort_comment_fields( $fields ){
    $new_fields = array();
    $myorder = array('author','comment'); // порядок полей

    foreach( $myorder as $key ){
        $new_fields[ $key ] = $fields[ $key ];
        unset( $fields[ $key ] );
    }

    if( $fields )
        foreach( $fields as $key => $val )
            $new_fields[ $key ] = $val;
    return $new_fields;
}
add_filter('comment_form_fields', 'sort_comment_fields' );


// disable for posts
add_filter('use_block_editor_for_post', '__return_false', 10);

// disable for post types
add_filter('use_block_editor_for_post_type', '__return_false', 10);
	
//замена текста на кнопке отправки комментария start
function wph_change_submit_label($defaults) {
    $defaults['label_submit'] = 'Додати коментар';
    return $defaults;
}
add_filter('comment_form_defaults', 'wph_change_submit_label');

if(function_exists('register_sidebar'))
	register_sidebar(array('name' =>'Sidebar'));


?>