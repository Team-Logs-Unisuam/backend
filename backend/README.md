<h1> Principais comandos Laravel </h1>

- [Comandos](#comandos)
- [Artisan](#artisan) 
- [Migrations](#migrations)
- [Seeders](#seeders)
- [Tinker](#tinker)
- [Model](#model)
- [Controller](#controller)
- [Request](#request)
- [Middleware](#middleware)
- [Routes](#routes)
- [Views](#views)
- [Blade](#blade)
- [Auth](#auth)
- [Storage](#storage)
- [Helpers](#helpers)
- [Collections](#collections)
- [Eloquent](#eloquent)

## Comandos 

### Artisan 

- `php artisan list` - Lista todos os comandos disponíveis.
- `php artisan make:controller NomeController` - Cria um novo controller.
- `php artisan make:model NomeModel` - Cria um novo model.
- `php artisan make:request NomeRequest` - Cria um novo request.
- `php artisan make:middleware NomeMiddleware` - Cria um novo middleware.
- `php artisan make:seeder NomeSeeder` - Cria um novo seeder.
- `php artisan make:migration create_nome_tabela_table` - Cria uma nova migration.
- `php artisan migrate` - Executa todas as migrations pendentes.
- `php artisan migrate:rollback` - Reverte a última migração.
- `php artisan migrate:reset` - Reverte todas as migrações.
- `php artisan migrate:refresh` - Reverte e executa todas as migrações.
- `php artisan db:seed` - Executa todos os seeders.
- `php artisan tinker` - Inicia o tinker.

### Migrations 

- `php artisan make:migration create_nome_tabela_table` - Cria uma nova migration.
- `php artisan migrate` - Executa todas as migrations pendentes.
- `php artisan migrate:rollback` - Reverte a última migração.
- `php artisan migrate:reset` - Reverte todas as migrações.
- `php artisan migrate:refresh` - Reverte e executa todas as migrações.

### Seeders 

- `php artisan make:seeder NomeSeeder` - Cria um novo seeder.
- `php artisan db:seed` - Executa todos os seeders.

### Tinker 

- `php artisan tinker` - Inicia o tinker.

### Model 

- `php artisan make:model NomeModel` - Cria um novo model.

### Controller 

- `php artisan make:controller NomeController` - Cria um novo controller.

### Request 

- `php artisan make:request NomeRequest` - Cria um novo request.

### Middleware 

- `php artisan make:middleware NomeMiddleware` - Cria um novo middleware.

### Routes 

- `Route::get('/', function () { return view('welcome'); });` - Rota de exemplo.
- `Route::resource('nome', 'NomeController');` - Rota de recurso.

### Views 

- `return view('nome');` - Retorna a view nome.blade.php.

### Blade 

- `@yield('content')` - Define uma seção.
- `@section('content')` - Exibe uma seção.
- `@extends('layout')` - Herda um layout.
- `@include('nome')` - Inclui uma view.

### Auth 

- `php artisan make:auth` - Cria a autenticação.

### Storage 

- `Storage::disk('local')->put('file.txt', 'Contents');` - Armazena um arquivo.

### Helpers 

- `str_random(10)` - Gera uma string aleatória.

### Collections 

- `collect([1, 2, 3, 4])->all();` - Converte a coleção em um array.

### Eloquent 

- `Model::all();` - Retorna todos os registros.
- `Model::find(1);` - Retorna o registro com base no id.
- `Model::where('campo', 'valor')->get();` - Retorna os registros com base no campo e valor.
- `Model::create(['campo' => 'valor']);` - Cria um novo registro.
- `Model::update(['campo' => 'valor']);` - Atualiza os registros com base no campo e valor.
- `Model::delete();` - Deleta os registros.
- `Model::destroy(1);` - Deleta o registro com base no id.
- `Model::count();` - Retorna a quantidade de registros.
- `Model::orderBy('campo', 'asc')->get();` - Ordena os registros de forma ascendente.
- `Model::orderBy('campo', 'desc')->get();` - Ordena os registros de forma descendente.
- `Model::limit(10)->get();` - Limita a quantidade de registros.
- `Model::paginate(10);` - Pagina os registros.



