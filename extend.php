<?php

/*
 * This file is part of fauzanazis/first-extension.
 *
 * Copyright (c) 2019 Fauzan Azis.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace FauzanAzis\First;

use Flarum\Extend;

return [
    
    (new Extend\Frontend('admin'))
        ->js(__DIR__.'/js/dist/admin.js')
        ->css(__DIR__.'/resources/less/admin.less'),
    
];
