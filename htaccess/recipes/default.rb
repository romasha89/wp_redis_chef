cookbook_file "/srv/www/wp/current/.htaccess" do
  source ".htaccess"
  mode '0775'
  action :create
  owner 'deploy'
  group 'apache'
end
