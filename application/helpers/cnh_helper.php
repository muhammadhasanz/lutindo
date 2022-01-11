<?php

function is_logged_in()
{
    $cnh = get_instance();
    if (!$cnh->session->userdata('nama')) {
        redirect('auth');
    }
    // else {
    // }
}
