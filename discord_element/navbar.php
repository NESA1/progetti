<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <style>
    /*
*               *
* Menu / Header *
* Menu / Header *
* Menu / Header *
* Menu / Header *
*               *
*/


ul {
  list-style-type: none;
}
a {
  color: white;
  text-decoration: none;
}
a:hover {
  text-decoration: underline;
}
.logo a:hover {
  text-decoration: none;
}
.menu li {
  font-size: 16px;
  padding: 15px 5px;
  white-space: nowrap;
}
.logo a,
.toggle a {
  font-size: 20px;
}
.button.secondary {
  border-bottom: 1px #444 solid;
}
/* Mobile menu */
.menu {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  align-items: center;
}
.toggle {
  order: 1;
}
.item.button {
  order: 2;
}
.item {
  width: 100%;
  text-align: center;
  order: 3;
  display: none;
}
.item.active {
  display: block;
  background-color: rgb(192, 79, 79);
  border-radius: 4px;
}
/* Tablet menu */
@media all and (min-width: 600px) {
  .menu {
    justify-content: center;
  }
  .logo {
    flex: 1;
  }
  .toggle {
    flex: 1;
    text-align: right;
  }
  .item.button {
    width: auto;
    order: 1;
    display: block;
  }
  .toggle {
    order: 2;
  }
  .button.secondary {
    border: 0;
  }
  .button a {
    padding: 7.5px 15px;
    background: teal;
    border: 1px #006d6d solid;
  }
  .button.secondary a {
    background: transparent;
  }
  .button a:hover {
    text-decoration: none;
  }
  .button:not(.secondary) a:hover {
    background: #006d6d;
    border-color: #005959;
  }
  .button.secondary a:hover {
    color: #ddd;
  }
}
body{
    background: rgb(31,33,49);
    }
    nav{
    font-family: sans-serif;
    background: #181925 !important; 
    padding: 5px 20px;

    }
    input[type=text] {
    width: 130px;
    -webkit-transition: width 0.3s ease-in-out;
    transition: width 0.3s ease-in-out;
    border-radius: 30px 0px 0px 30px;
    background: #2E304E;
    text-decoration: none;
    border: #000FFF;
    
    }

    input[type=text]:focus {
    width: 15%;
    border-radius: 30px 0px 0px 30px;
    background: #2E304E;
    text-decoration-color: #000FFF;
    border: #000FFF;
    
  }
  .button-search{
    
    background: #2E304E;
    border-radius: 0px 30px 30px 0px;
    height: 26px;
    border: none;
    }

/* Desktop menu */
@media all and (min-width: 900px) {
  .item {
    display: block;
    width: auto;
  }
  .toggle {
    display: none;
  }
  .logo {
    order: 0;
  }
  .item {
    order: 1;
  }
  .button {
    order: 2;
  }
  .menu li {
    padding: 15px 10px;
  }
  .menu li.button {
    padding-right: 0;
  }
}


  </style>
  <nav>
      <ul class="menu">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

      <li class="logo"><a href="#d">Discord Element</a>
      &nbsp;&nbsp;<a href="#">Home</a></li>
      <li class="item"><a href="#">Venstre</a></li>
      </li>
      <li class="toggle"><a href="#"><i class="fa fa-bars" id="bars"></i></a></li>
      </ul>
  </nav>
</body>
</html>