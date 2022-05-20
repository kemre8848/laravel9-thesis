@foreach($children as $subcategory)

    @if(count($subcategory->children))
        @include('home.categorytree',['children' => $subcategory->children])
    @else
        <div class="dropdown-menu" aria-labelledby="dropdown-a">
    <a class="dropdown-item" href="{{route('categoryprojects',['id'=>$subcategory->id, 'slug'=>$subcategory->title])}}">{{$subcategory->title}}</a>
    </div>
        @endif
@endforeach
