echo = 1. Updating CORE
cd /usr/local/www/elgg
echo -n '  '
git pull
echo
echo = 2. Updating modules
echo ===  2.1 updating event_calendar
echo -n '    '
cd /usr/local/www/elgg/mod/event_calendar
git pull
echo ===  2.2 updating file_tools
echo -n '    '
cd /usr/local/www/elgg/mod/file_tools
git pull
