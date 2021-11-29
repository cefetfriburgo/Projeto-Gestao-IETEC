<?php 
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class ProdutoTest extends TestCase
{
    public function testCriarProduto(): void
    {
        $produto = new Produto("garfo", 5.00);

        $this->assertEquals(
            $produto->getNome(),
            "garfo");

        $this->assertEquals(
            $produto->getValor(),
             5.00);
    }
};

?>