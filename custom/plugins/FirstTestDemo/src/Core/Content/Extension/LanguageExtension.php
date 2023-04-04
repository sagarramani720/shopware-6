<?php declare(strict_types=1);

namespace FirstTestDemo\Core\Content\Extension;

use Shopware\Core\Framework\DataAbstractionLayer\EntityExtension;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\ApiAware;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Required;
use Shopware\Core\Framework\DataAbstractionLayer\Field\ManyToOneAssociationField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;
use Shopware\Core\System\Language\LanguageDefinition;

class LanguageExtension extends EntityExtension
{
    public function extendFields(FieldCollection $collection): void
    {
        $collection->add(
            (new ManyToOneAssociationField(
                'language',
                'language_id',
                LanguageDefinition::class,
                'id',
            ))->addFlags(new ApiAware(), new Required()),
        );
    }

    public function getDefinitionClass(): string
    {
        return LanguageDefinition::class;
    }
}
