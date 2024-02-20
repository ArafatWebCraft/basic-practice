<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .container { 
            background-color: rgb(2, 201, 118); 
            color: white; 
        } 
  
        h2 { 
            text-align: center; 
        } 
    </style>
    @vite('resources/css/app.css')
</head>
<body class="text-center mx-4 space-y-2">  
    <h1 class="text-green-600 text-5xl font-bold">  
        GeeksforGeeks  
    </h1>  
    <b>Tailwind CSS Transition Duration Class</b>  
    <div class="bg-green-200 m-8 grid grid-flow-col gap-4 p-5">  
        <button class="transition duration-75 ease-in-out  
                       bg-green-300 hover:bg-green-600 transform  
                       hover:-translate-y-1 hover:scale-110  
                       rounded-lg p-4 border border-green-900"> 
            Hover me 
        </button> 
        <button class="transition duration-100 ease-in-out  
                       bg-green-300 hover:bg-green-600 transform  
                       hover:-translate-y-1 hover:scale-110  
                       rounded-lg p-4 border border-green-900"> 
            Hover me 
        </button> 
        <button class="transition duration-500 ease-in-out  
                       bg-green-300 hover:bg-green-600 transform  
                       hover:-translate-y-1 hover:scale-110  
                       rounded-lg p-4 border border-green-900"> 
            Hover me 
        </button> 
        <button class="transition duration-1000 ease-in-out  
                       bg-green-300 hover:bg-green-600 transform  
                       hover:-translate-y-1 hover:scale-110  
                       rounded-lg p-4 border border-green-900"> 
            Hover me 
        </button> 
    </div>  
</body>  
</html>