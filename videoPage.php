<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Page</title>
    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #000;
        }

        .video-container {
            position: relative;
            width: 100%;
            height: 100%;
        }

        video {
            width: 100%;
            height: 100%;
            object-fit: contain;
            /* Ensures the video fills the screen */
        }

        .control-buttons {
            position: absolute;
            margin-top: 20%;
            top: 20px;
            left: 20px;
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            width: calc(100% - 40px);
            /* Leave space on both sides */
        }

        #stopButton,
        #stopAndRedirectButton {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            background-color: #323946;
            color: white;
            border: none;
            border-radius: 5px;
        }

        .icon {
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            color: #0ef;
        }

        .icon:hover {
            color: white;
        }

        #stopAndRedirectButton {
            left: auto;
            right: 20px;
        }

        .control-buttons button:hover {
            background-color: rgba(0, 0, 0, 0.7);
        }

        /* Make sure the buttons are spaced well on mobile */
        @media screen and (max-width: 768px) {

            #stopButton,
            #stopAndRedirectButton {
                font-size: 14px;
                padding: 8px 16px;
                /* Adjust padding for mobile */
            }

            .control-buttons {
                position: absolute;
                margin-top: 140%;
                top: 20px;
                left: 20px;
                z-index: 1000;
                display: flex;
                justify-content: space-between;
                width: calc(100% - 40px);
                /* Leave space on both sides */
            }

            .icon {
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 2rem;
                color: #0ef;
            }

            .icon:hover {
                color: white;
            }

        }

        /* Make the video responsive on mobile */
        @media screen and (max-width: 768px) {
            video {
                object-fit: contain;
                /* Prevent cropping on mobile */
            }
        }
    </style>
</head>

<body>
    <div class="video-container">
        <video id="myVideo" preload="auto">
            <source id="videoSource" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

    <div class="control-buttons">
        <button id="stopButton"><ion-icon name="pause-circle" class="icon"></ion-icon></button>
        <button id="stopAndRedirectButton"><ion-icon name="home" class="icon"></ion-icon></button>
    </div>

    <script>
        const urlParams = new URLSearchParams(window.location.search);
        const videoId = urlParams.get('video');
        const videoElement = document.getElementById('myVideo');
        const videoSource = document.getElementById('videoSource');
        const stopButton = document.getElementById('stopButton');
        const stopAndRedirectButton = document.getElementById('stopAndRedirectButton');

        // Set the correct video source based on the videoId
        switch (videoId) {
            case 'video1':
                videoSource.src = 'img/foodpresentation11.mp4';
                break;
            case 'video2':
                videoSource.src = 'img/shoewheelppt.mp4';
                break;
            case 'video3':
                videoSource.src = 'img/refreshcolddrink.mp4';
                break;
            case 'video4':
                videoSource.src = 'img/microsoftppt.mp4';
                break;
            case 'video5':
                videoSource.src = 'img/mcdonalsvedio29-08.mp4';
                break;
            case 'video6':
                videoSource.src = 'img/dashboardvedio.mp4';
                break;
            default:
                window.location.href = 'index.php'; // Redirect back if no video ID is found
                break;
        }

        // Play the video automatically after the page loads
        window.addEventListener('load', () => {
            videoElement.play();
        });

        // When the video ends, redirect to the starting page
        videoElement.addEventListener('ended', () => {
            window.location.href = 'index.php'; // Redirect back to the starting page
        });

        // Toggle play/pause video button functionality
        stopButton.addEventListener('click', () => {
            if (videoElement.paused) {
                videoElement.play(); // Play the video if it's paused
                stopButton.innerHTML = '<ion-icon name="pause-circle" class="icon"></ion-icon>'; // Change icon to pause
            } else {
                videoElement.pause(); // Pause the video if it's playing
                stopButton.innerHTML = '<ion-icon name="play-circle" class="icon"></ion-icon>'; // Change icon to play
            }
        });

        // Stop video and redirect button functionality
        stopAndRedirectButton.addEventListener('click', () => {
            videoElement.pause(); // Pause the video
            window.location.href = 'index.php'; // Redirect back to the starting page
        });

        // Detect device orientation
        window.addEventListener('orientationchange', function() {
            if (window.orientation === 90 || window.orientation === -90) {
                // Landscape mode
                console.log('Landscape mode');
            } else {
                // Portrait mode
                console.log('Portrait mode');
            }
        });
    </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
</body>

</html>
