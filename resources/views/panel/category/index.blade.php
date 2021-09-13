<x-panel-layout>

<x-slot name='title'>
    - Category
</x-slot>

    
<div class="container mt-5 text-center">
<div class="row mx-3">
<table class="table table-dark mx-3 col">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">نام دسته بندی</th>
      <th scope="col">نام لینک</th>
      <th scope="col">زیر مجموعه</th>
      <th scope="col">اپراتور</th>
    </tr>
  </thead>

  <tbody>
      @foreach($categories as $category)
      <tr>
        <th>{{ $category->id }}</th>
        <td>{{ $category->name }}</td>
        <td>{{ $category->slug }}</td>
        <td>{{ $category->parentName() }}</td>
        <td>      
        <a href="{{ route('category.destroy' , $category->id ) }}" onclick="categoryDestroy(event  , '{{ $category->id }}')" class="text-white text-decoration-none"><i class="fas fa-trash mx-2"></i></a>
        <form action="{{ route('category.destroy' , $category->id) }}" method="POST" id="category-{{ $category->id }}-delete">
            @csrf
            @method('delete')

          </form>
        </td>
      </tr>
      @endforeach

  </tbody>

  
</table>

<form class="col-4" action="{{ route('category.store') }}" method="POST">
  @csrf
    <legend class="mb-4">اضافه کردن دسته بندی</legend>

<div class="form-outline mb-4 form-floating">
        <input type="text" name="name" id="cat-name" class="form-control" />
        <label class="form-label" for="cat-name"> نام دسته بندی</label>
</div>
@error('cat_name')
    <p style="margin:1rem;"> {{ $message }} </p>
@enderror

<div class="form-outline mb-4 form-floating">
        <input type="text" name="slug" id="slug" class="form-control" />
        <label class="form-label" for="slug">نام لینک</label>
</div>
@error('slug')
    <p style="margin:1rem;"> {{ $message }} </p>
@enderror

<select class="form-select mb-3" aria-label="Default select example" name="category_id" id="category_id">
            <option value="">نام دسته ی والد</option>
            
            @foreach($parent as $category)
              <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach

</select>

  <button type="submit" class="btn btn-primary">اضافه کردن</button>
</form>


</div>

</div>

    <x-slot name="scripts">
      <script>
          function categoryDestroy(event , id){
            event.preventDefault();
            document.getElementById(`category-${id}-delete`).submit()
          }
      </script>
    </x-slot>

</x-panel-layout>