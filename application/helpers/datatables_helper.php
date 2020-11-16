<?php
/*
 * function that generate the action buttons edit, delete
 * This is just showing the idea you can use it in different view or whatever fits your needs
 */
function get_buttonsInfo($her_two_id)
{
    $ci = & get_instance();
    $html = '<span class="actions">';
    $html .= '<a href="' . base_url(). 'data_record/edit/' . $her_two_id . '"><img src="' . base_url() . 'resource/media/images/edit.png"/></a>';
//    $html .= '<a href="' . base_url() . 'data_record/delete/' . $her_two_id . '"><img src="' . base_url() . 'resource/media/images/delete.jpg"/></a>';
    $html .= '</span>';
    return $html;
}