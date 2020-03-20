    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- เสริม -->
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>
    <!-- ####################################### -->
    <script>
        $('#dataTable').dataTable({
            //"scrollX": true,
            "oLanguage": {
                sLengthMenu: "แสดง  _MENU_  แถว",
                sSearch: "<span>ค้นหา </span> _INPUT_",
                sInfo: "กำลังแสดง _START_ ถึง _END_ จาก _TOTAL_ แถว", //search
                oPaginate: {
                    sFirst: "First",
                    sLast: "Last",
                    sNext: "ต่อไป",
                    sPrevious: "ก่อนหน้า"
                },
            }
        });

        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip({
                boundary: 'window',
                trigger: 'hover'
            })

        });

        function delfunction(title, text) {

            swal({
                    title: "ลบ" + title + " " + text,

                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-danger",
                    cancelButtonClass: "btn-secondary",
                    confirmButtonText: "ยืนยัน",
                    cancelButtonText: "ยกเลิก",
                    closeOnConfirm: false,
                    closeOnCancel: true
                },
                function(isConfirm) {
                    if (isConfirm) {
                        swal({
                            title: "ลบ" + title + " " + text + " เรียบร้อยแล้ว",
                            type: "success",
                            confirmButtonClass: "btn-danger",
                            confirmButtonText: "ตกลง",
                            closeOnConfirm: false,
                        });
                    } else {

                    }
                });

        }
    </script>