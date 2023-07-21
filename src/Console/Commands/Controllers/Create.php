<?php

namespace App\Console\Commands\Controllers;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Create extends Command
{
    protected static $defaultName = 'controller:create';

    protected function configure()
    {
        $this
            ->setDescription('Create a new controller')
            ->setHelp('Aide détaillée pour ma commande')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // Logique de traitement de votre commande
        $output->writeln('Exécutée avec succès!');
        return Command::SUCCESS;
    }
}
