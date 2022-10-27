{{-- AWS EC2へデプロイする予定なので、接続先を記述 --}}
@servers(['web' => ['ec2-user@44.197.127.22']])

{{-- serversで記述した「web」のサーバーを対象に、taskで囲った範囲のコマンドを[foo]として定義して実行する --}}
@task('deploy', ['on' => 'web'])
    cd asoport {{-- ここは環境に合わせて変更する --}}
    echo 'pulling......'
    git pull git@github.com:koki-sys/asoport.git
    echo 'pulled.'
    make prod
@endtask