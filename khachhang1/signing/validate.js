function kiem_tra(){
    
    //ten
    let kiem_tra_loi = false;
    let ten = document.getElementById('ten').value;
    if(ten.length === 0)
    {
        document.getElementById('loi_ten').innerHTML = 'Tên không được để trống';
        kiem_tra_loi = true;
    }else{
        let regex_ten = /[^a-z0-9A-Z_ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễếệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]/;
        if(regex_ten.test(ten) == false){
            document.getElementById('loi_ten').innerHTML = 'Tên không hợp lệ';
            kiem_tra_loi = true;
        }else{
        document.getElementById('loi_ten').innerHTML = '';
    }
    }
    
    //gioi tinh
    let mang_gioi_tinh = document.getElementsByName('gender');
    let kiem_tra_gioi_tinh = false;

    for(let i = 0; i < mang_gioi_tinh.length; i++){
        if(mang_gioi_tinh[i].checked){
            kiem_tra_gioi_tinh = true;
        }
    }

    if(kiem_tra_gioi_tinh == false){
        document.getElementById('loi_gioi_tinh').innerHTML = 'Giới tính không được để trống';
        kiem_tra_loi = true;
    }else{
        document.getElementById('loi_gioi_tinh').innerHTML = '';
    }
    //email
    let email = document.getElementById('email').value;
    if(email.length === 0)
    {
        document.getElementById('loi_email').innerHTML = 'Email không được để trống';
        kiem_tra_loi = true;
    }else{
        document.getElementById('loi_email').innerHTML = '';
    }

    //mat khau
    let mat_khau = document.getElementById('mat_khau').value;
    if(mat_khau.length === 0)
    {
        document.getElementById('loi_mat_khau').innerHTML = 'Mật khẩu không được để trống';
        kiem_tra_loi = true;
    }else if(mat_khau.length < 8)
    {
        document.getElementById('loi_mat_khau').innerHTML = 'Mật khẩu không được ít hơn 8 ký tự';
        kiem_tra_loi = true;
    }
    else{
        document.getElementById('loi_mat_khau').innerHTML = '';
    }
    // số điện thoại
    let sdt = document.getElementById('phone_number').value;
    if(sdt.length === 0)
    {
        document.getElementById('loi_sdt').innerHTML = 'Số điện thoại không được để trống';
        kiem_tra_loi = true;
    }else{
        document.getElementById('loi_sdt').innerHTML = '';
    }
    
    // địa chỉ
    let dia_chi = document.getElementById('dia_chi').value;
    if(dia_chi.length === 0)
    {
        document.getElementById('loi_dia_chi').innerHTML = 'Địa chỉ không được để trống';
        kiem_tra_loi = true;
    }else{
        document.getElementById('loi_dia_chi').innerHTML = '';
    }
    if(kiem_tra_loi){
        return false;
    }

    }