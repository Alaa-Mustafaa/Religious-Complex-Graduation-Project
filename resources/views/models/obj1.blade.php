{{-- <!doctype html>
<html lang="en">
  <head>
    <title>&lt;model-viewer&gt; template</title>
    <meta charset="utf-8">
    <meta name="description" content="&lt;model-viewer&gt; template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" href="{{asset('models/obj1/styles.css')}}" rel="stylesheet"/>
  </head>
  <body>
    <!-- <model-viewer> HTML element -->
    <model-viewer src="object1.glb" ar ar-modes="webxr scene-viewer quick-look" camera-controls tone-mapping="neutral" poster="poster.webp" shadow-intensity="1">
      <div class="progress-bar hide" slot="progress-bar">
          <div class="update-bar"></div>
      </div>
      <button slot="ar-button" id="ar-button">
          View in your space
      </button>
      <div id="ar-prompt">
          <img src="ar_hand_prompt.png">
      </div>
    </model-viewer>  
    <script src="{{asset('models/obj1/script.js')}}"></script>
    <!-- Loads <model-viewer> for browsers: -->
    <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/3.5.0/model-viewer.min.js"></script>
  </body>
</html> --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display GLB Model</title>
    <style>
        body { margin: 0; }
        canvas { display: block; }
    </style>
</head>
<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/loaders/GLTFLoader.js"></script>
    <script>
        let scene, camera, renderer, model;

        function init() {
            // Create the scene
            scene = new THREE.Scene();

            // Create the camera
            camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
            camera.position.set(0, 1, 2);

            // Create the renderer
            renderer = new THREE.WebGLRenderer({ antialias: true });
            renderer.setSize(window.innerWidth, window.innerHeight);
            document.body.appendChild(renderer.domElement);

            // Add a light
            const light = new THREE.DirectionalLight(0xffffff, 1);
            light.position.set(2, 2, 2).normalize();
            scene.add(light);

            // Load the model
            const loader = new THREE.GLTFLoader();
            loader.load('{{ asset("models/obj1/object1.glb") }}', function (gltf) {
                model = gltf.scene;
                scene.add(model);
                animate();
            }, undefined, function (error) {
                console.error(error);
            });
        }

        function animate() {
            requestAnimationFrame(animate);
            if (model) model.rotation.y += 0.01;
            renderer.render(scene, camera);
        }

        window.addEventListener('resize', () => {
            camera.aspect = window.innerWidth / window.innerHeight;
            camera.updateProjectionMatrix();
            renderer.setSize(window.innerWidth, window.innerHeight);
        });

        init();
    </script>
</body>
</html>
