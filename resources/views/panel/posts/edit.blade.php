<x-panel-layout>

<x-slot name='title'>
    - Edit Post
</x-slot>

<div class="container col-6">
<form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">

      @csrf

      <h2 class="text-center my-4">Edit Post</h2>

      <div class="form-outline mb-4 form-floating">
        <input type="text" name="title" id="title" class="form-control" />
        <label class="form-label" for="title">عنوان پست</label>
        @error('name')
          <p style="margin:1rem;"> {{ $message }} </p>
        @enderror
      </div>


      <select class="form-select mb-3" aria-label="Default select example" name="tag" id="tag">
            <option value="">تگ پست</option>
              
              <option value="">2</option>
            

        </select>

        <div class="mb-3">
            <label for="banner" class="form-label">انتخاب بنر پست</label>
            <input class="form-control" type="file" name="banner" id="banner">
        </div>


        <div class="mb-3">
            <label for="post-text" class="form-label">متن پست</label>
            <textarea class="form-control" name="post-text" id="post-text" rows="10"></textarea>
        </div>

      


      <button type="submit" class="btn btn-primary btn-block mb-3 btn-lg">ویرایش پست</button>
    </form>

    </div>

</x-panel-layout>