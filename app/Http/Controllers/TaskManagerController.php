<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskManagerController extends Controller
{
    public function getId(Request $request)
    {
        $id = $request->id;
    //lấy id của sản phẩm
        return $id;
    }

    public function store($id)
    {
    // lưu trữ id
    }

    public function showAll()
    {
    // hiển thị toàn bộ sp
    }

    public function showDetail($id)
    {
    // hiển thị chi tiết sp
    }

    public function edit($id)
    {
    // sửa sp
    }

    public function update($id)
    {
        // thêm sp
    }

    public function delete($id)
    {
        // xóa sp
    }
}
