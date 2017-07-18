# SharedServerPhpEditor
A little web-based PHP editor that's useful for setting up a server for teaching PHP. 

The goal is to let you set-up a Linux server with each student having a separate `public_html` user directory for their own website. This little PHP editor can then be dropped into their `public_html` directories, so all the students will have to do is visit their own website to find an online editor that they can use to create and edit PHP files. This way, a teacher only has to start-up a single teaching server in the cloud somewhere, let students practice their PHP there, and then the teacher can discard it right afterwards. Students don't have to install anything or learn anything about the Cloud or deal with server management etc. They just visit their website and can immediately start coding some PHP.

It's meant primarily for short interactive demo sessions or in-class tutorials about PHP. It's not a full-featured editor. It simply takes the [Eclipse Orion editor](https://wiki.eclipse.org/Orion/How_Tos/Editor_Build) and hooks it up to some simple server file management code.

Note: I don't actually know any PHP, so I suspect the code is pretty awful. I'm trying to set-up the code so that it's entirely client-based with the PHP server code merely providing an API that will be invoked by the JavaScript client.
