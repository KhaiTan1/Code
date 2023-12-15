<?php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategoryRepository::class)]
class Category
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Catname = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $interge = null;

    #[ORM\ManyToOne(inversedBy: 'categories')]
    private ?Product $relation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCatname(): ?string
    {
        return $this->Catname;
    }

    public function setCatname(?string $Catname): static
    {
        $this->Catname = $Catname;

        return $this;
    }

    public function getInterge(): ?string
    {
        return $this->interge;
    }

    public function setInterge(?string $interge): static
    {
        $this->interge = $interge;

        return $this;
    }

    public function getRelation(): ?Product
    {
        return $this->relation;
    }

    public function setRelation(?Product $relation): static
    {
        $this->relation = $relation;

        return $this;
    }
}
