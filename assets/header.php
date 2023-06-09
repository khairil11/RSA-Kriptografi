<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Algoritma RSA</title>
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;font-size: 16px; margin: 30px;}
tr, td {
  padding: 15px;
  vertical-align: top;
  text-align: left;
}

.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 20%;
  min-height: auto;

}

.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

.tab button:hover {
  background-color: #ddd;
}

.tab button.active {
  background-color: #ccc;
}

.tabcontent {
  float: left;
  padding: 12px 12px;
  border: 1px solid #ccc;
  width: 80%;
  max-width: 80%;
  min-height: auto;
}
textarea{
    resize:none;
    font-size: 15px;
    min-height: 75px;
    max-height: 75px;
    overflow-y: auto;
    width: 100%;
    min-width: 100%;
    max-width: 100%;
    padding: 15px;
    margin: 5px 0 5px 0;
    display: inline-block;
    border: none;
    background: #f5F5F5;
}
* {box-sizing: border-box}

.container {
  padding: 16px;
}
a{text-decoration:none}

input[type=text],input[type=number]{
  width: 100%;
  font-size: 15px;
  padding: 15px;
  margin: 5px 0 5px 0;
  display: inline-block;
  border: none;
  background: #F5F5F5;
}

input[type=text]:focus,input[type=number]:focus,textarea:focus{
  background-color: #ddd;
  outline: none;
}


hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}


.submit {
  font-size: 17px;
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.submit:hover {
  opacity:1;
}

a {
  color: dodgerblue;
}
.wrap{
  margin: 10px auto;
  width: 950px;
  padding: 20px;
  color: #fff;
  background: #35A9DB;
  text-align: justify;
}
 
::-webkit-scrollbar {
    width: 5px;
}
 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);     
    background: #666;    
}
 
::-webkit-scrollbar-thumb {
    background: #232323;
}
</style>
</head>
<body>
<h2 align="center">KRIPTOGRAFI MENGGUNAKAN ALGORITMA RSA</h2>