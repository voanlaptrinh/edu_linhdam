@if ($banners->isEmpty())
    <tr>
        <td colspan="7" class="text-center">Không tìm thấy banner nào</td>
    </tr>
@else
    @foreach ($banners as $banner)
        <tr>

            <td><a href="#" class="text-reset">{{ $banner->name }}</a></td>
            <td>
                {{ $banner->description }}
            </td>
            <td>{{ $banner->created_at->diffForHumans() }}</td>
            <td class="d-flex gap-2">
                <button class="btn view-detail btn-outline-info" data-name="{{ $banner->name }}"
                    data-created="{{ $banner->created_at }}" data-content="{{ $banner->description }}"
                    data-image="{{ $banner->image }}">
                    <i class="bi bi-eye"></i>
                </button>
                <a href="{{ route('banner.edit', $banner->id) }}" class="btn text-center btn-outline-warning">
                    <i class="bi bi-pencil-square "></i>

                </a>
                <form action="{{ route('banner.destroy', $banner->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-outline-danger"
                        onclick="return confirm('Bạn có chắc chắn muốn xóa tin tức này?')"><i
                            class="bi bi-trash"></i></button>
                </form>
                
            </td>
        </tr>
    @endforeach
    <!-- Modal Chi Tiết -->
    <div class="modal fade" id="bannerDetailModal" tabindex="-1" aria-labelledby="bannerDetailModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="bannerDetailModalLabel">Chi Tiết Banner</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Đóng"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Tên:</strong> <span id="bannerName"></span></p>
                    <p><strong>Ngày tạo:</strong> <span id="bannerCreated"></span></p>
                    <p><strong>Nội dung:</strong></p>
                    <div id="bannerContent" class="mb-3"></div>
                    <p><strong>Hình ảnh:</strong></p>
                    <img id="bannerImage" src="" alt="Banner Image" class="img-fluid">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const buttons = document.querySelectorAll('.view-detail');
    
            buttons.forEach(button => {
                button.addEventListener('click', function () {
                    const name = this.getAttribute('data-name');
                    const created = this.getAttribute('data-created');
                    const content = this.getAttribute('data-content');
                    const image = this.getAttribute('data-image');
    
                    // Hiển thị dữ liệu trong modal
                    document.getElementById('bannerName').textContent = name;
                    document.getElementById('bannerCreated').textContent = created;
                    document.getElementById('bannerContent').innerHTML = content;
                    document.getElementById('bannerImage').src = image;
    
                    // Mở modal
                    const bannerDetailModal = new bootstrap.Modal(document.getElementById('bannerDetailModal'));
                    bannerDetailModal.show();
                });
            });
        });
    </script>
    
@endif
