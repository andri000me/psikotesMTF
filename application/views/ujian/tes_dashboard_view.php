<div class="container">
	<!-- Content Header (Page header) -->
    <section class="content-header">
    	<h1>
    		SELAMAT DATANG <?php if(!empty($nama)){ echo $nama; } ?>
            <small>di Ujian Online Berbasis Komputer</small>
        </h1>
        <ol class="breadcrumb">
        	<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">dashboard</li>
        </ol>
	</section>

	<!-- Main content -->
    <section class="content">
        <div class="callout callout-info">
            <h4>PERHATIAN!</h4>
            <p>· Saudara akan menghadapi serangkaian tes dengan waktu pengerjaan yang berbeda-beda.<br>
            · Dengan adanya batas waktu pada masing-masing tes, maka perhatikan waktu pengerjaan dan jangan terpaku pada suatu nomor.<br>
            · Silakan Saudara mengerjakan tes ini secara individual, serta tidak menggunakan alat bantu seperti kalkulator, gadget, atau alat bantu lainnya.<br>
            · Pastikan koneksi internet Saudara stabil serta mengerjakan di tempat yang kondusif sehingga hasilnya bisa maksimal.<br>
            · Saudara hanya diperbolehkan mengerjakan satu kali. Ketika Saudara menekan tombol submit tes maka Saudara dianggap telah menyelesaikan tes.</p>
        </div>
        <div class="box box-success box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Daftar Tes</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <table id="table-tes" class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th class="all">Nama Tes</th>
                            <th class="all">Tanggal Maksimal Pengerjaan</th>
                            <th>Waktu Mulai Tes</th>
                            <th>Waktu Selesai Tes</th>
                            <th>Durasi Tes</th>
                            <th>Status</th>
                            <th class="all">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                        </tr>
                    </tbody>
                </table>   
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </section><!-- /.content -->
</div><!-- /.container -->

<script type="text/javascript">
    $(function () {
        $('#table-tes').DataTable({
                  "paging": false,
                  "iDisplayLength":10,
                  "bProcessing": false,
                  "bServerSide": true, 
                  "searching": false,
                  "aoColumns": [
                        {"bSearchable": false, "bSortable": false, "sWidth":"20px"},
                        {"bSearchable": false, "bSortable": false},
                        {"bSearchable": false, "bSortable": false},
                        {"bSearchable": false, "bSortable": false, "sWidth":"130px"},
                        {"bSearchable": false, "bSortable": false, "sWidth":"130px"},
                        {"bSearchable": false, "bSortable": false, "sWidth":"100px"},
                        {"bSearchable": false, "bSortable": false, "sWidth":"100px"},
                        {"bSearchable": false, "bSortable": false, "sWidth":"30px"}],
                  "sAjaxSource": "<?php echo site_url().'/'.$url; ?>/get_datatable/",
                  "autoWidth": false,
                  "responsive": true
         });   
    });
</script>