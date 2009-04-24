<?php
class IndexControllerTest extends ControllerTestCase
{
    public function testIndexAction() {
        $this->dispatch('/');
        $this->assertController('index');
        $this->assertAction('index');
    }
    
    public function testErrorURL() {
        $this->dispatch('foo');
        $this->assertController('error');
        $this->assertAction('error');
    }
}