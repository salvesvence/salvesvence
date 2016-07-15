<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * Permissions asocciated with the current role.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }
}
