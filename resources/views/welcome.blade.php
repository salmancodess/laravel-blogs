<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Simple Blog Application</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
    <body>
        <div class="container py-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
              <h1>Blog Application</h1>
              <button id="darkModeToggle" class="btn btn-secondary">Dark Mode</button>
            </div>

            <div class="row" id="blogPosts">
              <!-- Blog Card -->
              <div class="col-md-4 mb-4">
                <div class="card h-100">
                  <img src="{{asset(path: 'images/birds.jpg')}}" class="card-img-top" alt="Blog Image">
                  <div class="card-body">
                    <h5 class="card-title">Birds </h5>
                    <p class="card-text">Birds are warm-blooded animals with feathers, wings, and beaks.
                        They lay eggs and most of them can fly using their strong wings.
                        Birds are found all over the world in different shapes and sizes.
                        They eat a variety of foods like seeds, insects, and small animals.
                        Birds are important to nature as they help in pollination and seed spreading</p>
                    <a href="#" class="btn btn-primary">Read More</a>

                  </div>
                </div>
              </div>

              <div class="col-md-4 mb-4">
                <div class="card h-100">
                  <img src="{{asset(path: 'images/dog.jpg')}}" class="card-img-top" alt="Blog Image">
                  <div class="card-body">
                    <h5 class="card-title">Dog</h5>
                    <p class="card-text">A dog is a loyal and friendly animal often kept as a pet. It is known for its intelligence and ability to understand human emotions. Dogs come in many breeds, sizes, and colors. They help people in various ways, such as guarding homes or assisting the blind. Dogs are often called "man's best friend" because of their faithfulness.</p>
                    <a href="#" class="btn btn-primary">Read More</a>


                  </div>
                </div>
              </div>

              <div class="col-md-4 mb-4">
                <div class="card h-100">
                  <img src="{{asset(path: 'images/tree.jpg')}}" class="card-img-top" alt="Blog Image">
                  <div class="card-body">
                    <h5 class="card-title">Trees</h5>
                    <p class="card-text">Trees are essential to life on Earth as they provide oxygen and absorb carbon dioxide. They offer shade, reduce pollution, and help prevent soil erosion. Trees are home to many birds, animals, and insects. They also enhance the beauty of nature and bring peace to the environment. Planting and protecting trees is crucial for a healthy and sustainable future.</p>
                    <a href="#" class="btn btn-primary">Read More</a>


                  </div>
                </div>
              </div>

            </div>
        </div>
          <script src="{{asset('js/main.js')}}"></script>
    </body>
</html>
