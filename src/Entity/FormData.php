<?php

// src/Entity/FormData.php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\FormDataRepository;

#[ORM\Entity(repositoryClass: FormDataRepository::class)]
class FormData
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $campo1;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $campo2;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $campo3;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $campo4;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $latitude;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $longitude;

    #[ORM\Column(type: 'text', nullable: true)]
    private $descricao;

    // Getters and Setters for all fields

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCampo1(): ?string
    {
        return $this->campo1;
    }

    public function setCampo1(?string $campo1): self
    {
        $this->campo1 = $campo1;
        return $this;
    }

    public function getCampo2(): ?string
    {
        return $this->campo2;
    }

    public function setCampo2(?string $campo2): self
    {
        $this->campo2 = $campo2;
        return $this;
    }

    public function getCampo3(): ?string
    {
        return $this->campo3;
    }

    public function setCampo3(?string $campo3): self
    {
        $this->campo3 = $campo3;
        return $this;
    }

    public function getCampo4(): ?string
    {
        return $this->campo4;
    }

    public function setCampo4(?string $campo4): self
    {
        $this->campo4 = $campo4;
        return $this;
    }

    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    public function setLatitude(?string $latitude): self
    {
        $this->latitude = $latitude;
        return $this;
    }

    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    public function setLongitude(?string $longitude): self
    {
        $this->longitude = $longitude;
        return $this;
    }

    public function getDescricao(): ?string
    {
        return $this->descricao;
    }

    public function setDescricao(?string $descricao): self
    {
        $this->descricao = $descricao;
        return $this;
    }
}

