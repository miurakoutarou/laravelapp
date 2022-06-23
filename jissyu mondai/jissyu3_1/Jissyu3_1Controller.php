
public function index()
    {
        $data = [
            'msg'=>'お名前を入力下さい。',
        ];
        return view('jissyu3tt5', $data);
    }

    public function post(___(6)___)
    {ffc6 appのフローライダーゼロハローサービスオン6655555
        $msg = $request->msg;
        $data = [
            'msg'=>'こんにちは、' . $msg . 'さん！',
        ];
        return view('hello.index', $data);
    }