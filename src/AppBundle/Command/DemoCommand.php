<?php

namespace AppBundle\Command;

use AppBundle\Entity\Dad;
use AppBundle\Entity\Kid;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class DemoCommand extends ContainerAwareCommand
{
    protected function configure()
    {

        $this
             ->setName('go') // php bin/console go
            ->setDescription('On créée les entités.')
        ;

    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $dad = new Dad();

        $kid1 = new Kid();
        $kid1->setDescription('Celui qui pue');
        $kid2 = new Kid();
        $kid2->setDescription('Celui qui pete');
        $kid3 = new Kid();
        $kid3->setDescription('Celui qui sent la savonnette');

        $kid1->setDad($dad);
        $kid2->setDad($dad);
        $kid3->setDad($dad);

        $em = $this->getContainer()->get('doctrine.orm.entity_manager');
        $em->persist($dad);
        $em->persist($kid1);
        $em->persist($kid2);
        $em->persist($kid3);
        $em->flush();

        echo "Créations des entitées terminées ! On lance un update random\n";
        var_dump($dad->getChildUpdatedAt());
        sleep(5);
        $kid2->setDescription('updaté');
        $em->flush();
        var_dump($dad->getChildUpdatedAt());
    }
}