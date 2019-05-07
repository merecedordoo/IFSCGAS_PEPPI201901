SET PATH=%PATH%;C:\xampp\php
call bin\cake bake all categorias --force
call bin\cake bake all administradores --force
call bin\cake bake all designers --force
call bin\cake bake all paginas --force
call bin\cake bake all artigos --force
call bin\cake bake all projetos --force
call bin\cake bake all desfiles --force
call bin\cake bake model artigo_fotografias --force
call bin\cake bake model projeto_fotografias --force
call bin\cake bake model desfile_fotografias --force
