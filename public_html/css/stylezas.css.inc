html,
body {
    height: 100%;
    margin: 0;
}

* {
    font-family: 'Open Sans', sans-serif;
}

.header {
    background-color: rgba(8, 26, 68, 0.897);
    height: 90px;
    display: flex;
    color: white;
    flex-direction: row;
    justify-content: space-between;
    padding-left: 20px;
    padding-right: 20px;
    text-decoration: none;
    position: fixed;
    top:0px;
    width: 100%;
}

.header_logo {
    display: flex;
    flex-direction: row;
    align-items: center;
    text-decoration: none;
}

.header_btns {
    display: flex;
    flex-direction: row;
    align-items: center;
    text-decoration: none;
    padding-right: 30px;

}


}

.logo {
    margin-right: 30px;
}

.logo img {
    width: 70px;
}

.btn {
    padding: 20px;
}

.btn:hover {
    background-color: white;
    color: black;
    padding: 20px;

}

.middle {
    background: url(https://abrilexame.files.wordpress.com/2017/06/sd_2606.jpg?quality=70&strip=info&w=1000&h=666&crop=1) no-repeat center center fixed;
    background-size: cover;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
}

.middlebox {
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: rgba(245, 222, 179, 0.863);
    height: 230px;
    width: 800px;
    color: rgb(58, 128, 116);
    ;
}

.footer {
    background-color:rgba(8, 26, 68, 0.897);
    color: white;
    justify-content: center;
    align-items: center;
    display: flex;
    position: fixed;
    bottom: 0px;
    width: 100%;
}
.invert { filter: invert(100%); }

.error_index  {
	color:red;
	text-decoration:underline;
	text-align:center;
	font-size:20px;

}

.success_index {
	color:green;
	text-decoration:underline;
	text-align:center;
	font-size:20px;
}
