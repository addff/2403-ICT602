<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Family Tree: Shahadan Bin Saad</title>
    <link rel="stylesheet" href="/styles.css">
    <link rel="stylesheet" href="/gallery.css">
</head>
<body>
    <a href="/101/halijah_binti_ahmad/">Up</a>
    <div class="family-tree">
        <div class="person">
            <img src="/images/male-grey-icon.png" height="100px" alt="icon">
            <div>Shahadan Bin <a href="/101/saad_bin_man/">Saad</a></div>
        </div>
        <div class="marriage">Married</div>
        <div class="partners">
            <div class="person">
                <img src="/images/female-grey-icon.png" height="100px" alt="icon">
                <div><a href="/102/siti_haslina_binti_hasbullah/">Siti Haslina</a> Binti <a href="/101/hasbullah_bin_abdul_rahman/">Hasbullah</a></div>
                <div class="children">
                    <div class="person"><img src="/images/male-grey-icon.png" height="100px" alt="icon"><div><a href="/102/siti_haslina_binti_hasbullah/shah_muhammad_bin_shahadan/">Shah Muhammad</a></div></div>
                    <div class="person"><img src="/images/female-grey-icon.png" height="100px" alt="icon"><div><a href="/102/siti_haslina_binti_hasbullah/siti_afifah_sufi_binti_shahadan/">Siti Afifah Sufi</a></div></div>
                    <div class="person"><img src="/images/male-grey-icon.png" height="100px" alt="icon"><div><a href="/102/siti_haslina_binti_hasbullah/shah_mifzal_bin_shahadan/">Shah Mifzal</a></div></div>
                    <div class="person"><img src="/images/male-grey-icon.png" height="100px" alt="icon"><div><a href="/102/siti_haslina_binti_hasbullah/shah_muslihuddin_bin_shahadan/">Shah Muslihuddin</a></div></div>
                    <div class="person"><img src="/images/female-grey-icon.png" height="100px" alt="icon"><div><a href="/102/siti_haslina_binti_hasbullah/siti_afifah_surfina_binti_shahadan/">Siti Afifah Surfina</a></div></div>
                    <div class="person"><img src="/images/male-grey-icon.png" height="100px" alt="icon"><div><a href="/102/siti_haslina_binti_hasbullah/shah_abdul_muhaimin_bin_shahadan/">Shah Abdul Muhaimin</a></div></div>
                </div>
            </div>
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

