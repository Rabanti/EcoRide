<?php

namespace App\Entity;
class Utilisateur
{
    protected ?int $id = null;
    protected ?string $name = null;
    


    public function getId(): ?int
    {
        return $this->id;
    }


    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }


    public function getName(): ?string
    {
        return $this->name;
    }


    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    } }