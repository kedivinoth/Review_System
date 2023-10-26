<?php
    // Database connection
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'bikeservice';

    // Table names
    $config['db_table_prefix'] = 'phpauth_';
    $config['users_table'] = $config['db_table_prefix'] . 'users';
    $config['user_meta_table'] = $config['db_table_prefix'] . 'user_meta';
    $config['groups_table'] = $config['db_table_prefix'] . 'groups';
    $config['group_members_table'] = $config['db_table_prefix'] . 'group_members';
    $config['group_perms_table'] = $config['db_table_prefix'] . 'group_perms';
    $config['perms_table'] = $config['db_table_prefix'] . 'perms';

    // Error messages
    $config['messages'] = array(
        'login' => array(
            'success' => 'Successfully logged in.',
            'error' => 'Incorrect username or password.',
        ),
        'logout' => array(
            'success' => 'Successfully logged out.',
        ),
        'register' => array(
            'success' => 'Successfully registered.',
            'error' => 'An error occurred during registration. Please try again.',
        ),
    );

    // Error message template
    $config['message_template'] = '<div class="alert alert-danger">{message}</div>';
?>