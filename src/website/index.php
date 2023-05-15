<!DOCTYPE html>
<html>
<head>
    <title>Useless Random Cat Image</title>
    <style>
        html, body {
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #333;
            color: #fff;
        }

        #image-container {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #image-container img {
            max-width: 100%;
            max-height: 100%;
        }

        #image-source {
            position: fixed;
            bottom: 10px;
            right: 10px;
            font-size: 12px;
            color: #fff;
        }

        #image-source a {
            color: #fff;
        }
    </style>
</head>
<body>
    <div id="image-container">
        <?php
        $imagesPath = 'images/';
        $images = glob($imagesPath . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

        if (!empty($images)) {
            $randomIndex = array_rand($images);
            $randomImage = $images[$randomIndex];
            echo '<img src="' . $randomImage . '" alt="Random Image">';
        } else {
            echo '<p>No images found.</p>';
        }
        ?>
    </div>

    <div id="image-source">
        Images from <a href="https://www.kaggle.com/datasets/crawford/cat-dataset">here</a>
    </div>
</body>
</html>