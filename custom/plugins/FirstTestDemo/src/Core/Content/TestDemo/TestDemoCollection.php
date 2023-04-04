<?php

namespace FirstTestDemo\Core\Content\TestDemo;

use Shopware\Core\Framework\DataAbstractionLayer\EntityCollection;

/**
 * @method void               add(TestDemoCollection $entity)
 * @method void               set(string $key, TestDemoCollection $entity)
 * @method TestDemoCollection[]    getIterator()
 * @method TestDemoCollection[]    getElements()
 * @method TestDemoCollection|null get(string $key)
 * @method TestDemoCollection|null first()
 * @method TestDemoCollection|null last()
 */
class TestDemoCollection extends EntityCollection
{
    public function getExpectedClass(): string
    {
        return TestDemoEntity::class;
    }
}
