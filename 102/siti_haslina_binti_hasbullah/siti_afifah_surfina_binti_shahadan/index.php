<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Family Tree: Siti Afifah Surfina Binti Shahadan</title>
    <link rel="stylesheet" href="/styles.css">
     <link rel="stylesheet" href="/gallery.css">
</head>
<body>
    <a href="/102/siti_haslina_binti_hasbullah/">Up</a>
    <div class="family-tree">
        <div class="person">
            <img src="/images/female-grey-icon.png" height="100px" alt="icon">
            <div>Siti Afifah Surfina Binti <a href="/101/halijah_binti_ahmad/shahadan_bin_saad/">Shahadan</a></div>
        </div>
    </div>
    
    <?php
$dir = '.'; // Change this to the path of your images folder
$images = glob($dir . '/image*.jpg');

echo '<div class="bottom-section">';
echo '<ul class="gallery">';

foreach ($images as $image) {
    $imageName = basename($image);
    echo '<li class="thumbnail">';
    echo '<img src="' . $imageName . '" alt="' . $imageName . '">';
    echo '<ul class="popup">';
    echo '<li><img src="' . $imageName . '" alt="' . $imageName . '"></li>';
    echo '<li>';
    echo '<button class="close-button">Close</button>';
    echo '<button class="new-tab-button" onclick="openInNewTab(\'' . $imageName . '\')">Open in new tab</button>';
    echo '</li>';
    echo '</ul>';
    echo '</li>';
}

echo '</ul>';
echo '</div>';
?>

<script src="/script.js"></script>

</body>
</html>

