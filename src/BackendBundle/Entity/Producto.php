<?php

namespace BackendBundle\Entity;

/**
 * Producto
 */
class Producto
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nparte;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var string
     */
    private $precio;


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
     * Set nparte
     *
     * @param string $nparte
     *
     * @return Producto
     */
    public function setNparte($nparte)
    {
        $this->nparte = $nparte;

        return $this;
    }

    /**
     * Get nparte
     *
     * @return string
     */
    public function getNparte()
    {
        return $this->nparte;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Producto
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set precio
     *
     * @param string $precio
     *
     * @return Producto
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return string
     */
    public function getPrecio()
    {
        return $this->precio;
    }
}

