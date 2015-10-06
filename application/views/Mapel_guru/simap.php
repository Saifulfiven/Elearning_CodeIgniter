<head>
<script>
	var masukan=0;
	function tambah(){
		var table = document.getElementById('tambah_siswa');
		var tr	  = document.createElement('tr');
		var td1	  = document.createElement('td');
		var td2	  = document.createElement('td');
		var td3	  = document.createElement('td');
		
			
		var inp1 = document.createElement("td");
			inp1.setAttribute("Align","center");
			inp1.innerHTML = "<div class='control-group'><div class='controls'><select name='id_siswa +masukan'  id='selectError' data-rel='chosen'>"+"<?php foreach ($semua_siswa as $data_kelas_siswa){
							  		echo "<option value='$data_kelas_siswa[id_siswa]'>$data_kelas_siswa[nis]</option>";}?>"+	  
							  		"</select></div></div>";

		
		if (masukan > 0){
			var gambar = document.createElement('img');
			gambar.setAttribute('src','<?php echo base_url()."asset/img/icon-delete.png"?>');
			gambar.onclick = function(){
				hapuscustomer(tr);
			}
			td1.appendChild(gambar);
		}
		
		table.appendChild(tr);
		tr.appendChild(td1);
		tr.appendChild(td2);
		tr.appendChild(td3);
		
		td2.appendChild(inp1);
		
		
		masukan++;
	
	}
	function hapuscustomer(tr){
		tr.parentNode.removeChild(tr);
	}
</script>
</head>
<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon edit"></i><span class="break"></span>Form Kelas</h2>
			<div class="box-icon">
				<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>		
			</div>
		</div>
		<div class="box-content">
			<form class="form-horizontal" method="post" action="<?php echo base_url()."index.php/operasi_daftar/insert_Kelas";?>">
				<fieldset>
			<input type="hidden" name="id_kelas" value="<?php echo $id_kelas; ?>">
				 						
						<table>
						<tbody id="tambah_siswa">
						<tr>
						<a href="javascript:tambah();">Tambah</a><br><br>
						</tr>
											
						
						

						</tbody>

						</table>		
				
				  
				  <div class="form-actions">
					<button type="submit" class="btn btn-primary">Simpan</button>
					<input type="reset" class="btn" value="Batal">
				  </div>
				</fieldset>
			  </form>
		
		</div>
	</div><!--/span-->
			
</div><!--/row-->