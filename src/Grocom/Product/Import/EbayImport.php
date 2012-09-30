<?php

namespace Grocom\Product\Import;

/**
 * Télécharge les listes des marques et des modèles sur l'API eBay UK
 * 
 * @author Soufian Salim <soufi@nsal.im>
 */
class EbayImport
{
	/**
	 * @var array
	 * @static
	 */
  	public static $cars = array(
			'path'       => 'http://www.ebaymotorspro.co.uk/emp/developer/eMPro_make_model_list.csv', 
			'separator'  => ',', 
			'make_id'    => 0, 
			'make_name'  => 4, 
			'model_id'   => 1, 
			'model_name' => 3, 
			'header'     => true, 
  	);

  	/**
	 * @var array
	 * @static
	 */
  	public static $classic_cars = array(
			'path'       => 'http://www.ebaymotorspro.co.uk/emp/developer/eMPro_make_model_list_classic_cars.csv', 
			'separator'  => ',', 
			'make_id'    => 0, 
			'make_name'  => 4, 
			'model_id'   => 1, 
			'model_name' => 3, 
			'header'     => true, 
  	);

  	/**
	 * @var array
	 * @static
	 */
  	public static $motorcycles = array(
			'path'       => 'http://www.ebaymotorspro.co.uk/emp/developer/eMPro_make_model_list_motorcycles.csv', 
			'separator'  => ',', 
			'make_id'    => 0, 
			'make_name'  => 4, 
			'model_id'   => 1, 
			'model_name' => 3, 
			'header'     => true, 
  	);

  	/**
	 * @var array
	 * @static
	 */
  	public static $commercial_trucks = array(
			'path'       => 'http://www.ebaymotorspro.co.uk/emp/developer/eMPro_make_model_list_commercial_trucks.csv', 
			'separator'  => ',', 
			'make_id'    => 0, 
			'make_name'  => 4, 
			'model_id'   => 1, 
			'model_name' => 3, 
			'header'     => true, 
  	);

  	/**
	 * @var array
	 * @static
	 */
  	public static $motorhomes = array(
			'path'       => 'http://www.ebaymotorspro.co.uk/emp/developer/eMPro_make_list_motorhomes.csv', 
			'separator'  => ',', 
			'make_id'    => 0, 
			'make_name'  => 2, 
			'model_id'   => null, 
			'model_name' => null, 
			'header'     => true, 
  	);

  	/**
	 * @var array
	 * @static
	 */
  	public static $minibuses_buses_coaches = array(
			'path'       => 'http://www.ebaymotorspro.co.uk/emp/developer/eMPro_make_list_minibuses_buses_coaches.csv', 
			'separator'  => ',', 
			'make_id'    => 0, 
			'make_name'  => 2, 
			'model_id'   => null, 
			'model_name' => null, 
			'header'     => true, 
  	);

    /**
     * Convertit un fichier CSV eBay en array
     * 
     * @param  array $ebay_data
     * @return array
     */
    public function getMakeModels($ebay_data)
    {
		$path       = $ebay_data['path'];
		$separator  = $ebay_data['separator'];
		$make_id    = $ebay_data['make_id'];
		$make_name  = $ebay_data['make_name'];
		$model_id   = $ebay_data['model_id'];
		$model_name = $ebay_data['model_name'];
		$header     = $ebay_data['header'];

        // Lecture du fichier CSV
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
                    if ($model_name != "NA"){
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
        
        // Traitement des données
        $data = array();
        
        foreach ($options as $o){
            $make  = $o['make_name'];

            if (null !== $model_name){
	            $model = $o['model_name'];
	        	$data[$make][] = $model;
            } else {
	        	$data[$make] = array();
            }
        }

        return $data;
    }
}