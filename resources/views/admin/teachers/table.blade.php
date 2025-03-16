@if ($teachers->isEmpty()) <tr>
    <td colspan="7" class="text-center">Không tìm thấy danh mục nào</td>
</tr>
@else
@foreach ($teachers as $itemTeachers)
    <tr>
        <td>
            <div class="d-flex align-items-center">
                <img src="{{ asset($itemTeachers->avatar) }}" alt=""
                    class="avatar avatar-xs ">

            </div>
        </td>
        <td>{{ $itemTeachers->name }}</td>
        <td>{{ $itemTeachers->email }}</td>
        <td>{{ $itemTeachers->phone }}</td>

       

        <td>{{ $itemTeachers->created_at->diffForHumans() }}</td>

        <td class="d-flex">
           <a href="{{ route('teacher.edit', $itemTeachers->alias) }}" class="btn text-center">
                <i class="bi bi-pencil-square"></i>

            </a>
             <form action="{{ route('teacher.destroy', $itemTeachers->id) }}" method="POST"
                style="display:inline;">
                @csrf
                @method('DELETE')

                <button type="submit" class="btn"
                    onclick="return confirm('Bạn có chắc chắn muốn xóa giáo viên này?')"><i
                        class="bi bi-trash "></i></button>
            </form>
            <a href="{{ route('teacher.detail', $itemTeachers->alias) }}" class="btn text-center">
                <i class="bi bi-eye"></i>

            </a>

        </td>
    </tr>
@endforeach
@endif