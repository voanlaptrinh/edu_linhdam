@if ($feelings->isEmpty())
    <tr>
        <td colspan="5" class="text-center">Không có cảm nhận nào</td>
    </tr>
@else
    @foreach ($feelings as $feeling)
        <tr>
            <td>
                <div class="d-flex align-items-center">
                    <img src="{{ asset($feeling->image) }}" alt="" class="avatar avatar-xs ">

                </div>
            </td>
            <td>{{ $feeling->title }}</td>
       
            <td>
               {{ $feeling->rating}}
            </td>
            <td>{{ $feeling->created_at->diffForHumans() }}</td>
         

            <td class="d-flex gap-2">
                {{-- <a href="{{ route('news.edit', $itemNews->alias) }}" class="btn text-center btn-outline-warning">
                    <i class="bi bi-pencil-square "></i>

                </a>
                <form action="{{ route('news.destroy', $itemNews->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-outline-danger"
                        onclick="return confirm('Bạn có chắc chắn muốn xóa tin tức này?')"><i
                            class="bi bi-trash"></i></button>
                </form>

                <a href="{{ route('news.admin.detail', $itemNews->alias) }}" class="btn text-center btn-outline-info">
                    <i class="bi bi-eye "></i>
                </a> --}}
            </td>
        </tr>
    @endforeach
@endif
