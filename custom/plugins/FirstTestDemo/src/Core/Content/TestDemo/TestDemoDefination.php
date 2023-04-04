<?php

declare(strict_types=1);

namespace FirstTestDemo\Core\Content\TestDemo;

use Shopware\Core\Content\Media\MediaDefinition;
use Shopware\Core\Content\Product\ProductDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\Field\BoolField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\FkField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\IdField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\ManyToOneAssociationField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\OneToOneAssociationField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;
use Shopware\Core\Framework\DataAbstractionLayer\EntityDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\Field\StringField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Required;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\PrimaryKey;
use Shopware\Core\System\Country\Aggregate\CountryState\CountryStateDefinition;
use Shopware\Core\System\Country\CountryDefinition;

class TestDemoDefination extends EntityDefinition
{
    public const ENTITY_NAME = 'first_test_demo';
    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    public function getCollectionClass(): string
    {
        return TestDemoCollection::class;
    }

    public function getEntityClass(): string
    {
        return TestDemoEntity::class;
    }

    protected function defineFields(): FieldCollection
    {
        return new FieldCollection(
            [
                (new IdField('id', 'id'))->addFlags(new Required(), new PrimaryKey()),
                (new StringField('name', 'name'))->addFlags(new Required()),
                (new StringField('city', 'city'))->addFlags(new Required()),
                new BoolField('active', 'active'),
                new FkField('country_id','country',CountryDefinition::class),
                new FkField('country_state_id','state',CountryStateDefinition::class),
                new FkField('media_id','media',MediaDefinition::class),
                new FkField('product_id','product',ProductDefinition::class),

                // associations
                new ManyToOneAssociationField(
                    'country',
                    'country_id',
                    CountryDefinition::class,
                    'id',
                    false
                ),

                new ManyToOneAssociationField(
                    'state',
                    'country_state_id',
                    CountryStateDefinition::class,
                    'id',
                    false
                ),

                new OneToOneAssociationField(
                    'media',
                    'media_id',
                    'id',
                    MediaDefinition::class,
                    false
                ),

                new ManyToOneAssociationField(
                    'product',
                    'product_id',
                    ProductDefinition::class,
                    'id',
                    false
                )
            ]
        );
    }
}
