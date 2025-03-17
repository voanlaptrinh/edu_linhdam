@extends('admin.index')
@section('content')
    <div class="container">
        <div class="row mb-8">
            <div class="col-md-12">
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-4">
                    <div>
                        <h2>Chính sách</h2>
                        <!-- breacrumb -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Chính sách</li>
                            </ol>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-12 mb-5">
                <div class="card h-100 card-lg">


                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table
                                class="table table-centered table-hover table-borderless mb-0 table-with-checkbox text-nowrap">
                                <thead class="bg-light">
                                    <tr>


                                        <th scope="col">Tên</th>
                                        <th scope="col">Alias</th>
                                        <th scope="col">Thời gian tạo</th>
                                        <th colspan="2"></th>
                                    </tr>
                                </thead>
                                <tbody
                                    @if ($policys->isEmpty()) <tr>
                                        <td colspan="7" class="text-center">Không tìm thấy chính sách nào</td>
                                    </tr>
                                 @else
                                    @foreach ($policys as $itemPolicy)
                                        <tr>
                                           
                                            <td>{{ $itemPolicy->name }}</td>
                                            <td>{{ $itemPolicy->alias }}</td>
                                            <td>{{ $itemPolicy->created_at->diffForHumans() }}</td>

                                            <td class="d-flex gap-2">
                                                <a href="{{ route('policys.edit', $itemPolicy->alias) }}"
                                                    class="btn text-center btn-outline-warning">
                                                    <i class="bi bi-pencil-square "></i>

                                                </a>
                                                <button class="btn me-2 view-detail btn-outline-info" 
                                                        data-name="{{ $itemPolicy->name }}" 
                                                        data-alias="{{ $itemPolicy->alias }}" 
                                                        data-created="{{ $itemPolicy->created_at }}"
                                                        data-content="{{ $itemPolicy->content }}">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                                {{-- <form action="{{ route('news.destroy', $itemNews->id) }}" method="POST"
                                                    style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn"
                                                        onclick="return confirm('Bạn có chắc chắn muốn xóa tin tức này?')"><i
                                                            class="bi bi-trash me-3"></i></button>
                                                </form> --}}


                                            </td>
                                        </tr>
                                    @endforeach @endif
                                    </tbody>
                            </table>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="policyDetailModal" tabindex="-1" aria-labelledby="policyDetailModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="policyDetailModalLabel">Chi Tiết Policy</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Tên:</strong> <span id="detailName"></span></p>
                    <p><strong>Alias:</strong> <span id="detailAlias"></span></p>
                    <p><strong>Ngày Tạo:</strong> <span id="detailCreated"></span></p>
                    <div><strong>Nội Dung:</strong></div>
                    <div id="detailContent"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            // Khi click vào nút xem chi tiết
            $('.view-detail').on('click', function () {
                const name = $(this).data('name');
                const alias = $(this).data('alias');
                const created = $(this).data('created');
                const content = $(this).data('content');
    
                // Đổ dữ liệu vào modal
                $('#detailName').text(name);
                $('#detailAlias').text(alias);
                $('#detailCreated').text(created);
                $('#detailContent').html(content);
    
                // Hiển thị modal
                $('#policyDetailModal').modal('show');
            });
        });
    </script>
@endsection
