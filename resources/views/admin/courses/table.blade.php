@if ($courses->isEmpty())
    <tr>
        <td colspan="7" class="text-center">Bản tin khóa học</td>
    </tr>
@else
    @foreach ($courses as $itemNews)
        <tr>
            <td>
                <div class="d-flex align-items-center">
                    <img src="{{ asset($itemNews->image) }}" alt="" class="avatar">

                </div>
            </td>
            <td>{{ $itemNews->name }}</td>
       
            
            <td>{{ $itemNews->created_at->diffForHumans() }}</td>
         

            <td class="d-flex gap-2 pt-5">
                <a href="{{ route('courses.edit', $itemNews->alias) }}" class="btn text-center btn-outline-warning">
                    <i class="bi bi-pencil-square "></i>

                </a>
                <form action="{{ route('courses.destroy', $itemNews->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-outline-danger"
                        onclick="return confirm('Bạn có chắc chắn muốn xóa bản tin này?')"><i
                            class="bi bi-trash"></i></button>
                </form>

                <a href="{{ route('courses.admin.detail', $itemNews->alias) }}" class="btn text-center btn-outline-info">
                    <i class="bi bi-eye "></i>
                </a>
            </td>
        </tr>
    @endforeach
@endif
