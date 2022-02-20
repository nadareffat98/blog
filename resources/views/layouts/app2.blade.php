<form method="post" action="{{route('posts.store')}}" class="mt-5">
  @csrf
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea name="description" class="form-control"></textarea>
  </div>
  <div class="mb-3 ">
    <label class="form-label" for="postCreator">Post Creator</label>
    <select name="postCreator" class="form-control">
        <option value="1">Ahmed</option>
        <option value="2">Mohamed</option>
    </select>
  </div>
  @yield('button here')
  </form>  