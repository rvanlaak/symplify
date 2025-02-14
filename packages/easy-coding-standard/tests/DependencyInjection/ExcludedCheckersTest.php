<?php

declare(strict_types=1);

namespace Symplify\EasyCodingStandard\Tests\DependencyInjection;

use Symplify\EasyCodingStandard\FixerRunner\Application\FixerFileProcessor;
use Symplify\EasyCodingStandard\Kernel\EasyCodingStandardKernel;
use Symplify\PackageBuilder\Testing\AbstractKernelTestCase;

final class ExcludedCheckersTest extends AbstractKernelTestCase
{
    protected function setUp(): void
    {
        $this->bootKernelWithConfigs(EasyCodingStandardKernel::class, [__DIR__ . '/ExcludedCheckersSource/config.php']);
    }

    public function test(): void
    {
        $fixerFileProcessor = $this->getService(FixerFileProcessor::class);
        $this->assertCount(0, $fixerFileProcessor->getCheckers());
    }
}
