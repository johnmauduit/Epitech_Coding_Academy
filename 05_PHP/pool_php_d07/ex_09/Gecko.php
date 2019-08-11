<?php


class Skill
{

}

class Gecko
{

    public $friends;
    public $skills;


        public function __construct(?array $newFriends, Skill $newSkills)
        {
            $this->friends = $newFriends;
            $this->skills = $newSkills;
           
                
        }


}

?>