<?php

namespace App\Entity;

use App\Repository\WeaponRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: WeaponRepository::class)]
class Weapon
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\Column(type: 'integer')]
    private $attack;

    #[ORM\Column(type: 'integer')]
    private $attackSpeed;

    #[ORM\Column(type: 'integer')]
    private $attackRange;

    #[ORM\Column(type: 'integer')]
    private $criticalChance;

    #[ORM\Column(type: 'text')]
    private $imgLink;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getAttack(): ?int
    {
        return $this->attack;
    }

    public function setAttack(int $attack): self
    {
        $this->attack = $attack;

        return $this;
    }

    public function getAttackSpeed(): ?int
    {
        return $this->attackSpeed;
    }

    public function setAttackSpeed(int $attackSpeed): self
    {
        $this->attackSpeed = $attackSpeed;

        return $this;
    }

    public function getAttackRange(): ?int
    {
        return $this->attackRange;
    }

    public function setAttackRange(int $attackRange): self
    {
        $this->attackRange = $attackRange;

        return $this;
    }

    public function getCriticalChance(): ?int
    {
        return $this->criticalChance;
    }

    public function setCriticalChance(int $criticalChance): self
    {
        $this->criticalChance = $criticalChance;

        return $this;
    }

    public function getImgLink(): ?string
    {
        return $this->imgLink;
    }

    public function setImgLink(string $imgLink): self
    {
        $this->imgLink = $imgLink;

        return $this;
    }
}
