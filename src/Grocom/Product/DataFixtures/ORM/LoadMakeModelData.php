<?php

namespace Grocom\Product\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Grocom\Product\Import\EbayImport;
use Grocom\Product\Entity\Make;
use Grocom\Product\Entity\Model;

/**
 * Charge les marques et les modèles
 * 
 * @author Soufian Salim <soufi@nsal.im>
 */
class LoadMakeModelData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $import = new EbayImport();
        $data   = $import->getMakeModels(EbayImport::$motorcycles);

        foreach ($data as $make_name => $model_names){
            $make = new Make();
            $make->setName($make_name);

            foreach ($model_names as $model_name){
                $model = new Model();
                $model->setName($model_name);
                $model->setMake($make);

                $manager->persist($model);
            }

            $manager->persist($make);
        }

        $manager->flush();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 3;
    }
}