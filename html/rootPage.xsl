<?xml version="1.0"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
<xsl:output method="html" encoding="UTF-8" indent="yes" omit-xml-declaration="yes" doctype-system="about:legacy-compat"/>

<xsl:template match="users">
	<html>
		<head>
			<title>Shared PHP Editor Server</title>
			<style>
				div.account {
					font-size: 120%;
					margin-top: 0.5em;
				}
			</style>
		</head>
		<body>
			<h1>Shared PHP Editor Server</h1>
			<xsl:apply-templates/>
		</body>
	</html>
</xsl:template>

<xsl:template match="user">
	<div class="account">
		<a>
			<xsl:attribute name="href">~<xsl:value-of select="."/>/edit/</xsl:attribute>
			<xsl:value-of select="."/>
		</a>
	</div>
</xsl:template>

</xsl:stylesheet>
