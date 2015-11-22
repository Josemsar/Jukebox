<?php
// src/Jukebox/JukeboxBundle/Entity/Artista.php
namespace Jukebox\JukeboxBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * Jukebox\JukeboxBundle\Entity\Artista
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Jukebox\JukeboxBundle\Entity\ArtistaRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Artista
{
	/**
	* @ORM\Id
	* @ORM\Column(type="integer")
	* @ORM\GeneratedValue(strategy="AUTO")
	*/
	protected $id;

	/**
	* @ORM\Column(type="text")
	*/
	protected $nombre;

	/**
	* @ORM\Column(type="text")
	*/
	protected $genero;

	/**
	* @ORM\Column(type="date")
	*/
	protected $fecha_nacimiento;

	/**
	* @ORM\Column(type="text")
	*/
	protected $descripcion;

	/**
	* @ORM\Column(type="text")
	*/
	protected $pais;

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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Artista
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set genero
     *
     * @param string $genero
     *
     * @return Artista
     */
    public function setGenero($genero)
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get genero
     *
     * @return string
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set fechaNacimiento
     *
     * @param \DateTime $fechaNacimiento
     *
     * @return Artista
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fecha_nacimiento = $fechaNacimiento;

        return $this;
    }

    /**
     * Get fechaNacimiento
     *
     * @return \DateTime
     */
    public function getFechaNacimiento()
    {
        return $this->fecha_nacimiento;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Artista
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
    public function getDescripcion($length = null)
    {
			if (false === is_null($length) && $length > 0 && strlen($this->descripcion) > $length)
				return substr($this->descripcion, 0, $length) . "(...)";
			else
				return $this->descripcion;
    }

    /**
     * Set pais
     *
     * @param string $pais
     *
     * @return Artista
     */
    public function setPais($pais)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return string
     */
    public function getPais()
    {
        return $this->pais;
    }
}
