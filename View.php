<?php
class View
{
    public function render($id, $nome)
    {
        echo 'Código do cliente: ' . $id;
        echo '<br />';
        echo 'Nome: ' . $nome;
    }
}
