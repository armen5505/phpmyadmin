<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * tests for PhpMyAdmin\Properties\Options\Groups\OptionsPropertyMainGroup class
 *
 * @package PhpMyAdmin-test
 */

use PhpMyAdmin\Properties\Options\Groups\OptionsPropertyMainGroup;

/**
 * tests for PhpMyAdmin\Properties\Options\Groups\OptionsPropertyMainGroup class
 *
 * @package PhpMyAdmin-test
 */
class OptionsPropertyMainGroupTest extends PHPUnit_Framework_TestCase
{
    protected $object;

    /**
     * Configures global environment.
     *
     * @return void
     */
    protected function setup()
    {
        $this->object = new OptionsPropertyMainGroup();
    }

    /**
     * tearDown for test cases
     *
     * @return void
     */
    protected function tearDown()
    {
        unset($this->object);
    }

    /**
     * Test for PhpMyAdmin\Properties\Options\Groups\OptionsPropertyMainGroup::getItemType
     *
     * @return void
     */
    public function testGetItemType()
    {
        $this->assertEquals(
            'main',
            $this->object->getItemType()
        );
    }

}
