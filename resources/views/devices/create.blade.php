</<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>

</head>
<body>

<h1>Create </h1>

<div class="container">

    <form method="POST" name="myform"   onsubmit=" return myfunc()" action="/devicesaction">

        {{ csrf_field() }}

       <div>
          <label id="lable1">short</label>

          <input id="text1" type="text" name="name" placeholder="short" value="">

      </div>
      <div>
            <label id="lable2" >long</label>
            <textarea id="text2" name="description" placeholder="long" ></textarea>

      </div>
      <div>

            <input id="btn" type="submit" value="Make Device" onclick="myfunc()" >

      </div>

    </form>

 </div>
<script>


  function myfunc(){
  var short = "short";
  var long  = "long";

  var text1=document.myform.name.value;
  var text2=document.myform.description.value;
      if (text1 == short && text2 == long){
          alert('match');


      }else{
          alert('not');
      return false;
      }

  }


  </script>
  </body>
  </html>
