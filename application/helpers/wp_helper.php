<?php


function is_admin()
{
    $ci = get_instance();

    if (!$ci->session->userdata('email')) {
        redirect('auth');
    } else {
        $role_id = $ci->session->userdata('role_id');
        $menu = $ci->uri->segment(1);
        $queryMenu = $ci->db->get_where('akses', ['menu' => $menu])->row_array();
        $menu_id = $queryMenu['id'];

        $userAccess = $ci->db->get_where('user_akses', [
            'role_id' => $role_id,
            'akses_id' => $menu_id
        ]);
    }

    if ($userAccess->num_rows() < 1) {
        redirect('auth/blocked');
    }
}

function is_logged_in()
{
    $ci = get_instance();

    if (!$ci->session->userdata('email')) {
        redirect('auth');
    }
}
