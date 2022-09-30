# rogerdev

1. [ ] Run project

`docker-compose up -d`

`docker build --pull --rm -f "Dockerfile" -t gcr.io/developer-roger/instance-1 "."`

localhost:8000

To delete all containers run the command `docker rm $(docker ps -a -q)`

You can run `docker-compose down` command to bring everything gracefully down.

To delete all containers run the command `docker rm $(docker ps -a -q)`

To delete all images run the command `docker rmi $(docker images -q)`

I highly encourage you to go thru the documentation of both `docker` and `docker-compose` commands for other options

* [ ] #Deploy to GCP
*  docker build . -t gcr.io/developer-roger/instance-1:latest
docker image push --all-tags gcr.io/developer-roger/instance-1:latest
* `gcloud auth login` & choose your account
* `gcloud auth configure-docker`
* `docker -- push rogerdev`
* `docker push gcr.io/developer-roger/instance-1`
`docker pull gcr.io/developer-roger/instance-1`
* `docker run --name roger --rm -d -p 80:80 gcr.io/developer-roger/instance-1`

docker run --name mysql-demo -e MYSQL_ROOT_PASSWORD=123456789 -d mysql:latest
<!-- docker run --rm   --name db  -e MYSQL_ROOT_PASSWORD=abc123 -it db -->


docker inspect -f '{{range.NetworkSettings.Networks}}{{.IPAddress}}{{end}}' mysql-demo
mysql -h 172.17.0.3 -P 3306 --protocol=tcp -u root -p
baeldung

 docker image tag myimage registry-host:5000/myname/myimage:latest
