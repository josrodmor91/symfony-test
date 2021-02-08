<?php

declare(strict_types=1);

namespace App\Domain;

use DateTime;
use DateTimeImmutable;

final class Ad
{
    public function __construct(
        private int $id,
        private String $typology,
        private String $description,
        private array $pictures,
        private int $houseSize,
        private ?int $gardenSize = null,
        private ?int $score = null,
        private ?DateTimeImmutable $irrelevantSince = null,
    ) {
    }

    /**
     * @return array
     */
    public function getPictures(): array
    {
        return $this->pictures;
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

    /**
     * @param Picture[] $pictures
     */
    public function setScore(array $pictures): void
    {
        $this->score = 0;
        $this->setPicturesScore($pictures);
        $this->setDescriptionScore();
        $this->setCompleteAdScore();

        if($this->score > 100){
            $this->score = 100;
            $this->irrelevantSince = null;
        }

        if($this->score < 0){
            $this->score = 0;
        }

        if($this->score < 40){
            $this->irrelevantSince = DateTimeImmutable::createFromMutable(new DateTime());
        }
    }

    public function setPicturesScore(array $pictures): void
    {
        if(empty($pictures)){
            $this->score -= 10;
            return;
        }
        foreach ($pictures as $picture){
            $this->score += 10;
            if ('HD' === $picture->getQuality()) {
                $this->score += 10;
            }
        }
    }

    public function setDescriptionScore(): void
    {
        if (empty($this->description)) {
            return;
        }

        $this->score += 5;
        $this->addScoreByTypologyAndDescription();
        $this->setScoreByWordsInDescription();
    }

    private function addScoreByTypologyAndDescription(): void
    {
        $descriptionSize = strlen($this->description);
        if ('FLAT' === $this->typology && $descriptionSize >= 20 && $descriptionSize <= 49) {
            $this->score += 10;
            return;
        }

        if ('FLAT' === $this->typology && $descriptionSize > 49) {
            $this->score += 30;
            return;
        }

        if ('CHALET' === $this->typology && $descriptionSize > 50) {
            $this->score += 20;
            return;
        }
    }

    private function setScoreByWordsInDescription(): void
    {
        if (false !== stripos($this->description, 'Luminoso')) {
            $this->score += 5;
        }

        if (false !== stripos($this->description, 'Nuevo')) {
            $this->score += 5;
        }

        if (false !== stripos($this->description, 'Céntrico')) {
            $this->score += 5;
        }

        if (false !== stripos($this->description, 'Reformado')) {
            $this->score += 5;
        }

        if (false !== stripos($this->description, 'Ático')) {
            $this->score += 5;
        }
    }

    public function setCompleteAdScore(): void
    {
        if(false === empty($this->pictures) && 'GARAGE' === $this->typology){
            $this->score += 40;
            return;
        }

        $commonRequired = false === empty($this->pictures) && false === empty($this->description);
        if($commonRequired && false === empty($this->houseSize) && 'FLAT' === $this->typology){
            $this->score += 40;
            return;
        }

        if($commonRequired && false === empty($this->houseSize) && false === empty($this->gardenSize) && 'CHALET' === $this->typology){
            $this->score += 40;
            return;
        }
    }
}
