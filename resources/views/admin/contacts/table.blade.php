@if ($contacts->isEmpty())
    <tr>
        <td colspan="5" class="text-center">Không có liên hệ nào</td>
    </tr>
@else
    @foreach ($contacts as $contact)
        <tr>
           
            <td>{{ $contact->name }}</td>
       
            <td>
               {{ $contact->phone}}
            </td>
            <td>
               {{ $contact->email}}
            </td>
            <td>
                <button class="btn btn-sm toggle-status {{ $contact->status ? 'btn-success' : 'btn-danger' }}" data-id="{{ $contact->id }}">
                    {{ $contact->status ? 'Đã xem' : 'Chưa xem' }}
                </button>
                
            </td>
            
            <td>{{ $contact->created_at->diffForHumans() }}</td>
         

            <td class="d-flex gap-2">
                

                <button class="btn view-detail btn-outline-info" data-name="{{ $contact->name }}" data-phone="{{$contact->phone}}" data-email="{{$contact->email}}"
                    data-created="{{ $contact->created_at }}" data-content="{{ $contact->description }}"
                  >
                    <i class="bi bi-eye"></i>
                </button>
            </td>
        </tr>
    @endforeach
    <div class="modal fade" id="bannerDetailModal" tabindex="-1" aria-labelledby="bannerDetailModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="bannerDetailModalLabel">Chi Tiết Liên hệ</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Đóng"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Tên:</strong> <span id="bannerName"></span></p>
                    <p><strong>Số điện:</strong> <span id="bannersdt"></span></p>
                    <p><strong>Email:</strong> <span id="bannerEmail"></span></p>
                    <p><strong>Ngày tạo:</strong> <span id="bannerCreated"></span></p>
                    <p><strong>Nội dung:</strong></p>
                    <div id="bannerContent" class="mb-3"></div>
                   
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
                    const phone = this.getAttribute('data-phone');
                    const email = this.getAttribute('data-email');
    
                    // Hiển thị dữ liệu trong modal
                    document.getElementById('bannerName').textContent = name;
                    document.getElementById('bannersdt').textContent = phone;
                    document.getElementById('bannerEmail').textContent = email;
                    document.getElementById('bannerCreated').textContent = created;
                    document.getElementById('bannerContent').innerHTML = content;
               
    
                    // Mở modal
                    const bannerDetailModal = new bootstrap.Modal(document.getElementById('bannerDetailModal'));
                    bannerDetailModal.show();
                });
            });
        });
    </script>
    
@endif
