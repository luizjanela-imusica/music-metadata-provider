Music Metadata Provider
Processo Seletivo Claro Música Backend

Introdução

Este teste tem como objetivo avaliar as habilidades do candidato para o manejo de aplicações Backend e suas atividades corriqueiras: bugfix, novas funcionalidades, melhorias de performance e evolução.

A camada de APIs Music Metadata Provider tem como objetivo atuar como wrapper das APIs Last.fm (https://www.last.fm/api) executando chamadas e encapsulando lógicas e melhorias.

Avaliação

O candidato deverá fazer o download do projeto em URL_DO_PROJETO, instalar e configurar em sua máquina para efetuar os passos necessários para a conclusão do teste.

Em termos técnicos o Music Metadata Provider é uma aplicação PHP 8 que se utiliza do framework Code Igniter v4.1.3.

O candidato deverá usar como base e seguir o padrão já desenvolvido na API album/search e demais classes internas (Models, Dal, Library etc).

Questões

Abaixo seguem as demandas que deverão ser aplicadas nas APIs e em um segundo momento apresentadas para code review com os avaliadores do processo.

Gerar nova API Key junto a Last.fm para configurar no projeto
API album/search retorna apenas 1 elemento
Na API album/search validar o parâmetro value para não aceitar input vazio retornando o code HTTP_CODE_PARAM_ERROR em caso de erro
Na resposta da API album/search o atributo cover está retornando null
Desenvolver nova API GET chamada artist/details e agregar os Top 10 álbuns do artista na resposta
Desenvolver nova API GET chamada chart/top onde deverá ser retornado os 5 artistas mais populares juntamente com seu álbum mais popular

Seguem abaixo algumas questões bônus que não são obrigatórias para a entrega na entrega do teste, porém servem como diferencial para o candidato.

Questão bônus básica
A API album/search não aceita busca por termos com mais uma palavra. Exemplo: Moving Pictures, Hybrid Theory etc. Adaptar a Library e Controller para corrigir esse cenário.

Questão bônus avançada
Para a API chart/top deverá ser implementado cache de 1h do resultado visando melhorar o tempo de resposta.

Apresentação

O candidato deverá apresentar em call com os avaliadores as soluções aplicadas e também documentar os novos serviços desenvolvidos apresentados seus endpoints e responses.

O candidato deverá efetuar o upload do teste na ferramente Github e enviar por e-mail o link para análise do material produzido.


Material de Apoio

Seguem alguns links que ajudarão o candidato na execução do teste:

https://codeigniter.com/user_guide/index.html
https://getcomposer.org/
https://www.last.fm/api





