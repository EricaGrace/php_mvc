<?php

namespace App\Repository;

use App\Entity\User;

final class UserRepository extends AbstractRepository
{
  protected const TABLE = 'users';

  public function save(User $user): bool
  {
    $stmt = $this->pdo->prepare("INSERT INTO users (`name`, firstName, username, `password`, email, birthDate) VALUES (:name, :firstName, :username, :password, :email, :birthDate)");

    return $stmt->execute([
      'name' => $user->getName(),
      'firstName' => $user->getFirstName(),
      'username' => $user->getUsername(),
      'password' => password_hash($user->getPassword(), PASSWORD_BCRYPT),
      'email' => $user->getEmail(),
      'birthDate' => $user->getBirthDate()->format('Y-m-d')
    ]);
  }

  public function saveAll(array $usersArray):bool
  {
    $values = "";
    for($i=0; $i < sizeof($usersArray)/6; $i++){
      $values = $values."(?, ?, ?, ?, ?, ?),";
    }
    
    $values = rtrim($values, ",");

    $stmt = $this->pdo->prepare("INSERT INTO users (`name`, firstName, username, `password`, email, birthDate) VALUES ".$values);

    return $stmt->execute($usersArray);

  }


}
