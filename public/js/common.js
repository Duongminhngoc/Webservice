function goback() {
    history.back(-1);
}

function ThongBaoXoaNhaCungCap(MaNhaCungCap){
	var confirmBox=confirm("Bạn có muốn xóa không ?");
	if(confirmBox==true){
		window.location="XoaNhaCungCapServlet?MaNhaCungCap="+MaNhaCungCap;
	}
}


function ThongBaoXoaTonKho(MaHangHoa){
	var confirmBox=confirm("Bạn có muốn xóa không ?");
	if(confirmBox==true){
		window.location="XoaTonKhoServlet?MaHangHoa="+MaHangHoa;
		
	}		
}

