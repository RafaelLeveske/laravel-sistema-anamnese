<p align="center">
<h1>Sistema de Anamnese</h1>
Repositório do GitHub: https://github.com/RafaelLeveske/Sistema-de-anamnese-PHP-v2
<h2>Como executar o projeto</h2>
</p>

*   Instalar um Editor de Texto/IDE ([Visual Studio Code](https://code.visualstudio.com/download), [Notepad++](https://notepad-plus-plus.org/download/v7.7.html)), [MySQL 5.7+](https://dev.mysql.com/downloads/mysql/5.7.html) (Ou driver de banco de dados de preferência), [PHP 7.2+](https://www.php.net/downloads.php) (Standalone ou parte de XAMPP, WAMP, etc)
*   Instalar o [composer](http://getcomposer.org)
*   Instalar uma ferramenta de git ([normal](https://git-scm.com/download/win), [git bash](https://gitforwindows.org/), [GitHub Desktop](https://desktop.github.com/))
*   Fazer o clone do projeto com o git (**não é para baixar o zip**), exemplo: git clone https://github.com/RafaelLeveske/Sistema-de-anamnese-PHP-v2.git
*   Navegar até a pasta que foi feito o clone e digitar os seguintes comandos:
1. composer install
2. Copiar o .env.example para .env e preencher os dados de conexão do banco de dados
3. Criar database no banco de dados com o nome que você criou no .env
4. agora digite o comando: php artisan key:generate no terminal, e digite o código que aparecer no .env APP_KEY=
5. Se você instalou o MariaDB ou uma versão anterior ao MySQL 5.7: [modificar o código conforme este link](https://laravel-news.com/laravel-5-4-key-too-long-error)
6. A partir daqui são os comandos que deverão ser executados sempre que mudar algo no banco:
7. php artisan migrate (ou php artisan migrate:fresh para atualizar o banco)
8. php artisan serve (roda a aplicação)
*   Acessar o localhost:8000, vá em registre-se no topo superior direito da tela e crie o login de usuário administrador, em seguida faça login na aplicação com as informações fornecidas.

<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of any modern web application framework, making it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 1100 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for helping fund on-going Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell):

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[British Software Development](https://www.britishsoftware.co)**
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Pulse Storm](http://www.pulsestorm.net/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
