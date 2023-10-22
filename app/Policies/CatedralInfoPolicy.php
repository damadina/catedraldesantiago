<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\CatedralInfo;
use App\Models\InfosReview;

class CatedralInfoPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function valuedInfo(User $user, CatedralInfo $info) {

        if(InfosReview::where('user_id', $user->id)->where('infos_id', $info->id)->count()) {

            return false;
        } else {

            return true;
        }
    }

}
