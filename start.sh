docker-compose down;
git checkout v1;
docker-compose up -d;
echo "v1 server running at localhost:8888";
read -p "Press any key to continue... " -n1 -s

docker-compose down;
git checkout v2;
docker-compose up -d;
echo "v2 server running at localhost:8888";
read -p "Press any key to continue... " -n1 -s

docker-compose down;
git checkout v3;
docker-compose up -d;
echo "v3 server running at localhost:8888";
read -p "Press any key to continue... " -n1 -s