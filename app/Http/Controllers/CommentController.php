<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Post $post)
    {
        // 1. Validasi input
        $request->validate([
            'body' => 'required|min:3',
        ]);

        // 2. Simpan ke database
        Comment::create([
            'body' => $request->body,
            'post_id' => $post->id,
            'user_id' => 1, // Sementara hardcode ID 1 (User kamu), nanti kalau udah ada Auth baru ganti auth()->id()
        ]);

        // 3. Balik lagi ke halaman artikel dengan pesan sukses
        return back()->with('success', 'Komentar berhasil ditambahkan!');
    }

    public function destroy(Comment $comment)
    {
        // Hapus komentar
        $comment->delete();

        // Kembali ke halaman sebelumnya dengan pesan sukses
        return back()->with('success', 'Komentar berhasil dihapus!');
    }
}