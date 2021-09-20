<?php

function is_login()
{
    $CI = get_instance();
    if (!$CI->session->userdata('login') == FALSE) {
        redirect('auth');
    }
}

function is_admin()
{
    $CI = get_instance();
    if ($CI->session->userdata('role_id') != 1) {
        redirect('auth');
    }
}
