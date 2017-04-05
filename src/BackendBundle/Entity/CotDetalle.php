<?php

namespace BackendBundle\Entity;

/**
 * CotDetalle
 */
class CotDetalle
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $cantidad;

    /**
     * @var integer
     */
    private $neto;

    /**
     * @var \BackendBundle\Entity\Cotizacion
     */
    private $cotizacion;

    /**
     * @var \BackendBundle\Entity\Producto
     */
    private $producto;


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
     * Set cantidad
     *
     * @param integer $cantidad
     *
     * @return CotDetalle
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set neto
     *
     * @param integer $neto
     *
     * @return CotDetalle
     */
    public function setNeto($neto)
    {
        $this->neto = $neto;

        return $this;
    }

    /**
     * Get neto
     *
     * @return integer
     */
    public function getNeto()
    {
        return $this->neto;
    }

    /**
     * Set cotizacion
     *
     * @param \BackendBundle\Entity\Cotizacion $cotizacion
     *
     * @return CotDetalle
     */
    public function setCotizacion(\BackendBundle\Entity\Cotizacion $cotizacion = null)
    {
        $this->cotizacion = $cotizacion;

        return $this;
    }

    /**
     * Get cotizacion
     *
     * @return \BackendBundle\Entity\Cotizacion
     */
    public function getCotizacion()
    {
        return $this->cotizacion;
    }

    /**
     * Set producto
     *
     * @param \BackendBundle\Entity\Producto $producto
     *
     * @return CotDetalle
     */
    public function setProducto(\BackendBundle\Entity\Producto $producto = null)
    {
        $this->producto = $producto;

        return $this;
    }

    /**
     * Get producto
     *
     * @return \BackendBundle\Entity\Producto
     */
    public function getProducto()
    {
        return $this->producto;
    }
}

