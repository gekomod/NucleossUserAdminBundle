<?php

declare(strict_types=1);

/*
 * This file is part of the NucleosUserAdminBundle package.
 *
 * (c) Christian Gripp <mail@core23.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nucleos\UserAdminBundle\Tests\Action;

use Nucleos\UserAdminBundle\Action\LogoutAction;
use PHPUnit\Framework\TestCase;
use RuntimeException;

final class LogoutActionTest extends TestCase
{
    public function testAction(): void
    {
        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage('You must activate the logout in your security firewall configuration.');

        $action = new LogoutAction();
        $action();
    }
}