
function check_del(){
    var bool = confirm("Bạn có chắc là muốn xóa nó !");
    if(bool==true) {
        alert("Thực hiện xóa thành công !");
        return true;
    }
    return false;
}

// check update

// check_insert

function check_insert() {
    // chuoi ho dem va ten
    var strname01 = document.form.firstname.value;
    var strname02 = document.form.lastname.value;
	var regstrname = /\d/;
    // chuoi so dien thoai
    var strphone = document.form.phone.value;
    var reg = /^09([0-9]{8})$/g;// {8}: do dai chuoi so theo sau 09 la 8 so
    var reg01 = /^(016|012|018|019)([0-9]{8})$/g;
    var reg09 = /^09/g;
    var reg01x = /^(016|012|018|019)/g;
    // Ho Dem
    if(strname01=="") {
        strfirstname.innerHTML = "Bạn chưa nhập Họ Đệm !";
        document.form.firstname.focus();
        return false;
    } else if(regstrname.test(strname01)==true) {
		strfirstname.innerHTML = "Chuỗi Họ Đệm không được chứa số.";
        document.form.firstname.focus();
        return false;
	} else {
            strfirstname.innerHTML = "";
    }
    // Tên
    if(strname02=="") {
        strlastname.innerHTML = "Bạn chưa nhập tên!";
        document.form.lastname.focus();
        return false;
    } else if(regstrname.test(strname02)==true) {
		strlastname.innerHTML = "Chuỗi Tên không được chứa số.";
        document.form.lastname.focus();
        return false;
	} else {
            strlastname.innerHTML = "";
    }
    // User khong nhap so dien thoai
    if(strphone==""){
        show.innerHTML = "Bạn chưa nhập số điện thoại !";
        document.form.phone.focus();
        return false;
    } else {
        // neu chuoi nhap vao va bat dau la 09 thi chuoi nay chi co 10 so
        if(strphone.match(reg09)) {
            if(reg.test(strphone)==false){
                show.innerHTML = "Số điện thoại chưa đúng !";
				document.form.phone.focus();
				return false;
            } else {							
                show.innerHTML = "";
            }
        }
        // neu la dau 016|012|018|019 thi chuoi nay se co 11 so 
        else if(strphone.match(reg01x)){
				if(reg01.test(strphone)==false) {
                    show.innerHTML = "Số diện thọai chưa đúng !";
				    document.form.phone.focus();
				    return false;
                } else {
				    show.innerHTML = "";
				}
        } else {
            show.innerHTML = "Số điện thoại chưa đúng !";
            document.form.phone.focus();
            return false;
        }
					
    }// End else
} // end check_insert

/*---------------------------- Tinhluong.html ----------------------------------------*/

// check_luong
function check_luong() {
    // chuoi ngay sinh
    var strborn = document.tinhluong.born.value;
    var regborn = /^(0[1-9]|[12][0-9]|3[01])\/(0[1-9]|1[012])\/(19|20)\d\d$/;
    // nếu người dùng không chọn ngày-tháng-năm
    if(document.tinhluong.date.value=="" ||
        document.tinhluong.month.value=="" ||
        document.tinhluong.year.value=="") {
        alert("Vui lòng chọn Ngày - Tháng - Năm.");
        return false;
    }
    // nếu người dùng không chọn áp dụng cho phòng nào
    if(document.tinhluong.room.value=="") {
        alert("Bạn chưa chọn Áp dụng cho phòng nào.");
        return false;
    }
    // Nếu gười dùng không nhập tên nhân viên
    if(document.tinhluong.name.value=="") {
        alert("Vui lòng nhập tên nhân viên");
        document.tinhluong.name.focus();
        return false;
    }
    // không chọn giới tính
    if(document.tinhluong.GT.value=="") {
        alert("Vui lòng chọn giới tính.");
        return false;
    }
    
    // người dùng chưa nhập ngày sinh
    if(document.tinhluong.born.value=="") {
        alert("Vui lòng nhập ngày sinh.");
        document.tinhluong.born.focus();
        return false;
    }
    if(regborn.test(strborn)==false) {
        alert("Bạn nhập chưa đúng mẫu ngày sinh.");
        document.tinhluong.born.focus();
        return false;
    }
    // người dùng không chọn chức vụ
    if(document.tinhluong.chucvu.value=="") {
        alert("Vui lòng chọn chức vụ.");
        document.tinhluong.chucvu.focus();
        return false;
    }
    // người dùng chưa nhập số công
    if(document.tinhluong.cong.value=="") {
        alert("Vui lòng nhập số công.");
        document.tinhluong.cong.focus();
        return false;
    }
    // người dùng chưa nhập số giờ làm thêm
    if(document.tinhluong.sogio.value=="") {
        alert("Vui lòng nhập số giờ làm thêm.");
        document.tinhluong.sogio.focus();
        return false;
    }
    return true;
}

/*---------------------------- End Tinhluong.html ----------------------------------------*/
// dong ho thoi gian

function thoigian(){
	var times = new Date();
	var ngay = times.getDate();
	var thang = times.getMonth()+1;
	var nam = times.getFullYear();
	var gio = times.getHours();
	var phut = times.getMinutes();
	var giay = times.getSeconds();
	if(ngay<10) ngay += "0";
	if(thang<10) thang += "0";
	if(nam<10) nam += "0";
	if(gio<10) gio += "0";
	if(phut<10) phut += "0";
	if(giay<10) giay += "0";
	date.innerHTML = "Today: "+ngay+"/"+thang+"/"+nam;
	time.innerHTML = "Time: "+gio+":"+phut+":"+giay; 
}
setInterval("thoigian()", 1000);