<?php
/**
 * @author Adam Charron <adam.c@vanillaforums.com>
 * @copyright 2009-2019 Vanilla Forums Inc.
 * @license GPL-2.0-only
 */

namespace VanillaTests\Fixtures;

use Vanilla\Contracts;
use Vanilla\Contracts\AddonInterface;

/**
 * Mock addon provider. All addons given to it are "enabled".
 *
 * @see MockAddon
 */
class MockAddonProvider implements Contracts\AddonProviderInterface {

    /** @var array MockAddon[] */
    private $addons = [];

    /**
     * MockAddonProvider Constructor.
     *
     * @param array $addons Addons to initialize with.
     */
    public function __construct(array $addons = []) {
        $this->addons = $addons;
    }

    /**
     * Push a single addon into the internal array.
     *
     * @param MockAddon $addon The addon to push.
     *
     * @return $this For fluent chaining.
     */
    public function pushAddon(MockAddon $addon) {
        $this->addons[] = $addon;
        return $this;
    }

    /**
     * @return array Get the addons.
     */
    public function getEnabled(): array {
        return $this->addons;
    }

    /**
     * Get theme addon by key
     *
     * @param int|string $themeKey Theme key or ID
     * @return AddonInterface|null Get theme addon.
     */
    public function lookupTheme($themeKey) {
        $addon = null;
        /** @var MockAddon $addon */
        foreach ($this->addons as $iterAddon) {
            if ($iterAddon->getKey() === $themeKey) {
                $addon = $iterAddon;
                break;
            }
        }
        return $addon;
    }
}
