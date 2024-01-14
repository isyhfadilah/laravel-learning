<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<div class="flex flex-col items-center py-16">
    <div class="w-1/2">
        <div class="space-y-2">
            <h1 class="text-xl font-bold">It Is a Blog</h1>
            <h1 class="text-2xl font-semibold capitalize"><?php echo $headline; ?></h1>
            <p><?php echo $description; ?></p>
        </div>
        <img src="<?= $img; ?>" alt="<?= $img; ?>" class="w-full rounded-lg mt-6">
    </div>
</div>
    
</body>
</html>