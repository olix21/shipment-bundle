<?php

namespace Dywee\ShipmentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShipmentElement
 *
 * @ORM\Table(name="shipment_elements")
 * @ORM\Entity(repositoryClass="Dywee\ShipmentBundle\Entity\ShipmentElementRepository")
 */
class ShipmentElement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="smallint")
     */
    private $quantity;

    /**
     * @ORM\ManyToOne(targetEntity="Dywee\ShipmentBundle\Entity\Shipment", inversedBy="shipmentElements")
     * @ORM\JoinColumn(nullable=false)
     */
    private $shipment;

    /**
     * @ORM\ManyToOne(targetEntity="Dywee\ProductBundle\Entity\Product")
     * @ORM\JoinColumn(nullable=false)
     */
    private $product;

    /**
     * @ORM\Column(name="weight", type="float")
     */
    private $weight = 0;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     * @return ShipmentElement
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set shipment
     *
     * @param \Dywee\ShipmentBundle\Entity\Shipment $shipment
     * @return ShipmentElement
     */
    public function setShipment(\Dywee\ShipmentBundle\Entity\Shipment $shipment)
    {
        $this->shipment = $shipment;

        return $this;
    }

    /**
     * Get shipment
     *
     * @return \Dywee\ShipmentBundle\Entity\Shipment 
     */
    public function getShipment()
    {
        return $this->shipment;
    }

    /**
     * Set product
     *
     * @param \Dywee\ProductBundle\Entity\Product $product
     * @return ShipmentElement
     */
    public function setProduct(\Dywee\ProductBundle\Entity\Product $product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \Dywee\ProductBundle\Entity\Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set weight
     *
     * @param float $weight
     * @return ShipmentElement
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return float 
     */
    public function getWeight()
    {
        return $this->weight;
    }
}