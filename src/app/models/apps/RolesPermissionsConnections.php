<?php

namespace interactivesolutions\honeycombapps\app\models\apps;

use interactivesolutions\honeycombcore\models\HCUuidModel;

class RolesPermissionsConnections extends HCUuidModel
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'hc_apps_acl_roles_permissions_connections';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['role_id', 'permission_id'];

}
