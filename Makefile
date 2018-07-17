up:
	docker-compose up -d

down:
	docker-compose down

bash:
	docker-compose exec wordpress bash

save:
	rm -rf plugins/snappy-list-builder-chollard
	cp wp/wp-content/plugins/snappy-list-builder-chollard/ plugins/ -R