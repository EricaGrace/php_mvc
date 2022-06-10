<?php 
namespace Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use App\Repository\UserRepository;
use Console\UserFaker;
use Symfony\Component\Console\Input\Input;

Class CommandUser extends Command {  

public function configure () {
    $this->setName('add-users')
         ->setDescription('Generer des utilisateurs en base de données')
         ->setHelp('This command allows you to generate new users in the data base ')
         ->addArgument('i', InputArgument::REQUIRED, 'Create users'); 
}
protected function execute(InputInterface $input, OutputInterface $output)
{
    $i = $input->getArgument('i');
    if($i>=15){

        $output->writeln('Error, data not avalaible ');
        return Command::FAILURE;
    }
    else{
        $output->writeln('Data created: '.$i);
        return Command::SUCCESS;
    }
    }
}

