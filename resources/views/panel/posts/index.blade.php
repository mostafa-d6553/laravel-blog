<x-panel-layout>

<x-slot name='title'>
    - Posts
</x-slot>


<div class="container mt-5 text-center">
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">عنوان</th>
      <th scope="col">نام نویسنده</th>
      <th scope="col">متن</th>
      <th scope="col">تاریخ</th>
      <th scope="col">اپراتور</th>
    </tr>
  </thead>

  <tbody>
    
      <tr>
        <th scope="row">1</th>
        <td>2</td>
        <td>3</td>
        <td>4</td>
        <td>6</td>
        
        <a href=""  class="text-white text-decoration-none"><i class="fas fa-trash mx-2"></i></a>
         
        <a href=" {{ route('posts.edit' , 2) }} " class="text-white text-decoration-none"><i class="fas fa-pencil-alt mx-2"></i></a>
        </td>
      </tr>
    

  </tbody>
</table>

<button class="btn btn-primary btn-lg"><a href="{{ route('posts.create') }}" class="text-white text-decoration-none fw-bold">Create Post</a></button>
    </div>

</x-panel-layout>