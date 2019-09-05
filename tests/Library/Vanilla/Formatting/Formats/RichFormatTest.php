<?php
/**
 * @author Adam Charron <adam.c@vanillaforums.com>
 * @copyright 2009-2019 Vanilla Forums Inc.
 * @license GPL-2.0-only
 */

namespace VanillaTests\Library\Vanilla\Formatting\Formats;

use Vanilla\Contracts\Formatting\FormatInterface;
use Vanilla\Formatting\Formats\RichFormat;
use Vanilla\Formatting\Quill\Parser;
use VanillaTests\Fixtures\Formatting\FormatFixtureFactory;

/**
 * Tests for the RichFormat.
 */
class RichFormatTest extends AbstractFormatTestCase {

    /**
     * @inheritDoc
     */
    protected function prepareFormatter(): FormatInterface {
        self::container()->rule(Parser::class)
            ->addCall('addCoreBlotsAndFormats');
        return self::container()->get(RichFormat::class);
    }

    /**
     * @inheritDoc
     */
    protected function prepareFixtures(): array {
        return (new FormatFixtureFactory('rich'))->getAllFixtures();
    }
}
