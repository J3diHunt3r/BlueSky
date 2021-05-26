<?php

namespace App\Entity;

use App\Repository\BlueSkyRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BlueSkyRepository::class)
 */
class BlueSky
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $Project;

    /**
     * @ORM\Column(type="integer")
     */
    private $PrNumber;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $pr_description;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProject(): ?string
    {
        return $this->Project;
    }

    public function setProject(string $Project): self
    {
        $this->Project = $Project;

        return $this;
    }

    public function getPrNumber(): ?int
    {
        return $this->PrNumber;
    }

    public function setPrNumber(int $PrNumber): self
    {
        $this->PrNumber = $PrNumber;

        return $this;
    }

    public function getPrDescription(): ?string
    {
        return $this->pr_description;
    }

    public function setPrDescription(?string $pr_description): self
    {
        $this->pr_description = $pr_description;

        return $this;
    }
}
