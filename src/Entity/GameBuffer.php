<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\GameBufferRepository")
 */
class GameBuffer
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $lang;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $sport;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $league;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $team1;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $team2;

    /**
     * @ORM\Column(type="datetime")
     */
    private $start;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $origin;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLang(): ?string
    {
        return $this->lang;
    }

    public function setLang(string $lang): self
    {
        $this->lang = $lang;

        return $this;
    }

    public function getSport(): ?string
    {
        return $this->sport;
    }

    public function setSport(string $sport): self
    {
        $this->sport = $sport;

        return $this;
    }

    public function getLeague(): ?string
    {
        return $this->league;
    }

    public function setLeague(string $league): self
    {
        $this->league = $league;

        return $this;
    }

    public function getTeam1(): ?string
    {
        return $this->team1;
    }

    public function setTeam1(string $team1): self
    {
        $this->team1 = $team1;

        return $this;
    }

    public function getTeam2(): ?string
    {
        return $this->team2;
    }

    public function setTeam2(string $team2): self
    {
        $this->team2 = $team2;

        return $this;
    }

    public function getStart(): ?\DateTimeInterface
    {
        return $this->start;
    }

    public function setStart(\DateTimeInterface $start): self
    {
        $this->start = $start;

        return $this;
    }

    public function getOrigin(): ?string
    {
        return $this->origin;
    }

    public function setOrigin(string $origin): self
    {
        $this->origin = $origin;

        return $this;
    }
}
