cookbook_file "/srv/www/wp/current/wp-config.php" do
  source "wp-config.php"
  mode '0755'
  action :create
  owner 'deploy'
  group 'apache'
end
