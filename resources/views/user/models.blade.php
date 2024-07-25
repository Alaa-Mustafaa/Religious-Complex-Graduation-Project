{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ url('store') }}" method="POST" id="file-upload" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">Model Name</label>
            <div class="col-md-6">
            <div class="row">
                <input id="name" type="name" class="form-control" name="name" required>
            </div>
            </div>
        </div>
      <div class="form-group row">
            <label for="file_type" class="col-md-4 col-form-label text-md-right">File Type</label>
            <div class="col-md-6">
            <div class="row">
              <select class="form-select" aria-label="Default select example" name="file_type" id="file_type">
                  <option value="gltf">GLTF</option>
                  <option value="obj">OBJ</option>
                  <option value="fbx">FBX</option>
              </select>
            </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="file" class="col-md-4 col-form-label text-md-right">Upload Main File</label>
            <div class="col-md-6">
            <div class="row">
                <input type="file" id="main"  class="form-control" name="main"  required>
            </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="file" class="col-md-4 col-form-label text-md-right">Upload Other Files</label>
            <div class="col-md-6">
            <div class="row">
                <input type="file" id="files"  class="form-control" name="files[]"  required multiple>
            </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="preview" class="col-md-4 col-form-label text-md-right">Upload Preview Image</label>
            <div class="col-md-6">
            <div class="row">
                <input type="file" id="preview"  class="form-control" name="preview"  required>
            </div>
            </div>
        </div>
        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="button" class="btn btn-secondary" onclick="window.history.back()">Close</button>
                <button type="submit" class="btn btn-primary" id="product_save_btn">
                    Upload Model
                </button>
            </div>
        </div>
    </form>


<script>
    $(document).ready(function() {
        $('#file-upload').submit(function(e) {
            e.preventDefault();
            let formData = new FormData(this);

            $.ajax({
                type:'POST',
                url: "{{ url('store') }}",
                data: formData,
                contentType: false,
                processData: false,
                success: (response) => {
                    console.log(response);
                    if (response.success) {
                        window.location.href = response.url;
                    }
                },
                error: function(response){
                    alert('Prescription has not been created successfully');
                }
          });
        });
    });

    if(myData['file_type'] == 'fbx'){
          init1();
        }else if(myData['file_type'] == 'obj'){
          init2();
        }
      
      
      function init1() {
            scene = new THREE.Scene();
            scene.background = new THREE.Color(0xdddddd);

            camera = new THREE.PerspectiveCamera(5, window.innerWidth/window.innerHeight, 1, 5000);
            camera.position.z = 1000;

            light = new THREE.HemisphereLight(0xffffff, 0x444444, 1.0);
            light.position.set(0, 1, 0);
            scene.add(light);

            light = new THREE.DirectionalLight(0xffffff, 1.0);
            light.position.set(0, 1, 0);
            scene.add(light);

            renderer = new THREE.WebGLRenderer({antialias:true});
            renderer.setSize(window.innerWidth, window.innerHeight);

            container = document.getElementById( 'canvas' );
            renderer.setSize(container.offsetWidth, 400);
            
            container.appendChild( renderer.domElement );

            controls = new THREE.OrbitControls(camera,  renderer.domElement);
            controls.addEventListener('change', renderer);
            const fbxLoader = new THREE.FBXLoader();
                let text1 = "storage/";
                let result = text1.concat(myData['url']);
                console.log(result);
                fbxLoader.load('{{ asset('storage/') }}'+'/'+myData['url']+'.fbx', (object) => {
                scene.add(object);
                animate();
            });
        }
        function animate(){
            renderer.render(scene,camera);
            requestAnimationFrame(animate);
        }
</script>
</body>
</html> --}}




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload GLB Model</title>
    <link rel="shortcut icon" href="{{ asset('images/logo.jfif') }}" type="image/x-icon">

</head>
<body>
    @include('error')
    <h1>Upload GLB Model</h1>
    <form action="{{ route('upload.handle') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="model" accept=".glb" required>
        <button type="submit">Upload</button>
    </form>
</body>
</html>