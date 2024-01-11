<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<section class="pt-56 mx-56">
    <div class="flex items-center justify-center">
        <img src="<?php echo $img; ?>" alt="" class="w-1/6 rounded-xl mr-10 ">
        <div class="flex flex-col space-y-2 w-1/2">
            <h1 class="text-lg font-bold">About Me</h1>
            <h3 class="text-xl font-semibold">I'm <?php echo $name; ?></h3>
            <p class="w-full">I'm a <?php echo $position; ?>. I have a strong foundation in basic programming and experience in developing attractive user interfaces for websites.</p>
        </div>
    </div>
</section>
    
</body>
</html>