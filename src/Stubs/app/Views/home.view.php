<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($data['title']) ?></title>
</head>
<body>
    <h1><?= htmlspecialchars($data['title']) ?></h1>
    <p><?= htmlspecialchars($data['message']) ?></p>
</body>
</html>