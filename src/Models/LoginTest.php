<?php

namespace App\Tests;


use App\Models\Logins;

class LoginTest extends \PHPUnit_Framework_TestCase
{

    public $Log;

    public function setUp()
    {
        parent::setUp();
        $this->Log = new Logins();
    }

    public function testPago()
    {
        $sum = $this->Log->sum($a, $b);
        $this->assertEquals($c, $sum);
    }

    public function testCliente()
    {
        $clientes = $this->Log->logCliente("Cliente");
        $this->assertEquals("Cliente", $clientes);
        //header('Location: /vistas/index.php');

    }


    public function testSinNombre()
    {
        $sinNombre = $this->Log->logSin("Sin Nombre");
        $this->assertEquals("Sin Nombre", $sinNombre);
        //header('Location: /vistas/indexSin.php');
    }

    public function testAdmins()
    {
        $Administradores = $this->Log->logAdmi("admi");
        $this->assertEquals("admi", $Administradores);
        //header('Location: /vistas/indexAdmin.php');
    }

    public function tearDown()
    {
        parent::tearDown();
        $this->Log = null;
    }
}