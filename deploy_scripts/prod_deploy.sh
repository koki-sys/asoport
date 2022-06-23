#!/bin/bash
cd /home/service-user/projects/emovee
# ビルド時にパーミッションエラーになるため
chmod -R 777 docker/mysql/data

# イメージビルド&コンテナ起動
docker-compose down
docker-compose build
docker-compose up -d