{{-- AWS EC2へデプロイする予定なので、接続先を記述 --}}
@servers(['web' => ['ec2-user@44.197.127.22']])

{{-- serversで記述した「web」のサーバーを対象に、taskで囲った範囲のコマンドを[foo]として定義して実行する --}}
@task('deploy', ['on' => 'web'])
    cd ~ {{-- ここは環境に合わせて変更する --}}
    git clone git@github.com:koki-sys/asoport.git
    cd asoport
    docker-compose down
    docker-compose up -d --build
    docker-compose exec app composer install
    docker-compose exec app npm install
    docker-compose exec app cp .env.example .env
    docker-compose exec app php artisan key:generate
    docker-compose exec app php artisan storage:link
    docker-compose exec app chmod -R 777 storage bootstrap/cache
    docker-compose exec app chmod -R 777 storage framework/
    docker-compose exec app php artisan migrate:fresh --seed
@endtask