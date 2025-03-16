    @if ($products->isEmpty()) 
        <tr><td colspan="7" class="text-center">Không tìm thấy sản phẩm nào</td></tr>
    @else
        @foreach ($products as $product)
            <tr>
              
                <td>{{ $product->title }}</td>
                <td>{{ $product->category->name ?? 'Không có danh mục' }}</td>
                <td>
                    <span class="badge {{ $product->status == 1 ? 'bg-success' : 'bg-danger' }}">
                        {{ $product->status == 1 ? 'Hoạt động' : 'Tạm dừng' }}
                    </span>
                </td>
               
                <td>{{ $product->updated_at->diffForHumans() }}</td>
                <td class="d-flex g-2">
                    <a href="{{ route('products.edit', $product->alias) }}" class="btn text-center btn-outline-warning">
                        <i class="bi bi-pencil-square"></i>
                    </a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn text-center  btn-outline-danger"
                            onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?')">
                            <i class="bi bi-trash"></i>
                        </button>
                    </form>
                    <a href="{{ route('products.detailadmin', $product->alias) }}" class="btn text-center btn-outline-info">
                        <i class="bi bi-eye "></i>
                    </a>
                </td>
            </tr>
        @endforeach
    @endif
