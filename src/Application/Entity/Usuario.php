<?php
namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Usuario
 * @package Application\Entity
 * @ORM\Entity(repositoryClass="Application\Entity\UsuarioRepository")
 * @ORM\Table(name="usuarios", schema="webpdv")
 */
class Usuario
{

    /**
     * @ORM\Id()
     * @ORM\Column(name="id_usuario", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @var int
     */
    private $id;

    /**
     * @ORM\Column(name="nome_usuario", type="string", length=40)
     * @var string
     */
    private $nome;

    /**
     * @ORM\Column(name="login", type="string", length=20)
     * @var string
     */
    private $login;

    /**
     * @ORM\Column(name="id_loja", type="integer")
     * @var integer
     */
    private $loja;

    /**
     * @ORM\Column(name="ativo", type="smallint")
     * @var integer
     */
    private $ativo;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @return mixed
     */
    public function getLoja()
    {
        return $this->loja;
    }

    /**
     * @return int
     */
    public function getAtivo()
    {
        return $this->ativo;
    }
}