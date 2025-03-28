<?php

namespace Templates\Tailwind\Tests\Unit;

use Tests\TestCase;

class LayoutsRenderTest extends TestCase
{
    public $template_name = 'Tailwind';

    public function testRender()
    {

        $layout = '<module template="content.skin-1" id="mw-module-test-1" data-type="layouts"  />';
        $render = app()->parser->process($layout);
        $this->assertStringContainsString('id="background-layout--mw-module-test-1"', $render);
        $this->assertStringContainsString('layout-content-skin-1-mw-module-test-1-mw-module-test-1-btn', $render);

    }


}
