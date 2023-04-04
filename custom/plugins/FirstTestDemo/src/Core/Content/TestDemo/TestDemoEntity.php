<?php

namespace FirstTestDemo\Core\Content\TestDemo;

use Shopware\Core\Content\Product\ProductEntity;
use Shopware\Core\Framework\DataAbstractionLayer\Entity;
use Shopware\Core\Framework\DataAbstractionLayer\EntityIdTrait;
use Shopware\Core\System\Country\Aggregate\CountryState\CountryStateEntity;
use Shopware\Core\System\Country\CountryEntity;

class TestDemoEntity extends Entity
{
    use EntityIdTrait;

    /**
     * @var string
     */
    protected string $name;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return void
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @var string
     */
    protected string $city;

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return void
     */
    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    /**
     * @var bool
     */
    protected bool $active;

    /**
     * @return bool
     */
    public function isActive():bool
    {
        return $this->active;
    }

    /**
     * @param bool $active
     * @return void
     */
    public function setActive(bool $active): void
    {
        $this->active = $active;
    }

    /**
     * @var string
     */
    protected string $media;

    /**
     * @return void
     */
    public function getMedia(): string
    {
        return $this->media;
    }

    /**
     * @return mixed
     */
    public function setMedia(string $media): void
    {
        $this->media = $media;
    }

    /**
     * @var CountryEntity|null
     */
    private ?CountryEntity $country;

    /**
     * @return CountryEntity|null
     */
    public function getCountry(): ?CountryEntity
    {
        return $this->country;
    }

    /**
     * @param CountryEntity|null $country
     * @return void
     */
    public function setCountry(?CountryEntity $country): void
    {
        $this->country = $country;
    }

    /**
     * @var CountryStateEntity|null
     */
    protected ?CountryStateEntity $state;

    /**
     * @return CountryStateEntity|null
     */
    public function getState(): ?CountryStateEntity
    {
        return $this->state;
    }

    /**
     * @param CountryStateEntity|null $state
     * @return void
     */
    public function setState(?CountryStateEntity $state): void
    {
        $this->state = $state;
    }

    /**
     * @var ProductEntity|null
     */
    protected ?ProductEntity $product;

    /**
     * @return ProductEntity|null
     */
    public function getProduct(): ?ProductEntity
    {
        return $this->product;
    }

    /**
     * @param ProductEntity|null $product
     * @return void
     */
    public function setProduct(?ProductEntity $product): void
    {
        $this->product = $product;
    }
}
