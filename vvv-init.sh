echo "Creating database 'textmapping' (if it does not exist)..."

mysql -u root --password=root -e "CREATE DATABASE IF NOT EXISTS \`textmapping\`"
mysql -u root --password=root -e "GRANT ALL PRIVILEGES ON \`textmapping\`.* TO wp@localhost IDENTIFIED BY 'wp';"

if [ ! -d "htdocs" ]; then
	echo 'Installing WordPress (release version) in textmapping/htdocs...'
	mkdir ./htdocs
cd ./htdocs
	wp core download --allow-root 
	wp core config --dbname="textmapping" --dbuser=wp --dbpass=wp --dbhost="localhost" --allow-root
	wp core install --url=textmapping.dev --title="textmapping - A WordPress Site" --admin_user=admin --admin_password=password --admin_email=demo@example.com --allow-root
		cd -
else
	echo 'Updating WordPress in textmapping/htdocs...'
	wp core update --allow-root
	wp core update-db --allow-root
fi
