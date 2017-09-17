<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
require_once './src/AdictosTutorial.php';

class AdictosTutorialTest extends TestCase {
 
    public function testReturnGreeting() {
        $adictos = new AdictosTutorial();
        $this->assertEquals('Holaa Adictos Al Trabajo !!!', $adictos->greet());
    }
}

// exec:  
// phpunit tests/AdictosTutorialTest.php