<div class="col-md-3">
    <ol class="list-group list-group-numbered">
      @foreach ($categories as $category)
             <li class="list-group-item d-flex justify-content-between align-items-start">
          <div class="ms-2 me-auto">
            <div class="fw-bold">{{$category->name}}</div>
           
          </div>
          <span class="badge bg-primary rounded-pill">14</span>
        </li>
      @endforeach

     

      </ol>
</div>