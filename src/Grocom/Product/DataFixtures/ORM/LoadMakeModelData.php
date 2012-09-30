<?php

namespace Generic\User\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
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
        $this->update($manager, 'http://www.ebaymotorspro.co.uk/emp/developer/eMPro_make_model_list_motorcycles.csv', ',', 0, 4, 1, 3, true);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 2;
    }

    /**
     * Charge les données contenues dans un fichier CSV eBay
     * 
     * @param ObjectManager $manager
     * @param string        $path
     * @param string        $separator
     * @param int           $make_id
     * @param int           $make_name
     * @param int           $model_id
     * @param int           $model_name
     * @param boolean       $header
     */
    function update($manager, $path, $separator, $make_id, $make_name, $model_id, $model_name, $header)
    {
        $options = $this->read($path, $separator, $make_id, $make_name, $model_id, $model_name, $header);
        $data  = array();
        
        foreach ($options as $o){
            $make  = $o['make_name'];
            $model = $o['model_name'];

            $data[$make][] = $model;
        }

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
     * Convertit un fichier CSV eBay en array
     * 
     * @param string  $path
     * @param string  $separator
     * @param int     $make_id
     * @param int     $make_name
     * @param int     $model_id
     * @param int     $model_name
     * @param boolean $header
     * @return array
     */
    function read($path, $separator, $make_id, $make_name, $model_id, $model_name, $header)
    {
        $options    = array();
        $row        = 0;
        
        if (($handle = fopen($path, "r")) !== false){
            while (($data = fgetcsv($handle, $separator)) !== false){
                if ($header == false){
                    if (!isset ($options[$row]['make_id'])){
                        $options[$row]['make_id']    = $data[$make_id];
                    }
                    if ($model_id != "NA"){
                        if (!isset ($options[$row]['model_id'][$data[$model_id]])){
                            $options[$row]['model_id'] = $data[$model_id];
                        }
                    }
                    if (!isset ($options[$row]['make_name'])){
                        $options[$row]['make_name'] = $data[$make_name];
                    }
                    if ($model_id != "NA"){
                        if (!isset ($options[$row]['model_name'][$data[$model_name]])){
                            $options[$row]['model_name'] = $data[$model_name];
                        } 
                    }
                    
                    $row++;
                }
                
                $header = false;
            }
            
            fclose($handle);
        } else {
            throw new Exception(sprintf("The file %s cannot be opened", $path), 1);
        }
        
        return $options;
    }
}