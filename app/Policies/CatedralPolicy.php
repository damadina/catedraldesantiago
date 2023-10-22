<?php

namespace App\Policies;

use App\Models\Catedral;
use App\Models\CatedralReview;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CatedralPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {

    }
    public function valued(User $user, Catedral $elemento) {

        if(CatedralReview::where('user_id', $user->id)->where('catedral_id', $elemento->id)->count()) {

            return false;
        } else {
            return true;
        }
    }

}
