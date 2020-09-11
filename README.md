# apiEntrevista
#####################################################################################################

Obs: Está api em PHP foi realizada para fins de avaliação para entevista, por ser um teste não tem muitas validações e existem muitas 
coisas a serem melhoradas, porêm no básico é isso. Foi construída em GET para ter a possibilidade de ser testada totalmente via navegador,
sem nenhuma necessidade de codificar nada em nenhuma linguagem.

PS: Na parte de edição por eu não ter colocado validações, se você não preencher todos requisitos da API ele pode zerar o campo não
preenchido no banco em caso de MariaDB por exemplo.
Você consegue usar essa API no caso do PHP com o curl em modo GET, caso não saiba procure pelo termo e achará várias coisas relacionadas.
Criado por: Rodrigo Walckiers
Email: rodrigowalckiers@gmail.com
####################################################################################################

//Instruções
Suba o arquivo "db.sql" no seu banco de dados, no arquivo "index.php" existe um token padrão criptografado em md5, para ver o token ou alterar é só abrir e mudar o valor do token.
Todas as requisições devem ter o atributo "token" no GET como valor, caso o token não seja correpondente a API não funcionará. Configure o 
banco de dados no arquivo "config.php" dentro da pasta includes. Siga abaixo os exemplos de como utilizar

//Módulos

  #Clientes
    
    -Buscar
        -Todos = http://seudominio.com/api/clientes/buscar?token={token}
        -ID = http://seudominio.com/api/clientes/buscar?token={token}&cpf={cpfUsuario}
    
    -Inserir = http://seudominio.com/api/clientes/inserir?token={token}&nome={nmUsuario}&cpf={cpfUsuario}&endereco={endereco} 
    
    -Editar = http://seudominio.com/api/clientes/editar?token={token}&id={id}&nome={nmUsuario}&cpf={cpfUsuario}&endereco={endereco}
    
    -Deletar = http://seudominio.com/api/clientes/deletar?token={token}&id={id}
    
  #Veiculos
    
    -Buscar
        -Todos = http://seudominio.com/api/locacao/buscar?token={token}
        -ID = http://seudominio.com/api/locacao/buscar?token={token}&placa={placaVeiculo}
    
    -Inserir = http://seudominio.com/api/locacao/inserir?token={token}&placa={placa}&modelo={modelo}&ano={ano}&cor={cor}&preco={preco} //Formato do preço: 65,00
    
    -Editar = http://seudominio.com/api/locacao/editar?token={token}&id={idVeiculo}&placa={placa}&modelo={modelo}&ano={ano}&cor={cor}&preco={preco}&aluguel={statusAluguel} //Status do aluguel é "0" para não alugado e "1" para alugado
    
    -Deletar = http://seudominio.com/api/veiculos/deletar?token={token}&id={id}
    
  #Locacao
    
    -Buscar
        -Todos = http://seudominio.com/api/locacao/buscar?token={token}
        -ID = http://seudominio.com/api/locacao/buscar?token={token}&cod={codLocacao}
    
    -Inserir =http://seudominio.com/api/locacao/inserir?token={token}&cod={codLocacao}&cpf={cpfLocacao}&dtInicio={dtInicio}&preco={precoTotal}&placa={placa}&status={statusLocacao} //Status da locação em varchar, pode escrever o status que desejar
    
    -Editar = http://seudominio.com/api/locacao/editar?token={token}&id={idLocacao}&cod={codLocacao}&cpf={cpfLocacao}&dtInicio={dtInicio}&preco={precoTotal}&placa={placa}&status={statusLocacao} //Status da locação em varchar, pode escrever o status que desejar
    
    -Deletar = http://seudominio.com/api/locacao/deletar?token={token}&id={id}

