<?php

class Config{
    
    public $nomeLoja;
    public $endereco;
    public $cnpj;
    public $inscricaoEstadual;
    public $taxaDescontoA;
    public $taxaDescontoFJ;

    function Config(){
        $this->nomeLoja = "";
        $this->endereco = "";
        $this->cnpj = "";
        $this->inscricaoEstadual = "";
        $this->taxaDescontoA = "";
        $this->taxaDescontoFJ = "";


        $this->ler();
    }

    function Salvar()
    {
        #versao do encoding xml
        $dom = new DOMDocument("1.0", "ISO-8859-1");

        #retirar os espacos em branco
        $dom->preserveWhiteSpace = false;

        #gerar o codigo
        $dom->formatOutput = true;

        #criando o nó principal (root)
        $root = $dom->createElement("Loja");

        #nó filho (contato)
        $contato = $dom->createElement("Configuracao");

        #setanto nomes e atributos dos elementos xml (nós)
        $n = $dom->createElement("NomeLoja", "$this->nomeLoja");
        $e = $dom->createElement("Endereco", "$this->endereco");
        $c = $dom->createElement("CNPJ", "$this->cnpj");
        $i = $dom->createElement("IE", "$this->inscricaoEstadual");
        $a = $dom->createElement("TaxaDescontoA", "$this->taxaDescontoA");
        $fj = $dom->createElement("TaxaDescontoFJ", "$this->taxaDescontoFJ");

        #adiciona os nós (informacaoes do contato) em contato
        $contato->appendChild($n);
        $contato->appendChild($e);
        $contato->appendChild($c);
        $contato->appendChild($i);
        $contato->appendChild($a);
        $contato->appendChild($fj);

        #adiciona o nó contato em (root) agenda
        $root->appendChild($contato);
        $dom->appendChild($root);

        # Para salvar o arquivo, descomente a linha
        $dom->save("config.xml");

        #cabeçalho da página
        //header("Content-Type: text/xml");
        # imprime o xml na tela

        //print $dom->saveXML();
    }

    function ler()
    {
        try
        {
            $arquivo_xml = simplexml_load_file('config.xml');
            //leitor        nó filho       nó neto
            echo "".$arquivo_xml->Configuracao[0]->NomeLoja;

            $this->nomeLoja = $arquivo_xml->Configuracao[0]->NomeLoja;
        }
        catch(exception $e)
        {
            echo $e;
        }
    }
}
?>