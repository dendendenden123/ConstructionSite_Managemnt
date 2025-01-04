<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A-Frame Model Upload</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://aframe.io/releases/1.4.2/aframe.min.js"></script>
</head>
<body>
    <a-scene>
        <!-- Add lighting -->
        <a-light type="directional" position="0 5 5" intensity="1"></a-light>
        <a-light type="ambient" intensity="0.5"></a-light>

        <!-- Add the model -->
        <a-entity 
            gltf-model="url({{ asset('/model/sample2.glb')  }})" 
            position="0 1 1" 
            scale="1 1 1" 
            rotation="0 0 0">
        </a-entity>

        <h1>Test</h1>

        <!-- Ground and camera -->
        <a-plane rotation="-90 0 0" width="10" height="10" color="#7BC8A4"></a-plane>
        <a-camera position="0 1.6 0"></a-camera>
    </a-scene>
</body>
</html>
<script>
    $(document).ready(function() {
       console.log("Hello World");
    });
  </script>
