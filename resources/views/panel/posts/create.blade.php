<x-panel-layout>

<x-slot name='title'>
    - Create Post
</x-slot>

<div class="container col-6">
<form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">

      @csrf

      <h2 class="text-center my-4">Create Post</h2>

      <div class="form-outline mb-4 form-floating">
        <input type="text" name="title" id="title" class="form-control" />
        <label class="form-label" for="title">عنوان پست</label>
        @error('title')
          <p style="margin:1rem;"> {{ $message }} </p>
        @enderror
      </div>

      <div class="form-outline mb-4 form-floating">
        <input type="text" name="categories[]" id="categories" class="form-control" />
        <label class="form-label" for="categories">عنوان دسته بندی</label>
        @error('categories')
          <p style="margin:1rem;"> {{ $message }} </p>
        @enderror
      </div>
      

        

        <div class="mb-3">
            <label for="banner" class="form-label">انتخاب بنر پست</label>
            <input class="form-control" name="banner" type="file" id="banner" accept="image/*">
            @error('banner')
              <p style="margin:1rem;"> {{ $message }} </p>
            @enderror
        </div>


        <div class="mb-3">
            <label for="content" class="form-label">متن پست</label>
            <textarea class="form-control" name="content" rows="10"></textarea>
            @error('content')
              <p style="margin:1rem;"> {{ $message }} </p>
            @enderror
        </div>

      


      <button type="submit" class="btn btn-primary btn-block mb-3 btn-lg">ثبت پست</button>
    </form>

    </div>

    <x-slot name="scripts">
  <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
  <script>
    CKEDITOR.replace('content', {
      language: 'fa',
      filebrowserUploadUrl: '{{ route("editor-upload", ["_token" => csrf_token()]) }}',
      filebrowserUploadMethod: 'form'
    })
  </script>

</x-slot>


</x-panel-layout>