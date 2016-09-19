<?php

/*
 * This file is part of the Composer Inheritance plugin.
 *
 * Copyright (C) 2016 Théo FIDRY <theo.fidry@gmail.com>
 *
 * This software may be modified and distributed under the terms of the MIT
 * license. See the LICENSE file for details.
 */

namespace Fidry\Composer\InheritancePlugin\Merge;

/**
 * @author Théo FIDRY <theo.fidry@gmail.com>
 */
final class ExtraPackage extends \Wikimedia\Composer\Merge\ExtraPackage
{
    /**
     * @inheritdoc
     */
    protected function mergeOrDefer(
        $type,
        array $origin,
        array $merge,
        $state
    ) {
        unset($merge['fidry/composer-inheritance-plugin']);

        return parent::mergeOrDefer($type, $origin, $merge, $state);
    }

}
