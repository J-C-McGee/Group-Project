 <!DOCTYPE html>
<html lang="en">
<head>

    <link  href="/css/styles"rel ="stylesheet" >
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind CSS Card Grid</title>
    <!-- Include the Tailwind CSS stylesheet -->
<!--<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
--><style>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<div class="container mx-auto mt-8">
    <!-- makes auto matic grid with padding-->
    <div class="grid grid-cols-2 gap-8">

        <div class="bg-white rounded-lg overflow-hidden shadow-lg">
            <img src="/img/E-Learning.jpg" class="w-full h-48 object-cover" alt="Placeholder Image">
            <div class="p-4">
                <h5 class="text-xl font-semibold mb-2">HTML: Tag Basics</h5>
                <p class="text-gray-700">HTML Basics. Learn how the basics of tags and how to use different types in your web page build. </p>
                <a href="/courses" class= "p-8 text-blue-500 hover:underline"> Start Course</a>
            </div>
        </div>

        <div class="bg-white rounded-lg overflow-hidden shadow-lg">
            <img src="/img/CSS Course Pic.jpg" class="w-full h-48 object-cover" alt="Placeholder Image">
            <div class="p-4">
                <h5 class="text-xl font-semibold mb-2">CSS:Style Sheets Basics</h5>
                <p class="text-gray-700">Learn how to use style sheets in your web page.</p>
                <a href="/courses" class= "p-8 text-blue-500 hover:underline"> Start Course</a>
            </div>
        </div>

        <div class="bg-white rounded-lg overflow-hidden shadow-md">
            <img src="/img/E-Learning.jpg" class="w-full h-48 object-cover" alt="Placeholder Image">
            <div class="p-4">
                <h5 class="text-xl font-semibold mb-2">Javasript Fundamentals</h5>
                <p class="text-gray-700">Learn the basics of javascript and how to make your web page more dynamic.</p>
                <a href="/courses" class= "p-8 text-blue-500 hover:underline"> Start Course</a>
            </div>
        </div>

        <div class="bg-white rounded-lg overflow-hidden shadow-md">
            <img src="/img/E-Learning.jpg" class="w-full h-48 object-cover" alt="Placeholder Image">
            <div class="p-4">
                <h5 class="text-xl font-semibold mb-2">JQuery Basics</h5>
                <p class="text-gray-700">Learn how to use JQuery to add animations and effects to your web page utilizing Jquerys extensive library. </p>
                <a href="{{url('courses.index')}}" class= "p-8 text-blue-500 hover:underline"> Start Course</a>
            </div>
        </div>

    </div>
</div>

</body>
</html>