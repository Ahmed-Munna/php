<?php

namespace communitys;

include('autoloader.php');


use communitys\Community;
use communitys\profile\Profile;

class User
{
    public function TheCommunityUser()
    {

        echo Community::TheCommunity();
        echo Profile::TheUserProfile();
    }
}

(new User)->TheCommunityUser();