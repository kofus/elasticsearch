<?php 
namespace Kofus\ElasticSearch\Service;


use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class ApiService  implements ServiceLocatorAwareInterface
{
    
    protected $host = 'http://localhost:9200';
    
    
    
    protected $sm;
    
    public function setServiceLocator(ServiceLocatorInterface $serviceLocator)
    {
        $this->sm = $serviceLocator;
    }
    
    public function getServiceLocator()
    {
        return $this->sm;
    }
    
    
}
