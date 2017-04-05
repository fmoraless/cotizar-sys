<?php

namespace BackendBundle\Entity;

/**
 * Cotizacion
 */
class Cotizacion
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $iva;

    /**
     * @var string
     */
    private $total;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \BackendBundle\Entity\Cliente
     */
    private $cliente;

    /**
     * @var \BackendBundle\Entity\Persona
     */
    private $persona;

    /**
     * @var \BackendBundle\Entity\User
     */
    private $user;


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
     * Set iva
     *
     * @param string $iva
     *
     * @return Cotizacion
     */
    public function setIva($iva)
    {
        $this->iva = $iva;

        return $this;
    }

    /**
     * Get iva
     *
     * @return string
     */
    public function getIva()
    {
        return $this->iva;
    }

    /**
     * Set total
     *
     * @param string $total
     *
     * @return Cotizacion
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return string
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Cotizacion
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set cliente
     *
     * @param \BackendBundle\Entity\Cliente $cliente
     *
     * @return Cotizacion
     */
    public function setCliente(\BackendBundle\Entity\Cliente $cliente = null)
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Get cliente
     *
     * @return \BackendBundle\Entity\Cliente
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * Set persona
     *
     * @param \BackendBundle\Entity\Persona $persona
     *
     * @return Cotizacion
     */
    public function setPersona(\BackendBundle\Entity\Persona $persona = null)
    {
        $this->persona = $persona;

        return $this;
    }

    /**
     * Get persona
     *
     * @return \BackendBundle\Entity\Persona
     */
    public function getPersona()
    {
        return $this->persona;
    }

    /**
     * Set user
     *
     * @param \BackendBundle\Entity\User $user
     *
     * @return Cotizacion
     */
    public function setUser(\BackendBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \BackendBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}

