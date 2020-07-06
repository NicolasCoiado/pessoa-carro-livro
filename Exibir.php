<?php //Author: Nicolas Coiado;
    require_once 'Pessoa.php'; //Importando os códigos de Pessoa.php;
    require_once 'Carro.php'; //Importando os códigos de Carro.php;
    require_once 'Livro.php'; //Importando os códigos de Livro.php;

    $Pessoa1 = new Pessoa(); //Criando o objeto Pessoa1;
    $Pessoa1->setNome("Kanye West"); //Dando valor ao nome;
    $Pessoa1->setIdade(40); //Dando valor à idade;
    $Pessoa1->setPeso(80);  //Dando valor ao peso;
    $Pessoa1->setSexo("Masculino"); //Dando valor ao peso;

    $Carro1 = new Carro(); //Criando o objeto Carro1;
    $Carro1->setMarca("Chevrolet"); //Dando valor à marca;
    $Carro1->setCor("Vermelho"); //Dando valor à cor;
    $Carro1->setPlaca("PHP-0123"); //Dando valor à placa;
    $Carro1->setModelo("Celta"); //Dando valor ao carro;

    $Livro1 = new Livro(); //Criando o objeto livro1;
    $Livro1->setTitulo("JesusCopy: A revolução das cópias de Jesus "); //Dando valor ao tíulo;
    $Livro1->setAutor("Douglas Gonçalves"); //Dando valor ao autor;
    $Livro1->setAno(2016); //Dando valor ao ano;
    $Livro1->setEdicao(1); //Dando valor à edição;

    echo "Nome:". $Pessoa1->getNome() . "</br>" . "Idade:" . $Pessoa1->getIdade() . "</br>" . "Peso:" . $Pessoa1->getPeso() . "</br>" . "Sexo:" . $Pessoa1->getSexo() . "</br>"; //Exibindo atributos de $Pessoa1;
    echo "</br>"; //Inserindo quebra de linha;
    echo "Marca:". $Carro1->getMarca() . "</br>" . "Cor:" . $Carro1->getCor() . "</br>" . "Placa:" . $Carro1->getPlaca() . "</br>". "Modelo:" . $Carro1->getModelo() . "</br>"; //Exibindo atributos de $Carro1;
    echo "</br>"; //Inserindo quebra de linha;
    echo "Título:". $Livro1->getTitulo() . "</br>" . "Autor:" . $Livro1->getAutor() . "</br>" . "Ano:" . $Livro1->getAno() . "</br>" . "Edição:" . $Livro1->getEdicao() . "</br>"; //Exibindo atributos de $Livros1;
?>