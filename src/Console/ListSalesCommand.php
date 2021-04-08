<?php

namespace Deliverea\CoffeeMachine\Console;

use Deliverea\CoffeeMachine\Entity\Register;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Exception;

class ListSalesCommand extends Command
{
    protected static $defaultName = 'app:sold-drinks';
    
    protected function configure()
    {
    }
    
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        
        try {     
            $totalTea       = Register::getSoldAmount('tea');   
            $totalChocolate = Register::getSoldAmount('coffee');   
            $totalCoffee    = Register::getSoldAmount('chocolate');   

            $output->writeln('|Drink    |Money|'           );            
            $output->writeln('|---------|-----|'           );            
            $output->writeln('|Tea      |'.$totalTea       );            
            $output->writeln('|Coffee   |'.$totalChocolate );            
            $output->writeln('|Chocolate|'.$totalCoffee    );                  
        } catch (Exception $ex) {
            $output->writeln($ex->getMessage());
            return;
        } 
        
    }
}
