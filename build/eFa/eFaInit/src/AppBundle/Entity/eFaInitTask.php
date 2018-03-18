<?php
// src/AppBundle/Entity/eFaInitTask.php

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * @Assert\GroupSequence({"eFaInitTask", "Webpassword1", "Webpassword2"})
 */
class eFaInitTask
{

    /**
     * @Assert\Locale(
     *    groups={"Language"}
     * )
     */
    protected $locale;


    public function getLanguage()
    {
        return $this->locale;
    }

    public function setLanguage($locale)
    {
        $this->locale = $locale;
    }

    /**
     * @Assert\NotBlank(
     *    groups={"Hostname"}
     * )
     * @Assert\Length(
     *    min     = 2,
     *    max     = 256,
     *    groups={"Hostname"}
     * )
     * @Assert\Regex(
     *    "/^[-a-zA-Z0-9]+$/",
     *    groups={"Hostname"}
     * )
     */
    protected $hostname;


    public function getHostname()
    {
        return $this->hostname;
    }

    public function setHostname($var)
    {
        $this->hostname = $var;
    }

    /**
     * @Assert\NotBlank(
     *    groups={"Domainname"}
     * )
     * @Assert\Length(
     *    min     = 2,
     *    max     = 256,
     *    groups={"Domainname"}
     * )
     * @Assert\Regex(
     *    "/^[a-zA-Z0-9]+([\-\.]{1}[a-zA-Z0-9-]+)*\.[a-z]{2,15}$/",
     *    groups={"Domainname"}
     * )
     */
    protected $domainname;


    public function getDomainname()
    {
        return $this->domainname;
    }

    public function setDomainname($var)
    {
        $this->domainname = $var;
    }

    /**
     * @Assert\NotBlank(
     *    groups={"Email"}
     * )
     * @Assert\Length(
     *    min     = 2,
     *    max     = 256,
     *    groups={"Email"}
     * )
     * @Assert\Email(
     *    groups={"Email"}
     * )
     */
    protected $email;


    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($var)
    {
        $this->email = $var;
    }

    /**
     * @Assert\NotBlank(
     *    groups={"IPv4address"}
     * )
     * @Assert\Length(
     *    min     = 7,
     *    max     = 15,
     *    groups={"IPv4address"}
     * )
     * @Assert\Ip(
     *    version = 4,
     *    groups={"IPv4address"}
     * )
     */
    protected $ipv4address;


    public function getIPv4address()
    {
        return $this->ipv4address;
    }

    public function setIPv4address($var)
    {
        $this->ipv4address = $var;
    }

    /**
     * @Assert\NotBlank(
     *    groups={"IPv4netmask"}
     * )
     * @Assert\Length(
     *    min     = 7,
     *    max     = 15,
     *    groups={"IPv4netmask"}
     * )
     * @Assert\Regex(
     *    "/^(((255\.){3}(255|254|252|248|240|224|192|128|0+))|((255\.){2}(255|254|252|248|240|224|192|128|0+)\.0)|((255\.)(255|254|252|248|240|224|192|128|0+)(\.0+){2})|((255|254|252|248|240|224|192|128|0+)(\.0+){3}))$/",
     *    groups={"IPv4netmask"}
     * )
     */
    protected $ipv4netmask;


    public function getIPv4netmask()
    {
        return $this->ipv4netmask;
    }

    public function setIPv4netmask($var)
    {
        $this->ipv4netmask = $var;
    }


    /**
     * @Assert\NotBlank(
     *    groups={"IPv4gateway"}
     *)
     * @Assert\Length(
     *    min     = 7,
     *    max     = 15,
     *    groups={"IPv4gateway"}
     * )
     * @Assert\Ip(
     *    version = 4,
     *    groups={"IPv4gateway"}
     * )
     */
    protected $ipv4gateway;


    public function getIPv4gateway()
    {
        return $this->ipv4gateway;
    }

    public function setIPv4gateway($var)
    {
        $this->ipv4gateway = $var;
    }

    /**
     * @Assert\NotBlank(
     *    groups={"IPv6address"}
     * )
     * @Assert\Length(
     *    min     = 3,
     *    max     = 40,
     *    groups={"IPv6address"}
     * )
     * @Assert\Ip(
     *    version = 6,
     *    groups={"IPv6address"}
     * )
     */
    protected $ipv6address;


    public function getIPv6address()
    {
        return $this->ipv6address;
    }

    public function setIPv6address($var)
    {
        $this->ipv6address = $var;
    }

    /**
     * @Assert\NotBlank(
     *    groups={"IPv6mask"}
     * )
     * @Assert\Range(
     *    min = 8,
     *    max = 127,
     *    groups={"IPv6mask"}
     * )
     */
    protected $ipv6mask;


    public function getIPv6mask()
    {
        return $this->ipv6mask;
    }

    public function setIPv6mask($var)
    {
        $this->ipv6mask = $var;
    }


    /**
     * @Assert\NotBlank(
     *    groups={"IPv6gateway"}
     *)
     * @Assert\Length(
     *    min     = 3,
     *    max     = 40,
     *    groups={"IPv6gateway"}
     * )
     * @Assert\Ip(
     *    version = 6,
     *    groups={"IPv6gateway"}
     * )
     */
    protected $ipv6gateway;


    public function getIPv6gateway()
    {
        return $this->ipv6gateway;
    }

    public function setIPv6gateway($var)
    {
        $this->ipv6gateway = $var;
    }

    /**
     * @Assert\NotBlank(
     *    groups={"DNS1"}
     *)
     * @Assert\Ip(
     *    groups={"DNS1"}
     * )
     */
    protected $dns1;


    public function getDNS1()
    {
        return $this->dns1;
    }

    public function setDNS1($var)
    {
        $this->dns1 = $var;
    }

    /**
     * @Assert\NotBlank(
     *    groups={"DNS2"}
     * )
     * @Assert\Ip(
     *    groups={"DNS2"}
     * )
     */
    protected $dns2;


    public function getDNS2()
    {
        return $this->dns2;
    }

    public function setDNS2($var)
    {
        $this->dns2 = $var;
    }

    /**
     * @Assert\NotBlank(
     *    groups={"Webusername"}
     * )
     * @Assert\Regex(
     *    "/^[a-z_][a-z0-9_-]{1,30}+$/",
     *    groups={"Webusername"}
     * )
     */
    protected $webusername;


    public function getWebusername()
    {
        return $this->webusername;
    }

    public function setWebusername($var)
    {
        $this->webusername = $var;
    }

    /**
     * @Assert\NotBlank(
     *    groups={"Webpassword1"}
     * )
     * @Assert\Length(
     *    min=1,
     *    max=256,
     *    groups={"Webpassword1"}
     * )
     */
    protected $webpassword1;
    protected $webpassword2;


    public function getWebpassword2()
    {
        return $this->webpassword2;
    }

    public function setWebpassword2($var)
    {
        $this->webpassword2 = $var;
    }
    
    public function getWebpassword1()
    {
        return $this->webpassword1;
    }

    public function setWebpassword1($var)
    {
        $this->webpassword1 = $var;
    }


    /**
     * @Assert\IsTrue(
     *     message="Passwords do not match",
     *     groups={"Webpassword2"}
     * )
     *        
     */
    public function isPasswordSame()
    {
         return $this->webpassword1 === $this->webpassword2;
    }
}
?>