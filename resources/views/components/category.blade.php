{{--<div>
    It is not the man who has too little, but the man who craves more, that is poor. - Seneca 
</div>--}}
<div class="card my-4">
  <h5 class="card-header">Categories</h5>
  <div class="card-body">
    <div class="row">
      <div class="col-lg-12">
        <ul class="list-unstyled mb-0">
          @foreach($categories as $category)
          <li>
            <a href="#">{{$category->name}}</a>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</div>