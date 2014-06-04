<?php

/**
 * @file
 * template.php
 */

function webcrafttheme_form_alter(&$form, &$form_state, $form_id) {

  if ($form_id == "user_feedback_node_form") {
    //add wrapper around title
    $form["title"]["#title"] = "In one word";
    $form["field_rating"]["und"]["#required"] = false;
 	  $form["field_rating"]["und"]["#prefix"] = "<div class='abc col-sm-12'>";
 	  $form["field_rating"]["und"]["#suffix"] = "</div>";
     //add wrapper around ratings radio buttons
  }
}

