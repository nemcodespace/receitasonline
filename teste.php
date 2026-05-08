<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    body {
      background: linear-gradient(rgba(0,0,0,0.9),rgba(0,0,0,0.9)), url("./imgs/bolo_banana_sem_acucar1.avif") no-repeat;
      background-size: cover;
      color: white;
      width: 100vw;
      height: 100vh;
      margin: 0;
      padding: 0;
    }
    .box {
      width: 100%;
      height: 100px;
      background: radial-gradient( #13103d, blue);
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
    }
    .box button {
      background: rgba(0,0,0,0.2);
      color: gray;
      margin: 10px;
      border: 1px solid gray;
      outline: none;
      padding: 5px 20px;
      border-radius: 10px;
    }
    
  </style>
</head>
<body>
  <div class="box">
    aqui o box
    <button>Enviar</button>
  </div>
</body>
</html>