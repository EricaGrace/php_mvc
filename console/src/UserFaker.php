<?php 

namespace console;

use Faker;
use App\Entity\User;

class UserFaker{
    
    public function __construct()
    {
        $this->faker = Faker\Factory::create('fr_FR');
    }
    
    public function createUsers()
    {

        $users=array();

      for($i=0 ; $i<15 ; $i++){
           $users = new user();
           $users[$i]->setName($this->faker->name);
           $users[$i]->setFirstName($this->faker->firstname);
           $users[$i]->setUserName($this->faker->username);
           $users[$i]->setPassword($this->faker->password);  
           $users[$i]->setEmail($this->faker->email); 
           $users[$i]->setBirthdate($this->faker->birthdate); 
      }
      
      return $users;

    }



}