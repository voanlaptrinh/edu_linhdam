@if ($news->isEmpty())
    <tr>
        <td colspan="7" class="text-center">Không tìm thấy danh mục nào</td>
    </tr>
@else
    @foreach ($news as $itemNews)
        <tr>
            <td>
                <div class="d-flex align-items-center">
                    <img src="{{ asset($itemNews->image) }}" alt="" class="avatar avatar-xs ">

                </div>
            </td>
            <td>{{ $itemNews->name }}</td>

            <td>
                @if (!empty($itemNews->tag))
                    @foreach ($itemNews->tag as $item)
                        <span class="badge bg-light-success text-dark-success">{{ $item['value'] }}</span>
                    @endforeach
                @else
                    <span class="text-muted">Không có tag</span>
                @endif
            </td>

            <td>{{ $itemNews->created_at->diffForHumans() }}</td>

            <td class="d-flex">
                <a href="{{ route('news.edit', $itemNews->alias) }}" class="btn text-center">
                    <i class="bi bi-pencil-square"></i>

                </a>
                <form action="{{ route('news.destroy', $itemNews->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn"
                        onclick="return confirm('Bạn có chắc chắn muốn xóa tin tức này?')"><i
                            class="bi bi-trash"></i></button>
                </form>

                <a href="{{ route('news.admin.detail', $itemNews->alias) }}" class="btn text-center">
                    <i class="bi bi-eye me-3"></i>
                </a>
            </td>
        </tr>
    @endforeach
@endif
