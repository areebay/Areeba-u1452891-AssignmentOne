<!DOCTYPE html>
<html lang="en">
<head>

  <!--Set style for title, text etc used for every page of this site-->
  <style>
  body {
    margin:0;
  }

  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 25%;
    background-color: #f1f1f1;
    position: fixed;
    height: 100%;
    overflow: auto;
    text-align: center;
    line-height: 220%;
    text-transform: uppercase;
    border-radius: 5px;
  }

  li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
  }

  li a.active {
    background-color: #000000;
    color: white;
    font-size: 16px;
    font-weight: bold;
    text-decoration: none;
  }

  li a:hover:not(.active) {
    background-color: #555;
    color: white;
    font-size: 16px;
    font-weight: bold;
    text-decoration: none;
    text-transform: uppercase;;
  }

  .titleOne {
    text-align: center;
    color: #000;
    font-size: 50px;
  }

  .titleTwo {
    font-size: 25px;
    text-align: center;
  }

  .button {
    background-color: #000000;
    color: #FFFFFF;
    cursor: pointer;
    padding: 12px;
    text-align: center;
    font-weight: bold;
    font-size: 15px;
    position:relative;

    transition: 0.4s;
    border-radius: 5px;
    text-transform: uppercase;
  }

  .button:hover {
    background-color: #555555;
    color:white;
    text-decoration: none;
  }

{{--style for dining.blade.php--}}

button.accordion {
  background-color: #d9edf7;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 25%;
  border:none;
  text-align: center;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
  border-radius: 5px;
  float: left;
  height: 115px;
  margin: 1.858736059%;
  width: 29.615861214%
}

button.accordion.active,
button.accordion:hover {
  background-color: #ddd;
}

div.panel {
  padding: 0 18px;
  display: none;
  background-color: white;
}

div.panel.show {
  display: block;
}

{{--location.blade.php--}}

.boxLocation {
  width: 40%;
  margin: 0 auto;
  background: rbga(255, 255, 255,0.2);
  padding:35px;
  border: 5px solid #fff;
  border-radius:20px/50px;
  background-clip: padding-box;
  text-align:center;
}

.overlay {
  position: fixed;
  top:0;
  bottom:0;
  left:0;
  right:0;
  background: rgba(0,0,0,0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}

.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
  margin: 70px auto;
  padding: 20px;
  background: #fff;
  border-radius:5px;
  width: 30%;
  text-align: center;
  position: relative;
  transition: all 0.5s ease-in-out;
}

.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}

.popup .close {
  position: absolute;
  top: 20px;
  right:30px;
  transition: all 200ms;
  font-size:30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}

.popup .close:hover {
  color:#000;
}

.popup .content {
  max-height:30%;
  overflow: auto;
}
@media screen and (max-width: 700px) {
  .box {
    width: 70%;
  }
  .popup{
    width:70%;
  }
}

{{--style for tariff.blade.php--}}

table a:link {
  color: #666;
  font-weight: bold;
  text-decoration: none;
}

table a:visited {
  color: #999999;
  font-weight: bold;
  text-decoration: none;
}

table a:active,
table a:hover {
  color:#bd5a35;
  text-decoration: underline;
}

table {
  font-family:Arial, Helvetica, sans-serif;
  color: #666
  font-size:12px;
  text-shadow: 1px 1px 0px #fff;
  background:#eaebec;
  border:#ccc 1px solid;

  -moz-border-radius:3px;
  -webkit-border-radius:3px;
  border-radius:3px;

  -moz-box-shadow:0 1px 2px #d1d1d1;
  -webkit-box-shadow:0 1px 2px #d1d1d1;
  box-shadow:0 1px 2px #d1d1d1;
}

table th {
  padding:21px 25px 25px;
  border-top:1px solid #fafafa;
  border-bottom:1px solid #e0e0e0;
  text-align: center;
  background: #ededed;
  background: -webkit-gradient(linear, left top, left bottom, from(#ededed), to(#ebebeb));
  background: -moz-linear-gradient(top, #ededed, #ebebeb);
}

table th: first-child {
  text-align: center;
  padding-left: 20px;
}

table tr: first-child th:first-child {
  -moz-border-radius-topleft:3px;
  -webkit-border-top-left-radius:3px;
  border-top-left-radius:3px;
}

table tr: first-child th:last-child {
  -moz-border-radius-topright:3px;
  -webkit-border-top-right-radius:3px;
  border-top-right-radius:3px;
}

table tr {
  text-align: center;
  padding-left:20px;
}

table td:first-child {
  text-align:center;
  padding-left:20px;
  border-left:0;
}

table td {
  padding:18px;
  border-top: 1px solid #ffffff;
  border-bottom: 1px solid #e0e0e0;
  border-left: 1px solid #e0e0e0;
  background: #fafafa;
  background: -webkit-gradient(linear, left top, left botoom, from(#fbfbfb), to(#fafafa));
  background: -moz-linear-gradient(top, #fbfbfb, #fafafa);
}

table tr.even td {
  background: #f6f6f6;
  background: -webkit-gradient(linear, left top, left bottom, from(#f8f8f8), to(#f6f6f6));
  background: -moz-linear-gradient(top, #f8f8f8, #f6f6f6);
}

table tr:last-child td {
  border-bottom: 0;
}

table tr:last-child td:first-child {
  -moz-border-radius-bottomleft:3px;
  -webkit-border-bottom-left-radius:3px;
  border-bottom-left-radius:3px;
}

table tr:last-child td:last-child {
  -moz-border-radius-bottomright:3px;
  -webkit-border-bottom-right-radius:3px;
  border-bottom-right-radius:3px;
}

table tr:hover td {
  background: #f2f2f2;
  background: -webkit-gradient(linear, left top, left botoom, from(#f2f2f2), to(#f0f0f0));
  background: -moz-linear-gradeint(top, #f2f2f2, #f0f0f0);
}

{{--style for welcome page--}}
.box-set {
  background: #d9edf7;
  overflow: auto;
  height:230px;
}

.boxWelcome {
  background: #fff;
  float: left;
  height: 200px;
  margin: 1.858736059%;
  width: 29.615861214%
}

.boxWelcomeText {
  text-align: center;
}

.boxWelcomeTitle{
  text-align: center;
  color: #000;
  font-size: 16px;
      text-transform: uppercase;
}

.boxButton {
 background-color: #000000;
 color: #FFFFFF;
 cursor: pointer;
 padding: 10px;
 width: 300%;
 border:none;
 text-align: center;
font-weight: bold;
 font-size: 12px;
 transition: 0.4s;
 border-radius: 5px;
 position: relative;
 text-decoration: none;
 left:85px;
 -webkit-transition-duration: 0.4s;
 transition-duration: 0.4s;
}

.boxButton:hover {
  background-color: #555555;
  color:white;
  text-decoration: none;
}

  </style>
</head>

<!--navigation-->
<body>
  <ul>
  <li>
    <a class="active" href="/">Home</a>
  </li>
  <li>
    <a href="accommodation">Accommodation</a>
  </li>
  <li>
    <a href="dining">Dining</a>
  </li>
  <li>
    <a href="location">Location</a>
  </li>
  <li>
    <a href="tariff">Tariff</a>
  </li>
  <li>
    <a href="index">View and add feedback</a>
  </li>
  </ul>

</body>
</html>
