<?php
/**
 * Created by PhpStorm.
 * User: asphox
 * Date: 26/11/18
 * Time: 00:33
 */


namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\ProgrammationCircuit;

class LoadProgrammationCircuit extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $circuit=$this->getReference('andalousie-circuit');

        $pc1 = new ProgrammationCircuit();
        $date = date_create("29-09-1995");
        $pc1->setDateDepart($date);
        $pc1->setNombrePersonnes(175);
        $pc1->setPrix(230);
        $pc1->setCircuit($circuit);
        $manager->persist($pc1);
        $manager->flush();
    }

    public function getDependencies()
    {
        return array(
            LoadCircuitData::class,
        );
    }
}