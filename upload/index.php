<head>
<title>DoodTube - Upload</title>
</head>
<body>
<ul>
  <li><a href="index.html">Home</a></li>
  <li><a href="likes">Likes</a></li>
  <li><a href="contact.asp">Contact</a></li>
  <li><a href="about.asp">About</a></li>
</ul>
<form action="upload.php" method="post" enctype="multipart/form-data">
    Upload Video
    <input type="file" name="fileToUpload" id="fileToUpload">
</form>
</body>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    float: left;	
    width: 200px;
    background-color: #f1f1f1;
}

li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}

/* Change the link color on hover */
li a:hover {
    background-color: #555;
    color: white;
}
</style>