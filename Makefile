artisan_cmd:
	docker-compose exec \
	app \
	php artisan --verbose $(cmd)

migration_generate:
	$(MAKE) artisan_cmd cmd=migrate

migration_rollback:
	$(MAKE) artisan_cmd cmd=migrate:rollback

migration_fresh:
	$(MAKE) artisan_cmd cmd=migrate:fresh

seed_db:
	$(MAKE) artisan_cmd cmd=db:seed

tinker:
	$(MAKE) artisan_cmd cmd=tinker

init_db:
	$(MAKE) artisan_cmd cmd=migrate:fresh
	$(MAKE) artisan_cmd cmd=db:seed

clear_caches:
	docker-compose exec \
	app
	$(MAKE) artisan_cmd cmd=config:clear
	$(MAKE) artisan_cmd cmd=cache:clear
	$(MAKE) artisan_cmd cmd=route:clear
	$(MAKE) artisan_cmd cmd=config:cache
