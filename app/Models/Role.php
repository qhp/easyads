<?php

namespace App\Models;

use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
    const ADMINISTRATOR_ROLE_ID = 1;
    const MANAGER_ROLE_ID = 2;
    const CLIENT_ROLE_ID = 3;
}