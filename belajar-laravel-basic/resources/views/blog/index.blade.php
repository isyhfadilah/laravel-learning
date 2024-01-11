<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<div class="flex flex-col justify-center items-center space-y-2 py-56">
    <h1 class="text-xl font-bold text-start">It Is a Blog</h1>
    <h1 class="text-2xl font-semibold capitalize"><?php echo $headline; ?></h1>
    <p class="w-1/2 text-center"><?php echo $description; ?></p>
</div>
    
</body>
</html>