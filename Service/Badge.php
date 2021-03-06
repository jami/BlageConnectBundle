<?php

namespace Blage\ConnectBundle\Service;

/**
 * represents a Badge as given to the user by Sensio
 */
class Badge
{
    protected $url;
    
    protected $pictureUrl;
    
    protected $name;
 
    /**
     *
     * @param string $url
     * @param string $pictureUrl
     * @param string $name 
     */
    function __construct($url, $pictureUrl, $name)
    {
        $this->url = $url;
        $this->pictureUrl = $pictureUrl;
        $this->name = $name;
    }

    
    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function getPictureUrl()
    {
        return $this->pictureUrl;
    }

    public function setPictureUrl($pictureUrl)
    {
        $this->pictureUrl = $pictureUrl;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }


}