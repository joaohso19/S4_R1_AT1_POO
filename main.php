<?php
require_once 'funcionarioClt.php';
require_once 'funcionarioPj.php';

$clt = new FuncionarioCLT("Ana", 3000, "123.456.789-00", 300);
$pj  = new FuncionarioPJ("Bruno", 50, 160, 200);

echo $clt->contratar();
echo "Líquido: R$ " . $clt->salarioLiquido() . "\n";
echo $clt->demitir();

echo $pj->contratar();
echo "Total: R$ " . $pj->valorTotal() . "\n";
?>