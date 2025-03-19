<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $status = $request->input('status'); // Nhận giá trị lọc
    
        $contacts = Contact::query()
            ->when($search, function ($query, $search) {
                return $query->where('name', 'like', '%' . $search . '%');
            })
            ->when($status !== null, function ($query) use ($status) {
                return $query->where('status', $status);
            })
            ->orderBy('id', 'desc')
            ->paginate(10);
    
        if ($request->ajax()) {
            return response()->json([
                'table' => view('admin.contacts.table', compact('contacts'))->render(),
                'pagination' => $contacts->links('pagination::bootstrap-4')->toHtml()
            ]);
        }
    
        return view('admin.contacts.index', compact('contacts'));
    }
    public function toggleApproval($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->status = !$contact->status;
        $contact->save();

        return response()->json(['success' => true, 'status' => $contact->status]);
    }
}
