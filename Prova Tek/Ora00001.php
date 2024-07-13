<?php
class SeuClasse {

    public function getFornecedor() {

        $query = "INSERT INTO FORNECEDOR (ID, NOME, CNPJ, NOMEFANTASIA) VALUES (5, 'SADIA LTDA', '14.288.794/0001-45', 'SADIA')";

        try {
            $resultado = $conexao->exec($query);

            if ($resultado === false) {
                $infoErro = $conexao->errorInfo();
                if ($infoErro[0] == '23000' && $infoErro[1] == 1) {
                    echo "Erro: Já existe um registro com esse ID.\n";
                } else {
                    echo "Erro ao executar a query: " . $infoErro[2] . "\n";
                }
            } else {
                echo "Inserção realizada com sucesso.\n";
            }

        } catch (PDOException $e) {

            echo "Erro de PDO: " . $e->getMessage() . "\n";
        }
    }
}

$objeto = new SeuClasse();
$objeto->getFornecedor();
?>
