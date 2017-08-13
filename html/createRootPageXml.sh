echo '<?xml version="1.0" encoding="UTF-8"?>'
echo '<?xml-stylesheet type="text/xsl" href="html/rootPage.xsl"?>'
echo "<users>"
while read -r name password; do
	echo "<user>"$name"</user>"
done 
echo "</users>"

