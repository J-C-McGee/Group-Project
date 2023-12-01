 <!DOCTYPE html>
<html lang="en">
<head>

    <link  href="/css/styles"rel ="stylesheet" >
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind CSS Card Grid</title>
    <!-- Include the Tailwind CSS stylesheet -->
<!--<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
-->
</head>
<body class="bg-gray-100">

<div class="container mx-auto mt-8">
    <!-- makes auto matic grid with padding-->
    <div class="grid grid-cols-2 gap-8">

        <div class="bg-white rounded-lg overflow-hidden shadow-lg">
            <img src="/img/E-Learning.jpg" class="w-full h-48 object-cover" alt="Placeholder Image">
            <div class="p-4">
                <h5 class="text-xl font-semibold mb-2">Lesson 1</h5>
                <p class="text-gray-700">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="/courses" class= "p-8 text-blue-500 hover:underline"> Start Course</a>
            </div>
        </div>

        <div class="bg-white rounded-lg overflow-hidden shadow-lg">
            <img src="/img/E-Learning.jpg" class="w-full h-48 object-cover" alt="Placeholder Image">
            <div class="p-4">
                <h5 class="text-xl font-semibold mb-2">Lesson 2</h5>
                <p class="text-gray-700">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="/courses" class= "p-8 text-blue-500 hover:underline"> Start Course</a>
            </div>
        </div>

        <div class="bg-white rounded-lg overflow-hidden shadow-md">
            <img src="/img/E-Learning.jpg" class="w-full h-48 object-cover" alt="Placeholder Image">
            <div class="p-4">
                <h5 class="text-xl font-semibold mb-2">Lesson 3</h5>
                <p class="text-gray-700">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="/courses" class= "p-8 text-blue-500 hover:underline"> Start Course</a>
            </div>
        </div>

        <div class="bg-white rounded-lg overflow-hidden shadow-md">
            <img src="/img/E-Learning.jpg" class="w-full h-48 object-cover" alt="Placeholder Image">
            <div class="p-4">
                <h5 class="text-xl font-semibold mb-2">Lesson 4</h5>
                <p class="text-gray-700">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="{{url('courses.index')}}" class= "p-8 text-blue-500 hover:underline"> Start Course</a>
            </div>
        </div>

    </div>
</div>

</body>
</html>