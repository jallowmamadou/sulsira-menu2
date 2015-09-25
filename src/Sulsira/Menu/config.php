<?php
/**
 * Created by PhpStorm.
 * User: mamadou
 * Date: 1/25/2015
 * Time: 2:57 AM
 */
return [

    'domain' => 'domain',
    'securityLevel' => 'securitylevel', #1 $ 2 = all , 3 & 4 = something, 5 & 6 = something, 7 & 8 = soething
    'userGroup' => 'usergroup',
    'lowestsecuritylevel' => 8,
    'highestsecuritylevel' => 1,
    'login_status' => true,
    'dropdown_menu' => 'menu'
];
# 'securitylevel' =

        #1 $ 2 = all , all but two cannot delete users or any delete (2 can add users)
        #3 & 4 = domain, 3 can edit but not delete both and view users
        #5 & 6 = domain, 5 can view users but not add or delete 6 cannot see users
        #7 & 8 = domain, can only view but each have some pages that they cannot access