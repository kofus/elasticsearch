<?php
namespace Kofus\ElasticSearch;

return array(

    
    'user' => array(
        'controller_mappings' => array(
            'Kofus\Media\Controller\Console' => 'Console'
        )
    ),
    
   
    
    
    'service_manager' => array(
        'invokables' => array(
            'KofusElasticSearchApiService' => 'Kofus\ElasticSearch\Service\ApiService',
        )
    ),
    
  
  

);
