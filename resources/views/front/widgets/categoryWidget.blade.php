@isset($categories)
  <div class="col-md-3">
    <ol class="list-group list-group-numbered">
      @foreach ($categories as $category)
             <li class="list-group-item d-flex justify-content-between align-items-start @if(Request::segment(2)==$category->slug) active @endif">
          <div class="ms-2 me-auto">
            <div class="fw-bold">
              <a href="{{route('category',$category->slug)}}"> {{$category->name}}</a>
              
             </div>
           
          </div>
          <span class="badge bg-primary rounded-pill">{{$category->articleCount()}}</span>
        </li>
      @endforeach

     

      </ol>
</div>
@endisset
