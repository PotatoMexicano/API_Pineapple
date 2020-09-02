
# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://poser.pugx.org/laravel/lumen-framework/d/total.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/lumen-framework/v/stable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://poser.pugx.org/laravel/lumen-framework/license.svg)](https://packagist.org/packages/laravel/lumen-framework)

## About "Pineapple API"

Pineapple API é uma API externa do projeto [Pineapple](https://github.com/PotatoMexicano/Web_Pineapple) que foi desenvolvida usando o Lumen, um microframework PHP, pode considera-lo um filho do Laravel.
O projeto original Pineapple já possui uma API interna, porem não tão completa como esta.



    Login API
    {
    "message": "Login OK",
    "data": {
    "user": { "name": "admin"}
    },
    "token": "TlRsTG5HY3dHbUJQaUJJSTOKENTOKENE45YkVkdmMxMld4ZA=="
    }
    
 - [x] *para qualquer comando é necessario informar o api_token do usuario logado.*
 - [x] *Mensagem de erro caso api_token invalido*

Exemplos: 

 - Update vehicle, é possivel atualizar qualquer dado a respeito do veiculo
> /api/cars/1?type=**jeep**&color=**white**
> 
 - Listagem, o ID_VEHICLE é opcional, sem este argumento todos os
   veiculos serão apresentados
> /api/cars/**{ID_VEHICLE}**

Para acessar o projeto Pineapple:  [**Pineapple**](http://oihi.ddns.net:8181/)

Para utilizar a API: 

> php artisan serve --host={IP} --port={porta}

Para acessar outro projeto:  [**Safewalk**](http://oihi.ddns.net:8585/)

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
