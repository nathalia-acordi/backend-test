<?php

namespace App\Model;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

#[ORM\Entity]
#[ORM\Table(name: 'pessoas')]
class Pessoa { 
     #[ORM\Id]
     #[ORM\GeneratedValue]
     #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string')]
    private $nome;

    #[ORM\Column(type: 'string')]
    private $cpf;

     
    #[ORM\OneToMany(targetEntity:"Contato", mappedBy:"pessoa")]
    private $contatos;

    public function __construct() {
        $this->contatos = new ArrayCollection();
    }

    public function getId(): int {
        return $this->id;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    public function getCpf(): string {
        return $this->cpf;
    }

    public function setCpf(string $cpf): void {
        $this->cpf = $cpf;
    }

    public function getContatos() {
        return $this->contatos;
    }

    public function addContato(Contato $contato): void {
        if (!$this->contatos->contains($contato)) {
            $this->contatos[] = $contato;
            $contato->setPessoa($this);
        }
    }

    public function removeContato(Contato $contato): void {
        if ($this->contatos->contains($contato)) {
            $this->contatos->removeElement($contato);
            if ($contato->getPessoa() === $this) {
                $contato->setPessoa(null);
            }
        }
    }
}
