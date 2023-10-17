<?php

namespace communitys;

include('autoload.php');

\Autoloader::autoload(__NAMESPACE__);



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