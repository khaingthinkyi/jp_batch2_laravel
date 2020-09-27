{{--<div>
     The whole future lies in uncertainty: live immediately. - Seneca
</div>--}}
<div class="card my-4">
  <h5 class="card-header">Departments</h5>
  <div class="card-body">
    <div class="row">
      <div class="col-lg-12">
        <ul class="list-unstyled mb-0">
          @foreach($departments as $department)
          <li>
            <a href="#">{{$department->name}}</a>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</div>