<?php
//function face_menu_tree($variables) {
//  return '<ul class="dropdown">' . $variables['tree'] . '</ul>';
//}

//function face_menu_link(array $variables) {
//  $element = $variables['element'];
//  $sub_menu = '';
//  if ($element['#below']) {
    //$element['#below'][key($element['#below'])]['#attributes']['class'][] = 'subitem';
//
//
    //$sub_menu = drupal_render($element['#below']);
  //}
//  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
//  return '<button' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</button>";
//}



function face_preprocess_html(&$variables) {
  drupal_add_css('//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css', array('type' => 'external'));
  drupal_add_css('sites/all/themes/face/css/jquery.fullPage.css', array('type' => 'external'));
}

function face_preprocess_page(&$variables) {
  if (!empty($variables['node']) && !empty($variables['node']->type)) {
    $variables['theme_hook_suggestions'][] = 'page__node__' . $variables['node']->type;
  }
}

