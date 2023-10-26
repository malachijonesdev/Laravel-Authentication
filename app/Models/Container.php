<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Container extends Model
{
    use HasFactory;

    protected $fillable = [
        'container_name',
        'container_config',
        'container_id',
        'container_gtm_id',
        'container_location',
        'container_use_custom_subdomain',
        'container_domain',
        'container_subdomain',
        'container_tagging_server_url',
        'container_plan',
        'container_billing_period',
        'container_next_billing_cycle',
        'container_plan_autoupgrade',
        'container_status'
    ];
}
