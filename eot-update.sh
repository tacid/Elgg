my=`pwd`
script=`dirname $0`
dir=$my/$script
echo = 1. Updating CORE
cd $dir
echo -n '  '
git pull origin master
echo
echo = 2. Updating modules
for i in event_calendar file_tools widget_manager extended_tinymce embed_extender profile_manager izap-diskquota group_tools html_email_handler profileiconaccess editablecomments ; do
    echo === updating $i
    echo -n '    '
    cd $dir/mod/$i
    git pull
done
