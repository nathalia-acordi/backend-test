<?php

namespace App\Model;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name:"contatos")]

class Contato {
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type:"integer")]
    private $id;

    #[ORM\Column(type:"string")]
    private $tipo;

    #[ORM\Column(type:"string")]
    private $descricao;

    #[ORM\ManyToOne(targetEntity:"Pessoa", inversedBy:"contatos")]
    #[ORM\JoinColumn(name:"pessoa_id", referencedColumnName:"id")]
    private $pessoa;

    public function getId(): int {
        return $this->id;
    }

    public function getTipo(): string {
        return $this->tipo;
    }

    public function setTipo(string $tipo): void {
        $this->tipo = $tipo;
    }

    public function getDescricao(): string {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): void {
        $this->descricao = $descricao;
    }

    public function getPessoa(): ?Pessoa {
        return $this->pessoa;
    }

    public function setPessoa(?Pessoa $pessoa): void {
        $this->pessoa = $pessoa;
    }
}
