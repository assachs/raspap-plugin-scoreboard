sudo mkdir -p /var/www/html/plugins
sudo cp -r ~/raspap-plugin-scoreboard/ScoreboardPlugin /var/www/html/plugins
sudo cp ~/raspap-plugin-scoreboard/files/sudoers/091_raspap_scoreboard /etc/sudoers.d/
sudo chown www-data /etc/scoreboard/match.json
rm -rf raspap-plugin-scoreboard