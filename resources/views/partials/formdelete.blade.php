<form
    class="d-inline-block "
  action="{{route('comics.destroy', $comic)}}"
  method="post"
  onclick=" e.preventDefault()"
  onsubmit="return confirm('Sei securo di voler eliminare {{$comic->title}} ?')">
    @csrf
    @method('DELETE')

    <button type="submit" class="btn btn-danger"> <i class="fa-solid fa-trash"></i> </button>
   </form>
