
@extends('layout.doc')

@section('container')
    
    
<div id="portfolio">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-lg-4 col-sm-6">
                <h2 class="mt-0 text-center">{{$ngaran}}</h2>
                    <a class="portfolio-box d-flex " href="assets/img/portfolio/fullsize/project.jpg" title="Project Name">
                        <img class="img-fluid" src="{{asset('img/portfolio/thumbnails/project.jpg')}}" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Category</div>
                            <div class="project-name">Project </div>
                        </div>
                    </a>
               
            </div>
            
        </div>
    </div>
</div>

@endsection
