<?php

/**
 * webtrees: online genealogy
 * Copyright (C) 2022 webtrees development team
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <https://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

namespace Fisharebest\Webtrees\Module;

use Fisharebest\Webtrees\TestCase;

/**
 * Test harness for the class ChartsMenuModule
 *
 * @covers Fisharebest\Webtrees\Module\ChartsMenuModule
 */
class ChartsMenuModuleTest extends TestCase
{
    public function testClass(): void
    {
        $this->assertTrue(class_exists(\Fisharebest\Webtrees\Module\ChartsMenuModule::class));
    }
}