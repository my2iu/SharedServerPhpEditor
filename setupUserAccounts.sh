while read -r name password; do
	echo "Settup up user" $name
	useradd -m $name
	echo -n $password > /home/$name/public_html/edit/password
done < userpasswords.txt
