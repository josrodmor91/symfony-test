<?php

declare(strict_types=1);

namespace App\Infrastructure\Api;

use DateTimeImmutable;

final class QualityAd
{
    public function __construct(
        private int $id,
        private String $typology,
        private String $description,
        private array $pictureUrls,
        private int $houseSize,
        private ?int $gardenSize = null,
        private ?int $score = null,
        private ?DateTimeImmutable $irrelevantSince = null,
    ) {
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return String
     */
    public function getTypology(): string
    {
        return $this->typology;
    }

    /**
     * @return String
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return array
     */
    public function getPictureUrls(): array
    {
        return $this->pictureUrls;
    }

    /**
     * @return int
     */
    public function getHouseSize(): int
    {
        return $this->houseSize;
    }

    /**
     * @return int|null
     */
    public function getGardenSize(): ?int
    {
        return $this->gardenSize;
    }

    /**
     * @return int|null
     */
    public function getScore(): ?int
    {
        return $this->score;
    }

    /**
     * @return DateTimeImmutable|null
     */
    public function getIrrelevantSince(): ?DateTimeImmutable
    {
        return $this->irrelevantSince;
    }
}
