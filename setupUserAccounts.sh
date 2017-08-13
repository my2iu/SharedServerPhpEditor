while read -r name password; do
	echo "Setting up user" $name
	useradd -m $name
	echo -n $password > /home/$name/password
	chmod go-r /home/$name/password
	chown $name:$name /home/$name/password
done < userpasswords.txt
