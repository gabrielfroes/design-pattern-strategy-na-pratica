# Aplicação do Design Pattern STRATEGY

Esse é apenas um exemplo prático de como identificar e aplicar o padrão de projeto *Strategy*.
Simulamos nesse exemplo um pedaço de uma Loja Virtual em que teria algumas libs externas para cálculo de frete de algumas empresas como: Correios, Fedex, DHL, TNT e etc.

**Aviso:** Importante frisar que o cálculo do frete não é real em nosso exemplo e serve apenas para ilustração.

Nesse projeto estamos utilizando a linguagem PHP porém o conceito pode ser aplicado a qualquer linguagem com suporte ao paradigma de orientação a objetos.

## Instalação

Adicionamos ao projeto o arquivo `Dockerfile` e o `docker-compose.yml` caso queira rodar o código em ambiente containerizado.

Para rodar o container basta usar o comando:

```bash
docker-compose -f "docker-compose.yml" up -d --build
```

## Vídeo Aula

Para entender melhor o código desse repositório e nossas explicações sobre o pattern *Strategy* no Youtube é só [assistir ao nosso vídeo no Código Fonte TV](https://youtu.be/qRljs4EyvLE).

## Autores

* **Gabriel Froes** - [Twitter](https://www.twitter.com/gabrielfroes)
* **Vanessa Weber** - [Twitter](https://www.twitter.com/nessaweberfroes)